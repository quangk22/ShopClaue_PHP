<?php
require_once '../../core/db/boot.php';
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $inventory = get_all_by_products();
    $delivered = get_all_order_delivered();
    $customers = get_all_users_customers();
    $revenue = get_revenue();
    $order_list = get_all_order();
    $order = get_all_by_orders();
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
        include_once '../view/statistics/_index.php';
    }else{
        header('Location: ../../home.php');
    }
}