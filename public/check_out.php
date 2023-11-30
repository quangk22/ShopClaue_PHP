<?php 
include_once '../core/db/db_products.php';

session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    
}
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $productList = get_all_products();
    $_SESSION['isCheck'] = false;

    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        include_once './view/_check_out.php';
        
    } else {
        $_SESSION['isCheck'] = true;
        include_once './view/_account.php';
    }
}
?>