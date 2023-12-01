<?php
include_once '../core/db/db_products.php';
include_once '../core/db/db_users.php';
include_once '../core/db/db_order_items.php';

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
                    $_SESSION['users_id'] = $user['id'];
                    $check_login = true;
                }
            }

            if ($check_login) {
                // Kiểm tra xem giỏ hàng có hàng hay không
                if(isset($_SESSION['cart']) && !empty($_SESSION['cart']) && $_SESSION['isCheck']) {
                    // Nếu có hàng trong giỏ hàng, chuyển hướng đến check_out.php
                    header('Location: check_out.php');
                } else {
                    // Nếu không có hàng trong giỏ hàng, chuyển hướng đến home.php
                    header('Location: home.php');
                }
            } else {
                $check_login = false;
                $error_message = 'Incorrect email or password. Please try again.';
                include_once './view/_account.php';
            }
        }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productList = get_all_products() ;

    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        header('Location: check_out.php');
    } else {
        include_once './view/_account.php';
    }
}
?>