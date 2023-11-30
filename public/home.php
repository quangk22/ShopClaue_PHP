<?php 
include_once '../core/db/db_products.php';
include_once '../core/db/db_order_items.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
}
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $productList = get_all_products();
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    } else {
        $cart = array();
    }
    include_once './view/_home.php'; 
}
?>