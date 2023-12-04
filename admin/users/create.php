<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $createUser = array(
        "id" => $_POST['id'],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "role" => $_POST["role"],
    );
    insert_users($createUser);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once '../view/users/_create.php';
}