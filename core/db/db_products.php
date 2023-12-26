<?php 
require_once 'mysql.php';
$pdo = get_pdo();
function get_all_products(){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $products_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $products= array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'category_id' => $row['category_id']
        );
        array_push($products_list, $products);
    }
    
    return $products_list;
}

function delete_products($products_id){
    global $pdo;

    $sql = "DELETE FROM PRODUCTS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $products_id);

    $stmt->execute();

}

function insert_products($products){
    global $pdo;
    $sql = "INSERT INTO PRODUCTS(ID, IMAGE, NAME, DESCRIPTION, PRICE, QUANTITY , CATEGORY_ID) VALUES(NULL, :image, :name, :description, :price, :quantity, :category_id)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':image', $products['image']);
    $stmt->bindParam(':name', $products['name']);
    $stmt->bindParam(':description', $products['description']);
    $stmt->bindParam(':price', $products['price']);
    $stmt->bindParam(':quantity', $products['quantity']);
    $stmt->bindParam(':category_id', $products['category_id']);
    
    $stmt->execute();
}
function get_products($products){
    global $pdo;

    $sql = "SELECT * FROM PRODUCTS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $products);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'category_id' => $row['category_id'],
        );
    }

    return null;
}

function update_products($products){
    global $pdo;
    $sql = "UPDATE PRODUCTS SET IMAGE=:image, NAME=:name,DESCRIPTION=:description, PRICE=:price, QUANTITY=:quantity,CATEGORY_ID=:category_id WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $products['id']);
    $stmt->bindParam(':image', $products['image']);
    $stmt->bindParam(':name', $products['name']);
    $stmt->bindParam(':description', $products['description']);
    $stmt->bindParam(':price', $products['price']);
    $stmt->bindParam(':quantity', $products['quantity']);
    $stmt->bindParam(':category_id', $products['category_id']);
    
    $stmt->execute();
}

function get_all_by_products(){
    global $pdo;

    $sql = "SELECT sum(quantity) as quantity
    FROM products;";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $products_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $products= array(       
            'quantity' => $row['quantity'],    
        );
        array_push($products_list, $products);
    }
    
    return $products_list;
}
function get_search_products($search){
    global $pdo;

    $sql = "SELECT * FROM products WHERE name LIKE :search";
    $stmt = $pdo->prepare($sql);

    // Sử dụng bindValue thay vì bindParam để tránh lỗi
    $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    return $result;
}
function get_products_by_page($page){
    global $pdo;

    $perPage = 8;
    $begin = ($page - 1) * $perPage;

    $sql = "SELECT * FROM PRODUCTS LIMIT $begin, $perPage";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
    
     
    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $product = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'description' => $row['description'],
            'price' => $row['price'],
            'name' => $row['name'],
            'quantity' => $row['quantity'],
        );
        array_push($product_list, $product);
    }
    
    return $product_list;
}

function get_products_min_price()
{
    global $pdo;

    $sql = "SELECT PRICE FROM PRODUCTS ORDER BY PRICE ASC LIMIT 1";

    $stmt = $pdo->prepare($sql);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchColumn();
    // Lặp kết quả và xây dựng mảng tên sản phẩm


    return $result;
}
function get_products_by_category($category_id){
    global $pdo;

    $sql = "SELECT products.id, products.image, products.name, products.description, price, quantity, category_id
    FROM products
    JOIN categories ON products.category_id = categories.id
    WHERE category_id = :id;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $category_id);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $products_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $products= array(
            'id' => $row['id'],
            'image' => $row['image'],
            'name' => $row['name'],
            'description' => $row['description'],
            'price' => $row['price'],
            'quantity' => $row['quantity'],
            'category_id' => $row['category_id']
        );
        array_push($products_list, $products);
    }
    
    return $products_list;
}
function get_products_by_category_and_page($category_id, $page) {
    global $pdo;

    $perPage = 8;
    $begin = ($page - 1) * $perPage;

    $sql = "SELECT * FROM products WHERE category_id = :category_id LIMIT $begin, $perPage";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    $product_list = array();

    // Lặp kết quả
    foreach ($result as $row) {
        $product = array(
            'id' => $row['id'],
            'image' => $row['image'],
            'description' => $row['description'],
            'price' => $row['price'],
            'name' => $row['name'],
            'quantity' => $row['quantity'],
        );
        array_push($product_list, $product);
    }

    return $product_list;
}
?>