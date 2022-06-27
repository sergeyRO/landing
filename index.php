<?php

$_GET['url'] = strtolower($_GET['url']);

switch($_GET['url']) {
    case '': {
        $file = file_get_contents('welcome.php');
        echo $file;
        break;
    }
    default:
    {
        http_response_code(404);
        break;
    }
}