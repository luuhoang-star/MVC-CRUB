<?php
require_once "models/Product.php";

function listProduct()
{
    $products = getProduct();
    include "views/list.php";
}
function updateProduct()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $product = getProduct($id);
        include "views/update.php";
    }
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        update($id,$name,$price);

         header("Location: index.php");
    }
}
function deleteProduct()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        delete($id);
        header("Location: index.php");
       }
}
function newProduct()
{
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        inset($name,$price);
        header("Location: index.php");
    }
    include "views/new.php";
}
