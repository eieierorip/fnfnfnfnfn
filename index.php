<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = 'c9p21b';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>




<!DOCTYPE html><html lang="de-DE"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>atgolanginteredgame | atgolanginteredgame</title><meta name="author" content="atgolanginteredgame"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://atgolanginterested.godaddysites.com/"/>
<meta property="og:site_name" content="atgolanginteredgame"/>
<meta property="og:title" content="Willkommen bei atgolanginteredgame"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/Q6QgpK3"/>
<meta property="og:locale" content="de_DE"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="atgolanginteredgame"/>
<meta name="twitter:description" content="Willkommen bei atgolanginteredgame"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/Q6QgpK3"/>
<meta name="twitter:image:alt" content="atgolanginteredgame"/>
<meta name="theme-color" content="#d6ebf1"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.de-DE" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright (c) 2011 by Sorkin Type Co (www.sorkintype.com eben@eyebytes.com), with Reserved Font Name "Fjalla"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Fjalla One';
  font-style: normal;
  font-weight: 400;
  src: local('Fjalla One'), local('FjallaOne-Regular'), url(https://img1.wsimg.com/gfonts/s/fjallaone/v7/Yq6R-LCAWCX3-6Ky7FAFrO96kjouQb5-6g.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Fjalla One';
  font-style: normal;
  font-weight: 400;
  src: local('Fjalla One'), local('FjallaOne-Regular'), url(https://img1.wsimg.com/gfonts/s/fjallaone/v7/Yq6R-LCAWCX3-6Ky7FAFrOF6kjouQb4.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2010, 2012, 2014 Adobe Systems Incorporated (http://www.adobe.com/), with Reserved Font Name Source.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidh18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkido18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidg18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidv18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidj18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkidi18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 300;
  src: local('Source Sans Pro Light Italic'), local('SourceSansPro-LightItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZMkids18S0xR41.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7qsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7jsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7rsDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7ksDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7osDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7psDJB9cme_xc.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 400;
  src: local('Source Sans Pro Italic'), local('SourceSansPro-Italic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK1dSBYKcSV-LCoeQqfX1RYOo3qPZ7nsDJB9cme.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdh18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdo18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdg18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdv18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdj18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSdi18S0xR41YDw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: italic;
  font-weight: 700;
  src: local('Source Sans Pro Bold Italic'), local('SourceSansPro-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKwdSBYKcSV-LCoeQqfX1RYOo3qPZZclSds18S0xR41.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmhdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwkxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwmRdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 300;
  src: local('Source Sans Pro Light'), local('SourceSansPro-Light'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ik4zwlxdu3cOWxw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNa7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qPK7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNK7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qO67lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qN67lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qNq7lujVj9_mf.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7lujVj9w.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmhdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwkxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmxdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmBdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwmRdu3cOWxy40.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://img1.wsimg.com/gfonts/s/sourcesanspro/v13/6xKydSBYKcSV-LCoeQqfX1RYOo3ig4vwlxdu3cOWxw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca/gpub/e788adf521a96de/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-n{padding-top:40px}}@media (max-width: 767px){.x .c1-o{padding-bottom:40px}}@media (max-width: 767px){.x .c1-20{width:100%}}@media (max-width: 767px){.x .c1-5d{width:250px}}@media (max-width: 767px){.x .c1-5e{height:250px}}@media (max-width: 767px){.x .c1-5f{padding-top:24px}}@media (max-width: 767px){.x .c1-5g{padding-right:24px}}@media (max-width: 767px){.x .c1-5h{padding-bottom:24px}}@media (max-width: 767px){.x .c1-5i{padding-left:24px}}@media (max-width: 767px){.x .c1-7j > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-7k  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-al{display:flex}}@media (max-width: 767px){.x .c1-am{flex-direction:column}}@media (max-width: 767px){.x .c1-as{padding-top:4px}}@media (max-width: 767px){.x .c1-at{padding-bottom:4px}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca/gpub/5164e5ea97fd16c9/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca/gpub/af74085d0e49bc1f/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-2o{font-size:32px}}@media (min-width: 1280px){.x .c1-3j{font-size:14px}}@media (min-width: 1280px){.x .c1-4q{width:1160px}}@media (min-width: 1280px){.x .c1-5r{font-size:44px}}@media (min-width: 1280px){.x .c1-5w{font-size:22px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-2p{font-size:36px}}@media (min-width: 1536px){.x .c1-3k{font-size:16px}}@media (min-width: 1536px){.x .c1-4r{width:1280px}}@media (min-width: 1536px){.x .c1-5s{font-size:48px}}@media (min-width: 1536px){.x .c1-5x{font-size:24px}}</style>
<style type="text/css">.page-inner { background-color: rgb(214, 235, 241); min-height: 100vh; }</style></head>
<body class="x  x-fonts-fjalla-one" context="[object Object]"><div id="layout-e-2928277-a-0-e-9-4-ebd-ab-7-a-8-e-9-b-7-ce-827-ca" class="layout layout-layout layout-layout-layout-19 locale-de-DE lang-de"><div data-ux="Page" id="page-4828" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="2adba2a3-3735-4dbd-ab4f-5045edf14469" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-l c1-m c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-q c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-r c1-4 c1-s c1-t c1-u c1-v c1-w c1-b c1-c c1-d c1-x c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-y c1-4 c1-z c1-10 c1-11 c1-12 c1-13 c1-14 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg4830" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-route="hasMedia:mediaData" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-15 c1-16 c1-17 c1-18 c1-19 c1-r c1-4 c1-1a c1-1b c1-1c c1-b c1-c c1-d c1-x c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-route"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/Q6QgpK3/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg4830'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-14 c1-1d c1-r c1-b c1-c c1-d c1-1e c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-14 c1-1f c1-1a c1-4 c1-1g c1-b c1-c c1-d c1-x c1-1e c1-e c1-f c1-g x-d-ux"><div data-ux="Block" id="header_navwrapper4832" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" id="header_stickynav4831" class="x-el x-el-div c1-1 c1-2 c1-1h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1i c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-p c1-b c1-c c1-d c1-1q c1-1r c1-1s c1-1t c1-1u c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1v c1-1w c1-1n c1-1x c1-1m c1-1y c1-1z c1-c c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="7bdde7db-2d77-46a2-af6a-a1664f6b3006" title="atgolanginteredgame" href="/" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.4833.click,click"><div id="bs-1"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-4834" logoText="atgolanginteredgame" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-2h c1-w c1-u c1-t c1-v c1-1n c1-2i c1-1w c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-1v c1-4 c1-1w c1-2k c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route">atgolanginteredgame</span></h3></div></a></div><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-2q c1-2r c1-2s c1-2t c1-2u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><ul data-ux="List" id="n-48294835-navId" class="x-el x-el-ul c1-1 c1-2 c1-t c1-v c1-w c1-u c1-2v c1-2w c1-2x c1-r c1-2y c1-2z c1-30 c1-31 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><li data-ux="ListItemInline" class="x-el x-el-li c1-1 c1-2 c1-32 c1-w c1-33 c1-1v c1-34 c1-35 c1-36 c1-2s c1-r c1-37 c1-b c1-c c1-38 c1-39 c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-2"><a rel="" typography="NavAlpha" data-ux="NavLinkActive" target="" data-page="7bdde7db-2d77-46a2-af6a-a1664f6b3006" data-edit-interactive="true" href="/" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-3c c1-28 c1-b c1-3d c1-3e c1-3f c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Active.4837.click,click">Start</a></div></li><li data-ux="ListItemInline" class="x-el x-el-li c1-1 c1-2 c1-32 c1-w c1-33 c1-1v c1-34 c1-35 c1-36 c1-2s c1-r c1-37 c1-b c1-c c1-38 c1-39 c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-3"><a rel="" typography="NavAlpha" data-ux="NavLink" target="" data-page="0333b5ab-1053-4006-9aeb-cf911b801eb2" data-edit-interactive="true" href="/veranstaltungen" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-3c c1-28 c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-b c1-3d c1-3e c1-2l c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Default.4838.click,click">Veranstaltungen</a></div></li><li data-ux="ListItemInline" class="x-el x-el-li c1-1 c1-2 c1-32 c1-w c1-33 c1-1v c1-34 c1-35 c1-36 c1-2s c1-r c1-37 c1-b c1-c c1-38 c1-39 c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-4"><a rel="" typography="NavAlpha" data-ux="NavLink" target="" data-page="78cb5b32-abbd-418a-8b4b-f815c99fe5e9" data-edit-interactive="true" href="/kontaktiere-uns" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-3c c1-28 c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-b c1-3d c1-3e c1-2l c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Default.4839.click,click">Kontaktiere uns</a></div></li><li data-ux="ListItemInline" class="x-el x-el-li c1-1 c1-2 c1-32 c1-w c1-33 c1-1v c1-34 c1-35 c1-36 c1-2s c1-r c1-37 c1-b c1-c c1-38 c1-39 c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-5"><a rel="" typography="NavAlpha" data-ux="NavLink" target="" data-page="893abbf5-4bd6-4855-93fd-2da7894adeb4" data-edit-interactive="true" href="/bewertungen" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-3c c1-28 c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-b c1-3d c1-3e c1-2l c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Default.4840.click,click">Bewertungen</a></div></li><li data-ux="ListItemInline" class="x-el x-el-li c1-1 c1-2 c1-32 c1-w c1-33 c1-1v c1-34 c1-35 c1-36 c1-2s c1-r c1-37 c1-b c1-c c1-38 c1-39 c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-6"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script><a rel="" typography="NavAlpha" data-ux="NavLinkDropdown" data-toggle-ignore="true" id="4841" data-aid="NAV_MORE" ignoreCloseAttr="data-ignore-close" data-edit-interactive="true" href="#" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-14 c1-28 c1-3t c1-3l c1-3m c1-3n c1-3o c1-3p c1-3q c1-3r c1-3s c1-b c1-3d c1-3e c1-2l c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-toggle-ignore x-d-aid x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Dropdown.4842.click,click"><div style="pointer-events:none;display:flex;align-items:center" data-aid="NAV_DROPDOWN"><span style="margin-right:4px">Mehr</span><svg viewBox="0 0 24 24" fill="currentColor" width="16px" height="16px" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-3u c1-1v c1-3v c1-3w c1-3x c1-r c1-b c1-3e c1-3h c1-3i c1-3j c1-3k x-d-ux"><path fill-rule="evenodd" d="M18.605 7l-6.793 7.024-6.375-7.002L4 8.467 11.768 17l.485-.501L20 8.489z"></path></svg></div></a></div><ul data-ux="Dropdown" id="4836-moreId" class="x-el x-el-ul c1-1 c1-2 c1-3y c1-3z c1-3 c1-1o c1-1p c1-40 c1-41 c1-z c1-42 c1-43 c1-2s c1-44 c1-45 c1-p c1-46 c1-b c1-c c1-47 c1-48 c1-d c1-e c1-f c1-g x-d-ux"><li data-ux="ListItem" class="x-el x-el-li c1-1 c1-2 c1-32 c1-v c1-3c c1-2i c1-b c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux"><a rel="" typography="NavAlpha" data-ux="NavMoreMenuLinkActive" target="" data-page="7bdde7db-2d77-46a2-af6a-a1664f6b3006" data-edit-interactive="true" href="/" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-1v c1-28 c1-4a c1-4b c1-4c c1-b c1-3d c1-3e c1-3f c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Active.4843.click,click">Start</a></li><li data-ux="ListItem" class="x-el x-el-li c1-1 c1-2 c1-32 c1-v c1-3c c1-2i c1-b c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux"><a rel="" typography="NavAlpha" data-ux="NavMoreMenuLink" target="" data-page="0333b5ab-1053-4006-9aeb-cf911b801eb2" data-edit-interactive="true" href="/veranstaltungen" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-1v c1-28 c1-4a c1-4b c1-4c c1-b c1-3d c1-3e c1-2l c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Default.4844.click,click">Veranstaltungen</a></li><li data-ux="ListItem" class="x-el x-el-li c1-1 c1-2 c1-32 c1-v c1-3c c1-2i c1-b c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux"><a rel="" typography="NavAlpha" data-ux="NavMoreMenuLink" target="" data-page="78cb5b32-abbd-418a-8b4b-f815c99fe5e9" data-edit-interactive="true" href="/kontaktiere-uns" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-1v c1-28 c1-4a c1-4b c1-4c c1-b c1-3d c1-3e c1-2l c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Default.4845.click,click">Kontaktiere uns</a></li><li data-ux="ListItem" class="x-el x-el-li c1-1 c1-2 c1-32 c1-v c1-3c c1-2i c1-b c1-c c1-49 c1-d c1-e c1-f c1-g x-d-ux"><a rel="" typography="NavAlpha" data-ux="NavMoreMenuLink" target="" data-page="893abbf5-4bd6-4855-93fd-2da7894adeb4" data-edit-interactive="true" href="/bewertungen" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-1v c1-28 c1-4a c1-4b c1-4c c1-b c1-3d c1-3e c1-2l c1-2f c1-3g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.MoreMenu.Link.Default.4846.click,click">Bewertungen</a></li></ul></li></ul></nav></nav><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-4d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4e c1-4 c1-14 c1-3t c1-2i c1-4f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4g c1-4h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-7"><a rel="" typography="LinkAlpha" data-ux="LinkDropdown" data-toggle-ignore="true" id="4847" toggleId="n-4829-navId-mobile" uniqueId="n-4829" icon="hamburger" openIcon="hamburger" openWidth="100%" staticContent="[object Object]" closeAttr="data-close" data-edit-interactive="true" data-aid="HAMBURGER_MENU_LINK" aria-label="Hamburger Site Navigation Icon" href="#" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-14 c1-28 c1-3t c1-4i c1-29 c1-2a c1-2b c1-2c c1-3d c1-w c1-b c1-c c1-2e c1-4j c1-2g c1-d c1-4d c1-e c1-f c1-g x-d-ux x-d-toggle-ignore x-d-edit-interactive x-d-aid" data-tccl="ux2.HEADER.header9.Section.Default.Link.Dropdown.4848.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="IconHamburger" class="x-el x-el-svg c1-1 c1-2 c1-3u c1-1v c1-35 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><g><path fill-rule="evenodd" d="M4 8h16V6H4z"></path><path fill-rule="evenodd" d="M4 13.096h16v-2.001H4z"></path><path fill-rule="evenodd" d="M4 18.346h16v-2H4z"></path></g></svg></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4k c1-4l c1-4h c1-14 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1v c1-1w c1-1n c1-c c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="7bdde7db-2d77-46a2-af6a-a1664f6b3006" title="atgolanginteredgame" href="/" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.4849.click,click"><div id="bs-8"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-4850" logoText="atgolanginteredgame" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-2h c1-w c1-u c1-t c1-v c1-1n c1-1w c1-2j c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-1v c1-4 c1-1w c1-2k c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route">atgolanginteredgame</span></h3></div></a></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4g c1-14 c1-4m c1-4h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"></div></div></div></div></div></div><div id="bs-9"></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1k c1-1l c1-1m c1-1n c1-4n c1-m c1-b c1-c c1-4o c1-d c1-4p c1-e c1-4q c1-f c1-4r c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-14 c1-3t c1-4s c1-4t c1-4l c1-4 c1-j c1-k c1-b c1-c c1-d c1-4u c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4v c1-4w c1-14 c1-3t c1-4s c1-4x c1-4y c1-z c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-b c1-c c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-5i c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" fontSizeMap="[object Object]" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-25 c1-26 c1-2h c1-w c1-u c1-t c1-v c1-1n c1-p c1-1w c1-5j c1-2k c1-2l c1-5k c1-2m c1-q c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route">Willkommen bei atgolanginteredgame</h1><div id="bs-10"><div data-ux="Element" id="tagline-container-4851" class="x-el x-el-div c1-1 c1-2 c1-25 c1-26 c1-2h c1-3c c1-b c1-c c1-d c1-4d c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" fontSizeMap="[object Object]" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-25 c1-26 c1-2h c1-w c1-u c1-t c1-v c1-5l c1-1v c1-4 c1-1n c1-c c1-1w c1-5j c1-2l c1-5k c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Willkommen bei atgolanginteredgame</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-4851" class="x-el x-el-span c1-5m c1-5n c1-p c1-37 c1-z c1-11 c1-5o c1-1w c1-5p c1-5q c1-5r c1-5s x-d-ux x-d-size x-d-scaler-id">Willkommen bei atgolanginteredgame</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-4851" class="x-el x-el-span c1-5m c1-5n c1-p c1-37 c1-z c1-11 c1-2k c1-1w c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-size x-d-scaler-id">Willkommen bei atgolanginteredgame</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-4851" class="x-el x-el-span c1-5m c1-5n c1-p c1-37 c1-z c1-11 c1-5t c1-1w c1-5u c1-5v c1-5w c1-5x x-d-ux x-d-size x-d-scaler-id">Willkommen bei atgolanginteredgame</span></div></div></div></div></div></div></div></div></div><div data-ux="NavigationDrawer" id="n-4829-navId-mobile" domainName="atgolanginterested.godaddysites.com" pageRoute="/" staticContent="[object Object]" navProps="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-5y c1-5z c1-11 c1-10 c1-4 c1-y c1-60 c1-45 c1-61 c1-j c1-62 c1-63 c1-51 c1-14 c1-1f c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-4d c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1l c1-1m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="CloseIcon" data-edit-interactive="true" data-close="true" class="x-el x-el-svg c1-1 c1-2 c1-64 c1-1v c1-3x c1-28 c1-65 c1-66 c1-z c1-67 c1-68 c1-2k c1-b c1-69 c1-2m c1-2n c1-2o c1-2p x-d-ux x-d-edit-interactive x-d-close"><path fill-rule="evenodd" d="M17.999 4l-6.293 6.293L5.413 4 4 5.414l6.292 6.293L4 18l1.413 1.414 6.293-6.292 6.293 6.292L19.414 18l-6.294-6.293 6.294-6.293z"></path></svg></div><div data-ux="Container" id="n-4829-navContainerId-mobile" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1k c1-1l c1-1m c1-1n c1-45 c1-6a c1-4 c1-b c1-c c1-4o c1-d c1-4p c1-e c1-4q c1-f c1-4r c1-g x-d-ux"><div data-ux="Block" id="n-4829-navLinksContentId-mobile" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><ul data-ux="List" id="n-4829-navListId-mobile" class="x-el x-el-ul c1-1 c1-2 c1-t c1-v c1-w c1-u c1-2v c1-2w c1-2x c1-2i c1-2y c1-30 c1-31 c1-2z c1-25 c1-26 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><li data-ux="NavigationDrawerListItem" class="x-el x-el-li c1-1 c1-2 c1-6b c1-v c1-3c c1-6c c1-6d c1-6e c1-b c1-c c1-49 c1-6f c1-d c1-e c1-f c1-g x-d-ux"><a rel="" typography="NavBeta" data-ux="NavigationDrawerLinkActive" target="" data-page="7bdde7db-2d77-46a2-af6a-a1664f6b3006" data-edit-interactive="true" data-close="true" href="/" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-14 c1-28 c1-1o c1-1p c1-1l c1-1m c1-3t c1-6g c1-6h c1-b c1-64 c1-5t c1-3f c1-69 c1-6i c1-5u c1-6j c1-5v c1-5w c1-5x x-d-ux x-d-page x-d-edit-interactive x-d-close" data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Active.4852.click,click"><span>Start</span></a></li><li data-ux="NavigationDrawerListItem" class="x-el x-el-li c1-1 c1-2 c1-6b c1-v c1-3c c1-6c c1-6d c1-6e c1-b c1-c c1-49 c1-6f c1-d c1-e c1-f c1-g x-d-ux"><a rel="" typography="NavBeta" data-ux="NavigationDrawerLink" target="" data-page="0333b5ab-1053-4006-9aeb-cf911b801eb2" data-edit-interactive="true" data-close="true" href="/veranstaltungen" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-14 c1-28 c1-1o c1-1p c1-1l c1-1m c1-3t c1-6g c1-6h c1-b c1-64 c1-5t c1-2l c1-69 c1-6i c1-5u c1-6j c1-5v c1-5w c1-5x x-d-ux x-d-page x-d-edit-interactive x-d-close" data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Default.4853.click,click"><span>Veranstaltungen</span></a></li><li data-ux="NavigationDrawerListItem" class="x-el x-el-li c1-1 c1-2 c1-6b c1-v c1-3c c1-6c c1-6d c1-6e c1-b c1-c c1-49 c1-6f c1-d c1-e c1-f c1-g x-d-ux"><a rel="" typography="NavBeta" data-ux="NavigationDrawerLink" target="" data-page="78cb5b32-abbd-418a-8b4b-f815c99fe5e9" data-edit-interactive="true" data-close="true" href="/kontaktiere-uns" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-14 c1-28 c1-1o c1-1p c1-1l c1-1m c1-3t c1-6g c1-6h c1-b c1-64 c1-5t c1-2l c1-69 c1-6i c1-5u c1-6j c1-5v c1-5w c1-5x x-d-ux x-d-page x-d-edit-interactive x-d-close" data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Default.4854.click,click"><span>Kontaktiere uns</span></a></li><li data-ux="NavigationDrawerListItem" class="x-el x-el-li c1-1 c1-2 c1-6b c1-v c1-3c c1-6c c1-6d c1-6e c1-b c1-c c1-49 c1-6f c1-d c1-e c1-f c1-g x-d-ux"><a rel="" typography="NavBeta" data-ux="NavigationDrawerLink" target="" data-page="893abbf5-4bd6-4855-93fd-2da7894adeb4" data-edit-interactive="true" data-close="true" href="/bewertungen" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-14 c1-28 c1-1o c1-1p c1-1l c1-1m c1-3t c1-6g c1-6h c1-b c1-64 c1-5t c1-2l c1-69 c1-6i c1-5u c1-6j c1-5v c1-5w c1-5x x-d-ux x-d-page x-d-edit-interactive x-d-close" data-tccl="ux2.HEADER.header9.NavigationDrawer.Default.Link.Default.4855.click,click"><span>Bewertungen</span></a></li></ul><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-3c c1-d c1-4d c1-e c1-f c1-g x-d-ux"></div></div></div></div></section> </div></div></div></div><div id="48e675d8-8100-4dc1-82e6-62381577fb60" class="widget widget-about widget-about-about-9"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-4o c1-d c1-4p c1-e c1-4q c1-f c1-4r c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-6k c1-w c1-u c1-t c1-6l c1-51 c1-4l c1-1w c1-2k c1-3d c1-2l c1-6m c1-2m c1-6n c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Über mich</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-6o c1-6p c1-6q c1-t c1-6r c1-6s c1-6t c1-b c1-c c1-6u c1-6v c1-6w c1-6x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-6o c1-4t c1-6y c1-6z c1-1n c1-2y c1-70 c1-71 c1-72 c1-b c1-c c1-73 c1-74 c1-75 c1-76 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-14 c1-6o c1-6p c1-6q c1-t c1-6r c1-v c1-6t c1-4s c1-b c1-c c1-6u c1-6v c1-77 c1-6x c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-6o c1-4t c1-6y c1-6z c1-1n c1-2y c1-70 c1-30 c1-72 c1-78 c1-4s c1-b c1-c c1-79 c1-7a c1-73 c1-74 c1-7b c1-76 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/0/image" class="x-el x-el-div c1-1 c1-2 c1-7c c1-4l c1-b c1-c c1-d c1-7d c1-7e c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/46159/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcSet="//img1.wsimg.com/isteam/stock/46159/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,
//img1.wsimg.com/isteam/stock/46159/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
//img1.wsimg.com/isteam/stock/46159/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
//img1.wsimg.com/isteam/stock/46159/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image5" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED0" class="x-el x-el-img c1-1 c1-2 c1-1n c1-7f c1-1j c1-1k c1-t c1-v c1-3x c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-6o c1-4t c1-6y c1-6z c1-1n c1-2y c1-70 c1-30 c1-72 c1-14 c1-4i c1-3t c1-b c1-c c1-79 c1-7a c1-73 c1-74 c1-7b c1-76 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-14 c1-1f c1-4 c1-7g c1-3t c1-4l c1-7h c1-7i c1-b c1-c c1-7j c1-7k c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-3a c1-3b c1-25 c1-26 c1-7l c1-w c1-u c1-t c1-v c1-b c1-3d c1-c c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route">Mein Hintergrund</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4c c1-t c1-v c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-8d c1-b c1-32 c1-c c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>Erzähle, wo du herkommst und was du tust.</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="20887e05-d4c1-41e8-95b3-898d17acc76d" class="widget widget-video widget-video-video-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-4o c1-d c1-4p c1-e c1-4q c1-f c1-4r c1-g x-d-ux"><div data-ux="Intro" class="x-el x-el-div x-el c1-1 c1-2 c1-6l c1-4l c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="VIDEO_SECTION_TITLE_RENDERED" data-field-id="sectionTitle" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-6k c1-w c1-u c1-t c1-v c1-51 c1-4l c1-1w c1-2k c1-3d c1-2l c1-6m c1-2m c1-6n c1-7e c1-2n c1-2o c1-2p x-d-ux x-d-aid x-d-field-id x-d-route"><span data-ux="Element" class="">Video</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-6o c1-6p c1-6q c1-t c1-6r c1-v c1-6t c1-b c1-c c1-6u c1-6v c1-77 c1-6x c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-6o c1-4t c1-6y c1-8i c1-1n c1-2y c1-70 c1-30 c1-72 c1-b c1-c c1-8j c1-8k c1-8l c1-73 c1-74 c1-7b c1-76 c1-d c1-8m c1-8n c1-8o c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="Text" data-aid="VIDEO_DESCRIPTION_RENDERED" data-field-id="description" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4c c1-t c1-v c1-8p c1-b c1-32 c1-c c1-2l c1-d c1-8q c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-route x-rt"><p style="margin:0"><span>Siehe dir dieses großartige Video an</span></p></div></div></div></div><div data-ux="Block" data-route="videoUrl" class="x-el x-el-div c1-1 c1-2 c1-r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route"><div id="bs-11"><div style="width:1px;height:1px;visibility:hidden"></div></div></div></div></section> </div></div></div><div id="b66880f7-da56-45ef-b1d2-f96c94c14f9a" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-4o c1-d c1-4p c1-e c1-4q c1-f c1-4r c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1 c1-2 c1-25 c1-26 c1-2h c1-w c1-u c1-8r c1-8s c1-4l c1-1w c1-3d c1-5o c1-2l c1-5p c1-8t c1-5q c1-5r c1-5s x-d-ux x-d-aid x-d-route">Registrieren</h2><div><div id="b66880f7-da56-45ef-b1d2-f96c94c14f9a-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-14 c1-6o c1-6p c1-6q c1-t c1-6r c1-v c1-6t c1-b c1-c c1-6u c1-6v c1-77 c1-6x c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-6o c1-4t c1-6y c1-8i c1-1n c1-2y c1-70 c1-30 c1-72 c1-b c1-c c1-8j c1-8k c1-8l c1-73 c1-74 c1-7b c1-76 c1-d c1-8m c1-8n c1-8o c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4c c1-t c1-8u c1-4l c1-b c1-32 c1-c c1-2l c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Registriere dich, um von uns News zu Sonderangeboten, Aktionen und Veranstaltungen zu erhalten.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-v c1-14 c1-1f c1-4s c1-3t c1-4l c1-19 c1-b c1-c c1-d c1-8v c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-7c c1-4 c1-b c1-c c1-d c1-1e c1-8w c1-1u c1-7e c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input4856" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-i c1-8x c1-4 c1-8y c1-8z c1-90 c1-91 c1-92 c1-40 c1-41 c1-93 c1-94 c1-95 c1-b c1-96 c1-3e c1-2l c1-97 c1-98 c1-99 c1-9a c1-9b c1-9c c1-9d c1-9e c1-9f c1-9g c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input4856" class="x-el x-el-label c1-1 c1-2 c1-25 c1-26 c1-z c1-9h c1-9i c1-9j c1-9k c1-b c1-96 c1-3e c1-2l c1-3h c1-3i c1-3j c1-3k x-d-ux">E-Mail</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-8w c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-r c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-3a c1-3b c1-8p c1-9l c1-36 c1-9m c1-9n c1-9o c1-1v c1-4l c1-24 c1-28 c1-26 c1-25 c1-1n c1-4 c1-r c1-m c1-b c1-9p c1-3f c1-19 c1-3e c1-9q c1-98 c1-9r c1-9s c1-9t c1-9u c1-9v c1-9w c1-9x c1-9y c1-9z c1-a0 c1-a1 c1-a2 c1-a3 c1-a4 c1-a5 c1-a6 c1-a7 c1-a8 c1-a9 c1-3h c1-aa c1-ab c1-ac c1-ad c1-3i c1-ae c1-af c1-ag c1-3j c1-3k x-d-ux x-d-tccl x-d-aid">Registrieren</button></div></div></form></div></div></span></div></div></div></section> </div></div></div><div id="52b791f5-4eb7-438b-8bea-4e4f9d396dad" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-4w c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-4w c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1k c1-1l c1-1m c1-1n c1-b c1-c c1-4o c1-d c1-4p c1-e c1-4q c1-f c1-4r c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-4l c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4c c1-t c1-7c c1-b c1-ah c1-3e c1-2l c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 atgolanginteredgame – Alle Rechte vorbehalten.</span></p></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1k c1-1l c1-1m c1-1n c1-4l c1-ai c1-b c1-c c1-4o c1-d c1-4p c1-e c1-4q c1-f c1-4r c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-aj c1-2y c1-2z c1-30 c1-31 c1-t c1-u c1-v c1-w c1-ak c1-b c1-c c1-al c1-am c1-d c1-e c1-f c1-g x-d-ux"><li style="display:inline-block"><a rel="" typography="NavAlpha" data-ux="NavFooterLink" data-page="915838ec-db7c-4ca4-b263-d485839d8e7b" target="" data-aid="FOOTER_PAGE_LINK_0_RENDERED" data-edit-interactive="true" href="/datenschutzerkl%C3%A4rung" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-1v c1-28 c1-8p c1-9l c1-an c1-ao c1-b c1-ap c1-3e c1-2l c1-aq c1-ar c1-as c1-at c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-aid x-d-edit-interactive" data-tccl="ux2.FOOTER.footer1.Nav.Footer.Link.Default.4857.click,click">Datenschutzerklärung</a></li><li style="display:inline-block"><a rel="" typography="NavAlpha" data-ux="NavFooterLink" data-page="62ac6c39-898e-4687-b277-03e7138b8874" target="" data-aid="FOOTER_PAGE_LINK_1_RENDERED" data-edit-interactive="true" href="/impressum-%2F-kontakt" class="x-el x-el-a c1-3a c1-3b c1-24 c1-25 c1-26 c1-1v c1-28 c1-8p c1-9l c1-an c1-ao c1-b c1-ap c1-3e c1-2l c1-aq c1-ar c1-as c1-at c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-page x-d-aid x-d-edit-interactive" data-tccl="ux2.FOOTER.footer1.Nav.Footer.Link.Default.4858.click,click">Impressum / Kontakt</a></li></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-au c1-av c1-95 c1-t c1-7c c1-aw c1-1j c1-1k c1-53 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4c c1-t c1-v c1-b c1-ah c1-3e c1-2l c1-3h c1-3i c1-3j c1-3k x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=de-de_corp_applications_base" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-b c1-5j c1-3e c1-2e c1-aq c1-ar c1-3h c1-3i c1-3j c1-3k x-d-ux" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.4859.click,click">Website-Baukasten</a></span></p></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.53.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/bc086653f7ade390/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2c17300d98a3b3c6/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca/gpub/efd5369960024f3d/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"left"},"logo":{"logoText":"atgolanginteredgame"},"fontPackLogoId":null,"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"default","category":"neutral","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/60b25d5722ed2be1/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'WrappedAbsLink',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"a","href":"\u002F","target":"","rel":"","data-page":"7bdde7db-2d77-46a2-af6a-a1664f6b3006","data-edit-interactive":true,"children":"Start","style":{},"domainName":"atgolanginterested.godaddysites.com","pageRoute":"\u002F","isActive":true,"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"default","category":"neutral","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'WrappedAbsLink',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"a","href":"\u002Fveranstaltungen","target":"","rel":"","data-page":"0333b5ab-1053-4006-9aeb-cf911b801eb2","data-edit-interactive":true,"children":"Veranstaltungen","style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"domainName":"atgolanginterested.godaddysites.com","pageRoute":"\u002F","isActive":false,"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"default","category":"neutral","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'WrappedAbsLink',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"a","href":"\u002Fkontaktiere-uns","target":"","rel":"","data-page":"78cb5b32-abbd-418a-8b4b-f815c99fe5e9","data-edit-interactive":true,"children":"Kontaktiere uns","style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"domainName":"atgolanginterested.godaddysites.com","pageRoute":"\u002F","isActive":false,"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"default","category":"neutral","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'WrappedAbsLink',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"a","href":"\u002Fbewertungen","target":"","rel":"","data-page":"893abbf5-4bd6-4855-93fd-2da7894adeb4","data-edit-interactive":true,"children":"Bewertungen","style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"domainName":"atgolanginterested.godaddysites.com","pageRoute":"\u002F","isActive":false,"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"default","category":"neutral","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1aff2d600074f107/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca/gpub/144d64930ce70c76/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/da109323ef2d31b7/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-7',componentName:'HeaderHamburger',props:props,context:context,contextKey:'context-bs-1'});
})({"toggleId":"n-4829-navId-mobile","uniqueId":"n-4829","style":{"color":"highContrast","marginLeft":"0",":hover":{"color":"highlight"},"@md":{"display":"none"}},"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"default","category":"neutral","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-8',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"atgolanginteredgame"},"fontPackLogoId":null,"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"default","category":"neutral","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/d711df0528b78786/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-9',componentName:'StickyNav',props:props,context:context,contextKey:'context-bs-1'});
})({"wrapperId":"header_navwrapper4832","uniqueId":"header_stickynav4831","hasAnimation":true,"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"alt","category":"neutral","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-10',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","style":{"maxWidth":"100%","lineHeight":"1.2","marginBottom":"0"},"children":"Willkommen bei atgolanginteredgame","scaledFontSizes":["xxlarge","xlarge","large"],"noWrapper":true,"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","section":"default","category":"primary","locale":"de-DE","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"2adba2a3-3735-4dbd-ab4f-5045edf14469","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"primary","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/370cd3ecadc41a10/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca/gpub/a6261ff689975965/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-11',componentName:'Video',props:props,context:context,contextKey:'context-bs-11'});
})({"videoUrl":"\u002F\u002Fyoutube.com\u002Fembed\u002F6eXyTL8-2_A?rel=0&showinfo=0","staticContent":{"missingLink":"Video-Internetadresse von YouTube oder Vimeo hinzufügen","iFrameTitle":"Klicke zum Abspielen des Videos"},"widgetId":"20887e05-d4c1-41e8-95b3-898d17acc76d","section":"default","category":"neutral","locale":"de-DE","renderMode":"PUBLISH"},{"widgetId":"20887e05-d4c1-41e8-95b3-898d17acc76d","widgetType":"VIDEO","widgetPreset":"video1","order":1,"section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/d9df70d794ec7a6a/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca/gpub/4ae8567276f3609d/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-4828').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"e2928277-a0e9-4ebd-ab7a-8e9b7ce827ca"}),_trfd.push({"pd":"2020-01-20T07:55:08.788Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
