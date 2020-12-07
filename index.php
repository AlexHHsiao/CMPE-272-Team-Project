<?php
// Include the Router class
require __DIR__ . '/vendor/autoload.php';
require_once './db/db.php';
session_start();

$GLOBALS['productData'] = array(
    "product 1",
    "product 2",
    "product 3",
    "product 4",
    "product 5",
    "product 6",
    "product 7",
    "product 8",
    "product 9",
    "product 10",
);

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
    require_once './views/home.php';
});

$router->all('/topFive', function () {
    require_once './views/top-five.php';
});

$router->all('/visited', function () {
    if (isset($_SESSION['user'])) {
        require_once './views/visited.php';
    } else {
        header('Location: /');
    }

});

$router->all('/product/(\w+)', function ($name) {
    if (isset($_SESSION['user'])) {
        $temArr = $_SESSION['user']['visited'];
        $userId = $_SESSION['user']['userId'];
        $temSession = $_SESSION['user'];

        if (array_key_exists($name, $temArr)) {
            unset($temArr[$name]);
        }

        $temArr = array($name => array('id' => $name, 'name' => $GLOBALS['productData'][$name])) + $temArr;
        $temSession['visited'] = $temArr;
        $_SESSION['user'] = $temSession;
        $GLOBALS['selectedProduct'] = $name;

        $sqlValue = serialize($temArr);
        $conn = $GLOBALS['conn'];

        $query = "UPDATE Persons SET Visited='$sqlValue' WHERE Id='$userId'";
        $conn->query($query);

        require_once './views/product-detail.php';
    } else {
        header('Location: /');
    }
});

$router->run();
