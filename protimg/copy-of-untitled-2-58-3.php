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
    header('Content-Length: 878');
    header('X-PHP-Response-Code: 200', true, 200);
    echo base64_decode('UklGRmYDAABXRUJQVlA4WAoAAAAQAAAAOQAAFQAAQUxQSAYCAAABkHRt2xlJd1hI27Zt27aVVlLVKXT12LbXxm5+Z6E5+4iYAC5uVG6+yiUUihe9vsODa3UXLnrY2qiLBqLvXjDbpLvTQcgM90WJGzr06c7ia10CoeXreecVP90EiBNmZ3pcp7UdT3izh3PVOo/ePcyEaF8/QPpvgZyEEKJrgvOMn/A+8JYB2rVSgtd1b9p+VZDmH+UcE2ZdlqdDBITtmpSgjkNi7f5soOR6HWcfO2vqvmmN4JTV6JtAv6UCdzTUNX8iZ+4YNzeN1SRCZ82lWsTvLIlA1DXq7o1y5kKPe9E6yiW8klk70+srJzgvsGUmcebFxtyKv4bIzad9MogS6vGbIkAII6haXGpueUtPmx2kua2+g1bC2oOSl75GA8lbxRO7XxTssR3GjbH5DcPtdvu8lsvY314acODYGNu/OTW+bhz2STg3loA4b5s3Aci/dtBV/Pu674b5768x0dSRYk8uItLYN6+s9obi9PjEh2lDd1ZEQNv6sr/mEgi2KqMXtoevrT1b+tJXtrn/RlEKhvQbQ4Cy5I4hOGZ3WQ8cz8d0xQBeLeVErQUUS9Dvnry+fWu2062vVvW+2b62318QIwD2aoKV0WvF5n19ffv7e88wRTpxMXImIMgkOrUcO6GLWnMlIlf7A+NK6+P1Ce9EEtiI07iQ9qSk8cCkE6IAiQtdeWu6UeU/C1ZQOCA6AQAA8AYAnQEqOgAWAD45FolDIiEhFg1VmCADhLSIoCVd0EAAegLeLmbb5B+pInfE9DT0IcdkG39ybWLGQyNUPg7wwAD+/WuP4H91D/9wmoja2Mf8YkOvEtGpA8FB3XyC5yUwZnZTkpjovO8WUeZGgPwN1zLoh9ji45aAaBevRaz4DNqVtTntckSNpemoBlK6ji/SDJB/9dG512yruhMVMNcJeqTB2+7IRWjL2No+0hWbFdO1aRTdugag3W+ytaO7Ed/c8dUrcEY1M1dNcmluXzqOlEi8zUgSfAaH58wR/uRLPW7xBbmcsjCQ0ix/mv6eXSiWAUa+AvXIx5B27zB5cfYXZDKxGcifxE9TW94sOl2jHSRPVzb4SsO/Z5GyPx2dzOHAGOZFSykBiSDwmFgoLOhmxRXX/t3B4coAAAA=');
