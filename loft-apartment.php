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
            $redirect = 'loft-apartment.php';
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
<title>Loft Apartment</title>
<meta name="referrer" content="same-origin">
<link rel="canonical" href="http://parkcirclerentals.com/loft-apartment.php">
<meta name="robots" content="max-image-preview:large">
<meta name="twitter:card" content="summary">
<meta property="og:title" content="Loft Apartment">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<link rel="preload" href="css/Quicksand-Bold.woff2" as="font" crossorigin>
<link rel="preload" href="css/LondrinaSolid-Regular.woff2" as="font" crossorigin>
<style>html,body{-webkit-text-zoom:reset !important}@font-face{font-display:block;font-family:"Quicksand 3";src:url('css/Quicksand-Bold.woff2') format('woff2'),url('css/Quicksand-Bold.woff') format('woff');font-weight:700}@font-face{font-display:block;font-family:"Londrina Solid";src:url('css/LondrinaSolid-Regular.woff2') format('woff2'),url('css/LondrinaSolid-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Tomorrow 5";src:url('css/Tomorrow-SemiBold.woff2') format('woff2'),url('css/Tomorrow-SemiBold.woff') format('woff');font-weight:600}@font-face{font-display:block;font-family:"Redacted Script 1";src:url('css/redacted-script-regular.woff2') format('woff2'),url('css/redacted-script-regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Quicksand 2";src:url('css/Quicksand-Medium.woff2') format('woff2'),url('css/Quicksand-Medium.woff') format('woff');font-weight:500}@font-face{font-display:block;font-family:"Quicksand 1";src:url('css/Quicksand-Regular.woff2') format('woff2'),url('css/Quicksand-Regular.woff') format('woff');font-weight:400}@font-face{font-display:block;font-family:"Oxygen 2";src:url('css/Oxygen-Bold.woff2') format('woff2'),url('css/Oxygen-Bold.woff') format('woff');font-weight:700}body>div{font-size:0}p,span,h1,h2,h3,h4,h5,h6,a,li{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important;text-size-adjust:none !important;max-height:10000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;line-break:normal;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}[data-marker]::before{content:attr(data-marker) ' ';-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right;shape-outside:content-box}.btf{display:none}.plyr{min-width:0 !important}html{font-family:sans-serif}body{font-size:0;margin:0;--z:1;zoom:var(--z)}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=date],input[type=email],input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial !important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
@-webkit-keyframes fadeInUp{from{opacity:0;-webkit-transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0)}}@keyframes fadeInUp{from{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:translate3d(0, 0, 0)}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}
.animated{-webkit-animation-fill-mode:both;animation-fill-mode:both}.animated.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}#b{background-color:#7b8078}.v48{display:block;vertical-align:top}.ps221{position:relative;margin-top:0}.s281{width:100%;min-width:1920px;height:386px;padding-bottom:0}.c71{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:transparent;box-shadow:0 3px 4px #000}.z113{z-index:57;pointer-events:none}.ps222{display:inline-block;width:0;height:0}.ps223{position:relative;margin-top:10px}.s282{width:1920px;margin-left:auto;margin-right:auto;min-height:354px}.v49{display:inline-block;vertical-align:top}.ps224{position:relative;margin-left:56px;margin-top:0}.s283{min-width:1796px;width:1796px;min-height:354px}.ps225{position:relative;margin-left:0;margin-top:0}.s284{min-width:358px;width:358px;min-height:354px;height:354px}.z114{z-index:63;pointer-events:auto}.i26{position:absolute;left:2px;width:354px;height:354px;top:0;-webkit-filter:drop-shadow(0 2px 4px #000);-moz-filter:drop-shadow(0 2px 4px #000);filter:drop-shadow(0 2px 4px #000);will-change:filter;border:0}.v50{display:inline-block;vertical-align:top;overflow:visible}.ps226{position:relative;margin-left:239px;margin-top:252px}.s285{min-width:994px;width:994px;height:88px}.z115{z-index:64;pointer-events:auto}.s286{min-width:994px;width:994px;min-height:88px;height:88px}.m9{padding:0px 0px 0px 0px}.ml9{outline:0}.s287{min-width:194px;width:194px;height:88px;box-shadow:0 2px 4px #000;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.mcv9{display:inline-block}.s288{min-width:194px;width:194px;min-height:88px}.c73{border:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:#fff}.z116{pointer-events:none}.ps227{position:relative;margin-left:0;margin-top:23px}.s289{min-width:194px;width:194px;overflow:hidden;height:42px}.z117{pointer-events:auto}.p19{text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f57{font-family:"Quicksand 3";font-size:32px;font-size:calc(32px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f57:hover{}.ps228{position:relative;margin-left:6px;margin-top:0}.v51{display:none;vertical-align:top}.s290{min-width:335px;width:335px;min-height:148px;height:148px}.z118{z-index:9999}.s291{min-width:299px;width:299px;height:66px}.s292{min-width:299px;width:299px;min-height:66px}.ps229{position:relative;margin-left:0;margin-top:12px}.s293{min-width:299px;width:299px;overflow:hidden;height:42px}.ps230{position:relative;margin-left:0;margin-top:16px}.s294{min-width:335px;width:335px;height:66px}.s295{min-width:335px;width:335px;min-height:66px}.s296{min-width:335px;width:335px;overflow:hidden;height:42px}.v52{display:inline-block;vertical-align:top;overflow:hidden;outline:0}.ps231{position:relative;margin-left:1590px;margin-top:-300px}.s297{min-width:206px;min-height:69px;box-sizing:border-box;width:206px;height:35px;padding-right:0}.c74{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#000;color:#fff;transition:color 0.20s, border-color 0.20s, background-color 0.20s, background-image 0.20s;transition-timing-function:linear}.z119{z-index:65;pointer-events:auto}.a9{display:inline-block;width:100%;height:100%}.f58{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.251;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;cursor:pointer;padding-top:17px;padding-bottom:17px}.c74:hover{background-color:rgba(0,0,0,.5);background-clip:padding-box;border-color:#000}.c74:active{background-color:#808080;transition:initial}.c75{display:block;position:relative;pointer-events:none;width:max(1920px, 100%);overflow:hidden;margin-top:61px;min-height:1421px}.ps232{position:relative;margin-top:3px}.s298{width:1920px;margin-left:auto;margin-right:auto;height:1411px}.ps233{position:relative;margin-left:20px;margin-top:-1px}.s299{min-width:1882px;width:1882px;min-height:1413px}.z120{z-index:4}.s300{min-width:1882px;width:1882px;min-height:1413px;line-height:0}.s301{min-width:1880px;width:1880px;min-height:1411px}.c76{border:1px solid #000;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background-color:transparent;box-shadow:0 2px 4px #000}.z121{z-index:61}.ps234{position:relative;margin-left:33px;margin-top:-1393px}.s302{min-width:1808px;width:1808px;min-height:1365px;height:1365px}.z122{z-index:58;pointer-events:auto}.i27{position:absolute;left:0;width:1808px;height:1356px;top:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps235{position:relative;margin-left:62px;margin-top:-337px}.s303{min-width:968px;width:968px;min-height:256px}.c77{border:0;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;background-color:rgba(0,0,0,.5);box-shadow:0 2px 4px rgba(0,0,0,.4)}.z123{z-index:59}.ps236{position:relative;margin-left:73px;margin-top:-304px}.s304{min-width:944px;width:944px;overflow:hidden;height:189px}.z124{z-index:60;pointer-events:auto}.p20{text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f59{font-family:"Londrina Solid";font-size:153px;font-size:calc(153px * var(--f));line-height:1.184;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#fff;background-color:initial;text-shadow:1px 2px 2px #000}.f59:hover{}.ps237{position:relative;margin-top:113px}.s305{width:1920px;margin-left:auto;margin-right:auto;min-height:8437px}.ps238{position:relative;margin-left:47px;margin-top:2px}.s306{min-width:1806px;width:1806px;min-height:693px}.c78{border:1px solid #000;-webkit-border-radius:13px;-moz-border-radius:13px;border-radius:13px;background-color:#fff;box-shadow:0 2px 4px #000}.ps239{position:relative;margin-left:52px;margin-top:110px}.z125{z-index:67}.ps240{position:relative;margin-left:72px;margin-top:65px}.s307{min-width:1238px;width:1238px;overflow:hidden;height:563px}.z126{z-index:68;pointer-events:auto}.f60{font-family:"Londrina Solid";font-size:115px;font-size:calc(115px * var(--f));line-height:1.184;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:1px 2px 2px #000}.f60:hover{}.f61{font-family:"Londrina Solid";font-size:153px;font-size:calc(153px * var(--f));line-height:1.184;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:1px 2px 2px #000}.f61:hover{}.f62{font-family:"Quicksand 3";font-size:28px;font-size:calc(28px * var(--f));line-height:1.751;font-weight:700;font-style:normal;text-decoration:none;text-transform:none;letter-spacing:normal;color:#000;background-color:initial;text-shadow:none}.f62:hover{}.ps241{margin-left:48px}.p21{padding-bottom:0;text-align:left;text-indent:-18px;padding-right:0}.ps242{position:relative;margin-left:45px;margin-top:681px}.s308{min-width:1832px;width:1832px;min-height:6248px}.z127{z-index:62}.s309{min-width:1820px;width:1820px;min-height:1130px}.z128{z-index:54}.s310{min-width:1818px;width:1818px;height:1128px}.z129{z-index:55}.ps243{position:relative;margin-left:18px;margin-top:24px}.s311{min-width:1781px;width:1781px;min-height:1077px;height:1077px}.z130{z-index:56;pointer-events:auto}.i28{position:absolute;left:0;width:1781px;height:1077px;top:0;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps244{position:relative;margin-left:0;margin-top:43px}.s312{min-width:1832px;width:1832px;min-height:5075px}.z131{z-index:5}.ps245{position:relative;margin-left:2px;margin-top:0}.s313{min-width:1830px;width:1830px;min-height:4330px}.ps246{position:relative;margin-left:0;margin-top:2835px}.s314{min-width:869px;width:869px;min-height:1488px;line-height:0}.s315{min-width:869px;width:869px;min-height:674px}.z132{z-index:15}.s316{min-width:869px;width:869px;min-height:674px;line-height:0}.s317{min-width:867px;width:867px;min-height:672px}.z133{z-index:16}.ps247{position:relative;margin-left:17px;margin-top:-660px}.s318{min-width:829px;width:829px;min-height:659px;height:659px}.z134{z-index:17;pointer-events:auto}.i29{position:absolute;left:0;width:829px;height:622px;top:18px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps248{position:relative;margin-left:0;margin-top:100px}.s319{min-width:540px;width:540px;min-height:714px}.z135{z-index:18}.s320{min-width:538px;width:538px;height:712px}.z136{z-index:19}.ps249{position:relative;margin-left:16px;margin-top:27px}.s321{min-width:509px;width:509px;min-height:661px;height:661px}.z137{z-index:20;pointer-events:auto}.i30{position:absolute;left:7px;width:496px;height:661px;top:0;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps250{position:relative;margin-left:6px;margin-top:-4323px}.s322{min-width:1171px;width:1171px;min-height:4330px;line-height:0}.s323{min-width:1171px;width:1171px;min-height:4330px}.z138{z-index:48}.s324{min-width:867px;width:867px;height:672px}.z139{z-index:52}.ps251{position:relative;margin-left:18px;margin-top:12px}.s325{min-width:832px;width:832px;min-height:640px;height:640px}.z140{z-index:53;pointer-events:auto}.i31{position:absolute;left:0;width:832px;height:624px;top:8px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps252{position:relative;margin-left:631px;margin-top:2942px}.s326{min-width:540px;width:540px;min-height:714px;line-height:0}.s327{min-width:538px;width:538px;min-height:712px}.z141{z-index:50}.ps253{position:relative;margin-left:36px;margin-top:-688px}.s328{min-width:485px;width:485px;min-height:659px;height:659px}.z142{z-index:49;pointer-events:auto}.i32{position:absolute;left:0;width:485px;height:647px;top:6px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps254{position:relative;margin-left:5px;margin-top:-3620px}.z143{z-index:9}.z144{z-index:14}.ps255{position:relative;margin-left:14px;margin-top:-657px}.s329{min-width:838px;width:838px;min-height:637px;height:637px}.z145{z-index:13;pointer-events:auto}.i33{position:absolute;left:0;width:838px;height:629px;top:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps256{position:relative;margin-left:0;margin-top:-2911px}.z146{z-index:39}.z147{z-index:44}.ps257{position:relative;margin-left:21px;margin-top:-657px}.s330{min-width:837px;width:837px;min-height:640px;height:640px}.z148{z-index:43;pointer-events:auto}.i34{position:absolute;left:0;width:837px;height:628px;top:6px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps258{position:relative;margin-left:4px;margin-top:-2209px}.z149{z-index:21}.z150{z-index:26}.ps259{position:relative;margin-left:17px;margin-top:-658px}.z151{z-index:25;pointer-events:auto}.ps260{position:relative;margin-left:949px;margin-top:-4330px}.s331{min-width:879px;width:879px;min-height:3509px;line-height:0}.z152{z-index:6}.z153{z-index:8}.ps261{position:relative;margin-left:12px;margin-top:-657px}.s332{min-width:837px;width:837px;min-height:637px;height:637px}.z154{z-index:7;pointer-events:auto}.i35{position:absolute;left:0;width:837px;height:628px;top:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps262{position:relative;margin-left:0;margin-top:36px}.s333{min-width:879px;width:879px;min-height:674px}.z155{z-index:36}.s334{min-width:879px;width:879px;min-height:674px;line-height:0}.s335{min-width:877px;width:877px;min-height:672px}.z156{z-index:41}.ps263{position:relative;margin-left:25px;margin-top:-657px}.z157{z-index:40;pointer-events:auto}.ps264{position:relative;margin-left:0;margin-top:35px}.z158{z-index:33}.z159{z-index:34}.ps265{position:relative;margin-left:14px;margin-top:16px}.s336{min-width:834px;width:834px;min-height:640px;height:640px}.z160{z-index:35;pointer-events:auto}.i36{position:absolute;left:0;width:834px;height:626px;top:7px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps266{position:relative;margin-left:0;margin-top:28px}.z161{z-index:12}.z162{z-index:10}.ps267{position:relative;margin-left:17px;margin-top:21px}.s337{min-width:830px;width:830px;min-height:630px;height:630px}.z163{z-index:11;pointer-events:auto}.i37{position:absolute;left:0;width:830px;height:623px;top:3px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps268{position:relative;margin-left:5px;margin-top:40px}.s338{min-width:874px;width:874px;min-height:674px}.z164{z-index:30}.s339{min-width:872px;width:872px;height:672px}.z165{z-index:31}.ps269{position:relative;margin-left:14px;margin-top:17px}.s340{min-width:846px;width:846px;min-height:635px;height:635px}.z166{z-index:32;pointer-events:auto}.i38{position:absolute;left:0;width:846px;height:635px;top:0;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps270{position:relative;margin-left:1290px;margin-top:-714px}.z167{z-index:24}.z168{z-index:23}.ps271{position:relative;margin-left:23px;margin-top:-689px}.s341{min-width:493px;width:493px;min-height:664px;height:664px}.z169{z-index:22;pointer-events:auto}.i39{position:absolute;left:0;width:493px;height:657px;top:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps272{position:relative;margin-left:0;margin-top:31px}.s342{min-width:1830px;width:1830px;min-height:714px}.z170{z-index:42}.z171{z-index:46}.ps273{position:relative;margin-left:29px;margin-top:21px}.s343{min-width:486px;width:486px;min-height:664px;height:664px}.z172{z-index:47;pointer-events:auto}.i40{position:absolute;left:0;width:486px;height:648px;top:8px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps274{position:relative;margin-left:108px;margin-top:0}.z173{z-index:27}.z174{z-index:28}.ps275{position:relative;margin-left:26px;margin-top:26px}.s344{min-width:486px;width:486px;min-height:659px;height:659px}.z175{z-index:29;pointer-events:auto}.i41{position:absolute;left:0;width:486px;height:648px;top:5px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}.ps276{position:relative;margin-left:102px;margin-top:0}.z176{z-index:45}.z177{z-index:37}.ps277{position:relative;margin-left:27px;margin-top:31px}.s345{min-width:486px;width:486px;min-height:650px;height:650px}.z178{z-index:38;pointer-events:auto}.i42{position:absolute;left:0;width:486px;height:648px;top:1px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));-moz-filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));filter:drop-shadow(0 2px 4px rgba(0,0,0,.4));will-change:filter;border:0}body{--d:0;--s:1920}@media (min-width:1200px) and (max-width:1919px) {.s281{min-width:1200px;height:241px}.ps223{margin-top:6px}.s282{width:1200px;min-height:221px}.ps224{margin-left:35px}.s283{min-width:1123px;width:1123px;min-height:221px}.s284{min-width:224px;width:224px;min-height:221px;height:221px}.i26{width:221px;height:221px}.ps226{margin-left:149px;margin-top:158px}.s285{min-width:621px;width:621px;height:55px}.s286{min-width:621px;width:621px;min-height:55px;height:55px}.s287{min-width:121px;width:121px;height:55px}.s288{min-width:121px;width:121px;min-height:55px}.ps227{margin-top:14px}.s289{min-width:121px;width:121px;height:27px}.f57{font-size:20px;font-size:calc(20px * var(--f))}.ps228{margin-left:4px}.s290{min-width:210px;width:210px;min-height:92px;height:92px}.s291{min-width:187px;width:187px;height:41px}.s292{min-width:187px;width:187px;min-height:41px}.ps229{margin-top:7px}.s293{min-width:187px;width:187px;height:27px}.ps230{margin-top:10px}.s294{min-width:210px;width:210px;height:41px}.s295{min-width:210px;width:210px;min-height:41px}.s296{min-width:210px;width:210px;height:27px}.ps231{margin-left:0;margin-top:34px}.s297{min-width:129px;min-height:43px;width:129px;height:23px}.f58{font-size:18px;font-size:calc(18px * var(--f));line-height:1.279;padding-top:10px;padding-bottom:10px}.c75{width:max(1200px, 100%);margin-top:37px;min-height:892px}.s298{width:1200px;height:882px}.ps233{margin-left:12px}.s299{min-width:1177px;width:1177px;min-height:884px}.s300{min-width:1177px;width:1177px;min-height:884px}.s301{min-width:1175px;width:1175px;min-height:882px}.ps234{margin-left:21px;margin-top:-871px}.s302{min-width:1130px;width:1130px;min-height:853px;height:853px}.i27{width:1130px;height:848px;top:2px}.ps235{margin-left:39px;margin-top:-211px}.s303{min-width:605px;width:605px;min-height:160px}.ps236{margin-left:46px;margin-top:-190px}.s304{min-width:590px;width:590px;height:118px}.f59{font-size:96px;font-size:calc(96px * var(--f));line-height:1.188}.ps237{margin-top:67px}.s305{width:1200px;min-height:5277px}.ps238{margin-left:29px}.s306{min-width:1129px;width:1129px;min-height:433px}.ps239{margin-left:32px;margin-top:68px}.ps240{margin-left:45px;margin-top:41px}.s307{min-width:774px;width:774px;height:352px}.f60{font-size:72px;font-size:calc(72px * var(--f));line-height:1.182}.f61{font-size:96px;font-size:calc(96px * var(--f));line-height:1.188}.f62{font-size:18px;font-size:calc(18px * var(--f));line-height:1.723}.ps241{margin-left:30px}.p21{text-indent:-11px}.ps242{margin-left:28px;margin-top:425px}.s308{min-width:1145px;width:1145px;min-height:3906px}.s309{min-width:1138px;width:1138px;min-height:707px}.s310{min-width:1136px;width:1136px;height:705px}.ps243{margin-left:11px;margin-top:15px}.s311{min-width:1113px;width:1113px;min-height:673px;height:673px}.i28{width:1113px;height:673px}.ps244{margin-top:26px}.s312{min-width:1145px;width:1145px;min-height:3173px}.ps245{margin-left:1px}.s313{min-width:1144px;width:1144px;min-height:2707px}.ps246{margin-top:1772px}.s314{min-width:544px;width:544px;min-height:931px}.s315{min-width:544px;width:544px;min-height:422px}.s316{min-width:544px;width:544px;min-height:422px}.s317{min-width:542px;width:542px;min-height:420px}.ps247{margin-left:11px;margin-top:-413px}.s318{min-width:518px;width:518px;min-height:412px;height:412px}.i29{width:518px;height:389px;top:11px}.ps248{margin-top:62px}.s319{min-width:338px;width:338px;min-height:447px}.s320{min-width:336px;width:336px;height:445px}.ps249{margin-left:10px;margin-top:17px}.s321{min-width:318px;width:318px;min-height:413px;height:413px}.i30{left:4px;width:310px;height:413px}.ps250{margin-left:4px;margin-top:-2703px}.s322{min-width:732px;width:732px;min-height:2707px}.s323{min-width:732px;width:732px;min-height:2707px}.s324{min-width:542px;width:542px;height:420px}.ps251{margin-left:11px;margin-top:8px}.s325{min-width:520px;width:520px;min-height:400px;height:400px}.i31{width:520px;height:390px;top:5px}.ps252{margin-left:394px;margin-top:1838px}.s326{min-width:338px;width:338px;min-height:447px}.s327{min-width:336px;width:336px;min-height:445px}.ps253{margin-left:23px;margin-top:-430px}.s328{min-width:303px;width:303px;min-height:412px;height:412px}.i32{width:303px;height:404px;top:4px}.ps254{margin-left:3px;margin-top:-2263px}.ps255{margin-left:9px;margin-top:-411px}.s329{min-width:524px;width:524px;min-height:398px;height:398px}.i33{width:524px;height:393px;top:2px}.ps256{margin-top:-1820px}.ps257{margin-left:13px;margin-top:-411px}.s330{min-width:523px;width:523px;min-height:400px;height:400px}.i34{width:523px;height:392px;top:4px}.ps258{margin-left:2px;margin-top:-1381px}.ps259{margin-left:11px;margin-top:-412px}.ps260{margin-left:593px;margin-top:-2707px}.s331{min-width:550px;width:550px;min-height:2194px}.ps261{margin-left:8px;margin-top:-411px}.s332{min-width:523px;width:523px;min-height:398px;height:398px}.i35{width:523px;height:392px;top:3px}.ps262{margin-top:22px}.s333{min-width:550px;width:550px;min-height:422px}.s334{min-width:550px;width:550px;min-height:422px}.s335{min-width:548px;width:548px;min-height:420px}.ps263{margin-left:16px;margin-top:-411px}.ps264{margin-top:21px}.ps265{margin-left:9px;margin-top:10px}.s336{min-width:521px;width:521px;min-height:400px;height:400px}.i36{width:521px;height:391px;top:4px}.ps266{margin-top:17px}.ps267{margin-left:11px;margin-top:13px}.s337{min-width:519px;width:519px;min-height:394px;height:394px}.i37{width:519px;height:389px}.ps268{margin-left:3px;margin-top:24px}.s338{min-width:547px;width:547px;min-height:422px}.s339{min-width:545px;width:545px;height:420px}.ps269{margin-left:9px;margin-top:11px}.s340{min-width:529px;width:529px;min-height:397px;height:397px}.i38{width:529px;height:397px}.ps270{margin-left:806px;margin-top:-447px}.ps271{margin-left:15px;margin-top:-431px}.s341{min-width:308px;width:308px;min-height:415px;height:415px}.i39{width:308px;height:411px;top:2px}.ps272{margin-top:19px}.s342{min-width:1144px;width:1144px;min-height:447px}.ps273{margin-left:18px;margin-top:13px}.s343{min-width:304px;width:304px;min-height:415px;height:415px}.i40{width:304px;height:405px;top:5px}.ps274{margin-left:67px}.ps275{margin-left:16px;margin-top:16px}.s344{min-width:304px;width:304px;min-height:412px;height:412px}.i41{width:304px;height:405px;top:4px}.ps276{margin-left:63px}.ps277{margin-left:17px;margin-top:19px}.s345{min-width:304px;width:304px;min-height:406px;height:406px}.i42{width:304px;height:405px}body{--d:1;--s:1200}}@media (min-width:960px) and (max-width:1199px) {.s281{min-width:960px;height:193px}.ps223{margin-top:5px}.s282{width:960px;min-height:177px}.ps224{margin-left:28px}.s283{min-width:898px;width:898px;min-height:177px}.s284{min-width:179px;width:179px;min-height:177px;height:177px}.i26{left:1px;width:177px;height:177px}.ps226{margin-left:119px;margin-top:126px}.s285{min-width:497px;width:497px;height:44px}.s286{min-width:497px;width:497px;min-height:44px;height:44px}.s287{min-width:97px;width:97px;height:44px}.s288{min-width:97px;width:97px;min-height:44px}.ps227{margin-top:11px}.s289{min-width:97px;width:97px;height:22px}.f57{font-size:16px;font-size:calc(16px * var(--f))}.ps228{margin-left:3px}.s290{min-width:168px;width:168px;min-height:74px;height:74px}.s291{min-width:150px;width:150px;height:33px}.s292{min-width:150px;width:150px;min-height:33px}.ps229{margin-top:5px}.s293{min-width:150px;width:150px;height:22px}.ps230{margin-top:8px}.s294{min-width:168px;width:168px;height:33px}.s295{min-width:168px;width:168px;min-height:33px}.s296{min-width:168px;width:168px;height:22px}.ps231{margin-left:0;margin-top:27px}.s297{min-width:103px;min-height:34px;width:103px;height:18px}.f58{font-size:14px;font-size:calc(14px * var(--f));line-height:1.287;padding-top:8px;padding-bottom:8px}.c75{width:max(960px, 100%);margin-top:29px;min-height:716px}.s298{width:960px;height:706px}.ps233{margin-left:9px}.s299{min-width:942px;width:942px;min-height:708px}.s300{min-width:942px;width:942px;min-height:708px}.s301{min-width:940px;width:940px;min-height:706px}.ps234{margin-left:17px;margin-top:-698px}.s302{min-width:904px;width:904px;min-height:682px;height:682px}.i27{width:904px;height:678px;top:2px}.ps235{margin-left:32px;margin-top:-170px}.s303{min-width:484px;width:484px;min-height:128px}.ps236{margin-left:37px;margin-top:-153px}.s304{min-width:472px;width:472px;height:94px}.f59{font-size:76px;font-size:calc(76px * var(--f));line-height:1.185}.ps237{margin-top:51px}.s305{width:960px;min-height:4224px}.ps238{margin-left:23px}.s306{min-width:903px;width:903px;min-height:346px}.ps239{margin-left:25px;margin-top:54px}.ps240{margin-left:36px;margin-top:33px}.s307{min-width:619px;width:619px;height:282px}.f60{font-size:57px;font-size:calc(57px * var(--f));line-height:1.194}.f61{font-size:76px;font-size:calc(76px * var(--f));line-height:1.185}.f62{font-size:14px;font-size:calc(14px * var(--f));line-height:1.787}.ps241{margin-left:24px}.p21{text-indent:-9px}.ps242{margin-left:22px;margin-top:340px}.s308{min-width:917px;width:917px;min-height:3126px}.s309{min-width:911px;width:911px;min-height:566px}.s310{min-width:909px;width:909px;height:564px}.ps243{margin-left:9px;margin-top:12px}.s311{min-width:890px;width:890px;min-height:538px;height:538px}.i28{width:890px;height:538px}.ps244{margin-top:21px}.s312{min-width:917px;width:917px;min-height:2539px}.ps245{margin-left:1px}.s313{min-width:916px;width:916px;min-height:2166px}.ps246{margin-top:1417px}.s314{min-width:436px;width:436px;min-height:746px}.s315{min-width:436px;width:436px;min-height:338px}.s316{min-width:436px;width:436px;min-height:338px}.s317{min-width:434px;width:434px;min-height:336px}.ps247{margin-left:9px;margin-top:-330px}.s318{min-width:414px;width:414px;min-height:330px;height:330px}.i29{width:414px;height:311px;top:9px}.ps248{margin-top:50px}.s319{min-width:271px;width:271px;min-height:358px}.s320{min-width:269px;width:269px;height:356px}.ps249{margin-left:8px;margin-top:13px}.s321{min-width:254px;width:254px;min-height:330px;height:330px}.i30{left:3px;width:248px;height:330px}.ps250{margin-left:3px;margin-top:-2163px}.s322{min-width:586px;width:586px;min-height:2166px}.s323{min-width:586px;width:586px;min-height:2166px}.s324{min-width:434px;width:434px;height:336px}.ps251{margin-left:9px;margin-top:6px}.s325{min-width:416px;width:416px;min-height:320px;height:320px}.i31{width:416px;height:312px;top:4px}.ps252{margin-left:315px;margin-top:1470px}.s326{min-width:271px;width:271px;min-height:358px}.s327{min-width:269px;width:269px;min-height:356px}.ps253{margin-left:19px;margin-top:-344px}.s328{min-width:242px;width:242px;min-height:330px;height:330px}.i32{width:242px;height:323px;top:3px}.ps254{margin-left:3px;margin-top:-1811px}.ps255{margin-left:7px;margin-top:-329px}.s329{min-width:419px;width:419px;min-height:318px;height:318px}.i33{width:419px;height:314px;top:2px}.ps256{margin-top:-1457px}.ps257{margin-left:11px;margin-top:-329px}.s330{min-width:418px;width:418px;min-height:320px;height:320px}.i34{width:418px;height:314px;top:3px}.ps258{margin-left:2px;margin-top:-1105px}.ps259{margin-left:9px;margin-top:-330px}.ps260{margin-left:474px;margin-top:-2166px}.s331{min-width:441px;width:441px;min-height:1755px}.ps261{margin-left:7px;margin-top:-329px}.s332{min-width:418px;width:418px;min-height:318px;height:318px}.i35{width:418px;height:314px;top:2px}.ps262{margin-top:17px}.s333{min-width:440px;width:440px;min-height:338px}.s334{min-width:440px;width:440px;min-height:338px}.s335{min-width:438px;width:438px;min-height:336px}.ps263{margin-left:13px;margin-top:-329px}.ps264{margin-top:16px}.ps265{margin-left:8px;margin-top:8px}.s336{min-width:417px;width:417px;min-height:320px;height:320px}.i36{width:417px;height:313px;top:3px}.ps266{margin-top:14px}.ps267{margin-left:9px;margin-top:10px}.s337{min-width:415px;width:415px;min-height:315px;height:315px}.i37{width:415px;height:311px;top:2px}.ps268{margin-left:3px;margin-top:18px}.s338{min-width:438px;width:438px;min-height:338px}.s339{min-width:436px;width:436px;height:336px}.ps269{margin-left:7px;margin-top:9px}.s340{min-width:423px;width:423px;min-height:318px;height:318px}.i38{width:423px;height:317px;top:1px}.ps270{margin-left:645px;margin-top:-358px}.ps271{margin-left:12px;margin-top:-345px}.s341{min-width:246px;width:246px;min-height:332px;height:332px}.i39{width:246px;height:328px;top:2px}.ps272{margin-top:15px}.s342{min-width:916px;width:916px;min-height:358px}.ps273{margin-left:15px;margin-top:10px}.s343{min-width:243px;width:243px;min-height:332px;height:332px}.i40{width:243px;height:324px;top:4px}.ps274{margin-left:53px}.ps275{margin-left:13px;margin-top:12px}.s344{min-width:243px;width:243px;min-height:330px;height:330px}.i41{width:243px;height:324px;top:3px}.ps276{margin-left:50px}.ps277{margin-left:14px;margin-top:15px}.s345{min-width:243px;width:243px;min-height:325px;height:325px}.i42{width:243px;height:324px;top:0}body{--d:2;--s:960}}@media (min-width:768px) and (max-width:959px) {.s281{min-width:768px;height:154px}.ps223{margin-top:4px}.s282{width:768px;min-height:141px}.ps224{margin-left:22px}.s283{min-width:720px;width:720px;min-height:141px}.s284{min-width:143px;width:143px;min-height:141px;height:141px}.i26{left:1px;width:141px;height:141px}.ps226{margin-left:96px;margin-top:101px}.s285{min-width:393px;width:393px;height:35px}.s286{min-width:393px;width:393px;min-height:35px;height:35px}.s287{min-width:77px;width:77px;height:35px}.s288{min-width:77px;width:77px;min-height:35px}.ps227{margin-top:9px}.s289{min-width:77px;width:77px;height:17px}.f57{font-size:12px;font-size:calc(12px * var(--f))}.ps228{margin-left:2px}.s290{min-width:128px;width:128px;min-height:58px;height:58px}.s291{min-width:114px;width:114px;height:26px}.s292{min-width:114px;width:114px;min-height:26px}.ps229{margin-top:4px}.s293{min-width:113px;width:113px;height:17px}.ps230{margin-top:6px}.s294{min-width:128px;width:128px;height:26px}.s295{min-width:128px;width:128px;min-height:26px}.s296{min-width:127px;width:127px;height:17px}.ps231{margin-left:5px;margin-top:22px}.s297{min-width:83px;min-height:28px;width:83px;height:14px}.f58{font-size:11px;font-size:calc(11px * var(--f));line-height:1.274;padding-top:7px;padding-bottom:7px}.c75{width:max(768px, 100%);margin-top:23px;min-height:574px}.s298{width:768px;height:564px}.ps233{margin-left:7px}.s299{min-width:754px;width:754px;min-height:566px}.s300{min-width:754px;width:754px;min-height:566px}.s301{min-width:752px;width:752px;min-height:564px}.ps234{margin-left:14px;margin-top:-557px}.s302{min-width:723px;width:723px;min-height:546px;height:546px}.i27{width:723px;height:542px;top:2px}.ps235{margin-left:26px;margin-top:-135px}.s303{min-width:387px;width:387px;min-height:102px}.ps236{margin-left:30px;margin-top:-122px}.s304{min-width:378px;width:378px;height:76px}.f59{font-size:61px;font-size:calc(61px * var(--f));line-height:1.198}.ps237{margin-top:40px}.s305{width:768px;min-height:3381px}.ps238{margin-left:18px}.s306{min-width:723px;width:723px;min-height:277px}.ps239{margin-left:20px;margin-top:43px}.ps240{margin-left:29px;margin-top:26px}.s307{min-width:495px;width:495px;height:225px}.f60{font-size:46px;font-size:calc(46px * var(--f));line-height:1.175}.f61{font-size:61px;font-size:calc(61px * var(--f));line-height:1.198}.f62{font-size:11px;font-size:calc(11px * var(--f));line-height:1.728}.ps241{margin-left:19px}.p21{text-indent:-7px}.ps242{margin-left:18px;margin-top:271px}.s308{min-width:733px;width:733px;min-height:2501px}.s309{min-width:729px;width:729px;min-height:453px}.s310{min-width:727px;width:727px;height:451px}.ps243{margin-left:7px;margin-top:10px}.s311{min-width:712px;width:712px;min-height:431px;height:431px}.i28{width:712px;height:431px}.ps244{margin-top:16px}.s312{min-width:733px;width:733px;min-height:2032px}.ps245{margin-left:0}.s313{min-width:733px;width:733px;min-height:1733px}.ps246{margin-top:1134px}.s314{min-width:349px;width:349px;min-height:597px}.s315{min-width:349px;width:349px;min-height:271px}.s316{min-width:349px;width:349px;min-height:271px}.s317{min-width:347px;width:347px;min-height:269px}.ps247{margin-left:8px;margin-top:-265px}.s318{min-width:332px;width:332px;min-height:264px;height:264px}.i29{width:332px;height:249px;top:7px}.ps248{margin-top:39px}.s319{min-width:217px;width:217px;min-height:287px}.s320{min-width:215px;width:215px;height:285px}.ps249{margin-left:7px;margin-top:11px}.s321{min-width:204px;width:204px;min-height:264px;height:264px}.i30{left:3px;width:198px;height:264px}.ps250{margin-left:3px;margin-top:-1731px}.s322{min-width:469px;width:469px;min-height:1733px}.s323{min-width:469px;width:469px;min-height:1733px}.s324{min-width:347px;width:347px;height:269px}.ps251{margin-left:7px;margin-top:5px}.s325{min-width:333px;width:333px;min-height:256px;height:256px}.i31{width:333px;height:250px;top:3px}.ps252{margin-left:252px;margin-top:1175px}.s326{min-width:217px;width:217px;min-height:287px}.s327{min-width:215px;width:215px;min-height:285px}.ps253{margin-left:15px;margin-top:-275px}.s328{min-width:194px;width:194px;min-height:264px;height:264px}.i32{width:194px;height:259px;top:2px}.ps254{margin-left:2px;margin-top:-1449px}.ps255{margin-left:6px;margin-top:-263px}.s329{min-width:335px;width:335px;min-height:255px;height:255px}.i33{width:335px;height:251px;top:2px}.ps256{margin-top:-1165px}.ps257{margin-left:8px;margin-top:-264px}.s330{min-width:335px;width:335px;min-height:256px;height:256px}.i34{width:335px;height:251px;top:3px}.ps258{margin-left:1px;margin-top:-884px}.ps259{margin-left:7px;margin-top:-265px}.ps260{margin-left:380px;margin-top:-1733px}.s331{min-width:353px;width:353px;min-height:1405px}.ps261{margin-left:5px;margin-top:-264px}.s332{min-width:335px;width:335px;min-height:255px;height:255px}.i35{width:335px;height:251px;top:2px}.ps262{margin-top:13px}.s333{min-width:353px;width:353px;min-height:271px}.s334{min-width:353px;width:353px;min-height:271px}.s335{min-width:351px;width:351px;min-height:269px}.ps263{margin-left:10px;margin-top:-263px}.ps264{margin-top:13px}.ps265{margin-left:5px;margin-top:6px}.s336{min-width:333px;width:333px;min-height:256px;height:256px}.i36{width:333px;height:250px;top:3px}.ps266{margin-top:10px}.ps267{margin-left:7px;margin-top:8px}.s337{min-width:332px;width:332px;min-height:252px;height:252px}.i37{width:332px;height:249px;top:1px}.ps268{margin-left:2px;margin-top:14px}.s338{min-width:351px;width:351px;min-height:271px}.s339{min-width:349px;width:349px;height:269px}.ps269{margin-left:5px;margin-top:7px}.s340{min-width:339px;width:339px;min-height:254px;height:254px}.i38{width:339px;height:254px}.ps270{margin-left:516px;margin-top:-287px}.ps271{margin-left:10px;margin-top:-276px}.s341{min-width:197px;width:197px;min-height:266px;height:266px}.i39{width:197px;height:263px;top:1px}.ps272{margin-top:12px}.s342{min-width:732px;width:732px;min-height:287px}.ps273{margin-left:11px;margin-top:8px}.s343{min-width:195px;width:195px;min-height:266px;height:266px}.i40{width:195px;height:260px;top:3px}.ps274{margin-left:42px}.ps275{margin-left:10px;margin-top:10px}.s344{min-width:195px;width:195px;min-height:264px;height:264px}.i41{width:195px;height:260px;top:2px}.ps276{margin-left:39px}.ps277{margin-left:11px;margin-top:12px}.s345{min-width:195px;width:195px;min-height:260px;height:260px}.i42{width:195px;height:260px;top:0}body{--d:3;--s:768}}@media (min-width:480px) and (max-width:767px) {.s281{min-width:480px;height:96px}.ps223{margin-top:2px}.s282{width:480px;min-height:88px}.ps224{margin-left:14px}.s283{min-width:450px;width:450px;min-height:88px}.s284{min-width:90px;width:90px;min-height:88px;height:88px}.i26{left:1px;width:88px;height:88px}.ps226{margin-left:59px;margin-top:64px}.s285{min-width:244px;width:244px;height:22px}.s286{min-width:244px;width:244px;min-height:22px;height:22px}.s287{min-width:48px;width:48px;height:22px}.s288{min-width:48px;width:48px;min-height:22px}.ps227{margin-top:5px}.s289{min-width:48px;width:48px;height:12px}.f57{font-size:8px;font-size:calc(8px * var(--f))}.ps228{margin-left:1px}.s290{min-width:85px;width:85px;min-height:36px;height:36px}.s291{min-width:76px;width:76px;height:16px}.s292{min-width:76px;width:76px;min-height:16px}.ps229{margin-top:2px}.s293{min-width:75px;width:75px;height:12px}.ps230{margin-top:4px}.s294{min-width:85px;width:85px;height:16px}.s295{min-width:85px;width:85px;min-height:16px}.s296{min-width:84px;width:84px;height:12px}.ps231{margin-left:5px;margin-top:14px}.s297{min-width:52px;min-height:17px;width:52px;height:9px}.f58{font-size:7px;font-size:calc(7px * var(--f));line-height:1.287;padding-top:4px;padding-bottom:4px}.c75{width:max(480px, 100%);margin-top:13px;min-height:363px}.s298{width:480px;height:353px}.ps233{margin-left:4px}.s299{min-width:472px;width:472px;min-height:355px}.s300{min-width:472px;width:472px;min-height:355px}.s301{min-width:470px;width:470px;min-height:353px}.ps234{margin-left:9px;margin-top:-349px}.s302{min-width:452px;width:452px;min-height:341px;height:341px}.i27{width:452px;height:339px;top:1px}.ps235{margin-left:16px;margin-top:-85px}.s303{min-width:242px;width:242px;min-height:64px}.ps236{margin-left:19px;margin-top:-76px}.s304{min-width:236px;width:236px;height:47px}.f59{font-size:38px;font-size:calc(38px * var(--f));line-height:1.185}.ps237{margin-top:21px}.s305{width:480px;min-height:2117px}.ps238{margin-left:11px}.s306{min-width:452px;width:452px;min-height:173px}.ps239{margin-left:12px;margin-top:26px}.ps240{margin-left:18px;margin-top:17px}.s307{min-width:310px;width:310px;height:141px}.f60{font-size:28px;font-size:calc(28px * var(--f));line-height:1.180}.f61{font-size:38px;font-size:calc(38px * var(--f));line-height:1.185}.f62{font-size:7px;font-size:calc(7px * var(--f));line-height:1.715}.ps241{margin-left:12px}.p21{text-indent:-5px}.ps242{margin-left:11px;margin-top:169px}.s308{min-width:458px;width:458px;min-height:1564px}.s309{min-width:456px;width:456px;min-height:284px}.s310{min-width:454px;width:454px;height:282px}.ps243{margin-left:4px;margin-top:6px}.s311{min-width:445px;width:445px;min-height:269px;height:269px}.i28{width:445px;height:269px}.ps244{margin-top:9px}.s312{min-width:458px;width:458px;min-height:1271px}.ps245{margin-left:0}.s313{min-width:458px;width:458px;min-height:1084px}.ps246{margin-top:709px}.s314{min-width:219px;width:219px;min-height:374px}.s315{min-width:219px;width:219px;min-height:170px}.s316{min-width:219px;width:219px;min-height:170px}.s317{min-width:217px;width:217px;min-height:168px}.ps247{margin-left:5px;margin-top:-166px}.s318{min-width:207px;width:207px;min-height:165px;height:165px}.i29{width:207px;height:155px;top:5px}.ps248{margin-top:24px}.s319{min-width:136px;width:136px;min-height:180px}.s320{min-width:134px;width:134px;height:178px}.ps249{margin-left:4px;margin-top:7px}.s321{min-width:127px;width:127px;min-height:165px;height:165px}.i30{left:2px;width:124px;height:165px}.ps250{margin-left:2px;margin-top:-1083px}.s322{min-width:293px;width:293px;min-height:1084px}.s323{min-width:293px;width:293px;min-height:1084px}.s324{min-width:217px;width:217px;height:168px}.ps251{margin-left:4px;margin-top:4px}.s325{min-width:208px;width:208px;min-height:160px;height:160px}.i31{width:208px;height:156px;top:2px}.ps252{margin-left:157px;margin-top:734px}.s326{min-width:136px;width:136px;min-height:180px}.s327{min-width:134px;width:134px;min-height:178px}.ps253{margin-left:10px;margin-top:-172px}.s328{min-width:121px;width:121px;min-height:165px;height:165px}.i32{width:121px;height:161px;top:2px}.ps254{margin-left:1px;margin-top:-906px}.ps255{margin-left:4px;margin-top:-165px}.s329{min-width:210px;width:210px;min-height:159px;height:159px}.i33{width:210px;height:158px;top:0}.ps256{margin-top:-729px}.ps257{margin-left:5px;margin-top:-165px}.s330{min-width:209px;width:209px;min-height:160px;height:160px}.i34{width:209px;height:157px;top:1px}.ps258{margin-left:0;margin-top:-553px}.ps259{margin-left:5px;margin-top:-166px}.ps260{margin-left:237px;margin-top:-1084px}.s331{min-width:221px;width:221px;min-height:879px}.ps261{margin-left:4px;margin-top:-165px}.s332{min-width:209px;width:209px;min-height:159px;height:159px}.i35{width:209px;height:157px;top:1px}.ps262{margin-top:8px}.s333{min-width:221px;width:221px;min-height:170px}.s334{min-width:221px;width:221px;min-height:170px}.s335{min-width:219px;width:219px;min-height:168px}.ps263{margin-left:7px;margin-top:-165px}.ps264{margin-top:7px}.ps265{margin-left:4px;margin-top:4px}.s336{min-width:208px;width:208px;min-height:160px;height:160px}.i36{width:208px;height:156px;top:2px}.ps266{margin-top:6px}.ps267{margin-left:5px;margin-top:5px}.s337{min-width:208px;width:208px;min-height:158px;height:158px}.i37{width:208px;height:156px;top:1px}.ps268{margin-left:1px;margin-top:8px}.s338{min-width:220px;width:220px;min-height:170px}.s339{min-width:218px;width:218px;height:168px}.ps269{margin-left:4px;margin-top:5px}.s340{min-width:212px;width:212px;min-height:159px;height:159px}.i38{width:212px;height:159px}.ps270{margin-left:322px;margin-top:-180px}.ps271{margin-left:7px;margin-top:-173px}.s341{min-width:123px;width:123px;min-height:166px;height:166px}.i39{width:123px;height:164px;top:1px}.ps272{margin-top:7px}.s342{min-width:458px;width:458px;min-height:180px}.ps273{margin-left:7px;margin-top:5px}.s343{min-width:122px;width:122px;min-height:166px;height:166px}.i40{width:122px;height:163px;top:1px}.ps274{margin-left:26px}.ps275{margin-left:6px;margin-top:6px}.s344{min-width:122px;width:122px;min-height:165px;height:165px}.i41{width:122px;height:163px;top:1px}.ps276{margin-left:24px}.ps277{margin-left:7px;margin-top:7px}.s345{min-width:122px;width:122px;min-height:162px;height:162px}.i42{width:122px;height:162px;top:0}body{--d:4;--s:480}}@media (max-width:479px) {.s281{min-width:320px;height:64px}.ps223{margin-top:2px}.s282{width:320px;min-height:59px}.ps224{margin-left:9px}.s283{min-width:299px;width:299px;min-height:59px}.s284{min-width:60px;width:60px;min-height:59px;height:59px}.i26{left:1px;width:59px;height:59px}.ps226{margin-left:40px;margin-top:42px}.s285{min-width:164px;width:164px;height:15px}.s286{min-width:164px;width:164px;min-height:15px;height:15px}.s287{min-width:32px;width:32px;height:15px}.s288{min-width:32px;width:32px;min-height:15px}.ps227{margin-top:3px}.s289{min-width:32px;width:32px;height:8px}.f57{font-size:5px;font-size:calc(5px * var(--f));line-height:1.201}.ps228{margin-left:1px}.s290{min-width:54px;width:54px;min-height:24px;height:25px}.s291{min-width:48px;width:48px;height:11px}.s292{min-width:48px;width:48px;min-height:11px}.ps229{margin-top:1px}.s293{min-width:47px;width:47px;height:8px}.ps230{margin-top:2px}.s294{min-width:54px;width:54px;height:11px}.s295{min-width:54px;width:54px;min-height:11px}.s296{min-width:53px;width:53px;height:8px}.ps231{margin-left:1px;margin-top:9px}.s297{min-width:34px;min-height:11px;width:34px;height:5px}.f58{font-size:4px;font-size:calc(4px * var(--f));padding-top:3px;padding-bottom:3px}.c75{width:max(320px, 100%);margin-top:8px;min-height:245px}.s298{width:320px;height:235px}.ps233{margin-left:2px}.s299{min-width:315px;width:315px;min-height:237px}.s300{min-width:315px;width:315px;min-height:237px}.s301{min-width:313px;width:313px;min-height:235px}.ps234{margin-left:7px;margin-top:-233px}.s302{min-width:301px;width:301px;min-height:227px;height:227px}.i27{width:301px;height:226px;top:0}.ps235{margin-left:12px;margin-top:-57px}.s303{min-width:161px;width:161px;min-height:43px}.ps236{margin-left:13px;margin-top:-51px}.s304{min-width:157px;width:157px;height:31px}.f59{font-size:25px;font-size:calc(25px * var(--f));line-height:1.201}.ps237{margin-top:11px}.s305{width:320px;min-height:1415px}.ps238{margin-left:7px}.s306{min-width:301px;width:301px;min-height:115px}.ps239{margin-left:8px;margin-top:17px}.ps240{margin-left:12px;margin-top:11px}.s307{min-width:206px;width:206px;height:94px}.f60{font-size:19px;font-size:calc(19px * var(--f));line-height:1.212}.f61{font-size:25px;font-size:calc(25px * var(--f));line-height:1.201}.f62{font-size:4px;font-size:calc(4px * var(--f))}.ps241{margin-left:8px}.p21{text-indent:-3px}.ps242{margin-left:7px;margin-top:112px}.s308{min-width:307px;width:307px;min-height:1044px}.s309{min-width:305px;width:305px;min-height:190px}.s310{min-width:303px;width:303px;height:188px}.ps243{margin-left:3px;margin-top:4px}.s311{min-width:297px;width:297px;min-height:179px;height:179px}.i28{width:297px;height:179px}.ps244{margin-top:6px}.s312{min-width:307px;width:307px;min-height:848px}.ps245{margin-left:0}.s313{min-width:307px;width:307px;min-height:723px}.ps246{margin-top:472px}.s314{min-width:147px;width:147px;min-height:250px}.s315{min-width:147px;width:147px;min-height:114px}.s316{min-width:147px;width:147px;min-height:114px}.s317{min-width:145px;width:145px;min-height:112px}.ps247{margin-left:4px;margin-top:-111px}.s318{min-width:138px;width:138px;min-height:110px;height:110px}.i29{width:138px;height:104px;top:3px}.ps248{margin-top:15px}.s319{min-width:92px;width:92px;min-height:121px}.s320{min-width:90px;width:90px;height:119px}.ps249{margin-left:3px;margin-top:5px}.s321{min-width:85px;width:85px;min-height:110px;height:110px}.i30{left:1px;width:83px;height:110px}.ps250{margin-left:1px;margin-top:-722px}.s322{min-width:197px;width:197px;min-height:723px}.s323{min-width:197px;width:197px;min-height:723px}.s324{min-width:145px;width:145px;height:112px}.ps251{margin-left:3px;margin-top:2px}.s325{min-width:139px;width:139px;min-height:107px;height:107px}.i31{width:139px;height:104px;top:2px}.ps252{margin-left:105px;margin-top:488px}.s326{min-width:92px;width:92px;min-height:121px}.s327{min-width:90px;width:90px;min-height:119px}.ps253{margin-left:7px;margin-top:-115px}.s328{min-width:81px;width:81px;min-height:110px;height:110px}.i32{width:81px;height:108px;top:1px}.ps254{margin-left:1px;margin-top:-605px}.ps255{margin-left:3px;margin-top:-110px}.s329{min-width:140px;width:140px;min-height:106px;height:106px}.i33{width:140px;height:105px;top:0}.ps256{margin-top:-487px}.ps257{margin-left:4px;margin-top:-110px}.s330{min-width:139px;width:139px;min-height:107px;height:107px}.i34{width:139px;height:104px;top:2px}.ps258{margin-left:1px;margin-top:-370px}.ps259{margin-left:3px;margin-top:-110px}.ps260{margin-left:158px;margin-top:-723px}.s331{min-width:148px;width:148px;min-height:586px}.ps261{margin-left:3px;margin-top:-111px}.s332{min-width:139px;width:139px;min-height:106px;height:106px}.i35{width:139px;height:104px;top:1px}.ps262{margin-top:4px}.s333{min-width:148px;width:148px;min-height:114px}.s334{min-width:148px;width:148px;min-height:114px}.s335{min-width:146px;width:146px;min-height:112px}.ps263{margin-left:5px;margin-top:-110px}.ps264{margin-top:4px}.ps265{margin-left:3px;margin-top:3px}.s336{min-width:139px;width:139px;min-height:107px;height:107px}.i36{width:139px;height:104px;top:2px}.ps266{margin-top:3px}.ps267{margin-left:3px;margin-top:4px}.s337{min-width:138px;width:138px;min-height:105px;height:105px}.i37{width:138px;height:104px;top:0}.ps268{margin-left:1px;margin-top:5px}.s338{min-width:147px;width:147px;min-height:114px}.s339{min-width:145px;width:145px;height:112px}.ps269{margin-left:2px;margin-top:3px}.s340{min-width:141px;width:141px;min-height:106px;height:106px}.i38{width:141px;height:106px}.ps270{margin-left:215px;margin-top:-121px}.ps271{margin-left:5px;margin-top:-116px}.s341{min-width:82px;width:82px;min-height:111px;height:111px}.i39{width:82px;height:109px;top:1px}.ps272{margin-top:4px}.s342{min-width:307px;width:307px;min-height:121px}.ps273{margin-left:5px;margin-top:3px}.s343{min-width:81px;width:81px;min-height:111px;height:111px}.i40{width:81px;height:108px;top:1px}.ps274{margin-left:16px}.ps275{margin-left:4px;margin-top:4px}.s344{min-width:81px;width:81px;min-height:110px;height:110px}.i41{width:81px;height:108px;top:1px}.ps276{margin-left:15px}.ps277{margin-left:4px;margin-top:5px}.s345{min-width:81px;width:81px;min-height:108px;height:108px}.i42{width:81px;height:108px;top:0}body{--d:5;--s:320}}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-db99c3.png">
<meta name="msapplication-TileImage" content="images/mstile-144x144-b52991.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.f5bf09.css" media="print">
</head>
<body id="b">
<script>var p=document.createElement("P");p.innerHTML="&nbsp;",p.style.cssText="position:fixed;visible:hidden;font-size:100px;zoom:1",document.body.appendChild(p);var rsz=function(e){return function(){var r=Math.trunc(1e3/parseFloat(window.getComputedStyle(e).getPropertyValue("font-size")))/10,t=document.body;r!=t.style.getPropertyValue("--f")&&t.style.setProperty("--f",r)}}(p);if("ResizeObserver"in window){var ro=new ResizeObserver(rsz);ro.observe(p)}else if("requestAnimationFrame"in window){var raf=function(){rsz(),requestAnimationFrame(raf)};requestAnimationFrame(raf)}else setInterval(rsz,100);</script>

<script>!function(){var e=function(){var e=document.body;e.style.setProperty("--z",1);var t=window.innerWidth,n=getComputedStyle(e).getPropertyValue("--s");if(320==n){if(t<320)return;t=Math.min(479,t)}else if(480==n){if(t<480)return;t=Math.min(610,t)}else t=n;e.style.setProperty("--z",Math.trunc(t/n*1e3)/1e3)};window.addEventListener?window.addEventListener("resize",e,!0):window.onscroll=e,e()}();</script>

<div data-block-group="0" class="v48 ps221 s281 c71 z113">
<div class="ps222">
</div>
<div class="ps223 v48 s282">
<div class="v49 ps224 s283">
<div class="v49 ps225 s284 c72 z114">
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
<img src="images/untitled-3-1--708.png" class="i26">
</picture>
</div>
<div class="v50 ps226 s285 z115">
<ul class="menu-dropdown v49 ps225 s286 m9" id="m1">
<li class="v49 ps225 s287">
<a href="./" class="ml9"><div class="menu-content mcv9"><div class="v49 ps225 s288 c73 z116"><div class="v49 ps227 s289 c72 z117"><p class="p19 f57">Home</p></div></div></div></a>
</li>
<li class="v49 ps228 s287">
<div class="menu-content mcv9">
<div class="v49 ps225 s288 c73 z116">
<div class="v49 ps227 s289 c72 z117">
<p class="p19 f57">Rentals</p>
</div>
</div>
</div>
<ul class="menu-dropdown v51 ps225 s290 m9 z118">
<li class="v49 ps225 s291">
<a href="#" class="ml9"><div class="menu-content mcv9"><div class="v49 ps225 s292 c73 z116"><div class="v49 ps229 s293 c72 z117"><p class="p19 f57">Loft Apartment</p></div></div></div></a>
</li>
<li class="v49 ps230 s294">
<a href="studio-apartment.php" class="ml9"><div class="menu-content mcv9"><div class="v49 ps225 s295 c73 z116"><div class="v49 ps229 s296 c72 z117"><p class="p19 f57">Studio Apartment</p></div></div></div></a>
</li>
</ul>
</li>
<li class="v49 ps228 s287">
<a href="page-2.php" class="ml9"><div class="menu-content mcv9"><div class="v49 ps225 s288 c73 z116"><div class="v49 ps227 s289 c72 z117"><p class="p19 f57">About</p></div></div></div></a>
</li>
<li class="v49 ps228 s287">
<a href="maintiance.php" class="ml9"><div class="menu-content mcv9"><div class="v49 ps225 s288 c73 z116"><div class="v49 ps227 s289 c72 z117"><p class="p19 f57">Maintiance</p></div></div></div></a>
</li>
<li class="v49 ps228 s287">
<a href="contact.php" class="ml9"><div class="menu-content mcv9"><div class="v49 ps225 s288 c73 z116"><div class="v49 ps227 s289 c72 z117"><p class="p19 f57">Contact</p></div></div></div></a>
</li>
</ul>
</div>
<div class="g9 v52 ps231 s297 c74 z119">
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
<a href="./logout-d12b45.php" class="a9 f58">LOGOUT</a>
<?php
    }
    else {
        $groupClass = 'g9';
        if($groupClass !== NULL) {
            echo "<style>.{$groupClass}{visibility:hidden}</style>";
        }
    }
?>

</div>
</div>
</div>
</div>
<div class="c75">
<div class="ps232 v48 s298 z116">
<div class="v49 ps233 s299 z120">
<div class="v49 ps225 s299">
<div class="v49 ps225 s300">
<div class="v49 ps225 s301 c76 z121"></div>
<div class="v49 ps234 s302 c72 z122">
<picture>
<source srcset="images/img_0697-602.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0697-602.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0697-904.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0697-904.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0697-1446.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0697-1446.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0697-904-1.webp 1x, images/img_0697-1808.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0697-904-1.jpg 1x, images/img_0697-1808.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0697-1130.webp 1x, images/img_0697-2260.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0697-1130.jpg 1x, images/img_0697-2260.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0697-1808-1.webp 1x, images/img_0697-3616.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0697-1808-1.jpg 1x, images/img_0697-3616.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0697-3616.jpg" class="i27">
</picture>
</div>
<div class="v49 ps235 s303 c77 z123"></div>
<div class="v49 ps236 s304 c72 z124">
<h1 class="p20 f59">Loft Apartment</h1>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="ps237 v48 s305 z116">
<div class="v49 ps238 s306 c78"></div>
<div class="v49 ps239 s306 c78 z125">
<div class="v49 ps240 s307 c72 z126">
<h1 class="p20 f60">COST OF RENT PER MONTH: <span class="f61"> $900</span></h1>
<p class="p20 f62"><br></p>
<ul class="ps241">
<li data-marker="&bull;" class="p21 f62"><span class="f62">INCLUDES ALL AMENITIES AS SEEN IN THE PHOTOGRAPHS</span></li>
<li data-marker="&bull;" class="p21 f62"><span class="f62">INCLUDES ALL UTILITIES</span></li>
<li data-marker="&bull;" class="p21 f62"><span class="f62">INCLUDES HIGH SPEED INTERNET</span></li>
</ul>
</div>
</div>
<div class="v49 ps242 s308 z127">
<div class="v49 ps225 s309 z128">
<div class="v49 ps225 s310 c76 z129">
<div class="v49 ps243 s311 c72 z130">
<picture>
<source srcset="images/img_0690-594.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0690-594.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0690-890.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0690-890.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0690-1424.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0690-1424.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0690-890-1.webp 1x, images/img_0690-1780.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0690-890-1.jpg 1x, images/img_0690-1780.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0690-1113.webp 1x, images/img_0690-2226.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0690-1113.jpg 1x, images/img_0690-2226.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0690-1781.webp 1x, images/img_0690-3562.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0690-1781.jpg 1x, images/img_0690-3562.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0690-3562.jpg" class="i28">
</picture>
</div>
</div>
</div>
<div class="v49 ps244 s312 z131">
<div class="v49 ps245 s313">
<div class="v49 ps246 s314">
<div class="v49 ps225 s315 z132">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s315">
<div class="v49 ps225 s316">
<div class="v49 ps225 s317 c76 z133"></div>
<div class="v49 ps247 s318 c72 z134">
<picture>
<source srcset="images/img_0710-276.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0710-276.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0710-414.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0710-414.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0710-664.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0710-664.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0710-414-1.webp 1x, images/img_0710-828.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0710-414-1.jpg 1x, images/img_0710-828.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0710-518.webp 1x, images/img_0710-1036.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0710-518.jpg 1x, images/img_0710-1036.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0710-829.webp 1x, images/img_0710-1658.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0710-829.jpg 1x, images/img_0710-1658.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0710-1658.jpg" loading="lazy" class="i29">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps248 s319 z135">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s320 c76 z136">
<div class="v49 ps249 s321 c72 z137">
<picture>
<source srcset="images/img_0704-166.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0704-166.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0704-248.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0704-248.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0704-396.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0704-396.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0704-248-1.webp 1x, images/img_0704-496.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0704-248-1.jpg 1x, images/img_0704-496.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0704-310.webp 1x, images/img_0704-620.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0704-310.jpg 1x, images/img_0704-620.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0704-496-1.webp 1x, images/img_0704-992.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0704-496-1.jpg 1x, images/img_0704-992.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0704-992.jpg" loading="lazy" class="i30">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps250 s322">
<div class="v49 ps225 s323 z138">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s315">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s324 c76 z139">
<div class="v49 ps251 s325 c72 z140">
<picture>
<source srcset="images/img_0689-278.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0689-278.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0689-416.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0689-416.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0689-666.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0689-666.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0689-416-1.webp 1x, images/img_0689-832.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0689-416-1.jpg 1x, images/img_0689-832.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0689-520.webp 1x, images/img_0689-1040.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0689-520.jpg 1x, images/img_0689-1040.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0689-832-1.webp 1x, images/img_0689-1664.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0689-832-1.jpg 1x, images/img_0689-1664.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0689-1664.jpg" loading="lazy" class="i31">
</picture>
</div>
</div>
</div>
</div>
<div class="v49 ps252 s319">
<div class="v49 ps225 s326">
<div class="v49 ps225 s327 c76 z141"></div>
<div class="v49 ps253 s328 c72 z142">
<picture>
<source srcset="images/img_0706-162.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0706-162.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0706-242.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0706-242.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0706-388.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0706-388.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0706-242-1.webp 1x, images/img_0706-484.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0706-242-1.jpg 1x, images/img_0706-484.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0706-303.webp 1x, images/img_0706-606.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0706-303.jpg 1x, images/img_0706-606.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0706-485.webp 1x, images/img_0706-970.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0706-485.jpg 1x, images/img_0706-970.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0706-970.jpg" loading="lazy" class="i32">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps254 s315 z143">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s315">
<div class="v49 ps225 s316">
<div class="v49 ps225 s317 c76 z144"></div>
<div class="v49 ps255 s329 c72 z145">
<picture>
<source srcset="images/img_0693-280.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0693-280.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0693-420.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0693-420.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0693-670.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0693-670.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0693-419.webp 1x, images/img_0693-838.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0693-419.jpg 1x, images/img_0693-838.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0693-524.webp 1x, images/img_0693-1048.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0693-524.jpg 1x, images/img_0693-1048.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0693-838-1.webp 1x, images/img_0693-1676.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0693-838-1.jpg 1x, images/img_0693-1676.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0693-1676.jpg" loading="lazy" class="i33">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps256 s315 z146">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s315">
<div class="v49 ps225 s316">
<div class="v49 ps225 s317 c76 z147"></div>
<div class="v49 ps257 s330 c72 z148">
<picture>
<source srcset="images/img_0700-278.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0700-278.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0700-418.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0700-418.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0700-670.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0700-670.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0700-418-1.webp 1x, images/img_0700-836.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0700-418-1.jpg 1x, images/img_0700-836.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0700-523.webp 1x, images/img_0700-1046.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0700-523.jpg 1x, images/img_0700-1046.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0700-837.webp 1x, images/img_0700-1674.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0700-837.jpg 1x, images/img_0700-1674.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0700-1674.jpg" loading="lazy" class="i34">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps258 s315 z149">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s315">
<div class="v49 ps225 s316">
<div class="v49 ps225 s317 c76 z150"></div>
<div class="v49 ps259 s329 c72 z151">
<picture>
<source srcset="images/img_0703-280.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0703-280.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0703-420.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0703-420.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0703-670.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0703-670.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0703-419.webp 1x, images/img_0703-838.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0703-419.jpg 1x, images/img_0703-838.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0703-524.webp 1x, images/img_0703-1048.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0703-524.jpg 1x, images/img_0703-1048.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0703-838-1.webp 1x, images/img_0703-1676.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0703-838-1.jpg 1x, images/img_0703-1676.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0703-1676.jpg" loading="lazy" class="i33">
</picture>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps260 s331">
<div class="v49 ps225 s315 z152">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s315">
<div class="v49 ps225 s316">
<div class="v49 ps225 s317 c76 z153"></div>
<div class="v49 ps261 s332 c72 z154">
<picture>
<source srcset="images/img_0692-278.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0692-278.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0692-418.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0692-418.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0692-670.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0692-670.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0692-418-1.webp 1x, images/img_0692-836.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0692-418-1.jpg 1x, images/img_0692-836.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0692-523.webp 1x, images/img_0692-1046.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0692-523.jpg 1x, images/img_0692-1046.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0692-837.webp 1x, images/img_0692-1674.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0692-837.jpg 1x, images/img_0692-1674.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0692-1674.jpg" loading="lazy" class="i35">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps262 s333 z155">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s333">
<div class="v49 ps225 s334">
<div class="v49 ps225 s335 c76 z156"></div>
<div class="v49 ps263 s325 c72 z157">
<picture>
<source srcset="images/img_0695-278.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0695-278.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0695-416.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0695-416.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0695-666.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0695-666.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0695-416-1.webp 1x, images/img_0695-832.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0695-416-1.jpg 1x, images/img_0695-832.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0695-520.webp 1x, images/img_0695-1040.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0695-520.jpg 1x, images/img_0695-1040.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0695-832-1.webp 1x, images/img_0695-1664.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0695-832-1.jpg 1x, images/img_0695-1664.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0695-1664.jpg" loading="lazy" class="i31">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps264 s315 z158">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s324 c76 z159">
<div class="v49 ps265 s336 c72 z160">
<picture>
<source srcset="images/img_0699-278.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0699-278.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0699-416.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0699-416.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0699-666.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0699-666.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0699-417.webp 1x, images/img_0699-834.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0699-417.jpg 1x, images/img_0699-834.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0699-521.webp 1x, images/img_0699-1042.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0699-521.jpg 1x, images/img_0699-1042.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0699-834-1.webp 1x, images/img_0699-1668.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0699-834-1.jpg 1x, images/img_0699-1668.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0699-1668.jpg" loading="lazy" class="i36">
</picture>
</div>
</div>
</div>
</div>
<div class="v49 ps266 s315 z161">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s324 c76 z162">
<div class="v49 ps267 s337 c72 z163">
<picture>
<source srcset="images/img_0701-276.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0701-276.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0701-416.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0701-416.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0701-664.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0701-664.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0701-415.webp 1x, images/img_0701-830.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0701-415.jpg 1x, images/img_0701-830.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0701-519.webp 1x, images/img_0701-1038.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0701-519.jpg 1x, images/img_0701-1038.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0701-830-1.webp 1x, images/img_0701-1660.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0701-830-1.jpg 1x, images/img_0701-1660.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0701-1660.jpg" loading="lazy" class="i37">
</picture>
</div>
</div>
</div>
</div>
<div class="v49 ps268 s338 z164">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s339 c76 z165">
<div class="v49 ps269 s340 c72 z166">
<picture>
<source srcset="images/img_0711-282.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0711-282.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0711-424.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0711-424.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0711-678.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0711-678.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0711-423.webp 1x, images/img_0711-846.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0711-423.jpg 1x, images/img_0711-846.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0711-529.webp 1x, images/img_0711-1058.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0711-529.jpg 1x, images/img_0711-1058.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0711-846-1.webp 1x, images/img_0711-1692.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0711-846-1.jpg 1x, images/img_0711-1692.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0711-1692.jpg" loading="lazy" class="i38">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps270 s319 z167">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s319">
<div class="v49 ps225 s326">
<div class="v49 ps225 s327 c76 z168"></div>
<div class="v49 ps271 s341 c72 z169">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<picture>
<source srcset="images/img_0705-164.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0705-164.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0705-246.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0705-246.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0705-394.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0705-394.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0705-246-1.webp 1x, images/img_0705-492.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0705-246-1.jpg 1x, images/img_0705-492.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0705-308.webp 1x, images/img_0705-616.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0705-308.jpg 1x, images/img_0705-616.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0705-493.webp 1x, images/img_0705-986.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0705-493.jpg 1x, images/img_0705-986.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0705-986.jpg" loading="lazy" class="i39">
</picture>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps272 s342">
<div class="v49 ps225 s319 z170">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s320 c76 z171">
<div class="v49 ps273 s343 c72 z172">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<picture>
<source srcset="images/img_0708-162.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0708-162.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0708-244.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0708-244.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0708-390.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0708-390.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0708-243.webp 1x, images/img_0708-486.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0708-243.jpg 1x, images/img_0708-486.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0708-304.webp 1x, images/img_0708-608.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0708-304.jpg 1x, images/img_0708-608.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0708-486-1.webp 1x, images/img_0708-972.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0708-486-1.jpg 1x, images/img_0708-972.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0708-972.jpg" loading="lazy" class="i40">
</picture>
</div>
</div>
</div>
</div>
</div>
<div class="v49 ps274 s319 z173">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s320 c76 z174">
<div class="v49 ps275 s344 c72 z175">
<picture>
<source srcset="images/img_0709-162.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0709-162.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0709-244.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0709-244.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0709-390.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0709-390.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0709-243.webp 1x, images/img_0709-486.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0709-243.jpg 1x, images/img_0709-486.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0709-304.webp 1x, images/img_0709-608.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0709-304.jpg 1x, images/img_0709-608.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0709-486-1.webp 1x, images/img_0709-972.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0709-486-1.jpg 1x, images/img_0709-972.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0709-972.jpg" loading="lazy" class="i41">
</picture>
</div>
</div>
</div>
</div>
<div class="v49 ps276 s319 z176">
<div class="plx" data-plx="v:0.00:0.15:0:0:2.00" style="visibility:hidden;transform-style:preserve-3d;will-change:transform;-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;height:100%" data-plx-no-clip="1">
<div class="v49 ps225 s320 c76 z177">
<div class="v49 ps277 s345 c72 z178">
<picture>
<source srcset="images/img_0707-162.webp 2x" type="image/webp" media="(max-width:479px)">
<source srcset="images/img_0707-162.jpg 2x" media="(max-width:479px)">
<source srcset="images/img_0707-244.webp 2x" type="image/webp" media="(max-width:767px)">
<source srcset="images/img_0707-244.jpg 2x" media="(max-width:767px)">
<source srcset="images/img_0707-390.webp 2x" type="image/webp" media="(max-width:959px)">
<source srcset="images/img_0707-390.jpg 2x" media="(max-width:959px)">
<source srcset="images/img_0707-243.webp 1x, images/img_0707-486.webp 2x" type="image/webp" media="(max-width:1199px)">
<source srcset="images/img_0707-243.jpg 1x, images/img_0707-486.jpg 2x" media="(max-width:1199px)">
<source srcset="images/img_0707-304.webp 1x, images/img_0707-608.webp 2x" type="image/webp" media="(max-width:1919px)">
<source srcset="images/img_0707-304.jpg 1x, images/img_0707-608.jpg 2x" media="(max-width:1919px)">
<source srcset="images/img_0707-486-1.webp 1x, images/img_0707-972.webp 2x" type="image/webp" media="(min-width:1920px)">
<source srcset="images/img_0707-486-1.jpg 1x, images/img_0707-972.jpg 2x" media="(min-width:1920px)">
<img src="images/img_0707-972.jpg" loading="lazy" class="i42">
</picture>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div data-block-group="0" class="btf v46 ps215 s278 c69 z111">
<div class="ps216">
</div>
<div class="ps217 v46 s279">
<div class="v47 ps218 s17">
<div class="v47 ps219 s280 c2 z112">
<p class="p18 f56">Copyrights 2024</p>
<p class="p18 f56">SRP Consulting Group, LLC</p>
<p class="p18 f56">All Rights Reserved</p>
</div>
<div class="v47 ps220 s19 c2 z112">
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
<img src="images/copy-of-untitled-2-340.png" loading="lazy" class="i25">
</picture>
</div>
</div>
</div>
</div>
<div class="btf c70">
</div>
<script>var lwi=-1;function thresholdPassed(){var w=document.documentElement.clientWidth;var p=false;var cw=0;if(w>=480){cw++;}if(w>=768){cw++;}if(w>=960){cw++;}if(w>=1200){cw++;}if(w>=1920){cw++;}if(lwi!=cw){p=true;}lwi=cw;return p;}!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();dpth="/";!function(){var e={},t={},n={};window.ld=function(a,r,o){var c=function(){"interactive"==document.readyState?(r&&r(),document.addEventListener("readystatechange",function(){"complete"==document.readyState&&o&&o()})):"complete"==document.readyState?(r&&r(),o&&o()):document.addEventListener("readystatechange",function(){"interactive"==document.readyState&&r&&r(),"complete"==document.readyState&&o&&o()})},d=(1<<a.length)-1,u=0,i=function(r){var o=a[r],i=function(){for(var t=0;t<a.length;t++){var r=(1<<t)-1;if((u&r)==r&&n[a[t]]){if(!e[a[t]]){var o=document.createElement("script");o.textContent=n[a[t]],document.body.appendChild(o),e[a[t]]=!0}if((u|=1<<t)==d)return c(),0}}return 1};if(null==t[o]){t[o]=[];var f=new XMLHttpRequest;f.open("GET",o,!0),f.onload=function(){n[o]=f.responseText,[].forEach.call(t[o],function(e){e()})},t[o].push(i),f.send()}else{if(e[o])return i();t[o].push(i)}return 1};if(a.length)for(var f=0;f<a.length&&i(f);f++);else c()}}();ld([],function(){!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var a=!1,o=document.body.parentNode;(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1)&&"none"!=getComputedStyle(o).getPropertyValue("scroll-snap-type")&&(o.setAttribute("data-snap",o.style.scrollSnapType),o.style.scrollSnapType="none",a=!0);var n=0;if(e.hash.length>1){var r=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));r||(r=1);var i=e.hash.slice(1),s=document.getElementById(i);if(null===s&&null===(s=document.querySelector('[name="'+i+'"]')))return;var u=/chrome/i.test(navigator.userAgent);n=u?s.getBoundingClientRect().top*r+pageYOffset:(s.getBoundingClientRect().top+pageYOffset)*r}else if(a)for(var l=document.querySelectorAll("[data-block-group]"),c=0;c<l.length;c++)if("none"!=getComputedStyle(l[c]).getPropertyValue("scroll-snap-align")){s=l[c];break}if(a)window.smoothScroll(t,s,1);else if("scrollBehavior"in document.documentElement.style)scroll({top:n,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var d=pageYOffset,m=null;requestAnimationFrame(function e(t){m||(m=t);var a=(t-m)/400;scrollTo(0,d<n?(n-d)*a+d:d-(d-n)*a),a<1?requestAnimationFrame(e):scrollTo(0,n)})}else scrollTo(0,n);t.preventDefault()},!1)})}(),window.smoothScroll=function(e,t,a,o){e.stopImmediatePropagation();var n,r=pageYOffset;t?(("string"==typeof t||t instanceof String)&&(t=document.querySelector(t)),n=t.getBoundingClientRect().top):n=-r;var i=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));i||(i=1);var s=n*i+(/chrome/i.test(navigator.userAgent)?0:r*(i-1)),u=null;function l(){c(window.performance.now?window.performance.now():Date.now())}function c(e){null===u&&(u=e);var n=(e-u)/1e3,i=function(e,t,a){switch(o){case"linear":break;case"easeInQuad":e*=e;break;case"easeOutQuad":e=1-(1-e)*(1-e);break;case"easeInCubic":e*=e*e;break;case"easeOutCubic":e=1-Math.pow(1-e,3);break;case"easeInOutCubic":e=e<.5?4*e*e*e:1-Math.pow(-2*e+2,3)/2;break;case"easeInQuart":e*=e*e*e;break;case"easeOutQuart":e=1-Math.pow(1-e,4);break;case"easeInOutQuart":e=e<.5?8*e*e*e*e:1-Math.pow(-2*e+2,4)/2;break;case"easeInQuint":e*=e*e*e*e;break;case"easeOutQuint":e=1-Math.pow(1-e,5);break;case"easeInOutQuint":e=e<.5?16*e*e*e*e*e:1-Math.pow(-2*e+2,5)/2;break;case"easeInCirc":e=1-Math.sqrt(1-Math.pow(e,2));break;case"easeOutCirc":e=Math.sqrt(1-Math.pow(0,2));break;case"easeInOutCirc":e=e<.5?(1-Math.sqrt(1-Math.pow(2*e,2)))/2:(Math.sqrt(1-Math.pow(-2*e+2,2))+1)/2;break;case"easeInOutQuad":default:e=e<.5?2*e*e:1-Math.pow(-2*e+2,2)/2}e>1&&(e=1);return t+a*e}(n/a,r,s);if(window.scrollTo(0,i),n<a)"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120);else if(/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream||"MacIntel"===navigator.platform&&navigator.maxTouchPoints>1){if(t)for(var d=t;d!=document.body;){if(d.getAttribute("data-block-group")){d.scrollIntoView();break}d=d.parentNode}setTimeout(function(){var e=document.body.parentNode;e.style.scrollSnapType=e.getAttribute("data-snap"),e.removeAttribute("data-snap")},100)}}return"requestAnimationFrame"in window?requestAnimationFrame(c):setTimeout(l,1e3/120),!1};!function(){var e=null;if(location.hash){var t=location.hash.replace("#",""),n=function(){var o=document.getElementById(t);null===o&&(o=document.querySelector('[name="'+t+'"]')),o&&o.scrollIntoView(!0),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")?setTimeout(n,100):null!=e&&setTimeout(e,100)};n()}else null!=e&&e()}();});ld(["js/jquery.6ad8c3.js","js/jqueryui.6ad8c3.js","js/menu.6ad8c3.js","js/menu-dropdown-animations.6ad8c3.js","js/menu-dropdown.f5bf09.js"],function(){initMenu($('#m1')[0]);});</script>
<script>
var initParallax,doParallax;!function(){var t,e,i,r,l,o,s,a,n,f,d,p,h,y=["sticky","-webkit-sticky","-moz-sticky","-o-sticky","-ms-sticky"],m=void 0,g=void 0,u=1;initParallax=function(){t=document.querySelectorAll(".plx")},doParallax=function(){r=0};var c=function(t){var e=t.parentNode;return null===e?null:((!1===t.nc||void 0===t.nc&&!(t.nc=null!=t.getAttribute("data-plx-no-clip")))&&(e=e.parentNode),(t.c||void 0===t.c&&(t.c=null!=e.getAttribute("data-plx-c")))&&null!=(e=e.parentNode).getAttribute("data-plx-c")&&(e=e.parentNode),e)},v=function(t,l){var s=window,a=t.bounds;if(void 0===l&&(!e&&"0px"===s.getComputedStyle(l=c(t)).getPropertyValue("min-width")||void 0!==a&&r==o))void 0===a||0!=a.width&&0!=a.height||(a.width=t.offsetWidth,a.height=t.offsetHeight);else{if(void 0===l){if(t.pr=void 0,void 0===t.currentTime&&void 0===t.parallax){var n=t.getAttribute("data-plx-pos");t.style.position=n||"absolute"}void 0===l&&(l=c(t))}else l=t;var f=0,d=0,p=l.offsetWidth,h=l.offsetHeight,m=l,g=!1;do{var u=s.getComputedStyle(m),v=-1!=y.indexOf(u.position);v&&(m.style.position="relative",t.pr=null),f+=m.offsetTop,d+=m.offsetLeft,v&&(m.style.position=""),g=g||"none"!=u.getPropertyValue("animation-name")}while(m=m.offsetParent);a={top:f,left:d,width:p,height:h,animated:g},g?i=i||g:t.bounds=a}return a},x=function(t,e){var i=t.getBoundingClientRect();i={left:i.left,right:i.right,top:i.top,bottom:i.bottom};for(var r=0;0!==e&&r<t.children.length;r++){var l=t.children[r];if("none"!=window.getComputedStyle(l).getPropertyValue("display")){var o=e?x(l,e):l.getBoundingClientRect();o.left<i.left&&(i.left=o.left),o.top<i.top&&(i.top=o.top),o.right>i.right&&(i.right=o.right),o.bottom>i.bottom&&(i.bottom=o.bottom)}}return i.width=i.right-i.left,i.height=i.bottom-i.top,i},w=function(t,e,i,r,l){window;var o=d/u;o<0&&(o=0);var s=parseInt(t.top/u)?t.top:0;1==e?s+=t.height/2:2==e&&(s+=t.height);var a=(s-o)/n,f=0,p=0,h=r>=0?r:0,y=n*(i-h),m=n*i,g=n*h;return s<n?(a<=i||2==e&&i>=1)&&(a>=r||2!=e&&r<=0)?l?(p=f=y-o,s>m?p=f+=s-m:s-g&&(p=f=y-o*y/(s-g))):(p=f=o,s>m?p=f-=s-m:s-g&&(p=o*y/(s-g))):a<=i?s>g&&(l||(p=f=y,s<m&&(f=s-g))):l&&s>m&&(p=f=y):((a<=i||2==e&&i>=1)&&(a>=r||2!=e&&r<=0)?f=l?s-o-g:m-(s-o):a<=i?l||(f=y):l&&(f=y),p=f),{o:f,n:p}},b=function(t,e){var i=t.classList;return null!=i?i.contains(e):(" "+t.className+" ").indexOf(" "+e+" ")>-1},T=function(){var y=document.body,T=document.documentElement;if(b(y,"modal")||b(y,"lbb"))return F();void 0===m&&(m=/chrome/i.test(navigator.userAgent),g=/firefox/i.test(navigator.userAgent));var k=window;if(o=k.innerWidth,s=k.innerHeight,f=k.pageXOffset,d=k.pageYOffset,f<0&&!m||!i&&e&&o===r&&l===s&&f===p&&d===h)return F();i=!1,f<0&&(f=0),g||o==r||(u=parseFloat(k.getComputedStyle(y).getPropertyValue("zoom"))),u||(u=1),a=o/u,n=s/u;for(var P=Math.max(y.scrollWidth,a),I=Math.max(y.scrollHeight,y.offsetHeight,T.clientHeight,T.scrollHeight,T.offsetHeight),O=0;O<t.length;O++){var A,z=t[O],M=c(z);if(null!==M&&"hidden"!=(A=k.getComputedStyle(M)).getPropertyValue("visibility")&&"none"!=A.getPropertyValue("display")){var L=v(z);if(null!=L){if(L.animated&&(L={top:L.top+x(M,0).top+d-v(M,0).top,left:L.left,width:L.width,height:L.height}),void 0===z.plx){if(z.style.display="block",z.plx=z.getAttribute("data-plx").split(";"),z.bb=null!=z.getAttribute("data-plx-bb"),z.offsl=z.offst=z.incw=z.inch=0,!z.nc){var V=M.getAttribute("data-plx-offs");null!=V&&(V=V.split(";"),z.offsl=1.4142*parseInt(V[0]),z.offst=1.4142*parseInt(V[1]),z.incw=Math.max(0,-z.offsl)+1.4142*parseInt(V[2]),z.inch=Math.max(0,-z.offst)+1.4142*parseInt(V[3]))}var C=A.getPropertyValue("transform")||A.getPropertyValue("-webkit-transform")||A.getPropertyValue("-moz-transform")||A.getPropertyValue("-ms-transform"),E=1,H=1;if("none"!=C)C=C.substring(7).split(","),E=parseFloat(C[0])>=0?1:-1,H=(G=parseFloat(C[3]))>=0?1:-1;z.sx=E,z.sy=H,void 0===z.parallax&&(z.style.display="inline-block")}for(var N=void 0,S=void 0,R=(E=void 0,H=0,void 0),W=void 0,q=void 0,Y=void 0,B=void 0,X=void 0,Z=0,j=1,D=z.plx.length-1;D>=0;D--){Array.isArray(z.plx[D])||(z.plx[D]=z.plx[D].split(":"),z.plx[D][1]=parseFloat(z.plx[D][1]),z.plx[D][2]=parseFloat(z.plx[D][2]),z.plx[D][3]=parseInt(z.plx[D][3]),z.plx[D][4]=parseInt(z.plx[D][4]));var G,J=(G=z.plx[D])[1],K=G[2],Q=G[3],U=G[4],$=n*(K-(J>=0?J:0)),_=w(L,Q,K,J,U);if(void 0!==z.currentTime)if(z.videoWidth){Y=_.o;U&&(Y=-Y);var tt=Y<0?0:Y*G[5]/1e3;if(g){z.playbackRate=0;var et=z.play();void 0!==et&&et.then(function(t,e){return function(){t.currentTime=e,t.pause()}}(z,tt)).catch(function(t){})}else z.currentTime=tt}else i=!0;else{if(z.tagName.indexOf("LOTTIE-PLAYER")>=0){if(void 0!==z.seek){var it=_.o/$*G[5]*100;it<0?it=0:it>100&&(it=Q?it%100:100),it=parseInt(it)+"%",z.seek(it)}break}if(z.parallax){tt=(Y=_.o)<0?0:Y*G[5]/$;z.parallax(tt);break}}tt=_.n/$;if("v"==G[0]){var rt=(0==U?-1:1)*(G[5]-1);S=_.o*rt,null==N&&(N=0)}else if("h"==G[0]){if("ll"==G[5])N=-(L.left+L.width);else if("lc"==G[5])N=-(L.left+L.width)*(1-tt);else if("lr"==G[5])N=-(L.left+L.width)*(1-tt)+(P-L.left)*tt;else if("cl"==G[5])N=-(L.left+L.width)*tt;else if("cc"==G[5])N=0;else if("cr"==G[5])N=(P-L.left)*tt;else if("rl"==G[5])N=-(L.left+L.width)*tt+(P-L.left)*(1-tt);else if("rc"==G[5])N=(P-L.left)*(1-tt);else if("rr"==G[5])N=P-L.left;else{rt=G[5];N=_.o*rt}null==S&&(S=0)}else if("s"==G[0].charAt(0))(E=1-tt+tt*G[5])<0?E=0:H=E,"sx"==G[0]?H=1:"sy"==G[0]&&(E=1);else if("r"==G[0])R=tt*G[5],W=G[6]+" "+G[7];else if("b"==G[0])(q=tt*G[5])<0&&(q=0);else if("o"==G[0])(Y=1-tt+tt*G[5]/100)<0?Y=0:Y>1&&(Y=1);else if("c"==G[0].charAt(0)){B=0,X=1,(tt=1-tt+tt*G[5])<0&&(tt=0);for(var lt=1;lt<G[0].length;lt++){var ot=G[0].charAt(lt);"x"==ot?(B=.5-tt/2,X=.5+tt/2):"r"==ot?X=(B=1)-tt:"l"==ot?X=tt:"y"==ot?(Z=.5-tt/2,j=.5+tt/2):"t"==ot?j=tt:"b"==ot&&(j=(Z=1)-tt)}}}if(!(void 0!==z.currentTime||z.tagName.indexOf("LOTTIE-PLAYER")>=0||void 0!==z.parallax)){var st=z.nc?void 0:z.parentNode;st&&(st.style.webkitTransform=st.style.MozTransform=st.style.msTransform=st.style.transform="none",st.style.width=st.style.height=z.style.marginLeft=z.style.marginTop=0);var at="",nt="";null!=N&&(at="translate3d("+N.toFixed(1)+"px,"+S.toFixed(1)+"px,0)",(z.sx<0||z.sy<0)&&(nt="translate3d("+(N*z.sx).toFixed(1)+"px,"+(S*z.sy).toFixed(1)+"px,0)"));var ft="";if(null!=E&&(ft+="scale("+E.toFixed(3)+","+H.toFixed(3)+")"),null!=R&&(ft.length&&(ft+=" "),ft+="rotate("+R.toFixed(1)+"deg)",z.style.webkitTransformOrigin=z.style.MozTransformOrigin=z.style.msTransformOrigin=z.style.transformOrigin=W),null!=B&&(X||(X=B,B=0),X=(100*X).toFixed(2),B=(100*B).toFixed(2),j||(j=Z,Z=0),j=(100*j).toFixed(2),Z=(100*Z).toFixed(2),z.style.webkitClipPath=z.style.clipPath="polygon("+X+"% "+j+"%, "+B+"% "+j+"%, "+B+"% "+Z+"%, "+X+"% "+Z+"%)"),at.length&&(at+=" "),at+=ft,nt.length&&(nt+=" ",nt+=ft),null!=q&&(at.length||(at="translateZ(0)"),z.style.webkitFilter=z.style.mozFilter="blur("+q.toFixed(1)+"px)"),null!=Y&&(z.style.opacity=Y.toFixed(2),z.style.filter="alpha(opacity="+parseInt(100*Y)+")"),at.length&&(z.style.webkitTransform=z.style.MozTransform=z.style.msTransform=z.style.transform=at),st){var dt=q||0,pt=dt*(H||1);dt*=E||1;var ht=z.pr,yt=m?u:1;ht||((ht=x(M,0)).left+=f,ht.top+=d/yt,void 0===z.pr&&(z.pr=null===M.closest(".plx")?ht:null));var mt={left:ht.left-f,top:ht.top-d/yt,width:ht.width,height:ht.height};parseInt(10*parseFloat(z.style.width))!=parseInt(10*mt.width)&&(z.style.width=mt.width.toFixed(1)+"px"),parseInt(10*parseFloat(z.style.height))!=parseInt(10*mt.height)&&(z.style.height=mt.height.toFixed(1)+"px");var gt,ut=x(z,z.bb);nt.length?(z.style.webkitTransform=z.style.MozTransform=z.style.msTransform=z.style.transform=nt,gt=x(z,z.bb)):gt={left:ut.left,top:ut.top,width:ut.width,height:ut.height};var ct=(ut.width-mt.width)/2-z.offsl,vt=(ut.height-mt.height)/2-z.offst;ut.left+=z.offsl,ut.top+=z.offst,gt.left+=z.offsl-dt,gt.top+=z.offst-pt,ut.width+=z.incw,ut.height+=z.inch,gt.width+=z.incw+2*dt,gt.height+=z.inch+2*pt,yt=m?1:u;var xt=(gt.top+d)*yt-d,wt=parseInt(k.getComputedStyle(document.body).getPropertyValue("height"));if(0===Y||xt>wt||xt+gt.height*yt<0||xt>s||gt.left+gt.width<0||gt.left>P){st.style.width&&(z.style.marginLeft=z.style.marginTop=st.style.width=st.style.height=0,z.style.webkitTransform=z.style.MozTransform=z.style.msTransform=z.style.transform=st.style.webkitTransform=z.style.MozTransform=z.style.msTransform=z.style.transform="",st.style.overflow="hidden");continue}var bt=wt-xt+gt.height*yt;wt<0&&(ut.height+=bt);var Tt,Ft=gt.left+f;Ft+gt.width>P?(Tt=P-Ft,Y="hidden"):(Tt=gt.width,Y="visible");var kt=z.sx<0?ut.width-Tt:0,Pt=(tt=gt.top+d)+gt.height>I?I-tt:gt.height;gt.top+Pt>n&&(Pt=n-gt.top);var It=z.sy<0?ut.height-Pt:0;(z.style.transform||z.style.webkitTransform||z.style.MozTransform||z.style.msTransform)!=ft&&(z.style.webkitTransform=z.style.MozTransform=z.style.msTransform=z.style.transform=ft),"50% 50%"!=(z.style.transformOrigin||z.style.webkitTransformOrigin||z.style.MozTransformOrigin||z.style.msTransformOrigin)&&(z.style.webkitTransformOrigin=z.style.MozTransformOrigin=z.style.msTransformOrigin=z.style.transformOrigin="50% 50%"),ct=(ct+kt+dt).toFixed(1)+"px",z.style.marginLeft!=ct&&(z.style.marginLeft=ct),vt=(vt+It+pt).toFixed(1)+"px",z.style.marginTop!=vt&&(z.style.marginTop=vt),parseInt(10*parseFloat(st.style.width))!=parseInt(10*Tt)&&(st.style.width=Tt.toFixed(1)+"px"),parseInt(10*parseFloat(st.style.height))!=parseInt(10*Pt)&&(st.style.height=Pt.toFixed(1)+"px"),st.style.webkitTransform=st.style.MozTransform=st.style.msTransform=st.style.transform="translate3d("+(ut.left-mt.left-kt-dt).toFixed(1)+"px,"+(ut.top-mt.top+It-pt).toFixed(1)+"px,0)",st.style.overflow=Y}z.style.visibility=""}}}}e?(r=o,l=s,p=f,h=d):e="0px"!==k.getComputedStyle(y).getPropertyValue("min-width"),F()},F=function(){return window.requestAnimationFrame?(window.requestAnimationFrame(T),!0):(e||setTimeout(T,100),!1)},k=window;if(F()||(k.addEventListener?(k.addEventListener("scroll",T),k.addEventListener("resize",T)):(k.onscroll=T,k.onresize=T)),initParallax(),T(),"matchMedia"in window)try{window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change",function(t){T()})}catch(t){}}();

</script>
</body>
</html>