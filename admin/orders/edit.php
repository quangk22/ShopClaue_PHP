<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateOrder = array(
        "id" => $_POST['id'],
        "code" => $_POST['code'],
        "status" => $_POST['status'],
        "users_id" => $_POST['users_id'],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
    );

    update_orders($updateOrder);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $order_id = $_GET['order_id'];
    $order = get_orders($order_id);
    
    include_once '../view/orders/_edit.php';
}