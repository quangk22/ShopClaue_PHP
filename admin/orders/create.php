<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $createOrder = array(
        "id" => $_POST['id'],
        "code" => $_POST['code'],
        "status" => $_POST['status'],
        'users_id' => $_POST['users_id'],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
        'date' => date('Y-m-d H:i:s'),
    );
    insert_orders($createOrder);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once '../view/orders/_create.php';
}