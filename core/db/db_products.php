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
?>