<?php
include 'includes/functions.php';

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';


/*if(isset($_SERVER['PATH_INFO'])) route($_SERVER['PATH_INFO']);

if(isset($_GET['f']) && isset($_GET['c']) )
{
    $controller=$_GET['c']; // login
    $function=$_GET['f']; // form
    loadController($controller,$function);
}else loadController($defaultController,$defaultFunction);*/





/*if(empty($_SERVER['QUERY_STRING']))
{
    load_controller($defaultController,$defaultFunction);
} else{
    $path=explode('/',$_SERVER['REQUEST_URI']);
    $path=(array_splice($path,3));
    $controller=current($path);
    $function=end($path);
    load_controller($controller,$function);
}*/

