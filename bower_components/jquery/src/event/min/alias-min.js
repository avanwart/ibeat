define(["../core","../event"],function(e){e.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(n,u){e.fn[u]=function(e,n){return arguments.length>0?this.on(u,null,e,n):this.trigger(u)}}),e.fn.extend({hover:function(e,n){return this.mouseenter(e).mouseleave(n||e)},bind:function(e,n,u){return this.on(e,null,n,u)},unbind:function(e,n){return this.off(e,null,n)},delegate:function(e,n,u,t){return this.on(n,e,u,t)},undelegate:function(e,n,u){return 1===arguments.length?this.off(e,"**"):this.off(n,e||"**",u)}})});