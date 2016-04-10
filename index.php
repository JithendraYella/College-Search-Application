<html lang="en"><head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="XexyC4L1w7iwDpplB904pWaTNTVewrjLSloIZheu2ks" name="google-site-verification">

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta content="True" name="HandheldFriendly">
  <meta content="320" name="MobileOptimized">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  
  <script type="text/javascript" src="https://bam.nr-data.net/1/9f6fcef5e7?a=8349766&amp;sa=1&amp;pl=1460190437610&amp;v=768.2acc9fa&amp;t=Unnamed%20Transaction&amp;be=525&amp;fe=1046&amp;dc=998&amp;f=%5B%22err%22,%22xhr%22,%22stn%22%5D&amp;perf=%7B%22timing%22:%7B%22of%22:1460190437610,%22n%22:0,%22dl%22:494,%22di%22:1521,%22ds%22:1522,%22de%22:1527,%22dc%22:1570,%22l%22:1570,%22le%22:1573,%22f%22:3,%22dn%22:4,%22dne%22:270,%22c%22:270,%22ce%22:270,%22rq%22:333,%22rp%22:357,%22rpe%22:493%7D,%22navigation%22:%7B%7D%7D&amp;jsonp=NREUM.setToken"></script><script src="https://js-agent.newrelic.com/nr-768.min.js"></script><script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">
  window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o&lt;n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&amp;&amp;t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f&gt;d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&amp;&amp;console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&amp;&amp;"function"==typeof console.log&amp;&amp;(i.console=!0,-1!==n.indexOf("dev")&amp;&amp;(i.dev=!0),-1!==n.indexOf("nr_dev")&amp;&amp;(i.nrDev=!0))}catch(a){}i.nrDev&amp;&amp;r.on("internal-error",function(t){e(t.stack)}),i.dev&amp;&amp;r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&amp;&amp;(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:22,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,t(5),window.onerror=e;try{throw new Error}catch(f){"stack"in f&amp;&amp;(t(1),t(2),"addEventListener"in window&amp;&amp;t(3),window.XMLHttpRequest&amp;&amp;XMLHttpRequest.prototype&amp;&amp;XMLHttpRequest.prototype.addEventListener&amp;&amp;window.XMLHttpRequest&amp;&amp;XMLHttpRequest.prototype&amp;&amp;XMLHttpRequest.prototype.addEventListener&amp;&amp;!/CriOS/.test(navigator.userAgent)&amp;&amp;t(4),s=!0)}i.on("fn-start",function(){s&amp;&amp;(c+=1)}),i.on("fn-err",function(t,e,r){s&amp;&amp;(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&amp;&amp;!this.thrown&amp;&amp;c&gt;0&amp;&amp;(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:9,2:8,3:6,4:10,5:3,6:23,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t){function e(){}if(window.performance&amp;&amp;window.performance.timing&amp;&amp;window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(1),i=t(2);t("loader").features.stn=!0,t(3);var a=Event;n.on("fn-start",function(t){var e=t[0];e instanceof a&amp;&amp;(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof a&amp;&amp;r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),i.on("fn-start",function(){this.bstStart=Date.now()}),i.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&amp;&amp;(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:9,2:8,3:7,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],6:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=t("ee").create(),i=t(1)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&amp;&amp;!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&amp;&amp;n(s);for(var c=XMLHttpRequest.prototype;c&amp;&amp;!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&amp;&amp;n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&amp;&amp;n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t,e){function n(){return s}if(t[1]){var r=t[1];if("function"==typeof r){var s=a(r,"nr@wrapped",function(){return i(r,"fn-",n,r.name||"anonymous")});this.wrapped=t[1]=s,o.emit("initEventContext",[t,e],this.wrapped)}else"function"==typeof r.handleEvent&amp;&amp;i.inPlace(r,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&amp;&amp;(t[1]=e)})},{1:24,ee:"QJf3ax",gos:"7eSDFh"}],7:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState","replaceState"],"-")},{1:24,ee:"QJf3ax"}],8:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:24,ee:"QJf3ax"}],9:[function(t,e){function n(t,e,n){t[0]=i(t[0],"fn-",null,n)}function r(t,e,n){function r(){return a}this.ctx={};var a={"nr@context":this.ctx};o.emit("initTimerContext",[t,n],a),t[0]=i(t[0],"fn-",r,n)}var o=t("ee").create(),i=t(1)(o);e.exports=o,i.inPlace(window,["setTimeout","setImmediate"],"setTimer-"),i.inPlace(window,["setInterval"],"setInterval-"),i.inPlace(window,["clearTimeout","clearImmediate"],"clearTimeout-"),o.on("setInterval-start",n),o.on("setTimer-start",r)},{1:24,ee:"QJf3ax"}],10:[function(t,e){function n(){f.inPlace(this,p,"fn-",o)}function r(t,e){f.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").create(),s=t(1),c=t(2),f=c(a),u=c(s),d=window.XMLHttpRequest,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=a,window.XMLHttpRequest=function(t){var e=new d(t);try{a.emit("new-xhr",[],e),e.hasOwnProperty("addEventListener")&amp;&amp;u.inPlace(e,["addEventListener","removeEventListener"],"-",o),e.addEventListener("readystatechange",n,!1)}catch(r){try{a.emit("internal-error",[r])}catch(i){}}return e},i(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{1:6,2:24,ee:"QJf3ax"}],11:[function(t){function e(t){var e=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c&gt;i;i++)t.removeEventListener(s[i],this.listener,!1);if(!e.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=n(f);if(u&amp;&amp;(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&amp;&amp;(e.cat=d.split(", ").pop())}}else e.status=0;r.cbTime=this.cbTime,o("xhr",[e,r,this.startTime])}}}function n(t){if("string"==typeof t&amp;&amp;t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&amp;&amp;t instanceof ArrayBuffer&amp;&amp;t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&amp;&amp;t instanceof Blob&amp;&amp;t.size)return t.size;if("undefined"!=typeof FormData&amp;&amp;t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&amp;&amp;XMLHttpRequest.prototype&amp;&amp;XMLHttpRequest.prototype.addEventListener&amp;&amp;!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1),u=window.XMLHttpRequest;t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=e,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&amp;&amp;"xpid"in NREUM.loader_config&amp;&amp;this.sameOrigin&amp;&amp;e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,e){var r=this.metrics,o=t[0],i=this;if(r&amp;&amp;o){var f=n(o);f&amp;&amp;(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&amp;&amp;(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&amp;&amp;(i.onloadCalled||"function"!=typeof e.onload))&amp;&amp;i.end(e)}catch(n){try{a.emit("internal-error",[n])}catch(r){}}};for(var u=0;c&gt;u;u++)e.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&amp;&amp;"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&amp;&amp;!this.xhrGuids[n]&amp;&amp;(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&amp;&amp;this.xhrGuids[n]&amp;&amp;(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof u&amp;&amp;"load"===t[0]&amp;&amp;a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof u&amp;&amp;"load"===t[0]&amp;&amp;a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof u&amp;&amp;("onload"===n&amp;&amp;(this.onload=!0),("load"===(t[0]&amp;&amp;t[0].type)||this.onload)&amp;&amp;(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&amp;&amp;a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:12,3:10,4:6,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],12:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&amp;&amp;o[1]&amp;&amp;(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&amp;&amp;"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&amp;&amp;(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&amp;&amp;e.port===n.port&amp;&amp;e.protocol===n.protocol,r}},{}],13:[function(t,e){function n(t){return function(){r(t,[(new Date).getTime()].concat(i(arguments)))}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&amp;&amp;(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(t,e){window.NREUM[e]=n("api-"+e)}),e.exports=window.NREUM},{1:22,2:23,handle:"D5DuLP"}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&amp;&amp;Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):void(r.q&amp;&amp;(r.q[t]||(r.q[t]=[]),r.q[t].push(e)))}var r=t("ee").create();e.exports=n,n.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&amp;&amp;"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info,e=f.getElementsByTagName("script")[0];if(t&amp;&amp;t.licenseKey&amp;&amp;t.applicationID&amp;&amp;e){s(d,function(e,n){e in t||(t[e]=n)});var n="https"===u.split(":")[0]||t.sslForHttp;p.proto=n?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=p.proto+t.agent,e.parentNode.insertBefore(r,e)}}function r(){"complete"===f.readyState&amp;&amp;o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=window,f=c.document;t(2);var u=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-768.min.js"},p=e.exports={offset:i(),origin:u,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),c.addEventListener("load",n,!1)):(f.attachEvent("onreadystatechange",r),c.attachEvent("onload",n)),a("mark",["firstbyte",i()])},{1:22,2:13,handle:"D5DuLP"}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],22:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&amp;&amp;(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],23:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&amp;&amp;(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0&gt;o?0:o);++r&lt;o;)i[r]=t[e+r];return i}e.exports=n},{}],24:[function(t,e){function n(t){return!(t&amp;&amp;"function"==typeof t&amp;&amp;t.apply&amp;&amp;!t[i])}var r=t("ee"),o=t(1),i="nr@original",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&amp;&amp;r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=t,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c&lt;r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&amp;&amp;Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&amp;&amp;(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:23,ee:"QJf3ax"}]},{},["G9z0Bl",4,11,5]);
  ;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"9f6fcef5e7",applicationID:'8349766',sa:1,agent:"js-agent.newrelic.com/nr-768.min.js"}
  </script>
  

  <!-- Twitter and OpenGraph data
  ================================================== -->
  <!-- type -->
  <meta content="website" property="og:type">

  <!-- title -->
  
  <title>College Search Application</title>
  

  <!-- Favicons
  ================================================== -->
  <link href="/img/favicon.ico" type="image/x-icon" rel="icon">
  <link sizes="16x16" href="/img/favicon-16x16.png" type="image/png" rel="icon">
  <link sizes="32x32" href="/img/favicon-32x32.png" type="image/png" rel="icon">

  <!-- Styles
  ================================================== -->
  
  <link href="css/styles.css" rel="stylesheet">
  

  

  <!-- Scripts
  ================================================== -->
  
  <script src="js/picc.js"></script>
  

  <!-- JavaScript configuration with site variables -->
    <script>
  picc.BASE_URL = '';
  picc.SITE_BRANCH = 'master';

  
  picc.API.url = 'https://api.data.gov/ed/collegescorecard/v1/';
  picc.API.key = 'Xxf2NKtwfcXUd8K2hqawnlur6c0YY93xsNFwq0Dy';
  

  /*
   * This is a dictionary for the various "special designation"
   * columns. The race/ethnicity ones are all nested under the
   * `minority_serving` property, whereas the `women_only` and
   * `men_only` are top-level properties of each school API response
   * object.
   */
  picc.SPECIAL_DESIGNATIONS = ({"women_only":"Women-Only","men_only":"Men-Only","aanipi":"Asian American and Native American Pacific Islander-Serving Institution","annh":"Alaska Native and Native Hawaiian-Serving Institution","hispanic":"Hispanic-Serving Institution","historically_black":"Historically Black College and University","nant":"Native American Non-Tribal Institution","predominantly_black":"Predominantly Black Institution","tribal":"Tribal College and University"});

  /*
   * The names of programs by API sub-field key, e.g.
   * 'language': 'Foreign Languages, Literatures, and Linguistics'
   */
  picc.PROGRAM_NAMES = {
  
    'agriculture': 'Agriculture, Agriculture Operations, and Related Sciences',
    'architecture': 'Architecture and Related Services',
    'ethnic_cultural_gender': 'Area, Ethnic, Cultural, Gender, and Group Studies',
    'biological': 'Biological and Biomedical Sciences',
    'business_marketing': 'Business, Management, Marketing, and Related Support Services',
    'communication': 'Communication, Journalism, and Related Programs',
    'communications_technology': 'Communications Technologies/Technicians and Support Services',
    'computer': 'Computer and Information Sciences and Support Services',
    'construction': 'Construction Trades',
    'education': 'Education',
    'engineering': 'Engineering',
    'engineering_technology': 'Engineering Technologies and Engineering-Related Fields',
    'english': 'English Language and Literature/Letters',
    'family_consumer_science': 'Family and Consumer Sciences/Human Sciences',
    'language': 'Foreign Languages, Literatures, and Linguistics',
    'health': 'Health Professions and Related Programs',
    'history': 'History',
    'security_law_enforcement': 'Homeland Security, Law Enforcement, Firefighting and Related Protective Services',
    'legal': 'Legal Professions and Studies',
    'humanities': 'Liberal Arts and Sciences, General Studies and Humanities',
    'library': 'Library Science',
    'mathematics': 'Mathematics and Statistics',
    'mechanic_repair_technology': 'Mechanic and Repair Technologies/Technicians',
    'military': 'Military Technologies and Applied Sciences',
    'multidiscipline': 'Multi/Interdisciplinary Studies',
    'resources': 'Natural Resources and Conservation',
    'parks_recreation_fitness': 'Parks, Recreation, Leisure, and Fitness Studies',
    'personal_culinary': 'Personal and Culinary Services',
    'philosophy_religious': 'Philosophy and Religious Studies',
    'physical_science': 'Physical Sciences',
    'precision_production': 'Precision Production',
    'psychology': 'Psychology',
    'public_administration_social_service': 'Public Administration and Social Service Professions',
    'science_technology': 'Science Technologies/Technicians',
    'social_science': 'Social Sciences',
    'theology_religious_vocation': 'Theology and Religious Vocations',
    'transportation': 'Transportation and Materials Moving',
    'visual_performing': 'Visual and Performing Arts',
  };

  // map religious affiliation ids to their labels
  picc.RELIGIOUS_AFFILIATIONS_BY_NUMBER = {
  
    '51': 'African Methodist Episcopal', 
    '24': 'African Methodist Episcopal Zion Church', 
    '52': 'American Baptist', 
    '22': 'American Evangelical Lutheran Church', 
    '53': 'American Lutheran', 
    '27': 'Assemblies of God Church', 
    '54': 'Baptist', 
    '28': 'Brethren Church', 
    '34': 'Christ and Missionary Alliance Church', 
    '61': 'Christian Church (Disciples of Christ)', 
    '48': 'Christian Churches and Churches of Christ', 
    '55': 'Christian Methodist Episcopal', 
    '35': 'Christian Reformed Church', 
    '58': 'Church of Brethren', 
    '57': 'Church of God', 
    '59': 'Church of the Nazarene', 
    '74': 'Churches of Christ', 
    '60': 'Cumberland Presbyterian', 
    '101': 'Ecumenical Christian', 
    '50': 'Episcopal Church, Reformed', 
    '102': 'Evangelical Christian', 
    '36': 'Evangelical Congregational Church', 
    '37': 'Evangelical Covenant Church of America', 
    '38': 'Evangelical Free Church of America', 
    '39': 'Evangelical Lutheran Church', 
    '64': 'Free Methodist', 
    '41': 'Free Will Baptist Church', 
    '65': 'Friends', 
    '91': 'Greek Orthodox', 
    '42': 'Interdenominational', 
    '40': 'International United Pentecostal Church', 
    '80': 'Jewish', 
    '94': 'Latter Day Saints (Mormon Church)', 
    '68': 'Lutheran Church - Missouri Synod', 
    '67': 'Lutheran Church in America', 
    '43': 'Mennonite Brethren Church', 
    '69': 'Mennonite Church', 
    '87': 'Missionary Church Inc', 
    '44': 'Moravian Church', 
    '78': 'Multiple Protestant Denomination', 
    '45': 'North American Baptist', 
    '100': 'Original Free Will Baptist', 
    '79': 'Other Protestant', 
    '47': 'Pentecostal Holiness Church', 
    '103': 'Presbyterian', 
    '66': 'Presbyterian Church (USA)', 
    '73': 'Protestant Episcopal', 
    '77': 'Protestant, not specified', 
    '49': 'Reformed Church in America', 
    '81': 'Reformed Presbyterian Church', 
    '30': 'Roman Catholic', 
    '92': 'Russian Orthodox', 
    '95': 'Seventh Day Adventists', 
    '75': 'Southern Baptist', 
    '97': 'The Presbyterian Church in America', 
    '88': 'Undenominational', 
    '93': 'Unitarian Universalist', 
    '84': 'United Brethren Church', 
    '76': 'United Church of Christ', 
    '71': 'United Methodist', 
    '89': 'Wesleyan', 
    '33': 'Wisconsin Evangelical Lutheran Synod', 
    '99': 'Other (none of the above)', 
  };
  </script>



  

</head>

  <body data-env="master" class="">
    <header>

  <div class="banner">

    <div>

      <a target="_blank" href="https://www.ed.gov/"><span class="ed-logo"></span> DBMS Project Group 22 - Tarun,Siva,Jithendra,Pragna</a>

    </div>

  </div>

  <div class="title">

    <div>

      <h1><a href="/">College Search Application</a></h1>

      <nav>
        <ul>
        </ul>
      </nav>

    </div>

  </div>

</header>


    <!--[if lt IE 10]>
    <div class="compat-message">
      <div class="container">
        <h1>We&rsquo;re sorry. The browser version you are using is not
          supported.<br>Please update your browser to the latest version.</h1>
      </div>
    </div>
    <![endif]-->

    <main>
      <!-- background image -->
<div class="home-splash"></div>

<!-- search and -->
<!-- where to start -->
<section class="search_form">

  <form method="GET" action="/search/" autocomplete="false" is="search-form" id="search-form">

    <input type="hidden" name="under_investigation">

    <div class="container search-form-intro">

      <legend>Find Colleges</legend>
      <h1 class="large_heading">Find Colleges</h1>
      <p>Compare colleges now</p>

    </div>

    

  <fieldset>
    <legend>Programs</legend>

    <aria-accordion class="container" id="school-degree" aria-expanded="true">

      <h1 class="search_category">
        <button aria-controls="major-content" aria-expanded="true" type="button" tabindex="0">
          Program
        </button>
      </h1>
      <div class="accordion-div" aria-hidden="false" id="major-content">

        <label for="major">Choose a program
          <select name="major" id="major">
            <option selected="" value="">Any</option>
            
            <option value="agriculture">Agriculture, Agriculture Operations, and Related Sciences</option>
            
            <option value="architecture">Architecture and Related Services</option>
            
            <option value="ethnic_cultural_gender">Area, Ethnic, Cultural, Gender, and Group Studies</option>
            
            <option value="biological">Biological and Biomedical Sciences</option>
            
            <option value="business_marketing">Business, Management, Marketing, and Related Support Services</option>
            
            <option value="communication">Communication, Journalism, and Related Programs</option>
            
            <option value="communications_technology">Communications Technologies/Technicians and Support Services</option>
            
            <option value="computer">Computer and Information Sciences and Support Services</option>
            
            <option value="construction">Construction Trades</option>
            
            <option value="education">Education</option>
            
            <option value="engineering">Engineering</option>
            
            <option value="engineering_technology">Engineering Technologies and Engineering-Related Fields</option>
            
            <option value="english">English Language and Literature/Letters</option>
            
            <option value="family_consumer_science">Family and Consumer Sciences/Human Sciences</option>
            
            <option value="language">Foreign Languages, Literatures, and Linguistics</option>
            
            <option value="health">Health Professions and Related Programs</option>
            
            <option value="history">History</option>
            
            <option value="security_law_enforcement">Homeland Security, Law Enforcement, Firefighting and Related Protective Services</option>
            
            <option value="legal">Legal Professions and Studies</option>
            
            <option value="humanities">Liberal Arts and Sciences, General Studies and Humanities</option>
            
            <option value="library">Library Science</option>
            
            <option value="mathematics">Mathematics and Statistics</option>
            
            <option value="mechanic_repair_technology">Mechanic and Repair Technologies/Technicians</option>
            
            <option value="military">Military Technologies and Applied Sciences</option>
            
            <option value="multidiscipline">Multi/Interdisciplinary Studies</option>
            
            <option value="resources">Natural Resources and Conservation</option>
            
            <option value="parks_recreation_fitness">Parks, Recreation, Leisure, and Fitness Studies</option>
            
            <option value="personal_culinary">Personal and Culinary Services</option>
            
            <option value="philosophy_religious">Philosophy and Religious Studies</option>
            
            <option value="physical_science">Physical Sciences</option>
            
            <option value="precision_production">Precision Production</option>
            
            <option value="psychology">Psychology</option>
            
            <option value="public_administration_social_service">Public Administration and Social Service Professions</option>
            
            <option value="science_technology">Science Technologies/Technicians</option>
            
            <option value="social_science">Social Sciences</option>
            
            <option value="theology_religious_vocation">Theology and Religious Vocations</option>
            
            <option value="transportation">Transportation and Materials Moving</option>
            
            <option value="visual_performing">Visual and Performing Arts</option>
            
          </select>
        </label>

      </div>

      <input type="submit" tabindex="-1" class="sr-only" value="Submit">

    </aria-accordion>

  </fieldset>

  <fieldset>
    <legend>Location</legend>

    <aria-accordion class="container" id="school-location" aria-expanded="true">

      <h1 class="search_category">
        <button aria-controls="location-content" aria-expanded="true" type="button" tabindex="0">
          Location
        </button>
      </h1>

      <div class="accordion-div" aria-hidden="false" id="location-content">

        <div class="input-add group_inline">

          <div id="label-select-state" class="label">
            Select a state
          </div>

          <multi-select><select name="state" class="select-state" aria-labelledby="label-select-state" multiple="multiple" style="display: none;" aria-hidden="true">
                
                
                <option value="AL">Alabama</option>
                
                <option value="AK">Alaska</option>
                
                <option value="AS">American Samoa</option>
                
                <option value="AZ">Arizona</option>
                
                <option value="AR">Arkansas</option>
                
                <option value="CA">California</option>
                
                <option value="CO">Colorado</option>
                
                <option value="CT">Connecticut</option>
                
                <option value="DE">Delaware</option>
                
                <option value="DC">District of Columbia</option>
                
                <option value="FL">Florida</option>
                
                <option value="GA">Georgia</option>
                
                <option value="GU">Guam</option>
                
                <option value="HI">Hawaii</option>
                
                <option value="ID">Idaho</option>
                
                <option value="IL">Illinois</option>
                
                <option value="IN">Indiana</option>
                
                <option value="IA">Iowa</option>
                
                <option value="KS">Kansas</option>
                
                <option value="KY">Kentucky</option>
                
                <option value="LA">Louisiana</option>
                
                <option value="ME">Maine</option>
                
                <option value="MD">Maryland</option>
                
                <option value="MA">Massachusetts</option>
                
                <option value="MI">Michigan</option>
                
                <option value="MN">Minnesota</option>
                
                <option value="MS">Mississippi</option>
                
                <option value="MO">Missouri</option>
                
                <option value="MT">Montana</option>
                
                <option value="NE">Nebraska</option>
                
                <option value="NV">Nevada</option>
                
                <option value="NH">New Hampshire</option>
                
                <option value="NJ">New Jersey</option>
                
                <option value="NM">New Mexico</option>
                
                <option value="NY">New York</option>
                
                <option value="NC">North Carolina</option>
                
                <option value="ND">North Dakota</option>
                
                <option value="OH">Ohio</option>
                
                <option value="OK">Oklahoma</option>
                
                <option value="OR">Oregon</option>
                
                <option value="PA">Pennsylvania</option>
                
                <option value="PR">Puerto Rico</option>
                
                <option value="RI">Rhode Island</option>
                
                <option value="SC">South Carolina</option>
                
                <option value="SD">South Dakota</option>
                
                <option value="TN">Tennessee</option>
                
                <option value="TX">Texas</option>
                
                <option value="UT">Utah</option>
                
                <option value="VT">Vermont</option>
                
                <option value="VI">Virgin Islands</option>
                
                <option value="VA">Virginia</option>
                
                <option value="WA">Washington</option>
                
                <option value="WV">West Virginia</option>
                
                <option value="WI">Wisconsin</option>
                
                <option value="WY">Wyoming</option>
                
              </select><div class="multi-select_item">
            <div class="u-group_inline u-group_inline-left">
              <select name="" class="select-state" aria-labelledby="label-select-state">
                <option selected="" value="">Any</option>
                
                <option value="AL">Alabama</option>
                
                <option value="AK">Alaska</option>
                
                <option value="AS">American Samoa</option>
                
                <option value="AZ">Arizona</option>
                
                <option value="AR">Arkansas</option>
                
                <option value="CA">California</option>
                
                <option value="CO">Colorado</option>
                
                <option value="CT">Connecticut</option>
                
                <option value="DE">Delaware</option>
                
                <option value="DC">District of Columbia</option>
                
                <option value="FL">Florida</option>
                
                <option value="GA">Georgia</option>
                
                <option value="GU">Guam</option>
                
                <option value="HI">Hawaii</option>
                
                <option value="ID">Idaho</option>
                
                <option value="IL">Illinois</option>
                
                <option value="IN">Indiana</option>
                
                <option value="IA">Iowa</option>
                
                <option value="KS">Kansas</option>
                
                <option value="KY">Kentucky</option>
                
                <option value="LA">Louisiana</option>
                
                <option value="ME">Maine</option>
                
                <option value="MD">Maryland</option>
                
                <option value="MA">Massachusetts</option>
                
                <option value="MI">Michigan</option>
                
                <option value="MN">Minnesota</option>
                
                <option value="MS">Mississippi</option>
                
                <option value="MO">Missouri</option>
                
                <option value="MT">Montana</option>
                
                <option value="NE">Nebraska</option>
                
                <option value="NV">Nevada</option>
                
                <option value="NH">New Hampshire</option>
                
                <option value="NJ">New Jersey</option>
                
                <option value="NM">New Mexico</option>
                
                <option value="NY">New York</option>
                
                <option value="NC">North Carolina</option>
                
                <option value="ND">North Dakota</option>
                
                <option value="OH">Ohio</option>
                
                <option value="OK">Oklahoma</option>
                
                <option value="OR">Oregon</option>
                
                <option value="PA">Pennsylvania</option>
                
                <option value="PR">Puerto Rico</option>
                
                <option value="RI">Rhode Island</option>
                
                <option value="SC">South Carolina</option>
                
                <option value="SD">South Dakota</option>
                
                <option value="TN">Tennessee</option>
                
                <option value="TX">Texas</option>
                
                <option value="UT">Utah</option>
                
                <option value="VT">Vermont</option>
                
                <option value="VI">Virgin Islands</option>
                
                <option value="VA">Virginia</option>
                
                <option value="WA">Washington</option>
                
                <option value="WV">West Virginia</option>
                
                <option value="WI">Wisconsin</option>
                
                <option value="WY">Wyoming</option>
                
              </select>
            </div>
            <div class="u-group_inline u-group_inline-right u-nowrap">
              <!--<button class="button button-add" type="button">
                Add<br>State
              </button> -->
			  
              <button title="Remove State" class="button button-remove" type="button">
                <i class="fa fa-times-circle"></i>
              </button>
            </div>
          </div></multi-select>

        </div>

    
        <div class="group_inline">

          <label class="group_inline-left" for="zip-code">Enter a ZIP code
            <input type="number" autocapitalize="off" autocorrect="off" autocomplete="off" placeholder="e.g., 45400" name="zip" id="zip-code">
          </label>
        </div>

        <!--
        <label for="online" class="checkbox">
          <input id="online" type="checkbox" name="online" checked value="1" tabindex="0">
          <span tabindex="-1" class="checkbox-focus"></span>Include Online-Only Schools
        </label>
        -->

      </div>

      <input type="submit" tabindex="-1" class="sr-only" value="Submit">

    </aria-accordion>

  </fieldset>

  <fieldset>
    <legend>Size</legend>

    <aria-accordion class="container" id="school-size" aria-expanded="true">

      <h1 class="search_category">
        <button aria-controls="size-content" aria-expanded="true" type="button" tabindex="0">
          Size
        </button>
      </h1>

      <div aria-hidden="false" id="size-content">
        <fieldset class="nested_fieldset">

          <legend>Undergraduate Student Body</legend>
          <h1>Undergraduate Student Body</h1>

          <ul>
            <li>
              <label class="checkbox" for="size-small">
                <input type="checkbox" tabindex="0" value="small" name="size" id="size-small">
                <span class="checkbox-focus" tabindex="-1"></span>Small (&lt; 2,000)
              </label>
            </li>
            <li>
              <label class="checkbox" for="size-medium">
                <input type="checkbox" tabindex="0" value="medium" name="size" id="size-medium">
                <span class="checkbox-focus" tabindex="-1"></span>Medium (2,000&ndash;15,000)
              </label>
            </li>
            <li>
              <label class="checkbox" for="size-large">
                <input type="checkbox" tabindex="0" value="large" name="size" id="size-large">
                <span class="checkbox-focus" tabindex="-1"></span>Large (&gt; 15,000)
              </label>
            </li>
          </ul>

        </fieldset>

      </div>

      <input type="submit" tabindex="-1" class="sr-only" value="Submit">

    </aria-accordion>

  </fieldset>

  <fieldset>
    <legend>Name</legend>

    <aria-accordion class="container" id="school-name" aria-expanded="true">

      <h1 class="search_category">
        <button aria-controls="name-content" aria-expanded="true" type="button" tabindex="0">
          Name
        </button>
      </h1>

      <div class="accordion-div" aria-hidden="false" id="name-content">
        <label for="name-school">School name</label>
        <input type="text" autocapitalize="off" autocorrect="off" autocomplete="off" placeholder="e.g., USA University" name="name" id="name-school">
      </div>

      <input type="submit" class="sr-only" value="Submit">

    </aria-accordion>

  </fieldset>

  <fieldset>
    <legend>Advanced Search</legend>

    <aria-accordion class="container" aria-expanded="true">
      <h1 class="search_category">
        <button aria-controls="type-content" aria-expanded="true" type="button" tabindex="0">
          Advanced Search
        </button>
      </h1>

      <div aria-hidden="false" id="type-content">

        <fieldset class="nested_fieldset">
          <legend>Type of school</legend>

          <h1>Type of school</h1>

          <ul>
            <li>
              <label class="checkbox" for="type-public">
                <input type="checkbox" tabindex="0" value="public" name="control" id="type-public">
                <span class="checkbox-focus" tabindex="-1"></span>Public
              </label>
            </li>
            <li>
              <label class="checkbox" for="type-private">
                <input type="checkbox" tabindex="0" value="private" name="control" id="type-private">
                <span class="checkbox-focus" tabindex="-1"></span>Private Nonprofit
              </label>
            </li>
            <li>
              <label class="checkbox" for="type-profit">
                <input type="checkbox" tabindex="0" value="profit" name="control" id="type-profit">
                <span class="checkbox-focus" tabindex="-1"></span>Private For-Profit
              </label>
            </li>
          </ul>

        </fieldset>

        <label for="special">Specialized mission
          <select name="serving" id="special">
            <option selected="" value="">Any</option>
            
            <option value="women_only">Women-Only</option>
            
            <option value="men_only">Men-Only</option>
            
            <option value="aanipi">Asian American and Native American Pacific Islander-Serving Institution</option>
            
            <option value="annh">Alaska Native and Native Hawaiian-Serving Institution</option>
            
            <option value="hispanic">Hispanic-Serving Institution</option>
            
            <option value="historically_black">Historically Black College and University</option>
            
            <option value="nant">Native American Non-Tribal Institution</option>
            
            <option value="predominantly_black">Predominantly Black Institution</option>
            
            <option value="tribal">Tribal College and University</option>
            
          </select>
        </label>

        <label for="affiliation">Religious affiliation
          <select name="religious" id="affiliation">
            <option selected="" value="">Any</option>
            
            <option value="51">African Methodist Episcopal</option>
            
            <option value="24">African Methodist Episcopal Zion Church</option>
            
            <option value="52">American Baptist</option>
            
            <option value="22">American Evangelical Lutheran Church</option>
            
            <option value="53">American Lutheran</option>
            
            <option value="27">Assemblies of God Church</option>
            
            <option value="54">Baptist</option>
            
            <option value="28">Brethren Church</option>
            
            <option value="34">Christ and Missionary Alliance Church</option>
            
            <option value="61">Christian Church (Disciples of Christ)</option>
            
            <option value="48">Christian Churches and Churches of Christ</option>
            
            <option value="55">Christian Methodist Episcopal</option>
            
            <option value="35">Christian Reformed Church</option>
            
            <option value="58">Church of Brethren</option>
            
            <option value="57">Church of God</option>
            
            <option value="59">Church of the Nazarene</option>
            
            <option value="74">Churches of Christ</option>
            
            <option value="60">Cumberland Presbyterian</option>
            
            <option value="101">Ecumenical Christian</option>
            
            <option value="50">Episcopal Church, Reformed</option>
            
            <option value="102">Evangelical Christian</option>
            
            <option value="36">Evangelical Congregational Church</option>
            
            <option value="37">Evangelical Covenant Church of America</option>
            
            <option value="38">Evangelical Free Church of America</option>
            
            <option value="39">Evangelical Lutheran Church</option>
            
            <option value="64">Free Methodist</option>
            
            <option value="41">Free Will Baptist Church</option>
            
            <option value="65">Friends</option>
            
            <option value="91">Greek Orthodox</option>
            
            <option value="42">Interdenominational</option>
            
            <option value="40">International United Pentecostal Church</option>
            
            <option value="80">Jewish</option>
            
            <option value="94">Latter Day Saints (Mormon Church)</option>
            
            <option value="68">Lutheran Church - Missouri Synod</option>
            
            <option value="67">Lutheran Church in America</option>
            
            <option value="43">Mennonite Brethren Church</option>
            
            <option value="69">Mennonite Church</option>
            
            <option value="87">Missionary Church Inc</option>
            
            <option value="44">Moravian Church</option>
            
            <option value="78">Multiple Protestant Denomination</option>
            
            <option value="45">North American Baptist</option>
            
            <option value="100">Original Free Will Baptist</option>
            
            <option value="79">Other Protestant</option>
            
            <option value="47">Pentecostal Holiness Church</option>
            
            <option value="103">Presbyterian</option>
            
            <option value="66">Presbyterian Church (USA)</option>
            
            <option value="73">Protestant Episcopal</option>
            
            <option value="77">Protestant, not specified</option>
            
            <option value="49">Reformed Church in America</option>
            
            <option value="81">Reformed Presbyterian Church</option>
            
            <option value="30">Roman Catholic</option>
            
            <option value="92">Russian Orthodox</option>
            
            <option value="95">Seventh Day Adventists</option>
            
            <option value="75">Southern Baptist</option>
            
            <option value="97">The Presbyterian Church in America</option>
            
            <option value="88">Undenominational</option>
            
            <option value="93">Unitarian Universalist</option>
            
            <option value="84">United Brethren Church</option>
            
            <option value="76">United Church of Christ</option>
            
            <option value="71">United Methodist</option>
            
            <option value="89">Wesleyan</option>
            
            <option value="33">Wisconsin Evangelical Lutheran Synod</option>
            
            <option value="99">Other (none of the above)</option>
            
          </select>
        </label>

      </div>

      <input type="submit" tabindex="-1" class="sr-only" value="Submit">

    </aria-accordion>

  </fieldset>

  <div class="container search_form-submit">

    <button class="button button-primary search-button" id="search-submit" type="submit">
      Find Colleges
    </button>

  </div>


  </form>

</section>
  </section>
</div>


<script>
  picc.pages.index();
</script>

    </main>

  
    

    
    <script src="js/picc-analytics.js"></script>
    <script id="_fed_an_ua_tag" src="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js"></script>
    
	<b> TARUN </b>

</body></html>