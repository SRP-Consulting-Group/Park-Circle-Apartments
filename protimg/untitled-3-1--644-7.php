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

    header('Content-Type: image/avif');
    header('Content-Length: 22279');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');