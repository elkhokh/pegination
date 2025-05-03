<?php
require_once 'db.php';
$sql = " SELECT * FROM products" ;
$select =  $conn->query($sql);
$products = $select -> fetchAll(PDO::FETCH_OBJ);
// echo "<pre>";
// print_r($res);
// echo "</pre>";