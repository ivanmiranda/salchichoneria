!function(r){"use strict";r.redirect=function(t,e,n,i){if(n=n&&"GET"===n.toUpperCase()?"GET":"POST",!e){var p=r.parseUrl(t);t=p.url,e=p.params}var o=r("<form>").attr("method",n).attr("action",t);i&&o.attr("target",i),a(e,[],o),r("body").append(o),o[0].submit()},r.parseUrl=function(r){if(-1===r.indexOf("?"))return{url:r,params:{}};var t=r.split("?"),a=t[1],e=a.split("&");r=t[0];var n,i,p={};for(n=0;n<e.length;n+=1)i=e[n].split("="),p[i[0]]=i[1];return{url:r,params:p}};var t=function(t,a,e,n){var i;if(e.length>0){i=e[0];var p;for(p=1;p<e.length;p+=1)i+="["+e[p]+"]";t=n?i+"[]":i+"["+t+"]"}return r("<input>").attr("type","hidden").attr("name",t).attr("value",a)},a=function(r,e,n,i){var p,o=[];for(p in r)"object"==typeof r[p]?(o=e.slice(),i?o.push(""):o.push(p),a(r[p],o,n,Array.isArray(r[p]))):n.append(t(p,r[p],e,i))}}(window.jQuery||window.Zepto||window.jqlite);