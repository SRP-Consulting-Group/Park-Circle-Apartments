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
            $redirect = 'maintiance.php';
            if(strlen($redirect) > 0) {
                $_SESSION['user_redirect'] = $redirect;
            }
            header('Location: ../user-login.html');
            exit;
        }
    }
    $acg = array('0','1');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'AEBC8786-C8B7-4743-B214-D1D992C31321' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'maintiance.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.html');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 27150');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');