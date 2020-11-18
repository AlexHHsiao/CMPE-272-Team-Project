<?php
// Include the Router class
require __DIR__ . '/vendor/autoload.php';
require_once './db/db.php';
// Create a Router
$router = new \Bramus\Router\Router();

// Custom 404 Handler
$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404, route not found!';
});

// Before Router Middleware
$router->before('GET', '/.*', function () {
    header('X-Powered-By: bramus/router');
});

$router->all('/', function () {
    require_once  './views/home.php';
});

$router->all('/about', function () {
    require_once  './views/about.php';
});

$router->all('/news', function () {
    require_once  './views/news.php';
});

$router->all('/product', function () {
    require_once  './views/product.php';
});

$router->get('/product/(\w+)', function($name) {
    $GLOBALS['selectedProduct'] = htmlentities($name);
    require_once  './views/product-detail.php';
});

$router->all('/user', function () {
    require_once  './views/user.php';
});

$router->all('/contact', function () {
    require_once  './views/contact.php';
});

$router->get('/getUser', function () {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://cmpe-php.herokuapp.com/API/index.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    echo curl_exec($ch);
    curl_close($ch);
});

$router->run();
