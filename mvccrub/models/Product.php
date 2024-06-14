<?php
require_once "models/db.php";

// Xay dung ham truy van de lay dc danh sach san pham

function getProduct($id=1)
{
    $sql="SELECT * FROM products ";
    if ($id!=1){
        $sql=$sql." WHERE id='$id'";
    }else{
        $sql=$sql." WHERE $id";
    }
    return getData($sql);
}
function update($id,$name,$price)
{
    $sql="UPDATE products SET name='$name',price=$price WHERE id='$id' ";
    return getData($sql,false);
}
function delete($id)
{
    $sql="DELETE FROM `products` WHERE id='$id' ";
    return getData($sql,false);
}
function inset($name,$price)
{
    $sql="INSERT INTO products(name,price) VALUES ('$name','$price')";
    return getData($sql,false);
}