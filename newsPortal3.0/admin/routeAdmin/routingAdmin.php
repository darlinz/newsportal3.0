<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0];
    $num = substr_count($host, '/');
    $path = explode('/', $host)[$num];

    if ($path == '' OR $path == 'index' OR $path == 'index.php') {
        $response = controllerAdmin::formLoginSite();
    }

    elseif($path == 'login.php' OR $path == 'login') {
        $response = controllerAdmin::loginAction();
    }

    elseif($path == 'logout.php' OR $path == 'logout') {
        $response = controllerAdmin::logoutAction();
    }

    else {
        $response = controllerAdmin::error404();
    }

?>