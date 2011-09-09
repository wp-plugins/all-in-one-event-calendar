function formatDate(b,c){return(c?((b.getUTCMonth()+1)+"/"+b.getUTCDate()):(b.getUTCDate()+"/"+(b.getUTCMonth()+1)))+"/"+b.getUTCFullYear()}function formatTime(b,g,e){var d=g;if(g<10){d="0"+g}if(e){var c=b;if(c<10){c="0"+b}return c+":"+d}else{var c=b%12;if(c==0){c=12}var f=(b<12)?"am":"pm";return c+":"+d+f}}function parseDate(c,d){c+=" GMT";if(d){return new Date(c)}a=c.split(/[\.\-\/]/);var b=a.shift();var e=a.shift();a.unshift(b);a.unshift(e);return new Date(a.join("/"))}function parseTime(e){var c=c=/(\d+)\s*[:\-\.,]\s*(\d+)\s*(am|pm)?/i.exec(e);if(c&&c.length>=3){var b=Number(c[1]);var d=Number(c[2]);if(b==12&&c[3]){b-=12}if(c[3]&&c[3].toLowerCase()=="pm"){b+=12}return{hour:b,minute:d}}else{return null}}(function(h){var i=["January","February","March","April","May","June","July","August","September","October","November","December"];function e(){var m=new Date();return new Date(m.getFullYear(),m.getMonth(),m.getDate())}function b(n,m){return String(n)==String(m)}function c(m,n){if(m instanceof Date){return c(m.getUTCFullYear(),m.getUTCMonth())}if(n==1){var o=(m%4==0)&&(!(m%100==0)||(m%400==0));return o?29:28}else{if(n==3||n==5||n==8||n==10){return 30}else{return 31}}}function k(m){return new Date(m.getTime()+(1*24*60*60*1000))}function f(m){return new Date(m.getTime()-(1*24*60*60*1000))}function l(m,n){return(n==11)?new Date(m+1,0,1):new Date(m,n+1,1)}function j(n,o,r,m){var q=h("<thead />");var p=h("<tr />").appendTo(q);h("<th />").addClass("monthCell").append(h('<a href="javascript:;">&laquo;</a>').addClass("prevMonth").mousedown(function(t){g(n,r==0?(o-1):o,r==0?11:(r-1),m);t.preventDefault()})).appendTo(p);h("<th />").addClass("monthCell").attr("colSpan",5).append(h('<a href="javascript:;">'+i[r]+" "+o+"</a>").addClass("monthName")).appendTo(p);h("<th />").addClass("monthCell").append(h('<a href="javascript:;">&raquo;</a>').addClass("nextMonth").mousedown(function(){g(n,r==11?(o+1):o,r==11?0:(r+1),m)})).appendTo(p);var s=h("<tr />").appendTo(q);h.each(String("SMTWTFS").split(""),function(u,t){h("<td />").addClass("dayName").append(t).appendTo(s)});return q}function g(t,x,w,B){B=B||{};var y=B.today?B.today:e();var o=new Date(x,w,1);var u=l(x,w);var m=6-u.getUTCDay();if(m<6){m+=7}for(var s=0;s<m;s++){u=k(u)}var z=h("<table />");j(t,x,w,B).appendTo(z);var r=h("<tbody />").appendTo(z);var A=h("<tr />");var q=o.getUTCDay()+7;for(var s=0;s<q;s++){o=f(o)}while(o<=u){var p=h("<td />").addClass("day").append(h('<a href="javascript:;">'+o.getUTCDate()+"</a>").click((function(){var C=o;return function(){if(B&&B.selectDate){B.selectDate(C)}}}()))).appendTo(A);var v=b(o,y);var n=B.selected&&b(B.selected,o);if(v){p.addClass("today")}if(n){p.addClass("selected")}if(v&&n){p.addClass("today_selected")}if(o.getUTCMonth()!=w){p.addClass("nonMonth")}dow=o.getUTCDay();if(dow==6){r.append(A);A=h("<tr />")}o=k(o)}if(A.children().length){r.append(A)}else{A.remove()}t.empty().append(z)}function d(q,o){var s=o.selection&&parseTime(o.selection);if(s){s.minute=Math.floor(s.minute/15)*15}var r=o.startTime&&(o.startTime.hour*60+o.startTime.minute);var n;var p=h("<ul />");for(var m=0;m<24;m++){for(var t=0;t<60;t+=15){if(r&&r>(m*60+t)){continue}(function(){var v=formatTime(m,t,o.isoTime);var w=v;if(r!=null){var x=(m*60+t)-r;if(x<60){w+=" ("+x+" min)"}else{if(x==60){w+=" (1 hr)"}else{w+=" ("+Math.round(x/60)+" hr "+(x%60)+" min)"}}}var u=h("<li />").append(h('<a href="javascript:;">'+w+"</a>").click(function(){if(o&&o.selectTime){o.selectTime(v)}}).mousemove(function(){h("li.selected",p).removeClass("selected")})).appendTo(p);if(!n&&m==o.defaultHour){n=u}if(s&&s.hour==m&&s.minute==t){u.addClass("selected");n=u}})()}}if(n){setTimeout(function(){q[0].scrollTop=n[0].offsetTop-n.height()*2},0)}q.empty().append(p)}h.fn.calendricalDate=function(m){m=m||{};m.padding=m.padding||4;return this.each(function(){var o=h(this);var p;var n=false;o.bind("focus",function(){if(p){return}var s=o.position();var r=o.css("padding-left");p=h("<div />").addClass("calendricalDatePopup").mouseenter(function(){n=true}).mouseleave(function(){n=false}).mousedown(function(t){t.preventDefault()}).css({position:"absolute",left:s.left,top:s.top+o.height()+m.padding*2});o.after(p);var q=parseDate(o.val(),m.usa);if(!q.getUTCFullYear()){q=m.today?m.today:e()}g(p,q.getUTCFullYear(),q.getUTCMonth(),{today:m.today,selected:q,selectDate:function(t){n=false;o.val(formatDate(t,m.usa));p.remove();p=null;if(m.endDate){var u=parseDate(m.endDate.val(),m.usa);if(u>=q){m.endDate.val(formatDate(new Date(t.getTime()+u.getTime()-q.getTime()),m.usa))}}}})}).blur(function(){if(n){if(p){o.focus()}return}if(!p){return}p.remove();p=null})})};h.fn.calendricalDateRange=function(m){if(this.length>=2){h(this[0]).calendricalDate(h.extend({endDate:h(this[1])},m));h(this[1]).calendricalDate(m)}return this};h.fn.calendricalDateRangeSingle=function(m){if(this.length==1){h(this).calendricalDate(m)}return this};h.fn.calendricalTime=function(m){m=m||{};m.padding=m.padding||4;return this.each(function(){var o=h(this);var p;var n=false;o.bind("focus click",function(){if(p){return}var q=m.startTime;if(q){if(m.startDate&&m.endDate&&!b(parseDate(m.startDate.val()),parseDate(m.endDate.val()))){q=false}}var s=o.position();p=h("<div />").addClass("calendricalTimePopup").mouseenter(function(){n=true}).mouseleave(function(){n=false}).mousedown(function(t){t.preventDefault()}).css({position:"absolute",left:s.left,top:s.top+o.height()+m.padding*2});if(q){p.addClass("calendricalEndTimePopup")}o.after(p);var r={selection:o.val(),selectTime:function(t){n=false;o.val(t);p.remove();p=null},isoTime:m.isoTime||false,defaultHour:(m.defaultHour!=null)?m.defaultHour:8};if(q){r.startTime=parseTime(m.startTime.val())}d(p,r)}).blur(function(){if(n){if(p){o.focus()}return}if(!p){return}p.remove();p=null})})},h.fn.calendricalTimeRange=function(m){if(this.length>=2){h(this[0]).calendricalTime(m);h(this[1]).calendricalTime(h.extend({startTime:h(this[0])},m))}return this};h.fn.calendricalDateTimeRange=function(m){if(this.length>=4){h(this[0]).calendricalDate(h.extend({endDate:h(this[2])},m));h(this[1]).calendricalTime(m);h(this[2]).calendricalDate(m);h(this[3]).calendricalTime(h.extend({startTime:h(this[1]),startDate:h(this[0]),endDate:h(this[2])},m))}return this}})(jQuery);