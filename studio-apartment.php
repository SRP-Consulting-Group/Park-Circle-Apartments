<?php
    session_start();
    include 'groups-d12b45.php';
    function checkAccess($groups) {
        if(isset($_SESSION['user_groups'])) {
            return count(array_intersect($groups, $_SESSION['user_groups'])) > 0;
        }
        return FALSE;
    }
    if(isset($_SESSION['user_logged']) && 8 > 0) {
        $now = new DateTime();
        $fmt = "Y-m-d\TH:i:sP"; // ATOM
        $end = DateTime::createFromFormat($fmt, $_SESSION['user_logged']->format($fmt));
        $end->add(new DateInterval("PT8H"));
        $diff = $now->diff($end);
        if($diff->invert) {
            unset($_SESSION['session_id']);
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['user_name']);
            unset($_SESSION['user_surname']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_info']);
            unset($_SESSION['user_groups']);
            unset($_SESSION['user_logged']);
            unset($_SESSION['user_redirect']);
            unset($_SESSION['user_redirect_attempt']);
            $redirect = 'studio-apartment.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: user-login.php');
            exit;
        }
    }
?>
<?php if(!defined('PHP_VERSION_ID')||PHP_VERSION_ID<50600){print "Sparkle requires at least PHP 5.6, you have ".phpversion().". Contact your web host to fix this.<br>";exit();}if(! strstr(ini_get('disable_functions'), 'ini_set')) {ini_set('default_charset','UTF-8');}header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<title>Studio Apartment</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://parkcirclerentals.com/studio-apartment.php">
<meta name="robots" content="max-image-preview:large">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Studio Apartment">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Quicksand-Bold.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand 3";src:url('css/Quicksand-Bold.woff2') format('woff2'),url('css/Quicksand-Bold.woff') format('woff');font-weight:700}@font-face{font-display:block;font-family:"Londrina Solid";src:url('css/LondrinaSolid-Regular.woff2') format('woff2'),url('css/LondrinaSolid-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Tomorrow 5";src:url('css/Tomorrow-SemiBold.woff2') format('woff2'),url('css/Tomorrow-SemiBold.woff') format('woff');font-weight:600}@font-face{font-display:block;font-family:"Redacted Script 1";src:url('css/redacted-script-regular.woff2') format('woff2'),url('css/redacted-script-regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Quicksand 2";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}@font-face{font-display:block;font-family:"Quicksand 1";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Oxygen 2";src:url('css/Oxygen-Bold.woff2') format('woff2'),url('css/Oxygen-Bold.woff') format('woff');font-weight:700}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right;shape-outside:content-box}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#7b8078}.v55{display:block;vertical-align:top}.ps284{position:relative;margin-top:0}.s349{width:100%;min-width:1920px;height:386px;padding-bottom:0}.c81{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent;box-shadow:0 3px 4px #000}.z181{z-index:1;pointer-events:none}.ps285{display:inline-block;width:0;height:0}.ps286{position:relative;margin-top:10px}.s350{width:1920px;margin-left:auto;margin-right:auto;min-height:354px}.v56{display:inline-block;vertical-align:top}.ps287{position:relative;margin-left:56px;margin-top:0}.s351{min-width:1796px;width:1796px;min-height:354px}.ps288{position:relative;margin-left:0;margin-top:0}.s352{min-width:358px;width:358px;min-height:354px;height:354px}.z182{z-index:2;pointer-events:auto}.i44{position:absolute;left:2px;width:354px;height:354px;top:0;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.v57{display:inline-block;vertical-align:top;overflow:visible}.ps289{position:relative;margin-left:239px;margin-top:252px}.s353{min-width:994px;width:994px;height:88px}.z183{z-index:3;pointer-events:auto}.s354{min-width:994px;width:994px;min-height:88px;height:88px}.m10{padding:0px 0px 0px 0px}.ml10{outline:0}.s355{min-width:194px;width:194px;height:88px;box-shadow:0 2px 4px #000;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.mcv10{display:inline-block}.s356{min-width:194px;width:194px;min-height:88px}.c83{border:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff}.z184{pointer-events:none}.ps290{position:relative;margin-left:0;margin-top:23px}.s357{min-width:194px;width:194px;overflow:hidden;height:42px}.z185{pointer-events:auto}.p23{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f64{font-family:"Quicksand 3";font-size:32px;font-size:calc(32px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f64:hover{}.ps291{position:relative;margin-left:6px;margin-top:0}.v58{display:none;vertical-align:top}.s358{min-width:335px;width:335px;min-height:148px;height:148px}.z186{z-index:9999}.s359{min-width:299px;width:299px;height:66px}.s360{min-width:299px;width:299px;min-height:66px}.ps292{position:relative;margin-left:0;margin-top:12px}.s361{min-width:299px;width:299px;overflow:hidden;height:42px}.ps293{position:relative;margin-left:0;margin-top:16px}.s362{min-width:335px;width:335px;height:66px}.s363{min-width:335px;width:335px;min-height:66px}.s364{min-width:335px;width:335px;overflow:hidden;height:42px}.v59{display:inline-block;vertical-align:top;overflow:hidden;outline:0}.ps294{position:relative;margin-left:1590px;margin-top:-300px}.s365{min-width:206px;min-height:69px;box-sizing:border-box;width:206px;height:35px;padding-right:0}.c84{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;color:#fff;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z187{z-index:4;pointer-events:auto}.a10{display:inline-block;width:100%;height:100%}.f65{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:17px;padding-bottom:17px}.c84:hover{background-color:rgba(0,0,0,.5);background-clip:padding-box;border-color:#000}.c84:active{background-color:#808080;transition:initial}.ps295{position:relative;margin-top:45px}.s366{width:1920px;margin-left:auto;margin-right:auto;min-height:1282px}.ps296{position:relative;margin-left:54px;margin-top:6px}.s367{min-width:1813px;width:1813px;min-height:1266px;height:1266px}.z188{z-index:5;pointer-events:auto}.i45{position:absolute;left:63px;width:1688px;height:1266px;top:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s349{min-width:1200px;height:241px}.ps286{margin-top:6px}.s350{width:1200px;min-height:221px}.ps287{margin-left:35px}.s351{min-width:1123px;width:1123px;min-height:221px}.s352{min-width:224px;width:224px;min-height:221px;height:221px}.i44{width:221px;height:221px}.ps289{margin-left:149px;margin-top:158px}.s353{min-width:621px;width:621px;height:55px}.s354{min-width:621px;width:621px;min-height:55px;height:55px}.s355{min-width:121px;width:121px;height:55px}.s356{min-width:121px;width:121px;min-height:55px}.ps290{margin-top:14px}.s357{min-width:121px;width:121px;height:27px}.f64{font-size:20px;font-size:calc(20px * var(--f))}.ps291{margin-left:4px}.s358{min-width:210px;width:210px;min-height:92px;height:92px}.s359{min-width:187px;width:187px;height:41px}.s360{min-width:187px;width:187px;min-height:41px}.ps292{margin-top:7px}.s361{min-width:187px;width:187px;height:27px}.ps293{margin-top:10px}.s362{min-width:210px;width:210px;height:41px}.s363{min-width:210px;width:210px;min-height:41px}.s364{min-width:210px;width:210px;height:27px}.ps294{margin-left:0;margin-top:34px}.s365{min-width:129px;min-height:43px;width:129px;height:23px}.f65{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:10px;padding-bottom:10px}.ps295{margin-top:26px}.s366{width:1200px;min-height:807px}.ps296{margin-left:34px}.s367{min-width:1133px;width:1133px;min-height:791px;height:791px}.i45{left:39px;width:1055px;height:791px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s349{min-width:960px;height:193px}.ps286{margin-top:5px}.s350{width:960px;min-height:177px}.ps287{margin-left:28px}.s351{min-width:898px;width:898px;min-height:177px}.s352{min-width:179px;width:179px;min-height:177px;height:177px}.i44{left:1px;width:177px;height:177px}.ps289{margin-left:119px;margin-top:126px}.s353{min-width:497px;width:497px;height:44px}.s354{min-width:497px;width:497px;min-height:44px;height:44px}.s355{min-width:97px;width:97px;height:44px}.s356{min-width:97px;width:97px;min-height:44px}.ps290{margin-top:11px}.s357{min-width:97px;width:97px;height:22px}.f64{font-size:16px;font-size:calc(16px * var(--f))}.ps291{margin-left:3px}.s358{min-width:168px;width:168px;min-height:74px;height:74px}.s359{min-width:150px;width:150px;height:33px}.s360{min-width:150px;width:150px;min-height:33px}.ps292{margin-top:5px}.s361{min-width:150px;width:150px;height:22px}.ps293{margin-top:8px}.s362{min-width:168px;width:168px;height:33px}.s363{min-width:168px;width:168px;min-height:33px}.s364{min-width:168px;width:168px;height:22px}.ps294{margin-left:0;margin-top:27px}.s365{min-width:103px;min-height:34px;width:103px;height:18px}.f65{font-size:14px;font-size:calc(14px * var(--f));line-height:1.287;padding-top:8px;padding-bottom:8px}.ps295{margin-top:19px}.s366{width:960px;min-height:649px}.ps296{margin-left:27px}.s367{min-width:906px;width:906px;min-height:633px;height:633px}.i45{left:31px;width:844px;height:633px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s349{min-width:768px;height:154px}.ps286{margin-top:4px}.s350{width:768px;min-height:141px}.ps287{margin-left:22px}.s351{min-width:720px;width:720px;min-height:141px}.s352{min-width:143px;width:143px;min-height:141px;height:141px}.i44{left:1px;width:141px;height:141px}.ps289{margin-left:96px;margin-top:101px}.s353{min-width:393px;width:393px;height:35px}.s354{min-width:393px;width:393px;min-height:35px;height:35px}.s355{min-width:77px;width:77px;height:35px}.s356{min-width:77px;width:77px;min-height:35px}.ps290{margin-top:9px}.s357{min-width:77px;width:77px;height:17px}.f64{font-size:12px;font-size:calc(12px * var(--f))}.ps291{margin-left:2px}.s358{min-width:128px;width:128px;min-height:58px;height:58px}.s359{min-width:114px;width:114px;height:26px}.s360{min-width:114px;width:114px;min-height:26px}.ps292{margin-top:4px}.s361{min-width:113px;width:113px;height:17px}.ps293{margin-top:6px}.s362{min-width:128px;width:128px;height:26px}.s363{min-width:128px;width:128px;min-height:26px}.s364{min-width:127px;width:127px;height:17px}.ps294{margin-left:5px;margin-top:22px}.s365{min-width:83px;min-height:28px;width:83px;height:14px}.f65{font-size:11px;font-size:calc(11px * var(--f));line-height:1.274;padding-top:7px;padding-bottom:7px}.ps295{margin-top:15px}.s366{width:768px;min-height:522px}.ps296{margin-left:22px}.s367{min-width:725px;width:725px;min-height:506px;height:506px}.i45{left:25px;width:675px;height:506px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s349{min-width:480px;height:96px}.ps286{margin-top:2px}.s350{width:480px;min-height:88px}.ps287{margin-left:14px}.s351{min-width:450px;width:450px;min-height:88px}.s352{min-width:90px;width:90px;min-height:88px;height:88px}.i44{left:1px;width:88px;height:88px}.ps289{margin-left:59px;margin-top:64px}.s353{min-width:244px;width:244px;height:22px}.s354{min-width:244px;width:244px;min-height:22px;height:22px}.s355{min-width:48px;width:48px;height:22px}.s356{min-width:48px;width:48px;min-height:22px}.ps290{margin-top:5px}.s357{min-width:48px;width:48px;height:12px}.f64{font-size:8px;font-size:calc(8px * var(--f))}.ps291{margin-left:1px}.s358{min-width:85px;width:85px;min-height:36px;height:36px}.s359{min-width:76px;width:76px;height:16px}.s360{min-width:76px;width:76px;min-height:16px}.ps292{margin-top:2px}.s361{min-width:75px;width:75px;height:12px}.ps293{margin-top:4px}.s362{min-width:85px;width:85px;height:16px}.s363{min-width:85px;width:85px;min-height:16px}.s364{min-width:84px;width:84px;height:12px}.ps294{margin-left:5px;margin-top:14px}.s365{min-width:52px;min-height:17px;width:52px;height:9px}.f65{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:4px;padding-bottom:4px}.ps295{margin-top:7px}.s366{width:480px;min-height:332px}.ps296{margin-left:14px}.s367{min-width:453px;width:453px;min-height:316px;height:316px}.i45{left:16px;width:421px;height:316px}body{--d:4;--s:480}}@media (max-width:479px) {.s349{min-width:320px;height:64px}.ps286{margin-top:2px}.s350{width:320px;min-height:59px}.ps287{margin-left:9px}.s351{min-width:299px;width:299px;min-height:59px}.s352{min-width:60px;width:60px;min-height:59px;height:59px}.i44{left:1px;width:59px;height:59px}.ps289{margin-left:40px;margin-top:42px}.s353{min-width:164px;width:164px;height:15px}.s354{min-width:164px;width:164px;min-height:15px;height:15px}.s355{min-width:32px;width:32px;height:15px}.s356{min-width:32px;width:32px;min-height:15px}.ps290{margin-top:3px}.s357{min-width:32px;width:32px;height:8px}.f64{font-size:5px;font-size:calc(5px * var(--f));line-height:1.201}.ps291{margin-left:1px}.s358{min-width:54px;width:54px;min-height:24px;height:25px}.s359{min-width:48px;width:48px;height:11px}.s360{min-width:48px;width:48px;min-height:11px}.ps292{margin-top:1px}.s361{min-width:47px;width:47px;height:8px}.ps293{margin-top:2px}.s362{min-width:54px;width:54px;height:11px}.s363{min-width:54px;width:54px;min-height:11px}.s364{min-width:53px;width:53px;height:8px}.ps294{margin-left:1px;margin-top:9px}.s365{min-width:34px;min-height:11px;width:34px;height:5px}.f65{font-size:4px;font-size:calc(4px * var(--f));padding-top:3px;padding-bottom:3px}.ps295{margin-top:3px}.s366{width:320px;min-height:227px}.ps296{margin-left:9px}.s367{min-width:302px;width:302px;min-height:211px;height:211px}.i45{left:10px;width:281px;height:211px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-db99c3.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-b52991.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.f5bf09.css" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body;e.style.setProperty("--z",1);var t=window.innerWidth,n=getComputedStyle(e).getPropertyValue("--s");if(320==n){if(t<320)return;t=Math.min(479,t)}else if(480==n){if(t<480)return;t=Math.min(610,t)}else t=n;e.style.setProperty("--z",Math.trunc(t/n*1e3)/1e3)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div data-block-group="0" class="v55 ps284 s349 c81 z181">
<div class="ps285">
</div>
<div class="ps286 v55 s350">
<div class="v56 ps287 s351">
<div class="v56 ps288 s352 c82 z182">
<picture>
<source srcset="images/untitled-3-1--118.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/untitled-3-1--118.png 2x" media="(max-width:479px)">
<source srcset="images/untitled-3-1--176.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/untitled-3-1--176.png 2x" media="(max-width:767px)">
<source srcset="images/untitled-3-1--282.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/untitled-3-1--282.png 2x" media="(max-width:959px)">
<source srcset="images/untitled-3-1--177.webp 1x, images/untitled-3-1--354.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/untitled-3-1--177.png 1x, images/untitled-3-1--354.png 2x" media="(max-width:1199px)">
<source srcset="images/untitled-3-1--221.webp 1x, images/untitled-3-1--442.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/untitled-3-1--221.png 1x, images/untitled-3-1--442.png 2x" media="(max-width:1919px)">
<source srcset="images/untitled-3-1--354-1.webp 1x, images/untitled-3-1--708.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/untitled-3-1--354-1.png 1x, images/untitled-3-1--708.png 2x" media="(min-width:1920px)">
<img src="images/untitled-3-1--708.png" class="i44">
</picture>
</div>
<div class="v57 ps289 s353 z183">
<ul class="menu-dropdown v56 ps288 s354 m10" id="m1">
<li class="v56 ps288 s355">
<a href="./" class="ml10"><div class="menu-content mcv10"><div class="v56 ps288 s356 c83 z184"><div class="v56 ps290 s357 c82 z185"><p class="p23 f64">Home</p></div></div></div></a>
</li>
<li class="v56 ps291 s355">
<div class="menu-content mcv10">
<div class="v56 ps288 s356 c83 z184">
<div class="v56 ps290 s357 c82 z185">
<p class="p23 f64">Rentals</p>
</div>
</div>
</div>
<ul class="menu-dropdown v58 ps288 s358 m10 z186">
<li class="v56 ps288 s359">
<a href="loft-apartment.php" class="ml10"><div class="menu-content mcv10"><div class="v56 ps288 s360 c83 z184"><div class="v56 ps292 s361 c82 z185"><p class="p23 f64">Loft Apartment</p></div></div></div></a>
</li>
<li class="v56 ps293 s362">
<a href="#" class="ml10"><div class="menu-content mcv10"><div class="v56 ps288 s363 c83 z184"><div class="v56 ps292 s364 c82 z185"><p class="p23 f64">Studio Apartment</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v56 ps291 s355">
<a href="page-2.php" class="ml10"><div class="menu-content mcv10"><div class="v56 ps288 s356 c83 z184"><div class="v56 ps290 s357 c82 z185"><p class="p23 f64">About</p></div></div></div></a>
</li>
<li class="v56 ps291 s355">
<a href="maintiance.php" class="ml10"><div class="menu-content mcv10"><div class="v56 ps288 s356 c83 z184"><div class="v56 ps290 s357 c82 z185"><p class="p23 f64">Maintiance</p></div></div></div></a>
</li>
<li class="v56 ps291 s355">
<a href="contact.php" class="ml10"><div class="menu-content mcv10"><div class="v56 ps288 s356 c83 z184"><div class="v56 ps290 s357 c82 z185"><p class="p23 f64">Contact</p></div></div></div></a>
</li>
</ul>
</div>
<div class="g10 v59 ps294 s365 c84 z187">
<?php
    $show = TRUE;
    $groups = array('0');
    if($groups === '!') {
        $show = !isset($_SESSION['user_id']);
    }
    else if($groups !== '*') {
        $show = isset($_SESSION['user_id']) && checkAccess($groups);
    }
    if($show) {
?>
<a href="./logout-d12b45.php" class="a10 f65">LOGOUT</a>
<?php
    }
    else {
        $groupClass = 'g10';
        if($groupClass !== NULL) {
            echo "<style>.{$groupClass}{visibility:hidden}</style>";
        }
    }
?>

</div>
</div>
</div>
</div>
<div class="ps295 v55 s366 z184">
<div class="v56 ps296 s367 c82 z188">
<picture>
<source srcset="images/img_0728-562.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0728-562.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0728-842.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0728-842.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0728-1350.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0728-1350.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0728-844.webp 1x, images/img_0728-1688.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0728-844.jpg 1x, images/img_0728-1688.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0728-1055.webp 1x, images/img_0728-2110.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0728-1055.jpg 1x, images/img_0728-2110.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0728-1688-1.webp 1x, images/img_0728-3376.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0728-1688-1.jpg 1x, images/img_0728-3376.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0728-3376.jpg" class="i45">
</picture>
</div>
</div>
<div data-block-group="0" class="btf v53 ps278 s346 c79 z179">
<div class="ps279">
</div>
<div class="ps280 v53 s347">
<div class="v54 ps281 s17">
<div class="v54 ps282 s348 c2 z180">
<p class="p22 f63">Copyrights 2024</p>
<p class="p22 f63">SRP Consulting Group, LLC</p>
<p class="p22 f63">All Rights Reserved</p>
</div>
<div class="v54 ps283 s19 c2 z180">
<picture>
<source srcset="images/copy-of-untitled-2-58.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/copy-of-untitled-2-58.png 2x" media="(max-width:479px)">
<source srcset="images/copy-of-untitled-2-84.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/copy-of-untitled-2-84.png 2x" media="(max-width:767px)">
<source srcset="images/copy-of-untitled-2-138.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/copy-of-untitled-2-138.png 2x" media="(max-width:959px)">
<source srcset="images/copy-of-untitled-2-85.webp 1x, images/copy-of-untitled-2-170.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/copy-of-untitled-2-85.png 1x, images/copy-of-untitled-2-170.png 2x" media="(max-width:1199px)">
<source srcset="images/copy-of-untitled-2-106.webp 1x, images/copy-of-untitled-2-212.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/copy-of-untitled-2-106.png 1x, images/copy-of-untitled-2-212.png 2x" media="(max-width:1919px)">
<source srcset="images/copy-of-untitled-2-170-1.webp 1x, images/copy-of-untitled-2-340.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/copy-of-untitled-2-170-1.png 1x, images/copy-of-untitled-2-340.png 2x" media="(min-width:1920px)">
<img src="images/copy-of-untitled-2-340.png" loading="lazy" class="i43">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c80">
</div>
<script>var lwi=-1;function thresholdPassed(){var w=document.documentElement.clientWidth;var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();dpth="/";!function(){var e={},t={},n={};window.ld=function(a,r,o){var c=function(){"interactive"==document.readyState?(r&&r(),document.addEventListener("readystatechange",function(){"complete"==document.readyState&&o&&o()})):"complete"==document.readyState?(r&&r(),o&&o()):document.addEventListener("readystatechange",function(){"interactive"==document.readyState&&r&&r(),"complete"==document.readyState&&o&&o()})},d=(1<<a.length)-1,u=0,i=function(r){var o=a[r],i=function(){for(var t=0;t<a.length;t++){var r=(1<<t)-1;if((u&r)==r&&n[a[t]]){if(!e[a[t]]){var o=document.createElement("script");o.textContent=n[a[t]],document.body.appendChild(o),e[a[t]]=!0}if((u|=1<<t)==d)return c(),0}}return 1};if(null==t[o]){t[o]=[];var f=new XMLHttpRequest;f.open("GET",o,!0),f.onload=function(){n[o]=f.responseText,[].forEach.call(t[o],function(e){e()})},t[o].push(i),f.send()}else{if(e[o])return i();t[o].push(i)}return 1};if(a.length)for(var f=0;f<a.length&&i(f);f++);else c()}}();ld([],function(){!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var a=!1,o=document.body.parentNode;(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&"none"!=getComputedStyle(o).getPropertyValue("scroll-snap-type")&&(o.setAttribute("data-snap",o.style.scrollSnapType),o.style.scrollSnapType="none",a=!0);var n=0;if(e.hash.length>1){var r=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));r||(r=1);var i=e.hash.slice(1),s=document.getElementById(i);if(null===s&&null===(s=document.querySelector('[name="'+i+'"]')))return;var u=/chrome/i.test(navigator.userAgent);n=u?s.getBoundingClientRect().top*r+pageYOffset:(s.getBoundingClientRect().top+pageYOffset)*r}else if(a)for(var l=document.querySelectorAll("[data-block-group]"),c=0;c<l.length;c++)if("none"!=getComputedStyle(l[c]).getPropertyValue("scroll-snap-align")){s=l[c];break}if(a)window.smoothScroll(t,s,1);else if("scrollBehavior"in document.documentElement.style)scroll({top:n,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var d=pageYOffset,m=null;requestAnimationFrame(function e(t){m||(m=t);var a=(t-m)/400;scrollTo(0,d<n?(n-d)*a+d:d-(d-n)*a),a<1?requestAnimationFrame(e):scrollTo(0,n)})}else scrollTo(0,n);t.preventDefault()},!1)})}(),window.smoothScroll=function(e,t,a,o){e.stopImmediatePropagation();var n,r=pageYOffset;t?(("string"==typeof t||t instanceof String)&&(t=document.querySelector(t)),n=t.getBoundingClientRect().top):n=-r;var i=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));i||(i=1);var s=n*i+(/chrome/i.test(navigator.userAgent)?0:r*(i-1)),u=null;function l(){c(window.performance.now?window.performance.now():Date.now())}function c(e){null===u&&(u=e);var n=(e-u)/1e3,i=function(e,t,a){switch(o){case"linear":break;case"easeInQuad":e*=e;break;case"easeOutQuad":e=1-(1-e)*(1-e);break;case"easeInCubic":e*=e*e;break;case"easeOutCubic":e=1-Math.pow(1-e,3);break;case"easeInOutCubic":e=e<.5?4*e*e*e:1-Math.pow(-2*e+2,3)/2;break;case"easeInQuart":e*=e*e*e;break;case"easeOutQuart":e=1-Math.pow(1-e,4);break;case"easeInOutQuart":e=e<.5?8*e*e*e*e:1-Math.pow(-2*e+2,4)/2;break;case"easeInQuint":e*=e*e*e*e;break;case"easeOutQuint":e=1-Math.pow(1-e,5);break;case"easeInOutQuint":e=e<.5?16*e*e*e*e*e:1-Math.pow(-2*e+2,5)/2;break;case"easeInCirc":e=1-Math.sqrt(1-Math.pow(e,2));break;case"easeOutCirc":e=Math.sqrt(1-Math.pow(0,2));break;case"easeInOutCirc":e=e<.5?(1-Math.sqrt(1-Math.pow(2*e,2)))/2:(Math.sqrt(1-Math.pow(-2*e+2,2))+1)/2;break;case"easeInOutQuad":default:e=e<.5?2*e*e:1-Math.pow(-2*e+2,2)/2}e>1&&(e=1);return t+a*e}(n/a,r,s);if(window.scrollTo(0,i),n<a)"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120);else if(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1){if(t)for(var d=t;d!=document.body;){if(d.getAttribute("data-block-group")){d.scrollIntoView();break}d=d.parentNode}setTimeout(function(){var e=document.body.parentNode;e.style.scrollSnapType=e.getAttribute("data-snap"),e.removeAttribute("data-snap")},100)}}return"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120),!1};!function(){var e=null;if(location.hash){var t=location.hash.replace("#",""),n=function(){var o=document.getElementById(t);null===o&&(o=document.querySelector('[name="'+t+'"]')),o&&o.scrollIntoView(!0),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")?setTimeout(n,100):null!=e&&setTimeout(e,100)};n()}else null!=e&&e()}();});ld(["js/jquery.6ad8c3.js","js/jqueryui.6ad8c3.js","js/menu.6ad8c3.js","js/menu-dropdown-animations.6ad8c3.js","js/menu-dropdown.f5bf09.js"],function(){initMenu($('#m1')[0]);});</script>
</body>
</html>