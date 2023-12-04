<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $createCategory= array(
    "image" => $_POST['image'],
    "name" => $_POST['name'],
    "description" => $_POST['description'],
   );
    insert_category($createCategory);

    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include_once '../view/category/_create.php';
}