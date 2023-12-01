<?php 
include_once '../core/db/db_products.php';
include_once '../core/db/db_orders.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
}
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $order = get_all_by_order();
    include_once './view/_order.php'; 
}
?>