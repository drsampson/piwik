/*
 * Piwik - Web Analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id$
 */
var Piwik,piwik_log,piwik_track;if(!this.Piwik){Piwik=(function(){var c,i={},e=document,d=navigator,g=screen,l=window,f=false,n=[];function m(p){return typeof p!=="undefined"}function h(p,r,q,s){if(p.addEventListener){p.addEventListener(r,q,s);return true}else{if(p.attachEvent){return p.attachEvent("on"+r,q)}}p["on"+r]=q}function k(r,t){var s="",q,p;for(q in i){p=i[q][r];if(typeof p==="function"){s+=p(t)}}return s}function b(p){if(m(c)){var q=new Date();while(q.getTime()<c){q=new Date()}}k("unload")}function o(q){if(!f){f=true;k("load");for(var p=0;p<n.length;p++){n[p]()}}return true}function a(){if(e.addEventListener){h(e,"DOMContentLoaded",function(){e.removeEventListener("DOMContentLoaded",arguments.callee,false);o()})}else{if(e.attachEvent){e.attachEvent("onreadystatechange",function(){if(e.readyState==="complete"){e.detachEvent("onreadystatechange",arguments.callee);
o()}});if(e.documentElement.doScroll&&l==l.top){(function(){if(f){return}try{e.documentElement.doScroll("left")}catch(p){setTimeout(arguments.callee,0);return}o()}())}}}h(l,"load",o,false)}function j(R,B){var D=R||"",aa=B||"",Y="",L="7z|aac|arc|arj|asf|asx|avi|bin|csv|doc|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd||xls|xml|z|zip",z=[l.location.hostname],U=[],w=[],t=[],C=500,O,S="0",v,P={director:["dir","application/x-director",["SWCtl.SWctl.1"],"0",""],flash:["fla","application/x-shockwave-flash",["ShockwaveFlash.ShockwaveFlash.1"],"0",""],pdf:["pdf","application/pdf",["AcroPDF.PDF.1","PDF.PdfCtrl.6","PDF.PdfCtrl.5","PDF.PdfCtrl.1"],"0",""],realplayer:["realp","audio/x-pn-realaudio-plugin",["rmocx.RealPlayer G2 Control.1","RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)"],"0",""],wma:["wma","application/x-mplayer2",["WMPlayer.OCX","MediaPlayer.MediaPlayer.1"],"0",""]},G=false,r=l.encodeURIComponent||escape,X=l.decodeURIComponent||unescape,Z=function(ad){var ag=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,ae={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};
function ab(ah){ag.lastIndex=0;return ag.test(ah)?'"'+ah.replace(ag,function(ai){var aj=ae[ai];return typeof aj==="string"?aj:"\\u"+("0000"+ai.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+ah+'"'}function ac(ah){return ah<10?"0"+ah:ah}function af(al,aj){var ak,ai,ah,am,an=aj[al];if(an===null){return"null"}if(an&&typeof an==="object"&&typeof an.toJSON==="function"){an=an.toJSON(al)}switch(typeof an){case"string":return ab(an);case"number":return isFinite(an)?String(an):"null";case"boolean":case"null":return String(an);case"object":am=[];if(an instanceof Array){for(ak=0;ak<an.length;ak++){am[ak]=af(ak,an)||"null"}ah=am.length===0?"[]":"["+am.join(",")+"]";return ah}if(an instanceof Date){return ab(an.getUTCFullYear()+"-"+ac(an.getUTCMonth()+1)+"-"+ac(an.getUTCDate())+"T"+ac(an.getUTCHours())+":"+ac(an.getUTCMinutes())+":"+ac(an.getUTCSeconds())+"Z")}for(ai in an){ah=af(ai,an);if(ah){am[am.length]=ab(ai)+":"+ah}}ah=am.length===0?"{}":"{"+am.join(",")+"}";return ah}}return af("",{"":ad})},u={};
function K(){var ab=d.userAgent.toLowerCase();return(ab.indexOf("msie")!=-1)&&(ab.indexOf("opera")==-1)&&((ab.indexOf("win")!=-1)||(ab.indexOf("32bit")!=-1))}function y(ag,ae,ac,af,ab,ah){var ad;if(ac){ad=new Date();ad.setTime(ad.getTime()+ac*86400000)}e.cookie=ag+"="+r(ae)+(ac?";expires="+ad.toGMTString():"")+";path="+(af?af:"/")+(ab?";domain="+ab:"")+(ah?";secure":"")}function s(af,ae,ab){var ac=new RegExp("(^|;)[ ]*"+af+"=([^;]*)"+(ae?"(;[ ]*expires=[^;]*)?;[ ]*path="+ae.replace("/","\\/")+"":"")+(ab?";[ ]*domain="+ab+"(;|$)":"")),ad=ac.exec(e.cookie);return ad?X(ad[2]):0}function p(ad,ac){var ab=new Date(),ae=new Image(1,1);c=ab.getTime()+ac;ae.onLoad=function(){};ae.src=ad}function x(){var ae,ad="";function ac(af,ag){if(ad.indexOf(ag)!=-1&&d.mimeTypes[ag].enabledPlugin!==null){P[af][3]="1"}}function ab(af,ag){if(ag!==null&&m(l.ActiveXObject)){for(var ah=0;ah<ag.length;ah++){try{if(new ActiveXObject(ag[ah])){P[af][3]="1";break}}catch(ai){}}}}if(K()){for(ae in P){ab(ae,P[ae][2])}}else{for(ae=0;
ae<d.mimeTypes.length;ae++){ad+=d.mimeTypes[ae].type.toLowerCase()}for(ae in P){ac(ae,P[ae][1])}}}function J(){var ab="";try{ab=top.document.referrer}catch(ad){if(parent){try{ab=parent.document.referrer}catch(ac){ab=""}}}if(ab===""){ab=e.referrer}return ab}function E(){var ab="_pk_testcookie";if(!m(d.cookieEnabled)){y(ab,"1");return s(ab)=="1"?"1":"0"}return d.cookieEnabled?"1":"0"}function I(){var ac,ab,ad;ab=new Date();ad="idsite="+aa+"&url="+r(e.location.href)+"&res="+g.width+"x"+g.height+"&h="+ab.getHours()+"&m="+ab.getMinutes()+"&s="+ab.getSeconds()+"&cookie="+S+"&urlref="+r(v)+"&rand="+Math.random();for(ac in P){ad+="&"+P[ac][0]+"="+P[ac][3]}ad=D+"?"+ad;return ad}function Q(){var ab=I();ab+="&action_name="+r(Y);if(m(O)){ab+="&data="+r(Z(O))}ab+=k("log");p(ab,C)}function W(ab,ae,ad){var ac=I();ac+="&idgoal="+ab;if(m(ae)&&ae!==null){ac+="&revenue="+ae}if(m(ad)){if(ad!==null){ac+="&data="+r(Z(ad))}}else{if(m(O)){ac+="&data="+r(Z(O))}}ac+=k("goal");p(ac,C)}function A(ac,ab,ae){var ad;
ad="idsite="+aa+"&"+ab+"="+r(ac)+"&rand="+Math.random()+"&redirect=0";if(m(ae)){if(ae!==null){ad+="&data="+r(Z(ae))}}else{if(m(O)){ad+="&data="+r(Z(O))}}ad+=k("click");ad=D+"?"+ad;p(ad,C)}function M(ad){var ac,ab,ae;for(ac=0;ac<z.length;ac++){ab=z[ac];if(ad==ab){return true}if(ab.substr(0,2)=="*."){if((ad)==ab.substr(2)){return true}ae=ad.length-ab.length+1;if((ae>0)&&(ad.substr(ae)==ab.substr(1))){return true}}}return false}function N(ab,ad){var ac,ae="(^| )(piwik_"+ad;if(m(ab)){for(ac=0;ac<ab.length;ac++){ae+="|"+ab[ac]}}ae+=")( |$)";return new RegExp(ae)}function q(ad,ac,ab){if(!ab){return"link"}var ae=N(w,"download"),af=N(t,"link"),ag=new RegExp("\\.("+L+")$","i");return af.test(ad)?"link":(ae.test(ad)||ag.test(ac)?"download":0)}function F(ah){var af,ai,aj,ab;if(!m(ah)){ah=l.event}if(m(ah.target)){af=ah.target}else{if(m(ah.srcElement)){af=ah.srcElement}else{return}}while((ai=af.parentNode)&&((aj=af.tagName)!="A"&&aj!="AREA")){af=ai}if(m(af.href)){var ad=af.hostname,ae=ad.toLowerCase(),ag=af.href.replace(ad,ae),ac=/^(javascript|vbscript|jscript|mocha|livescript|ecmascript): */i;
if(!ac.test(ag)){ab=q(af.className,ag,M(ae));if(ab){A(ag,ab)}}}}function V(ab){h(ab,"click",F,false)}function H(){if(!G){G=true;var ac,ab=N(U,"ignore"),ad=e.links;if(ad){for(ac=0;ac<ad.length;ac++){if(!ab.test(ad[ac].className)){V(ad[ac])}}}}}function T(ab,ad){var ac=null;if(typeof ab=="string"&&!m(u[ab])){if(typeof ad=="object"){ac=ad}else{if(typeof ad=="string"){try{eval("hookObj ="+ad)}catch(ae){}}}u[ab]=ac}return ac}v=J();S=E();x();k("run",T);return{hook:u,getHook:function(ab){return u[ab]},setTrackerUrl:function(ab){if(m(ab)){D=ab}},setSiteId:function(ab){if(m(ab)){aa=ab}},setCustomData:function(ab){if(m(ab)){O=ab}},setLinkTrackingTimer:function(ab){if(m(ab)){C=ab}},setDownloadExtensions:function(ab){if(m(ab)){L=ab}},addDownloadExtensions:function(ab){if(m(ab)){L+="|"+ab}},setDomains:function(ab){if(typeof ab=="object"&&ab instanceof Array){z=ab;z[z.length]=l.location.hostname}else{if(typeof ab=="string"){z=[ab,l.location.hostname]}}},setIgnoreClasses:function(ab){if(typeof ab=="object"&&ab instanceof Array){U=ab
}else{if(typeof ab=="string"){U=[ab]}}},setDocumentTitle:function(ab){if(m(ab)){Y=ab}},setDownloadClasses:function(ab){if(typeof ab=="object"&&ab instanceof Array){w=ab}else{if(typeof ab=="string"){w=[ab]}}},setDownloadClass:function(ab){if(typeof ab=="string"){w=[ab]}},setLinkClasses:function(ab){if(typeof ab=="object"&&ab instanceof Array){t=ab}else{if(typeof ab=="string"){t=[ab]}}},setLinkClass:function(ab){if(typeof ab=="string"){t=[ab]}},addListener:function(ab){if(m(ab)){V(ab)}},enableLinkTracking:function(){if(f){H()}else{n[n.length]=function(){H()}}},trackGoal:function(ab,ad,ac){W(ab,ad,ac)},trackLink:function(ac,ab,ad){A(ac,ab,ad)},trackPageView:function(){Q()}}}h(l,"beforeunload",b,false);a();return{addPlugin:function(p,q){i[p]=q},getTracker:function(p,q){return new j(p,q)}}}());piwik_log=function(c,f,a,e){function b(g){try{return eval("piwik_"+g)}catch(h){}return}var d=Piwik.getTracker(a,f);d.setDocumentTitle(c);d.setCustomData(e);d.setLinkTrackingTimer(b("tracker_pause"));
d.setDownloadExtensions(b("download_extensions"));d.setDomains(b("hosts_alias"));d.setIgnoreClasses(b("ignore_classes"));d.trackPageView();if(b("install_tracker")!==false){piwik_track=function(i,j,h,g){d.setSiteId(j);d.setTrackerUrl(h);d.trackLink(i,g)};d.enableLinkTracking()}}};