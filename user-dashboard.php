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
            $redirect = 'user-dashboard.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: user-login.php');
            exit;
        }
    }
    $acg = isset($access_control_groups['66F84885-248E-40EC-BF02-14507456BFEF']) ? $access_control_groups['66F84885-248E-40EC-BF02-14507456BFEF'] : NULL;
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'AEBC8786-C8B7-4743-B214-D1D992C31321' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'user-dashboard.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

if(!defined('PHP_VERSION_ID')||PHP_VERSION_ID<50600){print "Sparkle requires at least PHP 5.6, you have ".phpversion().". Contact your web host to fix this.<br>";exit();}if(! strstr(ini_get('disable_functions'), 'ini_set')) {ini_set('default_charset','UTF-8');}header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<title>USER DASHBOARD</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://parkcirclerentals.com/user-dashboard.php">
<meta name="robots" content="max-image-preview:large">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="USER DASHBOARD">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Quicksand-Bold.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand 3";src:url('css/Quicksand-Bold.woff2') format('woff2'),url('css/Quicksand-Bold.woff') format('woff');font-weight:700}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right;shape-outside:content-box}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#7b8078}.v1{display:block;vertical-align:top}.ps1{position:relative;margin-top:0}.s1{width:100%;min-width:1920px;height:386px;padding-bottom:0}.c2{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent;box-shadow:0 3px 4px #000}.z1{pointer-events:none}.ps2{display:inline-block;width:0;height:0}.ps3{position:relative;margin-top:10px}.s2{width:1920px;margin-left:auto;margin-right:auto;min-height:354px}.v2{display:inline-block;vertical-align:top}.ps4{position:relative;margin-left:56px;margin-top:0}.s3{min-width:1796px;width:1796px;min-height:354px}.ps5{position:relative;margin-left:0;margin-top:0}.s4{min-width:358px;width:358px;min-height:354px;height:354px}.z2{z-index:5;pointer-events:auto}.i1{position:absolute;left:2px;width:354px;height:354px;top:0;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.v3{display:inline-block;vertical-align:top;overflow:visible}.ps6{position:relative;margin-left:239px;margin-top:252px}.s5{min-width:994px;width:994px;height:88px}.z3{z-index:6;pointer-events:auto}.s6{min-width:994px;width:994px;min-height:88px;height:88px}.m1{padding:0px 0px 0px 0px}.ml1{outline:0}.s7{min-width:194px;width:194px;height:88px;box-shadow:0 2px 4px #000;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.mcv1{display:inline-block}.s8{min-width:194px;width:194px;min-height:88px}.c4{border:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff}.ps7{position:relative;margin-left:0;margin-top:23px}.s9{min-width:194px;width:194px;overflow:hidden;height:42px}.z4{pointer-events:auto}.p1{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f1{font-family:"Quicksand 3";font-size:32px;font-size:calc(32px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f1:hover{}.ps8{position:relative;margin-left:6px;margin-top:0}.v4{display:none;vertical-align:top}.s10{min-width:335px;width:335px;min-height:148px;height:148px}.z5{z-index:9999}.s11{min-width:299px;width:299px;height:66px}.s12{min-width:299px;width:299px;min-height:66px}.ps9{position:relative;margin-left:0;margin-top:12px}.s13{min-width:299px;width:299px;overflow:hidden;height:42px}.ps10{position:relative;margin-left:0;margin-top:16px}.s14{min-width:335px;width:335px;height:66px}.s15{min-width:335px;width:335px;min-height:66px}.s16{min-width:335px;width:335px;overflow:hidden;height:42px}.v5{display:inline-block;vertical-align:top;overflow:hidden;outline:0}.ps11{position:relative;margin-left:1590px;margin-top:-300px}.s17{min-width:206px;min-height:69px;box-sizing:border-box;width:206px;height:35px;padding-right:0}.c5{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;color:#fff;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z6{z-index:7;pointer-events:auto}.a1{display:inline-block;width:100%;height:100%}.f2{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:17px;padding-bottom:17px}.c5:hover{background-color:rgba(0,0,0,.5);background-clip:padding-box;border-color:#000}.c5:active{background-color:#808080;transition:initial}.ps12{position:relative;margin-top:155px}.s18{width:1920px;margin-left:auto;margin-right:auto;min-height:219px}.ps13{position:relative;margin-left:426px;margin-top:0}.s19{min-width:118px;width:118px;overflow:hidden;height:59px}.p2{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f3{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.751;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f3:hover{}.ps14{position:relative;margin-left:-320px;margin-top:141px}.s20{min-width:546px;width:546px;overflow:hidden;height:78px}.f4{font-family:"Quicksand 3";font-size:41px;font-size:calc(41px * var(--f));line-height:1.733;font-weight:700;font-style:normal;text-decoration:underline;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f4:hover{}.ps15{position:relative;margin-top:664px}.s21{width:100%;min-width:1920px;min-height:786px;padding-bottom:0}.c6{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent}.ps16{position:relative;margin-top:106px}.s22{width:1920px;margin-left:auto;margin-right:auto;min-height:622px}.ps17{position:relative;margin-left:198px;margin-top:0}.s23{min-width:1417px;width:1417px;min-height:622px}.s24{min-width:454px;width:454px;min-height:576px}.wrapper1{font-size:15px;line-height:1.4;min-height:576px}.wrapper1 div, .wrapper1 p, .wrapper1 a{font-size:15px;line-height:1.4}.wrapper1 input{font-size:15px;line-height:1.4;margin:3px 2px 3px 2px}.ps18{position:relative;margin-left:473px;margin-top:0}.s25{min-width:490px;width:490px;min-height:622px}.wrapper2{font-size:15px;line-height:1.4;min-height:622px}.wrapper2 div, .wrapper2 p, .wrapper2 a{font-size:15px;line-height:1.4}.wrapper2 input{font-size:15px;line-height:1.4;margin:3px 2px 3px 2px}.ps19{position:relative;margin-top:443px}.s26{width:100%;min-width:1920px;height:240px;padding-bottom:0}.c7{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent;box-shadow:0 -2px 4px #000}.ps20{position:relative;margin-top:51px}.s27{width:1920px;margin-left:auto;margin-right:auto;min-height:138px}.ps21{position:relative;margin-left:800px;margin-top:0}.s28{min-width:1038px;width:1038px;min-height:138px}.s29{min-width:325px;width:325px;overflow:hidden;height:138px}.f5{font-family:"Quicksand 3";font-size:22px;font-size:calc(22px * var(--f));line-height:1.774;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f5:hover{}.ps22{position:relative;margin-left:537px;margin-top:69px}.s30{min-width:176px;width:176px;min-height:64px;height:64px}.i2{position:absolute;left:3px;width:170px;height:64px;top:0;-webkit-filter:drop-shadow(0 2px 4px #c0c0c0)  invert(100%);-moz-filter:drop-shadow(0 2px 4px #c0c0c0)  invert(100%);filter:drop-shadow(0 2px 4px #c0c0c0)  invert(100%);will-change:filter;border:0}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s1{min-width:1200px;height:241px}.ps3{margin-top:6px}.s2{width:1200px;min-height:221px}.ps4{margin-left:35px}.s3{min-width:1123px;width:1123px;min-height:221px}.s4{min-width:224px;width:224px;min-height:221px;height:221px}.i1{width:221px;height:221px}.ps6{margin-left:149px;margin-top:158px}.s5{min-width:621px;width:621px;height:55px}.s6{min-width:621px;width:621px;min-height:55px;height:55px}.s7{min-width:121px;width:121px;height:55px}.s8{min-width:121px;width:121px;min-height:55px}.ps7{margin-top:14px}.s9{min-width:121px;width:121px;height:27px}.f1{font-size:20px;font-size:calc(20px * var(--f))}.ps8{margin-left:4px}.s10{min-width:210px;width:210px;min-height:92px;height:92px}.s11{min-width:187px;width:187px;height:41px}.s12{min-width:187px;width:187px;min-height:41px}.ps9{margin-top:7px}.s13{min-width:187px;width:187px;height:27px}.ps10{margin-top:10px}.s14{min-width:210px;width:210px;height:41px}.s15{min-width:210px;width:210px;min-height:41px}.s16{min-width:210px;width:210px;height:27px}.ps11{margin-left:0;margin-top:34px}.s17{min-width:129px;min-height:43px;width:129px;height:23px}.f2{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:10px;padding-bottom:10px}.ps12{margin-top:97px}.s18{width:1200px;min-height:137px}.ps13{margin-left:266px}.s19{min-width:74px;width:74px;height:37px}.f3{font-size:18px;font-size:calc(18px * var(--f));line-height:1.723}.ps14{margin-left:-200px;margin-top:88px}.s20{min-width:341px;width:341px;height:49px}.f4{font-size:26px;font-size:calc(26px * var(--f));line-height:1.732}.ps15{margin-top:415px}.s21{min-width:1200px;min-height:491px}.ps16{margin-top:66px}.s22{width:1200px;min-height:389px}.ps17{margin-left:124px}.s23{min-width:885px;width:885px;min-height:389px}.s24{min-width:284px;width:284px;min-height:360px}.wrapper1{min-height:360px}.ps18{margin-left:295px}.s25{min-width:306px;width:306px;min-height:389px}.wrapper2{min-height:389px}.ps19{margin-top:277px}.s26{min-width:1200px;height:150px}.ps20{margin-top:32px}.s27{width:1200px;min-height:86px}.ps21{margin-left:500px}.s28{min-width:649px;width:649px;min-height:86px}.s29{min-width:203px;width:203px;height:86px}.f5{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.ps22{margin-left:336px;margin-top:43px}.s30{min-width:110px;width:110px;min-height:40px;height:40px}.i2{left:2px;width:106px;height:40px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s1{min-width:960px;height:193px}.ps3{margin-top:5px}.s2{width:960px;min-height:177px}.ps4{margin-left:28px}.s3{min-width:898px;width:898px;min-height:177px}.s4{min-width:179px;width:179px;min-height:177px;height:177px}.i1{left:1px;width:177px;height:177px}.ps6{margin-left:119px;margin-top:126px}.s5{min-width:497px;width:497px;height:44px}.s6{min-width:497px;width:497px;min-height:44px;height:44px}.s7{min-width:97px;width:97px;height:44px}.s8{min-width:97px;width:97px;min-height:44px}.ps7{margin-top:11px}.s9{min-width:97px;width:97px;height:22px}.f1{font-size:16px;font-size:calc(16px * var(--f))}.ps8{margin-left:3px}.s10{min-width:168px;width:168px;min-height:74px;height:74px}.s11{min-width:150px;width:150px;height:33px}.s12{min-width:150px;width:150px;min-height:33px}.ps9{margin-top:5px}.s13{min-width:150px;width:150px;height:22px}.ps10{margin-top:8px}.s14{min-width:168px;width:168px;height:33px}.s15{min-width:168px;width:168px;min-height:33px}.s16{min-width:168px;width:168px;height:22px}.ps11{margin-left:0;margin-top:27px}.s17{min-width:103px;min-height:34px;width:103px;height:18px}.f2{font-size:14px;font-size:calc(14px * var(--f));line-height:1.287;padding-top:8px;padding-bottom:8px}.ps12{margin-top:77px}.s18{width:960px;min-height:110px}.ps13{margin-left:213px}.s19{min-width:59px;width:59px;height:30px}.f3{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.ps14{margin-left:-160px;margin-top:71px}.s20{min-width:273px;width:273px;height:39px}.f4{font-size:20px;font-size:calc(20px * var(--f));line-height:1.751}.ps15{margin-top:332px}.s21{min-width:960px;min-height:393px}.ps16{margin-top:53px}.s22{width:960px;min-height:311px}.ps17{margin-left:99px}.s23{min-width:708px;width:708px;min-height:311px}.s24{min-width:227px;width:227px;min-height:288px}.wrapper1{min-height:288px}.ps18{margin-left:236px}.s25{min-width:245px;width:245px;min-height:311px}.wrapper2{min-height:311px}.ps19{margin-top:221px}.s26{min-width:960px;height:120px}.ps20{margin-top:26px}.s27{width:960px;min-height:69px}.ps21{margin-left:400px}.s28{min-width:519px;width:519px;min-height:69px}.s29{min-width:162px;width:162px;height:69px}.f5{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps22{margin-left:269px;margin-top:34px}.s30{min-width:88px;width:88px;min-height:32px;height:32px}.i2{left:2px;width:85px;height:32px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s1{min-width:768px;height:154px}.ps3{margin-top:4px}.s2{width:768px;min-height:141px}.ps4{margin-left:22px}.s3{min-width:720px;width:720px;min-height:141px}.s4{min-width:143px;width:143px;min-height:141px;height:141px}.i1{left:1px;width:141px;height:141px}.ps6{margin-left:96px;margin-top:101px}.s5{min-width:393px;width:393px;height:35px}.s6{min-width:393px;width:393px;min-height:35px;height:35px}.s7{min-width:77px;width:77px;height:35px}.s8{min-width:77px;width:77px;min-height:35px}.ps7{margin-top:9px}.s9{min-width:77px;width:77px;height:17px}.f1{font-size:12px;font-size:calc(12px * var(--f))}.ps8{margin-left:2px}.s10{min-width:128px;width:128px;min-height:58px;height:58px}.s11{min-width:114px;width:114px;height:26px}.s12{min-width:114px;width:114px;min-height:26px}.ps9{margin-top:4px}.s13{min-width:113px;width:113px;height:17px}.ps10{margin-top:6px}.s14{min-width:128px;width:128px;height:26px}.s15{min-width:128px;width:128px;min-height:26px}.s16{min-width:127px;width:127px;height:17px}.ps11{margin-left:5px;margin-top:22px}.s17{min-width:83px;min-height:28px;width:83px;height:14px}.f2{font-size:11px;font-size:calc(11px * var(--f));line-height:1.274;padding-top:7px;padding-bottom:7px}.ps12{margin-top:62px}.s18{width:768px;min-height:88px}.ps13{margin-left:170px}.s19{min-width:47px;width:47px;height:24px}.f3{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps14{margin-left:-127px;margin-top:57px}.s20{min-width:218px;width:218px;height:31px}.f4{font-size:16px;font-size:calc(16px * var(--f));line-height:1.751}.ps15{margin-top:265px}.s21{min-width:768px;min-height:314px}.ps16{margin-top:42px}.s22{width:768px;min-height:249px}.ps17{margin-left:79px}.s23{min-width:567px;width:567px;min-height:249px}.s24{min-width:182px;width:182px;min-height:230px}.wrapper1{min-height:230px}.ps18{margin-left:189px}.s25{min-width:196px;width:196px;min-height:249px}.wrapper2{min-height:249px}.ps19{margin-top:178px}.s26{min-width:768px;height:96px}.ps20{margin-top:20px}.s27{width:768px;min-height:55px}.ps21{margin-left:320px}.s28{min-width:415px;width:415px;min-height:55px}.s29{min-width:130px;width:130px;height:55px}.f5{font-size:8px;font-size:calc(8px * var(--f));line-height:1.751}.ps22{margin-left:215px;margin-top:28px}.s30{min-width:70px;width:70px;min-height:26px;height:26px}.i2{left:1px;width:69px;height:26px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s1{min-width:480px;height:96px}.ps3{margin-top:2px}.s2{width:480px;min-height:88px}.ps4{margin-left:14px}.s3{min-width:450px;width:450px;min-height:88px}.s4{min-width:90px;width:90px;min-height:88px;height:88px}.i1{left:1px;width:88px;height:88px}.ps6{margin-left:59px;margin-top:64px}.s5{min-width:244px;width:244px;height:22px}.s6{min-width:244px;width:244px;min-height:22px;height:22px}.s7{min-width:48px;width:48px;height:22px}.s8{min-width:48px;width:48px;min-height:22px}.ps7{margin-top:5px}.s9{min-width:48px;width:48px;height:12px}.f1{font-size:8px;font-size:calc(8px * var(--f))}.ps8{margin-left:1px}.s10{min-width:85px;width:85px;min-height:36px;height:36px}.s11{min-width:76px;width:76px;height:16px}.s12{min-width:76px;width:76px;min-height:16px}.ps9{margin-top:2px}.s13{min-width:75px;width:75px;height:12px}.ps10{margin-top:4px}.s14{min-width:85px;width:85px;height:16px}.s15{min-width:85px;width:85px;min-height:16px}.s16{min-width:84px;width:84px;height:12px}.ps11{margin-left:5px;margin-top:14px}.s17{min-width:52px;min-height:17px;width:52px;height:9px}.f2{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:4px;padding-bottom:4px}.ps12{margin-top:39px}.s18{width:480px;min-height:55px}.ps13{margin-left:106px}.s19{min-width:30px;width:30px;height:15px}.f3{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.ps14{margin-left:-80px;margin-top:35px}.s20{min-width:136px;width:136px;height:20px}.f4{font-size:10px;font-size:calc(10px * var(--f));line-height:1.701}.ps15{margin-top:166px}.s21{min-width:480px;min-height:196px}.ps16{margin-top:26px}.s22{width:480px;min-height:156px}.ps17{margin-left:50px}.s23{min-width:353px;width:353px;min-height:156px}.s24{min-width:114px;width:114px;min-height:144px}.wrapper1{min-height:144px}.ps18{margin-left:117px}.s25{min-width:122px;width:122px;min-height:156px}.wrapper2{min-height:156px}.ps19{margin-top:111px}.s26{min-width:480px;height:60px}.ps20{margin-top:13px}.s27{width:480px;min-height:34px}.ps21{margin-left:200px}.s28{min-width:260px;width:260px;min-height:34px}.s29{min-width:81px;width:81px;height:34px}.f5{font-size:5px;font-size:calc(5px * var(--f));line-height:1.801}.ps22{margin-left:135px;margin-top:17px}.s30{min-width:44px;width:44px;min-height:16px;height:16px}.i2{left:1px;width:42px;height:16px}body{--d:4;--s:480}}@media (max-width:479px) {.s1{min-width:320px;height:64px}.ps3{margin-top:2px}.s2{width:320px;min-height:59px}.ps4{margin-left:9px}.s3{min-width:299px;width:299px;min-height:59px}.s4{min-width:60px;width:60px;min-height:59px;height:59px}.i1{left:1px;width:59px;height:59px}.ps6{margin-left:40px;margin-top:42px}.s5{min-width:164px;width:164px;height:15px}.s6{min-width:164px;width:164px;min-height:15px;height:15px}.s7{min-width:32px;width:32px;height:15px}.s8{min-width:32px;width:32px;min-height:15px}.ps7{margin-top:3px}.s9{min-width:32px;width:32px;height:8px}.f1{font-size:5px;font-size:calc(5px * var(--f));line-height:1.201}.ps8{margin-left:1px}.s10{min-width:54px;width:54px;min-height:24px;height:25px}.s11{min-width:48px;width:48px;height:11px}.s12{min-width:48px;width:48px;min-height:11px}.ps9{margin-top:1px}.s13{min-width:47px;width:47px;height:8px}.ps10{margin-top:2px}.s14{min-width:54px;width:54px;height:11px}.s15{min-width:54px;width:54px;min-height:11px}.s16{min-width:53px;width:53px;height:8px}.ps11{margin-left:1px;margin-top:9px}.s17{min-width:34px;min-height:11px;width:34px;height:5px}.f2{font-size:4px;font-size:calc(4px * var(--f));padding-top:3px;padding-bottom:3px}.ps12{margin-top:26px}.s18{width:320px;min-height:37px}.ps13{margin-left:71px}.s19{min-width:20px;width:20px;height:10px}.f3{font-size:4px;font-size:calc(4px * var(--f))}.ps14{margin-left:-54px;margin-top:24px}.s20{min-width:91px;width:91px;height:13px}.f4{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.ps15{margin-top:110px}.s21{min-width:320px;min-height:131px}.ps16{margin-top:18px}.s22{width:320px;min-height:104px}.ps17{margin-left:33px}.s23{min-width:236px;width:236px;min-height:104px}.s24{min-width:76px;width:76px;min-height:96px}.wrapper1{min-height:96px}.ps18{margin-left:78px}.s25{min-width:82px;width:82px;min-height:104px}.wrapper2{min-height:104px}.ps19{margin-top:74px}.s26{min-width:320px;height:40px}.ps20{margin-top:9px}.s27{width:320px;min-height:23px}.ps21{margin-left:133px}.s28{min-width:173px;width:173px;min-height:23px}.s29{min-width:54px;width:54px;height:23px}.f5{font-size:3px;font-size:calc(3px * var(--f));line-height:1.668}.ps22{margin-left:90px;margin-top:11px}.s30{min-width:29px;width:29px;min-height:11px;height:11px}.i2{left:0;width:29px;height:11px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-db99c3.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-b52991.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/user-dashboard.f5bf09.php" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body;e.style.setProperty("--z",1);var t=window.innerWidth,n=getComputedStyle(e).getPropertyValue("--s");if(320==n){if(t<320)return;t=Math.min(479,t)}else if(480==n){if(t<480)return;t=Math.min(610,t)}else t=n;e.style.setProperty("--z",Math.trunc(t/n*1e3)/1e3)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div data-block-group="0" class="v1 ps1 s1 c2 z1">
<div class="ps2">
</div>
<div class="ps3 v1 s2">
<div class="v2 ps4 s3">
<div class="v2 ps5 s4 c3 z2">
<picture>
<source srcset="protimg/untitled-3-1--118-1.php 2x" type="image/webp" media="(max-width:479px)">
<source srcset="protimg/untitled-3-1--118.php 2x" media="(max-width:479px)">
<source srcset="protimg/untitled-3-1--176-1.php 2x" type="image/webp" media="(max-width:767px)">
<source srcset="protimg/untitled-3-1--176.php 2x" media="(max-width:767px)">
<source srcset="protimg/untitled-3-1--282-1.php 2x" type="image/webp" media="(max-width:959px)">
<source srcset="protimg/untitled-3-1--282.php 2x" media="(max-width:959px)">
<source srcset="protimg/untitled-3-1--177-1.php 1x, protimg/untitled-3-1--354-1.php 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="protimg/untitled-3-1--177.php 1x, protimg/untitled-3-1--354.php 2x" media="(max-width:1199px)">
<source srcset="protimg/untitled-3-1--221-1.php 1x, protimg/untitled-3-1--442-1.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="protimg/untitled-3-1--221.php 1x, protimg/untitled-3-1--442.php 2x" media="(max-width:1919px)">
<source srcset="protimg/untitled-3-1--354-3.php 1x, protimg/untitled-3-1--708-1.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="protimg/untitled-3-1--354-2.php 1x, protimg/untitled-3-1--708.php 2x" media="(min-width:1920px)">
<img src="protimg/untitled-3-1--708.php" class="i1">
</picture>
</div>
<div class="v3 ps6 s5 z3">
<ul class="menu-dropdown v2 ps5 s6 m1" id="m1">
<li class="v2 ps5 s7">
<a href="./" class="ml1"><div class="menu-content mcv1"><div class="v2 ps5 s8 c4 z1"><div class="v2 ps7 s9 c3 z4"><p class="p1 f1">Home</p></div></div></div></a>
</li>
<li class="v2 ps8 s7">
<div class="menu-content mcv1">
<div class="v2 ps5 s8 c4 z1">
<div class="v2 ps7 s9 c3 z4">
<p class="p1 f1">Rentals</p>
</div>
</div>
</div>
<ul class="menu-dropdown v4 ps5 s10 m1 z5">
<li class="v2 ps5 s11">
<a href="loft-apartment.php" class="ml1"><div class="menu-content mcv1"><div class="v2 ps5 s12 c4 z1"><div class="v2 ps9 s13 c3 z4"><p class="p1 f1">Loft Apartment</p></div></div></div></a>
</li>
<li class="v2 ps10 s14">
<a href="studio-apartment.php" class="ml1"><div class="menu-content mcv1"><div class="v2 ps5 s15 c4 z1"><div class="v2 ps9 s16 c3 z4"><p class="p1 f1">Studio Apartment</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v2 ps8 s7">
<a href="page-2.php" class="ml1"><div class="menu-content mcv1"><div class="v2 ps5 s8 c4 z1"><div class="v2 ps7 s9 c3 z4"><p class="p1 f1">About</p></div></div></div></a>
</li>
<li class="v2 ps8 s7">
<a href="maintiance.php" class="ml1"><div class="menu-content mcv1"><div class="v2 ps5 s8 c4 z1"><div class="v2 ps7 s9 c3 z4"><p class="p1 f1">Maintiance</p></div></div></div></a>
</li>
<li class="v2 ps8 s7">
<a href="contact.php" class="ml1"><div class="menu-content mcv1"><div class="v2 ps5 s8 c4 z1"><div class="v2 ps7 s9 c3 z4"><p class="p1 f1">Contact</p></div></div></div></a>
</li>
</ul>
</div>
<div class="g1 v5 ps11 s17 c5 z6">
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
<a href="./logout-d12b45.php" class="a1 f2">LOGOUT</a>
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
<div class="ps12 v1 s18 z1">
<div class="v2 ps13 s19 c3 z4">
<p class="p2 f3"><?php echo (isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''); ?>
</p>
</div>
<div class="v2 ps14 s20 c3 z4">
<p class="p2"><a href="maintiance.php" class="f4">Maintenance Request</a></p>
</div>
</div>
<div data-block-group="0" class="v1 ps15 s21 c6 z1">
<div class="ps2">
</div>
<div class="ps16 v1 s22">
<div class="v2 ps17 s23">
<div class="v2 ps5 s24 c3 z4">
<div class="wrapper1">
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1OhHSwCPwq6hhUeOXvl4HVBz"
  publishable-key="pk_live_51MB13uCPwq6hhUeOgf9JTpa5YEqhchjuDsSIDOUrAr19V01CS3IRGnM0pEpbUYp8lVL7PZLgwn2UCj4GrzCNX6Yq00WNm6xaff"
>
</stripe-buy-button>
</div>
</div>
<div class="v2 ps18 s25 c3 z4">
<div class="wrapper2">
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1OhHYzCPwq6hhUeOFuEDeaMG"
  publishable-key="pk_live_51MB13uCPwq6hhUeOgf9JTpa5YEqhchjuDsSIDOUrAr19V01CS3IRGnM0pEpbUYp8lVL7PZLgwn2UCj4GrzCNX6Yq00WNm6xaff"
>
</stripe-buy-button>
</div>
</div>
</div>
</div>
</div>
<div data-block-group="0" class="v1 ps19 s26 c7 z1">
<div class="ps2">
</div>
<div class="ps20 v1 s27">
<div class="v2 ps21 s28">
<div class="v2 ps5 s29 c3 z4">
<p class="p1 f5">Copyrights 2024</p>
<p class="p1 f5">SRP Consulting Group, LLC</p>
<p class="p1 f5">All Rights Reserved</p>
</div>
<div class="v2 ps22 s30 c3 z4">
<picture>
<source srcset="protimg/copy-of-untitled-2-58-1.php 2x" type="image/webp" media="(max-width:479px)">
<source srcset="protimg/copy-of-untitled-2-58.php 2x" media="(max-width:479px)">
<source srcset="protimg/copy-of-untitled-2-84-1.php 2x" type="image/webp" media="(max-width:767px)">
<source srcset="protimg/copy-of-untitled-2-84.php 2x" media="(max-width:767px)">
<source srcset="protimg/copy-of-untitled-2-138-1.php 2x" type="image/webp" media="(max-width:959px)">
<source srcset="protimg/copy-of-untitled-2-138.php 2x" media="(max-width:959px)">
<source srcset="protimg/copy-of-untitled-2-85-1.php 1x, protimg/copy-of-untitled-2-170-1.php 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="protimg/copy-of-untitled-2-85.php 1x, protimg/copy-of-untitled-2-170.php 2x" media="(max-width:1199px)">
<source srcset="protimg/copy-of-untitled-2-106-1.php 1x, protimg/copy-of-untitled-2-212-1.php 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="protimg/copy-of-untitled-2-106.php 1x, protimg/copy-of-untitled-2-212.php 2x" media="(max-width:1919px)">
<source srcset="protimg/copy-of-untitled-2-170-3.php 1x, protimg/copy-of-untitled-2-340-1.php 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="protimg/copy-of-untitled-2-170-2.php 1x, protimg/copy-of-untitled-2-340.php 2x" media="(min-width:1920px)">
<img src="protimg/copy-of-untitled-2-340.php" class="i2">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c1">
</div>
<script>var lwi=-1;function thresholdPassed(){var w=document.documentElement.clientWidth;var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();dpth="/";!function(){var e={},t={},n={};window.ld=function(a,r,o){var c=function(){"interactive"==document.readyState?(r&&r(),document.addEventListener("readystatechange",function(){"complete"==document.readyState&&o&&o()})):"complete"==document.readyState?(r&&r(),o&&o()):document.addEventListener("readystatechange",function(){"interactive"==document.readyState&&r&&r(),"complete"==document.readyState&&o&&o()})},d=(1<<a.length)-1,u=0,i=function(r){var o=a[r],i=function(){for(var t=0;t<a.length;t++){var r=(1<<t)-1;if((u&r)==r&&n[a[t]]){if(!e[a[t]]){var o=document.createElement("script");o.textContent=n[a[t]],document.body.appendChild(o),e[a[t]]=!0}if((u|=1<<t)==d)return c(),0}}return 1};if(null==t[o]){t[o]=[];var f=new XMLHttpRequest;f.open("GET",o,!0),f.onload=function(){n[o]=f.responseText,[].forEach.call(t[o],function(e){e()})},t[o].push(i),f.send()}else{if(e[o])return i();t[o].push(i)}return 1};if(a.length)for(var f=0;f<a.length&&i(f);f++);else c()}}();ld([],function(){!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var a=!1,o=document.body.parentNode;(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&"none"!=getComputedStyle(o).getPropertyValue("scroll-snap-type")&&(o.setAttribute("data-snap",o.style.scrollSnapType),o.style.scrollSnapType="none",a=!0);var n=0;if(e.hash.length>1){var r=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));r||(r=1);var i=e.hash.slice(1),s=document.getElementById(i);if(null===s&&null===(s=document.querySelector('[name="'+i+'"]')))return;var u=/chrome/i.test(navigator.userAgent);n=u?s.getBoundingClientRect().top*r+pageYOffset:(s.getBoundingClientRect().top+pageYOffset)*r}else if(a)for(var l=document.querySelectorAll("[data-block-group]"),c=0;c<l.length;c++)if("none"!=getComputedStyle(l[c]).getPropertyValue("scroll-snap-align")){s=l[c];break}if(a)window.smoothScroll(t,s,1);else if("scrollBehavior"in document.documentElement.style)scroll({top:n,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var d=pageYOffset,m=null;requestAnimationFrame(function e(t){m||(m=t);var a=(t-m)/400;scrollTo(0,d<n?(n-d)*a+d:d-(d-n)*a),a<1?requestAnimationFrame(e):scrollTo(0,n)})}else scrollTo(0,n);t.preventDefault()},!1)})}(),window.smoothScroll=function(e,t,a,o){e.stopImmediatePropagation();var n,r=pageYOffset;t?(("string"==typeof t||t instanceof String)&&(t=document.querySelector(t)),n=t.getBoundingClientRect().top):n=-r;var i=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));i||(i=1);var s=n*i+(/chrome/i.test(navigator.userAgent)?0:r*(i-1)),u=null;function l(){c(window.performance.now?window.performance.now():Date.now())}function c(e){null===u&&(u=e);var n=(e-u)/1e3,i=function(e,t,a){switch(o){case"linear":break;case"easeInQuad":e*=e;break;case"easeOutQuad":e=1-(1-e)*(1-e);break;case"easeInCubic":e*=e*e;break;case"easeOutCubic":e=1-Math.pow(1-e,3);break;case"easeInOutCubic":e=e<.5?4*e*e*e:1-Math.pow(-2*e+2,3)/2;break;case"easeInQuart":e*=e*e*e;break;case"easeOutQuart":e=1-Math.pow(1-e,4);break;case"easeInOutQuart":e=e<.5?8*e*e*e*e:1-Math.pow(-2*e+2,4)/2;break;case"easeInQuint":e*=e*e*e*e;break;case"easeOutQuint":e=1-Math.pow(1-e,5);break;case"easeInOutQuint":e=e<.5?16*e*e*e*e*e:1-Math.pow(-2*e+2,5)/2;break;case"easeInCirc":e=1-Math.sqrt(1-Math.pow(e,2));break;case"easeOutCirc":e=Math.sqrt(1-Math.pow(0,2));break;case"easeInOutCirc":e=e<.5?(1-Math.sqrt(1-Math.pow(2*e,2)))/2:(Math.sqrt(1-Math.pow(-2*e+2,2))+1)/2;break;case"easeInOutQuad":default:e=e<.5?2*e*e:1-Math.pow(-2*e+2,2)/2}e>1&&(e=1);return t+a*e}(n/a,r,s);if(window.scrollTo(0,i),n<a)"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120);else if(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1){if(t)for(var d=t;d!=document.body;){if(d.getAttribute("data-block-group")){d.scrollIntoView();break}d=d.parentNode}setTimeout(function(){var e=document.body.parentNode;e.style.scrollSnapType=e.getAttribute("data-snap"),e.removeAttribute("data-snap")},100)}}return"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120),!1};!function(){var e=null;if(location.hash){var t=location.hash.replace("#",""),n=function(){var o=document.getElementById(t);null===o&&(o=document.querySelector('[name="'+t+'"]')),o&&o.scrollIntoView(!0),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")?setTimeout(n,100):null!=e&&setTimeout(e,100)};n()}else null!=e&&e()}();});ld(["js/jquery.6ad8c3.js","js/jqueryui.6ad8c3.js","js/menu.6ad8c3.js","js/menu-dropdown-animations.6ad8c3.js","js/menu-dropdown.f5bf09.js"],function(){initMenu($('#m1')[0]);});</script>
</body>
</html>