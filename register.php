<?php
include_once './core/db/boot.php';
@session_start();
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dk_email']) && isset($_POST['dk_password'])) {
        $email = $_POST['dk_email'];
        $password = $_POST['dk_password'];

        // Lấy thông tin người dùng từ email
        $existingUser = get_by_email_users($email);

        if ($existingUser) {
            $_SESSION['message'] = 'Error: An account is already registered with your email address.';
            header('Location: account.php');
            exit();
        } else {
            // Xử lý đăng ký người dùng
            $user = array(
                'email' => $email,
                'password' => $password,
                'role' => "user",
            );

            insert_users($user);


            $_SESSION['message'] = 'Registration successful, please fill in the login form';
            header('Location: account.php');
            exit();

        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        header('Location: home.php');
        exit(); // Kết thúc kịch bản ngay sau khi chuyển hướng
    } else {
        include_once './view/_account.php';
    }
    // 
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    } else {
        $cart = array();
    }
}
?>