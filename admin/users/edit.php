<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateUser = array(
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "phone" => $_POST['phone'],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "role" => $_POST["role"],
    );

    update_users($updateUser);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $user_id = $_GET['user_id'];
    $user = get_users($user_id);

    include_once '../view/users/_edit.php';
}