#!/usr/bin/env python

"""This module is to extend the functionality of import_log.py for non standard
 log rotation and other specific customizations"""



import site
import sys
import ConfigParser
import os
import sqlite3
import subprocess

from optparse import OptionParser
from datetime import date

if __name__ == '__main__' and __package__ is None:
    __package__ = "loganalytics.batch"
   
Configuration="1"

year = str(date.today().year)
year2 = str(date.today().year)[2:]
month = str(date.today().month)
# ensure month is two digits
if len(month) == 1:
    month = "0" + month
day = str(date.today().day)
#day = str("02")
# ensure day is two digits
if len(day) == 1:
    day = "0" + day



def main():
    config = get_config()
    setup_db(config.get("general","batchDbDir"))
    update_db(config)
    process_logs()

def process_logs():
    """This function will control the processing of the log files"""
    config = get_config()
    # ./import_logs.py --url=piwik.example.com /path/to/access.log
    cmd = config.get("general", "piwikMisc") + "/log-analytics/import_logs.py"
    urlBase = config.get("general","piwikUrl")
    conf = config.get("general", "piwikConfig")
    # Repeat for each section in the config file
    for s in config.sections():
        # Test for sections with "profile" in the name"
        if s.find("profile"):
            pass
        else:
            # do something with each section with 'profile' in the name
            # Grab option value pairs and create variables for insertion
            name = config.get(s, "name")
            idsite = config.get(s, "idsite")
            sourceUrl = config.get(s, "sourceUrl")
            logFile = config.get(s, "logFile")
            logFormatRegex =""
            profile = s
            
            # Build a path to grab exclude file from
            # check to see if a path can be built and then exists
            excludePathFrom = (config.get("general", "excludeDir") + "/" + 
                               s.replace(" ","") + ".exclude")
            if os.path.exists(excludePathFrom):
                pass
            else:
                # if the exclude file does not exist, 
                #then use the generic empty profile0 (zero)
                excludePathFrom = (config.get("general", "excludeDir")+ 
                                   "/profile0.exclude")
            # print some output
            print("-----")
            print(s)
            print("-----")
            print("Name: " + name)
            print("")
            # some profiles may have multiple log files to process
            # Grab them one at a time and send to build_cmd() function
            for log in logFile.split(","):
                # grad value for lines to skip processing from
                logFile =(log.strip().replace("%YYYY",year).
                          replace("%YY", year2).replace("%MM", month).
                          replace("%DD", day))
                # test to see if logFile exists
                if os.path.exists(logFile):
                    print("Logfile: " + logFile)
                    skip = get_skip(s, logFile)
                    lines = count_lines(s, logFile)
                    print("Lines skipped:" + str(skip))
                    print("Lines counted:" + str(lines))
                    print("Lines processed: " + str(lines - skip))
                    build_cmd(profile, cmd, urlBase, idsite, logFile, 
                             excludePathFrom, skip, conf)
                # pass on this log file if it does not exist. 
                # This allows for a clean fail for missing log files
                else:
                    print("Skipped log File: " + logFile)
                    
def build_cmd(profile, cmd, urlBase, idsite, 
             logFile, excludePathFrom, skip, conf):
    config=get_config()
    """ This function will create a custom URL and submit it to the 
    command line to trigger the log loading script. it will also 
    Build the command line call"""            
    
    logFormatName = config.get(profile, "logformatname")
    logFormatRegex = config.get(profile, "logformatregex")
    #paramToken = "--token-auth=8beb3ef154e073f225bc2607e31d2bf1"
    paramToken = "--token-auth=" + config.get("general", "token")
    paramSkip = "--skip=" + str(skip)
    paramExclude = "--exclude-path-from=" + excludePathFrom
    paramUrl = "--url=" + urlBase
    paramConf = "--config=" + conf
    if logFormatName == "None":
        if logFormatRegex == "None":
            paramLogFormat =""
            print("no log format")
        else:
            paramLogFormat = ("--log-format-regex="
                            +config.get(profile, "logformatregex"))
            print("log format by regex")
    else:
        paramLogFormat = "--log-format-name="+config.get(profile, "logformatname")
        print("log format by name")
        
    paramLogHost= "--log-hostname=" + config.get(profile, "loghostname") 
    paramSiteId = "--idsite=" + idsite
    
    
    cmdln = (cmd + " " + paramSkip + " " + paramLogHost + " " + paramUrl + 
            " " + paramConf + " " + paramExclude + " " + paramToken + 
            " " + paramSiteId + " " + paramLogFormat +  " "  + logFile)
    
    print("Command: " + cmd)
    print("command line call: " + cmdln)
    # add --dry-run param for testing
    subprocess.call([cmdln], shell=True)

    
def get_skip(profile, logFile):
    """Get the value of lines to skip"""
    # grab the value of the last line count from the sqlite db
    # Test to see if logfile has more lines than last count
    #get info from config file
    config = get_config()
    dbDir = config.get("general","batchDbDir")
    idsite = config.get(profile, "idsite")
    db = dbDir + "/piwik.db"
    conn = sqlite3.connect(db)
    c = conn.cursor()
    lf = (str(logFile),)
    c.execute('Select last_line from skip where log_file=?',lf)
    lines = c.fetchone()
    if lines[0] == None:
        skip = 0
        #print("skipping last lines: " + str(skip))
    else:
        skip = lines[0] 
        #print("skipping last lines: " + str(skip))
    conn.close()
    # if logfile has less lines than last skip, then assume new log file
    return skip

    
def count_lines(profile, logFile):
    """This function will count the number of lines in a log file"""
    #get info from config file
    config = get_config()
    dbDir = config.get("general","batchDbDir")
    idsite = config.get(profile, "idsite")
    db = dbDir + "/piwik.db"
    # count the lines in a log file
    count = sum(1 for line in open(logFile))
    #prepare row information
    row = (count, logFile)
    lf = (logFile,)
    # write the value to the sqlite DB
    conn = sqlite3.connect(db)
    c = conn.cursor()
    # update 'last_line' with value of tot_lines from the last run
    c.execute("UPDATE skip SET last_line=tot_lines where log_file=?", lf)
    conn.commit()
    c.execute("SELECT last_line from skip where log_file=?", lf)
    lastLine = c.fetchone()
    # Test the value of lastLine. if no value then None and overide, 
    # otherwise an integer and set
    if lastLine[0] == None:
        lastLine = 0
    else:
        lastLine = lastLine[0] 
    # update 'tot_lines' with new value
    c.execute("UPDATE skip SET tot_lines=? where log_file=?", row)
    conn.commit()
    # confirm info was written
    c.execute("select tot_lines from skip where log_file=?",lf)
    result = c.fetchone()
    #print("counted lines: " + str(count))
    #print("count result: " + str(result[0]))
    # check to see if the value in DB equals the current value
    if result[0] == count:
        print("count lines db update success")
    else:
        print("count lines db update failed")

    diff = count - lastLine
    #print("new count: " + str(count))
    #print("Lines Processed: " + str(diff))
    conn.close()
    # print the result
    #print(row)
    #print("Profile: " + profile)
    #print("Count Lines for " + logFile + ": " + str(count) )
    return count
    
    
def setup_db(dbDir):
    """This function will setup the sqlite DB used to manage various 
    things like line counts"""
    db = dbDir + "/piwik.db"
    # check to see if it exists
    if os.path.exists(db):
        print("DB Exists. Moving on.")
        pass
    else:
        print("DB Does not exist and will be created")
        # read content from SQL file to created DB
        sqlFile = open(dbDir + "/piwikDbCreate.sql", "r")
        sql = sqlFile.read()
        print(sql)
        conn = sqlite3.connect(db)
        c = conn.cursor()
        for s in sql.split(";"):
            c.execute(s)
        print("Executed SQL")
    

def output-log():
	print("Outputting log")

def get_options():
	print("Getting Arguments")
	parser = OptionParser()
	parser.add_option('-c','--config', 
	                  dest="config", 
	                  help="Name of Configuration file")
	parser.add_option('-p','--profile', 
	                  dest="profile", 
	                  help="Profile name to process")
	parser.add_option('-i','--idsite', 
	                  dest="indsite", 
	                  help="Piwik idSite profile number")

	(options, args) = parser.parse_args()
	print("Your arguments are: ", args)
	print("your options are: ", options)

"""class Configuration(Configuration):
    "Extends Configuration Class from import_logs"
    def __init__(self):
        pass
"""

def install():
	print("Installing Scrip")

def update_db(config):
    """Update the sqlite DB with latest information from config"""
    print("updating DB with new config values")
    dbDir = config.get("general","batchDbDir")
    db = dbDir + "/piwik.db"
    for s in config.sections():
        # Test for sections with "profile" in the name"
        if s.find("profile"):
            pass
        else:
            #print(s)
            profile = s       
            idsite = config.get(s,"idsite")
            logList = config.get(s,"logfile")
            #prepare DB
            conn = sqlite3.connect(db)
            c = conn.cursor()
            for log in logList.split(","):
                logFile =(log.strip().replace("%YYYY",year).
                          replace("%YY", year2).
                          replace("%MM", month).
                          replace("%DD", day))
                lf = (logFile, )
                #prepare row information
                row = (profile, idsite, logFile)
                #print("log file: " + logFile)
                #print("lf: " + str(lf))
                #print("row: " + str(row))
                # check to see if row exists in DB
                c.execute("select exists (select * from skip where log_file=?)", lf)
                # capture return status of above execute command. if (1,) 
                # then exists, otherwise it does not
                rowStat = c.fetchone()
                if rowStat[0] == 1:
                    print("logfile " + logFile + " exists")
                    pass
                else:
                    print("Log File " + logFile + " Does not Exist")
                    # write the value to the sqlite DB if the row does not exist
                    try:
                        print("Trying to enter logfile in DB")
                        c.execute("INSERT INTO skip ('profile','site_id','log_file') VALUES (?,?,?)", row)
                        conn.commit()
                        print("count lines db success")
                    except:
                        print("count lines db failed")
                        pass
            conn.close()
    
    
    
    
def update_log_db():
    """ Update the sqlite log Database with results"""
    pass

def get_config():
    """Read the configuration file"""
    config = ConfigParser.ConfigParser()
    config.readfp(open('batch.cfg'))
    return config
    


if __name__=="__main__":
	"""try:
	    config=Configuration()
	    
	except KeyboardInterrupt:
	    pass
	"""
	main() 

	    
