<?php 
include_once '../core/db/db_products.php';
include_once '../core/db/db_order_items.php';
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productList = get_all_products();
    $productSearch = []; // Khởi tạo mảng trống
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        // Gọi hàm xử lý tìm kiếm với từ khóa
        $searchResults = get_search_products($search);
    }

    include_once './view/_search.php';
}
?>