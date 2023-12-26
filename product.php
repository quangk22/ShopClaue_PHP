<?php
include_once './core/db/boot.php';
@session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
    $category_list = get_all_categories();
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $productList = get_products_by_category_and_page($category_id, $page);
    } else {
        $page = 1;
        if (isset($_GET['page'])) {
            $page = intval($_GET['page']) > 0 ? intval($_GET['page']) : 1;
        }
        // Nếu không có giá trị lọc, lấy danh sách tất cả sản phẩm
        $productList = get_products_by_page($page);
    }
    include_once './view/_product.php';
}

?>