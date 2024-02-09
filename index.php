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
            $redirect = 'index.php';
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
<title>Home</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://parkcirclerentals.com/">
<meta name="robots" content="max-image-preview:large">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Home">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/LondrinaSolid-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand 3";src:url('css/Quicksand-Bold.woff2') format('woff2'),url('css/Quicksand-Bold.woff') format('woff');font-weight:700}@font-face{font-display:block;font-family:"Londrina Solid";src:url('css/LondrinaSolid-Regular.woff2') format('woff2'),url('css/LondrinaSolid-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Tomorrow 5";src:url('css/Tomorrow-SemiBold.woff2') format('woff2'),url('css/Tomorrow-SemiBold.woff') format('woff');font-weight:600}@font-face{font-display:block;font-family:"Redacted Script 1";src:url('css/redacted-script-regular.woff2') format('woff2'),url('css/redacted-script-regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right;shape-outside:content-box}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#7b8078}.v3{display:block;vertical-align:top}.ps18{position:relative;margin-top:0}.s20{width:100%;min-width:1920px;height:386px;padding-bottom:0}.c7{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent;box-shadow:0 3px 4px #000}.z13{z-index:9;pointer-events:none}.ps19{display:inline-block;width:0;height:0}.ps20{position:relative;margin-top:10px}.s21{width:1920px;margin-left:auto;margin-right:auto;min-height:354px}.v4{display:inline-block;vertical-align:top}.ps21{position:relative;margin-left:56px;margin-top:0}.s22{min-width:1796px;width:1796px;min-height:354px}.ps22{position:relative;margin-left:0;margin-top:0}.s23{min-width:358px;width:358px;min-height:354px;height:354px}.z14{z-index:11;pointer-events:auto}.i4{position:absolute;left:2px;width:354px;height:354px;top:0;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.v5{display:inline-block;vertical-align:top;overflow:visible}.ps23{position:relative;margin-left:239px;margin-top:252px}.s24{min-width:994px;width:994px;height:88px}.z15{z-index:12;pointer-events:auto}.s25{min-width:994px;width:994px;min-height:88px;height:88px}.m1{padding:0px 0px 0px 0px}.ml1{outline:0}.s26{min-width:194px;width:194px;height:88px;box-shadow:0 2px 4px #000;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.mcv1{display:inline-block}.s27{min-width:194px;width:194px;min-height:88px}.c9{border:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff}.z16{pointer-events:none}.ps24{position:relative;margin-left:0;margin-top:23px}.s28{min-width:194px;width:194px;overflow:hidden;height:42px}.z17{pointer-events:auto}.p3{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f6{font-family:"Quicksand 3";font-size:32px;font-size:calc(32px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f6:hover{}.ps25{position:relative;margin-left:6px;margin-top:0}.v6{display:none;vertical-align:top}.s29{min-width:335px;width:335px;min-height:148px;height:148px}.z18{z-index:9999}.s30{min-width:299px;width:299px;height:66px}.s31{min-width:299px;width:299px;min-height:66px}.ps26{position:relative;margin-left:0;margin-top:12px}.s32{min-width:299px;width:299px;overflow:hidden;height:42px}.ps27{position:relative;margin-left:0;margin-top:16px}.s33{min-width:335px;width:335px;height:66px}.s34{min-width:335px;width:335px;min-height:66px}.s35{min-width:335px;width:335px;overflow:hidden;height:42px}.v7{display:inline-block;vertical-align:top;overflow:hidden;outline:0}.ps28{position:relative;margin-left:1590px;margin-top:-300px}.s36{min-width:206px;min-height:69px;box-sizing:border-box;width:206px;height:35px;padding-right:0}.c10{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;color:#fff;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z19{z-index:13;pointer-events:auto}.a1{display:inline-block;width:100%;height:100%}.f7{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:17px;padding-bottom:17px}.c10:hover{background-color:rgba(0,0,0,.5);background-clip:padding-box;border-color:#000}.c10:active{background-color:#808080;transition:initial}.c11{display:block;position:relative;pointer-events:none;width:max(1920px, 100%);overflow:hidden;margin-top:104px;min-height:1720px}.ps29{position:relative;margin-top:6px}.s37{width:1920px;margin-left:auto;margin-right:auto;height:1708px}.ps30{position:relative;margin-left:22px;margin-top:0}.s38{min-width:1869px;width:1869px;min-height:1258px;height:1258px}.z20{z-index:8;pointer-events:auto}.i5{position:absolute;left:0;width:1869px;height:1258px;top:0;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.ps31{position:relative;margin-left:21px;margin-top:39px}.s39{min-width:1899px;width:1899px;min-height:412px}.s40{min-width:1871px;width:1871px;min-height:412px;line-height:0}.s41{min-width:1869px;width:1869px;min-height:410px}.c12{border:1px solid #7b8078;-webkit-border-radius:15px;-moz-border-radius:15px;border-radius:15px;background-color:#000;box-shadow:0 0 4px 1px #fff}.z21{z-index:24}.ps32{position:relative;margin-left:49px;margin-top:-162px}.s42{min-width:765px;width:765px;overflow:hidden;height:99px}.z22{z-index:27;pointer-events:auto}.p4{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f8{font-family:"Londrina Solid";font-size:76px;font-size:calc(76px * var(--f));line-height:1.185;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:1px 2px 2px #000}.f8:hover{}.ps33{position:relative;margin-left:46px;margin-top:-355px}.s43{min-width:1853px;width:1853px;overflow:hidden;height:214px}.z23{z-index:26;pointer-events:auto}.f9{font-family:"Londrina Solid";font-size:153px;font-size:calc(153px * var(--f));line-height:1.184;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:1px 2px 2px #000}.f9:hover{}.ps34{position:relative;margin-top:52px}.s44{width:1920px;margin-left:auto;margin-right:auto;min-height:842px}.ps35{position:relative;margin-left:34px;margin-top:5px}.s45{min-width:1856px;width:1856px;min-height:832px}.z24{z-index:28}.s46{min-width:1856px;width:1856px;min-height:832px;line-height:0}.c13{border:0;-webkit-border-radius:17px;-moz-border-radius:17px;border-radius:17px;background-color:rgba(0,0,0,.5);box-shadow:0 0 4px 1px #fff}.z25{z-index:32}.ps36{position:relative;margin-left:33px;margin-top:39px}.s47{min-width:1781px;width:1781px;min-height:270px}.s48{min-width:1781px;width:1781px;min-height:270px;line-height:0}.s49{min-width:1781px;width:1781px;overflow:hidden;height:82px}.z26{z-index:33;pointer-events:auto}.f10{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.751;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f10:hover{}.ps37{position:relative;margin-left:3px;margin-top:-1px}.s50{min-width:1733px;width:1733px;overflow:hidden;height:189px}.z27{z-index:34;pointer-events:auto}.f11{font-family:"Quicksand 3";font-size:44px;font-size:calc(44px * var(--f));line-height:1.751;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f11:hover{}.ps38{position:relative;margin-left:38px;margin-top:0}.s51{min-width:1731px;width:1731px;min-height:502px}.s52{min-width:1731px;width:1731px;min-height:502px;line-height:0}.s53{min-width:1731px;width:1731px;overflow:hidden;height:502px}.z28{z-index:35;pointer-events:auto}.f12{font-family:"Quicksand 3";font-size:38px;font-size:calc(38px * var(--f));line-height:1.738;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f12:hover{}.ps39{margin-left:48px}.p5{padding-bottom:0;text-align:left;text-indent:-24px;padding-right:0}.ps40{position:relative;margin-left:534px;margin-top:-329px}.s54{min-width:1197px;width:1197px;overflow:hidden;height:158px}.z29{z-index:36;pointer-events:auto}.f13{font-family:"Londrina Solid";font-size:115px;font-size:calc(115px * var(--f));line-height:1.184;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:1px 2px 2px #000}.f13:hover{}.ps41{position:relative;margin-left:534px;margin-top:-158px}.s55{min-width:1080px;width:1080px;overflow:hidden;height:158px}.z30{z-index:37;pointer-events:auto}.ps42{position:relative;margin-left:504px;margin-top:-376px}.s56{min-width:1171px;width:1171px;min-height:326px}.z31{z-index:31}.c14{display:block;position:relative;pointer-events:none;width:max(1920px, 100%);overflow:hidden;margin-top:36px;min-height:606px}.s57{width:1920px;margin-left:auto;margin-right:auto;height:594px}.ps43{position:relative;margin-left:33px;margin-top:-1px}.s58{min-width:1860px;width:1860px;min-height:596px}.z32{z-index:29}.s59{min-width:1858px;width:1858px;min-height:594px}.z33{z-index:40}.ps44{position:relative;margin-left:33px;margin-top:72px}.s60{min-width:1771px;width:1771px;overflow:hidden;height:112px}.z34{z-index:41;pointer-events:auto}.ps45{position:relative;margin-left:33px;margin-top:51px}.s61{min-width:1771px;width:1771px;overflow:hidden;height:248px}.z35{z-index:42;pointer-events:auto}.ps46{position:relative;margin-top:103px}.s62{width:1920px;margin-left:auto;margin-right:auto;min-height:2704px}.ps47{position:relative;margin-left:70px;margin-top:2px}.s63{min-width:1797px;width:1797px;min-height:1043px}.s64{min-width:867px;width:867px;min-height:1043px}.c15{border:0;-webkit-border-radius:15px;-moz-border-radius:15px;border-radius:15px;background-color:#fff;box-shadow:0 2px 4px #000}.z36{z-index:10}.ps48{position:relative;margin-left:66px;margin-top:40px}.s65{min-width:736px;width:736px;min-height:560px;height:560px}.z37{z-index:23;pointer-events:auto}.i6{position:absolute;left:0;width:736px;height:552px;top:4px;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.ps49{position:relative;margin-left:197px;margin-top:40px}.s66{min-width:499px;width:499px;overflow:hidden;height:83px}.z38{z-index:30;pointer-events:auto}.f14{font-family:"Tomorrow 5";font-size:54px;font-size:calc(54px * var(--f));line-height:1.205;font-weight:600;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f14:hover{}.ps50{position:relative;margin-left:122px;margin-top:34px}.s67{min-width:650px;width:650px;overflow:hidden;height:208px}.z39{z-index:39;pointer-events:auto}.f15{font-family:"Redacted Script 1";font-size:25px;font-size:calc(25px * var(--f));line-height:1.601;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f15:hover{}.ps51{position:relative;margin-left:63px;margin-top:0}.s68{min-width:867px;width:867px;height:1043px}.z40{z-index:22}.ps52{position:relative;margin-left:67px;margin-top:23px}.s69{min-width:736px;width:736px;min-height:597px;height:597px}.z41{z-index:25;pointer-events:auto}.i7{position:absolute;left:0;width:736px;height:552px;top:22px;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.ps53{position:relative;margin-left:219px;margin-top:20px}.s70{min-width:430px;width:430px;overflow:hidden;height:83px}.z42{z-index:38;pointer-events:auto}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s20{min-width:1200px;height:241px}.ps20{margin-top:6px}.s21{width:1200px;min-height:221px}.ps21{margin-left:35px}.s22{min-width:1123px;width:1123px;min-height:221px}.s23{min-width:224px;width:224px;min-height:221px;height:221px}.i4{width:221px;height:221px}.ps23{margin-left:149px;margin-top:158px}.s24{min-width:621px;width:621px;height:55px}.s25{min-width:621px;width:621px;min-height:55px;height:55px}.s26{min-width:121px;width:121px;height:55px}.s27{min-width:121px;width:121px;min-height:55px}.ps24{margin-top:14px}.s28{min-width:121px;width:121px;height:27px}.f6{font-size:20px;font-size:calc(20px * var(--f))}.ps25{margin-left:4px}.s29{min-width:210px;width:210px;min-height:92px;height:92px}.s30{min-width:187px;width:187px;height:41px}.s31{min-width:187px;width:187px;min-height:41px}.ps26{margin-top:7px}.s32{min-width:187px;width:187px;height:27px}.ps27{margin-top:10px}.s33{min-width:210px;width:210px;height:41px}.s34{min-width:210px;width:210px;min-height:41px}.s35{min-width:210px;width:210px;height:27px}.ps28{margin-left:0;margin-top:34px}.s36{min-width:129px;min-height:43px;width:129px;height:23px}.f7{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:10px;padding-bottom:10px}.c11{width:max(1200px, 100%);margin-top:63px;min-height:1079px}.s37{width:1200px;height:1067px}.ps30{margin-left:14px}.s38{min-width:1168px;width:1168px;min-height:786px;height:786px}.i5{width:1168px;height:786px}.ps31{margin-left:13px;margin-top:24px}.s39{min-width:1187px;width:1187px;min-height:258px}.s40{min-width:1170px;width:1170px;min-height:258px}.s41{min-width:1168px;width:1168px;min-height:256px}.ps32{margin-left:31px;margin-top:-101px}.s42{min-width:478px;width:478px;height:62px}.f8{font-size:48px;font-size:calc(48px * var(--f));line-height:1.168}.ps33{margin-left:29px;margin-top:-222px}.s43{min-width:1158px;width:1158px;height:134px}.f9{font-size:96px;font-size:calc(96px * var(--f));line-height:1.188}.ps34{margin-top:29px}.s44{width:1200px;min-height:530px}.ps35{margin-left:21px}.s45{min-width:1160px;width:1160px;min-height:520px}.s46{min-width:1160px;width:1160px;min-height:520px}.ps36{margin-left:21px;margin-top:24px}.s47{min-width:1113px;width:1113px;min-height:169px}.s48{min-width:1113px;width:1113px;min-height:169px}.s49{min-width:1113px;width:1113px;height:51px}.f10{font-size:18px;font-size:calc(18px * var(--f));line-height:1.723}.ps37{margin-left:2px;margin-top:0}.s50{min-width:1083px;width:1083px;height:118px}.f11{font-size:28px;font-size:calc(28px * var(--f))}.ps38{margin-left:24px}.s51{min-width:1082px;width:1082px;min-height:314px}.s52{min-width:1082px;width:1082px;min-height:314px}.s53{min-width:1082px;width:1082px;height:314px}.f12{font-size:24px;font-size:calc(24px * var(--f));line-height:1.751}.ps39{margin-left:30px}.p5{text-indent:-15px}.ps40{margin-left:334px;margin-top:-206px}.s54{min-width:748px;width:748px;height:99px}.f13{font-size:72px;font-size:calc(72px * var(--f));line-height:1.182}.ps41{margin-left:334px;margin-top:-99px}.s55{min-width:675px;width:675px;height:99px}.ps42{margin-left:315px;margin-top:-235px}.s56{min-width:732px;width:732px;min-height:204px}.c14{width:max(1200px, 100%);margin-top:18px;min-height:383px}.s57{width:1200px;height:371px}.ps43{margin-left:20px}.s58{min-width:1163px;width:1163px;min-height:373px}.s59{min-width:1161px;width:1161px;min-height:371px}.ps44{margin-left:21px;margin-top:45px}.s60{min-width:1107px;width:1107px;height:70px}.ps45{margin-left:21px;margin-top:32px}.s61{min-width:1107px;width:1107px;height:155px}.ps46{margin-top:62px}.s62{width:1200px;min-height:1693px}.ps47{margin-left:44px}.s63{min-width:1123px;width:1123px;min-height:652px}.s64{min-width:542px;width:542px;min-height:652px}.ps48{margin-left:41px;margin-top:25px}.s65{min-width:460px;width:460px;min-height:350px;height:350px}.i6{width:460px;height:345px;top:2px}.ps49{margin-left:123px;margin-top:25px}.s66{min-width:312px;width:312px;height:52px}.f14{font-size:34px;font-size:calc(34px * var(--f));line-height:1.207}.ps50{margin-left:76px;margin-top:21px}.s67{min-width:406px;width:406px;height:130px}.f15{font-size:16px;font-size:calc(16px * var(--f));line-height:1.626}.ps51{margin-left:39px}.s68{min-width:542px;width:542px;height:652px}.ps52{margin-left:42px;margin-top:14px}.s69{min-width:460px;width:460px;min-height:373px;height:373px}.i7{width:460px;height:345px;top:14px}.ps53{margin-left:137px;margin-top:13px}.s70{min-width:269px;width:269px;height:52px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s20{min-width:960px;height:193px}.ps20{margin-top:5px}.s21{width:960px;min-height:177px}.ps21{margin-left:28px}.s22{min-width:898px;width:898px;min-height:177px}.s23{min-width:179px;width:179px;min-height:177px;height:177px}.i4{left:1px;width:177px;height:177px}.ps23{margin-left:119px;margin-top:126px}.s24{min-width:497px;width:497px;height:44px}.s25{min-width:497px;width:497px;min-height:44px;height:44px}.s26{min-width:97px;width:97px;height:44px}.s27{min-width:97px;width:97px;min-height:44px}.ps24{margin-top:11px}.s28{min-width:97px;width:97px;height:22px}.f6{font-size:16px;font-size:calc(16px * var(--f))}.ps25{margin-left:3px}.s29{min-width:168px;width:168px;min-height:74px;height:74px}.s30{min-width:150px;width:150px;height:33px}.s31{min-width:150px;width:150px;min-height:33px}.ps26{margin-top:5px}.s32{min-width:150px;width:150px;height:22px}.ps27{margin-top:8px}.s33{min-width:168px;width:168px;height:33px}.s34{min-width:168px;width:168px;min-height:33px}.s35{min-width:168px;width:168px;height:22px}.ps28{margin-left:0;margin-top:27px}.s36{min-width:103px;min-height:34px;width:103px;height:18px}.f7{font-size:14px;font-size:calc(14px * var(--f));line-height:1.287;padding-top:8px;padding-bottom:8px}.c11{width:max(960px, 100%);margin-top:49px;min-height:866px}.s37{width:960px;height:854px}.ps30{margin-left:11px}.s38{min-width:934px;width:934px;min-height:629px;height:629px}.i5{width:934px;height:629px}.ps31{margin-left:10px;margin-top:19px}.s39{min-width:950px;width:950px;min-height:207px}.s40{min-width:936px;width:936px;min-height:207px}.s41{min-width:934px;width:934px;min-height:205px}.ps32{margin-left:25px;margin-top:-81px}.s42{min-width:382px;width:382px;height:50px}.f8{font-size:38px;font-size:calc(38px * var(--f))}.ps33{margin-left:24px;margin-top:-178px}.s43{min-width:926px;width:926px;height:107px}.f9{font-size:76px;font-size:calc(76px * var(--f));line-height:1.185}.ps34{margin-top:21px}.s44{width:960px;min-height:426px}.ps35{margin-left:17px}.s45{min-width:928px;width:928px;min-height:416px}.s46{min-width:928px;width:928px;min-height:416px}.ps36{margin-left:17px;margin-top:19px}.s47{min-width:890px;width:890px;min-height:135px}.s48{min-width:890px;width:890px;min-height:135px}.s49{min-width:890px;width:890px;height:41px}.f10{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.ps37{margin-left:1px;margin-top:0}.s50{min-width:866px;width:866px;height:94px}.f11{font-size:22px;font-size:calc(22px * var(--f));line-height:1.774}.ps38{margin-left:19px}.s51{min-width:866px;width:866px;min-height:251px}.s52{min-width:866px;width:866px;min-height:251px}.s53{min-width:866px;width:866px;height:251px}.f12{font-size:19px;font-size:calc(19px * var(--f));line-height:1.790}.ps39{margin-left:24px}.p5{text-indent:-12px}.ps40{margin-left:267px;margin-top:-165px}.s54{min-width:598px;width:598px;height:79px}.f13{font-size:57px;font-size:calc(57px * var(--f));line-height:1.194}.ps41{margin-left:267px;margin-top:-79px}.s55{min-width:540px;width:540px;height:79px}.ps42{margin-left:252px;margin-top:-188px}.s56{min-width:586px;width:586px;min-height:163px}.c14{width:max(960px, 100%);margin-top:12px;min-height:309px}.s57{width:960px;height:297px}.ps43{margin-left:16px}.s58{min-width:931px;width:931px;min-height:299px}.s59{min-width:929px;width:929px;min-height:297px}.ps44{margin-left:17px;margin-top:36px}.s60{min-width:886px;width:886px;height:56px}.ps45{margin-left:17px;margin-top:25px}.s61{min-width:886px;width:886px;height:124px}.ps46{margin-top:48px}.s62{width:960px;min-height:1356px}.ps47{margin-left:35px}.s63{min-width:899px;width:899px;min-height:522px}.s64{min-width:434px;width:434px;min-height:522px}.ps48{margin-left:33px;margin-top:20px}.s65{min-width:368px;width:368px;min-height:280px;height:280px}.i6{width:368px;height:276px;top:2px}.ps49{margin-left:99px;margin-top:20px}.s66{min-width:250px;width:250px;height:42px}.f14{font-size:27px;font-size:calc(27px * var(--f));line-height:1.186}.ps50{margin-left:61px;margin-top:16px}.s67{min-width:325px;width:325px;height:104px}.f15{font-size:12px;font-size:calc(12px * var(--f));line-height:1.584}.ps51{margin-left:31px}.s68{min-width:434px;width:434px;height:522px}.ps52{margin-left:34px;margin-top:11px}.s69{min-width:368px;width:368px;min-height:298px;height:298px}.i7{width:368px;height:276px;top:11px}.ps53{margin-left:110px;margin-top:11px}.s70{min-width:215px;width:215px;height:42px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s20{min-width:768px;height:154px}.ps20{margin-top:4px}.s21{width:768px;min-height:141px}.ps21{margin-left:22px}.s22{min-width:720px;width:720px;min-height:141px}.s23{min-width:143px;width:143px;min-height:141px;height:141px}.i4{left:1px;width:141px;height:141px}.ps23{margin-left:96px;margin-top:101px}.s24{min-width:393px;width:393px;height:35px}.s25{min-width:393px;width:393px;min-height:35px;height:35px}.s26{min-width:77px;width:77px;height:35px}.s27{min-width:77px;width:77px;min-height:35px}.ps24{margin-top:9px}.s28{min-width:77px;width:77px;height:17px}.f6{font-size:12px;font-size:calc(12px * var(--f))}.ps25{margin-left:2px}.s29{min-width:128px;width:128px;min-height:58px;height:58px}.s30{min-width:114px;width:114px;height:26px}.s31{min-width:114px;width:114px;min-height:26px}.ps26{margin-top:4px}.s32{min-width:113px;width:113px;height:17px}.ps27{margin-top:6px}.s33{min-width:128px;width:128px;height:26px}.s34{min-width:128px;width:128px;min-height:26px}.s35{min-width:127px;width:127px;height:17px}.ps28{margin-left:5px;margin-top:22px}.s36{min-width:83px;min-height:28px;width:83px;height:14px}.f7{font-size:11px;font-size:calc(11px * var(--f));line-height:1.274;padding-top:7px;padding-bottom:7px}.c11{width:max(768px, 100%);margin-top:38px;min-height:695px}.s37{width:768px;height:683px}.ps30{margin-left:9px}.s38{min-width:748px;width:748px;min-height:503px;height:503px}.i5{width:748px;height:503px}.ps31{margin-left:8px;margin-top:15px}.s39{min-width:760px;width:760px;min-height:166px}.s40{min-width:750px;width:750px;min-height:166px}.s41{min-width:748px;width:748px;min-height:164px}.ps32{margin-left:20px;margin-top:-65px}.s42{min-width:306px;width:306px;height:40px}.f8{font-size:30px;font-size:calc(30px * var(--f));line-height:1.168}.ps33{margin-left:19px;margin-top:-142px}.s43{min-width:741px;width:741px;height:86px}.f9{font-size:61px;font-size:calc(61px * var(--f));line-height:1.198}.ps34{margin-top:15px}.s44{width:768px;min-height:343px}.ps35{margin-left:13px}.s45{min-width:742px;width:742px;min-height:333px}.s46{min-width:742px;width:742px;min-height:333px}.ps36{margin-left:14px;margin-top:15px}.s47{min-width:712px;width:712px;min-height:109px}.s48{min-width:712px;width:712px;min-height:109px}.s49{min-width:712px;width:712px;height:33px}.f10{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps37{margin-left:1px;margin-top:0}.s50{min-width:693px;width:693px;height:76px}.f11{font-size:17px;font-size:calc(17px * var(--f));line-height:1.766}.ps38{margin-left:16px;margin-top:-1px}.s51{min-width:693px;width:693px;min-height:201px}.s52{min-width:693px;width:693px;min-height:201px}.s53{min-width:692px;width:692px;height:201px}.f12{font-size:15px;font-size:calc(15px * var(--f));line-height:1.734}.ps39{margin-left:19px}.p5{text-indent:-9px}.ps40{margin-left:214px;margin-top:-131px}.s54{min-width:479px;width:479px;height:63px}.f13{font-size:46px;font-size:calc(46px * var(--f));line-height:1.175}.ps41{margin-left:214px;margin-top:-63px}.s55{min-width:432px;width:432px;height:63px}.ps42{margin-left:202px;margin-top:-151px}.s56{min-width:468px;width:468px;min-height:131px}.c14{width:max(768px, 100%);margin-top:7px;min-height:249px}.s57{width:768px;height:237px}.ps43{margin-left:12px}.s58{min-width:745px;width:745px;min-height:239px}.s59{min-width:743px;width:743px;min-height:237px}.ps44{margin-left:14px;margin-top:29px}.s60{min-width:708px;width:708px;height:45px}.ps45{margin-left:14px;margin-top:20px}.s61{min-width:708px;width:708px;height:99px}.ps46{margin-top:37px}.s62{width:768px;min-height:1087px}.ps47{margin-left:28px}.s63{min-width:719px;width:719px;min-height:417px}.s64{min-width:347px;width:347px;min-height:417px}.ps48{margin-left:26px;margin-top:16px}.s65{min-width:294px;width:294px;min-height:224px;height:224px}.i6{width:294px;height:221px;top:1px}.ps49{margin-left:79px;margin-top:16px}.s66{min-width:200px;width:200px;height:33px}.f14{font-size:21px;font-size:calc(21px * var(--f));line-height:1.191}.ps50{margin-left:49px;margin-top:14px}.s67{min-width:260px;width:260px;height:83px}.f15{font-size:10px;font-size:calc(10px * var(--f))}.ps51{margin-left:25px}.s68{min-width:347px;width:347px;height:417px}.ps52{margin-left:27px;margin-top:9px}.s69{min-width:294px;width:294px;min-height:239px;height:239px}.i7{width:294px;height:221px;top:9px}.ps53{margin-left:88px;margin-top:8px}.s70{min-width:172px;width:172px;height:33px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s20{min-width:480px;height:96px}.ps20{margin-top:2px}.s21{width:480px;min-height:88px}.ps21{margin-left:14px}.s22{min-width:450px;width:450px;min-height:88px}.s23{min-width:90px;width:90px;min-height:88px;height:88px}.i4{left:1px;width:88px;height:88px}.ps23{margin-left:59px;margin-top:64px}.s24{min-width:244px;width:244px;height:22px}.s25{min-width:244px;width:244px;min-height:22px;height:22px}.s26{min-width:48px;width:48px;height:22px}.s27{min-width:48px;width:48px;min-height:22px}.ps24{margin-top:5px}.s28{min-width:48px;width:48px;height:12px}.f6{font-size:8px;font-size:calc(8px * var(--f))}.ps25{margin-left:1px}.s29{min-width:85px;width:85px;min-height:36px;height:36px}.s30{min-width:76px;width:76px;height:16px}.s31{min-width:76px;width:76px;min-height:16px}.ps26{margin-top:2px}.s32{min-width:75px;width:75px;height:12px}.ps27{margin-top:4px}.s33{min-width:85px;width:85px;height:16px}.s34{min-width:85px;width:85px;min-height:16px}.s35{min-width:84px;width:84px;height:12px}.ps28{margin-left:5px;margin-top:14px}.s36{min-width:52px;min-height:17px;width:52px;height:9px}.f7{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:4px;padding-bottom:4px}.c11{width:max(480px, 100%);margin-top:22px;min-height:438px}.s37{width:480px;height:426px}.ps30{margin-left:6px}.s38{min-width:467px;width:467px;min-height:314px;height:314px}.i5{width:467px;height:314px}.ps31{margin-left:5px;margin-top:9px}.s39{min-width:475px;width:475px;min-height:104px}.s40{min-width:469px;width:469px;min-height:104px}.s41{min-width:467px;width:467px;min-height:102px}.ps32{margin-left:13px;margin-top:-40px}.s42{min-width:191px;width:191px;height:25px}.f8{font-size:19px;font-size:calc(19px * var(--f));line-height:1.212}.ps33{margin-left:12px;margin-top:-89px}.s43{min-width:463px;width:463px;height:54px}.f9{font-size:38px;font-size:calc(38px * var(--f));line-height:1.185}.ps34{margin-top:6px}.s44{width:480px;min-height:218px}.ps35{margin-left:8px}.s45{min-width:464px;width:464px;min-height:208px}.s46{min-width:464px;width:464px;min-height:208px}.ps36{margin-left:9px;margin-top:9px}.s47{min-width:445px;width:445px;min-height:68px}.s48{min-width:445px;width:445px;min-height:68px}.s49{min-width:445px;width:445px;height:20px}.f10{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.ps37{margin-left:1px;margin-top:1px}.s50{min-width:433px;width:433px;height:47px}.f11{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps38{margin-left:10px}.s51{min-width:433px;width:433px;min-height:126px}.s52{min-width:433px;width:433px;min-height:126px}.s53{min-width:433px;width:433px;height:126px}.f12{font-size:9px;font-size:calc(9px * var(--f));line-height:1.779}.ps39{margin-left:12px}.p5{text-indent:-6px}.ps40{margin-left:134px;margin-top:-83px}.s54{min-width:299px;width:299px;height:40px}.f13{font-size:28px;font-size:calc(28px * var(--f));line-height:1.180}.ps41{margin-left:134px;margin-top:-40px}.s55{min-width:270px;width:270px;height:40px}.ps42{margin-left:126px;margin-top:-94px}.s56{min-width:293px;width:293px;min-height:82px}.c14{width:max(480px, 100%);margin-top:0;min-height:160px}.s57{width:480px;height:148px}.ps43{margin-left:7px}.s58{min-width:466px;width:466px;min-height:150px}.s59{min-width:464px;width:464px;min-height:148px}.ps44{margin-left:9px;margin-top:18px}.s60{min-width:443px;width:443px;height:28px}.ps45{margin-left:9px;margin-top:13px}.s61{min-width:443px;width:443px;height:62px}.ps46{margin-top:21px}.s62{width:480px;min-height:682px}.ps47{margin-left:18px}.s63{min-width:449px;width:449px;min-height:261px}.s64{min-width:217px;width:217px;min-height:261px}.ps48{margin-left:16px;margin-top:10px}.s65{min-width:184px;width:184px;min-height:140px;height:140px}.i6{width:184px;height:138px;top:1px}.ps49{margin-left:49px;margin-top:10px}.s66{min-width:125px;width:125px;height:21px}.f14{font-size:13px;font-size:calc(13px * var(--f));line-height:1.232}.ps50{margin-left:30px;margin-top:8px}.s67{min-width:162px;width:162px;height:52px}.f15{font-size:6px;font-size:calc(6px * var(--f));line-height:1.501}.ps51{margin-left:15px}.s68{min-width:217px;width:217px;height:261px}.ps52{margin-left:17px;margin-top:5px}.s69{min-width:184px;width:184px;min-height:149px;height:149px}.i7{width:184px;height:138px;top:5px}.ps53{margin-left:55px;margin-top:6px}.s70{min-width:108px;width:108px;height:21px}body{--d:4;--s:480}}@media (max-width:479px) {.s20{min-width:320px;height:64px}.ps20{margin-top:2px}.s21{width:320px;min-height:59px}.ps21{margin-left:9px}.s22{min-width:299px;width:299px;min-height:59px}.s23{min-width:60px;width:60px;min-height:59px;height:59px}.i4{left:1px;width:59px;height:59px}.ps23{margin-left:40px;margin-top:42px}.s24{min-width:164px;width:164px;height:15px}.s25{min-width:164px;width:164px;min-height:15px;height:15px}.s26{min-width:32px;width:32px;height:15px}.s27{min-width:32px;width:32px;min-height:15px}.ps24{margin-top:3px}.s28{min-width:32px;width:32px;height:8px}.f6{font-size:5px;font-size:calc(5px * var(--f));line-height:1.201}.ps25{margin-left:1px}.s29{min-width:54px;width:54px;min-height:24px;height:25px}.s30{min-width:48px;width:48px;height:11px}.s31{min-width:48px;width:48px;min-height:11px}.ps26{margin-top:1px}.s32{min-width:47px;width:47px;height:8px}.ps27{margin-top:2px}.s33{min-width:54px;width:54px;height:11px}.s34{min-width:54px;width:54px;min-height:11px}.s35{min-width:53px;width:53px;height:8px}.ps28{margin-left:1px;margin-top:9px}.s36{min-width:34px;min-height:11px;width:34px;height:5px}.f7{font-size:4px;font-size:calc(4px * var(--f));padding-top:3px;padding-bottom:3px}.c11{width:max(320px, 100%);margin-top:13px;min-height:296px}.s37{width:320px;height:284px}.ps30{margin-left:4px}.s38{min-width:311px;width:311px;min-height:210px;height:210px}.i5{width:311px;height:210px}.ps31{margin-left:3px;margin-top:5px}.s39{min-width:317px;width:317px;min-height:70px}.s40{min-width:313px;width:313px;min-height:70px}.s41{min-width:311px;width:311px;min-height:68px}.ps32{margin-left:9px;margin-top:-27px}.s42{min-width:127px;width:127px;height:17px}.f8{font-size:12px;font-size:calc(12px * var(--f));line-height:1.168}.ps33{margin-left:8px;margin-top:-60px}.s43{min-width:309px;width:309px;height:36px}.f9{font-size:25px;font-size:calc(25px * var(--f));line-height:1.201}.ps34{margin-top:0}.s44{width:320px;min-height:149px}.ps35{margin-left:6px}.s45{min-width:309px;width:309px;min-height:139px}.s46{min-width:309px;width:309px;min-height:139px}.ps36{margin-left:5px;margin-top:6px}.s47{min-width:297px;width:297px;min-height:45px}.s48{min-width:297px;width:297px;min-height:45px}.s49{min-width:297px;width:297px;height:14px}.f10{font-size:4px;font-size:calc(4px * var(--f))}.ps37{margin-left:1px;margin-top:0}.s50{min-width:289px;width:289px;height:31px}.f11{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.ps38{margin-left:6px}.s51{min-width:289px;width:289px;min-height:84px}.s52{min-width:289px;width:289px;min-height:84px}.s53{min-width:289px;width:289px;height:84px}.f12{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.ps39{margin-left:8px}.p5{text-indent:-4px}.ps40{margin-left:89px;margin-top:-55px}.s54{min-width:199px;width:199px;height:26px}.f13{font-size:19px;font-size:calc(19px * var(--f));line-height:1.212}.ps41{margin-left:89px;margin-top:-26px}.s55{min-width:180px;width:180px;height:26px}.ps42{margin-left:84px;margin-top:-63px}.s56{min-width:195px;width:195px;min-height:54px}.c14{width:max(320px, 100%);margin-top:-4px;min-height:111px}.s57{width:320px;height:99px}.ps43{margin-left:5px}.s58{min-width:312px;width:312px;min-height:101px}.s59{min-width:310px;width:310px;min-height:99px}.ps44{margin-left:5px;margin-top:12px}.s60{min-width:295px;width:295px;height:19px}.ps45{margin-left:5px;margin-top:8px}.s61{min-width:295px;width:295px;height:41px}.ps46{margin-top:11px}.s62{width:320px;min-height:457px}.ps47{margin-left:12px}.s63{min-width:300px;width:300px;min-height:174px}.s64{min-width:145px;width:145px;min-height:174px}.ps48{margin-left:11px;margin-top:7px}.s65{min-width:123px;width:123px;min-height:93px;height:93px}.i6{width:123px;height:92px;top:1px}.ps49{margin-left:33px;margin-top:7px}.s66{min-width:83px;width:83px;height:14px}.f14{font-size:9px;font-size:calc(9px * var(--f));line-height:1.223}.ps50{margin-left:20px;margin-top:5px}.s67{min-width:108px;width:108px;height:35px}.f15{font-size:4px;font-size:calc(4px * var(--f));line-height:1.501}.ps51{margin-left:10px}.s68{min-width:145px;width:145px;height:174px}.ps52{margin-left:11px;margin-top:4px}.s69{min-width:123px;width:123px;min-height:99px;height:99px}.i7{width:123px;height:92px;top:4px}.ps53{margin-left:36px;margin-top:4px}.s70{min-width:72px;width:72px;height:14px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-db99c3.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-b52991.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.f5bf09.css" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body;e.style.setProperty("--z",1);var t=window.innerWidth,n=getComputedStyle(e).getPropertyValue("--s");if(320==n){if(t<320)return;t=Math.min(479,t)}else if(480==n){if(t<480)return;t=Math.min(610,t)}else t=n;e.style.setProperty("--z",Math.trunc(t/n*1e3)/1e3)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div data-block-group="0" class="v3 ps18 s20 c7 z13">
<div class="ps19">
</div>
<div class="ps20 v3 s21">
<div class="v4 ps21 s22">
<div class="v4 ps22 s23 c8 z14">
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
<img src="images/untitled-3-1--708.png" class="i4">
</picture>
</div>
<div class="v5 ps23 s24 z15">
<ul class="menu-dropdown v4 ps22 s25 m1" id="m1">
<li class="v4 ps22 s26">
<a href="#" class="ml1"><div class="menu-content mcv1"><div class="v4 ps22 s27 c9 z16"><div class="v4 ps24 s28 c8 z17"><p class="p3 f6">Home</p></div></div></div></a>
</li>
<li class="v4 ps25 s26">
<div class="menu-content mcv1">
<div class="v4 ps22 s27 c9 z16">
<div class="v4 ps24 s28 c8 z17">
<p class="p3 f6">Rentals</p>
</div>
</div>
</div>
<ul class="menu-dropdown v6 ps22 s29 m1 z18">
<li class="v4 ps22 s30">
<a href="loft-apartment.php" class="ml1"><div class="menu-content mcv1"><div class="v4 ps22 s31 c9 z16"><div class="v4 ps26 s32 c8 z17"><p class="p3 f6">Loft Apartment</p></div></div></div></a>
</li>
<li class="v4 ps27 s33">
<a href="studio-apartment.php" class="ml1"><div class="menu-content mcv1"><div class="v4 ps22 s34 c9 z16"><div class="v4 ps26 s35 c8 z17"><p class="p3 f6">Studio Apartment</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v4 ps25 s26">
<a href="page-2.php" class="ml1"><div class="menu-content mcv1"><div class="v4 ps22 s27 c9 z16"><div class="v4 ps24 s28 c8 z17"><p class="p3 f6">About</p></div></div></div></a>
</li>
<li class="v4 ps25 s26">
<a href="maintiance.php" class="ml1"><div class="menu-content mcv1"><div class="v4 ps22 s27 c9 z16"><div class="v4 ps24 s28 c8 z17"><p class="p3 f6">Maintiance</p></div></div></div></a>
</li>
<li class="v4 ps25 s26">
<a href="contact.php" class="ml1"><div class="menu-content mcv1"><div class="v4 ps22 s27 c9 z16"><div class="v4 ps24 s28 c8 z17"><p class="p3 f6">Contact</p></div></div></div></a>
</li>
</ul>
</div>
<div class="g1 v7 ps28 s36 c10 z19">
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
<a href="./logout-d12b45.php" class="a1 f7">LOGOUT</a>
<?php
    }
    else {
        $groupClass = 'g1';
        if($groupClass !== NULL) {
            echo "<style>.{$groupClass}{visibility:hidden}</style>";
        }
    }
?>

</div>
</div>
</div>
</div>
<div class="c11">
<div class="ps29 v3 s37 z16">
<div class="v4 ps30 s38 c8 z20">
<picture>
<source srcset="images/img_0691-622.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0691-622.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0691-934.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0691-934.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0691-1496.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0691-1496.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0691-934-1.webp 1x, images/img_0691-1868.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0691-934-1.jpg 1x, images/img_0691-1868.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0691-1168.webp 1x, images/img_0691-2336.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0691-1168.jpg 1x, images/img_0691-2336.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0691-1869.webp 1x, images/img_0691-3738.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0691-1869.jpg 1x, images/img_0691-3738.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0691-3738.jpg" class="i5">
</picture>
</div>
<div class="v4 ps31 s39">
<div class="v4 ps22 s40">
<div class="v4 ps22 s41 c12 z21"></div>
<div class="v4 ps32 s42 c8 z22">
<h1 class="p4 f8">Located in Marienville, PA</h1>
</div>
</div>
<div class="v4 ps33 s43 c8 z23">
<h1 class="p4 f9">Park Circle Apartments</h1>
</div>
</div>
</div>
</div>
<div class="ps34 v3 s44 z16">
<div class="v4 ps35 s45 z24">
<div class="v4 ps22 s45">
<div class="v4 ps22 s46">
<div class="v4 ps22 s45 c13 z25">
<div class="v4 ps36 s47">
<div class="v4 ps22 s48">
<div class="v4 ps22 s49 c8 z26">
<p class="p4 f10">Apartments are Newly Remolded, Including Entry Way, with Further Improvements Scheduled to Begin this Spring!</p>
</div>
<div class="v4 ps37 s50 c8 z27">
<p class="p4 f11">Are you fed up with having so many monthly bills? &hellip;&hellip;&nbsp;</p>
<p class="p4 f11">We offer a modern solution, including all utilities, for one low monthly price.&nbsp;</p>
</div>
</div>
</div>
<div class="v4 ps38 s51">
<div class="v4 ps22 s52">
<div class="v4 ps22 s53 c8 z28">
<p class="p4 f12">This means you pay a flat fee for rent every month, which includes</p>
<ul class="ps39">
<li data-marker="&bull;" class="p5 f12"><span class="f12">Gas</span></li>
<li data-marker="&bull;" class="p5 f12"><span class="f12">Electric</span></li>
<li data-marker="&bull;" class="p5 f12"><span class="f12">Water</span></li>
<li data-marker="&bull;" class="p5 f12"><span class="f12">Sewage</span></li>
<li data-marker="&bull;" class="p5 f12"><span class="f12">Garbage</span></li>
<li data-marker="&bull;" class="p5 f12"><span class="f12">Internet</span></li>
</ul>
</div>
<div class="v4 ps40 s54 c8 z29">
<h1 class="p4 f13">1 GB/s Internet Included</h1>
</div>
<div class="v4 ps41 s55 c8 z30">
<p class="p4 f10">We provide 1 GB/s Internet Speed, Thats equal to 1,000 Mb/s&nbsp;</p>
<p class="p4 f10">Your Welcome&hellip;..</p>
</div>
</div>
</div>
</div>
<div class="v4 ps42 s56 c13 z31"></div>
</div>
</div>
</div>
</div>
<div class="c14">
<div class="ps29 v3 s57 z16">
<div class="v4 ps43 s58 z32">
<div class="v4 ps22 s59 c12 z33">
<div class="v4 ps44 s60 c8 z34">
<p class="p4 f10">High-Speed Internet is included with each apartment. Today&rsquo;s fast paced world requires fast and dependable internet connections to fully enjoy.&nbsp;</p>
</div>
<div class="v4 ps45 s61 c8 z35">
<p class="p4 f10">This is why we provide, standard, the fastest internet connection available in the area.&nbsp;</p>
<p class="p4 f10">You will be able to access speeds up to 1 GB/s, which is fast, really fast&hellip;&hellip;.</p>
<p class="p4 f10">This allows you to stream 4K movies, participate in video-conferencing, play video games, browse the internet, and more, all without any issue whatsoever. There is also no monthly cap on how much data you use, so feel free to use the internet, without any limitations tow worry about.&nbsp;</p>
</div>
</div>
</div>
</div>
</div>
<div class="ps46 v3 s62 z16">
<div class="v4 ps47 s63">
<div class="v4 ps22 s64 c15 z36">
<div class="v4 ps48 s65 c8 z37">
<picture>
<source srcset="images/img_0728-246.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0728-246.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0728-368.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0728-368.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0728-588.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0728-588.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0728-368-1.webp 1x, images/img_0728-736.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0728-368-1.jpg 1x, images/img_0728-736.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0728-460.webp 1x, images/img_0728-920.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0728-460.jpg 1x, images/img_0728-920.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0728-736-1.webp 1x, images/img_0728-1472.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0728-736-1.jpg 1x, images/img_0728-1472.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0728-1472.jpg" class="i6">
</picture>
</div>
<div class="v4 ps49 s66 c8 z38">
<h3 class="p4 f14">Studio Apartment</h3>
</div>
<div class="v4 ps50 s67 c8 z39">
<p class="p4 f15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt lorem enim, eget fringilla turpis congue vitae. Phasellus aliquam nisi ut lorem vestibulum eleifend. Nulla ut arcu non nisi congue venenatis vitae ut ante. Nam iaculis sem nec ultrices dapibus.</p>
</div>
</div>
<div class="v4 ps51 s68 c15 z40">
<div class="v4 ps52 s69 c8 z41">
<picture>
<source srcset="images/img_0697-246.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0697-246.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0697-368.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0697-368.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0697-588.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0697-588.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0697-368-1.webp 1x, images/img_0697-736.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0697-368-1.jpg 1x, images/img_0697-736.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0697-460.webp 1x, images/img_0697-920.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0697-460.jpg 1x, images/img_0697-920.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0697-736-1.webp 1x, images/img_0697-1472.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0697-736-1.jpg 1x, images/img_0697-1472.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0697-1472.jpg" class="i7">
</picture>
</div>
<div class="v4 ps53 s70 c8 z42">
<h3 class="p4 f14">Loft Apartment</h3>
</div>
</div>
</div>
<div class="v1 ps1 s1">
<div class="v1 ps2 s2 c1 z1">
<div class="v1 ps3 s3 c2 z2">
<h3 class="p1 f1">These are second story apartments, so if you are unable to climb stairs, or are at risk of falls, these apartments won&rsquo;t be able to accommodate your specific needs.&nbsp;</h3>
</div>
<div class="v1 ps4 s4">
<div class="v1 ps2 s5 c2 z3">
<picture>
<source srcset="images/img_0731-316.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0731-316.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0731-474.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0731-474.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0731-758.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0731-758.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0731-474-1.webp 1x, images/img_0731-948.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0731-474-1.jpg 1x, images/img_0731-948.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0731-592.webp 1x, images/img_0731-1184.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0731-592.jpg 1x, images/img_0731-1184.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0731-947.webp 1x, images/img_0731-1894.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0731-947.jpg 1x, images/img_0731-1894.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0731-1894.jpg" loading="lazy" class="i1">
</picture>
</div>
<div class="v1 ps5 s6 c2 z4">
<picture>
<source srcset="images/img_0687-184.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0687-184.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0687-276.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0687-276.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0687-442.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0687-442.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0687-276-1.webp 1x, images/img_0687-552.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0687-276-1.jpg 1x, images/img_0687-552.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0687-345.webp 1x, images/img_0687-690.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0687-345.jpg 1x, images/img_0687-690.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0687-552-1.webp 1x, images/img_0687-1104.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0687-552-1.jpg 1x, images/img_0687-1104.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0687-1104.jpg" loading="lazy" class="i2">
</picture>
</div>
</div>
</div>
</div>
</div>
<div data-block-group="0" class="btf v2 ps6 s7 c3 z5">
<div class="ps7">
</div>
<div class="ps8 v2 s8">
<div class="v1 ps9 s9 z6">
<div class="v1 ps2 s9">
<div class="v1 ps2 s10 c4 z7">
<div class="v1 ps10 s11 c2 z8">
<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDgTWXPSgrzaTuQ75BvLWsBuDbtjJjCdfw&q=15%20Park%20Circle,%20Marienville,%20PA%2016239&zoom=11" style="border:0" loading="lazy" allowfullscreen class="map1">
</iframe>
</div>
</div>
<div class="v1 ps11 s12 c4 z9">
<div class="v1 ps12 s13 c2 z10">
<h1 class="p1 f2">LOCATION</h1>
</div>
<div class="v1 ps13 s14 c2 z11">
<p class="p1 f3">Park Circle Apartments</p>
<p class="p1 f3">15 Park Circle</p>
<p class="p1 f3">Marienville, PA 16239</p>
<p class="p1 f3"><br></p>
<p class="p1"><a href="tel:8142290300" class="f4">PHONE</a></p>
<p class="p1"><a href="javascript:em1();" class="f4">EMAIL</a></p>
<p class="p1"><a href="contact.php" class="f4">INQUIRY</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-block-group="0" class="btf v2 ps14 s15 c5 z5">
<div class="ps7">
</div>
<div class="ps15 v2 s16">
<div class="v1 ps16 s17">
<div class="v1 ps2 s18 c2 z12">
<p class="p2 f5">Copyrights 2024</p>
<p class="p2 f5">SRP Consulting Group, LLC</p>
<p class="p2 f5">All Rights Reserved</p>
</div>
<div class="v1 ps17 s19 c2 z12">
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
<img src="images/copy-of-untitled-2-340.png" loading="lazy" class="i3">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c6">
</div>
<script>var lwi=-1;function thresholdPassed(){var w=document.documentElement.clientWidth;var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}function em1(){var c="dpoubduAqbsldjsdmfsfoubmt/dpn@tvckfdu>Jogpsnbujpo'cpez>";var addr="mailto:";for(var i=0;i<c.length;i++)addr+=String.fromCharCode(c.charCodeAt(i)-1);window.location.href=addr;}!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();dpth="/";!function(){var e={},t={},n={};window.ld=function(a,r,o){var c=function(){"interactive"==document.readyState?(r&&r(),document.addEventListener("readystatechange",function(){"complete"==document.readyState&&o&&o()})):"complete"==document.readyState?(r&&r(),o&&o()):document.addEventListener("readystatechange",function(){"interactive"==document.readyState&&r&&r(),"complete"==document.readyState&&o&&o()})},d=(1<<a.length)-1,u=0,i=function(r){var o=a[r],i=function(){for(var t=0;t<a.length;t++){var r=(1<<t)-1;if((u&r)==r&&n[a[t]]){if(!e[a[t]]){var o=document.createElement("script");o.textContent=n[a[t]],document.body.appendChild(o),e[a[t]]=!0}if((u|=1<<t)==d)return c(),0}}return 1};if(null==t[o]){t[o]=[];var f=new XMLHttpRequest;f.open("GET",o,!0),f.onload=function(){n[o]=f.responseText,[].forEach.call(t[o],function(e){e()})},t[o].push(i),f.send()}else{if(e[o])return i();t[o].push(i)}return 1};if(a.length)for(var f=0;f<a.length&&i(f);f++);else c()}}();ld([],function(){!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var a=!1,o=document.body.parentNode;(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&"none"!=getComputedStyle(o).getPropertyValue("scroll-snap-type")&&(o.setAttribute("data-snap",o.style.scrollSnapType),o.style.scrollSnapType="none",a=!0);var n=0;if(e.hash.length>1){var r=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));r||(r=1);var i=e.hash.slice(1),s=document.getElementById(i);if(null===s&&null===(s=document.querySelector('[name="'+i+'"]')))return;var u=/chrome/i.test(navigator.userAgent);n=u?s.getBoundingClientRect().top*r+pageYOffset:(s.getBoundingClientRect().top+pageYOffset)*r}else if(a)for(var l=document.querySelectorAll("[data-block-group]"),c=0;c<l.length;c++)if("none"!=getComputedStyle(l[c]).getPropertyValue("scroll-snap-align")){s=l[c];break}if(a)window.smoothScroll(t,s,1);else if("scrollBehavior"in document.documentElement.style)scroll({top:n,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var d=pageYOffset,m=null;requestAnimationFrame(function e(t){m||(m=t);var a=(t-m)/400;scrollTo(0,d<n?(n-d)*a+d:d-(d-n)*a),a<1?requestAnimationFrame(e):scrollTo(0,n)})}else scrollTo(0,n);t.preventDefault()},!1)})}(),window.smoothScroll=function(e,t,a,o){e.stopImmediatePropagation();var n,r=pageYOffset;t?(("string"==typeof t||t instanceof String)&&(t=document.querySelector(t)),n=t.getBoundingClientRect().top):n=-r;var i=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));i||(i=1);var s=n*i+(/chrome/i.test(navigator.userAgent)?0:r*(i-1)),u=null;function l(){c(window.performance.now?window.performance.now():Date.now())}function c(e){null===u&&(u=e);var n=(e-u)/1e3,i=function(e,t,a){switch(o){case"linear":break;case"easeInQuad":e*=e;break;case"easeOutQuad":e=1-(1-e)*(1-e);break;case"easeInCubic":e*=e*e;break;case"easeOutCubic":e=1-Math.pow(1-e,3);break;case"easeInOutCubic":e=e<.5?4*e*e*e:1-Math.pow(-2*e+2,3)/2;break;case"easeInQuart":e*=e*e*e;break;case"easeOutQuart":e=1-Math.pow(1-e,4);break;case"easeInOutQuart":e=e<.5?8*e*e*e*e:1-Math.pow(-2*e+2,4)/2;break;case"easeInQuint":e*=e*e*e*e;break;case"easeOutQuint":e=1-Math.pow(1-e,5);break;case"easeInOutQuint":e=e<.5?16*e*e*e*e*e:1-Math.pow(-2*e+2,5)/2;break;case"easeInCirc":e=1-Math.sqrt(1-Math.pow(e,2));break;case"easeOutCirc":e=Math.sqrt(1-Math.pow(0,2));break;case"easeInOutCirc":e=e<.5?(1-Math.sqrt(1-Math.pow(2*e,2)))/2:(Math.sqrt(1-Math.pow(-2*e+2,2))+1)/2;break;case"easeInOutQuad":default:e=e<.5?2*e*e:1-Math.pow(-2*e+2,2)/2}e>1&&(e=1);return t+a*e}(n/a,r,s);if(window.scrollTo(0,i),n<a)"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120);else if(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1){if(t)for(var d=t;d!=document.body;){if(d.getAttribute("data-block-group")){d.scrollIntoView();break}d=d.parentNode}setTimeout(function(){var e=document.body.parentNode;e.style.scrollSnapType=e.getAttribute("data-snap"),e.removeAttribute("data-snap")},100)}}return"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120),!1};!function(){var e=null;if(location.hash){var t=location.hash.replace("#",""),n=function(){var o=document.getElementById(t);null===o&&(o=document.querySelector('[name="'+t+'"]')),o&&o.scrollIntoView(!0),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")?setTimeout(n,100):null!=e&&setTimeout(e,100)};n()}else null!=e&&e()}();});ld(["js/jquery.6ad8c3.js","js/jqueryui.6ad8c3.js","js/menu.6ad8c3.js","js/menu-dropdown-animations.6ad8c3.js","js/menu-dropdown.f5bf09.js"],function(){initMenu($('#m1')[0]);});</script>
</body>
</html>