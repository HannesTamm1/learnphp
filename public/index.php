<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;  
}

require __DIR__ . '/../vendor/autoload.php';

session_start();

require __DIR__ . '/../helpers.php';
require __DIR__ . '/../routes.php';

$router = new App\Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if ($match) {

    $action = (is_array($match) && array_key_exists('action', $match)) ? $match['action'] : null;

    if (is_callable($action)) {
        call_user_func($action);
    } else if (is_array($action) && isset($action[0], $action[1])) {
        $class = $action[0];
        $controller = new $class();
        $method = $action[1];
        $controller->$method();
    } else {
        echo '<img src="https://http.cat/404">';
    }
} else {
    echo '<img src="https://http.cat/404">';
}
