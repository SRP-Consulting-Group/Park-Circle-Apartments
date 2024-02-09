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
    header('Content-Length: 2170');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
