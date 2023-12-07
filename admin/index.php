<?php
require_once '../core/db/boot.php';
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
        include_once './view/statistics/_index.php';
    }else{
        header('Location: ../public/home.php');
    }
}