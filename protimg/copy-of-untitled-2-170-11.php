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
    header('Content-Length: 6496');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');