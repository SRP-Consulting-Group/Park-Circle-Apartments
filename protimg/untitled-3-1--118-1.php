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
    header('Content-Length: 6088');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
