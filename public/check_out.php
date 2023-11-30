<?php 
include_once '../core/db/db_products.php';
include_once '../core/db/db_order_items.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
}
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $productList = get_all_products();
    include_once './view/_check_out.php'; 
}
?>