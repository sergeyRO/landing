
<!doctype html>
<html lang="sv-SE" class="no-js">
<head><meta charset="UTF-8">
    <script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i))
    {var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1)
    {if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}
    else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}
    </script>
    <script>class RocketLazyLoadScripts{constructor()
        {this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],
            this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),
            this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),
            this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",(e=>{this.persisted=e.persisted})),
            window.addEventListener("DOMContentLoaded",(()=>{this._preconnect3rdParties()})),this.delayedScripts={normal:[],async:[],defer:[]},
            this.allJQueries=[]}_addUserInteractionListener(e){document.hidden?e._triggerListener():
            (this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventHandler,{passive:!0}))),
            window.addEventListener("touchstart",e.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",e.touchStartHandler),
            document.addEventListener("visibilitychange",e.userEventHandler))}_removeUserInteractionListener()
        {this.triggerEvents.forEach((e=>window.removeEventListener(e,this.userEventHandler,{passive:!0}))),
            document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(e){"HTML"!==e.target.tagName&&
        (window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),
            window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),
            e.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"onclick","rocket-onclick"))}_onTouchMove(e)
        {window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),
            window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),
            e.target.removeEventListener("click",this.clickHandler),
            this._renameDOMAttribute(e.target,"rocket-onclick","onclick")}_onTouchEnd(e)
        {window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),
            window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),
            window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(e){e.target.removeEventListener("click",this.clickHandler),
            this._renameDOMAttribute(e.target,"rocket-onclick","onclick"),this.interceptedClicks.push(e),e.preventDefault(),e.stopPropagation(),
            e.stopImmediatePropagation()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),
            window.removeEventListener("mousedown",this.touchStartHandler),
            this.interceptedClicks.forEach((e=>{e.target.dispatchEvent(new MouseEvent("click",{view:e.view,bubbles:!0,cancelable:!0}))}))}_renameDOMAttribute(e,t,n)
        {e.hasAttribute&&e.hasAttribute(t)&&(event.target.setAttribute(n,event.target.getAttribute(t)),event.target.removeAttribute(t))}_triggerListener()
        {this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",
            this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let e=[];
            document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{if(t.hasAttribute("src"))
            {const n=new URL(t.src).origin;n!==location.origin&&e.push({src:n,crossOrigin:t.crossOrigin||"module"===t.getAttribute("data-rocket-type")})}})),
            e=[...new Map(e.map((e=>[JSON.stringify(e),e]))).values()],this._batchInjectResourceHints(e,"preconnect")}async _loadEverythingNow()
        {this.lastBreath=Date.now(),this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),
            this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),
            await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(e){}
            window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._replayClicks()}_registerAllDelayedScripts()
        {document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?
            this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):
                this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._littleBreath(),
            new Promise((t=>{const n=document.createElement("script");[...e.attributes].forEach((e=>{let t=e.nodeName;
            "type"!==t&&("data-rocket-type"===t&&(t="type"),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),
                n.addEventListener("error",t)):(n.text=e.text,t());try{e.parentNode.replaceChild(n,e)}catch(e){t()}}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(e,t){var n=document.createDocumentFragment();e.forEach((e=>{if(e.src){const i=document.createElement("link");i.href=e.src,i.rel=t,"preconnect"!==t&&(i.as="script"),e.getAttribute&&"module"===e.getAttribute("data-rocket-type")&&(i.crossOrigin=!0),e.crossOrigin&&(i.crossOrigin=e.crossOrigin),n.appendChild(i)}})),document.head.appendChild(n)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(i){e["rocket"+t]=n=i}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),await this._littleBreath();const e=new Event("rocket-pageshow");e.persisted=this.persisted,window.dispatchEvent(e),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,i=document.createRange(),r=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const s=document.createDocumentFragment();i.setStart(s,0),s.appendChild(i.createContextualFragment(t)),r.insertBefore(s,o)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise((e=>setTimeout(e))):new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts;e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();</script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="https://www.sitea.se/wp-content/uploads/2018/03/favicon.ico" />
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript" id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="43cb652e-fd99-4df2-8f5c-523f8c71eed3" data-culture="SV" async></script>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO plugin v18.7 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Sitea Webbyrå | Priser för Hemsida &amp; Sökordsoptimering | Fasta Priser</title><link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C600%2C800%2C500&#038;subset=latin&#038;display=swap" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C600%2C800%2C500&#038;subset=latin&#038;display=swap" media="print" onload="this.media='all'" /><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C600%2C800%2C500&#038;subset=latin&#038;display=swap" /></noscript><link rel="stylesheet" href="https://www.sitea.se/wp-content/cache/min/1/a858c2c0f76160c342cfaebcfad25626.css" media="all" data-minify="1" />
    <link rel="canonical" href="https://www.sitea.se/priser/" />
    <meta property="og:locale" content="sv_SE" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Sitea Webbyrå | Priser för Hemsida &amp; Sökordsoptimering | Fasta Priser" />
    <meta property="og:url" content="https://www.sitea.se/priser/" />
    <meta property="og:site_name" content="Sitea" />
    <meta property="article:modified_time" content="2022-04-01T09:00:50+00:00" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:label1" content="Beräknad lästid" />
    <meta name="twitter:data1" content="15 minuter" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://www.sitea.se/#website","url":"https://www.sitea.se/","name":"Sitea","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.sitea.se/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"sv-SE"},{"@type":"WebPage","@id":"https://www.sitea.se/priser/#webpage","url":"https://www.sitea.se/priser/","name":"Sitea Webbyrå | Priser för Hemsida & Sökordsoptimering | Fasta Priser","isPartOf":{"@id":"https://www.sitea.se/#website"},"datePublished":"2016-09-29T14:19:30+00:00","dateModified":"2022-04-01T09:00:50+00:00","breadcrumb":{"@id":"https://www.sitea.se/priser/#breadcrumb"},"inLanguage":"sv-SE","potentialAction":[{"@type":"ReadAction","target":["https://www.sitea.se/priser/"]}]},{"@type":"BreadcrumbList","@id":"https://www.sitea.se/priser/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Hem","item":"https://www.sitea.se/"},{"@type":"ListItem","position":2,"name":"Priser"}]}]}</script>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//js-eu1.hs-scripts.com' />
    <link rel='dns-prefetch' href='//www.google.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
    <link rel="alternate" type="application/rss+xml" title="Sitea &raquo; flöde" href="https://www.sitea.se/feed/" />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <style id='global-styles-inline-css' type='text/css'>
        body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    </style>






    <style id='main-styles-inline-css' type='text/css'>
        html body[data-header-resize="1"] .container-wrap, html body[data-header-format="left-header"][data-header-resize="0"] .container-wrap, html body[data-header-resize="0"] .container-wrap, body[data-header-format="left-header"][data-header-resize="0"] .container-wrap { padding-top: 0; } .main-content > .row > #breadcrumbs.yoast { padding: 20px 0; }
    </style>











    <style id='dynamic-css-inline-css' type='text/css'>
        @media only screen and (min-width:1000px){body #ajax-content-wrap.no-scroll{min-height:calc(100vh - 75px);height:calc(100vh - 75px)!important;}}@media only screen and (min-width:1000px){#page-header-wrap.fullscreen-header,#page-header-wrap.fullscreen-header #page-header-bg,html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,#nectar_fullscreen_rows:not(.afterLoaded) > div{height:calc(100vh - 74px);}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 74px);}html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header{top:75px;}.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh - 73px)!important;}.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.admin-bar .nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container{height:calc(100vh - 73px - 32px)!important;}}@media only screen and (max-width:999px){.using-mobile-browser #nectar_fullscreen_rows:not(.afterLoaded):not([data-mobile-disable="on"]) > div{height:calc(100vh - 101px);}.using-mobile-browser .wpb_row.vc_row-o-full-height.top-level,.using-mobile-browser .wpb_row.vc_row-o-full-height.top-level > .col.span_12,[data-permanent-transparent="1"].using-mobile-browser .wpb_row.vc_row-o-full-height.top-level,[data-permanent-transparent="1"].using-mobile-browser .wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 101px);}html:not(.nectar-box-roll-loaded) .nectar-box-roll > #page-header-bg.fullscreen-header,.nectar_fullscreen_zoom_recent_projects,.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded),.nectar-slider-wrap[data-fullscreen="true"]:not(.loaded) .swiper-container,#nectar_fullscreen_rows:not(.afterLoaded):not([data-mobile-disable="on"]) > div{height:calc(100vh - 48px);}.wpb_row.vc_row-o-full-height.top-level,.wpb_row.vc_row-o-full-height.top-level > .col.span_12{min-height:calc(100vh - 48px);}body[data-transparent-header="false"] #ajax-content-wrap.no-scroll{min-height:calc(100vh - 48px);height:calc(100vh - 48px);}}.pricing-table[data-style="flat-alternative"] .pricing-column.highlight.accent-color h3,.pricing-table[data-style="flat-alternative"] .pricing-column.accent-color h4,.pricing-table[data-style="flat-alternative"] .pricing-column.accent-color .interval{color:#69c4f2;}.pricing-table[data-style="default"] .pricing-column.highlight.accent-color h3,.pricing-table[data-style="flat-alternative"] .pricing-column.accent-color.highlight h3 .highlight-reason,.pricing-table[data-style="flat-alternative"] .pricing-column.accent-color:before{background-color:#69c4f2;}.container-wrap .main-content .column-image-bg-wrap[data-bg-pos="left top"] .column-image-bg{background-position:left top;}.pricing-table[data-style="flat-alternative"] .pricing-column.highlight.extra-color-1 h3,.pricing-table[data-style="flat-alternative"] .pricing-column.extra-color-1 h4,.pricing-table[data-style="flat-alternative"] .pricing-column.extra-color-1 .interval{color:#36d895;}.pricing-table[data-style="default"] .pricing-column.highlight.extra-color-1 h3,.pricing-table[data-style="flat-alternative"] .pricing-column.extra-color-1.highlight h3 .highlight-reason,.pricing-table[data-style="flat-alternative"] .pricing-column.extra-color-1:before{background-color:#36d895;}.nectar-gradient-text[data-color="extra-color-gradient-1"][data-direction="horizontal"] *{color:#36d895;background:linear-gradient(to bottom right,#1cb8db,#36d895);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;text-fill-color:transparent;display:inline-block;}.nectar-icon-list[data-icon-color="extra-color-gradient-1"] .list-icon-holder[data-icon_type="numerical"] span{color:#1cb8db;background:linear-gradient(to bottom right,#1cb8db,#36d895);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;text-fill-color:transparent;display:inline-block;}.nectar-cta.hover_color_e8e8ff .link_wrap:hover{background-color:#e8e8ff!important;}@media only screen and (max-width:999px){.nectar-cta.display_tablet_inherit{display:inherit;}}.nectar-cta.hover_color_2643ef .link_wrap:before{background-color:#2643ef;}.img-with-aniamtion-wrap[data-border-radius="none"] .img-with-animation,.img-with-aniamtion-wrap[data-border-radius="none"] .hover-wrap{border-radius:none;}.img-with-aniamtion-wrap[data-border-radius="10px"] .img-with-animation,.img-with-aniamtion-wrap[data-border-radius="10px"] .hover-wrap{border-radius:10px;}.icon-tiny[class^="icon-"].accent-color{color:#69c4f2;}.icon-tiny[class^="icon-"].extra-color-1{color:#36d895;}.col.padding-12-percent > .vc_column-inner,.col.padding-12-percent > .n-sticky > .vc_column-inner{padding:calc(600px * 0.12);}@media only screen and (max-width:690px){.col.padding-12-percent > .vc_column-inner,.col.padding-12-percent > .n-sticky > .vc_column-inner{padding:calc(100vw * 0.12);}}@media only screen and (min-width:1000px){.col.padding-12-percent > .vc_column-inner,.col.padding-12-percent > .n-sticky > .vc_column-inner{padding:calc((100vw - 180px) * 0.12);}.column_container:not(.vc_col-sm-12) .col.padding-12-percent > .vc_column-inner{padding:calc((100vw - 180px) * 0.06);}}@media only screen and (min-width:1425px){.col.padding-12-percent > .vc_column-inner{padding:calc(1245px * 0.12);}.column_container:not(.vc_col-sm-12) .col.padding-12-percent > .vc_column-inner{padding:calc(1245px * 0.06);}}.full-width-content .col.padding-12-percent > .vc_column-inner{padding:calc(100vw * 0.12);}@media only screen and (max-width:999px){.full-width-content .col.padding-12-percent > .vc_column-inner{padding:calc(100vw * 0.12);}}@media only screen and (min-width:1000px){.full-width-content .column_container:not(.vc_col-sm-12) .col.padding-12-percent > .vc_column-inner{padding:calc(100vw * 0.06);}}@media only screen and (max-width:999px){body .wpb_row .wpb_column.child_column.padding-8-percent_tablet > .vc_column-inner,body .wpb_row .wpb_column.child_column.padding-8-percent_tablet > .n-sticky > .vc_column-inner{padding:calc(999px * 0.08);}}#ajax-content-wrap .col[data-padding-pos="top-bottom"]> .vc_column-inner,#ajax-content-wrap .col[data-padding-pos="top-bottom"] > .n-sticky > .vc_column-inner{padding-left:0;padding-right:0}.col.padding-15-percent > .vc_column-inner,.col.padding-15-percent > .n-sticky > .vc_column-inner{padding:calc(600px * 0.15);}@media only screen and (max-width:690px){.col.padding-15-percent > .vc_column-inner,.col.padding-15-percent > .n-sticky > .vc_column-inner{padding:calc(100vw * 0.15);}}@media only screen and (min-width:1000px){.col.padding-15-percent > .vc_column-inner,.col.padding-15-percent > .n-sticky > .vc_column-inner{padding:calc((100vw - 180px) * 0.15);}.column_container:not(.vc_col-sm-12) .col.padding-15-percent > .vc_column-inner{padding:calc((100vw - 180px) * 0.075);}}@media only screen and (min-width:1425px){.col.padding-15-percent > .vc_column-inner{padding:calc(1245px * 0.15);}.column_container:not(.vc_col-sm-12) .col.padding-15-percent > .vc_column-inner{padding:calc(1245px * 0.075);}}.full-width-content .col.padding-15-percent > .vc_column-inner{padding:calc(100vw * 0.15);}@media only screen and (max-width:999px){.full-width-content .col.padding-15-percent > .vc_column-inner{padding:calc(100vw * 0.15);}}@media only screen and (min-width:1000px){.full-width-content .column_container:not(.vc_col-sm-12) .col.padding-15-percent > .vc_column-inner{padding:calc(100vw * 0.075);}}.wpb_column[data-cfc="true"] h1,.wpb_column[data-cfc="true"] h2,.wpb_column[data-cfc="true"] h3,.wpb_column[data-cfc="true"] h4,.wpb_column[data-cfc="true"] h5,.wpb_column[data-cfc="true"] h6,.wpb_column[data-cfc="true"] p{color:inherit}@media only screen and (max-width:999px){body .vc_row-fluid:not(.full-width-content) > .span_12 .vc_col-sm-2:not(:last-child):not([class*="vc_col-xs-"]){margin-bottom:25px;}}@media only screen and (min-width :690px) and (max-width :999px){body .vc_col-sm-2{width:31.2%;margin-left:3.1%;}body .full-width-content .vc_col-sm-2{width:33.3%;margin-left:0;}.vc_row-fluid .vc_col-sm-2[class*="vc_col-sm-"]:first-child:not([class*="offset"]),.vc_row-fluid .vc_col-sm-2[class*="vc_col-sm-"]:nth-child(3n+4):not([class*="offset"]){margin-left:0;}}@media only screen and (max-width :690px){body .vc_row-fluid .vc_col-sm-2:not([class*="vc_col-xs"]),body .vc_row-fluid.full-width-content .vc_col-sm-2:not([class*="vc_col-xs"]){width:50%;}.vc_row-fluid .vc_col-sm-2[class*="vc_col-sm-"]:first-child:not([class*="offset"]),.vc_row-fluid .vc_col-sm-2[class*="vc_col-sm-"]:nth-child(2n+3):not([class*="offset"]){margin-left:0;}}@media only screen and (max-width:999px){#ajax-content-wrap .vc_row.inner_row.right_padding_tablet_20pct .row_col_wrap_12_inner{padding-right:20%!important;}}#ajax-content-wrap .vc_row.left_padding_4pct .row_col_wrap_12{padding-left:4%;}#ajax-content-wrap .vc_row.right_padding_4pct .row_col_wrap_12{padding-right:4%;}body .container-wrap .wpb_row[data-column-margin="none"]:not(.full-width-section):not(.full-width-content){margin-bottom:0;}body .container-wrap .vc_row-fluid[data-column-margin="none"] > .span_12,body .container-wrap .vc_row-fluid[data-column-margin="none"] .full-page-inner > .container > .span_12,body .container-wrap .vc_row-fluid[data-column-margin="none"] .full-page-inner > .span_12{margin-left:0;margin-right:0;}body .container-wrap .vc_row-fluid[data-column-margin="none"] .wpb_column:not(.child_column),body .container-wrap .inner_row[data-column-margin="none"] .child_column{padding-left:0;padding-right:0;}.wpb_row[data-br="10px"][data-br-applies="inner"] .row_col_wrap_12{border-radius:10px;}@media only screen and (max-width:999px){.vc_row.inner_row.bottom_padding_tablet_10px{padding-bottom:10px!important;}}@media only screen and (max-width:999px){#ajax-content-wrap .vc_row.inner_row.left_padding_tablet_20pct .row_col_wrap_12_inner{padding-left:20%!important;}}.col.padding-4-percent > .vc_column-inner,.col.padding-4-percent > .n-sticky > .vc_column-inner{padding:calc(600px * 0.06);}@media only screen and (max-width:690px){.col.padding-4-percent > .vc_column-inner,.col.padding-4-percent > .n-sticky > .vc_column-inner{padding:calc(100vw * 0.06);}}@media only screen and (min-width:1000px){.col.padding-4-percent > .vc_column-inner,.col.padding-4-percent > .n-sticky > .vc_column-inner{padding:calc((100vw - 180px) * 0.04);}.column_container:not(.vc_col-sm-12) .col.padding-4-percent > .vc_column-inner{padding:calc((100vw - 180px) * 0.02);}}@media only screen and (min-width:1425px){.col.padding-4-percent > .vc_column-inner{padding:calc(1245px * 0.04);}.column_container:not(.vc_col-sm-12) .col.padding-4-percent > .vc_column-inner{padding:calc(1245px * 0.02);}}.full-width-content .col.padding-4-percent > .vc_column-inner{padding:calc(100vw * 0.04);}@media only screen and (max-width:999px){.full-width-content .col.padding-4-percent > .vc_column-inner{padding:calc(100vw * 0.06);}}@media only screen and (min-width:1000px){.full-width-content .column_container:not(.vc_col-sm-12) .col.padding-4-percent > .vc_column-inner{padding:calc(100vw * 0.02);}}#ajax-content-wrap .col[data-padding-pos="left-right"] > .vc_column-inner,#ajax-content-wrap .col[data-padding-pos="left-right"] > .n-sticky > .vc_column-inner{padding-top:0;padding-bottom:0}@media only screen and (max-width:999px){.wpb_column.force-tablet-text-align-left,.wpb_column.force-tablet-text-align-left .col{text-align:left!important;}.wpb_column.force-tablet-text-align-right,.wpb_column.force-tablet-text-align-right .col{text-align:right!important;}.wpb_column.force-tablet-text-align-center,.wpb_column.force-tablet-text-align-center .col,.wpb_column.force-tablet-text-align-center .vc_custom_heading,.wpb_column.force-tablet-text-align-center .nectar-cta{text-align:center!important;}.wpb_column.force-tablet-text-align-center .img-with-aniamtion-wrap img{display:inline-block;}}.container-wrap .main-content .column-image-bg-wrap[data-bg-pos="center center"] .column-image-bg{background-position:center center;}.col.padding-2-percent > .vc_column-inner,.col.padding-2-percent > .n-sticky > .vc_column-inner{padding:calc(600px * 0.03);}@media only screen and (max-width:690px){.col.padding-2-percent > .vc_column-inner,.col.padding-2-percent > .n-sticky > .vc_column-inner{padding:calc(100vw * 0.03);}}@media only screen and (min-width:1000px){.col.padding-2-percent > .vc_column-inner,.col.padding-2-percent > .n-sticky > .vc_column-inner{padding:calc((100vw - 180px) * 0.02);}.column_container:not(.vc_col-sm-12) .col.padding-2-percent > .vc_column-inner{padding:calc((100vw - 180px) * 0.01);}}@media only screen and (min-width:1425px){.col.padding-2-percent > .vc_column-inner{padding:calc(1245px * 0.02);}.column_container:not(.vc_col-sm-12) .col.padding-2-percent > .vc_column-inner{padding:calc(1245px * 0.01);}}.full-width-content .col.padding-2-percent > .vc_column-inner{padding:calc(100vw * 0.02);}@media only screen and (max-width:999px){.full-width-content .col.padding-2-percent > .vc_column-inner{padding:calc(100vw * 0.03);}}@media only screen and (min-width:1000px){.full-width-content .column_container:not(.vc_col-sm-12) .col.padding-2-percent > .vc_column-inner{padding:calc(100vw * 0.01);}}body #ajax-content-wrap .col[data-padding-pos="right"] > .vc_column-inner,#ajax-content-wrap .col[data-padding-pos="right"] > .n-sticky > .vc_column-inner{padding-left:0;padding-top:0;padding-bottom:0}@media only screen and (max-width:690px){.vc_row.top_padding_phone_4pct{padding-top:4%!important;}}@media only screen and (max-width:690px){.wpb_column.force-phone-text-align-left,.wpb_column.force-phone-text-align-left .col{text-align:left!important;}.wpb_column.force-phone-text-align-right,.wpb_column.force-phone-text-align-right .col{text-align:right!important;}.wpb_column.force-phone-text-align-center,.wpb_column.force-phone-text-align-center .col,.wpb_column.force-phone-text-align-center .vc_custom_heading,.wpb_column.force-phone-text-align-center .nectar-cta{text-align:center!important;}.wpb_column.force-phone-text-align-center .img-with-aniamtion-wrap img{display:inline-block;}}@media only screen and (max-width:690px){.nectar-cta.display_phone_inherit{display:inherit;}}@media only screen and (max-width:690px){body .wpb_row .wpb_column.child_column.padding-8-percent_phone > .vc_column-inner,body .wpb_row .wpb_column.child_column.padding-8-percent_phone > .n-sticky > .vc_column-inner{padding:calc(690px * 0.08);}}@media only screen and (max-width:690px){.vc_row.bottom_padding_phone_0pct{padding-bottom:0!important;}}.screen-reader-text,.nectar-skip-to-content:not(:focus){border:0;clip:rect(1px,1px,1px,1px);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute!important;width:1px;word-wrap:normal!important;}
        input.wpcf7-submit { width: 100%; }

        .nectar-animated-title-inner
        border-radius: 5px;
        }

        .border-top {
            border-top: 5px solid red;
        }
        body .page-submenu ul li a {
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 16px;
            font-weight:300;
        }

        .nectar-button.fixed-size {
            width: 100%;
            text-align: center;
            font-size: 15px;
            line-height:23px;
            font-weight: 600;
        }

        .nectar-button.text-size {
            font-size: 15px;
            line-height:23px;
            font-weight: 600;
        }


        #borderbottom {
            border-bottom: 5px solid #19CDAA;
        }

        #top .sf-menu .sub-menu {
            border-radius: 10px;
        }

        .ui-accordion .ui-state-default {
            border: 1px solid #e6e6e6;
            background-color: #ffffff !important;
        }
        .ui-accordion .ui-accordion-content {
            border: 1px solid #ececec;
            border-top: none;
        }

        .ui-accordion .ui-state-hover {
            background-color: #36d895 !important;
        }

        .ui-accordion .ui-corner-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .ui-accordion .ui-corner-bottom {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .ui-accordion .ui-corner-all {
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .meta-comment-count {
            display: none!important;
        }
        article.post .post-meta {
            display: none !important;
        }


        .post-content {
            padding-left: 0px !important;
        }

        .n-shortcode {
            display: none!important;
        }

        }
        .post-title {
            font-weight: 700;
        }

        .pricing-table[data-style="flat-alternative"] .pricing-column h3 {
            font-size: 36px;
            line-height: 40px;
        }

        #footer-outer a,#footer-outer p {
            font-size: 14px !important;
        }

        h3.related-title {
            padding: 30px 0 30px;
            visibility: hidden;
        }
    </style>

    <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js' defer></script>
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js' defer></script>
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js' defer></script>
    <script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-includes/js/dist/hooks.min.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script>
    <script type='text/javascript' id='say-what-js-js-extra'>
        /* <![CDATA[ */
        var say_what_data = {"replacements":{"salient|Menu|":"Inneh\u00e5ll","salient-social|Share|":"Dela","salient-social|Tweet|":"Twittra","salient-social|Love|":"Gilla","salient|Page Not Found|":"Sidan hittades inte","salient|Back Home|":"Till Startsidan","salient-social|read|":"l\u00e4sning"}};
        /* ]]> */
    </script>
    <script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/plugins/say-what/assets/build/frontend.js?ver=1650445377' id='say-what-js-js' defer></script>
    <link rel="https://api.w.org/" href="https://www.sitea.se/wp-json/" /><link rel="alternate" type="application/json" href="https://www.sitea.se/wp-json/wp/v2/pages/339" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.sitea.se/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.sitea.se/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.9.3" />
    <link rel='shortlink' href='https://www.sitea.se/?p=339' />
    <link rel="alternate" type="application/json+oembed" href="https://www.sitea.se/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.sitea.se%2Fpriser%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://www.sitea.se/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.sitea.se%2Fpriser%2F&#038;format=xml" />
    <!-- DO NOT COPY THIS SNIPPET! Start of Page Analytics Tracking for HubSpot WordPress plugin v8.11.11-->
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript">
				var _hsq = _hsq || [];
				_hsq.push(["setContentId", "standard-page"]);
			</script>
    <!-- DO NOT COPY THIS SNIPPET! End of Page Analytics Tracking for HubSpot WordPress plugin -->
    <script type="rocketlazyloadscript">
				(function() {
					var hbspt = window.hbspt = window.hbspt || {};
					hbspt.forms = hbspt.forms || {};
					hbspt._wpFormsQueue = [];
					hbspt.enqueueForm = function(formDef) {
						if (hbspt.forms && hbspt.forms.create) {
							hbspt.forms.create(formDef);
						} else {
							hbspt._wpFormsQueue.push(formDef);
						}
					};
					if (!window.hbspt.forms.create) {
						Object.defineProperty(window.hbspt.forms, 'create', {
							configurable: true,
							get: function() {
								return hbspt._wpCreateForm;
							},
							set: function(value) {
								hbspt._wpCreateForm = value;
								while (hbspt._wpFormsQueue.length) {
									var formDef = hbspt._wpFormsQueue.shift();
									if (!document.currentScript) {
										var formScriptId = 'leadin-forms-v2-js';
										hubspot.utils.currentScript = document.getElementById(formScriptId);
									}
									hbspt._wpCreateForm.call(hbspt.forms, formDef);
								}
							},
						});
					}
				})();
			</script>
    <script type="rocketlazyloadscript" data-rocket-type="text/javascript"> var root = document.getElementsByTagName( "html" )[0]; root.setAttribute( "class", "js" ); </script><!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="rocketlazyloadscript" async src="https://www.googletagmanager.com/gtag/js?id=UA-85885318-1"></script>
    <script type="rocketlazyloadscript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-85885318-1');
</script>

    <script type="rocketlazyloadscript">
  gtag('config', 'AW-855792787/EiSxCNWjpqIDEJO5iZgD', {
    'phone_conversion_number': '08 40 90 32 10'
  });
</script>

    <!-- Global site tag (gtag.js) - Google Ads: 855792787 -->
    <script type="rocketlazyloadscript" async src="https://www.googletagmanager.com/gtag/js?id=AW-855792787"></script>
    <script type="rocketlazyloadscript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-855792787');
</script><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
    <link rel="icon" href="https://www.sitea.se/wp-content/uploads/2020/10/cropped-sitea-webbyra-stockholm-min-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://www.sitea.se/wp-content/uploads/2020/10/cropped-sitea-webbyra-stockholm-min-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.sitea.se/wp-content/uploads/2020/10/cropped-sitea-webbyra-stockholm-min-180x180.png" />
    <meta name="msapplication-TileImage" content="https://www.sitea.se/wp-content/uploads/2020/10/cropped-sitea-webbyra-stockholm-min-270x270.png" />
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1469639641867{padding-bottom: 10px !important;}.vc_custom_1591389783606{margin-bottom: 50px !important;}.vc_custom_1591389790886{margin-bottom: 50px !important;}.vc_custom_1475159816681{margin-bottom: 30px !important;}.vc_custom_1475160334194{margin-top: -20px !important;}.vc_custom_1487428649957{margin-top: -20px !important;}.vc_custom_1475077464841{margin-top: -20px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript></head><body class="page-template-default page page-id-339 material wpb-js-composer js-comp-ver-6.7.1 vc_responsive" data-footer-reveal="false" data-footer-reveal-shadow="none" data-header-format="default" data-body-border="off" data-boxed-style="" data-header-breakpoint="1000" data-dropdown-style="minimal" data-cae="easeOutQuint" data-cad="100" data-megamenu-width="contained" data-aie="none" data-ls="none" data-apte="center_mask_reveal" data-hhun="0" data-fancy-form-rcs="default" data-form-style="default" data-form-submit="regular" data-is="minimal" data-button-style="slightly_rounded_shadow" data-user-account-button="false" data-flex-cols="true" data-col-gap="default" data-header-inherit-rc="false" data-header-search="false" data-animated-anchors="false" data-ajax-transitions="false" data-full-width-header="true" data-slide-out-widget-area="true" data-slide-out-widget-area-style="simple" data-user-set-ocm="off" data-loading-animation="none" data-bg-header="false" data-responsive="1" data-ext-responsive="true" data-ext-padding="90" data-header-resize="1" data-header-color="custom" data-transparent-header="false" data-cart="false" data-remove-m-parallax="" data-remove-m-video-bgs="" data-m-animate="0" data-force-header-trans-color="light" data-smooth-scrolling="0" data-permanent-transparent="false" >

<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
	 (function(window, document) {

		 if(navigator.userAgent.match(/(Android|iPod|iPhone|iPad|BlackBerry|IEMobile|Opera Mini)/)) {
			 document.body.className += " using-mobile-browser mobile ";
		 }

		 if( !("ontouchstart" in window) ) {

			 var body = document.querySelector("body");
			 var winW = window.innerWidth;
			 var bodyW = body.clientWidth;

			 if (winW > bodyW + 4) {
				 body.setAttribute("style", "--scroll-bar-w: " + (winW - bodyW - 4) + "px");
			 } else {
				 body.setAttribute("style", "--scroll-bar-w: 0px");
			 }
		 }

	 })(window, document);
   </script><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><a href="#ajax-content-wrap" class="nectar-skip-to-content">Skip to main content</a><div class="ocm-effect-wrap"><div class="ocm-effect-wrap-inner">
        <div id="header-space"  data-header-mobile-fixed='1'></div>

        <div id="header-outer" data-has-menu="true" data-has-buttons="no" data-header-button_style="default" data-using-pr-menu="false" data-mobile-fixed="1" data-ptnm="false" data-lhe="default" data-user-set-bg="#ffffff" data-format="default" data-permanent-transparent="false" data-megamenu-rt="0" data-remove-fixed="0" data-header-resize="1" data-cart="false" data-transparency-option="0" data-box-shadow="small" data-shrink-num="6" data-using-secondary="0" data-using-logo="1" data-logo-height="35" data-m-logo-height="25" data-padding="20" data-full-width="true" data-condense="false" >

            <div id="search-outer" class="nectar">
                <div id="search">
                    <div class="container">
                        <div id="search-box">
                            <div class="inner-wrap">
                                <div class="col span_12">
                                    <form role="search" action="https://www.sitea.se/" method="GET">
                                        <input type="text" name="s" id="s" value="" aria-label="Search" placeholder="Search" />

                                        <span>Hit enter to search or ESC to close</span>
                                    </form>
                                </div><!--/span_12-->
                            </div><!--/inner-wrap-->
                        </div><!--/search-box-->
                        <div id="close"><a href="#"><span class="screen-reader-text">Close Search</span>
                                <span class="close-wrap"> <span class="close-line close-line1"></span> <span class="close-line close-line2"></span> </span>				 </a></div>
                    </div><!--/container-->
                </div><!--/search-->
            </div><!--/search-outer-->

            <header id="top">
                <div class="container">
                    <div class="row">
                        <div class="col span_3">
                            <a id="logo" href="https://www.sitea.se" data-supplied-ml-starting-dark="false" data-supplied-ml-starting="false" data-supplied-ml="false" >
                                <img class="stnd skip-lazy default-logo" width="540" height="69" alt="Sitea" src="https://www.sitea.se/wp-content/uploads/2021/04/sitea-logo-ny-1.jpg.webp" srcset="https://www.sitea.se/wp-content/uploads/2021/04/sitea-logo-ny-1.jpg.webp 1x,https://www.sitea.se/wp-content/uploads/2021/04/sitea-logo-ny.jpg.webp 2x" />				</a>
                        </div><!--/span_3-->

                        <div class="col span_9 col_last">
                            <div class="nectar-mobile-only mobile-header"><div class="inner"></div></div>
                            <div class="slide-out-widget-area-toggle mobile-icon simple" data-custom-color="false" data-icon-animation="simple-transform">
                                <div> <a href="#sidewidgetarea" aria-label="Navigation Menu" aria-expanded="false" class="closed">
                                        <span class="screen-reader-text">Innehåll</span><span aria-hidden="true"> <i class="lines-button x2"> <i class="lines"></i> </i> </span>
                                    </a></div>
                            </div>

                            <nav>
                                <ul class="sf-menu">
                                    <li id="menu-item-429" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nectar-regular-menu-item menu-item-429"><a href="https://www.sitea.se/kopa-hemsida-webbyra/"><span class="menu-title-text">Hemsida</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-7575" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-7575"><a href="https://www.sitea.se/hemsida-foretag/"><span class="menu-title-text">Hemsida Företag</span></a></li>
                                            <li id="menu-item-6344" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-6344"><a href="https://www.sitea.se/kopa-hemsida-webbyra/"><span class="menu-title-text">Köpa Hemsida</span></a></li>
                                            <li id="menu-item-13040" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-13040"><a href="https://www.sitea.se/ny-hemsida/"><span class="menu-title-text">Ny Hemsida</span></a></li>
                                            <li id="menu-item-16623" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-16623"><a href="https://www.sitea.se/hjalp-med-hemsida-wordpress/"><span class="menu-title-text">Hjälp med Hemsida</span></a></li>
                                            <li id="menu-item-2507" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-2507"><a href="https://www.sitea.se/vad-kostar-en-hemsida/"><span class="menu-title-text">Vad kostar en hemsida?</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-6893" class="columns-3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nectar-regular-menu-item megamenu nectar-megamenu-menu-item align-left width-100 menu-item-6893"><a href="https://www.sitea.se/wordpress-konsult/"><span class="menu-title-text">WordPress</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-15277" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item megamenu-column-width-30 megamenu-column-padding-default menu-item-15277"><a href="#"><span class="menu-title-text"><b>Tjänster</b></span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-6939" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-6939"><a href="https://www.sitea.se/kopa-hemsida-webbyra/"><span class="menu-title-text">Köp Hemsida</span></a></li>
                                                    <li id="menu-item-13569" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-13569"><a href="https://www.sitea.se/wordpress-kurs/"><span class="menu-title-text">WordPress Kurs</span></a></li>
                                                    <li id="menu-item-14134" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-14134"><a href="https://www.sitea.se/hjalp-med-wordpress/"><span class="menu-title-text">Hjälp med WordPress</span></a></li>
                                                    <li id="menu-item-6894" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-6894"><a href="https://www.sitea.se/hjalp-med-hemsida-wordpress/"><span class="menu-title-text">Hjälp med Hemsida</span></a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-15278" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item megamenu-column-width-30 megamenu-column-padding-default menu-item-15278"><a href="#"><span class="menu-title-text"><b>Guider</b></span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-6895" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-6895"><a href="https://www.sitea.se/hemsida-wordpress/"><span class="menu-title-text">Vad är WordPress?</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li id="menu-item-7379" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-7379"><a href="https://www.sitea.se/webbshop-wordpress-woocommerce/"><span class="menu-title-text">Vad är WooCommerce?</span></a></li>
                                                    <li id="menu-item-15279" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-15279"><a href="https://www.sitea.se/online-marknadsforing/basta-wordpress-tillaggen-plugins/"><span class="menu-title-text">De bästa WordPress tilläggen för 2022</span></a></li>
                                                    <li id="menu-item-15280" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-15280"><a href="https://www.sitea.se/online-marknadsforing/snabbare-wordpress-hemsida-guide/"><span class="menu-title-text">Snabba upp din WordPress hemsida</span></a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-17552" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item megamenu-column-width-30 megamenu-column-padding-default menu-item-17552"><a href="http://www.sitea.se/hemsida-wordpress/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-zoom-in-slow"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-h4"><span class="menu-title-text"><b>WordPress Guide</b></span></span></div></div></a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-21495" class="megamenu columns-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item menu-item-21495"><a href="https://www.sitea.se/sokmotoroptimering-stockholm/"><span class="menu-title-text">SEO &#038; SEM</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-20698" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item menu-item-20698"><a href="#"><span class="menu-title-text">SEO</span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-7837" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-7837"><a href="https://www.sitea.se/sokmotoroptimering-stockholm/"><span class="menu-title-text">Sökmotoroptimering</span></a></li>
                                                    <li id="menu-item-16908" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-16908"><a href="https://www.sitea.se/seo-byra-stockholm/"><span class="menu-title-text">SEO Byrå Stockholm</span></a></li>
                                                    <li id="menu-item-20165" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-20165"><a href="https://www.sitea.se/seo-konsult/"><span class="menu-title-text">Vad gör en SEO Konsult?</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                                    <li id="menu-item-7337" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-7337"><a href="https://www.sitea.se/vad-ar-seo/"><span class="menu-title-text">Vad är SEO?</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-20697" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item menu-item-20697"><a href="#"><span class="menu-title-text">SEM</span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-958" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-958"><a href="https://www.sitea.se/google-annonsering-adwords/"><span class="menu-title-text">Google Ads Annonsering</span></a></li>
                                                    <li id="menu-item-14721" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-14721"><a href="https://www.sitea.se/bing-annonsering/"><span class="menu-title-text">Bing Annonsering</span></a></li>
                                                    <li id="menu-item-1546" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-1546"><a href="https://www.sitea.se/adwords-konsult-stockholm/"><span class="menu-title-text">Google Ads Konsult</span></a></li>
                                                    <li id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-934"><a href="https://www.sitea.se/sa-funkar-adwords/"><span class="menu-title-text">Vad är Google Ads?</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-20699" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nectar-regular-menu-item menu-item-20699"><a href="https://www.sitea.se/sem-byra/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-default"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-default"><span class="menu-title-text">Sitea SEO Skola</span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></span></div></div></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-21603" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-21603"><a href="https://www.sitea.se/on-page-seo/"><span class="menu-title-text">On Page SEO</span></a></li>
                                                    <li id="menu-item-21805" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-21805"><a href="https://www.sitea.se/seo/lokal-seo/"><span class="menu-title-text">Så Lyckas du med Lokal SEO 2022</span></a></li>
                                                    <li id="menu-item-21988" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-21988"><a href="https://www.sitea.se/seo/on-page-seo/"><span class="menu-title-text">10 Viktigaste On Page SEO Faktorerna (2022)</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-519" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nectar-regular-menu-item menu-item-519"><a href="https://www.sitea.se/digital-marknadsforing/"><span class="menu-title-text">Marketing</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-9932" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-9932"><a href="https://www.sitea.se/digital-marknadsforing/"><span class="menu-title-text">Så arbetar vi med marknadsföring</span></a></li>
                                            <li id="menu-item-20590" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-20590"><a href="https://www.sitea.se/konverteringsoptimering/"><span class="menu-title-text">Konverteringsoptimering</span></a></li>
                                            <li id="menu-item-20516" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-20516"><a href="https://www.sitea.se/content/"><span class="menu-title-text">Content (Foto, Video, Copy)</span></a></li>
                                            <li id="menu-item-9931" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-9931"><a href="https://www.sitea.se/digital-marknadsforing-guide/"><span class="menu-title-text">Digital Marknadsföring för 2022</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-428" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-339 current_page_item nectar-regular-menu-item menu-item-428"><a href="https://www.sitea.se/priser/" aria-current="page"><span class="menu-title-text">Priser</span></a></li>
                                    <li id="menu-item-12834" class="megamenu columns-4 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item menu-item-12834"><a href="#"><span class="menu-title-text">Guider</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-8170" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item menu-item-8170"><a href="#"><span class="menu-title-text"><b>Hemsida</b></span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-2479" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-2479"><a href="https://www.sitea.se/hemsida-wordpress/"><span class="menu-title-text">Vad är WordPress?</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li id="menu-item-8171" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-8171"><a href="https://www.sitea.se/vad-kostar-en-hemsida/"><span class="menu-title-text">Vad kostar en hemsida?</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li id="menu-item-10681" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-10681"><a href="https://www.sitea.se/vad-kostar-det-att-kopa-en-hemsida/"><span class="menu-title-text">Guide för att Köpa Hemsida</span></a></li>
                                                    <li id="menu-item-8268" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-8268"><a href="https://www.sitea.se/bygga-hemsida/"><span class="menu-title-text">Bygg din egen hemsida</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li id="menu-item-8226" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-8226"><a href="https://www.sitea.se/hemsida-wordpress/#hemsida-sakerhet"><span class="menu-title-text">Säkerhet för hemsida</span></a></li>
                                                    <li id="menu-item-8634" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-8634"><a href="https://www.sitea.se/grafisk-design/valj-ratt-farg-till-hemsida-2018/"><span class="menu-title-text">Välj Rätt Färg Till Hemsidan</span></a></li>
                                                    <li id="menu-item-9943" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-9943"><a href="https://www.sitea.se/online-marknadsforing/mobilanpassad-hemsida-guide/"><span class="menu-title-text">Mobilanpassad Hemsida Guide</span></a></li>
                                                    <li id="menu-item-10716" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-10716"><a href="https://www.sitea.se/online-marknadsforing/snabbare-wordpress-hemsida-guide/"><span class="menu-title-text">Snabbare WordPress-hemsida</span></a></li>
                                                    <li id="menu-item-10502" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-10502"><a href="https://www.sitea.se/online-marknadsforing/basta-wordpress-tillaggen-plugins/"><span class="menu-title-text">Bästa WordPress Plugins</span></a></li>
                                                    <li id="menu-item-8291" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-8291"><a href="https://www.sitea.se/valja-webbhotell/"><span class="menu-title-text">Hur väljer jag Webbhotell?</span></a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-8173" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item menu-item-8173"><a href="#"><span class="menu-title-text"><b>Google Ads &#038; Social Media</b></span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-12227" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-12227"><a href="https://www.sitea.se/ads/annonsera-med-google-ads-adwords/"><span class="menu-title-text">Annonsera på Google Ads (AdWords)</span></a></li>
                                                    <li id="menu-item-6986" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-6986"><a href="https://www.sitea.se/sa-funkar-adwords/"><span class="menu-title-text">Vad är Google Ads (AdWords)?</span></a></li>
                                                    <li id="menu-item-13758" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-13758"><a href="https://www.sitea.se/google-ads/vad-ar-google-display-allt-du-behover-veta-2020/"><span class="menu-title-text">Vad är Google Display?</span></a></li>
                                                    <li id="menu-item-14219" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-14219"><a href="https://www.sitea.se/ads/facebook-annonsering/"><span class="menu-title-text">Facebook Ads Annonsering</span></a></li>
                                                    <li id="menu-item-13595" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-13595"><a href="https://www.sitea.se/ads/microsoft-annonsering-bing/"><span class="menu-title-text">Microsoft Annonser (Bing)</span></a></li>
                                                    <li id="menu-item-8178" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-8178"><a href="https://www.sitea.se/online-marknadsforing/organisk-vs-betald-trafik-ranka-hogt-pa-google/"><span class="menu-title-text">Organisk vs. Betald Trafik</span></a></li>
                                                    <li id="menu-item-8180" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-8180"><a href="https://www.sitea.se/synas-pa-google/darfor-misslyckas-din-marknadsforing-pa-natet-och-hur-du-lyckas/"><span class="menu-title-text">Därför misslyckas din Sociala Marknadsföring</span></a></li>
                                                    <li id="menu-item-8181" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-8181"><a href="https://www.sitea.se/synas-pa-google/social-marknadsforing-ar-det-viktigt/"><span class="menu-title-text">Social Marknadsföring – Är det viktigt?</span></a></li>
                                                    <li id="menu-item-9258" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-9258"><a href="https://www.sitea.se/online-marknadsforing/google-adwords-byter-namn-till-google-ads/"><span class="menu-title-text">AdWords blir Google Ads</span></a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-8174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item menu-item-8174"><a href="#"><span class="menu-title-text"><b>Sökordsoptimering (SEO)</b></span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-7275" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-7275"><a href="https://www.sitea.se/vad-ar-seo/"><span class="menu-title-text">Vad är SEO?</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li id="menu-item-12072" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-12072"><a href="https://www.sitea.se/seo/sokordsanalys-google/"><span class="menu-title-text">Så gör du en Sökordsanalys</span></a></li>
                                                    <li id="menu-item-21475" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-21475"><a href="https://www.sitea.se/seo/seo-text/"><span class="menu-title-text">Så skriver du Grymma SEO Texter (2022)</span></a></li>
                                                    <li id="menu-item-12034" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-12034"><a href="https://www.sitea.se/seo/sokmotoroptimering-wordpress-seo/"><span class="menu-title-text">Sökmotoroptimering WordPress SEO</span></a></li>
                                                    <li id="menu-item-17475" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-17475"><a href="https://www.sitea.se/online-marknadsforing/oka-konverteringsgraden/"><span class="menu-title-text">Öka Konverteringsgraden på Hemsidan</span></a></li>
                                                    <li id="menu-item-8177" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-8177"><a href="https://www.sitea.se/online-marknadsforing/hamna-forst-pa-google-del-1/"><span class="menu-title-text">Hamna först på Google – Ranka högt på Google idag</span></a></li>
                                                    <li id="menu-item-8179" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-8179"><a href="https://www.sitea.se/online-marknadsforing/synas-hogt-pa-google-gratis-ja-det-gar-sa-har-gor-du/"><span class="menu-title-text">Så syns du högt på Google gratis</span></a></li>
                                                    <li id="menu-item-13778" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-13778"><a href="https://www.sitea.se/seo/google-my-business/"><span class="menu-title-text">Vad är Google My Business?</span></a></li>
                                                    <li id="menu-item-8182" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-8182"><a href="https://www.sitea.se/synas-pa-google/topp-10-viktiga-tips-for-att-rankas-hogt-pa-google-och-synas-pa-natet/"><span class="menu-title-text">Topp 10 Rankingtips för Google</span></a></li>
                                                    <li id="menu-item-8395" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-8395"><a href="https://www.sitea.se/metabeskrivning-seo/"><span class="menu-title-text">Vad är en metabeskrivning?</span></a></li>
                                                    <li id="menu-item-13743" class="menu-item menu-item-type-post_type menu-item-object-post nectar-regular-menu-item menu-item-13743"><a href="https://www.sitea.se/seo/google-eat-seo/"><span class="menu-title-text">Ranka Högt på Google med E.A.T</span></a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-8172" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nectar-regular-menu-item menu-item-8172"><a href="#"><span class="menu-title-text"><b>Digital Marknadsföring</b></span><span class="sf-sub-indicator"><i class="fa fa-angle-right icon-in-menu" aria-hidden="true"></i></span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-2691" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-2691"><a href="https://www.sitea.se/starta-webshop-webbutik/"><span class="menu-title-text">Starta Webshop</span></a></li>
                                                    <li id="menu-item-7378" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-7378"><a href="https://www.sitea.se/webbshop-wordpress-woocommerce/"><span class="menu-title-text">Vad är WooCommerce?</span></a></li>
                                                    <li id="menu-item-9933" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-9933"><a href="https://www.sitea.se/digital-marknadsforing-guide/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-zoom-in"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-h4"><span class="menu-title-text">Digital Marknadsföring 2022 Guide</span></span></div></div></a></li>
                                                    <li id="menu-item-17553" class="menu-item menu-item-type-custom menu-item-object-custom nectar-regular-menu-item menu-item-17553"><a href="https://www.sitea.se/vad-ar-seo/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-zoom-in"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-h4"><span class="menu-title-text">Vad är SEO?</span></span></div></div></a></li>
                                                    <li id="menu-item-2452" class="menu-item menu-item-type-post_type menu-item-object-page nectar-regular-menu-item menu-item-2452"><a href="https://www.sitea.se/blogg-guider/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-default"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-default"><span class="menu-title-text"><b>Alla Våra Guider</b></span></span></div></div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-427" class="menu-item menu-item-type-post_type menu-item-object-page button_solid_color menu-item-427"><a href="https://www.sitea.se/kontakt/"><span class="menu-title-text">Kontakt</span></a></li>
                                    <li id="menu-item-16996" class="menu-item menu-item-type-post_type menu-item-object-page button_solid_color_2 menu-item-16996"><a href="https://www.sitea.se/seo-rapport/"><span class="menu-title-text">Fri SEO Analys</span></a></li>
                                </ul>
                                <ul class="buttons sf-menu" data-user-set-ocm="off">


                                </ul>

                            </nav>


                        </div><!--/span_9-->


                    </div><!--/row-->

                    <div id="mobile-menu" data-mobile-fixed="1">

                        <div class="inner">


                            <div class="menu-items-wrap" data-has-secondary-text="false">

                                <ul>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-429"><a href="https://www.sitea.se/kopa-hemsida-webbyra/">Hemsida</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7575"><a href="https://www.sitea.se/hemsida-foretag/">Hemsida Företag</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6344"><a href="https://www.sitea.se/kopa-hemsida-webbyra/">Köpa Hemsida</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13040"><a href="https://www.sitea.se/ny-hemsida/">Ny Hemsida</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16623"><a href="https://www.sitea.se/hjalp-med-hemsida-wordpress/">Hjälp med Hemsida</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2507"><a href="https://www.sitea.se/vad-kostar-en-hemsida/"><span class="menu-title-text">Vad kostar en hemsida?</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu columns-3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6893"><a href="https://www.sitea.se/wordpress-konsult/">WordPress</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-15277"><a href="#"><b>Tjänster</b></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6939"><a href="https://www.sitea.se/kopa-hemsida-webbyra/">Köp Hemsida</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13569"><a href="https://www.sitea.se/wordpress-kurs/">WordPress Kurs</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14134"><a href="https://www.sitea.se/hjalp-med-wordpress/">Hjälp med WordPress</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6894"><a href="https://www.sitea.se/hjalp-med-hemsida-wordpress/">Hjälp med Hemsida</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-15278"><a href="#"><b>Guider</b></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6895"><a href="https://www.sitea.se/hemsida-wordpress/"><span class="menu-title-text">Vad är WordPress?</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7379"><a href="https://www.sitea.se/webbshop-wordpress-woocommerce/">Vad är WooCommerce?</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15279"><a href="https://www.sitea.se/online-marknadsforing/basta-wordpress-tillaggen-plugins/">De bästa WordPress tilläggen för 2022</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15280"><a href="https://www.sitea.se/online-marknadsforing/snabbare-wordpress-hemsida-guide/">Snabba upp din WordPress hemsida</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17552"><a href="http://www.sitea.se/hemsida-wordpress/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-zoom-in-slow"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-h4"><span class="menu-title-text"><b>WordPress Guide</b></span></span></div></div></a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu columns-3 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-21495"><a href="https://www.sitea.se/sokmotoroptimering-stockholm/">SEO &#038; SEM</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20698"><a href="#">SEO</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7837"><a href="https://www.sitea.se/sokmotoroptimering-stockholm/">Sökmotoroptimering</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16908"><a href="https://www.sitea.se/seo-byra-stockholm/">SEO Byrå Stockholm</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20165"><a href="https://www.sitea.se/seo-konsult/"><span class="menu-title-text">Vad gör en SEO Konsult?</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7337"><a href="https://www.sitea.se/vad-ar-seo/"><span class="menu-title-text">Vad är SEO?</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20697"><a href="#">SEM</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-958"><a href="https://www.sitea.se/google-annonsering-adwords/">Google Ads Annonsering</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14721"><a href="https://www.sitea.se/bing-annonsering/">Bing Annonsering</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1546"><a href="https://www.sitea.se/adwords-konsult-stockholm/">Google Ads Konsult</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-934"><a href="https://www.sitea.se/sa-funkar-adwords/"><span class="menu-title-text">Vad är Google Ads?</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-20699"><a href="https://www.sitea.se/sem-byra/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-default"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-default"><span class="menu-title-text">Sitea SEO Skola</span></span></div></div></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21603"><a href="https://www.sitea.se/on-page-seo/">On Page SEO</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-21805"><a href="https://www.sitea.se/seo/lokal-seo/">Så Lyckas du med Lokal SEO 2022</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-21988"><a href="https://www.sitea.se/seo/on-page-seo/">10 Viktigaste On Page SEO Faktorerna (2022)</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-519"><a href="https://www.sitea.se/digital-marknadsforing/">Marketing</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9932"><a href="https://www.sitea.se/digital-marknadsforing/">Så arbetar vi med marknadsföring</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20590"><a href="https://www.sitea.se/konverteringsoptimering/">Konverteringsoptimering</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20516"><a href="https://www.sitea.se/content/">Content (Foto, Video, Copy)</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9931"><a href="https://www.sitea.se/digital-marknadsforing-guide/"><span class="menu-title-text">Digital Marknadsföring för 2022</span><span class="nectar-menu-label nectar-pseudo-expand">Guide</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-339 current_page_item menu-item-428"><a href="https://www.sitea.se/priser/" aria-current="page">Priser</a></li>
                                    <li class="megamenu columns-4 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12834"><a href="#">Guider</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8170"><a href="#"><b>Hemsida</b></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2479"><a href="https://www.sitea.se/hemsida-wordpress/"><span class="menu-title-text">Vad är WordPress?</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8171"><a href="https://www.sitea.se/vad-kostar-en-hemsida/"><span class="menu-title-text">Vad kostar en hemsida?</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10681"><a href="https://www.sitea.se/vad-kostar-det-att-kopa-en-hemsida/">Guide för att Köpa Hemsida</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8268"><a href="https://www.sitea.se/bygga-hemsida/"><span class="menu-title-text">Bygg din egen hemsida</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8226"><a href="https://www.sitea.se/hemsida-wordpress/#hemsida-sakerhet">Säkerhet för hemsida</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-8634"><a href="https://www.sitea.se/grafisk-design/valj-ratt-farg-till-hemsida-2018/">Välj Rätt Färg Till Hemsidan</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-9943"><a href="https://www.sitea.se/online-marknadsforing/mobilanpassad-hemsida-guide/">Mobilanpassad Hemsida Guide</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10716"><a href="https://www.sitea.se/online-marknadsforing/snabbare-wordpress-hemsida-guide/">Snabbare WordPress-hemsida</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-10502"><a href="https://www.sitea.se/online-marknadsforing/basta-wordpress-tillaggen-plugins/">Bästa WordPress Plugins</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8291"><a href="https://www.sitea.se/valja-webbhotell/">Hur väljer jag Webbhotell?</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8173"><a href="#"><b>Google Ads &#038; Social Media</b></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-12227"><a href="https://www.sitea.se/ads/annonsera-med-google-ads-adwords/">Annonsera på Google Ads (AdWords)</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6986"><a href="https://www.sitea.se/sa-funkar-adwords/">Vad är Google Ads (AdWords)?</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-13758"><a href="https://www.sitea.se/google-ads/vad-ar-google-display-allt-du-behover-veta-2020/">Vad är Google Display?</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-14219"><a href="https://www.sitea.se/ads/facebook-annonsering/">Facebook Ads Annonsering</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13595"><a href="https://www.sitea.se/ads/microsoft-annonsering-bing/">Microsoft Annonser (Bing)</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-8178"><a href="https://www.sitea.se/online-marknadsforing/organisk-vs-betald-trafik-ranka-hogt-pa-google/">Organisk vs. Betald Trafik</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-8180"><a href="https://www.sitea.se/synas-pa-google/darfor-misslyckas-din-marknadsforing-pa-natet-och-hur-du-lyckas/">Därför misslyckas din Sociala Marknadsföring</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-8181"><a href="https://www.sitea.se/synas-pa-google/social-marknadsforing-ar-det-viktigt/">Social Marknadsföring – Är det viktigt?</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-9258"><a href="https://www.sitea.se/online-marknadsforing/google-adwords-byter-namn-till-google-ads/">AdWords blir Google Ads</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8174"><a href="#"><b>Sökordsoptimering (SEO)</b></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7275"><a href="https://www.sitea.se/vad-ar-seo/"><span class="menu-title-text">Vad är SEO?</span><span class="nectar-menu-label nectar-pseudo-expand">Populär</span></a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12072"><a href="https://www.sitea.se/seo/sokordsanalys-google/">Så gör du en Sökordsanalys</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-21475"><a href="https://www.sitea.se/seo/seo-text/">Så skriver du Grymma SEO Texter (2022)</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-12034"><a href="https://www.sitea.se/seo/sokmotoroptimering-wordpress-seo/">Sökmotoroptimering WordPress SEO</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-17475"><a href="https://www.sitea.se/online-marknadsforing/oka-konverteringsgraden/">Öka Konverteringsgraden på Hemsidan</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-8177"><a href="https://www.sitea.se/online-marknadsforing/hamna-forst-pa-google-del-1/">Hamna först på Google – Ranka högt på Google idag</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-8179"><a href="https://www.sitea.se/online-marknadsforing/synas-hogt-pa-google-gratis-ja-det-gar-sa-har-gor-du/">Så syns du högt på Google gratis</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-13778"><a href="https://www.sitea.se/seo/google-my-business/">Vad är Google My Business?</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-8182"><a href="https://www.sitea.se/synas-pa-google/topp-10-viktiga-tips-for-att-rankas-hogt-pa-google-och-synas-pa-natet/">Topp 10 Rankingtips för Google</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8395"><a href="https://www.sitea.se/metabeskrivning-seo/">Vad är en metabeskrivning?</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-13743"><a href="https://www.sitea.se/seo/google-eat-seo/">Ranka Högt på Google med E.A.T</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8172"><a href="#"><b>Digital Marknadsföring</b></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2691"><a href="https://www.sitea.se/starta-webshop-webbutik/">Starta Webshop</a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7378"><a href="https://www.sitea.se/webbshop-wordpress-woocommerce/">Vad är WooCommerce?</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9933"><a href="https://www.sitea.se/digital-marknadsforing-guide/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-zoom-in"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-h4"><span class="menu-title-text">Digital Marknadsföring 2022 Guide</span></span></div></div></a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17553"><a href="https://www.sitea.se/vad-ar-seo/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-zoom-in"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-h4"><span class="menu-title-text">Vad är SEO?</span></span></div></div></a></li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2452"><a href="https://www.sitea.se/blogg-guider/"><div class="nectar-ext-menu-item style-default"><div class="image-layer-outer hover-default"><div class="image-layer"></div><div class="color-overlay"></div></div><div class="inner-content"><span class="title inherit-default"><span class="menu-title-text"><b>Alla Våra Guider</b></span></span></div></div></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-427"><a href="https://www.sitea.se/kontakt/">Kontakt</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16996"><a href="https://www.sitea.se/seo-rapport/">Fri SEO Analys</a></li>


                                </ul>


                            </div><!--/menu-items-wrap-->

                            <div class="below-menu-items-wrap">
                            </div><!--/below-menu-items-wrap-->

                        </div><!--/inner-->

                    </div><!--/mobile-menu-->
                </div><!--/container-->
            </header>
        </div>
        <div id="ajax-content-wrap">
            <div class="container-wrap">
                <div class="container main-content">
                    <div class="row">

                        <div id="fws_6270ec8b48bbd"  data-column-margin="default" data-midnight="dark" data-top-percent="4%" data-bottom-percent="2%"  class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top"  style="padding-top: calc(100vw * 0.04); padding-bottom: calc(100vw * 0.02); "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="true"><div class="inner-wrap"><div class="row-bg viewport-desktop using-bg-color"  style="background-color: #ffffff; "></div></div><div class="row-bg-overlay" style="background-color:#ffffff;  opacity: 0.8; "></div></div><div class="row_col_wrap_12 col span_12 dark left">
                                <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col padding-4-percent inherit_tablet inherit_phone "  data-padding-pos="left-right" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" >
                                        <div class="wpb_wrapper">
                                            <div id="fws_6270ec8b4cda5" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row"  style="padding-bottom: 5%; "><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div  class="vc_col-sm-6 vc_hidden-sm vc_hidden-xs wpb_column column_container vc_column_container col child_column padding-2-percent inherit_tablet inherit_phone "   data-padding-pos="right" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">
                                                                <div class="divider-wrap" data-alignment="default"><div style="height: 30px;" class="divider"></div></div>
                                                                <div class="nectar-animated-title" data-style="color-strip-reveal" data-color="extra-color-3">
                                                                    <div class="nectar-animated-title-outer">
                                                                        <div class="nectar-animated-title-inner">
                                                                            <div class="wrap"><h6 style="color: #e8a550;">Webbyrå Priser</h6></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">
                                                                        <h2>Här ser du våra mest populära pakettjänster &amp; priser.</h2>
                                                                        <p><span style="color: #000000;">Vi på Sitea har utvecklat allt ifrån hemsidor till hantverkare och småföretagare till multinationella företag och webbutiker. Saknar du något så skräddarsyr vi gärna en lösning för dig. </span></p>
                                                                        <p><span style="color: #000000;">Bli en utav 530+ företag att välja en hemsida från Sitea!</span></p>
                                                                    </div>
                                                                </div>



                                                                <div class="divider-wrap" data-alignment="default"><div style="height: 20px;" class="divider"></div></div><a class="nectar-button large regular accent-color has-icon  regular-button"  style="margin-right: 5px; "  href="https://www.sitea.se/priser/#paket" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>PRISER &amp; PAKET</span><i  class="icon-button-arrow"></i></a><a class="nectar-button large regular accent-color  regular-button"  style="margin-left: 5px;color: #90c4eb; background-color: #eaf0fe;"  href="https://www.sitea.se/snygg-hemsida-fran-sitea/" data-color-override="#eaf0fe" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>BILDER PÅ HEMSIDOR</span></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div  class="vc_col-sm-6 vc_hidden-sm vc_hidden-xs wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">
                                                                <div class="img-with-aniamtion-wrap center" data-max-width="100%" data-max-width-mobile="default" data-border-radius="10px" data-shadow="small_depth" data-animation="fade-in" >
                                                                    <div class="inner">
                                                                        <div class="hover-wrap">
                                                                            <div class="hover-wrap-inner">
                                                                                <img class="img-with-animation skip-lazy " data-delay="0" height="683" width="1024" data-animation="fade-in" src="https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra.jpg" alt="priser-webbyrå" srcset="https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra.jpg 1024w, https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra-300x200.jpg 300w, https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra-768x512.jpg 768w, https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra-900x600.jpg 900w" sizes="(max-width: 1024px) 100vw, 1024px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div><div id="fws_6270ec8b4ed60" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row"  style="padding-bottom: 5%; "><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div  class="vc_col-sm-6 vc_hidden-lg vc_hidden-md wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">
                                                                        <h1><span style="color: #808080; font-size: 18px; line-height: 28px;">Webbyrå Priser</span></h1>
                                                                        <h2>Här ser du våra mest populära pakettjänster &amp; priser.</h2>
                                                                    </div>
                                                                </div>




                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">
                                                                        <p><span style="color: #000000;">Vi på Sitea har utvecklat allt ifrån hemsidor till hantverkare och småföretagare till multinationella företag och webbutiker. Saknar du något så skräddarsyr vi gärna en lösning för dig. Bli en utav 530+ företag att välja Sitea!</span></p>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div  class="vc_col-sm-6 vc_hidden-lg vc_hidden-md wpb_column column_container vc_column_container col child_column centered-text no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">
                                                                <div class="divider-wrap" data-alignment="default"><div style="height: 20px;" class="divider"></div></div><div class="img-with-aniamtion-wrap center" data-max-width="100%" data-max-width-mobile="default" data-border-radius="10px" data-shadow="small_depth" data-animation="fade-in" >
                                                                    <div class="inner">
                                                                        <div class="hover-wrap">
                                                                            <div class="hover-wrap-inner">
                                                                                <img class="img-with-animation skip-lazy " data-delay="0" height="683" width="1024" data-animation="fade-in" src="https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra.jpg" alt="priser-webbyrå" srcset="https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra.jpg 1024w, https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra-300x200.jpg 300w, https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra-768x512.jpg 768w, https://www.sitea.se/wp-content/uploads/2021/02/priser-webbyra-900x600.jpg 900w" sizes="(max-width: 1024px) 100vw, 1024px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="divider-wrap" data-alignment="default"><div style="height: 20px;" class="divider"></div></div><a class="nectar-button large regular extra-color-2  wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown regular-button"  style="margin-right: 5px; "  href="https://www.sitea.se/priser/#paket" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>PRISER</span></a><a class="nectar-button large see-through extra-color-2 wpb_animate_when_almost_visible wpb_bounceInDown bounceInDown"  style="margin-left: 5px;"  href="https://www.sitea.se/snygg-hemsida-fran-sitea/" data-color-override="false" data-hover-color-override="false" data-hover-text-color-override="#fff"><span>BILDER PÅ HEMSIDOR</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div><div id="fws_6270ec8b4f94b" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row"  style="padding-bottom: 4%; "><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div  class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                                <div class="nectar-animated-title" data-style="color-strip-reveal" data-color="accent-color">
                                                                    <div class="nectar-animated-title-outer">
                                                                        <div class="nectar-animated-title-inner">
                                                                            <div class="wrap"><h6 style="color: #ffffff;">Vad ingår?</h6></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">
                                                                        <h2>Följande ingår alltid i våra hemsidepaket:</h2>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div  class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div><div class="nectar-icon-list" data-icon-color="extra-color-gradient-1" data-icon-style="no-border" data-columns="3" data-direction="horizontal" data-icon-size="medium" data-animate=""><div class="nectar-icon-list-item"><div class="list-icon-holder" data-icon_type="icon"><i class="icon-default-style steadysets-icon-email2" data-color="extra-color-gradient-1"></i></div><div class="content"><h4><b>Snabb Leverans</b></h4>Vi erbjuder mycket snabb utveckling och leverans av hemsidor.</div></div><div class="nectar-icon-list-item"><div class="list-icon-holder" data-icon_type="icon"><i class="icon-default-style steadysets-icon-chat-2" data-color="extra-color-gradient-1"></i></div><div class="content"><h4><b>Fri Support &amp; Rådgivning</b></h4>Vi erbjuder alla våra kunder fri support och rådgivning.</div></div><div class="nectar-icon-list-item"><div class="list-icon-holder" data-icon_type="icon"><i class="icon-default-style steadysets-icon-graph" data-color="extra-color-gradient-1"></i></div><div class="content"><h4><b>Lönsamhet i fokus</b></h4>Vi är specialister på webbpsykologi och skapar lönsamma hemsidor.</div></div><div class="nectar-icon-list-item"><div class="list-icon-holder" data-icon_type="icon"><i class="icon-default-style steadysets-icon-star" data-color="extra-color-gradient-1"></i></div><div class="content"><h4><b>Inga dolda avgifter</b></h4>Hos Sitea gäller fast pris. Vi har inga dolda avgifter eller månadskostnader.</div></div><div class="nectar-icon-list-item"><div class="list-icon-holder" data-icon_type="icon"><i class="icon-default-style steadysets-icon-pencil" data-color="extra-color-gradient-1"></i></div><div class="content"><h4><b>Enkelt att ändra själv</b></h4>Vi utvecklar hemsidor där du med lätthet kan arbeta och använda hemsidan själv.</div></div><div class="nectar-icon-list-item"><div class="list-icon-holder" data-icon_type="icon"><i class="icon-default-style steadysets-icon-browser" data-color="extra-color-gradient-1"></i></div><div class="content"><h4><b>Byggd i WordPress</b></h4>Vi utvecklar unika hemsidor i det populära CMS-systemet WordPress.</div></div></div><div class="divider-wrap" data-alignment="default"><div style="margin-top: 2.5px; height: 1px; margin-bottom: 2.5px;" data-width="100%" data-animate="" data-animation-delay="" data-color="default" class="divider-border"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                        <div id="paket"  data-column-margin="default" data-midnight="dark" data-top-percent="4%" data-bottom-percent="4%"  class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex vc_row-o-content-top  right_padding_4pct left_padding_4pct"  style="padding-top: calc(100vw * 0.04); padding-bottom: calc(100vw * 0.04); "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="true"><div class="inner-wrap using-image"><div data-bg="https://www.sitea.se/wp-content/uploads/2021/01/hemsida-priser-webbdesign-stockholm-scaled.jpg" class="row-bg viewport-desktop using-image rocket-lazyload"  style=" background-position: left top; background-repeat: no-repeat; "></div></div><div class="row-bg-overlay" style="background-color:#ffffff;  opacity: 0.5; "></div></div><div class="row_col_wrap_12 col span_12 dark left">
                                <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "  data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" >
                                        <div class="wpb_wrapper">
                                            <div id="fws_6270ec8b51425" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex vc_row-o-content-middle"  style="padding-bottom: 3%; "><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div  class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                                <div class="nectar-animated-title" data-style="color-strip-reveal" data-color="accent-color">
                                                                    <div class="nectar-animated-title-outer">
                                                                        <div class="nectar-animated-title-inner">
                                                                            <div class="wrap"><h6 style="color: #ffffff;">Sitea Webbyrå</h6></div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="nectar-highlighted-text" data-style="half_text" data-exp="default" data-using-custom-color="false" data-animation-delay="false" data-color="" data-color-gradient="" style="">
                                                                    <h2 style="text-align: left;">Nu är det din tur att fånga nya kunder och bli lönsam online!</h2>
                                                                    <h3>Vi tar hand om allt från början till slut.</h3>
                                                                    <p>Från skiss och upprättande av webbhotell till utveckling och leverans.</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div  class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div><div id="fws_6270ec8b51946" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row"  style="padding-bottom: 6%; "><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">

                                                                        <div
                                                                            class="elfsight-widget-pricing-table elfsight-widget"
                                                                            data-elfsight-pricing-table-options="%7B%22layout%22%3A%22columns%22%2C%22skin%22%3A%22skin5%22%2C%22mainColor%22%3A%22rgb%2840%2C%2094%2C%20146%29%22%2C%22styleColumnBorderRadius%22%3Atrue%2C%22styleColumnBorderWidth%22%3Atrue%2C%22useHorizontalScroll%22%3Afalse%2C%22headTitle%22%3A%22Plan%20name%22%2C%22headFeatures%22%3A%5B%7B%22text%22%3A%22Feature%201%22%7D%2C%7B%22text%22%3A%22Feature%202%22%7D%5D%2C%22headTextColor%22%3A%22rgb%2823%2C%2025%2C%2026%29%22%2C%22headBackgroundColor%22%3A%22rgb%28247%2C%20247%2C%20247%29%22%2C%22toggleVisible%22%3Afalse%2C%22toggleItems%22%3A%5B%5D%2C%22toggleDefaultItem%22%3A%22%22%2C%22toggleColor%22%3A%22%22%2C%22columns%22%3A%5B%7B%22isFeatured%22%3Atrue%2C%22title%22%3A%22Hemsida%20Basic%22%2C%22titleCaption%22%3A%22Perfekt%20f%5Cu00f6r%20sm%5Cu00e5f%5Cu00f6retag.%22%2C%22features%22%3A%5B%7B%22text%22%3A%22Professionell%20webbdesigner%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22WordPress%20hemsida%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Fyra%20sidor%20eller%20one%20page%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Mobilanpassad%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22S%5Cu00f6kordsoptimerad%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22L%5Cu00e4gga%20upp%20text%20%26amp%3B%20bilder%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Upp%20till%206%20timmars%20design%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Unik%20Design%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Kontaktformul%5Cu00e4r%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Bildspel%20%26amp%3B%20Slider%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Koppling%20Social%20Media%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Egen%20Dom%5Cu00e4n%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22S%5Cu00e4tta%20upp%20webbhotell%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22E-mail%20Konton%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Google%20Maps%20Kartor%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%5D%2C%22priceCurrency%22%3A%22%22%2C%22price%22%3A%228%20875%3A-%22%2C%22pricePostfix%22%3A%22%22%2C%22button%22%3A%22Kom%20ig%5Cu00e5ng%20idag%22%2C%22buttonLink%22%3A%22http%3A%5C%2F%5C%2Fwww.sitea.se%5C%2Fpriser%5C%2F%23bestalla-hemsida%22%2C%22buttonCaption%22%3A%22Fasta%20priser.%20Inga%20l%5Cu00f6pande%20avgifter.%22%2C%22mainColor%22%3A%22rgb%2841%2C%2050%2C%20150%29%22%2C%22priceOptions%22%3A%5B%5D%2C%22buttonOptions%22%3A%5B%5D%2C%22pricePrefix%22%3A%22nu%22%2C%22priceCaption%22%3A%22Fasta%20priser.%20Inga%20avgifter.%22%2C%22buttonTargetBlank%22%3Afalse%2C%22picture%22%3A%22https%3A%5C%2F%5C%2Fwww.sitea.se%5C%2Fwp-content%5C%2Fuploads%5C%2F2021%5C%2F05%5C%2Fwebbyra-pris-1.jpeg%22%2C%22ribbonText%22%3A%22Baspaket%22%2C%22ribbonBackgroundColor%22%3A%22rgb%2829%2C%20155%2C%20197%29%22%2C%22ribbonTextColor%22%3A%22%22%2C%22contentDivider%22%3Anull%7D%2C%7B%22isFeatured%22%3Atrue%2C%22title%22%3A%22Hemsida%20Pro%22%2C%22titleCaption%22%3A%22V%5Cu00e5rt%20mest%20popul%5Cu00e4ra%20paket.%22%2C%22features%22%3A%5B%7B%22text%22%3A%22Professionell%20webbdesigner%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22WordPress%20hemsida%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%228-12%20sidor%20eller%20one%20page%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Mobilanpassad%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22S%5Cu00f6kordsoptimerad%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22L%5Cu00e4gga%20upp%20text%20%26amp%3B%20bilder%3Cbr%3E%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Upp%20till%2015%20timmars%20design%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Unik%20Design%20%2B%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22Din%20hemsida%20f%5Cu00e5r%20en%20mer%20avancerad%20design%20j%5Cu00e4mf%5Cu00f6rt%20med%20basic.%26nbsp%3B%22%7D%2C%7B%22text%22%3A%22Kontaktformul%5Cu00e4r%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Bildspel%20%26amp%3B%20Slider%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Koppling%20Social%20Media%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Egen%20Dom%5Cu00e4n%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22S%5Cu00e4tta%20upp%20webbhotell%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22E-mail%20Konton%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Google%20Maps%20Kartor%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Strategisk%20design%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22Vi%20utvecklar%20en%20design%20baserat%20p%5Cu00e5%20ett%20uppl%5Cu00e4gg%20som%20skapar%20h%5Cu00f6gt%20v%5Cu00e4rde%20f%5Cu00f6r%20bes%5Cu00f6kare%20och%20kunder.%22%7D%2C%7B%22text%22%3A%22Koppla%20Google%20Analytics%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22N%5Cu00f6jd%20kundgaranti%21%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%5D%2C%22priceCurrency%22%3A%22%22%2C%22price%22%3A%2216%20875%3A-%22%2C%22pricePostfix%22%3A%22%22%2C%22button%22%3A%22Kom%20ig%5Cu00e5ng%20idag%22%2C%22buttonLink%22%3A%22http%3A%5C%2F%5C%2Fwww.sitea.se%5C%2Fpriser%5C%2F%23bestalla-hemsida%22%2C%22buttonCaption%22%3A%22Fasta%20priser.%20Inga%20l%5Cu00f6pande%20avgifter.%22%2C%22buttonFeatured%22%3Atrue%2C%22ribbonText%22%3A%22Popul%5Cu00e4rast%22%2C%22mainColor%22%3A%22rgb%2854%2C%20216%2C%20149%29%22%2C%22priceOptions%22%3A%5B%5D%2C%22buttonOptions%22%3A%5B%5D%2C%22pricePrefix%22%3A%22nu%22%2C%22priceCaption%22%3A%22Fasta%20priser.%20Inga%20avgifter.%22%2C%22buttonTargetBlank%22%3Afalse%2C%22picture%22%3A%22https%3A%5C%2F%5C%2Fwww.sitea.se%5C%2Fwp-content%5C%2Fuploads%5C%2F2021%5C%2F05%5C%2Fhemsida-smaforetag-1.jpeg%22%2C%22ribbonBackgroundColor%22%3A%22%22%2C%22ribbonTextColor%22%3A%22%22%2C%22contentDivider%22%3Anull%7D%2C%7B%22isFeatured%22%3Atrue%2C%22title%22%3A%22Hemsida%20Premium%22%2C%22titleCaption%22%3A%22F%5Cu00f6r%20dig%20som%20kr%5Cu00e4ver%20det%20b%5Cu00e4sta.%20%22%2C%22features%22%3A%5B%7B%22text%22%3A%22Konverteringsdrivande%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22Gedigen%20design%20och%20strategi%20som%20lyfter%20f%5Cu00f6retagets%20l%5Cu00f6nsamhet%20digitalt.%22%7D%2C%7B%22text%22%3A%22WordPress%20hemsida%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%2215%2B%20Undersidor%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22%20Avancerad%20mobildesign%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22S%5Cu00f6kordsoptimerad%20%2B%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22Vi%20utvecklar%20en%20hemsida%20med%20god%20s%5Cu00f6kmotoroptimerad%20struktur%20och%20uppl%5Cu00e4gg.%26nbsp%3B%22%7D%2C%7B%22text%22%3A%22Marknadsf%5Cu00f6ringsplan%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Unik%20%26amp%3B%20avancerad%20design%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Webbhotell%2C%20SSL%20%26amp%3B%20Hastighet%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Kontaktformul%5Cu00e4r%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Avancerat%20bildspel%20%26amp%3B%20Slider%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Integration%20sociala%20medier%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Egen%20Dom%5Cu00e4n%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22E-mail%20Konton%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Google%20Maps%20Kartor%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22Grafisk%20utveckling%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22V%5Cu00e5ra%20grafiska%20designers%20utvecklar%20egna%20grafiska%20element%20f%5Cu00f6r%20en%20unik%20design.%22%7D%2C%7B%22text%22%3A%22Statistik%20Analytics%20%26amp%3B%20Hotjar%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22E-handel%20%26amp%3B%20Webbutik%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22Vi%20utvecklar%20en%20fullt%20fungerande%20webbutik%20f%5Cu00f6r%20er%20verksamhet.%20Kontakta%20oss%20f%5Cu00f6r%20offertf%5Cu00f6rslag.%26nbsp%3B%22%7D%2C%7B%22text%22%3A%22Digital%20Strategi%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%2C%7B%22text%22%3A%22N%5Cu00f6jd%20kundgaranti%21%22%2C%22icon%22%3A%22check%22%2C%22hint%22%3A%22%22%7D%5D%2C%22priceCurrency%22%3A%22%22%2C%22price%22%3A%2232%20900%3A-%22%2C%22pricePostfix%22%3A%22%22%2C%22button%22%3A%22F%5Cu00e5%20din%20offert%22%2C%22buttonLink%22%3A%22http%3A%5C%2F%5C%2Fwww.sitea.se%5C%2Fpriser%5C%2F%23bestalla-hemsida%22%2C%22buttonCaption%22%3A%22Fasta%20priser.%20Inga%20l%5Cu00f6pande%20avgifter.%22%2C%22mainColor%22%3A%22rgb%2840%2C%2094%2C%20146%29%22%2C%22priceOptions%22%3A%5B%5D%2C%22buttonOptions%22%3A%5B%5D%2C%22pricePrefix%22%3A%22fr%5Cu00e5n%22%2C%22priceCaption%22%3A%22Skr%5Cu00e4ddarsydda%20hemsidor%20till%20fast%20pris.%22%2C%22buttonTargetBlank%22%3Afalse%2C%22picture%22%3A%22https%3A%5C%2F%5C%2Fwww.sitea.se%5C%2Fwp-content%5C%2Fuploads%5C%2F2021%5C%2F05%5C%2Fhemsida-premium-sitea-1.jpeg%22%2C%22ribbonText%22%3A%22%2B%20Resultat%22%2C%22ribbonBackgroundColor%22%3A%22%22%2C%22ribbonTextColor%22%3A%22%22%2C%22contentDivider%22%3Anull%7D%5D%2C%22elements%22%3A%5B%7B%22complexGroup%22%3A%22title%22%2C%22name%22%3A%22Title%22%2C%22titleEnable%22%3Atrue%2C%22titleCaptionColor%22%3A%22rgb%28202%2C%20160%2C%20160%29%22%2C%22titleTextColor%22%3A%22rgb%2839%2C%2041%2C%2040%29%22%2C%22titleFontSize%22%3A31%2C%22titleFontWeight%22%3A600%7D%2C%7B%22complexGroup%22%3A%22picture%22%2C%22name%22%3A%22Picture%22%2C%22pictureEnable%22%3Atrue%7D%2C%7B%22complexGroup%22%3A%22price%22%2C%22name%22%3A%22Price%22%2C%22priceEnable%22%3Atrue%2C%22priceCaptionColor%22%3A%22rgb%28119%2C%2081%2C%2081%29%22%2C%22priceTextColor%22%3A%22rgb%28144%2C%20167%2C%20214%29%22%2C%22priceFontSize%22%3A37%2C%22priceFontWeight%22%3A600%7D%2C%7B%22complexGroup%22%3A%22features%22%2C%22name%22%3A%22Features%22%2C%22featuresEnable%22%3Atrue%2C%22featuresStyle%22%3A%22clean%22%2C%22featuresIconColor%22%3A%22rgb%2833%2C%20188%2C%20242%29%22%2C%22featuresTextColor%22%3A%22rgb%2868%2C%2068%2C%2068%29%22%2C%22featuresAlign%22%3A%22left%22%2C%22featuresFontSize%22%3A16%7D%2C%7B%22complexGroup%22%3A%22button%22%2C%22name%22%3A%22Button%22%2C%22buttonEnable%22%3Atrue%2C%22buttonType%22%3A%22outline%22%2C%22buttonColor%22%3A%22%22%2C%22buttonTextColor%22%3A%22%22%2C%22buttonSize%22%3A%22large%22%2C%22buttonCaptionColor%22%3A%22%22%7D%5D%2C%22widgetId%22%3A%226%22%7D"
                                                                            data-elfsight-pricing-table-version="2.6.1"
                                                                            data-elfsight-widget-id="elfsight-pricing-table-6">
                                                                        </div>

                                                                    </div>
                                                                </div>




                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div><div id="fws_6270ec8b520a1" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row"  style=""><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div  class="vc_col-sm-2 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div  class="vc_col-sm-8 vc_hidden-sm vc_hidden-xs wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">
                                                                <div class="img-with-aniamtion-wrap " data-max-width="100%" data-max-width-mobile="default" data-shadow="none" data-animation="fade-in" >
                                                                    <div class="inner">
                                                                        <div class="hover-wrap">
                                                                            <div class="hover-wrap-inner">
                                                                                <img class="img-with-animation skip-lazy " data-delay="0" height="202" width="1920" data-animation="fade-in" src="https://www.sitea.se/wp-content/uploads/2021/06/hemsida-process.jpg.webp" alt="hemsida-process" srcset="https://www.sitea.se/wp-content/uploads/2021/06/hemsida-process.jpg.webp 1920w,https://www.sitea.se/wp-content/uploads/2021/06/hemsida-process-300x32.jpg.webp 300w,https://www.sitea.se/wp-content/uploads/2021/06/hemsida-process-1024x108.jpg.webp 1024w,https://www.sitea.se/wp-content/uploads/2021/06/hemsida-process-768x81.jpg.webp 768w,https://www.sitea.se/wp-content/uploads/2021/06/hemsida-process-1536x162.jpg.webp 1536w" sizes="(max-width: 1920px) 100vw, 1920px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div  class="vc_col-sm-2 wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                        <div id="fws_6270ec8b52ec2"  data-column-margin="default" data-midnight="dark"  class="wpb_row vc_row-fluid vc_row"  style="padding-top: 0px; padding-bottom: 0px; "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap"><div class="row-bg viewport-desktop"  style=""></div></div></div><div class="row_col_wrap_12 col span_12 dark left">
                                <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "  data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" >
                                        <div class="wpb_wrapper">

                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <h2 style="text-align: center;">Vad säger våra kunder?</h2>
                                                </div>
                                            </div>



                                            <div class="divider-wrap" data-alignment="default"><div style="height: 15px;" class="divider"></div></div>
                                            <div class="wpb_text_column wpb_content_element " >
                                                <div class="wpb_wrapper">
                                                    <div class="ti-widget ti-goog" data-layout-id="34" data-set-id="ligth-border" data-pid="b5167179c03e50ec942cb" data-pager-autoplay-timeout="6" > <div class="ti-widget-container ti-col-3"> <div class="ti-header source-Google"> <div class="ti-large-logo"> <div class="ti-v-center"> <img class="ti-logo-fb" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%2025'%3E%3C/svg%3E" width="150" height="25" alt="Google" width="150" height="25" data-lazy-src="https://cdn.trustindex.io/assets/platform/Google/logo.svg" /><noscript><img class="ti-logo-fb" src="https://cdn.trustindex.io/assets/platform/Google/logo.svg" width="150" height="25" alt="Google" width="150" height="25" /></noscript> </div> </div> <div class="ti-stars star-lg"> <span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span> </div> <div class="ti-rating-text"> <span class="nowrap">Baserat på <strong>39 omdömen</strong>.</span> </div> </div> <div class="ti-reviews-container"> <div class="ti-controls"> <div class="ti-next"></div> <div class="ti-prev"></div> </div> <div class="ti-reviews-container-wrapper">  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Niklas Kressner" data-lazy-src="https://lh3.googleusercontent.com/a/AATXAJyCkcLLmcwg0Nrh-cBvlL4cba3dtluCj3apHk8K=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a/AATXAJyCkcLLmcwg0Nrh-cBvlL4cba3dtluCj3apHk8K=s120-c-c-rp-w64-h64-mo-br100" alt="Niklas Kressner" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Niklas Kressner</div> <div class="ti-date">2021-12-03</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Jag är väldigt nöjd med Sitea! Snabb och bra service. Rekommenderas varmt!<!-- R-CONTENT --> </div> </div> </div>  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Håkan Melin" data-lazy-src="https://lh3.googleusercontent.com/a-/AOh14GgjGkvL2vTIIB4MNjJftJPCx1fZR15n2IJH9uV4=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a-/AOh14GgjGkvL2vTIIB4MNjJftJPCx1fZR15n2IJH9uV4=s120-c-c-rp-w64-h64-mo-br100" alt="Håkan Melin" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Håkan Melin</div> <div class="ti-date">2021-09-06</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Har använt Sitea för att sätta upp hemsida och komma igång med Google Analytics och Google Ads och är mycket nöjd med service och bemötande. Håkan Melin - Sales Setup<!-- R-CONTENT --> </div> </div> </div>  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Kerstin Melander" data-lazy-src="https://lh3.googleusercontent.com/a/AATXAJzxT52pudmAhtYDWYOH2ipFwPvP71krnRCQd-dV=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a/AATXAJzxT52pudmAhtYDWYOH2ipFwPvP71krnRCQd-dV=s120-c-c-rp-w64-h64-mo-br100" alt="Kerstin Melander" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Kerstin Melander</div> <div class="ti-date">2021-04-14</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Mycket professionellt och personligt bemötande. Flexibla, serviceminded och med stor kunskap inom området. Lyssnade till mina behov och delade med sig av sin kunskap. Jag är väldigt nöjd med min webbutik och Siteas arbete.<!-- R-CONTENT --> </div> </div> </div>  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Phone Ads" data-lazy-src="https://lh3.googleusercontent.com/a/AATXAJyvaCZ850WOmvwY2HaoglCl87AJqtY-m8OazrD9=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a/AATXAJyvaCZ850WOmvwY2HaoglCl87AJqtY-m8OazrD9=s120-c-c-rp-w64-h64-mo-br100" alt="Phone Ads" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Phone Ads</div> <div class="ti-date">2021-03-22</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Har varit en kund hos Sitea länge och kan inte göra annat än att rekommendera dem. Snabb service och sanna experter på hemsidor och marknadsföring!<!-- R-CONTENT --> </div> </div> </div>  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Joachim Alestam" data-lazy-src="https://lh3.googleusercontent.com/a/AATXAJyRItbnYyY1dW2SyTJLFOelgj4gd_a4Nn87__3G=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a/AATXAJyRItbnYyY1dW2SyTJLFOelgj4gd_a4Nn87__3G=s120-c-c-rp-w64-h64-mo-br100" alt="Joachim Alestam" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Joachim Alestam</div> <div class="ti-date">2021-03-03</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Min erfarenhet av Sitea är mycket positiv. De är professionella, kreativa och lyhörda vilket skapar ett friktionsfritt och framgångsrikt samarbete.<!-- R-CONTENT --> </div> </div> </div>  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Lena Magiste" data-lazy-src="https://lh3.googleusercontent.com/a-/AOh14Gg4vupiV1LgyouOkzHS3HLNkLPrNhGJuiq3GCVP=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a-/AOh14Gg4vupiV1LgyouOkzHS3HLNkLPrNhGJuiq3GCVP=s120-c-c-rp-w64-h64-mo-br100" alt="Lena Magiste" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Lena Magiste</div> <div class="ti-date">2021-03-01</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Vi på LM Travel är mycket nöjda med vår hemsida! Sitea är lyhörda, professionella och med fin personlig service.<!-- R-CONTENT --> </div> </div> </div>  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Catrine Augustsson" data-lazy-src="https://lh3.googleusercontent.com/a/AATXAJwyf97kdr2ZqUuav6NmoDVDwRIpjhpOrLL28E5I=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a/AATXAJwyf97kdr2ZqUuav6NmoDVDwRIpjhpOrLL28E5I=s120-c-c-rp-w64-h64-mo-br100" alt="Catrine Augustsson" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Catrine Augustsson</div> <div class="ti-date">2021-02-18</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Jag är väldigt nöjd med Sitea! Kan varmt rekommendera dem 🙂<!-- R-CONTENT --> </div> </div> </div>  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Leo Beck" data-lazy-src="https://lh3.googleusercontent.com/a/AATXAJxZBPJ01YwaPoZ93TPU6z460maqlfEszDdDCjX4=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a/AATXAJxZBPJ01YwaPoZ93TPU6z460maqlfEszDdDCjX4=s120-c-c-rp-w64-h64-mo-br100" alt="Leo Beck" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Leo Beck</div> <div class="ti-date">2021-02-14</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Jag har anlitat Sitea Webbyrå i några år, och är mycket nöjd med leveransen och samarbetet för att nå ut till mina kunder.
                                                                                Jag är otroligt nöjd och kan varmt rekommendera Sitea Webbyrå.
                                                                                Med vänlig hälsning,
                                                                                Leo Beck
                                                                                Beck Artist & Event AB<!-- R-CONTENT --> </div> </div> </div>  <div class="ti-review-item source-Google" > <div class="ti-inner"> <div class="ti-review-header"> <div class="ti-profile-img"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Pharis I" data-lazy-src="https://lh3.googleusercontent.com/a-/AOh14GhDGS7fGU8wuURE7eY5mZ_SDXE0_d2WnsHrlv0XTg=s120-c-c-rp-w64-h64-mo-br100" /><noscript><img src="https://lh3.googleusercontent.com/a-/AOh14GhDGS7fGU8wuURE7eY5mZ_SDXE0_d2WnsHrlv0XTg=s120-c-c-rp-w64-h64-mo-br100" alt="Pharis I" /></noscript> </div> <div class="ti-profile-details"> <div class="ti-name">Pharis I</div> <div class="ti-date">2021-02-14</div> </div> </div> <div class="ti-stars"><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span><span class="ti-star f"></span></div> <div class="ti-review-content"> <!-- R-CONTENT -->Fick hjälp med att utveckla min musik hemsida. Snabb service och trevlig personal. Stort tack till Dan för hjälpen!<!-- R-CONTENT --> </div> </div> </div>  </div> <div class="ti-controls-dots"> <div class="dot active"></div> </div> </div> </div> </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div></div>
                        <div id="fws_6270ec8b54ed2"  data-column-margin="default" data-midnight="dark"  class="wpb_row vc_row-fluid vc_row"  style="padding-top: 0px; padding-bottom: 0px; "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap"><div class="row-bg viewport-desktop"  style=""></div></div></div><div class="row_col_wrap_12 col span_12 dark left">
                                <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "  data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" >
                                        <div class="wpb_wrapper">
                                            <div class="divider-wrap" data-alignment="default"><div style="margin-top: 2.5px; height: 1px; margin-bottom: 2.5px;" data-width="100%" data-animate="" data-animation-delay="" data-color="default" class="divider-border"></div></div><div id="bestalla-hemsida" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row"  style="padding-top: 4%; padding-bottom: 4%; "><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div  class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column padding-2-percent inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">
                                                                        <h2 style="text-align: left;">Finns det fler paket?</h2>
                                                                        <p style="text-align: left;">De priser vi erbjuder för våra hemsidor kan givetvis skräddarsys efter era behov. Vi vill vara tydliga kring priset på våra hemsidor så vi brukar arbeta efter en fast-pris princip. Den innebär att vi kommer överens om ett pris för hemsidan som vi sedan håller oss till.</p>
                                                                    </div>
                                                                </div>



                                                                <div class="divider-wrap" data-alignment="default"><div style="height: 20px;" class="divider"></div></div>
                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">
                                                                        <h4 style="text-align: left;"><strong>Hur fungerar det med Fast Pris på Hemsidan?</strong></h4>
                                                                        <p style="text-align: left;">Vi erbjuder fast pris på våra hemsidor. Det betyder att vi tillsammans går igenom era behov, vilka funktioner ni vill ha på hemsidan samt vilken design ni vill ha. Därefter kommer vi med ett prisförslag som vi sedan håller.</p>
                                                                        <p style="text-align: left;">Med våra fasta priser på hemsidor och sökordsoptimering kan ni känna er trygga. Övrig utveckling på hemsidan såsom t.ex. SSL-certifikat, Logotyper osv. debiterar vi per timme.</p>
                                                                    </div>
                                                                </div>




                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div  class="vc_col-sm-6 wpb_column column_container vc_column_container col child_column padding-2-percent inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element " >
                                                                    <div class="wpb_wrapper">
                                                                        <h2 style="text-align: left;">Frågor &amp; Beställning</h2>
                                                                    </div>
                                                                </div>



                                                                <div role="form" class="wpcf7" id="wpcf7-f260-p339-o1" lang="sv-SE" dir="ltr">
                                                                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                                                    <form action="/priser/#wpcf7-f260-p339-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                                        <div style="display: none;">
                                                                            <input type="hidden" name="_wpcf7" value="260" />
                                                                            <input type="hidden" name="_wpcf7_version" value="5.5.6" />
                                                                            <input type="hidden" name="_wpcf7_locale" value="sv_SE" />
                                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f260-p339-o1" />
                                                                            <input type="hidden" name="_wpcf7_container_post" value="339" />
                                                                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col span_6">
                                                                                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Namn:" /></span>
                                                                            </div>
                                                                            <div class="col span_6">
                                                                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail:" /></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col span_6">
                                                                                <span class="wpcf7-form-control-wrap tel-840"><input type="tel" name="tel-840" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Telefon:" /></span>
                                                                            </div>
                                                                            <div class="col span_6">
                                                                                <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Ämne:" /></span>
                                                                            </div>
                                                                        </div>
                                                                        <p><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Skriv ditt meddelande här..."></textarea></span></p>
                                                                        <p><input type="submit" value="Skicka" class="wpcf7-form-control has-spinner wpcf7-submit" /></p>
                                                                        <div class="wpcf7-response-output" aria-hidden="true"></div></form></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                        <div id="fws_6270ec8b56d3d"  data-br="10px" data-br-applies="inner" data-column-margin="none" data-midnight="dark" data-bottom-percent="8%"  class="wpb_row vc_row-fluid vc_row full-width-section vc_row-o-equal-height vc_row-flex vc_row-o-content-middle"  style="padding-top: 0px; padding-bottom: calc(100vw * 0.08); "><div class="row-bg-wrap" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap"><div class="row-bg viewport-desktop using-bg-color"  style="background-color: #ffffff; "></div></div></div><div class="row_col_wrap_12 col span_12 dark left">
                                <div style="" class="vc_col-sm-6 wpb_column column_container vc_column_container col force-tablet-text-align-center force-phone-text-align-center no-extra-padding inherit_tablet inherit_phone " data-using-bg="true" data-padding-pos="all" data-has-bg-color="true" data-bg-color="#ffcf6d" data-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" ><div class="column-image-bg-wrap column-bg-layer viewport-desktop" data-bg-pos="center center" data-bg-animation="none" data-bg-overlay="false"><div class="inner-wrap"><div data-bg="https://www.sitea.se/wp-content/uploads/2020/06/webbyrå-priser-1.jpg" class="column-image-bg rocket-lazyload" style="  "></div></div></div><div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none"><div class="column-bg-overlay" style="opacity: 1; background-color: #ffcf6d;"></div></div>
                                        <div class="wpb_wrapper">
                                            <div id="fws_6270ec8b573a8" data-midnight="" data-column-margin="none" class="wpb_row vc_row-fluid vc_row inner_row vc_row-o-equal-height vc_row-flex vc_row-o-content-middle bottom_padding_tablet_10px right_padding_tablet_20pct left_padding_tablet_20pct"  style=""><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div style="" class="vc_col-sm-10 vc_col-lg-6 vc_col-md-5 vc_hidden-sm vc_hidden-xs wpb_column column_container vc_column_container col child_column no-extra-padding inherit_tablet inherit_phone "  data-using-bg="true" data-bg-cover="true" data-overlay-color="true" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" ><div class="column-image-bg-wrap column-bg-layer viewport-desktop" data-bg-pos="left top" data-bg-animation="none" data-bg-overlay="true"><div class="inner-wrap"><div data-bg="https://source.unsplash.com/RYyr-k3Ysqg" class="column-image-bg rocket-lazyload" style=" "></div></div></div><div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none"><div class="column-bg-overlay"></div><div class="column-overlay-layer" style="background: rgba(255,255,255,0.001); background: linear-gradient(90deg,rgba(255,255,255,0.001) 25%,#ffcf6d 100%);  opacity: 1; background: rgba(255,255,255,0.001); background: linear-gradient(90deg,rgba(255,255,255,0.001) 0%,#ffcf6d 100%);  opacity: 1; "></div></div>
                                                            <div class="wpb_wrapper">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div  class="vc_col-sm-6 vc_col-lg-5 vc_col-md-6 wpb_column column_container vc_column_container col child_column padding-15-percent padding-8-percent_tablet padding-8-percent_phone "   data-padding-pos="top-bottom" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element  vc_custom_1591389783606" >
                                                                    <div class="wpb_wrapper">
                                                                        <p class="vc_custom_heading"><strong>Se referenser och bilder på hemsidor vi utvecklat!</strong></p>
                                                                    </div>
                                                                </div>



                                                                <div class="nectar-cta  hover_color_2643ef alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit " data-color="extra-color-gradient-2" data-using-bg="true" data-style="basic" data-display="block" data-alignment="left" data-text-color="custom" ><span style="color: #ffffff;" class="nectar-button-type"><span class="link_wrap" style="padding-top: 15px; padding-right: 35px; padding-bottom: 15px; padding-left: 35px;"><a  class="link_text pp nectar_video_lightbox" href="https://www.sitea.se/snygg-hemsida-fran-sitea/"><span class="text">Referenser</span></a></span></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div>
                                        </div>
                                    </div>
                                </div>

                                <div style="" class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone " data-using-bg="true" data-overlay-color="true" data-bg-cover="true" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                    <div class="vc_column-inner" ><div class="column-image-bg-wrap column-bg-layer viewport-desktop" data-bg-pos="center center" data-bg-animation="none" data-bg-overlay="true"><div class="inner-wrap"><div data-bg="https://www.sitea.se/wp-content/uploads/2020/06/webbyrå-priser.jpg" class="column-image-bg rocket-lazyload" style="  "></div></div></div><div class="column-bg-overlay-wrap column-bg-layer" data-bg-animation="none"><div class="column-bg-overlay"></div><div class="column-overlay-layer" style="background-color:#3452ff;  opacity: 0.8; "></div></div>
                                        <div class="wpb_wrapper">
                                            <div id="fws_6270ec8b582ac" data-midnight="" data-column-margin="default" class="wpb_row vc_row-fluid vc_row inner_row  bottom_padding_tablet_10px"  style=""><div class="row-bg-wrap"> <div class="row-bg" ></div> </div><div class="row_col_wrap_12_inner col span_12  left">
                                                    <div style=" color: #ffffff;" class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column centered-text padding-12-percent inherit_tablet padding-8-percent_phone " data-cfc="true"  data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                                                        <div class="vc_column-inner" >
                                                            <div class="wpb_wrapper">

                                                                <div class="wpb_text_column wpb_content_element  vc_custom_1591389790886" style=" max-width: 280px; display: inline-block;">
                                                                    <div class="wpb_wrapper">
                                                                        <p><strong>Är du redo att komma igång med en helt ny hemsida?</strong></p>
                                                                    </div>
                                                                </div>



                                                                <div class="nectar-cta  hover_color_e8e8ff alignment_tablet_default alignment_phone_default display_tablet_inherit display_phone_inherit " data-color="white" data-using-bg="true" data-style="arrow-animation" data-display="block" data-alignment="center" data-text-color="custom" ><span style="color: #000000;" class="nectar-button-type"><span class="link_wrap" style="padding-top: 15px; padding-right: 35px; padding-bottom: 15px; padding-left: 35px;"><a  class="link_text" href="https://www.sitea.se/kontakt/"><span class="text">Kontakt</span><svg class="next-arrow" aria-hidden="true" width="20px" height="25px" viewBox="0 0 50 80" xml:space="preserve">
  <polyline stroke="#ffffff" stroke-width="9" fill="none" stroke-linecap="round" stroke-linejoin="round" points="0, 0 45, 40 0, 80"/>
  </svg>  <span class="line"  style="background-color: #000000;"></span> </a></span></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                        <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col centered-text no-extra-padding inherit_tablet inherit_phone "  data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="" data-delay="0" >
                            <div class="vc_column-inner" >
                                <div class="wpb_wrapper">

                                </div>
                            </div>
                        </div>

                        <div  class="vc_col-sm-12 wpb_column column_container vc_column_container col child_column has-animation no-extra-padding inherit_tablet inherit_phone "   data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-animation="fade-in" data-delay="0" >
                            <div class="vc_column-inner" >
                                <div class="wpb_wrapper">

                                </div>
                            </div>
                        </div>

                        <div class="wpb_text_column wpb_content_element  vc_custom_1469639641867" >
                            <div class="wpb_wrapper">
                            </div>
                        </div>




                    </div>
                </div>
            </div>

            <div id="footer-outer" data-midnight="light" data-cols="5" data-custom-color="true" data-disable-copyright="true" data-matching-section-color="false" data-copyright-line="false" data-using-bg-img="false" data-bg-img-overlay="0.0" data-full-width="false" data-using-widget-area="true" data-link-hover="default">


                <div id="call-to-action">
                    <div class="container">
                        <div class="triangle"></div>
                        <span> Vill du också få fler kunder? Ring oss idag så berättar vi hur! </span>
                        <a class="nectar-button
		  regular-button extra-color-1" data-color-override="false" href="tel:0840903210">
                            08 4090 32 10		</a>
                    </div>
                </div>


                <div id="footer-widgets" data-has-widgets="true" data-cols="5">

                    <div class="container">


                        <div class="row">


                            <div class="col span_3">
                                <div id="text-17" class="widget widget_text">			<div class="textwidget"><p><a href="https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min.png.webp"><img class="aligncenter size-large wp-image-18065" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201024%20118'%3E%3C/svg%3E" alt="sitea webbyrå stockholm hemsida wordpress-min" width="1024" height="118" data-lazy-srcset="https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-1024x118.png.webp 1024w,https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-300x35.png.webp 300w,https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-768x89.png.webp 768w,https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-1536x178.png.webp 1536w,https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-2048x237.png.webp 2048w" data-lazy-sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-src="https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-1024x118.png.webp" /><noscript><img class="aligncenter size-large wp-image-18065" src="https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-1024x118.png.webp" alt="sitea webbyrå stockholm hemsida wordpress-min" width="1024" height="118" srcset="https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-1024x118.png.webp 1024w,https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-300x35.png.webp 300w,https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-768x89.png.webp 768w,https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-1536x178.png.webp 1536w,https://www.sitea.se/wp-content/uploads/2021/04/sitea-webbyra-stockholm-hemsida-wordpress-min-2048x237.png.webp 2048w" sizes="(max-width: 1024px) 100vw, 1024px" /></noscript></a></p>
                                        <p>Vi på Sitea har hjälpt över 530+ företag att öka sin lönsamhet online. Med mångårig kompetens och de senaste verktygen så utvecklar vi en digital strategi som tar ert företag till nya höjder av digital lönsamhet.</p>
                                    </div>
                                </div><div id="block-7" class="widget widget_block widget_text">
                                    <p><img width="1072" height="293" class="wp-image-18986" style="width: 300px;" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201072%20293'%3E%3C/svg%3E" alt="" data-lazy-srcset="https://www.sitea.se/wp-content/uploads/2021/06/partners2.jpg.webp 1072w,https://www.sitea.se/wp-content/uploads/2021/06/partners2-300x82.jpg.webp 300w,https://www.sitea.se/wp-content/uploads/2021/06/partners2-1024x280.jpg.webp 1024w,https://www.sitea.se/wp-content/uploads/2021/06/partners2-768x210.jpg.webp 768w" data-lazy-sizes="(max-width: 1072px) 100vw, 1072px" data-lazy-src="https://www.sitea.se/wp-content/uploads/2021/06/partners2.jpg.webp" /><noscript><img width="1072" height="293" class="wp-image-18986" style="width: 300px;" src="https://www.sitea.se/wp-content/uploads/2021/06/partners2.jpg.webp" alt="" srcset="https://www.sitea.se/wp-content/uploads/2021/06/partners2.jpg.webp 1072w,https://www.sitea.se/wp-content/uploads/2021/06/partners2-300x82.jpg.webp 300w,https://www.sitea.se/wp-content/uploads/2021/06/partners2-1024x280.jpg.webp 1024w,https://www.sitea.se/wp-content/uploads/2021/06/partners2-768x210.jpg.webp 768w" sizes="(max-width: 1072px) 100vw, 1072px" /></noscript></p>
                                </div>					</div>


                            <div class="col span_3">
                                <div id="text-15" class="widget widget_text"><h4>POPULÄRA GUIDER:</h4>			<div class="textwidget"><p><a href="https://www.sitea.se/vad-ar-seo/">Vad är SEO?</a><br />
                                            <a href="https://www.sitea.se/sa-funkar-adwords/">Vad är Google Ads?</a><br />
                                            <a href="https://www.sitea.se/hemsida-wordpress/">Vad är WordPress?</a><br />
                                            <a href="https://www.sitea.se/vad-kostar-en-hemsida/">Vad kostar en hemsida?</a><br />
                                            <a href="https://www.sitea.se/bygga-hemsida/">Så bygger du en hemsida</a><br />
                                            <a href="https://www.sitea.se/digital-marknadsforing-guide/">Digital Marknadsföring Guide</a><br />
                                            <a href="https://www.sitea.se/ads/facebook-annonsering/">Facebook Ads Guide</a></p>
                                    </div>
                                </div>
                            </div>



                            <div class="col span_3">
                                <div id="text-14" class="widget widget_text"><h4>SNABBLÄNKAR:</h4>			<div class="textwidget"><p><a href="https://www.sitea.se/om-sitea/">Sitea Webbyrå Stockholm</a><br />
                                            <a href="https://www.sitea.se/digital-marknadsforing/">Digital Marknadsföring</a><br />
                                            <a href="https://www.sitea.se/google-annonsering-adwords/">Google Ads Annonsering</a><br />
                                            <a href="https://www.sitea.se/kopa-hemsida-webbyra/">Köpa Hemsida</a><br />
                                            <a href="https://www.sitea.se/hemsida-foretag/">Hemsida Företag</a><br />
                                            <a href="https://www.sitea.se/hjalp-med-hemsida-wordpress/">Hjälp med Hemsida</a><br />
                                            <a href="https://www.sitea.se/hemsida-wordpress/">Hemsida WordPress</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col span_3">
                                <div id="text-3" class="widget widget_text"><h4>KONTAKT:</h4>			<div class="textwidget"><p>Olivecronas väg 2<br />
                                            113 61 Stockholm<br />
                                            <a href="mailto:info@sitea.se">info@sitea.se</a><br />
                                            <a href="tel:08 40 90 32 10">08 40 90 32 10</a><br />
                                            <a href="https://www.sitea.se/cookies/">Cookies &#038; GDPR Policy</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!--/container-->
                </div><!--/footer-widgets-->


            </div><!--/footer-outer-->


        </div> <!--/ajax-content-wrap-->

    </div></div><!--/ocm-effect-wrap--><script type="text/html" id="wpb-modifications"></script>




<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {"api":{"root":"https:\/\/www.sitea.se\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
    /* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/plugins/contact-form-7/includes/js/index.js?ver=1650445377' id='contact-form-7-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-includes/js/jquery/ui/accordion.min.js?ver=1.13.1' id='jquery-ui-accordion-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/plugins/faq-schema-for-pages-and-posts/js/frontend.js?ver=1650445377' id='wp-faq-schema-frontend-js' defer></script>
<script type='text/javascript' id='leadin-script-loader-js-js-extra'>
    /* <![CDATA[ */
    var leadin_wordpress = {"userRole":"visitor","pageType":"page","leadinPluginVersion":"8.11.11"};
    /* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/25586718.js?ver=1650445378' async defer id='hs-script-loader'></script>
<script type='text/javascript' id='wpcf7-redirect-script-js-extra'>
    /* <![CDATA[ */
    var wpcf7r = {"ajax_url":"https:\/\/www.sitea.se\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/plugins/wpcf7-redirect/build/js/wpcf7r-fe.js?ver=1650445378' id='wpcf7-redirect-script-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='google-invisible-recaptcha-js-before'>
var renderInvisibleReCaptcha = function() {

    for (var i = 0; i < document.forms.length; ++i) {
        var form = document.forms[i];
        var holder = form.querySelector('.inv-recaptcha-holder');

        if (null === holder) continue;
		holder.innerHTML = '';

         (function(frm){
			var cf7SubmitElm = frm.querySelector('.wpcf7-submit');
            var holderId = grecaptcha.render(holder,{
                'sitekey': '6LfXteIZAAAAAP2bf1zYQZsB9_KcYXVkT641Rld6', 'size': 'invisible', 'badge' : 'bottomright',
                'callback' : function (recaptchaToken) {
					if((null !== cf7SubmitElm) && (typeof jQuery != 'undefined')){jQuery(frm).submit();grecaptcha.reset(holderId);return;}
					 HTMLFormElement.prototype.submit.call(frm);
                },
                'expired-callback' : function(){grecaptcha.reset(holderId);}
            });

			if(null !== cf7SubmitElm && (typeof jQuery != 'undefined') ){
				jQuery(cf7SubmitElm).off('click').on('click', function(clickEvt){
					clickEvt.preventDefault();
					grecaptcha.execute(holderId);
				});
			}
			else
			{
				frm.onsubmit = function (evt){evt.preventDefault();grecaptcha.execute(holderId);};
			}


        })(form);
    }
};
</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' async defer src='https://www.google.com/recaptcha/api.js?onload=renderInvisibleReCaptcha&#038;render=explicit' id='google-invisible-recaptcha-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='rocket-browser-checker-js-after'>
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script type='text/javascript' id='rocket-preload-links-js-extra'>
    /* <![CDATA[ */
    var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/wp-admin\/|\/logout\/|\/wp-login.php|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|php|pdf|html|htm","siteUrl":"https:\/\/www.sitea.se","onHoverDelay":"100","rateThrottle":"3"};
    /* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='rocket-preload-links-js-after'>
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/themes/salient-9/js/build/third-party/jquery.easing.min.js?ver=1.3' id='jquery-easing-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/themes/salient-9/js/build/third-party/jquery.mousewheel.min.js?ver=3.1.13' id='jquery-mousewheel-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/themes/salient-9/js/build/priority.js?ver=1650445378' id='nectar_priority-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/themes/salient-9/js/build/third-party/transit.min.js?ver=0.9.9' id='nectar-transit-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/themes/salient-9/js/build/third-party/waypoints.js?ver=1650445378' id='nectar-waypoints-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/themes/salient-9/js/build/third-party/imagesLoaded.min.js?ver=4.1.4' id='imagesLoaded-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/themes/salient-9/js/build/third-party/hoverintent.min.js?ver=1.9' id='hoverintent-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/themes/salient-9/js/build/third-party/anime.min.js?ver=4.5.1' id='anime-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/themes/salient-9/js/build/third-party/superfish.js?ver=1650445378' id='superfish-js' defer></script>
<script type='text/javascript' id='nectar-frontend-js-extra'>
    /* <![CDATA[ */
    var nectarLove = {"ajaxurl":"https:\/\/www.sitea.se\/wp-admin\/admin-ajax.php","postID":"339","rooturl":"https:\/\/www.sitea.se","disqusComments":"false","loveNonce":"c0f372a350","mapApiKey":""};
    var nectarOptions = {"quick_search":"false","header_entrance":"false","mobile_header_format":"default","ocm_btn_position":"default","left_header_dropdown_func":"default","ajax_add_to_cart":"0","ocm_remove_ext_menu_items":"remove_images","woo_product_filter_toggle":"0","woo_sidebar_toggles":"true","woo_sticky_sidebar":"0","woo_minimal_product_hover":"default","woo_minimal_product_effect":"default","woo_related_upsell_carousel":"false","woo_product_variable_select":"default"};
    var nectar_front_i18n = {"next":"Next","previous":"Previous"};
    /* ]]> */
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/themes/salient-9/js/build/init.js?ver=1650445378' id='nectar-frontend-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/plugins/salient-core/js/third-party/touchswipe.min.js?ver=1.0' id='touchswipe-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/plugins/js_composer_salient/assets/js/dist/js_composer_front.min.js?ver=6.7.1' id='wpb_composer_front_js-js' defer></script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' defer async src='https://www.sitea.se/wp-content/cache/min/1/loader.js?ver=1650445873' id='trustindex-js-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='trustindex-js-js-after'>
(function ti_init() {
if(typeof Trustindex == "undefined"){setTimeout(ti_init, 1985);return false;}
if(typeof Trustindex.pager_inited != "undefined"){return false;}
Trustindex.init_pager(document.querySelectorAll(".ti-widget"));
})();
</script>
<script type="rocketlazyloadscript" data-minify="1" data-rocket-type='text/javascript' src='https://www.sitea.se/wp-content/cache/min/1/wp-content/plugins/elfsight-pricing-table-cc/assets/elfsight-pricing-table.js?ver=1650445378' id='elfsight-pricing-table-js' defer></script>
<script>window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
        if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
        images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
        if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://www.sitea.se/wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js"></script></body>
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1651567755 -->