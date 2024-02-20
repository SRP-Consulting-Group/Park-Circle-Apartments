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
    header('Content-Length: 11442');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('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');
