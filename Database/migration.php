<?php
require_once 'db.php';


// pagination idea !!
// $page = is_numeric($_GET['page'])? (int)$_GET['page']: 1 ;  /* 2 3 4 5 6 8 9 10 */ 
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

$data_limit = 10;

$offset = ($page - 1) * $data_limit ;  

$count_query = " SELECT COUNT(*)  AS count_product FROM products "; //res of query 100

$count_product =$conn ->query($count_query) -> fetch()['count_product'] ; //fetch number (100)
    // print_r($count_product);
$page_number = ceil($count_product / $data_limit); // 10
    // print_r($page_number);
$sql = " SELECT * FROM `products` LIMIT 10  OFFSET $offset ";
//create obj 
$select = $conn->query($sql);
//fetch data from database as object 
$products = $select->fetchAll(PDO::FETCH_OBJ);

