<?php
include_once './core/db/boot.php';

@session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['email']) != "") {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (isset($_SESSION['users_id']) && $_SESSION['users_id'] != "") {
            $orderCode = rand(100000, 999999);
            $orders = array(
                'code' => $orderCode,
                'status' => 'pending',
                'users_id' => $_SESSION['users_id'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'date' => date('Y-m-d H:i:s'),
            );

            // Thực hiện lệnh INSERT
            insert_orders($orders);

            // Lấy order_id vừa thêm
            $orderId = get_last_inserted_order_id();

            $cart = $_SESSION['cart'];
            for ($i = 0; $i < count($cart); $i++) {
                $orderItems = array(
                    "order_id" => $orderId,
                    "product_id" => $cart[$i]['productId'],
                    "quantity" => $cart[$i]['quantity'],
                    "price" => $cart[$i]['productPrice'] * $cart[$i]['quantity'],
                );

                // Thực hiện lệnh INSERT cho order_items
                insert_order_items($orderItems);
            }
            unset($_SESSION['cart']);
            header('Location: order.php');
        } else {
            header('Location: account.php');
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productList = get_all_products();
    $_SESSION['isCheck'] = false;

    if (isset($_SESSION['email']) && $_SESSION['email'] != "") {
        include_once './view/_check_out.php';

    } else {
        $_SESSION['isCheck'] = true;
        include_once './view/_account.php';
    }
}
function get_last_inserted_order_id() {
    global $pdo; 
    return $pdo->lastInsertId();
}
?>