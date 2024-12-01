<?php

require_once '../app/core/setup.php';
require_once '../app/core/Router.php';
//require_once '../app/controllers/MainController.php';

use app\core\Router;
$router = new Router();

echo "<h1>Database Connection Test</h1>";

if ($conn) {
    echo "<p>Connection successful! 🎉</p>";
} else {
    echo "<p>Connection failed. ❌</p>";
}




