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
    header('Content-Length: 5658');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
