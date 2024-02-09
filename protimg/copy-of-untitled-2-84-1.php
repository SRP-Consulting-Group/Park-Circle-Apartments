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
    header('Content-Length: 1822');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
