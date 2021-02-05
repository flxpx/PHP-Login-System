
<?php
    // allow the config
    define('__CONFIG__', true);
    // require the config
    require_once "../inc/config.php"; 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // always return JSON Format
        header('Content-Type: application/json');

        $return = [];

        // Make sure user does not exist

        // make sure the user can be added AND is added

        // return the proper information back to JavaScript to redirect us

        $return['redirect'] = '/php-login-system/dashboard.php';

        $return['name'] = 'Felix Blum';
        echo json_encode($return, JSON_PRETTY_PRINT); exit;

    } else {
        // die - kill the script, redirect the user. do something regardless.
        exit('test');
    }
    
;?>