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
            header('Location: ../user-login.html');
            exit;
        }
    }
    $acg = array('0','1');
    if(!isset($_SESSION['session_id']) || $_SESSION['session_id'] !== 'AEBC8786-C8B7-4743-B214-D1D992C31321' || !isset($_SESSION['user_id']) || !isset($_SESSION['user_logged']) || $acg === NULL || !checkAccess($acg)) {
        $redirect = 'user-dashboard.php';
        if(strlen($redirect) > 0) {
            $_SESSION['user_redirect'] = $redirect;
        }
        header('Location: ../user-login.html');
        exit;
    }
    unset($_SESSION['user_redirect']);
    unset($_SESSION['user_redirect_attempt']);

    header('Content-Type: image/png');
    header('Content-Length: 14484');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
