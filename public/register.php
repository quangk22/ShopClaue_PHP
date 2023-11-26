<?php
include_once '../core/db/db_products.php';
include_once '../core/db/db_order_items.php';
include_once '../core/db/db_users.php';
session_start();
$message ='';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['dk_email']) && isset($_POST['dk_password'])) {
        $email = $_POST['dk_email'];
        $password = $_POST['dk_password'];

        // Lấy thông tin người dùng từ email
        $existingUser = get_by_email_users($email);

        if ($existingUser) {
            $message = 'Email đã tồn tại';
            include_once './view/_account.php';
            exit(); // Kết thúc kịch bản ngay sau khi chuyển hướng
        } else {
            $user = array(
                'email' => $email,
                'password' => $password,
                'role' => "user",
            );
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            // Gọi hàm insert_users và lưu ý kết quả
            $userInserted = insert_users($user);

            if ($userInserted) {
                // Gọi header trước khi xuất thông điệp
                header('Location: account.php');
                exit(); // Kết thúc kịch bản ngay sau khi chuyển hướng
            } else {
                $message = 'Có lỗi khi đăng ký người dùng. Vui lòng thử lại.';
                header('Location: account.php');
                exit(); // Kết thúc kịch bản ngay sau khi chuyển hướng
            }
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
}
?>