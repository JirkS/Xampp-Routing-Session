<?php
session_start();
$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/home':
        $redirect = '/views/home.php';
        break;

    case '/data':
        $redirect = '/views/data.php';
        break;

    case '/login':
        $redirect = '/views/login.php';
        break;

    case '/next':
        $redirect = '/views/next.php';
        break;

    case '/loggedhome':
        $redirect = '/views/loggedhome.php';
        break;

    case '/loggeddata':
        $redirect = '/views/loggeddata.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        exit();
}


$_SESSION['site'] = $redirect;
require_once __DIR__ . $redirect ?? __DIR__ . '/index.php';

