<?php
session_start();
// error_reporting(0);

require_once('./models/db.php');
require_once('./env.php');

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

switch ($url) {
    case "/":
        require_once('./controllers/UserControllers.php');
        getUser();
        break;
    case "add-user":
        require_once('./views/dangKi.php');
        break;
    case "AddController":
        require_once('controllers/UserControllers.php');
        postUser();
        break;
    case "delete-user":
        require_once('./controllers/UserControllers.php');
        deleteUser();
        break;
    case "product":
        require_once("./controllers/ProductControllers.php");
        getProduct();
        break;
    case "delete-product":
        require_once("./controllers/ProductControllers.php");
        deleteProduct();
        break;
}
