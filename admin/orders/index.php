<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_list = get_all_order();
   
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
        include_once '../view/orders/_index.php';
    }else{
        header('Location: ../../home.php');
    }
}