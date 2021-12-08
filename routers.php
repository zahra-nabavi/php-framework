<?php
// Create Router instance
$router = new \Bramus\Router\Router();
//$router->setNamespace('\App\Controllers');
$router->get('/', 'homeController@mainPage');
//$router->get('/test(/\d+)?(/\d+)?(/\d+)?', 'testController@test');
$router->before('GET|POST','/test', 'adminController@test');
$router->get('/test', 'testController@test');
$router->get('/admin', 'adminController@admin');
$router->get('/login', 'loginController@form');
$router->post('/login', 'loginController@form');
$router->get('/logout', 'loginController@logout');

$router->set404(function() {
view('404');
header('HTTP/1.1 404 Not Found');
// ... do something special here
});

// Run it!
$router->run();