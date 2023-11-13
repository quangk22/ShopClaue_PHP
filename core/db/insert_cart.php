<?php
include_once 'db_order_items.php';
if (isset($_POST['id']) && isset($_POST['price']) && isset($_POST['quantity']) ) {
    $product_id = $_POST['id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $order_items = array(
        'order_id' => $product_id,
        'product_id' => $product_id,
        'quantity' => $quantity,
        'price' => $price
    );

    // Thực hiện việc thêm mục đặt hàng và xử lý lỗi
    insert_order_items($order_items);
    echo 'Product added to cart successfully.';
} else {
    echo 'Thiếu thông số POST hoặc không hợp lệ.';
}
if (isset($_POST['item_id'])) {
    delete_order_items(($_POST['item_id']));
} else {
    echo 'loi id';
}
?>