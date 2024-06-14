<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url){
    case '/':
        listProduct();
        break;
    case 'update':
        updateProduct();
        break;
    case 'delete':
        deleteProduct();
        break;
    case 'insert':
        newProduct();
        break;
}