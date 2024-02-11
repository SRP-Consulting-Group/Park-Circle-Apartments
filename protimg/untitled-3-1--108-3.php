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

    header('Content-Type: image/webp');
    header('Content-Length: 5350');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
