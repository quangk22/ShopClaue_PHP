<?php
require_once '../../core/db/boot.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $product_list = get_all_products();
    $catecoryLits = get_all_categories();
    include_once '../view/products/_index.php';
}