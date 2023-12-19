<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = get_all_categories();
     foreach ($category as $categoryy) {
        if ($categoryy == $_POST["category_id"]) {    
            $_POST["category_id"] = $categoryy['id'];
            break;
        }
     }
    $createProduct = array(
        "image" => $_POST['image'],
        "name" => $_POST['name'],
        "description" => $_POST["description"],
        "price" => $_POST["price"],
        "quantity" => $_POST["quantity"],
        "category_id" => $_POST["category_id"]
    );
    insert_products($createProduct);
    
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product = get_all_categories();
    include_once '../view/products/_create.php';
}