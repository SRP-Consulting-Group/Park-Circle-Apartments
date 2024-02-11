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

    header('Content-Type: image/webp');
    header('Content-Length: 3232');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
