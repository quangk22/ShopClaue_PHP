<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updateCategory = array(
        "id" => $_POST['id'],
        "image" => $_POST['image'],
        "name" => $_POST['name'],
        "description" => $_POST['description'],
    );

    update_category($updateCategory);
    
    header('Location: index.php');

}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $category_id = $_GET['category_id'];
    $category = get_category($category_id);

    include_once '../view/category/_edit.php';
}