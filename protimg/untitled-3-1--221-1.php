<?php
    session_start();
    include '../groups-d12b45.php';
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
            header('Location: ../user-login.php');
            exit;
        }
    }
    $acg = array('0','1');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'AEBC8786-C8B7-4743-B214-D1D992C31321' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'user-dashboard.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.php');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/webp');
    header('Content-Length: 18952');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRgBKAABXRUJQVlA4WAoAAAAQAAAA3AAA3AAAQUxQSLkMAAABGQZtIznSlOvhj/j1GCL6HwpSS/KHbUn+QGtd6JwCOAKBpP3NJ4iI1A4khP/7hYgJSFzbtqeRJOn9JNkOTKiqLGZspmFmZmaG09ndX8LMzMzFVc1QXU3ZxTDFSZERkY4Ik77vILPminTY6rO9ImICJCxd8Y1fXzM1ORYQCGyjXq89H6ZJMojcrrJzy/jaXbumxur1SuAZRQAgbDlLkrg3f+3ijdbNK4su1mzsf8vuSQ8Ng9WNb126fuWp6W7fofTunW9/8+SCRV6lNTt98vWrV9iBqP7Ae/etMch/eOHFUycvD9xm64EPvKmPkU1vnvmvJ84PXKX+lg88EGCEhQC5dvLx45fYPbx9H/9QiFEXgJBeOPrPL7fcovGRj+xhjL5AACJ0nvqH/73tDls/+akeClIACBGiU//8L1fcYOcXPpyiYEUU+JW/+4/p8tv67bcBUjQQCBGm//GvLpTb5i9+nCFEhQNAAJLX/vIfS6z5ka89AAGhqAUkz39iqqwe/dJjJKJQ5AJ6+LNvq5TR1o+9rQIhFLwIgjd9fEfp+G//+HqwQhky1r79LbVy2fyhA2CUJEGw7907S0S/6a11QJUFiATNR++rlMWat+4Ho1QFQnvfsaEctj/cAKhkCILxR/eVAO3ZCwGhZAmA6F17KkVX27sOgjImQLBmz3ixTeytA1RKK1d3TxXZ2p0GIJQ1AfC2TBXXuikIodwFk+NFta4JgQPWxk0R6XUNOKGgMqaLR41XIQ5ABMAEVDi+hksyF4wQyCkGtkiEBW6BbCDFYZcEzplGXBTSieCg6VJRLMaAuAeiTjHcCeGo7W4RzM7BRUVAmG2NXvsmnJXSn7dHTZ9jchZgcHUwYl8OSRwGi2fsSD32JcBpcOXyKE3+MhyX7KWZ0dE/Y3EbAS090x2ZT+6B4yy//rKMyLbvg7XjMGBPXxwN8ysQDccVCDrPdUbiM5NwYBGhG6d4BDZ/H6xdR4QBpKfP5Y9+KqLgtCzCIoCo9pF27t7xIISchhkiACCQ8y9Kzho/Amu4rDDAzCyAUPbUpZx93BcFp2UBWxHBcnX9UJSrNd8BO44IWxaBCAFkT5zK1bdSUXBcXm4tg0RY3fm/xRzt/DCEXEcss82siAgz5IWncvQViILzss3S1DIzBNBz/3wrN1s/BBeWNE2TJMkyKyLEzxyTvHw1AzkQbJLEg36UZGyF9Ozf3cjJpndDnIijfj/shoMoyUQRHz+Sk48xCE6c9cJuizOlyNNKv0uezEXzC3Bl7rW7i9ZaBe17svlNT7bz8K6BMyFpd9tZZongGeW/o/tKDtSXIeRK3G23bZZaJRQEsuvA8XT1HpyCQw/m5i3HCQQVX1ffefXK6r0fIHeyC7OWs0FGqar5eHDyqVWb/DCcunsntjaJLRKvbibferq1Wg+JWyUzkdg0ziS11ar/pqVzq/VFuLV04ohslMDGuq53bHueV2dqp2MhoYGVNLaSpoE39ejr7dV5Z9+1pNmPbJamSGO/FjwaXl0VehjOPYZebLOUKbY1b+/G06uy7k3uVa0uxRmyRGVJQBNvmo5WY2vTvUw1icRmWYYBGsFb5m6vxgete2GMO2DLGcdUMdtr11ZBvQcOXjH9lGGZOdLN9VumV2GD72JmMg6tZStpwrXx+y73h/e20MVoMo7ZWpvZQb9Wuz9sDW8/nLxZXUozm1nuJRh7IL0zNG+bmwXrOnGWsZUsCZtb1t4Y2obtbmaacZJZFrbhUn1q93UZ1ppxN8Ok6SSWwVm/p9c/ejEZ1vrY0Zpex1oREdvtTjw46A7rzeJolSBMGSDh/gz2bZgbknkMju6N9UOAhCS7tXBgz+yQ/LWuRuuiDggQoDO7Z8fNIY1bV0MjibGcJAvHJpaGtH3J2WocCQgQSEiB4uHsi5ytYnpWCQFAf2kySIezGc5uqiGDsDxe3CnxcBrupr2YCSumC3uyIVXcjShVoGVk5+oNDLfhcJoFdw1vJ8OpTTmcJ3ejtJUNZ3yTy/EvkLTscBrr3A2+8F1UPCy/7nCGZSVC3OPhGN/hIHcBbCbD0cbh2EKWESCC4SrtcNZiRYGIyHCcnq2s8AZVWAARQIRlSCIOlzIgWC4YGjtc32K5ABC84ZRutgIEwxd2N+4xrQABIMNh626SMGQFCIadRu4GYdxdhhX3HI5F7gYZUtJ3N0kEq24Td7PRG5tFXr245279Wax+OnC31twbmtnFHCQtd5vp5AChu90I38jInTQPS+xq8azk4faSq3VuII+XF1zt+sVczHRc7eydXLTnHS19Kc5FfM3ROqc5F3ye3exWjHy+MnCzU7WcXF1wsugZ5HRu2smutvPSesbJXg3yIpcSB7OvqLzg/C0Hm3kFuZ0+72AvjOWn/zI7l/0/lR8cWnKu83PI8ZlrznXcz9PMMddafAp5Tp+NHWt6KVd47oxTCf7N5OvyaZcSdfYK8s3/FzoU8D9ezvDsdXcSdetp5P3WIXcC/rOSu+Rg15VELRxG/p8/7UhC+L+xEZg9Yh1JzRzGKP7bLTciPGFG4txxJxK18KQaifgvFx1IFJ61GM2njriPgNrPVkYk/IfQeaDk+T6NCA4+6zqsMHtqUkFGo/PHseMQklN6LBDmkZCDJ11Hrt1+ZBtZvWb/Jnv9hYWcYf6PQreRpes77m+o8QP3yCAYs/90kvOF/zzoNslc7d5JNDebG9faWPvuD/zXyZz1fnPeZeyS3Tqu9Rq5/HMTKCsPvvl/OvmC/8V17sJJ0hgLdGBu3wk8RbDJWwaXc4bdH3IWsZFuVD1d6c6jYq02SJr1ubzRR/Y4irCVIFAm4FbUlETIgEmQ+4mP+uImwoEvIETtMZMqJVa0ifKHhx6BizJBa4KwbdV81p6yqa7F6QjQOzaAnEMIUAS2dslUoH0jqTYasZXcYe3bPXESQsa6FwdGe0YzKepOtTCKu+6Hc5IAsNZEYeCTMRqs1GBiIRwJvGkTyEFsarJOtULaKKSksgaOjY9G5d6aOIaAJIHt1CtKewopeYow8180GlhzDzkGwBnbTr3iaU9JpowX6eT3PYzqlq0QlxBQmtlO0zfaN7DQelDD3y5gdLdOgpzCZlmn6WnjG2J4CKt44ihGWO1owiWzLOvUPWN8T7N4HNZw8c9olFDZHrAzsNi0U/OMrhrN1kdYwcyvK4x2bY1yBZbMdupGeVWjJfO5V0H31zVGvdJwBJYs7daU8SuBRuYh9BD9po/RD2okDmCRJv0qab/mK8VGdT1kfzhAEfpe+YlInCQBab8WaIhHHQ/y11dRjIZEpNRYmJck0Dqoaq1Io+ML/uE0CjPLykxEOOtWlDaVQClSRrpV4F+fRIFELFJWLGKzqKI1eb5RijwJq8C/n0CRpmFaVpZEIgmU0toA2vO4X4X80xNUKBgsJsIlJExMvYqHZcKmom2/BvtXpwgFG831mLlkBAIdJzUlpLSGmABRv4bkTy6geAd3FlNbOqCe50NEeQrKq0ibPYS/vYgijm+2ooxLBTrJAiUi2oB04Eu3Ipj51QDFbO9c7qSplAWJ4sxXgIgmUp5P2aAmOPObCoU9c2Gun3I5iFDGAkBEQ5HxdN/6wLE/IxR46+L1XmJLQQkLlpMCkafVoAqkf3+EUOiDSze6vZgLjwQA3YWMUYOkLrjz+/Moemmdu9Ltp0UHEIEgIEXkEUW+AM/8oUYJxvXNU02jVcEBJCAhUtqLkwrQ/aunCaXIsnmnT8ajggNIFJGfJlUFvPyHHsqzPjFRMUZTYZGsAK1U7Gug87cnCCWaYGy84Smti2pFgqbEVoHs6b+soWT7mPCUIWUKTFNsA0249BfnCaWbRX2/bjMYr4hYQVHCgVa4/V+HCaU8SNIQ2rLyVOEQIWNfaZn7nyMBSrsfpoM+KVJGF4kQYEVrg9mj/11DmUu/3WVtCZ4yxUEMUqQxe+QYo+wlTRLrN1ViyahCEIECEW4eOtyAC0qaMkcCL0tZ6RETCBEU+NLBJ6pwRYl6fRKVJQPYTOnRESEQEdrT/33JwCmTsJtJmtnFXpKASOVOIAJFCkguPPlkF+5pe92FTrvVHwD9KLUAUW4EIiBShKVbzz/VMnBT6bdnW2Ff8SCJhSzApBRotUQEAm0onb302ou3GnBZO2jNhX02TB6zTbVvCERQRAD9QgIRgYKAtCKbhjdfe+32koL7Sjw/c/1qJ42sMXXfEBEBoBUhK4kAwqJJAUln9urr5zpjcOd48daF6Qs3buzeu3XC18RCipS6i0CESLIk7ty4tdCab4V1gmtL0r0x3Vy/Yf3U+vWTjWo18I0hwLJYmyaDcH7mzu1bXsWD6ytjtPErgacViWXO0iRJ0yxj/L8IAQBWUDggID0AAFCNAJ0BKt0A3QA+CQKBQIFRAAAQlpCHABlmrRvf69d2qOnlft1fF6MZFHz5hZ/6Pq+29nmb/Gb2p/N982DrkPQz/WD1n/WP/t/qCfxj+X5rN/GPxH/T35P+APzr+n/q/+0X+A9sfxX5V+b/ih/av+B/jfkP/hPyZ9FHQv9r/Hn3O/iH1T+f/1//Bf2X+u/8f/L/OH+X/I38cvev42/wv5FfAL+E/xH+if2H9Xv7T/tP876vX4jeXXqn+X/0v5AfAL6ifJv6z/dP8V/ef79/xv9d9Tv1X+F/Ir3h+vX+X/Hr6AP5B/Nf6x/Y/1w/tH/X+k/9X/wfFa+xf6j/W/kp9AX8c/nP95/tP+Q/wv95/7f2o/vf+Z/yf+U/3f+C//HvW/L/7X/mv8H/oP9n/cf/z/wf0C/if8l/sP9o/yH+N/t3/v/0f3L+vX9uPYp/UT7vP3t/76+A1SBSts5OoFOlWDzTez/gKpaHH48gc/Dc7xMJj3XsUz3PMyh9KIBufPByqWQwcW//5L+zYgf+bQG/tR2iAIDDsH6sTQLzPkaRmscCpOxP9eOjLFNnWVOcnDDVctLgTpscM+pfObfiSP8J33H9sczu4gxh68JsES5Xwgul9UJAvMXYBhvu3esM+bFqR7sqyJqkBjXFEeoHUJqIW4BVijSpOHNl2ZKKi56zHGd03ZUoe/CQxAktHGS3/LLtBSLUVuJMsk5+uyEgKlyMtfrtignqCLw9bEiGEN86hWA1XAG+tiwukULf+MBr290sdXVAOJt7dh82FHJDuG8i1kWghWIMBj9gs0JXGqR9OX3BwVUQhAIVvojWAeeofWHr/q2YdF1U7cwJyGJiGO7/f9p57oyNvI3Q9wvP6+QsGGc94nw+R0knLQpHkXMtyC4Apj6JWKT8N+ATiAZoVYTiVZAyZMkqfshPOw7sNJLYl4RtdncOhg6JLH4KC2uX3sOo7ujmhqry4/+pn19vMbhEOGFDkg9sKCcqp6GyMz5ZxnK8rYHoqqq6+MmkUUz9j2fB1ZNEf72wNdKDtufhHSi/WnshFxK5Q50pEFFzbm7LA/oybAWJ7oKtlfecQJwTA+pA7g4/r/Hhw/+q+XomCI4FsGwqwVQHWlsQ0h97wCYync8z0Ev4WWbTlpvX6+ZxqgrJO5YbL/S3nTW+e85WuCfLs6TpLnUQhXnPyaW6ysJ8o7xxp7hPW38B1F5aQMneSfiG8v357kGfxvQt8uWxaGsVoZspD49ouTqx1R9cv1hVx+qiMEt6vSPieTkq1UBamNwmNco7+ZwdEjsbIdkpljJsoD9GZDMCNm+CiAGFDzyTvP2U4ODD976TclVVGQ9nH+W14ZXgDBBCXU4NOtfXsdwUx6FwFkoUjDS5eB/j8ngaL5vddZ1HR/g+vDq72JaGXZSUB/DZ5p1q8H5///8KsuoHhv9RdzLLL1LxnnC4Ud+NCoIRikt5gv7NxU3bDU12Yo+ZHaJExxGrdK6OFtI///jTBngob/1s8ziX+8M14Q4d6lTWs1ggAP79vQoP//Mu9MIZJgh6/P3DCgAX03uGlOdcf0Dm1CXh8UbQw9/gppyUcktOIDoAlXyiqOjP0P/aV18utjjB7v6FUfa79SdwEHnYJmq7Fh/oTiBEmaJQDfv9d51nrIQciPT037vqsX7mWEiC1m3A2dOEXqOJf5iFtMV4qloM7MhkTO+KuUsZWmjXRkj2a1OJrK0qWYOPiDrDHWprxd4jOgIOHf28G4HPSLGm/JYvOIKZJlH+lBHW/pUbIN2DHwjuxDDr3/krlvTgQ1rMKekTa3dN9x3pCEDNsaDKmp7qgPaDKlSzs1KVfS58siVb+9kjvc7WeRHEjvgALHAJ8eerbIru+GSX/KPi0HYIgCiIF8QX5wvDkmDwvDHSnWqTXc7kwvXPxd0ABrowUOUuUYzclgLEezPeYQ2eYVJf4UIS93Jhv1pkNtAPUi1bSTW4L71p72Q1aXYqmLrCnz/b0un+S0rI3+jvk/vWxtUEJbC+SL1S0Sg/wNKJxGnobO1DhYO36NyulePrZO2AqgifuZEtGVn/9n/FEY2wJZP5mtUjjfj7RTBDbIsxlhqDcxuLq3AjuxnuJFCZUdIhLBR2n7CCzXvfbpTjaEE3rijXzagoBJEvRZaiH8918MVYCHjuULekgzv0HdO2/zw184OcqA5QVJacwj/KCoxf6UKUaMP7wABd/5l6TmJFV+NLlqxvqh7Quhr5e/0kDaod3n4cwukBU5IWQVt0VNxQGBeyB7HbbzDDF62KYT1ZL8WHaM9S3CTgENmG1O8H4hpZ5w6UR8E1SsQwx/GdCIz8tJc1Na32ScfmKHzXZVbAgVBehP+OYYQsjzG6N49hVcEwWQKZi7BP73tyBgLfG7t0ft4UFuCXpXEsQoEBFxILDK55CkmiRLTmtzQ9CPra2P8l6nevxHPSlI5awz7kATorJCGl3AsPZTchp5jR8z0UmEBRE8aNQzNDkHMUCVSQjoqJIaIfzimM960r/imofowAPpkYnaeBdviXMEYH5sZyiFjEGwR8km0Zr1U6cTIALXsYhWg4+zKxVGKwDZQnaBu1CgJM/UbDvNbcl8OH6djN6Tu0CINFzOCsdPE06dDbvhde+uYY5ufpBR6hA0LHj8Lx+Y1t1NorQ9KwxbR6gjRDE1Ks5M8wQVbn27GLlaieTHl8cQ7EXgYgvbHs+l2NcBKH+/umlwGs3eRq67QVI7sZoggttr88XOyd7XpmfJ0ACUiPWbtIkBGFfuskpVBXieQZo1kPPThv0jKFDWzZ2XdvFxjwzy++anvEqRRtUBPLTwXJkLj96cR03XaBaGxWssBM5iY+n/eXt1BU3bKsqXXTcTuGBCBE+DA1n+0TjrNjBpGzfiTP2dz8FQ3QRoUGxI/uX/f9vnmDBGmGzZxZUhWTHH3cdpiqF0Z6hZp9/63mGnCZFZ+Vq/Xmd8uloFqIEcUWFyT8cg3R059bMyQ3V8ON/J2kHh85IMCu6P4j9sQ+P82BAn+2pa4kk/Z6F9tDnRrc5H4q+4NGfjh0FKz5MqNzn0APCMZWcPrZ29fe75Vhsm1BuK5NZN8qHtB+UQD5S1eHV8tQIGBzRMlsCXSmqkmJQIHWl8NDOI1tXBO3pNKGCSH+p2sgqUmsAkRcU81EKeGqfWoa61t/Py+YkOGJ+93ZSy69v07wz1REm82eVY5k/PG5MaqMbUdmBTPUJx/Mw5KtR3qYrdahjnJQ991bLPC5QBYX7IYEV+8/CgTY6hZOsocGnZiE8XHKhSvDlJ/YR9xWN5OGHCjuUaBlmfRq0Qi4hrJLEoaQ61AAnUFc1JZdMRQSlSovcYDCNQiWOVpm3hdr3enaDYbjFR7ENBiAIamF/Yptm8ohx7GOOnOp21h8UcPLUhErhUxVDvg9mC1KX6xAUtzutp7mbNSo+hc6a0fxbwb0cOvrfcYUqoVJ7SFwJ38Tf1P1tInOysHBChDsueNPVevyy6HSjHUFAWNk3DaK/ZLFBfYFCeR9kODEm5jQEULRaew44BquuHZCP0QAOf+8BhG7oTxrDX+2ZyjBn2k8QVRO1UR+dn/ToaeQ3Mf0Ec20Nw/OnhMgpEmWmXgzocArW8vA599DMyEnNmiK1DVdqPuH+uwEuLbfFGd0dOqIwWVD9boORN4Q9vJD7Esd2JvWNRgtgTrMztEtAbVCmFczzJPUk7lSKimD3e0BPeJmcEagf82sef6ozhYcaO5SBhXq/3ts984SDbIDsDIyiRRK3axFB+85HHYbvRiBMGahXo6KlsMcZzD10WrpRaX7UFf6uMZQitkzzV1uTTMawzeq/TguGG+ap4ry0qYSTW4bEZmEXSEoStul0pzJAM0PdJpYIw155VFzxQ/f7QlOSM8VbqAN3XIkxHEB/kyCkpE9bbx9oL/boObDMrMQbbWWgajR+Hl9rD/uGTao+SJpGiHGuak4rAIH2CW1oKUSUlSM91ggeeMjjunmThjYccNKfORv7zscD8zA7847Xp3rRpmvDdsMRQrxTPJN4U3TbwFBHBBz+3mPvAHq9XLCuxF/QAg1cpPbJ99qbP1rSioMCkTRlHhGrTAs3h32yeuxeQcpWWEWpYIEbQqRGyyJ4EVWXuZF7/ybIf79mm/u0CySxJLYfefkN8c1CpkU6VKWxqrkagfKVUwG1Vm0xO/Q25saR7PO2CXJdeZAEo+BwwEhll0PvYJZLu5RKDJ7SL4XpbLclLM6gn4p5+Mv2TKQhWVKS+eIDDlZJkExkGYcSgpQRLe5+yYrSgW1GO/PKwndoVsnTRF/8hzCEcTe1qUQrkEsq/+xJd+JcQa3iavq7z9ONNQW7nhH8GOCafmH+b4K/nK9sHnGqYf7ir+5v+274/DvQiC5kXN0WCpH6Sxkm3dyr1VV9VLClBa8Gxs5CIpscxLFTj4vDWcIeWDuf4mA93lsjbJMPYtV1Du7n4P4qJgLsvhf6fLwWGLL5bjY9l/AsaiICOSMdkgVHuyk4r+qzOvtSFT8aLpg6NflKtJTbYGrR6IkMnSJoTFX1cgJe0Hs8eFhN8kNalL+BV6bAgFwLFUiRxMGvcerwjikAtN15glWMmbgDoI+7Uv2SeUyG4iZDpX4bvLTBIQnQ/snfpwKVtG9dmwlovKIPANavd4sDY6l4KZ8memCXooxkm7tAAU47061MnWR2bOFgWwJ+QbLpeOy7eqD7zrr88EYowE18pslrSTrOsCQ0tkqeecwMKWq6rg4LTHoLzZuVxmVwTyGJnWv+aKfVBE851XKZPTqXg3BNCHwzqXfARfVYlCmaNzo7ty+JR480wVqj3XUrBRycv7Pg+/D45qCeqCrqmFdfzHzZb67QCKghMvcPnDbf6tBjPKBStiuyyek2N+IlnGd5jlysXNdixsf2mBeiZO59ZQgEvhj4xFyOVtedyw/ObBe8KlrILcojI6HvXGOlJQ/ChrfLP60ab3K0RUcwgwMNnVH+Am+5tFPHCwzDH9pw9ARTTKnR2dnNjzDWaMwCPDiX4qbEufNdJyhZ8kCq6dIOSWlUpKhEvxu6XPW21aI6HdlAb/UAAr3xnyhipiu3k3e/9PfqmpSrI/O/+twEyG9ud7MvcgkWu/Rk4KjohKqRhq57dDNkO9Uu8g84Es53O04GzVIpbglfq2pAsFW9q9n31ilw3O3GP4IuofcZuoDgRFuwRfgVLBP7gwsHHYkj0JiTJH24nqa5cwqG1LAqkh/WbHn5LXQUxrB8AxmIYI83ccZMWlBJ7GD/0vKGT+RV/EGCpoOZihBJCKmjTrunIo5I5XL8Cugwe52O2MdutPp52q4Aa6qV718zvprgNQXY8r4nhl9TvbNbFBRMP2GfG6csIk+asE2l09w42kUbKUjTbQOjUH7dy7tKF1SXgz01zAIfJZF+P9DPF09hal21hHBStERtODMAWBVWC2up6SFal8z0R9WpU1QWOgC2KSbT5OB9ie2BrhrFpfKyAZDT1IUQesKKxmAJFCueEJZUy/FqiLohwFvHdAii0E7SRETwYG7L5ZLIpmu+XECUTdR8uyiS54YFelG3cNL/aS75E1YggmhuJTQHy19k/puA5SI8SI/Mw2/UGmrBSY/Tc4XL7FPvRTMhdGH6lqyeala6JNz97rUkk0KaBKifZwQE/SNLO30702Crj2h7qegubx5rYAvYNLt0zZJFwOPNfS8t7n7I+03+IV6ogxPZz3eJVMzNzi0QDQw+pg0bOLXO89KGv4BfmFxw6faw4eIWG7E/LZykTCb3HKa2BHQn76+DH1bAW7WOHCpvNh2+pM4a8XZMQMobcNdLzR7NzCkD9GW1D8J5cjx9npLVQnKNkr69PHGIzJ7vt6aZCDq6mcWdKExJijgK26/BPUBv+iVCuw687XeuzDhEjxbUs0CXixXjP4OxiCEc2FYJYHsgnUJojh9+GRrhvwNJ9V4Kxven0XJKMzbV+I+A4xlIzDQQ52U9p+mNlCZQ4aih78AMXGi7bDll7s7zCXIBB107+Yp/1ueecJ8RvrteKM8KhZOdg4ZvOLoeF7p1k0VEdCY7a6fdO34qQqsQKjb4MAir/ulD6T6YQ+EXC+RWP+o/x3g6E+cNSyEyyMYyEDCC0WtZvUPiGejoqD3AxJ3hX8Th1B7SCviB0VhlB5UCeQ7fppXjdQkofoI5AoOaDu+56Af9FYAYdqCZ/XympjzSSpe5j+jTKDv5nEU1JB3l/1G49fbTbxJyFaigxuHh5j/Z8rNRqAUkpLhklpBk6fo39OWae5pRFJahUFwjqesVXQuKkWta5qxoyHtSq854xTiSGi1fpJQFUiiXtVfesg1QWzTY7rjvfM9dCnWm/siaE5rNKYMFTOxOXr8Jnxn5j2grd3q93Yq7SI3oRZwSRHOM85R3sWZ6XkZFGUZNYd55UH/Xi0bEZWuwBKg2iDNHprlyPxzF2qjSXSLzFl1LDCBBgQvZzIKnH9mDLbO3sbYkQtZrh8peG0yeOnw0A2EjpN/FFE1Zy5MIANhn3nfyh6Xbl8h9VOOGyK6j5+HCoa0s0zCsf+PElhsKvjoBPXtMRwup3SwCgy2/QpDyGUCte0VPzutnblf+AIh2dewsd2F4GPu56wz/WyqXmHzhwugHqQ1B1OlUJOsaFEaKS2n9ZlWJn1lSJ5y9lx4LB6OuanKL4CmkHQymoWQJPgyJvOAnZOgxjydZRKBP4u5xB7+j4MkIqu7mLqpNXPBZLdBhM/U7B8U6V9Degj5LJwCB0LHuNTBXq3+elcE3D5jR3VTWuyTyTJWKz0UgH4F9DKX5FFj/rJlLhBRPo4sEJWjsdKoXXyAm0s9pvF3bhaJxHCTok+3c7Ixt6dm418ObveG8eerN1k66TvUbrZn2wprSJFmDbxJ4v4b5NhUonjdvjaIw81xKagG+RnmNkL/24fZbF8G5FblTmnvfcsHo24XW9l6/+DMEaSEHxlDVqTqTVJxsQvUXba4eU5RS+FXGw6myNqTNl7B6UZDuB3tnma+EikKuXtzYu1x4POueeinDPvtG8Gaf031tp/AOO8LxYrnQMGrlQxquUVwyYzUthP/ACy3Gh4S4s7Oelwit7vrr0iLcQRQcrPRNTRlYIk5k7kkWrFZMKr+oJgUPpJ620SHIZf9PLaeuWKeONRjizVr04LoAXBazz1fbnpx+CEPblBgd6QabvbTqwi2UlSfBjvz/78sdiMKxS4ZOpdBsScSjZ/QTvVPjEfyxpDvquDuGSYajq5+1aWT1mv8KVVm1j4e4UyTKLBJeJc3sfxNrY+FwlJdb2wv4LUzuUwytC2EHUot7xXYE6yG2xxQ3pzA9+cOzqIjnSIHowIIxsb2g2sCY0nLqqf8qeb2xI9e4eg5uSG5OgDCDM+gLzNjytIv9ybTUVy66doRL1+Wnd6v7qrAb6tYl/PghSiAX1VuouZ9/AUL9dsPAkSyZDYpGlSwlarPCEC/3radcsv/yfrQR1aozyvdFE5RgJLtBjY3VMw4sVkECce4DgVmP4iFZ8Hl+b1XPSseJ5hGHWyClb8acLVelcuH7cJtXuuxu/y7+6JX/d7a6hWI82PWWNXqUxn7gVXYwUwdKNteH4z9bqW0owVBVomAjNQJDObvf1uxRgi9zmqWapFAqIiyhsJJYHsdJTx5gJeDv5e+R1k2YtL+gSWjjk12F9soK2nvx/1HyPABrtmJwuC4z3ZM42uxjpYtfjPmX17cUX0U1CTrkA53J0pRX9aHL1qyd5DIDUUDIWrnFDuVqKj+1rp4U0fM3bH66lVn7SGb2nqKOysCWxqp/ipWt8WNo90lLIj/UXWJ6J/VnOlSIevyNEUSFX9obDH0/1UoT5o5qvl1cJggIMmxQDMQEY1PPquYQ0OHLLwwDJK1Imu8CCT0Fqq66T3owfW9fZMG2W7ZgNghC1ZoKChZmPQmjfwnp7yd9FDUcc63qsZV8u5Ki75tNb8PqsfraXzRx2Qsnp06ryxh9Iuy0IbJBXbvqiRj2awiEgWdA/qpbguyLm/8hQ+V9ARxVPase0oFMFL8C7XkBBn3yKgZkqkfQ/fyiwjDh6yBoAMWoLwCWpF5wq3eK9fH5Z1hgMN8d4Dl3KLpQ3UzBggnSG3qgVLZoqIfU/ml/RafiDWPZbuCdEpixBjnF5Gd7oSOmUWQ6pyUZKrXZI54+srgg+/uNi0i6N9QNuefP+ozwG4a9127xPi3mMl+hj/9bfZk65X96KGirMulU/XCMr+JQWoUnM9kGxebA1azUF34MH53hqDXnZlcAtw3NGjZ7TpUYvmWbyNHENC42YAaZXupOn7N/D23jwxBzc6AM+mQKcpHtgVqAWzjfAicTNCMIaTtMXsCb+F8RJP8nGYB969/12nvRR6CxfAf6oEygt7x8QmuHjKiEzDEcdEREJC2IvNkQJv+kfRI9zTA8+HRSJ63Avzxo2pPPzgM1sHgJGVj9Dq+ja3BUihqEQfa4PyCc9U2kIoiLOShBXUPxYLxEDVnv1m4xR8iRApmv4R6epFJvh/hHn9lM4wpWps+e25/KXugHyPOYzt9Wwj2tf3yWq6+bD53LKBzhPBnCqpuC8vfzb5vmox2LplgAye0t42BlVzQL4yBWnQDX0wPnZqQ9+WgkIB+Qe8FgXhRCYQRxVZCT2hMJhvtHA1+kGx9EW6K8AdfEKx4gOrMo9abD+EeVlRp8EstLgDCJaUHvttSYrGxTXOGejEyE6q/HLvgZvyzziHpzpUWFQMvyxf6C3VGdOnWEjEh1bCrLDCiliBP0q6m6ydTyw56RngkbfiWjhbSm6L3yI75wKXgVS1AgVRN0ov/iUy6R3Tztlh4pTsTREaEfYcAM/PD7lw8FWJgih0eSUv4XQl/hKeZqcwJHfy6lmJBW4dx9E1uywrXh2k9O/zNQXzlkD1tX06PcFm6qh5L7Qggfd06f4Jw9zjkSX7ujjaHTVUYhV8Raix5vIkNshWqkA33pwEolpAQGkUm+bt6uEkdmK2XK9TKVoqjZ5EbzvOsow2dDoIcW5CH2NFhBM4PKyvP/v/RdbpKo6Q0Ess2L5i39u2jE5IvCaXzcmgrxRvEpgp0LwZyatvY8/2B02h+GoWQ4t59uKXXgPyNYZNORykqY6WE/u4+xA0YzRToJqCcbI2ob2WuHW8ePF4IJvkufUR3lKiiJ7LjxxCMUhiA/WyYUN7FX7JebO7tCLrM2p/FhYQ5YbUbE61A06bAr/c5wxWOI+gm9AUQuD01GfBQVLSA6F6nbBt9KDL1bBOujSEfxWqm3M5Hu2W+/CFGLXcG9xFCBBRVH+JtBeiXslmrSB5RQFu0PT2P4iLRrn0BmiMAj7BvzpMw2mjuZgkShJBa2v5b9JfBlqa8068DE5m5nAj7l5TupzbiWHAW/1UikVvBvUp7gAeT6acTdr78Hy0V/CckgFBBlJ73hzDBn7mO5kWRGZmSBTKJ2bHC1+IIY4YVicSO5Be7GBwVgCk6UTkip60muA+2/6onue6q60TNkzuHysgNTOLE4yMxAal0Wl4aO/mQumUdAh1gRGGJYvTBmwt7HfxCudjJZkQuXCgF6CkcqxG3Yz6G8A0y/qhciTzEK7A5zpx+zcEehd+jw3L42kc6HBGnhUCIm/Nu+Qpq/nV9+Jf8o1KyTbjXy5Zbc1na2kOluINxcW3hS8ED1PGNhZzjHuz8jocIjTvv3UbybYwNw23A4RkcCyZQuOmtxO0tWf38pBQRE6hV091Dqm1bTIL4L+c2uq9/mbPJnNAv22a/NNbpkMgNY7ic+lkxzLLxFFJ7EmP3bHTIkbNAL0t7zRR/P3ydEP4ia9EecvNXtWLtsIaXdn2+Tfgw7zr80rg8lfH6zr8aOIs7DnTqo3VbPTtl/iq1Gw302y+1tjjJ+5GFcbIFj5io+goeAKvrioN/4IxSBDdjLamBa9RMIeBp9zSTxXJw5YTmINsNSrSIoG2SfToiiNyqsvP7oWt3alqpbo90+aNildNlbEeZr9ZyD5+3H2RJNIN9kkYQ9lrwhuUhuIZf4bCc6ioIKRyEJQapZRpC5can9oIqIwl4A4YSTRaVMmELeE4b9H9CvRgvobaRj9vR4x8IGmwXNBh0V+/iEnqhiotS1UvxKE3oH6FVx3ECdak2meECg66YAoJX2vC8oKbrSi74ajjshbKqckSH7JsScSxSLqsF4kY0wqqgS5Mf6MJ5i+t3c/9iods9uEIc6fM6T+qQN9xgvy1/qKVoyCROBojnTj9qQnMpo/W2NHDF1BTTXCjQr85hmkFFd8mZnKx8VkVHukgdVGqH/XYHRKNPqMEehH4dP0A7EjJPPxl8rq5cLouLoDQr5zOi2w0r2Nu48iQMkQTXr67HRWq4ou20+XPBvyhO3sawmxgYcNeLEVxdJ/5h/Rj20zg0Hp2txawWjw9jxc0bvVL6vlmK3PgbFg7gmnzTrMPFFtUKFis94mb6EtsU/AxnYYfD0kGwg2a6pkU73oVO6LW11O2ADXzR6PsmbtXfe19IJbWHKKb4k0rY3Pjo8RqQ8tlwCy4WG8DCYCRBj8K9xgMAricHFqZ9JvX1vlnAXI2JMxSplXv/xX3I5j4oLHIN2N9u17C5yRqHZ0Mc56BqnSuJ9lX2zNy5yBaPuKqOOzdK9KtCkWAOLGoYKxnVgNaDKEvSXcDYTKq20DmJrtqd1QmzT0QTSt9aZoE1WRZhi2ZBa/MLIXSapTjK1yZ4sJnQo6CQidxrGFs9JNU3IIZhy+Zfct/HchWOqsHmXlASZxwpxCmXDIJvpwpLHT74Tk03FuiUl8N2z0ghl2ygg2folxIhXM8StL1EQ/6FLjVST+gXNYmTle+nCN9GlaX38+4tqSeGr7n2iDFdVSB+jFm8G1W6mUSJVasJpi786oXBjVpqVDHNaq+9w6CijH49KvLGSYXTiIzzCHeZvG1sI6UrI7kfrdhrLfpHYmVv4vb4S95mjIwEmaQw4GpZ27aM7fc09XAZd7ZdqQQ7NsIfFzSkAIWfp5V73WmvS5722KJ8cUZpJS1vR/RH/z2NYgvsDQ5qH1XK6/52xTsW/7r5pl18CH3/PNVrw//PX1jiJ5VbqZ6SkPW3VsV34s3u8ZA7SpDmmLE2bF1RNzwL7w5CKfsb/72cLMnlTjYkqC49ff2r0++PXl3vVljhO/qsFOx/7cJI9/h4DIzKf9RqOHmEYv6mtgQSkGCAsCEFCKcUvTi0G04sgHDIk3tnQBR2Z1PDHkGGji22xYIeM0723z6D9NgAEHPoCJzyXJstgDnqMcgNI1MXrxkxf7A4Z9w7FZGsL6ikllz4VtazTFUPZSrVlOhkzI1XFiNZg1ZD5P7eDd4OQtkgpe0zvA23Dw5wS3/pqETKYdFEX1uHufDPHP969IXRCojpaY8aghErJmiSJ1Qmd9HpWOvwHVj3veDrLBpeyTbuYLs+t5YmEKK8PBRKjKOuPhyLkO1Sft1OBiDfAhi4BrNHO2EW9PVMRSLERFZqy8upMMIpR3XPwnGYOFJQZ4UIcKw7UQ6S3meCC0gpl0TS2+7flf9A0s6dS+GdLtnZBIc1xaxnODHDvCe6GePBCVOlk5rjjlVYrsSRg9nungTfI4eELEJBnDlhP1YX9TbveVUMta00TwIJ+WtwXPcdo0yTFyIJ9irqCviboTR3H36B3y/Y6b7T4VQh9dvi4ZECMpAePW3artOx0H/entabSR2G4c9S8HJ80JVVJZ611+wWZYjzuZRbrLk17hCP4FzMc2lBxfXkB3J1smmljLJEO2KDKAO1MaB935hNYTPrQ8cP6CJbriwRhlFqUxp3RDyXovE2tyN50fl6Rf0IiJB69L0Xuv1XxeDJa9yatrQRi+MEA6Dp9ZXHzRhZfNV1YIfDTy10tmLx3QlQonNeRYxX/KqU7+a/C9/YV6AWjtx1C2Odg7mif1YLj7JJrfVZ+HkT5fIjqpoeafcwOCx1IeKYfBuwOX/BD8uot76HVCk1IMFbLbWM37/kYRGgoLG6CT0p3MHaLgwUD5JZQgYgfFNnRS6vSrwsg/3x+fikDPrYfDwKwJyuk1XDUPx+bp18BUjTxN/cJo/OMi74m/oPzNqGppPPU5lm13Oh8RunzUeab3fBp7wDY3C6wk6TnrLAnHq6+07+jnrEd9X97h162l3vNa5z+hp9Gf+i5SCBmMrPz67mEoQcZ16LM7et3hbns8/LrehENO+05mTOjMd8hLFFM8FRmRgLS+rvGpbY5KCEBrtdLbEMheRfv8NNlSj35SW+rqMg+UkVkibdWKqGeyN7ztd/H+RkzcBXFEXVIeR7//SPpp5QMj5bAhYYW04H/jxoOob3AYsMS3LbUQpHKuMWjVztIAtLtBhz1hLFhZNI6m6KqkhthWz+pUyHwJGtnsCTf4G8z4DVJa1B4Lw4mwxXke++jZkBb89/v9rjzD+1BbPhreYbNJ95nkAFiP159WUOg/jPoBDGpKlTw62Vw9XJoAwLaD1U+v3RbgtrIToglugh7f2q5xWVYOJAOlDhi0STEEFAA7w+cOeVhfNWhQzCT63uetOEa0ObpAiTx14N6PT7tX9e1GHpcF2/L+w6T/qNQm1rqUlAtv4bf+pbaR9Pv7ae/FzT1Q/YnnnYAvbvASbI2y4RL5GyC+qsb9DL5DrWzCdOw4eJ/bRmsZ+uoFrlvlI6L1jlGZbrjyTDAJJXVAcgqL4aVnxY0dmuDm7EulIxnid1uZpTNqPxwdQrvdp663IjcPMqt49qHEE9qHZrg83aHIpeZ7IEbXhbmGTEr/tZAM8O8Ly1q2S3V4aAgvxq3+STRdj3bzroXSc02tqKcDUjk3pNweBlRQ3JQ1JoAIePvKFghco8TluFIM6y7T2BQ9WIJdR4jd0XqV/AyCaOPaK0L6nuzPSOFs5sB8WMZIYINDQADw/XmXv8txlNyFh3FnrRp4JNVlFUtlqTPpjHYstBJBHDB9p6tjhvFuX7UzqKdalLfSYdKhkI84jJsgIugv/9e2/IkokLm3Nd5R3OuivLfZafC6mcKa1ctfD+68R1t5Ku96aTDv0PM42bAKxQQ1GPvlgv7mCqN2Gcz1ySaY8co3CjqM+HGvjsLC9O0VHvA/ThE6K+eFTpUpIFpwMUao9wh9KD49FVJesnxajtlkHF1ekXGod2I42mYJXDGzHUcxDWX2XohvFto0qtEn2543sIx7bDEFpywrHpisfWP13qX2WWwPkPEU2TThj+WL3jIB10TXyfOX1AuYMXjfIrGiS28KwUJFYS6Z6NLeWiftrU9xkmnKqabEvLvLNLKWX7f1vyCI5R6WlBcN9NPvp1uuwMeT9IELW8jaddvZ8mrZe6GyDZPgNN+1gCtDIjHjXp48m/gTUclZDZ3ynKPGmPTw1SmCtsgpAM2UgaTGgUVH80Yk2x6bJ9e+HnaUAtnVR87axhkUGWrPZ71E7lMPNMfyQHqHmxDB798ZQyTVIRyRzyZR9kCIu1EpmgWxrQgci5IaTE2g2gIMCiauKB49H8Ew46WpnpyXy1cSQlmqP41CutZnnzQlut4ECiCY+R5NYyeHcyxenI6b85jD+UtNIdJTXj0+xa8AqA+Pgjg0ESfHE/x9X5A1AB98khzrjeCznCnNgUaFXFHT07lVoW7Jxzss5l6F6+W79e+2O81YrWTXObAlcukI8kKCg0Qt/EsX81tvoT8jD1i1vPtR4zrBjh2dZLhWwObsx3NbmDnPweEBtSAMHRUHKIHnOi2XT6KkYjeruSPEf9kZVRKRHH2ycVJs1OdPPiMl3JmoK6yif1eereZ2TSKKQ/dyX5PlXLVJ3Wn6FcBNuOfYGilpUIbJZS9sGBYIcKPCG1dukSkMWVv7wICQ9WPO+sdz5VY4VZvbI6ViS7NbR12guYzNS9RZbNr3I26DIcJPz823RFrYeVHszrtGEuVS45oLpB9u2ctcAgC5SHf6ZCGeO4wTp1Rn/kXT9z25LOW2Obijyzgh04LpgxlO3pdBmEJg19qO5CdnHH7YgOU2SD2UAwiNt21kh5wA19QaBNLbr86KGcXGExbpEi47kNFSQlkTqU2o8+D4s8e6vj6ZXFdzakko8mUfrVdljjR5iH3yflcifzkby22sy5NJWzLuySZpNwKrWlP5czLuPQN0NWPHxaLazny7Mbi4XPwhRE4fto6E9MhlhcJDlz9KUFOc06/7TtW4+MoDQHcdwbxqzuMKOnNgjPbnkuPBOimlHImZoY2MBsKRhBit8KOp4JkoDSKrQA0k92uGzoLUUQcjA8Bg9Y9+pJIYUTuShZDv/JVj5zRHq3RnK03zxQuqEO6DRXxDR+0kBw/DnbPUwNkgkl6f3Z5PfzpzXr3W/TnCPcj0jSdaKT5uaHW5TuVEHjoOaG8GrYsNtGQSvKddopFzmM4P8oy1f88mWRC3HLcYJGxqcaWReOPPseE7sipatQz0ilrpGxEw3H1UmcOxvI3TsxTj7REBmTX5K5vl8wA8sAOk9pmB4SdI7yHQtahntnumF3N/V2GgNfC/DsaTN2MD1bnodcvfsi/nM7FVrIVRjgrW6arhbnGunigkFFOBl17tizWiCxKPxsrhopT2RHxaHYk913wdwY4KLjJmN92JvAwRhK3SA2T+hRlNm9oR/t5kD9Y3OIS7IPulHgLyWQ8QtB+pN1t6URHDywdBjgBGyLOMF2/1qNeFmSXJ6qcrbqim/1aBp54X2wm1aooHpNLx1VvngxZAytmerdip8Ui7gwJQmdSjjv3ct+ZMX+PCngSfEP63zmr/YLKnEyA5/F3UZGTSInsqcBSaRGKFeI5sU/M0ToVP5x0Ort4S//psf1UOOjh1w2rjGBpJt8SVtMuaMbY5tTo9QouD5n+RB14UOz2zVBvF5DMyr+XiXicS4PyTt+xnZ6S3NHPW615Arm6SUfpIWQ9fd9pOy215v/44RBqzuFeXCyA/1rF2omn2KZsUHgV1uA1Og7xkKb9BIjoMPjVcYk3pE/9DU93YR4/6fyevC+tcGb5EZw70QG58Mzj8Mm+ZlS+g/bVIkvZx9eHugcE5gN2SaJTxcltdncZuIFFPBSzOJYFmOxNfVpsSoZt84foGfsFNmLWo9Ir8jJkU7QD+mklE/iymZ7da+SZ0T1DX/tXe3+8iWzxEnJ/DAi9oHmQ+lBE/HBgb0+dn92jOKpPqayFE2oHNu3v6Z/QlW5KbHwIlcDMyykQvIVJcnPTxS8HzxUYswdVMlw/r0WdB/nqvylrlUQjIYl8bqxKy960S4PUlQ6IwEX8v2XFL0Rlim6rBNdCoMOpVQNX/2JdLdKtFgxA0wJ9/OyQMQTwzFz7Ht735B8oBMG0/TIsSuRqdOZjzB//pBQ61xF7I7QGb+/4iNazafXDz1Cqr7RbhR5Tyi2DYTIboLuMVKpOn+IC5DAMTjhFGA8NmVMiucZHZagHVR4lh2uZn9mwHYkKtH5APRakq8wGC2Fx+RF+kFIjnz0s/v80ZDpZHJhU5y87R+WQVUjH55y4iTTsRbS6gYzk/m8LN32XsmHlifwYPoSK+9f1St6rBE7T4VoRhHV1FhdVpNcXnUSBaXZnpfRGo5+zAb9+twnb6RPDAQVOCHxxRJKLu61dOuvWosbsvCdNKO3pscE0+qFPHLqPTdQ/7KtWapii1eeI/BihNJ+hwwtckSeRo5Lfqllg1FPJN0B39vCn8WrDJE3Mzj5L8LQB48tDYxE3O2qXdegVborpHq3EY7QLruBu4sL3S+SEtmd9CfR8wMpWI4vD+oCq35JQKW0gB1FjPzadx7RN4J6We8r3Ml/ZDZ6/lam/l2f+UvUBqCAWoB0c3eBquSVkW52Rp3jl5Vc+8kXlAoZCH8ySgbPaTWMniOYNfDI/VxJ9KddgPFItEy9bRlx2PUaGxvfiYxkEogZ5NMJo05Vnse0ux4zkZERGJXHqa7gYoSeE8u4qZbVuNFnJWkV2uS12iTmlv/nHPDBA1NSDWDd8XuOBUXFPIPNJyI2l+pFn7XG2OD7j0WrXz6uc8HUhjWoACP+fIRzXMYXmlk+WjmjTBclpeQNnhrFQL1zf5/+S2xtSo+EWbGBR0t+3q26Nu+GkjaX/wUVG1eyu/tyrMf6XIUsAe82QB1KD4TcizTLvYOGwdYr3rJXArQ1rhPlIbINQ1CHjrfSvKvGKdc/HDymjgod9yA9lTKaQiVIJJz3NMup69CfwoMCLAUWp1XzjHj6labLNwTtAQ4ltOQHevMbNyaC3tOIe9iql/dvIyZLl2KAbTw6ZH2DKco9QiQC7gYx41rP4xREs982SlZcnp7YlVjyqmQSiUNfRqt13WJfLhBI9DvUgHnLbxg6KIsRq47zI/JFpLsQ/PBZoF9vYcXna1AlL8CyMgRwg5cK4BbnG9lbsU8FR92ezEgH4j0bRHG48+EU8U2XGHY4vDTHbaaaltpUszCvo0AME0A/ZWoa0gIy7E7UhhhvxDmUtOCRH5hlsND8u2+YTG4802IjPvY5bAdADLR4peBtgE3RyIZaGj2c+ruZYvj/8QMZGuufw/n2ZHEPHv0bZgTvCXsHF1afkRdW5fuImQxcjkpiCQtScy8SJPmWYHruMGPu+HM76n1ojNronL6Hte5Lr8VYTFfOCNiIGj/rh1Wfv0oQTwWepgFF7GmcXp5v8dJymhYixQieeC2ZigpZ9XUPVaBIQWa+WYnZvJ0Fc0R3XUj5vHOAStf/XasNEjlIrrfKPbww0HqXYpv6hh9tuxsK+GiktkMgbrgz5mVnOE7xQgOaDEK3lwKyP+ra/yl44Yq226ToFzkrL1Nq4/fGmcJKpuW/FyLhsVAkM+c8iNZubin3th5DH0OH5xDTeRO/bL8R4F30ACAYTJLnP7/2BqCxvt3SSgJkNJvrG9HfVhH95BrSipe8Gktsshkb8MFFGaWcgPo/AXPucZUr78haZRNLsJJ0dr39EJMa9OcwrhussYJGsCUbu5+eTX27H0qyH5s7fH+ICG999oWgUT156aOZM0ZJ5fAe0OLdxAYIqTkEWnlcpWRr9NwzU/zHJaphFgQ7XuCGQYxRr4YjZH2WZVWjz7f9wpY/GIe8OfYhhyPdpWMPt8U6fbQ1sGWVYj8zqVsZvtLyKjfEH3eXnzH/n1Kc5KXKTt+IDFrfpcpH2SD0477T2yGsvKMWk2RzZ1FW28Z3pRbUgIafafdRJb4PqkXgw74eZkD2mVehptxzfA9Ns3o8ngi5AtdvAj+UJboti8+FIi4XC+T3okm4Fuhk8vPBRZTUDGMFKHBhOE4P0J6eJA+HHFjfP+dEOW8aapyVOmwv3xPxMsYffWTL4cLOaagBtMO4cYdsWu4NhGUcSo6sOE08dSUF/d9Fa/PBL26caeQXaVOKOMWGNAI9fE27O7c0QI/I54IygbKKxXebS3Teg9oMCqp6ziaYlM8jdAZlv6sbQ+GFGDro2n4j6fwWFeNo6EGPBNlWuBnv+PBA+yiY5Pc9XFNQuNKszpv6QS38rSHTeBcgZtRLSup9/9/S4mTR+k+FzXJwnZ/RHvlm6tI0St4qeyF5S3dO0SatWJxzEKQzLnQRm8OA37D25Fi/FnuEZVMcNrzRz5jCqO0Epv2ZMjHS1Dme40IqyWnpw5+smCCJZkeAZbtc7IdkkDYmNQHzcWd4gBxhfuSe2Ms08iArrIcAjwSsEW0NrQmczz6iyL/QxDrWlzr02jtxWVl62ydlav8aKVvkq07q4/piNgLtfe8dACLYyLnNyZSCnAOJNAEyyZ3dDuav3B32Ze3yho1Mhtznd1Gn/VbmX6aTq580Q9KABh/QMAJRAyvzBtwQ5DWUMB/Bai7QqBqwwfx6czKF4BJf1jKYzhXuoUjkmXBWiKZ8ixQdchA5d0Wqk3YrMTq+0au5lHle6GhXsOSJclJvm5POQIGM14vdfnauWfN+WDltMm9RbB9v20Z1nHUu1F55tWsu6cf2Dnzby3PU91apnzaeVkHXKaOZIzw/ccZYKJb7HYDGwm4c+2WFAI9XHyP364ecSJDLC4UVMdbNPJ9nioIZlrulcFwrCTNSun78QzL5KKtAb+tUzIZ1FN0LAItOIqgqokzVqIxU/JGeGxGEqWmN5j3YhirobrqXjf4ojNW/lBwlU1tu1ttHFBWObdP8DJNpEr19WnVix88IjaTKyeKBAfQoF+knI9AfhGQY4jNUnaP7LRl6pQfHVZjAo7yrH90gSjuUCxABHudxOO+NvmRhZ9IXTTQSmwuvYzFWEchf+GN42zh8t8VFduGJA7pCmAS7gX+kyG77N32u5gYebi171cdU1JjhAIZvsjl7OU2n/k6P9W5j4m6hNJ4seMFs4uWUzsJ03zI2DAd9uNpkvAU5BPtP5OuXcATBCcvn0GD4ifb6PB8wJRyilQTgn/ndAmeq/uegNVzzHcT+tfnZSIBp4bz6jaEEBXUc+AlNRDHPikNz4YPPX/T0hv0fz9hhWJyBYLCyol0GDbPU0H90QTO/SfU6ceBh0j1uy2a/0fpTbROVrnK93iKpl8o/Zd05BsOoEwa/wuZKhsEOaaQRoLbFgcm65vB0BjublrRWBvH1aWqrdkIDTBPV9Thlzj/aOf08FrL6bqSgweHUMPNJs6P3Q2kPowW5Nv7cJHM9Z76ep+cm9DLLZrsodv4wgHTcVSbSa1/fFWhwUj+wiDE54z5W9NnFlkBDk3mktwnlZe57hzqTGfXyqkxqWj3RUUtR1JdPoZQqJFhHAu1t/wImjIhDKWws5TZUSRV5GthigAo62rxAar4Mueow5gw5woI7nSo/38UFY4kDdNzeJ/4vjodK3z6PO8zbV9k0i00Mj05qcf65uKWzHPQA7yXeluefdJb/ZmgHcQP1gtmI6k6HCi21oQZ8/24frHFHGujRk66C8zOtHyUIcgUAOXK8sssxek15KHtNPAXa6juJr6NpcUSoJCOGvd80jGGgvfekyJNeAfp7eF9NUouJA3U7TtNYaq4ScIQxOTWpc9juX+ek+WJ+QMIhi1FYlXd7j3IBVnbCvUXlwd55sH0SiI2TR+fi5pfp51X6M7R1f9gUHs6EKK4U+7pyBeLraSoJRYfPIwWucAPOBUNMkOk4TC9ufAdQnO3RqSXijDM6IRI832njn42wHvQat+cHybJfI8aWx3cE2qb7S+CsbOEPxOIQlUyNQttafcu1IVUgAbXo3g8yJIAgBeu0+Bb80P0aPVejoDFUuIsiAihK44T25KOm4hSyz9Bsk/Kmreo9M+wKOFZIRtmB+8NkY9g62OomtacCYLUr1SStJTAj5X5+YwG2WFUyB7B/oWlIyktGFgR68Lh7URQklSk/jVRGevR6NnmHgriMto28DvRIE2S3whK6hB5J3LcK+44NI5BG0dvsQjgez1+Mc4ccZ7eLHBkPUn2rAy6zLZy3HuXrImXv/Ssugvx0IC058j58LgZGjWg9tpnZ9M74ajTkrrbCsWxtfvFRSw654seqNCCp1G/lsyE1RuTg8WLbYLl3ACcopYxjlu08ZKpUY/Uqlevp8LIVgZriUFXCMFPOfploCB5HrkaTMw1eATn8FwnkHLmOC+CkaTBUHKm1UWJIYHyiNXktuHKc8d2qpLjIhlzXk5mscEekQrSbSpMkq9tpcqbL4/13jewA7g3Idbsj4Qan3dj/Xmp6e4je0dtTQ0vhonL8xdAb2if7oIAvhCONA3Vl/miPuNn4m65rWGQXIoilfk2beipvRDGDuzUfFru5Bf4lpIZWX7mk82W9rAN4xNkUaZgmOCY7j3+NfYmdaQBX/7V5sEeeDFSCoYjcttqRgNAFpD/cMqBSuktkQwbOrCowqUEVsjtExnb3y+H/gYmDu2uNqXaN6FdkJddDi8BP+GVo65CFOe70nPR3aFz1mh2v29IQ6fUXzJI4YYkJyJET0DpVkQh/mDbAAjPU7QAZiFkzy1DzgcX/3u3Mt+RgZs3ubvuryINRimBNWWFEXv4E3GjRpKRhTWEuMtDTQ34TZDcJqECg92zqDT00ul0RbeuXJaP3mxZo9Qb1xglW3a8o/sDX9eodxdRoGJ1zyU2ERizYFK4wuRTyiFtvv/OK4bdiXNprz7GqvReLM6CuUX7khRNNnxlQq7Cjw2WU/NUP9i9teA92XPiklunM7ZerdaRh07JCK7m8hoKQ4vD17xPIKylTMfa8RBHqgXeMiu8fJWxuLfGr5xh9/flmxDwRPMvzTK6bHXgVyOmju9hiTsHjJzplf7El5z4YQtQ7xuTvcIQYntIJfgt56USWAti9J/jlsbFj3kVupfFVqdwRjc9b4mDAO4KPpol9EUhSepRVkKIQwdCv0snz4BR4HTripu2EP80G3Mqrva+m79XWAjIbH/DbKWZOU+Au2jSStYCq637WNsrnzQAP8OMZ1aEiYg/bsm+HLcLUhv/Rv5k+yj0eg8HcNdw9SksBIUvc9Y4jEmHS9jn/Xg8whi1hAOLITi8fFW8f0v7pufg4UuvLjL2WcsNMbFpy/zNrjMm6rbHuxvTJ0FjJKhV4lBJSZqiZh8zR4obMluntGjFhc1Cqq6afo6wrFNN+ecKX8U8JeD+3kOnuUMWn8Cj0ZLRqym+7L6vvcvzKhZvtLM9bw11aAS6Wsr4N7chud99UXQOebAB5fPEYX11aoFh9NVXE+GOZwNtgHStWWKQwXwMUIiW9CW5j2f4RwZaObST2IY6IYVo44ml0+ek3NWUHF7h0JRj8DbG+n/hnZ7efP36//N12w97X65aIj6jMQ35RkkJW4o1kWOqBdcwr8Tldtwvg4rO702KkroWx/KoHC4d3FSHyLuqfCXC4FoiEMTmAymlrf/hF3RbZqOBqik6vrGznPQM8wq2Rqq0fW1Bcp5FsH6OGgC/5x8s2OE+g0oYF015OrWge9mNMerHZf3uZRwHwEZAo8HXB+yZQAACJtberLJepux5o3CHYebYApNgNu8w+nSGGXQKL6dk5Y7nAAAAAAAAAAA==');