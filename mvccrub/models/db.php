<?php
require_once "env.php";
// tao ket noi tu project php sang mysql
function getConnect()
{
    $connect = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME
        .";charset=".DBCHARSET, DBUSER, DBPASS
    );
    return $connect;
}

// new nhu dung de lay danh sach san pham thi se truyen vao true con
// truyen false thi se chay duoc cac cau lenh truy van them sua xoa

function getData($query,$getAll=true)
{
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getAll){
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}
