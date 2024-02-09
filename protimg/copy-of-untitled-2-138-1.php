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
    header('Content-Length: 4164');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
