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
            $redirect = 'page-2.php';
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
<title>Page 2</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://parkcirclerentals.com/page-2.php">
<meta name="robots" content="max-image-preview:large">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Page 2">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Quicksand-Medium.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand 3";src:url('css/Quicksand-Bold.woff2') format('woff2'),url('css/Quicksand-Bold.woff') format('woff');font-weight:700}@font-face{font-display:block;font-family:"Londrina Solid";src:url('css/LondrinaSolid-Regular.woff2') format('woff2'),url('css/LondrinaSolid-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Tomorrow 5";src:url('css/Tomorrow-SemiBold.woff2') format('woff2'),url('css/Tomorrow-SemiBold.woff') format('woff');font-weight:600}@font-face{font-display:block;font-family:"Redacted Script 1";src:url('css/redacted-script-regular.woff2') format('woff2'),url('css/redacted-script-regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Quicksand 2";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}@font-face{font-display:block;font-family:"Quicksand 1";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right;shape-outside:content-box}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
#b{background-color:#7b8078}.v8{display:block;vertical-align:top}.ps54{position:relative;margin-top:0}.s71{width:100%;min-width:1920px;height:386px;padding-bottom:0}.c17{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent;box-shadow:0 3px 4px #000}.z43{z-index:2;pointer-events:none}.ps55{display:inline-block;width:0;height:0}.ps56{position:relative;margin-top:10px}.s72{width:1920px;margin-left:auto;margin-right:auto;min-height:354px}.v9{display:inline-block;vertical-align:top}.ps57{position:relative;margin-left:56px;margin-top:0}.s73{min-width:1796px;width:1796px;min-height:354px}.ps58{position:relative;margin-left:0;margin-top:0}.s74{min-width:358px;width:358px;min-height:354px;height:354px}.z44{z-index:3;pointer-events:auto}.i8{position:absolute;left:2px;width:354px;height:354px;top:0;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.v10{display:inline-block;vertical-align:top;overflow:visible}.ps59{position:relative;margin-left:239px;margin-top:252px}.s75{min-width:994px;width:994px;height:88px}.z45{z-index:4;pointer-events:auto}.s76{min-width:994px;width:994px;min-height:88px;height:88px}.m2{padding:0px 0px 0px 0px}.ml2{outline:0}.s77{min-width:194px;width:194px;height:88px;box-shadow:0 2px 4px #000;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.mcv2{display:inline-block}.s78{min-width:194px;width:194px;min-height:88px}.c19{border:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff}.z46{pointer-events:none}.ps60{position:relative;margin-left:0;margin-top:23px}.s79{min-width:194px;width:194px;overflow:hidden;height:42px}.z47{pointer-events:auto}.p6{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f16{font-family:"Quicksand 3";font-size:32px;font-size:calc(32px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f16:hover{}.ps61{position:relative;margin-left:6px;margin-top:0}.v11{display:none;vertical-align:top}.s80{min-width:335px;width:335px;min-height:148px;height:148px}.z48{z-index:9999}.s81{min-width:299px;width:299px;height:66px}.s82{min-width:299px;width:299px;min-height:66px}.ps62{position:relative;margin-left:0;margin-top:12px}.s83{min-width:299px;width:299px;overflow:hidden;height:42px}.ps63{position:relative;margin-left:0;margin-top:16px}.s84{min-width:335px;width:335px;height:66px}.s85{min-width:335px;width:335px;min-height:66px}.s86{min-width:335px;width:335px;overflow:hidden;height:42px}.v12{display:inline-block;vertical-align:top;overflow:hidden;outline:0}.ps64{position:relative;margin-left:1590px;margin-top:-300px}.s87{min-width:206px;min-height:69px;box-sizing:border-box;width:206px;height:35px;padding-right:0}.c20{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;color:#fff;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z49{z-index:5;pointer-events:auto}.a2{display:inline-block;width:100%;height:100%}.f17{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:17px;padding-bottom:17px}.c20:hover{background-color:rgba(0,0,0,.5);background-clip:padding-box;border-color:#000}.c20:active{background-color:#808080;transition:initial}.ps65{position:relative;margin-top:98px}.s88{width:1920px;margin-left:auto;margin-right:auto;min-height:1480px}.ps66{position:relative;margin-left:59px;margin-top:2px}.s89{min-width:1808px;width:1808px;min-height:1472px}.c21{border:0;-webkit-border-radius:50px;-moz-border-radius:50px;border-radius:50px;background-color:#fff;box-shadow:0 2px 4px #000}.z50{z-index:1}.ps67{position:relative;margin-left:79px;margin-top:71px}.s90{min-width:1613px;width:1613px;min-height:635px}.ps68{position:relative;margin-left:0;margin-top:38px}.s91{min-width:598px;width:598px;min-height:562px;line-height:0}.s92{min-width:374px;width:374px;overflow:hidden;height:194px}.z51{z-index:11;pointer-events:auto}.p7{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f18{font-family:"Londrina Solid";font-size:153px;font-size:calc(153px * var(--f));line-height:1.184;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:1px 2px 2px #000}.f18:hover{}.ps69{position:relative;margin-left:0;margin-top:85px}.s93{min-width:598px;width:598px;overflow:hidden;height:117px}.z52{z-index:10;pointer-events:auto}.f19{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.751;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f19:hover{}.f20{font-family:"Quicksand 2";font-size:38px;font-size:calc(38px * var(--f));line-height:1.738;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f20:hover{}.ps70{position:relative;margin-left:0;margin-top:108px}.s94{min-width:133px;width:133px;overflow:hidden;height:58px}.z53{z-index:12;pointer-events:auto}.f21{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.751;font-weight:700;font-style:normal;text-decoration:underline;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f21:hover{}.ps71{position:relative;margin-left:162px;margin-top:0}.s95{min-width:853px;width:853px;min-height:635px;height:635px}.i9{position:absolute;left:0;width:853px;height:536px;top:50px;border:0}.ps72{position:relative;margin-left:79px;margin-top:59px}.s96{min-width:1613px;width:1613px;overflow:hidden;height:224px}.z54{z-index:14;pointer-events:auto}.f22{font-family:"Quicksand 2";font-size:32px;font-size:calc(32px * var(--f));line-height:1.751;font-weight:500;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f22:hover{}.ps73{position:relative;margin-left:211px;margin-top:72px}.s97{min-width:1408px;width:1408px;min-height:317px}.s98{min-width:302px;width:302px;min-height:317px;height:317px}.z55{z-index:13;pointer-events:auto}.i10{position:absolute;left:0;width:302px;height:302px;top:7px;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.ps74{position:relative;margin-left:191px;margin-top:96px}.s99{min-width:395px;width:395px;overflow:hidden;height:203px}.z56{z-index:15;pointer-events:auto}.f23{font-family:"Quicksand 3";font-size:19px;font-size:calc(19px * var(--f));line-height:1.790;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f23:hover{}.f24{font-family:"Quicksand 1";font-size:28px;font-size:calc(28px * var(--f));line-height:1.751;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f24:hover{}.ps75{position:relative;margin-left:429px;margin-top:133px}.s100{min-width:91px;width:91px;min-height:130px;height:130px}.z57{z-index:16;pointer-events:auto}.i11{position:absolute;left:0;width:91px;height:118px;top:6px;border:0}.ps76{position:relative;margin-top:215px}.s101{width:100%;min-width:1920px;height:240px;padding-bottom:0}.c22{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent;box-shadow:0 -2px 4px #000}.ps77{position:relative;margin-top:51px}.s102{width:1920px;margin-left:auto;margin-right:auto;min-height:138px}.ps78{position:relative;margin-left:800px;margin-top:0}.s103{min-width:1038px;width:1038px;min-height:138px}.s104{min-width:325px;width:325px;overflow:hidden;height:138px}.f25{font-family:"Quicksand 3";font-size:22px;font-size:calc(22px * var(--f));line-height:1.774;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:none}.f25:hover{}.ps79{position:relative;margin-left:537px;margin-top:69px}.s105{min-width:176px;width:176px;min-height:64px;height:64px}.i12{position:absolute;left:3px;width:170px;height:64px;top:0;-webkit-filter:drop-shadow(0 2px 4px #c0c0c0)  invert(100%);-moz-filter:drop-shadow(0 2px 4px #c0c0c0)  invert(100%);filter:drop-shadow(0 2px 4px #c0c0c0)  invert(100%);will-change:filter;border:0}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s71{min-width:1200px;height:241px}.ps56{margin-top:6px}.s72{width:1200px;min-height:221px}.ps57{margin-left:35px}.s73{min-width:1123px;width:1123px;min-height:221px}.s74{min-width:224px;width:224px;min-height:221px;height:221px}.i8{width:221px;height:221px}.ps59{margin-left:149px;margin-top:158px}.s75{min-width:621px;width:621px;height:55px}.s76{min-width:621px;width:621px;min-height:55px;height:55px}.s77{min-width:121px;width:121px;height:55px}.s78{min-width:121px;width:121px;min-height:55px}.ps60{margin-top:14px}.s79{min-width:121px;width:121px;height:27px}.f16{font-size:20px;font-size:calc(20px * var(--f))}.ps61{margin-left:4px}.s80{min-width:210px;width:210px;min-height:92px;height:92px}.s81{min-width:187px;width:187px;height:41px}.s82{min-width:187px;width:187px;min-height:41px}.ps62{margin-top:7px}.s83{min-width:187px;width:187px;height:27px}.ps63{margin-top:10px}.s84{min-width:210px;width:210px;height:41px}.s85{min-width:210px;width:210px;min-height:41px}.s86{min-width:210px;width:210px;height:27px}.ps64{margin-left:0;margin-top:34px}.s87{min-width:129px;min-height:43px;width:129px;height:23px}.f17{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:10px;padding-bottom:10px}.ps65{margin-top:61px}.s88{width:1200px;min-height:928px}.ps66{margin-left:37px}.s89{min-width:1130px;width:1130px;min-height:920px}.ps67{margin-left:49px;margin-top:44px}.s90{min-width:1008px;width:1008px;min-height:397px}.ps68{margin-top:24px}.s91{min-width:374px;width:374px;min-height:351px}.s92{min-width:234px;width:234px;height:121px}.f18{font-size:96px;font-size:calc(96px * var(--f));line-height:1.188}.ps69{margin-top:53px}.s93{min-width:374px;width:374px;height:73px}.f19{font-size:18px;font-size:calc(18px * var(--f));line-height:1.723}.f20{font-size:24px;font-size:calc(24px * var(--f));line-height:1.751}.ps70{margin-top:68px}.s94{min-width:83px;width:83px;height:36px}.f21{font-size:18px;font-size:calc(18px * var(--f));line-height:1.723}.ps71{margin-left:101px}.s95{min-width:533px;width:533px;min-height:397px;height:397px}.i9{width:533px;height:335px;top:31px}.ps72{margin-left:49px;margin-top:37px}.s96{min-width:1008px;width:1008px;height:140px}.f22{font-size:20px;font-size:calc(20px * var(--f))}.ps73{margin-left:132px;margin-top:45px}.s97{min-width:880px;width:880px;min-height:198px}.s98{min-width:189px;width:189px;min-height:198px;height:198px}.i10{width:189px;height:189px;top:4px}.ps74{margin-left:119px;margin-top:60px}.s99{min-width:247px;width:247px;height:127px}.f23{font-size:12px;font-size:calc(12px * var(--f));line-height:1.751}.f24{font-size:18px;font-size:calc(18px * var(--f));line-height:1.723}.ps75{margin-left:268px;margin-top:83px}.s100{min-width:57px;width:57px;min-height:81px;height:81px}.i11{width:57px;height:74px;top:3px}.ps76{margin-top:132px}.s101{min-width:1200px;height:150px}.ps77{margin-top:32px}.s102{width:1200px;min-height:86px}.ps78{margin-left:500px}.s103{min-width:649px;width:649px;min-height:86px}.s104{min-width:203px;width:203px;height:86px}.f25{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.ps79{margin-left:336px;margin-top:43px}.s105{min-width:110px;width:110px;min-height:40px;height:40px}.i12{left:2px;width:106px;height:40px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s71{min-width:960px;height:193px}.ps56{margin-top:5px}.s72{width:960px;min-height:177px}.ps57{margin-left:28px}.s73{min-width:898px;width:898px;min-height:177px}.s74{min-width:179px;width:179px;min-height:177px;height:177px}.i8{left:1px;width:177px;height:177px}.ps59{margin-left:119px;margin-top:126px}.s75{min-width:497px;width:497px;height:44px}.s76{min-width:497px;width:497px;min-height:44px;height:44px}.s77{min-width:97px;width:97px;height:44px}.s78{min-width:97px;width:97px;min-height:44px}.ps60{margin-top:11px}.s79{min-width:97px;width:97px;height:22px}.f16{font-size:16px;font-size:calc(16px * var(--f))}.ps61{margin-left:3px}.s80{min-width:168px;width:168px;min-height:74px;height:74px}.s81{min-width:150px;width:150px;height:33px}.s82{min-width:150px;width:150px;min-height:33px}.ps62{margin-top:5px}.s83{min-width:150px;width:150px;height:22px}.ps63{margin-top:8px}.s84{min-width:168px;width:168px;height:33px}.s85{min-width:168px;width:168px;min-height:33px}.s86{min-width:168px;width:168px;height:22px}.ps64{margin-left:0;margin-top:27px}.s87{min-width:103px;min-height:34px;width:103px;height:18px}.f17{font-size:14px;font-size:calc(14px * var(--f));line-height:1.287;padding-top:8px;padding-bottom:8px}.ps65{margin-top:48px}.s88{width:960px;min-height:744px}.ps66{margin-left:30px}.s89{min-width:904px;width:904px;min-height:736px}.ps67{margin-left:39px;margin-top:35px}.s90{min-width:806px;width:806px;min-height:318px}.ps68{margin-top:20px}.s91{min-width:299px;width:299px;min-height:281px}.s92{min-width:187px;width:187px;height:97px}.f18{font-size:76px;font-size:calc(76px * var(--f));line-height:1.185}.ps69{margin-top:42px}.s93{min-width:299px;width:299px;height:58px}.f19{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.f20{font-size:19px;font-size:calc(19px * var(--f));line-height:1.790}.ps70{margin-top:55px}.s94{min-width:66px;width:66px;height:29px}.f21{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.ps71{margin-left:81px}.s95{min-width:426px;width:426px;min-height:318px;height:318px}.i9{width:426px;height:268px;top:25px}.ps72{margin-left:39px;margin-top:30px}.s96{min-width:806px;width:806px;height:112px}.f22{font-size:16px;font-size:calc(16px * var(--f))}.ps73{margin-left:105px;margin-top:36px}.s97{min-width:705px;width:705px;min-height:158px}.s98{min-width:151px;width:151px;min-height:158px;height:158px}.i10{width:151px;height:151px;top:3px}.ps74{margin-left:96px;margin-top:48px}.s99{min-width:198px;width:198px;height:102px}.f23{font-size:9px;font-size:calc(9px * var(--f));line-height:1.779}.f24{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.ps75{margin-left:214px;margin-top:66px}.s100{min-width:46px;width:46px;min-height:65px;height:65px}.i11{width:46px;height:60px;top:2px}.ps76{margin-top:105px}.s101{min-width:960px;height:120px}.ps77{margin-top:26px}.s102{width:960px;min-height:69px}.ps78{margin-left:400px}.s103{min-width:519px;width:519px;min-height:69px}.s104{min-width:162px;width:162px;height:69px}.f25{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps79{margin-left:269px;margin-top:34px}.s105{min-width:88px;width:88px;min-height:32px;height:32px}.i12{left:2px;width:85px;height:32px}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s71{min-width:768px;height:154px}.ps56{margin-top:4px}.s72{width:768px;min-height:141px}.ps57{margin-left:22px}.s73{min-width:720px;width:720px;min-height:141px}.s74{min-width:143px;width:143px;min-height:141px;height:141px}.i8{left:1px;width:141px;height:141px}.ps59{margin-left:96px;margin-top:101px}.s75{min-width:393px;width:393px;height:35px}.s76{min-width:393px;width:393px;min-height:35px;height:35px}.s77{min-width:77px;width:77px;height:35px}.s78{min-width:77px;width:77px;min-height:35px}.ps60{margin-top:9px}.s79{min-width:77px;width:77px;height:17px}.f16{font-size:12px;font-size:calc(12px * var(--f))}.ps61{margin-left:2px}.s80{min-width:128px;width:128px;min-height:58px;height:58px}.s81{min-width:114px;width:114px;height:26px}.s82{min-width:114px;width:114px;min-height:26px}.ps62{margin-top:4px}.s83{min-width:113px;width:113px;height:17px}.ps63{margin-top:6px}.s84{min-width:128px;width:128px;height:26px}.s85{min-width:128px;width:128px;min-height:26px}.s86{min-width:127px;width:127px;height:17px}.ps64{margin-left:5px;margin-top:22px}.s87{min-width:83px;min-height:28px;width:83px;height:14px}.f17{font-size:11px;font-size:calc(11px * var(--f));line-height:1.274;padding-top:7px;padding-bottom:7px}.ps65{margin-top:39px}.s88{width:768px;min-height:597px}.ps66{margin-left:24px}.s89{min-width:723px;width:723px;min-height:589px}.ps67{margin-left:31px;margin-top:28px}.s90{min-width:645px;width:645px;min-height:254px}.ps68{margin-top:15px}.s91{min-width:239px;width:239px;min-height:225px}.s92{min-width:150px;width:150px;height:77px}.f18{font-size:61px;font-size:calc(61px * var(--f));line-height:1.198}.ps69{margin-top:34px}.s93{min-width:239px;width:239px;height:47px}.f19{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.f20{font-size:15px;font-size:calc(15px * var(--f));line-height:1.734}.ps70{margin-top:44px}.s94{min-width:53px;width:53px;height:23px}.f21{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps71{margin-left:65px}.s95{min-width:341px;width:341px;min-height:254px;height:254px}.i9{width:341px;height:214px;top:20px}.ps72{margin-left:31px;margin-top:23px}.s96{min-width:645px;width:645px;height:90px}.f22{font-size:12px;font-size:calc(12px * var(--f))}.ps73{margin-left:84px;margin-top:29px}.s97{min-width:563px;width:563px;min-height:127px}.s98{min-width:121px;width:121px;min-height:127px;height:127px}.i10{width:121px;height:121px;top:3px}.ps74{margin-left:76px;margin-top:38px}.s99{min-width:158px;width:158px;height:81px}.f23{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.f24{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps75{margin-left:172px;margin-top:53px}.s100{min-width:36px;width:36px;min-height:52px;height:52px}.i11{width:36px;height:47px;top:2px}.ps76{margin-top:82px}.s101{min-width:768px;height:96px}.ps77{margin-top:20px}.s102{width:768px;min-height:55px}.ps78{margin-left:320px}.s103{min-width:415px;width:415px;min-height:55px}.s104{min-width:130px;width:130px;height:55px}.f25{font-size:8px;font-size:calc(8px * var(--f));line-height:1.751}.ps79{margin-left:215px;margin-top:28px}.s105{min-width:70px;width:70px;min-height:26px;height:26px}.i12{left:1px;width:69px;height:26px}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s71{min-width:480px;height:96px}.ps56{margin-top:2px}.s72{width:480px;min-height:88px}.ps57{margin-left:14px}.s73{min-width:450px;width:450px;min-height:88px}.s74{min-width:90px;width:90px;min-height:88px;height:88px}.i8{left:1px;width:88px;height:88px}.ps59{margin-left:59px;margin-top:64px}.s75{min-width:244px;width:244px;height:22px}.s76{min-width:244px;width:244px;min-height:22px;height:22px}.s77{min-width:48px;width:48px;height:22px}.s78{min-width:48px;width:48px;min-height:22px}.ps60{margin-top:5px}.s79{min-width:48px;width:48px;height:12px}.f16{font-size:8px;font-size:calc(8px * var(--f))}.ps61{margin-left:1px}.s80{min-width:85px;width:85px;min-height:36px;height:36px}.s81{min-width:76px;width:76px;height:16px}.s82{min-width:76px;width:76px;min-height:16px}.ps62{margin-top:2px}.s83{min-width:75px;width:75px;height:12px}.ps63{margin-top:4px}.s84{min-width:85px;width:85px;height:16px}.s85{min-width:85px;width:85px;min-height:16px}.s86{min-width:84px;width:84px;height:12px}.ps64{margin-left:5px;margin-top:14px}.s87{min-width:52px;min-height:17px;width:52px;height:9px}.f17{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:4px;padding-bottom:4px}.ps65{margin-top:24px}.s88{width:480px;min-height:376px}.ps66{margin-left:15px}.s89{min-width:452px;width:452px;min-height:368px}.ps67{margin-left:19px;margin-top:17px}.s90{min-width:403px;width:403px;min-height:159px}.ps68{margin-top:10px}.s91{min-width:150px;width:150px;min-height:140px}.s92{min-width:94px;width:94px;height:48px}.f18{font-size:38px;font-size:calc(38px * var(--f));line-height:1.185}.ps69{margin-top:21px}.s93{min-width:150px;width:150px;height:29px}.f19{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.f20{font-size:9px;font-size:calc(9px * var(--f));line-height:1.779}.ps70{margin-top:28px}.s94{min-width:33px;width:33px;height:14px}.f21{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.ps71{margin-left:40px}.s95{min-width:213px;width:213px;min-height:159px;height:159px}.i9{width:213px;height:134px;top:12px}.ps72{margin-left:19px;margin-top:15px}.s96{min-width:403px;width:403px;height:56px}.f22{font-size:8px;font-size:calc(8px * var(--f))}.ps73{margin-left:53px;margin-top:18px}.s97{min-width:352px;width:352px;min-height:79px}.s98{min-width:76px;width:76px;min-height:79px;height:79px}.i10{width:76px;height:76px;top:1px}.ps74{margin-left:47px;margin-top:24px}.s99{min-width:99px;width:99px;height:51px}.f23{font-size:4px;font-size:calc(4px * var(--f));line-height:1.751}.f24{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.ps75{margin-left:107px;margin-top:33px}.s100{min-width:23px;width:23px;min-height:32px;height:32px}.i11{width:23px;height:30px;top:1px}.ps76{margin-top:49px}.s101{min-width:480px;height:60px}.ps77{margin-top:13px}.s102{width:480px;min-height:34px}.ps78{margin-left:200px}.s103{min-width:260px;width:260px;min-height:34px}.s104{min-width:81px;width:81px;height:34px}.f25{font-size:5px;font-size:calc(5px * var(--f));line-height:1.801}.ps79{margin-left:135px;margin-top:17px}.s105{min-width:44px;width:44px;min-height:16px;height:16px}.i12{left:1px;width:42px;height:16px}body{--d:4;--s:480}}@media (max-width:479px) {.s71{min-width:320px;height:64px}.ps56{margin-top:2px}.s72{width:320px;min-height:59px}.ps57{margin-left:9px}.s73{min-width:299px;width:299px;min-height:59px}.s74{min-width:60px;width:60px;min-height:59px;height:59px}.i8{left:1px;width:59px;height:59px}.ps59{margin-left:40px;margin-top:42px}.s75{min-width:164px;width:164px;height:15px}.s76{min-width:164px;width:164px;min-height:15px;height:15px}.s77{min-width:32px;width:32px;height:15px}.s78{min-width:32px;width:32px;min-height:15px}.ps60{margin-top:3px}.s79{min-width:32px;width:32px;height:8px}.f16{font-size:5px;font-size:calc(5px * var(--f));line-height:1.201}.ps61{margin-left:1px}.s80{min-width:54px;width:54px;min-height:24px;height:25px}.s81{min-width:48px;width:48px;height:11px}.s82{min-width:48px;width:48px;min-height:11px}.ps62{margin-top:1px}.s83{min-width:47px;width:47px;height:8px}.ps63{margin-top:2px}.s84{min-width:54px;width:54px;height:11px}.s85{min-width:54px;width:54px;min-height:11px}.s86{min-width:53px;width:53px;height:8px}.ps64{margin-left:1px;margin-top:9px}.s87{min-width:34px;min-height:11px;width:34px;height:5px}.f17{font-size:4px;font-size:calc(4px * var(--f));padding-top:3px;padding-bottom:3px}.ps65{margin-top:15px}.s88{width:320px;min-height:253px}.ps66{margin-left:10px}.s89{min-width:301px;width:301px;min-height:245px}.ps67{margin-left:13px;margin-top:12px}.s90{min-width:269px;width:269px;min-height:106px}.ps68{margin-top:6px}.s91{min-width:100px;width:100px;min-height:94px}.s92{min-width:62px;width:62px;height:32px}.f18{font-size:25px;font-size:calc(25px * var(--f));line-height:1.201}.ps69{margin-top:15px}.s93{min-width:100px;width:100px;height:19px}.f19{font-size:4px;font-size:calc(4px * var(--f))}.f20{font-size:6px;font-size:calc(6px * var(--f));line-height:1.668}.ps70{margin-top:18px}.s94{min-width:22px;width:22px;height:10px}.f21{font-size:4px;font-size:calc(4px * var(--f))}.ps71{margin-left:27px}.s95{min-width:142px;width:142px;min-height:106px;height:106px}.i9{width:142px;height:89px;top:9px}.ps72{margin-left:13px;margin-top:10px}.s96{min-width:269px;width:269px;height:37px}.f22{font-size:5px;font-size:calc(5px * var(--f));line-height:1.801}.ps73{margin-left:35px;margin-top:12px}.s97{min-width:235px;width:235px;min-height:53px}.s98{min-width:50px;width:50px;min-height:53px;height:53px}.i10{width:50px;height:50px;top:1px}.ps74{margin-left:32px;margin-top:16px}.s99{min-width:66px;width:66px;height:34px}.f23{font-size:3px;font-size:calc(3px * var(--f));line-height:1.668}.f24{font-size:4px;font-size:calc(4px * var(--f))}.ps75{margin-left:72px;margin-top:22px}.s100{min-width:15px;width:15px;min-height:22px;height:22px}.i11{width:15px;height:19px;top:2px}.ps76{margin-top:31px}.s101{min-width:320px;height:40px}.ps77{margin-top:9px}.s102{width:320px;min-height:23px}.ps78{margin-left:133px}.s103{min-width:173px;width:173px;min-height:23px}.s104{min-width:54px;width:54px;height:23px}.f25{font-size:3px;font-size:calc(3px * var(--f));line-height:1.668}.ps79{margin-left:90px;margin-top:11px}.s105{min-width:29px;width:29px;min-height:11px;height:11px}.i12{left:0;width:29px;height:11px}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-db99c3.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-b52991.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.f5bf09.css" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body;e.style.setProperty("--z",1);var t=window.innerWidth,n=getComputedStyle(e).getPropertyValue("--s");if(320==n){if(t<320)return;t=Math.min(479,t)}else if(480==n){if(t<480)return;t=Math.min(610,t)}else t=n;e.style.setProperty("--z",Math.trunc(t/n*1e3)/1e3)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div data-block-group="0" class="v8 ps54 s71 c17 z43">
<div class="ps55">
</div>
<div class="ps56 v8 s72">
<div class="v9 ps57 s73">
<div class="v9 ps58 s74 c18 z44">
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
<img src="images/untitled-3-1--708.png" class="i8">
</picture>
</div>
<div class="v10 ps59 s75 z45">
<ul class="menu-dropdown v9 ps58 s76 m2" id="m1">
<li class="v9 ps58 s77">
<a href="./" class="ml2"><div class="menu-content mcv2"><div class="v9 ps58 s78 c19 z46"><div class="v9 ps60 s79 c18 z47"><p class="p6 f16">Home</p></div></div></div></a>
</li>
<li class="v9 ps61 s77">
<div class="menu-content mcv2">
<div class="v9 ps58 s78 c19 z46">
<div class="v9 ps60 s79 c18 z47">
<p class="p6 f16">Rentals</p>
</div>
</div>
</div>
<ul class="menu-dropdown v11 ps58 s80 m2 z48">
<li class="v9 ps58 s81">
<a href="loft-apartment.php" class="ml2"><div class="menu-content mcv2"><div class="v9 ps58 s82 c19 z46"><div class="v9 ps62 s83 c18 z47"><p class="p6 f16">Loft Apartment</p></div></div></div></a>
</li>
<li class="v9 ps63 s84">
<a href="studio-apartment.php" class="ml2"><div class="menu-content mcv2"><div class="v9 ps58 s85 c19 z46"><div class="v9 ps62 s86 c18 z47"><p class="p6 f16">Studio Apartment</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v9 ps61 s77">
<a href="#" class="ml2"><div class="menu-content mcv2"><div class="v9 ps58 s78 c19 z46"><div class="v9 ps60 s79 c18 z47"><p class="p6 f16">About</p></div></div></div></a>
</li>
<li class="v9 ps61 s77">
<a href="maintiance.php" class="ml2"><div class="menu-content mcv2"><div class="v9 ps58 s78 c19 z46"><div class="v9 ps60 s79 c18 z47"><p class="p6 f16">Maintiance</p></div></div></div></a>
</li>
<li class="v9 ps61 s77">
<a href="contact.php" class="ml2"><div class="menu-content mcv2"><div class="v9 ps58 s78 c19 z46"><div class="v9 ps60 s79 c18 z47"><p class="p6 f16">Contact</p></div></div></div></a>
</li>
</ul>
</div>
<div class="g2 v12 ps64 s87 c20 z49">
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
<a href="./logout-d12b45.php" class="a2 f17">LOGOUT</a>
<?php
    }
    else {
        $groupClass = 'g2';
        if($groupClass !== NULL) {
            echo "<style>.{$groupClass}{visibility:hidden}</style>";
        }
    }
?>

</div>
</div>
</div>
</div>
<div class="ps65 v8 s88 z46">
<div class="v9 ps66 s89 c21 z50">
<div class="v9 ps67 s90">
<div class="v9 ps68 s91">
<div class="v9 ps58 s92 c18 z51">
<h1 class="p7 f18">About</h1>
</div>
<div class="v9 ps69 s93 c18 z52">
<p class="p7 f19">Park Circle Apartments is Managed by&nbsp;</p>
<p class="p7 f20">SRP Consulting Group, LLC</p>
</div>
<div class="v9 ps70 s94 c18 z53">
<p class="p7"><a href="https://srpconsultinggroup.com" target="_blank" rel="noopener" class="f21">Website</a></p>
</div>
</div>
<div class="v9 ps71 s95 c18 z53">
<picture>
<source srcset="images/photo-copy-284.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/photo-copy-284.png 2x" media="(max-width:479px)">
<source srcset="images/photo-copy-426.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/photo-copy-426.png 2x" media="(max-width:767px)">
<source srcset="images/photo-copy-682.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/photo-copy-682.png 2x" media="(max-width:959px)">
<source srcset="images/photo-copy-426-1.webp 1x, images/photo-copy-852.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/photo-copy-426-1.png 1x, images/photo-copy-852.png 2x" media="(max-width:1199px)">
<source srcset="images/photo-copy-533.webp 1x, images/photo-copy-1066.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/photo-copy-533.png 1x, images/photo-copy-1066.png 2x" media="(max-width:1919px)">
<source srcset="images/photo-copy-853.webp 1x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/photo-copy-853.png 1x" media="(min-width:1920px)">
<img src="images/photo-copy-853.png" class="i9">
</picture>
</div>
</div>
<div class="v9 ps72 s96 c18 z54">
<p class="p7 f22">SRP Consulting Group, LLC is a business management, technology, development, design, healthcare, psychopharmacology, flight simulation, HEMS,&nbsp;&nbsp;&amp; musical production consulting business based out of Marienville, PA.&nbsp;</p>
</div>
<div class="v9 ps73 s97">
<div class="v9 ps58 s98 c18 z55">
<picture>
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-100.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-100.png 2x" media="(max-width:479px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-152.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-152.png 2x" media="(max-width:767px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-242.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-242.png 2x" media="(max-width:959px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-151.webp 1x, images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-302.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-151.png 1x, images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-302.png 2x" media="(max-width:1199px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-189.webp 1x, images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-378.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-189.png 1x, images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-378.png 2x" media="(max-width:1919px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-302-1.webp 1x, images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-604.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-302-1.png 1x, images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-604.png 2x" media="(min-width:1920px)">
<img src="images/512ba09f22fa5f7f3cc654ec31623cdc-sticker-2-604.png" class="i10">
</picture>
</div>
<div class="v9 ps74 s99 c18 z56">
<p class="p7 f19">Shea R. Patterson</p>
<p class="p7 f23">&nbsp;M.B.A. | B.S.B.A.</p>
<p class="p7 f24">Founder &amp; CEO</p>
<p class="p7 f19">SRP Consulting Group, LLC</p>
</div>
<div class="v9 ps75 s100 c18 z57">
<picture>
<source srcset="images/my-resume-885-30.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/my-resume-885-30.jpg 2x" media="(max-width:479px)">
<source srcset="images/my-resume-885-46.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/my-resume-885-46.jpg 2x" media="(max-width:767px)">
<source srcset="images/my-resume-885-72.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/my-resume-885-72.jpg 2x" media="(max-width:959px)">
<source srcset="images/my-resume-885-46-1.webp 1x, images/my-resume-885-92.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/my-resume-885-46-1.jpg 1x, images/my-resume-885-92.jpg 2x" media="(max-width:1199px)">
<source srcset="images/my-resume-885-57.webp 1x, images/my-resume-885-114.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/my-resume-885-57.jpg 1x, images/my-resume-885-114.jpg 2x" media="(max-width:1919px)">
<source srcset="images/my-resume-885-91.webp 1x, images/my-resume-885-182.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/my-resume-885-91.jpg 1x, images/my-resume-885-182.jpg 2x" media="(min-width:1920px)">
<img src="images/my-resume-885-182.jpg" class="i11">
</picture>
</div>
</div>
</div>
</div>
<div data-block-group="0" class="v8 ps76 s101 c22 z46">
<div class="ps55">
</div>
<div class="ps77 v8 s102">
<div class="v9 ps78 s103">
<div class="v9 ps58 s104 c18 z47">
<p class="p6 f25">Copyrights 2024</p>
<p class="p6 f25">SRP Consulting Group, LLC</p>
<p class="p6 f25">All Rights Reserved</p>
</div>
<div class="v9 ps79 s105 c18 z47">
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
<img src="images/copy-of-untitled-2-340.png" class="i12">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c16">
</div>
<script>var lwi=-1;function thresholdPassed(){var w=document.documentElement.clientWidth;var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();dpth="/";!function(){var e={},t={},n={};window.ld=function(a,r,o){var c=function(){"interactive"==document.readyState?(r&&r(),document.addEventListener("readystatechange",function(){"complete"==document.readyState&&o&&o()})):"complete"==document.readyState?(r&&r(),o&&o()):document.addEventListener("readystatechange",function(){"interactive"==document.readyState&&r&&r(),"complete"==document.readyState&&o&&o()})},d=(1<<a.length)-1,u=0,i=function(r){var o=a[r],i=function(){for(var t=0;t<a.length;t++){var r=(1<<t)-1;if((u&r)==r&&n[a[t]]){if(!e[a[t]]){var o=document.createElement("script");o.textContent=n[a[t]],document.body.appendChild(o),e[a[t]]=!0}if((u|=1<<t)==d)return c(),0}}return 1};if(null==t[o]){t[o]=[];var f=new XMLHttpRequest;f.open("GET",o,!0),f.onload=function(){n[o]=f.responseText,[].forEach.call(t[o],function(e){e()})},t[o].push(i),f.send()}else{if(e[o])return i();t[o].push(i)}return 1};if(a.length)for(var f=0;f<a.length&&i(f);f++);else c()}}();ld([],function(){!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var a=!1,o=document.body.parentNode;(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&"none"!=getComputedStyle(o).getPropertyValue("scroll-snap-type")&&(o.setAttribute("data-snap",o.style.scrollSnapType),o.style.scrollSnapType="none",a=!0);var n=0;if(e.hash.length>1){var r=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));r||(r=1);var i=e.hash.slice(1),s=document.getElementById(i);if(null===s&&null===(s=document.querySelector('[name="'+i+'"]')))return;var u=/chrome/i.test(navigator.userAgent);n=u?s.getBoundingClientRect().top*r+pageYOffset:(s.getBoundingClientRect().top+pageYOffset)*r}else if(a)for(var l=document.querySelectorAll("[data-block-group]"),c=0;c<l.length;c++)if("none"!=getComputedStyle(l[c]).getPropertyValue("scroll-snap-align")){s=l[c];break}if(a)window.smoothScroll(t,s,1);else if("scrollBehavior"in document.documentElement.style)scroll({top:n,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var d=pageYOffset,m=null;requestAnimationFrame(function e(t){m||(m=t);var a=(t-m)/400;scrollTo(0,d<n?(n-d)*a+d:d-(d-n)*a),a<1?requestAnimationFrame(e):scrollTo(0,n)})}else scrollTo(0,n);t.preventDefault()},!1)})}(),window.smoothScroll=function(e,t,a,o){e.stopImmediatePropagation();var n,r=pageYOffset;t?(("string"==typeof t||t instanceof String)&&(t=document.querySelector(t)),n=t.getBoundingClientRect().top):n=-r;var i=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));i||(i=1);var s=n*i+(/chrome/i.test(navigator.userAgent)?0:r*(i-1)),u=null;function l(){c(window.performance.now?window.performance.now():Date.now())}function c(e){null===u&&(u=e);var n=(e-u)/1e3,i=function(e,t,a){switch(o){case"linear":break;case"easeInQuad":e*=e;break;case"easeOutQuad":e=1-(1-e)*(1-e);break;case"easeInCubic":e*=e*e;break;case"easeOutCubic":e=1-Math.pow(1-e,3);break;case"easeInOutCubic":e=e<.5?4*e*e*e:1-Math.pow(-2*e+2,3)/2;break;case"easeInQuart":e*=e*e*e;break;case"easeOutQuart":e=1-Math.pow(1-e,4);break;case"easeInOutQuart":e=e<.5?8*e*e*e*e:1-Math.pow(-2*e+2,4)/2;break;case"easeInQuint":e*=e*e*e*e;break;case"easeOutQuint":e=1-Math.pow(1-e,5);break;case"easeInOutQuint":e=e<.5?16*e*e*e*e*e:1-Math.pow(-2*e+2,5)/2;break;case"easeInCirc":e=1-Math.sqrt(1-Math.pow(e,2));break;case"easeOutCirc":e=Math.sqrt(1-Math.pow(0,2));break;case"easeInOutCirc":e=e<.5?(1-Math.sqrt(1-Math.pow(2*e,2)))/2:(Math.sqrt(1-Math.pow(-2*e+2,2))+1)/2;break;case"easeInOutQuad":default:e=e<.5?2*e*e:1-Math.pow(-2*e+2,2)/2}e>1&&(e=1);return t+a*e}(n/a,r,s);if(window.scrollTo(0,i),n<a)"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120);else if(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1){if(t)for(var d=t;d!=document.body;){if(d.getAttribute("data-block-group")){d.scrollIntoView();break}d=d.parentNode}setTimeout(function(){var e=document.body.parentNode;e.style.scrollSnapType=e.getAttribute("data-snap"),e.removeAttribute("data-snap")},100)}}return"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120),!1};!function(){var e=null;if(location.hash){var t=location.hash.replace("#",""),n=function(){var o=document.getElementById(t);null===o&&(o=document.querySelector('[name="'+t+'"]')),o&&o.scrollIntoView(!0),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")?setTimeout(n,100):null!=e&&setTimeout(e,100)};n()}else null!=e&&e()}();});ld(["js/jquery.6ad8c3.js","js/jqueryui.6ad8c3.js","js/menu.6ad8c3.js","js/menu-dropdown-animations.6ad8c3.js","js/menu-dropdown.f5bf09.js"],function(){initMenu($('#m1')[0]);});</script>
</body>
</html>