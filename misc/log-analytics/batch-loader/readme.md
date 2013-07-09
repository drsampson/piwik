# Welcome to the piwik Batch_loader.py wiki!

## About Piwik Batch Loader

Piwik Batch Loader is a python script that works in conjunction with the piwik import_logs.py script.

The purpose of Batch Loader is to leverage the great work of import_logs.py and allow for automation and fine tuned configurations used for importing log files. One use case might be the regular importing of logs that are not rotated daily. For example, suppose you have a log file rotated monthly, but you want to import it hourly (eg web services). This is slightly different than the recommended approach using log_import alone. Batch loader supports this use case.

**Configuration file:** Batch loader uses a configuration file similar to AWStats to manage profiles. Each profile is a combination of specific settings such as Log Format, Log-file name formatting and exclusion list settings. Batch loader will read a single configuration file and for each profile process the associated logs for each piwik ID site.

**SQLite DB:** Batch Loader also uses a sqlite Database to manage the --skip command line option for import_logs.py. In essence, the first time the script is run the total number of lines of the log are counted and stored in the DB. Each subsequent run of the script will use the last total lines to act as the skip value and a new total lines value is calculated. This allows for a single log file to be processed multiple times without double counting activities within the log.

**Historical Loading** Unlike AWStats, batch_loader used with import_logs will allow a user to load historical logs without needing to reprocess recent logs.

## Dependencies:
In order to use this script you need to fulfil the following dependencies
* Python scripting language 2.6 (http://www.python.org/)
* piwik import_logs.py (https://github.com/piwik/piwik/tree/master/misc/log-analytics)
* installed and operational instance of Piwik (http://piwik.org/download-piwik/)

## Configurable Options
As of the first release of Batch Loader, the following options are configurable through the config file
* --token-auth
* --exclude-path-from
* --url
* --config
* --log-hostname
* --idsite
* --log-format-regex (use value of 'None' instead of leaving empty if required)
* --log-format-name (use value of 'None' instead of leaving empty if required)

## Getting Started
1. Setup GIT client on your computer (eg. Ubuntu Linux): $ sudo apt-get install git 
2. Create a directory to pull the git project into (change [username] to your own): mkdir /home/[username]/dev/
3. Change into the new directory. eg.: cd /home/dsampson/dev
4. Clone the project (a new sub directory will be created): git clone https://github.com/drsampson/piwik.git
 **OR**
5. Alternatively, download using GIT Zip Archive: https://github.com/drsampson/piwik/archive/master.zip
6. Explode the archive in an appropriate location

The main guts of this project is located the batch_loader home directory: ./piwik/misc/log-analytics/batch

## Initial Setup
7. Copy the file batch.cfg.example to batch.cfg located in Batch_loader home: ./batch/batch.cfg
8. Edit the file batch.cfg. Each line in the config file batch.cfg is a name:value pair
9. Copy and paste the section [example profile] and call it [profile 1]
10. Fill out each name:value pair for your first profile
11. If listing files/directories to exclude create the file ./piwik/misc/log-analytics/batch/exclude/profile1.exclude (same rules apply for --exclude-path-from command line option)
NOTE: if no excludes are created, a default empty profile0.exclude file will be used, thus no excludes will be used.
12. Create a profile and exclude file for each piwik site id required
