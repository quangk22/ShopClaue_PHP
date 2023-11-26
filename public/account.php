<?php
include_once '../core/db/db_products.php';
include_once '../core/db/db_order_items.php';
include_once '../core/db/db_users.php';
session_start();
$error_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = get_by_email_users($email);
        $check_login = false;

        if ((isset($_POST['btnlogin'])) && ($_POST['btnlogin'])) {
            if ($user && ($user['password'] == $password)) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $check_login = true;
            }
        }

        if ($check_login) {
            header('Location: home.php');
        } else {
            $check_login = false;
            $error_message = 'Incorrect email or password. Please try again.';
            include_once './view/_account.php';
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productList = get_all_products();
    $itemsList = get_all_order_items();
    $total = get_all_total();

    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        header('Location: home.php');
    } else {
        include_once './view/_account.php';
    }
}
?>