// JavaScript Document/** jquery.color.js ****************/
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(c(y,1d){z 2l="N 2P 3b 2T 2R w 3g 3h 3m 3n",2q=/^([\\-+])=\\s*(\\d+\\.?\\d*)/,2t=[{19:/k?\\(\\s*(\\d{1,3})\\s*,\\s*(\\d{1,3})\\s*,\\s*(\\d{1,3})\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,P:c(x){8[x[1],x[2],x[3],x[4]]}},{19:/k?\\(\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,P:c(x){8[x[1]*2.1K,x[2]*2.1K,x[3]*2.1K,x[4]]}},{19:/#([a-1e-9]{2})([a-1e-9]{2})([a-1e-9]{2})/,P:c(x){8[1b(x[1],16),1b(x[2],16),1b(x[3],16)]}},{19:/#([a-1e-9])([a-1e-9])([a-1e-9])/,P:c(x){8[1b(x[1]+x[1],16),1b(x[2]+x[2],16),1b(x[3]+x[3],16)]}},{19:/B?\\(\\s*(\\d+(?:\\.\\d+)?)\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,m:"B",P:c(x){8[x[1],x[2]/1U,x[3]/1U,x[4]]}}],w=y.1y=c(w,V,1f,R){8 2A y.1y.O.P(w,V,1f,R)},H={k:{M:{D:{C:0,j:"1G"},V:{C:1,j:"1G"},1f:{C:2,j:"1G"}}},B:{M:{2w:{C:0,j:"2p"},2E:{C:1,j:"1E"},3s:{C:2,j:"1E"}}}},1N={"1G":{1R:1k,L:Z},"1E":{L:1},"2p":{T:1B,1R:1k}},1r=w.1r={},1P=y("<p>")[0],1i,F=y.F;1P.1I.2y="2z-w:k(1,1,1,.5)";1r.k=1P.1I.N.2x("k")>-1;F(H,c(G,m){m.u="21"+G;m.M.R={C:3,j:"1E",1D:1}});c 1m(f,t,2d){z j=1N[t.j]||{};7(f==n){8(2d||!t.1D)?n:t.1D}f=j.1R?~~f:2b(f);7(2M(f)){8 t.1D}7(j.T){8(f+j.T)%j.T}8 0>f?0:j.L<f?j.L:f}c 1W(X){z A=w(),k=A.E=[];X=X.2I();F(2t,c(i,1A){z 12,W=1A.19.2r(X),1X=W&&1A.P(W),G=1A.m||"k";7(1X){12=A[G](1X);A[H[G].u]=12[H[G].u];k=A.E=12.E;8 2B}});7(k.25){7(k.1F()==="0,0,0,0"){y.2h(k,1i.13)}8 A}8 1i[X]}w.O=y.2h(w.24,{P:c(D,V,1f,R){7(D===1d){o.E=[n,n,n,n];8 o}7(D.2J||D.2K){D=y(D).2j(V);V=1d}z A=o,j=y.j(D),k=o.E=[];7(V!==1d){D=[D,V,1f,R];j="1Y"}7(j==="X"){8 o.P(1W(D)||1i.1M)}7(j==="1Y"){F(H.k.M,c(I,t){k[t.C]=1m(D[t.C],t)});8 o}7(j==="1S"){7(D 2H w){F(H,c(G,m){7(D[m.u]){A[m.u]=D[m.u].18()}})}U{F(H,c(G,m){z u=m.u;F(m.M,c(I,t){7(!A[u]&&m.Q){7(I==="R"||D[I]==n){8}A[u]=m.Q(A.E)}A[u][t.C]=1m(D[I],t,1k)});7(A[u]&&y.2C(n,A[u].18(0,3))<0){A[u][3]=1;7(m.14){A.E=m.14(A[u])}}})}8 o}},22:c(2u){z 22=w(2u),1q=1k,A=o;F(H,c(21,m){z 1T,1u=22[m.u];7(1u){1T=A[m.u]||m.Q&&m.Q(A.E)||[];F(m.M,c(21,t){7(1u[t.C]!=n){1q=(1u[t.C]===1T[t.C]);8 1q}})}8 1q});8 1q},2o:c(){z 1Q=[],A=o;F(H,c(G,m){7(A[m.u]){1Q.26(G)}});8 1Q.1p()},2c:c(2n,2k){z Y=w(2n),G=Y.2o(),m=H[G],1O=o.R()===0?w("13"):o,1j=1O[m.u]||m.Q(1O.E),1v=1j.18();Y=Y[m.u];F(m.M,c(I,t){z 1h=t.C,10=1j[1h],1g=Y[1h],j=1N[t.j]||{};7(1g===n){8}7(10===n){1v[1h]=1g}U{7(j.T){7(1g-10>j.T/2){10+=j.T}U 7(10-1g>j.T/2){10-=j.T}}1v[1h]=1m((1g-10)*2k+10,t)}});8 o[G](1v)},1J:c(28){7(o.E[3]===1){8 o}z 1z=o.E.18(),a=1z.1p(),1J=w(28).E;8 w(y.1C(1z,c(v,i){8(1-a)*1J[i]+a*v}))},1V:c(){z 1c="k(",k=y.1C(o.E,c(v,i){8 v==n?(i>2?1:0):v});7(k[3]===1){k.1p();1c="1z("}8 1c+k.1F()+")"},2D:c(){z 1c="B(",B=y.1C(o.B(),c(v,i){7(v==n){v=i>2?1:0}7(i&&i<3){v=17.1l(v*1U)+"%"}8 v});7(B[3]===1){B.1p();1c="2G("}8 1c+B.1F()+")"},2L:c(27){z k=o.E.18(),R=k.1p();7(27){k.26(~~(R*Z))}8"#"+y.1C(k,c(v){v=(v||0).23(16);8 v.25===1?"0"+v:v}).1F("")},23:c(){8 o.E[3]===0?"13":o.1V()}});w.O.P.24=w.O;c 1s(p,q,h){h=(h+1)%1;7(h*6<1){8 p+(q-p)*h*6}7(h*2<1){8 q}7(h*3<2){8 p+(q-p)*((2/3)-h)*6}8 p}H.B.Q=c(k){7(k[0]==n||k[1]==n||k[2]==n){8[n,n,n,k[3]]}z r=k[0]/Z,g=k[1]/Z,b=k[2]/Z,a=k[3],L=17.L(r,g,b),1n=17.1n(r,g,b),15=L-1n,1H=L+1n,l=1H*0.5,h,s;7(1n===L){h=0}U 7(r===L){h=(1L*(g-b)/15)+1B}U 7(g===L){h=(1L*(b-r)/15)+3p}U{h=(1L*(r-g)/15)+3q}7(15===0){s=0}U 7(l<=0.5){s=15/1H}U{s=15/(2-1H)}8[17.1l(h)%1B,s,l,a==n?1:a]};H.B.14=c(B){7(B[0]==n||B[1]==n||B[2]==n){8[n,n,n,B[3]]}z h=B[0]/1B,s=B[1],l=B[2],a=B[3],q=l<=0.5?l*(1+s):l+s-l*s,p=2*l-q;8[17.1l(1s(p,q,h+(1/3))*Z),17.1l(1s(p,q,h)*Z),17.1l(1s(p,q,h-(1/3))*Z),a]};F(H,c(G,m){z M=m.M,u=m.u,Q=m.Q,14=m.14;w.O[G]=c(f){7(Q&&!o[u]){o[u]=Q(o.E)}7(f===1d){8 o[u].18()}z 1t,j=y.j(f),29=(j==="1Y"||j==="1S")?f:3t,S=o[u].18();F(M,c(I,t){z 1w=29[j==="1S"?I:t.C];7(1w==n){1w=S[t.C]}S[t.C]=1m(1w,t)});7(14){1t=w(14(S));1t[u]=S;8 1t}U{8 w(S)}};F(M,c(I,t){7(w.O[I]){8}w.O[I]=c(f){z 1o=y.j(f),O=(I==="R"?(o.3y?"B":"k"):G),S=o[O](),1x=S[t.C],W;7(1o==="1d"){8 1x}7(1o==="c"){f=f.3w(o,1x);1o=y.j(f)}7(f==n&&t.3x){8 o}7(1o==="X"){W=2q.2r(f);7(W){f=1x+2b(W[2])*(W[1]==="+"?1:-1)}}S[t.C]=f;8 o[O](S)}})});w.K=c(K){z 2s=K.30(" ");F(2s,c(i,K){y.1Z[K]={2g:c(1a,f){z 12,11,N="";7(f!=="13"&&(y.j(f)!=="X"||(12=1W(f)))){f=w(12||f);7(!1r.k&&f.E[3]!==1){11=K==="N"?1a.2i:1a;2S((N===""||N==="13")&&11&&11.1I){2e{N=y.2j(11,"N");11=11.2i}2m(e){}}f=f.1J(N&&N!=="13"?N:"1M")}f=f.1V()}2e{1a.1I[K]=f}2m(e){}}};y.J.3a[K]=c(J){7(!J.2f){J.1j=w(J.1a,K);J.Y=w(J.Y);J.2f=1k}y.1Z[K].2g(J.1a,J.1j.2c(J.Y,J.39))}})};w.K(2l);y.1Z.33={35:c(f){z 20={};F(["37","3i","3d","32"],c(i,2v){20["2U"+2v+"1y"]=f});8 20}};1i=y.1y.2F={3r:"#2N",3B:"#31",1f:"#36",34:"#38",3e:"#3c",V:"#2Q",2O:"#2V",2Z:"#2Y",2W:"#2X",3f:"#3v",3u:"#3z",D:"#3D",3C:"#3A",3E:"#3l",3k:"#2a",3j:"#3o",13:[n,n,n,0],1M:"#2a"}}(y));',62,227,'|||||||if|return||||function|||value||||type|rgba||space|null|this|||||prop|cache||color|execResult|jQuery|var|inst|hsla|idx|red|_rgba|each|spaceName|spaces|key|fx|hook|max|props|backgroundColor|fn|parse|to|alpha|local|mod|else|green|match|string|end|255|startValue|curElem|parsed|transparent|from|diff||Math|slice|re|elem|parseInt|prefix|undefined|f0|blue|endValue|index|colors|start|true|round|clamp|min|vtype|pop|same|support|hue2rgb|ret|isCache|result|val|cur|Color|rgb|parser|360|map|def|percent|join|byte|add|style|blend|55|60|_default|propTypes|startColor|supportElem|used|floor|object|localCache|100|toRgbaString|stringParse|values|array|cssHooks|expanded|_|is|toString|prototype|length|push|includeAlpha|opaque|arr|ffffff|parseFloat|transition|allowEmpty|try|colorInit|set|extend|parentNode|css|distance|stepHooks|catch|other|_space|degrees|rplusequals|exec|hooks|stringParsers|compare|part|hue|indexOf|cssText|background|new|false|inArray|toHslaString|saturation|names|hsl|instanceof|toLowerCase|jquery|nodeType|toHexString|isNaN|00ffff|lime|borderBottomColor|008000|borderTopColor|while|borderRightColor|border|00ff00|navy|000080|800000|maroon|split|000000|Left|borderColor|fuchsia|expand|0000ff|Top|ff00ff|pos|step|borderLeftColor|808080|Bottom|gray|olive|columnRuleColor|outlineColor|Right|yellow|white|008080|textDecorationColor|textEmphasisColor|ffff00|120|240|aqua|lightness|arguments|purple|808000|call|empty|_hsla|800080|c0c0c0|black|silver|ff0000|teal'.split('|'),0,{}));

/** jquery.lavalamp.js ****************/
/**
 * LavaLamp - A menu plugin for jQuery with cool hover effects.
 * @requires jQuery v1.1.3.1 or above
 *
 * http://gmarwaha.com/blog/?p=7
 *
 * Copyright (c) 2007 Ganeshji Marwaha (gmarwaha.com)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Version: 0.1.0
 */

/**
 * Creates a menu with an unordered list of menu-items. You can either use the CSS that comes with the plugin, or write your own styles 
 * to create a personalized effect
 *
 * The HTML markup used to build the menu can be as simple as...
 *
 *       <ul class="lavaLamp">
 *           <li><a href="#">Home</a></li>
 *           <li><a href="#">Plant a tree</a></li>
 *           <li><a href="#">Travel</a></li>
 *           <li><a href="#">Ride an elephant</a></li>
 *       </ul>
 *
 * Once you have included the style sheet that comes with the plugin, you will have to include 
 * a reference to jquery library, easing plugin(optional) and the LavaLamp(this) plugin.
 *
 * Use the following snippet to initialize the menu.
 *   $(function() { $(".lavaLamp").lavaLamp({ fx: "backout", speed: 700}) });
 *
 * Thats it. Now you should have a working lavalamp menu. 
 *
 * @param an options object - You can specify all the options shown below as an options object param.
 *
 * @option fx - default is "linear"
 * @example
 * $(".lavaLamp").lavaLamp({ fx: "backout" });
 * @desc Creates a menu with "backout" easing effect. You need to include the easing plugin for this to work.
 *
 * @option speed - default is 500 ms
 * @example
 * $(".lavaLamp").lavaLamp({ speed: 500 });
 * @desc Creates a menu with an animation speed of 500 ms.
 *
 * @option click - no defaults
 * @example
 * $(".lavaLamp").lavaLamp({ click: function(event, menuItem) { return false; } });
 * @desc You can supply a callback to be executed when the menu item is clicked. 
 * The event object and the menu-item that was clicked will be passed in as arguments.
 */
(function($) {
    $.fn.lavaLamp = function(o) {
        o = $.extend({ fx: "linear", speed: 500, click: function(){} }, o || {});

        return this.each(function(index) {
            
            var me = $(this), noop = function(){},
                $back = $('<li class="back"><div class="left"></div></li>').appendTo(me),
                $li = $(">li", this), curr = $("li.current", this)[0] || $($li[0]).addClass("current")[0];

            $li.not(".back").hover(function() {
                move(this);
            }, noop);

            $(this).hover(noop, function() {
                move(curr);
            });

            $li.click(function(e) {
                setCurr(this);
                return o.click.apply(this, [e, this]);
            });

            setCurr(curr);

            function setCurr(el) {
                $back.css({ "left": el.offsetLeft+"px", "width": el.offsetWidth+"px" });
                curr = el;
            };
            
            function move(el) {
                $back.each(function() {
                    $.dequeue(this, "fx"); }
                ).animate({
                    width: el.offsetWidth,
                    left: el.offsetLeft
                }, o.speed, o.fx);
            };

            if (index == 0){
                $(window).resize(function(){
                    $back.css({
                        width: curr.offsetWidth,
                        left: curr.offsetLeft
                    });
                });
            }
            
        });
    };
})(jQuery);

/** jquery.easing.js ****************/
/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright Ð’Â© 2008 George McGinley Smith
 * All rights reserved.
 */
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('h.j[\'J\']=h.j[\'C\'];h.H(h.j,{D:\'y\',C:9(x,t,b,c,d){6 h.j[h.j.D](x,t,b,c,d)},U:9(x,t,b,c,d){6 c*(t/=d)*t+b},y:9(x,t,b,c,d){6-c*(t/=d)*(t-2)+b},17:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t+b;6-c/2*((--t)*(t-2)-1)+b},12:9(x,t,b,c,d){6 c*(t/=d)*t*t+b},W:9(x,t,b,c,d){6 c*((t=t/d-1)*t*t+1)+b},X:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t+b;6 c/2*((t-=2)*t*t+2)+b},18:9(x,t,b,c,d){6 c*(t/=d)*t*t*t+b},15:9(x,t,b,c,d){6-c*((t=t/d-1)*t*t*t-1)+b},1b:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t*t+b;6-c/2*((t-=2)*t*t*t-2)+b},Q:9(x,t,b,c,d){6 c*(t/=d)*t*t*t*t+b},I:9(x,t,b,c,d){6 c*((t=t/d-1)*t*t*t*t+1)+b},13:9(x,t,b,c,d){e((t/=d/2)<1)6 c/2*t*t*t*t*t+b;6 c/2*((t-=2)*t*t*t*t+2)+b},N:9(x,t,b,c,d){6-c*8.B(t/d*(8.g/2))+c+b},M:9(x,t,b,c,d){6 c*8.n(t/d*(8.g/2))+b},L:9(x,t,b,c,d){6-c/2*(8.B(8.g*t/d)-1)+b},O:9(x,t,b,c,d){6(t==0)?b:c*8.i(2,10*(t/d-1))+b},P:9(x,t,b,c,d){6(t==d)?b+c:c*(-8.i(2,-10*t/d)+1)+b},S:9(x,t,b,c,d){e(t==0)6 b;e(t==d)6 b+c;e((t/=d/2)<1)6 c/2*8.i(2,10*(t-1))+b;6 c/2*(-8.i(2,-10*--t)+2)+b},R:9(x,t,b,c,d){6-c*(8.o(1-(t/=d)*t)-1)+b},K:9(x,t,b,c,d){6 c*8.o(1-(t=t/d-1)*t)+b},T:9(x,t,b,c,d){e((t/=d/2)<1)6-c/2*(8.o(1-t*t)-1)+b;6 c/2*(8.o(1-(t-=2)*t)+1)+b},F:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d)==1)6 b+c;e(!p)p=d*.3;e(a<8.u(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.r(c/a);6-(a*8.i(2,10*(t-=1))*8.n((t*d-s)*(2*8.g)/p))+b},E:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d)==1)6 b+c;e(!p)p=d*.3;e(a<8.u(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.r(c/a);6 a*8.i(2,-10*t)*8.n((t*d-s)*(2*8.g)/p)+c+b},G:9(x,t,b,c,d){f s=1.l;f p=0;f a=c;e(t==0)6 b;e((t/=d/2)==2)6 b+c;e(!p)p=d*(.3*1.5);e(a<8.u(c)){a=c;f s=p/4}m f s=p/(2*8.g)*8.r(c/a);e(t<1)6-.5*(a*8.i(2,10*(t-=1))*8.n((t*d-s)*(2*8.g)/p))+b;6 a*8.i(2,-10*(t-=1))*8.n((t*d-s)*(2*8.g)/p)*.5+c+b},1a:9(x,t,b,c,d,s){e(s==v)s=1.l;6 c*(t/=d)*t*((s+1)*t-s)+b},19:9(x,t,b,c,d,s){e(s==v)s=1.l;6 c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},14:9(x,t,b,c,d,s){e(s==v)s=1.l;e((t/=d/2)<1)6 c/2*(t*t*(((s*=(1.z))+1)*t-s))+b;6 c/2*((t-=2)*t*(((s*=(1.z))+1)*t+s)+2)+b},A:9(x,t,b,c,d){6 c-h.j.w(x,d-t,0,c,d)+b},w:9(x,t,b,c,d){e((t/=d)<(1/2.k)){6 c*(7.q*t*t)+b}m e(t<(2/2.k)){6 c*(7.q*(t-=(1.5/2.k))*t+.k)+b}m e(t<(2.5/2.k)){6 c*(7.q*(t-=(2.V/2.k))*t+.Y)+b}m{6 c*(7.q*(t-=(2.16/2.k))*t+.11)+b}},Z:9(x,t,b,c,d){e(t<d/2)6 h.j.A(x,t*2,0,c,d)*.5+b;6 h.j.w(x,t*2-d,0,c,d)*.5+c*.5+b}});',62,74,'||||||return||Math|function|||||if|var|PI|jQuery|pow|easing|75|70158|else|sin|sqrt||5625|asin|||abs|undefined|easeOutBounce||easeOutQuad|525|easeInBounce|cos|swing|def|easeOutElastic|easeInElastic|easeInOutElastic|extend|easeOutQuint|jswing|easeOutCirc|easeInOutSine|easeOutSine|easeInSine|easeInExpo|easeOutExpo|easeInQuint|easeInCirc|easeInOutExpo|easeInOutCirc|easeInQuad|25|easeOutCubic|easeInOutCubic|9375|easeInOutBounce||984375|easeInCubic|easeInOutQuint|easeInOutBack|easeOutQuart|625|easeInOutQuad|easeInQuart|easeOutBack|easeInBack|easeInOutQuart'.split('|'),0,{}));
/*
 * jQuery Easing Compatibility v1 - http://gsgd.co.uk/sandbox/jquery.easing.php
 *
 * Adds compatibility for applications that use the pre 1.2 easing names
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */
 eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('0.j(0.1,{i:3(x,t,b,c,d){2 0.1.h(x,t,b,c,d)},k:3(x,t,b,c,d){2 0.1.l(x,t,b,c,d)},g:3(x,t,b,c,d){2 0.1.m(x,t,b,c,d)},o:3(x,t,b,c,d){2 0.1.e(x,t,b,c,d)},6:3(x,t,b,c,d){2 0.1.5(x,t,b,c,d)},4:3(x,t,b,c,d){2 0.1.a(x,t,b,c,d)},9:3(x,t,b,c,d){2 0.1.8(x,t,b,c,d)},f:3(x,t,b,c,d){2 0.1.7(x,t,b,c,d)},n:3(x,t,b,c,d){2 0.1.r(x,t,b,c,d)},z:3(x,t,b,c,d){2 0.1.p(x,t,b,c,d)},B:3(x,t,b,c,d){2 0.1.D(x,t,b,c,d)},C:3(x,t,b,c,d){2 0.1.A(x,t,b,c,d)},w:3(x,t,b,c,d){2 0.1.y(x,t,b,c,d)},q:3(x,t,b,c,d){2 0.1.s(x,t,b,c,d)},u:3(x,t,b,c,d){2 0.1.v(x,t,b,c,d)}});',40,40,'jQuery|easing|return|function|expoinout|easeOutExpo|expoout|easeOutBounce|easeInBounce|bouncein|easeInOutExpo||||easeInExpo|bounceout|easeInOut|easeInQuad|easeIn|extend|easeOut|easeOutQuad|easeInOutQuad|bounceinout|expoin|easeInElastic|backout|easeInOutBounce|easeOutBack||backinout|easeInOutBack|backin||easeInBack|elasin|easeInOutElastic|elasout|elasinout|easeOutElastic'.split('|'),0,{}));



/** apycom menu ****************/
