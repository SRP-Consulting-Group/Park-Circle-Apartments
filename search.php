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
            $redirect = 'search.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: user-login.html');
            exit;
        }
    }
?>
<?php if(!defined('PHP_VERSION_ID')||PHP_VERSION_ID<50600){print "Sparkle requires at least PHP 5.6, you have ".phpversion().". Contact your web host to fix this.<br>";exit();}if(! strstr(ini_get('disable_functions'), 'ini_set')) {ini_set('default_charset','UTF-8');}header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<title>Site Search Results</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://parkcirclerentals.com/search.php">
<meta name="robots" content="max-image-preview:large">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Site Search Results">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Quicksand-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand 3";src:url('css/Quicksand-Bold.woff2') format('woff2'),url('css/Quicksand-Bold.woff') format('woff');font-weight:700}@font-face{font-display:block;font-family:"Tomorrow 3";src:url('css/Tomorrow-Regular.woff2') format('woff2'),url('css/Tomorrow-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Londrina Solid";src:url('css/LondrinaSolid-Regular.woff2') format('woff2'),url('css/LondrinaSolid-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Quicksand 1";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Baloo Da";src:url('css/BalooDa-Regular.woff2') format('woff2'),url('css/BalooDa-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Redacted Script 1";src:url('css/redacted-script-regular.woff2') format('woff2'),url('css/redacted-script-regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Comfortaa 1";src:url('css/Comfortaa-Regular.woff2') format('woff2'),url('css/Comfortaa-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Quicksand 2";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right;shape-outside:content-box}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#7b8078}.v20{display:block;vertical-align:top}.ps135{position:relative;margin-top:0}.s253{width:100%;min-width:1920px;height:386px;padding-bottom:0}.c45{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent;box-shadow:0 3px 4px #000}.z99{z-index:1;pointer-events:none}.ps136{display:inline-block;width:0;height:0}.ps137{position:relative;margin-top:32px}.s254{width:1920px;margin-left:auto;margin-right:auto;min-height:322px}.v21{display:inline-block;vertical-align:top}.ps138{position:relative;margin-left:62px;margin-top:0}.s255{min-width:1776px;width:1776px;min-height:322px}.ps139{position:relative;margin-left:0;margin-top:0}.s256{min-width:341px;width:341px;min-height:322px;height:322px}.z100{z-index:2;pointer-events:auto}.i17{position:absolute;left:10px;width:322px;height:322px;top:0;-webkit-filter:drop-shadow(0 4px 4px #000);-moz-filter:drop-shadow(0 4px 4px #000);filter:drop-shadow(0 4px 4px #000);will-change:filter;border:0}.v22{display:inline-block;vertical-align:top;overflow:visible}.ps140{position:relative;margin-left:-1px;margin-top:234px}.s257{min-width:842px;width:842px;height:88px}.z101{z-index:3;pointer-events:auto}.s258{min-width:842px;width:842px;min-height:88px;height:88px}.m4{padding:0px 0px 0px 0px}.ml4{outline:0}.s259{min-width:139px;width:139px;height:88px;box-shadow:0 0 2px 2px rgba(0,0,0,.5);-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px}.mcv4{display:inline-block}.s260{min-width:139px;width:139px;min-height:88px}.c47{border:0;-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px;background-color:#000}.z102{pointer-events:none}.ps141{position:relative;margin-left:0;margin-top:19px}.s261{min-width:138px;width:138px;overflow:hidden;height:50px}.z103{pointer-events:auto}.p10{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f34{font-family:"Quicksand 3";font-size:32px;font-size:calc(32px * var(--f));line-height:1.376;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f34:hover{}.ps142{position:relative;margin-left:12px;margin-top:0}.s262{min-width:166px;width:166px;height:88px;box-shadow:0 0 2px 2px rgba(0,0,0,.5);-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px}.s263{min-width:166px;width:166px;min-height:88px}.s264{min-width:165px;width:165px;overflow:hidden;height:50px}.v23{display:none;vertical-align:top}.s265{min-width:335px;width:335px;min-height:148px;height:148px}.z104{z-index:9999}.s266{min-width:299px;width:299px;height:66px}.s267{min-width:299px;width:299px;min-height:66px}.c48{border:0;-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px;background-color:#000}.ps143{position:relative;margin-left:0;margin-top:8px}.s268{min-width:299px;width:299px;overflow:hidden;height:50px}.ps144{position:relative;margin-left:0;margin-top:16px}.s269{min-width:335px;width:335px;height:66px}.s270{min-width:335px;width:335px;min-height:66px}.s271{min-width:335px;width:335px;overflow:hidden;height:50px}.s272{min-width:140px;width:140px;height:88px;box-shadow:0 0 2px 2px rgba(0,0,0,.5);-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px}.s273{min-width:140px;width:140px;min-height:88px}.s274{min-width:139px;width:139px;overflow:hidden;height:50px}.s275{min-width:178px;width:178px;height:88px;box-shadow:0 0 2px 2px rgba(0,0,0,.5);-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px}.s276{min-width:178px;width:178px;min-height:88px}.s277{min-width:177px;width:177px;overflow:hidden;height:50px}.s278{min-width:136px;width:136px;min-height:214px;height:214px}.s279{min-width:110px;width:110px;height:64px}.s280{min-width:110px;width:110px;min-height:64px}.ps145{position:relative;margin-left:0;margin-top:7px}.s281{min-width:110px;width:110px;overflow:hidden;height:50px}.ps146{position:relative;margin-left:0;margin-top:11px}.s282{min-width:136px;width:136px;height:64px}.s283{min-width:136px;width:136px;min-height:64px}.s284{min-width:136px;width:136px;overflow:hidden;height:50px}.s285{min-width:130px;width:130px;height:64px}.s286{min-width:130px;width:130px;min-height:64px}.s287{min-width:130px;width:130px;overflow:hidden;height:50px}.s288{min-width:171px;width:171px;height:88px;box-shadow:0 0 2px 2px rgba(0,0,0,.5);-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px}.s289{min-width:171px;width:171px;min-height:88px}.s290{min-width:170px;width:170px;overflow:hidden;height:50px}.s291{min-width:412px;width:412px;min-height:103px;height:104px}.s292{min-width:412px;width:412px;height:51px}.s293{min-width:412px;width:412px;min-height:51px}.c49{border:0;-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px;background-color:#000}.s294{min-width:412px;width:412px;overflow:hidden;height:50px}.ps147{position:relative;margin-left:0;margin-top:1px}.s295{min-width:312px;width:312px;height:51px}.s296{min-width:312px;width:312px;min-height:51px}.s297{min-width:312px;width:312px;overflow:hidden;height:50px}.ps148{position:relative;margin-left:193px;margin-top:18px}.s298{min-width:401px;width:401px;min-height:61px}.s299{min-width:290px;width:290px;height:61px}.z105{z-index:5;pointer-events:auto}.input6{border:1px solid transparent;background-clip:padding-box;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff;box-shadow:0 0 5px 1px rgba(0,0,0,.4);width:290px;height:61px;font-family:"Helvetica Neue", sans-serif;font-size:19px;line-height:1.212;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;text-shadow:none;text-indent:0;padding-bottom:0;text-align:left;padding:4px}.input6::placeholder{color:rgb(169,169,169)}.v24{display:inline-block;vertical-align:top;overflow:hidden;outline:0}.ps149{position:relative;margin-left:15px;margin-top:1px}.s300{min-width:96px;min-height:59px;box-sizing:border-box;width:96px;height:23px;padding-right:0}.c50{border:0;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.5);color:#fff;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z106{z-index:6;pointer-events:auto}.a6{display:inline-block;width:100%;height:100%}.f35{font-family:"Tomorrow 3";font-size:19px;font-size:calc(19px * var(--f));line-height:1.212;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:18px;padding-bottom:18px}.c50:hover{background-color:#82939e;background-clip:padding-box;border-color:#000;color:#000}.c50:active{background-color:#52646f;transition:initial;color:#fff}.ps150{position:relative;margin-top:62px}.s301{width:1920px;margin-left:auto;margin-right:auto;min-height:4807px}.ps151{position:relative;margin-left:69px;margin-top:0}.s302{min-width:1536px;width:1536px;overflow:hidden;height:106px}.z107{z-index:10;pointer-events:auto}.p11{padding-bottom:0;text-align:left;text-indent:0;padding-right:0}.f36{font-family:"Quicksand 1";font-size:44px;font-size:calc(44px * var(--f));line-height:1.751;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f36:hover{}.ps152{position:relative;margin-left:61px;margin-top:13px}.s303{min-width:1776px;width:1776px;min-height:4424px}.c51{border:1px solid rgba(0,0,0,.5);background-clip:padding-box;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff;box-shadow:0 0 4px 1px #000}.z108{z-index:11;pointer-events:auto}.ps153{position:relative;margin-left:0;margin-top:147px}.s304{min-width:1776px;width:1776px;min-height:260px}.ps154{position:relative;margin-left:7px;margin-top:0}.s305{min-width:1504px;width:1504px;overflow:hidden;height:110px}.z109{z-index:13;pointer-events:auto}.f37{font-family:"Quicksand 2";font-size:48px;font-size:calc(48px * var(--f));line-height:1.751;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f37:hover{}.ps155{position:relative;margin-left:13px;margin-top:1px}.s306{min-width:1461px;width:1461px;overflow:hidden;height:149px}.z110{z-index:14;pointer-events:auto}.f38{font-family:"Quicksand 1";font-size:28px;font-size:calc(28px * var(--f));line-height:1.751;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f38:hover{}.ps156{display:inline-block;position:relative;left:50%;-ms-transform:translate(-50%,0);-webkit-transform:translate(-50%,0);transform:translate(-50%,0)}.ps157{position:relative;margin-left:75px;margin-top:149px}.s307{min-width:1763px;width:1763px;min-height:107px}.s308{min-width:120px;min-height:107px;box-sizing:border-box;width:120px;height:33px;padding-right:0}.c52{border:0;-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px;background-color:#7b8078;box-shadow:0 2px 4px rgba(0,0,0,.4);color:#000;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z111{z-index:16;pointer-events:auto}.f39{font-family:"Londrina Solid";font-size:28px;font-size:calc(28px * var(--f));line-height:1.180;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:37px;padding-bottom:37px}.c52:hover{background-color:#82939e;background-clip:padding-box;border-color:#000}.c52:active{background-color:#52646f;transition:initial;color:#fff}.ps158{position:relative;margin-left:31px;margin-top:0}.s309{min-width:120px;min-height:107px;box-sizing:border-box;width:120px;height:55px;padding-right:0}.c53{border:0;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;background-color:#fff;box-shadow:0 0 4px 2px #000;color:#000;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z112{z-index:17;pointer-events:auto}.f40{font-family:"Quicksand 2";font-size:44px;font-size:calc(44px * var(--f));line-height:1.251;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:26px;padding-bottom:26px}.c53:hover{background-color:#82939e;background-clip:padding-box;border-color:#000}.c53:active{background-color:#52646f;transition:initial;color:#fff}.ps159{position:relative;margin-left:27px;margin-top:0}.z113{z-index:18;pointer-events:auto}.ps160{position:relative;margin-left:30px;margin-top:0}.z114{z-index:19;pointer-events:auto}.ps161{position:relative;margin-left:29px;margin-top:0}.z115{z-index:20;pointer-events:auto}.ps162{position:relative;margin-left:30px;margin-top:0}.z116{z-index:21;pointer-events:auto}.ps163{position:relative;margin-left:28px;margin-top:0}.z117{z-index:22;pointer-events:auto}.ps164{position:relative;margin-left:32px;margin-top:0}.z118{z-index:23;pointer-events:auto}.z119{z-index:24;pointer-events:auto}.ps165{position:relative;margin-left:29px;margin-top:0}.z120{z-index:25;pointer-events:auto}.ps166{position:relative;margin-left:29px;margin-top:0}.z121{z-index:26;pointer-events:auto}.ps167{position:relative;margin-left:28px;margin-top:0}.s310{min-width:120px;min-height:107px;box-sizing:border-box;width:120px;height:23px;padding-right:0}.c54{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#b8c8d2;color:#000;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z122{z-index:27;pointer-events:auto}.f41{font-family:"Helvetica Neue", sans-serif;font-size:19px;font-size:calc(19px * var(--f));line-height:1.212;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:42px;padding-bottom:42px}.c54:hover{background-color:#82939e;background-clip:padding-box;border-color:#000}.c54:active{background-color:#52646f;transition:initial;color:#fff}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s253{min-width:1200px;height:241px}.ps137{margin-top:20px}.s254{width:1200px;min-height:201px}.ps138{margin-left:39px}.s255{min-width:1110px;width:1110px;min-height:201px}.s256{min-width:213px;width:213px;min-height:201px;height:201px}.i17{left:6px;width:201px;height:201px}.ps140{margin-top:146px}.s257{min-width:530px;width:530px;height:55px}.s258{min-width:530px;width:530px;min-height:55px;height:55px}.s259{min-width:87px;width:87px;height:55px}.s260{min-width:87px;width:87px;min-height:55px}.ps141{margin-top:11px}.s261{min-width:86px;width:86px;height:32px}.f34{font-size:20px;font-size:calc(20px * var(--f));line-height:1.401}.ps142{margin-left:8px}.s262{min-width:104px;width:104px;height:55px}.s263{min-width:104px;width:104px;min-height:55px}.s264{min-width:103px;width:103px;height:32px}.s265{min-width:210px;width:210px;min-height:92px;height:92px}.s266{min-width:187px;width:187px;height:41px}.s267{min-width:187px;width:187px;min-height:41px}.ps143{margin-top:4px}.s268{min-width:187px;width:187px;height:32px}.ps144{margin-top:10px}.s269{min-width:210px;width:210px;height:41px}.s270{min-width:210px;width:210px;min-height:41px}.s271{min-width:210px;width:210px;height:32px}.s272{min-width:88px;width:88px;height:55px}.s273{min-width:88px;width:88px;min-height:55px}.s274{min-width:87px;width:87px;height:32px}.s275{min-width:112px;width:112px;height:55px}.s276{min-width:112px;width:112px;min-height:55px}.s277{min-width:111px;width:111px;height:32px}.s278{min-width:85px;width:85px;min-height:134px;height:134px}.s279{min-width:69px;width:69px;height:40px}.s280{min-width:69px;width:69px;min-height:40px}.ps145{margin-top:4px}.s281{min-width:68px;width:68px;height:32px}.ps146{margin-top:7px}.s282{min-width:85px;width:85px;height:40px}.s283{min-width:85px;width:85px;min-height:40px}.s284{min-width:84px;width:84px;height:32px}.s285{min-width:82px;width:82px;height:40px}.s286{min-width:82px;width:82px;min-height:40px}.s287{min-width:81px;width:81px;height:32px}.s288{min-width:107px;width:107px;height:55px}.s289{min-width:107px;width:107px;min-height:55px}.s290{min-width:106px;width:106px;height:32px}.s291{min-width:257px;width:257px;min-height:65px;height:65px}.s292{min-width:257px;width:257px;height:32px}.s293{min-width:257px;width:257px;min-height:32px}.s294{min-width:257px;width:257px;height:32px}.s295{min-width:195px;width:195px;height:32px}.s296{min-width:195px;width:195px;min-height:32px}.s297{min-width:195px;width:195px;height:32px}.ps148{margin-left:117px;margin-top:11px}.s298{min-width:251px;width:251px;min-height:39px}.s299{min-width:182px;width:182px;height:39px}.input6{width:182px;height:39px;font-size:12px;line-height:1.168}.ps149{margin-left:9px}.s300{min-width:60px;min-height:37px;width:60px;height:14px}.f35{font-size:12px;font-size:calc(12px * var(--f));line-height:1.168;padding-top:12px;padding-bottom:11px}.ps150{margin-top:39px}.s301{width:1200px;min-height:3007px}.ps151{margin-left:43px}.s302{min-width:960px;width:960px;height:66px}.f36{font-size:28px;font-size:calc(28px * var(--f))}.ps152{margin-left:38px;margin-top:8px}.s303{min-width:1110px;width:1110px;min-height:2765px}.ps153{margin-top:92px}.s304{min-width:1110px;width:1110px;min-height:162px}.ps154{margin-left:4px}.s305{min-width:940px;width:940px;height:69px}.f37{font-size:30px;font-size:calc(30px * var(--f));line-height:1.734}.ps155{margin-left:8px;margin-top:0}.s306{min-width:913px;width:913px;height:93px}.f38{font-size:18px;font-size:calc(18px * var(--f));line-height:1.723}.ps157{margin-left:47px;margin-top:93px}.s307{min-width:1102px;width:1102px;min-height:67px}.s308{min-width:75px;min-height:67px;width:75px;height:21px}.f39{font-size:18px;font-size:calc(18px * var(--f));line-height:1.168;padding-top:23px;padding-bottom:23px}.ps158{margin-left:19px}.s309{min-width:75px;min-height:67px;width:75px;height:35px}.f40{font-size:28px;font-size:calc(28px * var(--f));padding-top:16px;padding-bottom:16px}.ps159{margin-left:17px}.ps160{margin-left:19px}.ps161{margin-left:18px}.ps162{margin-left:19px}.ps163{margin-left:17px}.ps164{margin-left:20px}.ps165{margin-left:18px}.ps166{margin-left:18px}.ps167{margin-left:18px}.s310{min-width:75px;min-height:67px;width:75px;height:14px}.f41{font-size:12px;font-size:calc(12px * var(--f));line-height:1.168;padding-top:27px;padding-bottom:26px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s253{min-width:960px;height:193px}.ps137{margin-top:16px}.s254{width:960px;min-height:161px}.ps138{margin-left:31px}.s255{min-width:888px;width:888px;min-height:161px}.s256{min-width:170px;width:170px;min-height:161px;height:161px}.i17{left:5px;width:161px;height:161px}.ps140{margin-left:0;margin-top:117px}.s257{min-width:420px;width:420px;height:44px}.s258{min-width:420px;width:420px;min-height:44px;height:44px}.s259{min-width:69px;width:69px;height:44px}.s260{min-width:69px;width:69px;min-height:44px}.ps141{margin-top:9px}.s261{min-width:69px;width:69px;height:26px}.f34{font-size:16px;font-size:calc(16px * var(--f))}.ps142{margin-left:6px}.s262{min-width:83px;width:83px;height:44px}.s263{min-width:83px;width:83px;min-height:44px}.s264{min-width:83px;width:83px;height:26px}.s265{min-width:168px;width:168px;min-height:74px;height:74px}.s266{min-width:150px;width:150px;height:33px}.s267{min-width:150px;width:150px;min-height:33px}.ps143{margin-top:3px}.s268{min-width:150px;width:150px;height:26px}.ps144{margin-top:8px}.s269{min-width:168px;width:168px;height:33px}.s270{min-width:168px;width:168px;min-height:33px}.s271{min-width:168px;width:168px;height:26px}.s272{min-width:70px;width:70px;height:44px}.s273{min-width:70px;width:70px;min-height:44px}.s274{min-width:70px;width:70px;height:26px}.s275{min-width:89px;width:89px;height:44px}.s276{min-width:89px;width:89px;min-height:44px}.s277{min-width:89px;width:89px;height:26px}.s278{min-width:68px;width:68px;min-height:107px;height:107px}.s279{min-width:55px;width:55px;height:32px}.s280{min-width:55px;width:55px;min-height:32px}.ps145{margin-top:3px}.s281{min-width:55px;width:55px;height:26px}.ps146{margin-top:5px}.s282{min-width:68px;width:68px;height:32px}.s283{min-width:68px;width:68px;min-height:32px}.s284{min-width:68px;width:68px;height:26px}.s285{min-width:65px;width:65px;height:32px}.s286{min-width:65px;width:65px;min-height:32px}.s287{min-width:65px;width:65px;height:26px}.s288{min-width:85px;width:85px;height:44px}.s289{min-width:85px;width:85px;min-height:44px}.s290{min-width:85px;width:85px;height:26px}.s291{min-width:206px;width:206px;min-height:52px;height:53px}.s292{min-width:206px;width:206px;height:26px}.s293{min-width:206px;width:206px;min-height:26px}.s294{min-width:206px;width:206px;height:26px}.ps147{margin-top:0}.s295{min-width:156px;width:156px;height:26px}.s296{min-width:156px;width:156px;min-height:26px}.s297{min-width:156px;width:156px;height:26px}.ps148{margin-left:97px;margin-top:9px}.s298{min-width:201px;width:201px;min-height:32px}.s299{min-width:146px;width:146px;height:32px}.input6{width:146px;height:32px;font-size:9px;line-height:1.223}.ps149{margin-left:7px}.s300{min-width:48px;min-height:30px;width:48px;height:11px}.f35{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:10px;padding-bottom:9px}.ps150{margin-top:31px}.s301{width:960px;min-height:2407px}.ps151{margin-left:34px}.s302{min-width:768px;width:768px;height:53px}.f36{font-size:22px;font-size:calc(22px * var(--f));line-height:1.774}.ps152{margin-left:30px;margin-top:6px}.s303{min-width:888px;width:888px;min-height:2212px}.ps153{margin-top:74px}.s304{min-width:888px;width:888px;min-height:129px}.ps154{margin-left:3px}.s305{min-width:752px;width:752px;height:55px}.f37{font-size:24px;font-size:calc(24px * var(--f))}.ps155{margin-left:7px;margin-top:0}.s306{min-width:730px;width:730px;height:74px}.f38{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.ps157{margin-left:38px;margin-top:74px}.s307{min-width:881px;width:881px;min-height:54px}.s308{min-width:60px;min-height:54px;width:60px;height:16px}.f39{font-size:14px;font-size:calc(14px * var(--f));line-height:1.144;padding-top:19px;padding-bottom:19px}.ps158{margin-left:15px}.s309{min-width:60px;min-height:54px;width:60px;height:28px}.f40{font-size:22px;font-size:calc(22px * var(--f));line-height:1.274;padding-top:13px;padding-bottom:13px}.ps159{margin-left:13px}.ps160{margin-left:16px}.ps161{margin-left:14px}.ps162{margin-left:15px}.ps163{margin-left:14px}.ps164{margin-left:16px}.ps165{margin-left:14px}.ps166{margin-left:15px}.ps167{margin-left:14px}.s310{min-width:60px;min-height:54px;width:60px;height:11px}.f41{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223;padding-top:22px;padding-bottom:21px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s253{min-width:768px;height:154px}.ps137{margin-top:13px}.s254{width:768px;min-height:129px}.ps138{margin-left:25px}.s255{min-width:710px;width:710px;min-height:129px}.s256{min-width:136px;width:136px;min-height:129px;height:129px}.i17{left:4px;width:129px;height:129px}.ps140{margin-left:0;margin-top:93px}.s257{min-width:323px;width:323px;height:35px}.s258{min-width:323px;width:323px;min-height:35px;height:35px}.s259{min-width:53px;width:53px;height:35px}.s260{min-width:53px;width:53px;min-height:35px}.ps141{margin-top:8px}.s261{min-width:53px;width:53px;height:19px}.f34{font-size:12px;font-size:calc(12px * var(--f));line-height:1.334}.ps142{margin-left:5px}.s262{min-width:63px;width:63px;height:35px}.s263{min-width:63px;width:63px;min-height:35px}.s264{min-width:63px;width:63px;height:19px}.s265{min-width:128px;width:128px;min-height:58px;height:58px}.s266{min-width:114px;width:114px;height:26px}.s267{min-width:114px;width:114px;min-height:26px}.ps143{margin-top:3px}.s268{min-width:113px;width:113px;height:19px}.ps144{margin-top:6px}.s269{min-width:128px;width:128px;height:26px}.s270{min-width:128px;width:128px;min-height:26px}.s271{min-width:127px;width:127px;height:19px}.s272{min-width:54px;width:54px;height:35px}.s273{min-width:54px;width:54px;min-height:35px}.s274{min-width:54px;width:54px;height:19px}.s275{min-width:68px;width:68px;height:35px}.s276{min-width:68px;width:68px;min-height:35px}.s277{min-width:68px;width:68px;height:19px}.s278{min-width:52px;width:52px;min-height:86px;height:87px}.s279{min-width:42px;width:42px;height:26px}.s280{min-width:42px;width:42px;min-height:26px}.ps145{margin-top:3px}.s281{min-width:41px;width:41px;height:19px}.ps146{margin-top:4px}.s282{min-width:52px;width:52px;height:26px}.s283{min-width:52px;width:52px;min-height:26px}.s284{min-width:51px;width:51px;height:19px}.s285{min-width:50px;width:50px;height:26px}.s286{min-width:50px;width:50px;min-height:26px}.s287{min-width:49px;width:49px;height:19px}.s288{min-width:65px;width:65px;height:35px}.s289{min-width:65px;width:65px;min-height:35px}.s290{min-width:65px;width:65px;height:19px}.s291{min-width:156px;width:156px;min-height:40px;height:41px}.s292{min-width:156px;width:156px;height:20px}.s293{min-width:156px;width:156px;min-height:20px}.s294{min-width:156px;width:156px;height:19px}.ps147{margin-top:0}.s295{min-width:118px;width:118px;height:20px}.s296{min-width:118px;width:118px;min-height:20px}.s297{min-width:118px;width:118px;height:19px}.ps148{margin-left:90px;margin-top:6px}.s298{min-width:161px;width:161px;min-height:26px}.s299{min-width:117px;width:117px;height:26px}.input6{width:117px;height:26px;font-size:7px;line-height:1.144}.ps149{margin-left:6px}.s300{min-width:38px;min-height:24px;width:38px;height:8px}.f35{font-size:7px;font-size:calc(7px * var(--f));line-height:1.144;padding-top:8px;padding-bottom:8px}.ps150{margin-top:25px}.s301{width:768px;min-height:1927px}.ps151{margin-left:28px}.s302{min-width:614px;width:614px;height:42px}.f36{font-size:17px;font-size:calc(17px * var(--f));line-height:1.766}.ps152{margin-left:24px;margin-top:5px}.s303{min-width:710px;width:710px;min-height:1770px}.ps153{margin-top:59px}.s304{min-width:710px;width:710px;min-height:104px}.ps154{margin-left:3px}.s305{min-width:602px;width:602px;height:44px}.f37{font-size:19px;font-size:calc(19px * var(--f));line-height:1.790}.ps155{margin-left:5px;margin-top:0}.s306{min-width:584px;width:584px;height:60px}.f38{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps157{margin-left:30px;margin-top:59px}.s307{min-width:705px;width:705px;min-height:43px}.s308{min-width:48px;min-height:43px;width:48px;height:13px}.f39{font-size:11px;font-size:calc(11px * var(--f));line-height:1.183;padding-top:15px;padding-bottom:15px}.ps158{margin-left:12px}.s309{min-width:48px;min-height:43px;width:48px;height:21px}.f40{font-size:17px;font-size:calc(17px * var(--f));line-height:1.236;padding-top:11px;padding-bottom:11px}.ps159{margin-left:11px}.ps160{margin-left:12px}.ps161{margin-left:12px}.ps162{margin-left:12px}.ps163{margin-left:11px}.ps164{margin-left:13px}.ps165{margin-left:11px}.ps166{margin-left:12px}.ps167{margin-left:11px}.s310{min-width:48px;min-height:43px;width:48px;height:8px}.f41{font-size:7px;font-size:calc(7px * var(--f));line-height:1.144;padding-top:18px;padding-bottom:17px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s253{min-width:480px;height:96px}.ps137{margin-top:8px}.s254{width:480px;min-height:80px}.ps138{margin-left:16px}.s255{min-width:444px;width:444px;min-height:80px}.s256{min-width:85px;width:85px;min-height:80px;height:80px}.i17{left:3px;width:80px;height:80px}.ps140{margin-top:58px}.s257{min-width:213px;width:213px;height:22px}.s258{min-width:213px;width:213px;min-height:22px;height:22px}.s259{min-width:35px;width:35px;height:22px}.s260{min-width:35px;width:35px;min-height:22px}.ps141{margin-top:4px}.s261{min-width:34px;width:34px;height:14px}.f34{font-size:8px;font-size:calc(8px * var(--f))}.ps142{margin-left:3px}.s262{min-width:42px;width:42px;height:22px}.s263{min-width:42px;width:42px;min-height:22px}.s264{min-width:41px;width:41px;height:14px}.s265{min-width:85px;width:85px;min-height:36px;height:36px}.s266{min-width:76px;width:76px;height:16px}.s267{min-width:76px;width:76px;min-height:16px}.ps143{margin-top:1px}.s268{min-width:75px;width:75px;height:14px}.ps144{margin-top:4px}.s269{min-width:85px;width:85px;height:16px}.s270{min-width:85px;width:85px;min-height:16px}.s271{min-width:84px;width:84px;height:14px}.s272{min-width:36px;width:36px;height:22px}.s273{min-width:36px;width:36px;min-height:22px}.s274{min-width:35px;width:35px;height:14px}.s275{min-width:45px;width:45px;height:22px}.s276{min-width:45px;width:45px;min-height:22px}.s277{min-width:44px;width:44px;height:14px}.s278{min-width:35px;width:35px;min-height:53px;height:54px}.s279{min-width:28px;width:28px;height:16px}.s280{min-width:28px;width:28px;min-height:16px}.ps145{margin-top:1px}.s281{min-width:27px;width:27px;height:14px}.ps146{margin-top:2px}.s282{min-width:35px;width:35px;height:16px}.s283{min-width:35px;width:35px;min-height:16px}.s284{min-width:34px;width:34px;height:14px}.s285{min-width:33px;width:33px;height:16px}.s286{min-width:33px;width:33px;min-height:16px}.s287{min-width:32px;width:32px;height:14px}.s288{min-width:43px;width:43px;height:22px}.s289{min-width:43px;width:43px;min-height:22px}.s290{min-width:42px;width:42px;height:14px}.s291{min-width:103px;width:103px;min-height:28px;height:28px}.s292{min-width:103px;width:103px;height:14px}.s293{min-width:103px;width:103px;min-height:14px}.c49{-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px}.s294{min-width:103px;width:103px;height:14px}.ps147{margin-top:0}.s295{min-width:78px;width:78px;height:14px}.s296{min-width:78px;width:78px;min-height:14px}.s297{min-width:78px;width:78px;height:14px}.ps148{margin-left:46px;margin-top:4px}.s298{min-width:101px;width:101px;min-height:17px}.s299{min-width:74px;width:74px;height:17px}.input6{width:74px;height:17px;font-size:4px;line-height:1.251}.ps149{margin-left:3px}.s300{min-width:24px;min-height:15px;width:24px;height:5px}.f35{font-size:4px;font-size:calc(4px * var(--f));line-height:1.251;padding-top:5px;padding-bottom:5px}.ps150{margin-top:16px}.s301{width:480px;min-height:1207px}.ps151{margin-left:17px}.s302{min-width:384px;width:384px;height:26px}.f36{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps152{margin-left:15px;margin-top:3px}.s303{min-width:444px;width:444px;min-height:1106px}.ps153{margin-top:37px}.s304{min-width:444px;width:444px;min-height:64px}.ps154{margin-left:1px}.s305{min-width:376px;width:376px;height:28px}.f37{font-size:12px;font-size:calc(12px * var(--f))}.ps155{margin-left:3px;margin-top:-1px}.s306{min-width:365px;width:365px;height:37px}.f38{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.ps157{margin-left:19px;margin-top:37px}.s307{min-width:441px;width:441px;min-height:27px}.s308{min-width:30px;min-height:27px;width:30px;height:9px}.f39{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:9px;padding-bottom:9px}.ps158{margin-left:7px}.s309{min-width:30px;min-height:27px;width:30px;height:14px}.f40{font-size:11px;font-size:calc(11px * var(--f));line-height:1.274;padding-top:7px;padding-bottom:6px}.ps159{margin-left:7px}.ps160{margin-left:8px}.ps161{margin-left:7px}.ps162{margin-left:8px}.ps163{margin-left:6px}.ps164{margin-left:8px}.ps165{margin-left:7px}.ps166{margin-left:7px}.ps167{margin-left:8px}.s310{min-width:30px;min-height:27px;width:30px;height:5px}.f41{font-size:4px;font-size:calc(4px * var(--f));line-height:1.251;padding-top:11px;padding-bottom:11px}body{--d:4;--s:480}}@media (max-width:479px) {.s253{min-width:320px;height:64px}.ps137{margin-top:5px}.s254{width:320px;min-height:54px}.ps138{margin-left:10px}.s255{min-width:296px;width:296px;min-height:54px}.s256{min-width:57px;width:57px;min-height:54px;height:54px}.i17{left:2px;width:54px;height:54px}.ps140{margin-left:0;margin-top:39px}.s257{min-width:136px;width:136px;height:15px}.s258{min-width:136px;width:136px;min-height:15px;height:15px}.s259{min-width:22px;width:22px;height:15px}.s260{min-width:22px;width:22px;min-height:15px}.ps141{margin-top:3px}.s261{min-width:22px;width:22px;height:9px}.f34{font-size:5px;font-size:calc(5px * var(--f));line-height:1.401}.ps142{margin-left:2px}.s262{min-width:27px;width:27px;height:15px}.s263{min-width:27px;width:27px;min-height:15px}.s264{min-width:27px;width:27px;height:9px}.s265{min-width:54px;width:54px;min-height:24px;height:25px}.s266{min-width:48px;width:48px;height:11px}.s267{min-width:48px;width:48px;min-height:11px}.c48{-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}.ps143{margin-top:1px}.s268{min-width:47px;width:47px;height:9px}.ps144{margin-top:2px}.s269{min-width:54px;width:54px;height:11px}.s270{min-width:54px;width:54px;min-height:11px}.s271{min-width:53px;width:53px;height:9px}.s272{min-width:23px;width:23px;height:15px}.s273{min-width:23px;width:23px;min-height:15px}.s274{min-width:23px;width:23px;height:9px}.s275{min-width:29px;width:29px;height:15px}.s276{min-width:29px;width:29px;min-height:15px}.s277{min-width:29px;width:29px;height:9px}.s278{min-width:22px;width:22px;min-height:36px;height:37px}.s279{min-width:18px;width:18px;height:11px}.s280{min-width:18px;width:18px;min-height:11px}.ps145{margin-top:1px}.s281{min-width:18px;width:18px;height:9px}.ps146{margin-top:1px}.s282{min-width:22px;width:22px;height:11px}.s283{min-width:22px;width:22px;min-height:11px}.s284{min-width:22px;width:22px;height:9px}.s285{min-width:21px;width:21px;height:11px}.s286{min-width:21px;width:21px;min-height:11px}.s287{min-width:21px;width:21px;height:9px}.s288{min-width:27px;width:27px;height:15px}.s289{min-width:27px;width:27px;min-height:15px}.s290{min-width:27px;width:27px;height:9px}.s291{min-width:65px;width:65px;min-height:18px;height:18px}.s292{min-width:65px;width:65px;height:9px}.s293{min-width:65px;width:65px;min-height:9px}.c49{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.s294{min-width:65px;width:65px;height:9px}.ps147{margin-top:0}.s295{min-width:50px;width:50px;height:9px}.s296{min-width:50px;width:50px;min-height:9px}.s297{min-width:50px;width:50px;height:9px}.ps148{margin-left:36px;margin-top:3px}.s298{min-width:67px;width:67px;min-height:12px}.s299{min-width:50px;width:50px;height:12px}.input6{width:50px;height:12px;font-size:3px;line-height:1.334}.ps149{margin-left:1px}.s300{min-width:16px;min-height:10px;width:16px;height:4px}.c50{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.f35{font-size:3px;font-size:calc(3px * var(--f));line-height:1.334;padding-top:3px;padding-bottom:3px}.c50:hover{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.c50:active{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.ps150{margin-top:11px}.s301{width:320px;min-height:806px}.ps151{margin-left:11px}.s302{min-width:256px;width:256px;height:18px}.f36{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.ps152{margin-left:9px;margin-top:1px}.s303{min-width:296px;width:296px;min-height:737px}.ps153{margin-top:24px}.s304{min-width:296px;width:296px;min-height:44px}.ps154{margin-left:1px}.s305{min-width:251px;width:251px;height:18px}.f37{font-size:8px;font-size:calc(8px * var(--f))}.ps155{margin-left:3px}.s306{min-width:243px;width:243px;height:25px}.f38{font-size:4px;font-size:calc(4px * var(--f))}.ps157{margin-left:13px;margin-top:24px}.s307{min-width:293px;width:293px;min-height:18px}.s308{min-width:20px;min-height:18px;width:20px;height:5px}.f39{font-size:4px;font-size:calc(4px * var(--f));line-height:1.251;padding-top:7px;padding-bottom:6px}.ps158{margin-left:5px}.s309{min-width:20px;min-height:18px;width:20px;height:9px}.f40{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:5px;padding-bottom:4px}.ps159{margin-left:4px}.ps160{margin-left:5px}.ps161{margin-left:5px}.ps162{margin-left:5px}.ps163{margin-left:5px}.ps164{margin-left:5px}.ps165{margin-left:5px}.ps166{margin-left:5px}.ps167{margin-left:4px}.s310{min-width:20px;min-height:18px;width:20px;height:4px}.f41{font-size:3px;font-size:calc(3px * var(--f));line-height:1.334;padding-top:7px;padding-bottom:7px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-db99c3.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-b52991.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.4ee2a4.css" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body;e.style.setProperty("--z",1);var t=window.innerWidth,n=getComputedStyle(e).getPropertyValue("--s");if(320==n){if(t<320)return;t=Math.min(479,t)}else if(480==n){if(t<480)return;t=Math.min(610,t)}else t=n;e.style.setProperty("--z",Math.trunc(t/n*1e3)/1e3)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<?php
    $mb = extension_loaded('mbstring');

    function find($searchText, $searchFor) {
        global $mb;
        return $mb ? mb_stripos($searchText, $searchFor) : stripos($searchText, $searchFor);
    }

    function mb_split_str($str) {
        preg_match_all("/./u", $str, $arr);
        return $arr[0];
    }

    function s_similar_text($str1, $str2) {
        return 1. / (1. + levenshtein($str1, $str2) / 3.);
    }

    function simfind($searchText, $searchWord, &$score) {
        global $mb;
        $s = strtoupper($searchWord);
        foreach(preg_split("/[\\s]+/", $searchText) as $w) {
            $similarity = s_similar_text($s, strtoupper($w));
            if($similarity >= .6) {
                $score = $similarity;
                return array($mb ? mb_stripos($searchText, $w) : stripos($searchText, $w), $mb ? mb_strlen($w) : strlen($w));
            }
        }
        return array(FALSE, FALSE);
    }

    function scorecmp($a, $b) {
        if ($a['score'] == $b['score']) {
            return 0;
        }
        return ($a['score'] < $b['score']) ? 1 : -1;
    }

    function textlencmp($a, $b) {
        if (strlen($a['text']) == strlen($b['text'])) {
            return 0;
        }
        return (strlen($a['text']) < strlen($b['text'])) ? 1 : -1;
    }

    function snipcmp($a, $b) {
        if ($a['score'] == $b['score']) {
            return textlencmp($a, $b);
        }
        return ($a['score'] < $b['score']) ? 1 : -1;
    }

    function ordercmp($a, $b) {
        if ($a['order'] == $b['order']) {
            return 0;
        }
        return ($a['order'] > $b['order']) ? 1 : -1;
    }

    function mfind($searchText, $searchFor, $words, $w, &$wordsfound) {
        if(empty($searchFor))
            return FALSE;

        $snippet = array('text' => $searchText, 'w' => $w);
        if(($pos = find($searchText, $searchFor)) !== FALSE) {
            $wordsfound = array_merge($wordsfound, $words);
            $snippet['score'] = 20;
            $snippet['pos'] = $pos;
            $snippet['matchlen'] = strlen($searchFor);
            return $snippet;
        }
        foreach($words as $searchWord) {
            if(($pos = find($searchText, $searchWord)) !== FALSE) {
                $snippet['score'] = isset($wordscores[$searchWord]) ? 0.5 : 10;
                $wordsfound[] = $searchWord;
                $snippet['pos'] = $pos;
                $snippet['matchlen'] = strlen($searchWord);
                return $snippet;
            }
        }
        foreach($words as $searchWord) {
            $score = 1;
            $match = simfind($searchText, $searchWord, $score);
            if($match[0] !== FALSE) {
                $wordsfound[] = $searchWord;
                $snippet['score'] = $score * 5;
                $snippet['pos'] = $match[0];
                $snippet['matchlen'] = $match[1];
                return $snippet;
            }
        }
        return FALSE;
    }

    $page = 0;
    $start_page = 0;
    $end_page = -1;
    $searchResults = array();
    $found = array();
    if(isset($_GET['search'])) {
        $results_per_page = 10;
        $pages = 10;
        $page = (isset($_GET['page']) ? $_GET['page'] : 1);
        if($page < 1) {
            $page = 1;
        }
        $start_page = $page - $pages / 2;
        if($start_page < 1) {
            $start_page = 1;
        }

        $searchFor = $_GET['search'];
        $words = array_filter(preg_split("/[\\s]+/", $searchFor), function ($w) { return strlen($w) > 2; });
        $searchPages = array(array('title'=>'Home','link'=>'./','texts'=>array(array('t'=>'Located in Marienville, PA','w'=>'7'),array('t'=>'Park Circle Apartments','w'=>'7'),array('t'=>'Apartments are Newly Remolded, Including Entry Way, with Further Improvements Scheduled to Begin this Spring!','w'=>'1'),array('t'=>'Are you fed up with having so many monthly bills? …… ','w'=>'1'),array('t'=>'We offer a modern solution, including all utilities, and high speed internet for one low monthly price. ','w'=>'1'),array('t'=>'COST OF RENT INCLUDES ALL OF THE FOLLWING','w'=>'5'),array('t'=>'1 GB/s Internet','w'=>'7'),array('t'=>'GAS','w'=>'7'),array('t'=>'WATER','w'=>'7'),array('t'=>'ELECTRIC','w'=>'7'),array('t'=>'SEWAGE','w'=>'7'),array('t'=>'GARBAGE','w'=>'7'),array('t'=>'You will be able to access speeds up to 1 GB/s, which is fast, really fast…….','w'=>'1'),array('t'=>'This allows you to stream 4K movies, participate in video-conferencing, play video games, browse the internet, and more, all without any issue whatsoever. There is also no monthly cap on how much data you use, so feel free to use the internet, without any limitations tow worry about. ','w'=>'1'),array('t'=>'Studio Apartment','w'=>'5'),array('t'=>'Loft Apartment','w'=>'5'),array('t'=>'Convent and Simple Online Payments, Pay with Any Credit/Debit Card','w'=>'5'),array('t'=>'Tenants are provided a user account that is directly integrated into this website, allowing fast, hassle free communication. ','w'=>'5'),array('t'=>'You can request maintenance, view your lease agreements, submit a payment, view any news regarding improvement timeframe, report an emergency, and provides a direct contact number to my personal cell phone.','w'=>'5'),array('t'=>'','w'=>'1'),array('t'=>'LOCATION','w'=>'7'),array('t'=>'Park Circle Apartments','w'=>'1'),array('t'=>'15 Park Circle','w'=>'1'),array('t'=>'Marienville, PA 16239','w'=>'1'),array('t'=>'PHONE','w'=>'1'),array('t'=>'EMAIL','w'=>'1'),array('t'=>'INQUIRY','w'=>'1'))),array('title'=>'ABout','link'=>'about.html','texts'=>array(array('t'=>'About','w'=>'7'),array('t'=>'Park Circle Apartments is Managed by ','w'=>'1'),array('t'=>'SRP Consulting Group, LLC','w'=>'1'),array('t'=>'Website','w'=>'1'),array('t'=>'SRP Consulting Group, LLC is a business management company located in Marienville, PA.','w'=>'1'),array('t'=>'I primarily deal with strategic business management, technology, web & app development, UI+UX design, healthcare, psychopharmacology & drugs, flight simulation & HEMS, and musical production consulting business.','w'=>'1'),array('t'=>'Shea R. Patterson','w'=>'1'),array('t'=>' M.B.A. | B.S.B.A.','w'=>'1'),array('t'=>'Founder & CEO','w'=>'1'),array('t'=>'SRP Consulting Group, LLC','w'=>'1'))),array('texts'=>array(array('t'=>'Your Contact Form has been succesfully submited','w'=>'7'),array('t'=>' I monitor my communications almost 24/7 so expect a prompt respnose.','w'=>'6'),array('t'=>'Thanks for reaching out!','w'=>'1'),array('t'=>'','w'=>'1'),array('t'=>'Shea R. Patterson, MBA','w'=>'1'),array('t'=>'Park Circle Apartments','w'=>'1'),array('t'=>'SRP CONSULTING GROUP, LLC','w'=>'1')),'title'=>'Thank You Page','section'=>'Password Protected','link'=>'thank-you-page.php'),array('title'=>'Inquire About Rental','link'=>'inquire-about-rental.html','texts'=>array(array('t'=>'Inquire About a Rental Unit','w'=>'7'),array('t'=>'Family Size','w'=>'1'),array('t'=>'Children','w'=>'1'))),array('title'=>'General Contact','link'=>'general-contact.html','texts'=>array(array('t'=>'Contact','w'=>'7'))),array('title'=>'Tennant Sign Up','link'=>'tennant-sign-up.html','texts'=>array(array('t'=>'New Tennant Account Sign-Up','w'=>'7'))),array('texts'=>array(array('t'=>'Loft Apartment','w'=>'7'),array('t'=>'COST OF RENT PER MONTH:  $900','w'=>'7'),array('t'=>'• INCLUDES ALL AMENITIES AS SEEN IN THE PHOTOGRAPHS','w'=>'7'),array('t'=>'• INCLUDES ALL UTILITIES','w'=>'7'),array('t'=>'• INCLUDES HIGH SPEED INTERNET','w'=>'7')),'title'=>'Loft Apartment','section'=>'Rentals','link'=>'loft-apartment.html'));
        foreach($searchPages as $searchPage) {
            if(isset($searchPage['groups'])) {
                if(!isset($_SESSION['user_id']) || !checkAccess($access_control_groups[$searchPage['uuid']])) {
                    continue;
                }
            }
            $foundwords = array();
            if(($title = mfind($searchPage['title'], $searchFor, $words, 10, $foundwords)) !== FALSE) {
                $title['score'] *= (strlen($searchFor) / strlen($searchPage['title']));
            }
            $snippets = array();
            $order = 1;
            foreach($searchPage['texts'] as $text) {
                if(($s = mfind($text['t'], $searchFor, $words, $text['w'], $foundwords)) !== FALSE) {
                    $s['order'] = $order++;
                    $snippets[] = $s;
                }
            }
            if(count(array_diff(array_unique($words), array_unique($foundwords))) == 0) {
                if(count($snippets) == 0 && $title !== FALSE) {
                    foreach($searchPage['texts'] as $text) {
                        $s = array('text' => $text['t'], 'w' => $text['w']);
                        $s['order'] = $order++;
                        $s['score'] = 0;
                        $s['pos'] = 0;
                        $s['matchlen'] = 0;
                        $snippets[] = $s;
                    }
                }
                if(count($snippets)) {
                    $len = 300;
                    $snippet_count = intval(($len + 99) / 100);
                    uasort($snippets, 'snipcmp');
                    $original_snippets = $snippets;
                    $snippet_length = intval($len / $snippet_count);
                    $newsnippets = array();
                    $total = 0;
                    foreach($snippets as $s) {
                        $s2 = $s;
                        $s2['snip'] = $snippet_length;
                        $capped = min($snippet_length, strlen($s['text']));
                        if($total + $capped > $len) {
                            $s2['snip'] = $len - $total;
                            $newsnippets[] = $s2;
                            break;
                        }
                        $total += $capped;
                        $newsnippets[] = $s2;
                        if($total >= $len) {
                            break;
                        }
                    }
                    $snippets = $newsnippets;
                    if(count($snippets) < $snippet_count) {
                        $f = $snippet_count / count($snippets);
                        $total = 0;
                        $newsnippets = array();
                        foreach($snippets as $s) {
                            $s['snip'] = min(strlen($s['text']), $s['snip'] * $f);
                            $total += $s['snip'];
                            $newsnippets[] = $s;
                        }
                        $snippets = $newsnippets;
                        $newsnippets = array();
                        foreach($snippets as $s) {
                            if($s['snip'] < strlen($s['text'])) {
                                $inc = min($len - $total, strlen($s['text']) - $s['snip']);
                                $s['snip'] += $inc;
                                $total += $inc;
                            }
                            $newsnippets[] = $s;
                        }
                        $snippets = $newsnippets;
                    }
                    $score = 0;
                    foreach($original_snippets as $s) {
                        $l = strlen($s['text']);
                        if($l > $snippet_length)
                            $l = $snippet_length;
                        $score += $s['score'] * $s['w'] * ($l / $snippet_length);
                    }
                
                    uasort($snippets, 'ordercmp');
                    if($title !== FALSE) {
                        $score += 30 * $title['score'];
                    }
                    $found[] = array('link' => $searchPage['link'], 'title' => htmlentities($searchPage['title']), 'score' => $score, 'snippets' => $snippets);
                }
            }
        }
        $current_page = $page;
        $end_page = intval((count($found) + ($results_per_page - 1)) / $results_per_page);
        uasort($found, 'scorecmp');
        $searchResults = array_slice($found, ($page - 1) * $results_per_page, $results_per_page);
    }
?>

<div data-block-group="0" class="v20 ps135 s253 c45 z99">
<div class="ps136">
</div>
<div class="ps137 v20 s254">
<div class="v21 ps138 s255">
<div class="v21 ps139 s256 c46 z100">
<picture>
<source srcset="images/untitled-3-1--108.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/untitled-3-1--108.png 2x" media="(max-width:479px)">
<source srcset="images/untitled-3-1--160.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/untitled-3-1--160.png 2x" media="(max-width:767px)">
<source srcset="images/untitled-3-1--258.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/untitled-3-1--258.png 2x" media="(max-width:959px)">
<source srcset="images/untitled-3-1--161.webp 1x, images/untitled-3-1--322.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/untitled-3-1--161.png 1x, images/untitled-3-1--322.png 2x" media="(max-width:1199px)">
<source srcset="images/untitled-3-1--201.webp 1x, images/untitled-3-1--402.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/untitled-3-1--201.png 1x, images/untitled-3-1--402.png 2x" media="(max-width:1919px)">
<source srcset="images/untitled-3-1--322-1.webp 1x, images/untitled-3-1--644.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/untitled-3-1--322-1.png 1x, images/untitled-3-1--644.png 2x" media="(min-width:1920px)">
<img src="images/untitled-3-1--644.png" class="i17">
</picture>
</div>
<div class="v22 ps140 s257 z101">
<ul class="menu-dropdown v21 ps139 s258 m4" id="m1">
<li class="v21 ps139 s259">
<a href="./" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s260 c47 z102"><div class="v21 ps141 s261 c46 z103"><p class="p10 f34">Home</p></div></div></div></a>
</li>
<li class="v21 ps142 s262">
<div class="menu-content mcv4">
<div class="v21 ps139 s263 c47 z102">
<div class="v21 ps141 s264 c46 z103">
<p class="p10 f34">Rentals</p>
</div>
</div>
</div>
<ul class="menu-dropdown v23 ps139 s265 m4 z104">
<li class="v21 ps139 s266">
<a href="loft-apartment.html" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s267 c48 z102"><div class="v21 ps143 s268 c46 z103"><p class="p10 f34">Loft Apartment</p></div></div></div></a>
</li>
<li class="v21 ps144 s269">
<a href="studio-apartment.html" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s270 c48 z102"><div class="v21 ps143 s271 c46 z103"><p class="p10 f34">Studio Apartment</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v21 ps142 s272">
<a href="about.html" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s273 c47 z102"><div class="v21 ps141 s274 c46 z103"><p class="p10 f34">About</p></div></div></div></a>
</li>
<li class="v21 ps142 s275">
<div class="menu-content mcv4">
<div class="v21 ps139 s276 c47 z102">
<div class="v21 ps141 s277 c46 z103">
<p class="p10 f34">Tennat's</p>
</div>
</div>
</div>
<ul class="menu-dropdown v23 ps139 s278 m4 z104">
<li class="v21 ps139 s279">
<a href="user-login.html" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s280 c48 z102"><div class="v21 ps145 s281 c46 z103"><p class="p10 f34">Log-In</p></div></div></div></a>
</li>
<li class="v21 ps146 s282">
<a href="./logout-d12b45.php" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s283 c48 z102"><div class="v21 ps145 s284 c46 z103"><p class="p10 f34">Log Out</p></div></div></div></a>
</li>
<li class="v21 ps146 s285">
<a href="maintiance.php" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s286 c48 z102"><div class="v21 ps145 s287 c46 z103"><p class="p10 f34">Sign Up</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v21 ps142 s288">
<div class="menu-content mcv4">
<div class="v21 ps139 s289 c47 z102">
<div class="v21 ps141 s290 c46 z103">
<p class="p10 f34">Contact</p>
</div>
</div>
</div>
<ul class="menu-dropdown v23 ps139 s291 m4 z104">
<li class="v21 ps139 s292">
<a href="inquire-about-rental.html" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s293 c49 z102"><div class="v21 ps139 s294 c46 z103"><p class="p10 f34">Inquire About a Rental</p></div></div></div></a>
</li>
<li class="v21 ps147 s295">
<a href="#" class="ml4"><div class="menu-content mcv4"><div class="v21 ps139 s296 c49 z102"><div class="v21 ps139 s297 c46 z103"><p class="p10 f34">General Contact</p></div></div></div></a>
</li>
</ul>
</li>
</ul>
</div>
<form method="GET" action="search.php" class="v21 ps148 s298 z103">
<div class="v21 ps139 s298 z102">
<div class="v21 ps139 s299 c46 z105">
<input type="text" name="search" required class="input6">
</div>
<div class="un34 v24 ps149 s300 c50 z106">
<a onclick="var p=this;while(p.nodeName!='FORM')p=p.parentNode;if('requestSubmit'in p){p.requestSubmit()}else{p.submit()}return false;" class="a6 f35">Search</a>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="ps150 v20 s301 z102">
<div class="v21 ps151 s302 c46 z107">
<p class="p11 f36">Search results for &quot;<span class="f36"><?php if(isset($_GET['search'])) echo $_GET['search']; ?></span>&quot;</p>
</div>
<div class="v21 ps152 s303 c51 z108">
<?php
    function rev_string($string) {
        global $mb;
        $chars = $mb ? mb_split_str($string, 1, mb_internal_encoding()) : str_split($string, 1);
        return implode('', array_reverse($chars));
    }

    function word_trunc($string, $length) {
        global $mb;
        if(strlen($string) > $length)
        {
            $string = wordwrap($string, $length);
            $string = $mb? mb_substr($string, 0, mb_strpos($string, "\n")) : substr($string, 0, strpos($string, "\n"));
        }
        return $string;
    }

    function clip_string($string, $pos, $length, $total) {
        global $mb;
        if($length) {
            $m = $mb ? mb_substr($string, $pos, $length) : substr($string, $pos, $length);
            $before = $mb ? mb_substr($string, 0, $pos) : substr($string, 0, $pos);
            $after = $mb ? mb_substr($string, $pos + $length, mb_strlen($string) - ($pos + $length)) : substr($string, $pos + $length, strlen($string) - ($pos + $length));
            $before = rev_string($before);
            if($total < strlen($string)) {
                $half = intval(($total - $length) / 2);
            } else {
                $half = $total;
            }
            $hlPre = '<b>';
            $hlPost = '</b>';
            $out = htmlentities(rev_string(word_trunc($before, $half))) . $hlPre . htmlentities($m) . $hlPost . htmlentities(word_trunc($after, $half));
            return $out;
        } else {
            return htmlentities(word_trunc($string, $total));
        }
    }

    if(count($searchResults) == 0) {
        $result = '<div class="v21 ps153 s304 z102"><div class="v21 ps154 s305 c46 z109"><p class="p11 f37">{title}</p></div><div class="v21 ps155 s306 c46 z110"><p class="p11 f38">{text}</p></div></div>';
        $result = str_replace('{title}', htmlentities('No search result'), $result);
        $result = str_replace('{text}', '', $result);
        echo $result;
    }
    else {
        echo '';
        foreach($searchResults as $searchResult) {
            $result = '<div class="v21 ps153 s304 z102"><div class="v21 ps154 s305 c46 z109"><p class="p11 f37">{title}</p></div><div class="v21 ps155 s306 c46 z110"><p class="p11 f38">{text}</p></div></div>';
            $result = str_replace('{title}', '<a href="' . $searchResult['link'] . '">' . $searchResult['title'] . '</a>', $result);

            $text = "";
            foreach($searchResult['snippets'] as $s) {
                $pos = $s['pos'];
                $m = $s['matchlen'];
                $snippet = clip_string($s['text'], $pos, $m, $s['snip']);
                if(strlen($text))
                    $text .= " &hellip; ";
                $text .= " " . $snippet;
            }

            $result = str_replace('{text}', $text, $result);
            echo $result;
        }
   }
?>

</div>
<div class="v21 ps157 s307">
<div class="ps156">
<?php

    echo '<style>.pbdn{display:none}.pbc{border: 0;background-color:#7b8078;color:#fff;border-color:#7b8078}</style>';
    $control = '<div class="v24 ps139 s308 c52 z111 {btnclass} {lnkclass}"><a href="#" class="a6 f39">&lt;&lt;</a></div>';
    if($page > 1) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page - 1);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{btnclass}', '', $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps158 s309 c53 z112 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps159 s309 c53 z113 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps160 s309 c53 z114 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps161 s309 c53 z115 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps162 s309 c53 z116 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps163 s309 c53 z117 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps164 s309 c53 z118 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps162 s309 c53 z119 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps165 s309 c53 z120 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps166 s309 c53 z121 {btnclass} {lnkclass}"><a href="#" class="a6 f40">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        if($buttonPage == $page) {
            $control = str_replace('href="#"', '', $control);
            $control = str_replace('{lnkclass}', 'pbc', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
            $control = str_replace('{lnkclass}', '', $control);
        }
        $control = str_replace('{btnclass}', '', $control);
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{page_num}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v24 ps167 s310 c54 z122 {btnclass} {lnkclass}"><a href="#" class="a6 f41">&gt;&gt;</a></div>';
    if($page < $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page + 1);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{btnclass}', '', $control);
    }
    else {
        $control = str_replace('{lnkclass}', '', $control);
        $control = str_replace('{btnclass}', 'pbdn', $control);
    }
    echo $control;

?>

</div>
</div>
</div>
<div data-block-group="0" class="btf v18 ps129 s249 c43 z97">
<div class="ps130">
</div>
<div class="ps131 v18 s250">
<div class="v19 ps132 s251">
<div class="v19 ps133 s252 c2 z98">
<p class="p9 f33">Copyrights 2024</p>
<p class="p9 f33">SRP Consulting Group, LLC</p>
<p class="p9 f33">All Rights Reserved</p>
</div>
<div class="v19 ps134 s19 c2 z98">
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
<img src="images/copy-of-untitled-2-340.png" loading="lazy" class="i16">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c44">
</div>
<script>var lwi=-1;function thresholdPassed(){var w=document.documentElement.clientWidth;var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();dpth="/";!function(){var e={},t={},n={};window.ld=function(a,r,o){var c=function(){"interactive"==document.readyState?(r&&r(),document.addEventListener("readystatechange",function(){"complete"==document.readyState&&o&&o()})):"complete"==document.readyState?(r&&r(),o&&o()):document.addEventListener("readystatechange",function(){"interactive"==document.readyState&&r&&r(),"complete"==document.readyState&&o&&o()})},d=(1<<a.length)-1,u=0,i=function(r){var o=a[r],i=function(){for(var t=0;t<a.length;t++){var r=(1<<t)-1;if((u&r)==r&&n[a[t]]){if(!e[a[t]]){var o=document.createElement("script");o.textContent=n[a[t]],document.body.appendChild(o),e[a[t]]=!0}if((u|=1<<t)==d)return c(),0}}return 1};if(null==t[o]){t[o]=[];var f=new XMLHttpRequest;f.open("GET",o,!0),f.onload=function(){n[o]=f.responseText,[].forEach.call(t[o],function(e){e()})},t[o].push(i),f.send()}else{if(e[o])return i();t[o].push(i)}return 1};if(a.length)for(var f=0;f<a.length&&i(f);f++);else c()}}();ld([],function(){!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var a=!1,o=document.body.parentNode;(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&"none"!=getComputedStyle(o).getPropertyValue("scroll-snap-type")&&(o.setAttribute("data-snap",o.style.scrollSnapType),o.style.scrollSnapType="none",a=!0);var n=0;if(e.hash.length>1){var r=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));r||(r=1);var i=e.hash.slice(1),s=document.getElementById(i);if(null===s&&null===(s=document.querySelector('[name="'+i+'"]')))return;var u=/chrome/i.test(navigator.userAgent);n=u?s.getBoundingClientRect().top*r+pageYOffset:(s.getBoundingClientRect().top+pageYOffset)*r}else if(a)for(var l=document.querySelectorAll("[data-block-group]"),c=0;c<l.length;c++)if("none"!=getComputedStyle(l[c]).getPropertyValue("scroll-snap-align")){s=l[c];break}if(a)window.smoothScroll(t,s,1);else if("scrollBehavior"in document.documentElement.style)scroll({top:n,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var d=pageYOffset,m=null;requestAnimationFrame(function e(t){m||(m=t);var a=(t-m)/400;scrollTo(0,d<n?(n-d)*a+d:d-(d-n)*a),a<1?requestAnimationFrame(e):scrollTo(0,n)})}else scrollTo(0,n);t.preventDefault()},!1)})}(),window.smoothScroll=function(e,t,a,o){e.stopImmediatePropagation();var n,r=pageYOffset;t?(("string"==typeof t||t instanceof String)&&(t=document.querySelector(t)),n=t.getBoundingClientRect().top):n=-r;var i=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));i||(i=1);var s=n*i+(/chrome/i.test(navigator.userAgent)?0:r*(i-1)),u=null;function l(){c(window.performance.now?window.performance.now():Date.now())}function c(e){null===u&&(u=e);var n=(e-u)/1e3,i=function(e,t,a){switch(o){case"linear":break;case"easeInQuad":e*=e;break;case"easeOutQuad":e=1-(1-e)*(1-e);break;case"easeInCubic":e*=e*e;break;case"easeOutCubic":e=1-Math.pow(1-e,3);break;case"easeInOutCubic":e=e<.5?4*e*e*e:1-Math.pow(-2*e+2,3)/2;break;case"easeInQuart":e*=e*e*e;break;case"easeOutQuart":e=1-Math.pow(1-e,4);break;case"easeInOutQuart":e=e<.5?8*e*e*e*e:1-Math.pow(-2*e+2,4)/2;break;case"easeInQuint":e*=e*e*e*e;break;case"easeOutQuint":e=1-Math.pow(1-e,5);break;case"easeInOutQuint":e=e<.5?16*e*e*e*e*e:1-Math.pow(-2*e+2,5)/2;break;case"easeInCirc":e=1-Math.sqrt(1-Math.pow(e,2));break;case"easeOutCirc":e=Math.sqrt(1-Math.pow(0,2));break;case"easeInOutCirc":e=e<.5?(1-Math.sqrt(1-Math.pow(2*e,2)))/2:(Math.sqrt(1-Math.pow(-2*e+2,2))+1)/2;break;case"easeInOutQuad":default:e=e<.5?2*e*e:1-Math.pow(-2*e+2,2)/2}e>1&&(e=1);return t+a*e}(n/a,r,s);if(window.scrollTo(0,i),n<a)"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120);else if(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1){if(t)for(var d=t;d!=document.body;){if(d.getAttribute("data-block-group")){d.scrollIntoView();break}d=d.parentNode}setTimeout(function(){var e=document.body.parentNode;e.style.scrollSnapType=e.getAttribute("data-snap"),e.removeAttribute("data-snap")},100)}}return"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120),!1};!function(){var e=null;if(location.hash){var t=location.hash.replace("#",""),n=function(){var o=document.getElementById(t);null===o&&(o=document.querySelector('[name="'+t+'"]')),o&&o.scrollIntoView(!0),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")?setTimeout(n,100):null!=e&&setTimeout(e,100)};n()}else null!=e&&e()}();});ld(["js/jquery.6ad8c3.js","js/jqueryui.6ad8c3.js","js/menu.6ad8c3.js","js/menu-dropdown-animations.6ad8c3.js","js/menu-dropdown.4ee2a4.js"],function(){initMenu($('#m1')[0]);});</script>
</body>
</html>