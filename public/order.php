<?php 
include_once '../core/db/db_products.php';
include_once '../core/db/db_orders.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   
}
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $user_id = $_SESSION['users_id'];
    $order = get_all_by_order($user_id);
    
    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        include_once './view/_order.php'; 
    } else {
        include_once './view/_account.php';
    }
}
?>