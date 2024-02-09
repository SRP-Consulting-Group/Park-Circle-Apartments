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

    header('Content-Type: image/png');
    header('Content-Length: 11489');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
