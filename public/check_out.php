<?php 
include_once '../core/db/db_products.php';
include_once '../core/db/db_order_items.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
}
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $productList = get_all_products();

    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        include_once './view/_check_out.php';
        
    } else {
        include_once './view/_account.php';
    }
}
?>