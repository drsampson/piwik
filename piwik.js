/*
 * Piwik - Web Analytics
 *
 * JavaScript tracking client
 *
 * @link http://piwik.org
 * @source http://dev.piwik.org/trac/browser/trunk/js/piwik.js
 * @license http://www.opensource.org/licenses/bsd-license.php Simplified BSD
 */
if(!this.JSON2){this.JSON2={}}(function(){function d(f){return f<10?"0"+f:f}function l(n,m){var f=Object.prototype.toString.apply(n);if(f==="[object Date]"){return isFinite(n.valueOf())?n.getUTCFullYear()+"-"+d(n.getUTCMonth()+1)+"-"+d(n.getUTCDate())+"T"+d(n.getUTCHours())+":"+d(n.getUTCMinutes())+":"+d(n.getUTCSeconds())+"Z":null}if(f==="[object String]"||f==="[object Number]"||f==="[object Boolean]"){return n.valueOf()}if(f!=="[object Array]"&&typeof n.toJSON==="function"){return n.toJSON(m)}return n}var c=new RegExp("[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]","g"),e='\\\\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]',i=new RegExp("["+e,"g"),j,b,k={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},h;
function a(f){i.lastIndex=0;return i.test(f)?'"'+f.replace(i,function(m){var n=k[m];return typeof n==="string"?n:"\\u"+("0000"+m.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+f+'"'}function g(s,p){var n,m,t,f,q=j,o,r=p[s];if(r&&typeof r==="object"){r=l(r,s)}if(typeof h==="function"){r=h.call(p,s,r)}switch(typeof r){case"string":return a(r);case"number":return isFinite(r)?String(r):"null";case"boolean":case"null":return String(r);case"object":if(!r){return"null"}j+=b;o=[];if(Object.prototype.toString.apply(r)==="[object Array]"){f=r.length;for(n=0;n<f;n+=1){o[n]=g(n,r)||"null"}t=o.length===0?"[]":j?"[\n"+j+o.join(",\n"+j)+"\n"+q+"]":"["+o.join(",")+"]";j=q;return t}if(h&&typeof h==="object"){f=h.length;for(n=0;n<f;n+=1){if(typeof h[n]==="string"){m=h[n];t=g(m,r);if(t){o.push(a(m)+(j?": ":":")+t)}}}}else{for(m in r){if(Object.prototype.hasOwnProperty.call(r,m)){t=g(m,r);if(t){o.push(a(m)+(j?": ":":")+t)}}}}t=o.length===0?"{}":j?"{\n"+j+o.join(",\n"+j)+"\n"+q+"}":"{"+o.join(",")+"}";j=q;
return t}}if(typeof JSON2.stringify!=="function"){JSON2.stringify=function(o,m,n){var f;j="";b="";if(typeof n==="number"){for(f=0;f<n;f+=1){b+=" "}}else{if(typeof n==="string"){b=n}}h=m;if(m&&typeof m!=="function"&&(typeof m!=="object"||typeof m.length!=="number")){throw new Error("JSON.stringify")}return g("",{"":o})}}if(typeof JSON2.parse!=="function"){JSON2.parse=function(o,f){var n;function m(s,r){var q,p,t=s[r];if(t&&typeof t==="object"){for(q in t){if(Object.prototype.hasOwnProperty.call(t,q)){p=m(t,q);if(p!==undefined){t[q]=p}else{delete t[q]}}}}return f.call(s,r,t)}o=String(o);c.lastIndex=0;if(c.test(o)){o=o.replace(c,function(p){return"\\u"+("0000"+p.charCodeAt(0).toString(16)).slice(-4)})}if((new RegExp("^[\\],:{}\\s]*$")).test(o.replace(new RegExp('\\\\(?:["\\\\/bfnrt]|u[0-9a-fA-F]{4})',"g"),"@").replace(new RegExp('"[^"\\\\\n\r]*"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?',"g"),"]").replace(new RegExp("(?:^|:|,)(?:\\s*\\[)+","g"),""))){n=eval("("+o+")");
return typeof f==="function"?m({"":n},""):n}throw new SyntaxError("JSON.parse")}}}());var _paq=_paq||[],Piwik=Piwik||(function(){var m,w={},d=document,j=navigator,v=screen,H=window,h=false,C=[],e=H.encodeURIComponent,I=H.decodeURIComponent,G,D;function b(i){return typeof i!=="undefined"}function a(i){return typeof i==="function"}function n(i){return typeof i==="object"}function q(i){return typeof i==="string"||i instanceof String}function z(J){var i=J.shift();if(q(i)){G[i].apply(G,J)}else{i.apply(G,J)}}function t(L,K,J,i){if(L.addEventListener){L.addEventListener(K,J,i);return true}if(L.attachEvent){return L.attachEvent("on"+K,J)}L["on"+K]=J}function g(K,N){var J="",M,L;for(M in w){if(Object.prototype.hasOwnProperty.call(w,M)){L=w[M][K];if(a(L)){J+=L(N)}}}return J}function B(){var i;g("unload");if(m){do{i=new Date()}while(i.getTime()<m)}}function k(){var J;if(!h){h=true;g("load");for(J=0;J<C.length;J++){C[J]()}}return true}function x(){var J;if(d.addEventListener){t(d,"DOMContentLoaded",function i(){d.removeEventListener("DOMContentLoaded",i,false);
k()})}else{if(d.attachEvent){d.attachEvent("onreadystatechange",function i(){if(d.readyState==="complete"){d.detachEvent("onreadystatechange",i);k()}});if(d.documentElement.doScroll&&H===H.top){(function i(){if(!h){try{d.documentElement.doScroll("left")}catch(K){setTimeout(i,0);return}k()}}())}}}if((new RegExp("WebKit")).test(j.userAgent)){J=setInterval(function(){if(h||/loaded|complete/.test(d.readyState)){clearInterval(J);k()}},10)}t(H,"load",k,false)}function f(){var i="";try{i=H.top.document.referrer}catch(K){if(H.parent){try{i=H.parent.document.referrer}catch(J){i=""}}}if(i===""){i=d.referrer}return i}function A(i){var K=new RegExp("^([a-z]+):"),J=K.exec(i);return J?J[1]:null}function y(i){var K=new RegExp("^(?:(?:https?|ftp):)/*(?:[^@]+@)?([^:/#]+)"),J=K.exec(i);return J?J[1]:i}function p(K,J){var N=new RegExp("^(?:https?|ftp)(?::/*(?:[^?]+)[?])([^#]+)"),M=N.exec(K),L=new RegExp("(?:^|&)"+J+"=([^&]*)"),i=M?L.exec(M[1]):0;return i?I(i[1]):""}function s(O,L,K,N,J,M){var i;if(K){i=new Date();
i.setTime(i.getTime()+K)}d.cookie=O+"="+e(L)+(K?";expires="+i.toGMTString():"")+";path="+(N?N:"/")+(J?";domain="+J:"")+(M?";secure":"")}function F(K){var i=new RegExp("(^|;)[ ]*"+K+"=([^;]*)"),J=i.exec(d.cookie);return J?I(J[2]):0}function r(i){return unescape(e(i))}function u(Z){var L=function(W,i){return(W<<i)|(W>>>(32-i))},aa=function(ag){var af="",ae,W;for(ae=7;ae>=0;ae--){W=(ag>>>(ae*4))&15;af+=W.toString(16)}return af},O,ac,ab,K=[],S=1732584193,Q=4023233417,P=2562383102,N=271733878,M=3285377520,Y,X,V,U,T,ad,J,R=[];Z=r(Z);J=Z.length;for(ac=0;ac<J-3;ac+=4){ab=Z.charCodeAt(ac)<<24|Z.charCodeAt(ac+1)<<16|Z.charCodeAt(ac+2)<<8|Z.charCodeAt(ac+3);R.push(ab)}switch(J&3){case 0:ac=2147483648;break;case 1:ac=Z.charCodeAt(J-1)<<24|8388608;break;case 2:ac=Z.charCodeAt(J-2)<<24|Z.charCodeAt(J-1)<<16|32768;break;case 3:ac=Z.charCodeAt(J-3)<<24|Z.charCodeAt(J-2)<<16|Z.charCodeAt(J-1)<<8|128;break}R.push(ac);while((R.length&15)!==14){R.push(0)}R.push(J>>>29);R.push((J<<3)&4294967295);for(O=0;O<R.length;
O+=16){for(ac=0;ac<16;ac++){K[ac]=R[O+ac]}for(ac=16;ac<=79;ac++){K[ac]=L(K[ac-3]^K[ac-8]^K[ac-14]^K[ac-16],1)}Y=S;X=Q;V=P;U=N;T=M;for(ac=0;ac<=19;ac++){ad=(L(Y,5)+((X&V)|(~X&U))+T+K[ac]+1518500249)&4294967295;T=U;U=V;V=L(X,30);X=Y;Y=ad}for(ac=20;ac<=39;ac++){ad=(L(Y,5)+(X^V^U)+T+K[ac]+1859775393)&4294967295;T=U;U=V;V=L(X,30);X=Y;Y=ad}for(ac=40;ac<=59;ac++){ad=(L(Y,5)+((X&V)|(X&U)|(V&U))+T+K[ac]+2400959708)&4294967295;T=U;U=V;V=L(X,30);X=Y;Y=ad}for(ac=60;ac<=79;ac++){ad=(L(Y,5)+(X^V^U)+T+K[ac]+3395469782)&4294967295;T=U;U=V;V=L(X,30);X=Y;Y=ad}S=(S+Y)&4294967295;Q=(Q+X)&4294967295;P=(P+V)&4294967295;N=(N+U)&4294967295;M=(M+T)&4294967295}ad=aa(S)+aa(Q)+aa(P)+aa(N)+aa(M);return ad.toLowerCase()}function o(K,i,J){if(K==="translate.googleusercontent.com"){if(J===""){J=i}i=p(i,"u");K=y(i)}else{if(K==="cc.bingj.com"||K==="webcache.googleusercontent.com"||K.slice(0,5)==="74.6."){i=d.links[0].href;K=y(i)}}return[K,i,J]}function l(J){var i=J.length;if(J.charAt(--i)==="."){J=J.slice(0,i)}if(J.slice(0,2)==="*."){J=J.slice(1)
}return J}function E(aD,aB){var ao=o(d.domain,H.location.href,f()),aa=l(ao[0]),W=ao[1],aE=ao[2],L="GET",ad=aD||"",aX=aB||"",aP,aW=d.title,aj="7z|aac|ar[cj]|as[fx]|avi|bin|csv|deb|dmg|doc|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|ms[ip]|od[bfgpst]|og[gv]|pdf|phps|png|ppt|qtm?|ra[mr]?|rpm|sea|sit|tar|t?bz2?|tgz|torrent|txt|wav|wm[av]|wpd||xls|xml|z|zip",aF=[aa],P=[],aG=[],aL=[],ac=500,K,am,an,az,aH="_pk_",S,aC,M,aw,aY=63072000000,ag=1800000,ab=15768000000,aU=d.location.protocol==="https",aM=false,U=100,aJ=5,aq={},av=false,T=false,Z,aT,at,aO=u,aA,al;function aQ(aZ){var a0;if(an){a0=new RegExp("#.*");return aZ.replace(a0,"")}return aZ}function ai(a1,aZ){var a2=A(aZ),a0;if(a2){return aZ}if(aZ.slice(0,1)==="/"){return A(a1)+"://"+y(a1)+aZ}a1=aQ(a1);if((a0=a1.indexOf("?"))>=0){a1=a1.slice(0,a0)}if((a0=a1.lastIndexOf("/"))!==a1.length-1){a1=a1.slice(0,a0+1)}return a1+aZ}function au(a2){var a0,aZ,a1;for(a0=0;a0<aF.length;a0++){aZ=l(aF[a0].toLowerCase());if(a2===aZ){return true}if(aZ.slice(0,1)==="."){if(a2===aZ.slice(1)){return true
}a1=a2.length-aZ.length;if((a1>0)&&(a2.slice(a1)===aZ)){return true}}}return false}function i(aZ){var a0=new Image(1,1);a0.onLoad=function(){};a0.src=ad+(ad.indexOf("?")<0?"?":"&")+aZ}function Y(aZ){try{var a1=H.XMLHttpRequest?new H.XMLHttpRequest():H.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):null;a1.open("POST",ad,true);a1.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");a1.send(aZ)}catch(a0){i(aZ)}}function aS(a1,a0){var aZ=new Date();if(!M){if(L==="POST"||a1.length>2048){Y(a1)}else{i(a1)}m=aZ.getTime()+a0}}function Q(aZ){return aH+aZ+"."+aX+"."+aA}function ay(){var aZ=Q("testcookie");if(!b(j.cookieEnabled)){s(aZ,"1");return F(aZ)==="1"?"1":"0"}return j.cookieEnabled?"1":"0"}function ak(){aA=aO((S||aa)+(aC||"/")).slice(0,4)}function X(){var a0=Q("cvar"),aZ=F(a0);if(aZ.length){aZ=JSON2.parse(aZ);if(n(aZ)){return aZ}}return{}}function aI(){if(aM===false){aM=X()}}function R(aZ){var a0=new Date();Z=a0.getTime()}function N(a3,a0,aZ,a2,a1){s(Q("id"),a3+"."+a0+"."+aZ+"."+a2+"."+a1,aY,aC,S,aU)
}function O(){var a0=new Date(),aZ=Math.round(a0.getTime()/1000),a2=F(Q("id")),a1;if(a2){a1=a2.split(".");a1.unshift("0")}else{if(!al){al=aO((j.userAgent||"")+(j.platform||"")+JSON2.stringify(aq)+aZ).slice(0,16)}a1=["1",al,aZ,0,aZ,""]}return a1}function aK(){var aZ=F(Q("ref"));if(aZ.length){try{aZ=JSON2.parse(aZ);if(n(aZ)){return aZ}}catch(a0){}}return["","",0,""]}function ap(a1,bm,bn){var bk,a0=new Date(),a7=Math.round(a0.getTime()/1000),bp,bl,a3,bd,bh,a6,a4,bj,a2=1024,bq,ba,bg=aM,bc=Q("id"),a8=Q("ses"),a9=Q("ref"),bs=Q("cvar"),be=O(),bb=F(a8),bi=aK(),bo=aP||W,br=["piwik_campaign","utm_campaign"],bf=["piwik_kwd","utm_term"],a5,aZ;if(M){s(bc,"",-1,aC,S);s(a8,"",-1,aC,S);s(bs,"",-1,aC,S);s(a9,"",-1,aC,S);return""}bp=be[0];bl=be[1];bd=be[2];a3=be[3];bh=be[4];a6=be[5];a5=bi[0];aZ=bi[1];a4=bi[2];bj=bi[3];if(!bb){a3++;a6=bh;if(!aw||!a5.length){for(bk in br){if(Object.prototype.hasOwnProperty.call(br,bk)){a5=p(bo,br[bk]);if(a5.length){break}}}for(bk in bf){if(Object.prototype.hasOwnProperty.call(bf,bk)){aZ=p(bo,bf[bk]);
if(aZ.length){break}}}}bq=y(aE);ba=bj.length?y(bj):"";if(bq.length&&!au(bq)&&(!aw||!ba.length||au(ba))){bj=aE}if(bj.length||a5.length){a4=a7;bi=[a5,aZ,a4,aQ(bj.slice(0,a2))];s(a9,JSON2.stringify(bi),ab,aC,S,aU)}}a1+="&idsite="+aX+"&rec=1&rand="+Math.random()+"&h="+a0.getHours()+"&m="+a0.getMinutes()+"&s="+a0.getSeconds()+"&url="+e(aQ(bo))+"&urlref="+e(aQ(aE))+"&_id="+bl+"&_idts="+bd+"&_idvc="+a3+"&_idn="+bp+"&_rcn="+e(a5)+"&_rck="+e(aZ)+"&_refts="+a4+"&_viewts="+a6+"&_ref="+e(aQ(bj.slice(0,a2)));for(bk in aq){if(Object.prototype.hasOwnProperty.call(aq,bk)){a1+="&"+bk+"="+aq[bk]}}if(bm){a1+="&data="+e(JSON2.stringify(bm))}else{if(az){a1+="&data="+e(JSON2.stringify(az))}}if(aM){a1+="&_cvar="+e(JSON2.stringify(aM));for(bk in bg){if(Object.prototype.hasOwnProperty.call(bg,bk)){if(aM[bk][0]===""||aM[bk][1]===""){delete aM[bk]}}}s(bs,JSON2.stringify(aM),ag,aC,S,aU)}N(bl,bd,a3,a7,a6);s(a8,"*",ag,aC,S,aU);a1+=g(bn);return a1}function J(a2,a3){var aZ=new Date(),a1=ap("action_name="+e(a2||aW),a3,"log");
aS(a1,ac);if(K&&am&&!T){T=true;t(d,"click",R);t(d,"mouseup",R);t(d,"mousedown",R);t(d,"mousemove",R);t(d,"mousewheel",R);t(H,"DOMMouseScroll",R);t(H,"scroll",R);t(d,"keypress",R);t(d,"keydown",R);t(d,"keyup",R);t(H,"resize",R);t(H,"focus",R);t(H,"blur",R);Z=aZ.getTime();setTimeout(function a0(){var a4=new Date(),a5;if((Z+am)>a4.getTime()){if(K<a4.getTime()){a5=ap("ping=1",a3,"ping");aS(a5,ac)}setTimeout(a0,am)}},am)}}function aR(aZ,a2,a1){var a0=ap("idgoal="+aZ+(a2?"&revenue="+a2:""),a1,"goal");aS(a0,ac)}function ah(a0,aZ,a2){var a1=ap(aZ+"="+e(aQ(a0)),a2,"link");aS(a1,ac)}function ax(a1,a0){var a2,aZ="(^| )(piwik[_-]"+a0;if(a1){for(a2=0;a2<a1.length;a2++){aZ+="|"+a1[a2]}}aZ+=")( |$)";return new RegExp(aZ)}function aV(a2,aZ,a3){if(!a3){return"link"}var a1=ax(aG,"download"),a0=ax(aL,"link"),a4=new RegExp("\\.("+aj+")([?&#]|$)","i");return a0.test(a2)?"link":(a1.test(a2)||a4.test(aZ)?"download":0)}function V(a4){var a2,a0,aZ;while(!!(a2=a4.parentNode)&&((a0=a4.tagName)!=="A"&&a0!=="AREA")){a4=a2
}if(b(a4.href)){var a5=a4.hostname||y(a4.href),a6=a5.toLowerCase(),a1=a4.href.replace(a5,a6),a3=new RegExp("^(javascript|vbscript|jscript|mocha|livescript|ecmascript):","i");if(!a3.test(a1)){aZ=aV(a4.className,a1,au(a6));if(aZ){ah(a1,aZ)}}}}function ae(aZ){var a0,a1;aZ=aZ||H.event;a0=aZ.which||aZ.button;a1=aZ.target||aZ.srcElement;if(aZ.type==="click"){if(a1){V(a1)}}else{if(aZ.type==="mousedown"){if((a0===1||a0===2)&&a1){aT=a0;at=a1}else{aT=at=null}}else{if(aZ.type==="mouseup"){if(a0===aT&&a1===at){V(a1)}aT=at=null}}}}function aN(a0,aZ){if(aZ){t(a0,"mouseup",ae,false);t(a0,"mousedown",ae,false)}else{t(a0,"click",ae,false)}}function ar(a0){if(!av){av=true;var a1,aZ=ax(P,"ignore"),a2=d.links;if(a2){for(a1=0;a1<a2.length;a1++){if(!aZ.test(a2[a1].className)){aN(a2[a1],a0)}}}}}function af(){var aZ,a0,a1={pdf:"application/pdf",qt:"video/quicktime",realp:"audio/x-pn-realaudio-plugin",wma:"application/x-mplayer2",dir:"application/x-director",fla:"application/x-shockwave-flash",java:"application/x-java-vm",gears:"application/x-googlegears",ag:"application/x-silverlight"};
if(j.mimeTypes&&j.mimeTypes.length){for(aZ in a1){if(Object.prototype.hasOwnProperty.call(a1,aZ)){a0=j.mimeTypes[a1[aZ]];aq[aZ]=(a0&&a0.enabledPlugin)?"1":"0"}}}if(typeof navigator.javaEnabled!=="unknown"&&b(j.javaEnabled)&&j.javaEnabled()){aq.java="1"}if(a(H.GearsFactory)){aq.gears="1"}aq.res=v.width+"x"+v.height;aq.cookie=ay()}af();ak();return{getVisitorId:function(){return(O())[1]},getVisitorInfo:function(){return O()},getAttributionInfo:function(){return aK()},getAttributionCampaignName:function(){return aK()[0]},getAttributionCampaignKeyword:function(){return aK()[1]},getAttributionReferrerTimestamp:function(){return aK()[2]},getAttributionReferrerUrl:function(){return aK()[3]},setTrackerUrl:function(aZ){ad=aZ},setSiteId:function(aZ){aX=aZ},setCustomData:function(aZ,a0){if(n(aZ)){az=aZ}else{if(!az){az=[]}az[aZ]=a0}},getCustomData:function(){return az},setCustomVariable:function(a0,aZ,a1){aI();if(a0>0&&a0<=aJ){aM[a0]=[aZ.slice(0,U),a1.slice(0,U)]}},getCustomVariable:function(a0){var aZ;
aI();aZ=aM[a0];if(aZ&&aZ[0]===""){return}return aM[a0]},deleteCustomVariable:function(aZ){if(this.getCustomVariable(aZ)){this.setCustomVariable(aZ,"","")}},setLinkTrackingTimer:function(aZ){ac=aZ},setDownloadExtensions:function(aZ){aj=aZ},addDownloadExtensions:function(aZ){aj+="|"+aZ},setDomains:function(aZ){aF=q(aZ)?[aZ]:aZ;aF.push(aa)},setIgnoreClasses:function(aZ){P=q(aZ)?[aZ]:aZ},setRequestMethod:function(aZ){L=aZ||"GET"},setReferrerUrl:function(aZ){aE=aZ},setCustomUrl:function(aZ){aP=ai(W,aZ)},setDocumentTitle:function(aZ){aW=aZ},setDownloadClasses:function(aZ){aG=q(aZ)?[aZ]:aZ},setLinkClasses:function(aZ){aL=q(aZ)?[aZ]:aZ},discardHashTag:function(aZ){an=aZ},setCookieNamePrefix:function(aZ){aH=aZ;aM=X()},setCookieDomain:function(aZ){S=l(aZ);ak()},setCookiePath:function(aZ){aC=aZ;ak()},setVisitorCookieTimeout:function(aZ){aY=aZ*1000},setSessionCookieTimeout:function(aZ){ag=aZ*1000},setReferralCookieTimeout:function(aZ){ab=aZ*1000},setConversionAttributionFirstReferrer:function(aZ){aw=aZ
},setDoNotTrack:function(aZ){M=aZ&&j.doNotTrack},addListener:function(a0,aZ){aN(a0,aZ)},enableLinkTracking:function(aZ){if(h){ar(aZ)}else{C.push(function(){ar(aZ)})}},setHeartBeatTimer:function(a1,a0){var aZ=new Date();K=aZ.getTime()+a1*1000;am=a0*1000},killFrame:function(){if(H.location!==H.top.location){H.top.location=H.location}},redirectFile:function(aZ){if(H.location.protocol==="file:"){H.location=aZ}},trackGoal:function(aZ,a1,a0){aR(aZ,a1,a0)},trackLink:function(a0,aZ,a1){ah(a0,aZ,a1)},trackPageView:function(aZ,a0){J(aZ,a0)}}}function c(){return{push:z}}t(H,"beforeunload",B,false);x();G=new E();for(D=0;D<_paq.length;D++){z(_paq[D])}_paq=new c();return{addPlugin:function(i,J){w[i]=J},getTracker:function(i,J){return new E(i,J)},getAsyncTracker:function(){return G}}}()),piwik_track,piwik_log=function(b,f,d,g){function a(h){try{return eval("piwik_"+h)}catch(i){}return}var c,e=Piwik.getTracker(d,f);e.setDocumentTitle(b);e.setCustomData(g);if(!!(c=a("tracker_pause"))){e.setLinkTrackingTimer(c)
}if(!!(c=a("download_extensions"))){e.setDownloadExtensions(c)}if(!!(c=a("hosts_alias"))){e.setDomains(c)}if(!!(c=a("ignore_classes"))){e.setIgnoreClasses(c)}e.trackPageView();if((a("install_tracker"))){piwik_track=function(i,k,j,h){e.setSiteId(k);e.setTrackerUrl(j);e.trackLink(i,h)};e.enableLinkTracking()}};