<?php 
include_once '../core/db/db_order_items.php';
include_once '../core/db/db_products.php';

session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['_method'])) {
        switch ($_POST['_method']) {
            case 'delete':
                delete();
                break;
            case 'create':
                create();
                break;
            case 'update':
                update();
                break;
        }

    }
    header('location: view_cart.php');
}
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    } else {
        $cart = array();
    }
    $productList = get_all_products();
    include_once './view/_view_cart.php'; 
}
function create(){
    $isEmpty = true;

    if (isset($_SESSION['cart'])) {
        //Gio hang da ton tai
        $cart = $_SESSION['cart'];
        /**
         * Kiem tra san pham co trong gio hang
         * 1: Neu co cap nhat them so luong
         * 2: Neu khong thi them vao gio hang
         */
        for ($i = 0; $i < count($cart); $i++) {
            if ($cart[$i]['productId'] == $_POST['productId']) {
                $cart[$i]['quantity'] = $cart[$i]['quantity'] + 1;
                $isEmpty = false;
                break;
            }
        }
    } else {
        //Lan dau dua vao gio hang. Gio hang chua ton tai
        $cart = array();
    }

    if ($isEmpty) {
        $order_item = array(
            'productId' => $_POST['productId'],
            'productName' => $_POST['productName'],
            'productImage' => $_POST['productImage'],
            'productPrice' => $_POST['productPrice'],
            'quantity' => $_POST['quantity'],
        );
        array_push($cart, $order_item);
    }

    $_SESSION['cart'] = $cart;
}
function delete(){
    $cart = $_SESSION['cart'];
    if(isset($_POST['productId'])){
        for ($i = 0; $i < count($cart); $i++) {
            if($cart[$i]['productId'] == $_POST['productId']){
                unset($cart[$i]);
            }
        }
        // Cập nhật lại chỉ số của mảng sau khi xoá
        $cart = array_values($cart);
    }
    $_SESSION['cart'] = $cart;
}
function update(){

}
?>
