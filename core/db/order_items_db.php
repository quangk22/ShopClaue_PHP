<?php 
require_once 'mysql.php';
$pdo = get_pdo();
function get_all_order_items(){
    global $pdo;

    $sql = "SELECT * FROM ORDER_ITEMS";
    $stmt = $pdo->prepare($sql);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $order_items_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $order_items= array(
            'id' => $row['id'],
            'order_id' => $row['order_id'],
            'product_id' => $row['product_id'],
            'quantity' => $row['quantity'],
            'price' => $row['price']
        );
        array_push($order_items_list, $order_items);
    }
    
    return $order_items_list;
}

function delete_order_items($order_items_id){
    global $pdo;

    $sql = "DELETE FROM ORDER_ITEMS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $order_items_id);

    $stmt->execute();

}

function insert_order_items($order_items){
    global $pdo;
    $sql = "INSERT INTO ORDER_ITEMS(ID, ORDER_ID, PRODUCT_ID, QUANTITY , PRICE) VALUES(NULL, :order_id, :product_id, :quantity, :price)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':order_id', $order_items['order_id']);
    $stmt->bindParam(':product_id', $order_items['product_id']);
    $stmt->bindParam(':quantity', $order_items['quantity']);
    $stmt->bindParam(':price', $order_items['price']);
    
    $stmt->execute();
}
function get_order_items($order_items){
    global $pdo;

    $sql = "SELECT * FROM ORDER_ITEMS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $order_items);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'order_id' => $row['order_id'],
            'product_id' => $row['product_id'],
            'quantity' => $row['quantity'],
            'price' => $row['price']
        );
    }

    return null;
}

function update_order_items($order_items){
    global $pdo;
    $sql = "UPDATE ORDER_ITEMS SET ORDER_ID=:order_id, PRODUCT_ID=:product_id, QUANTITY=:quantity, PRICE=:price WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $order_items['id']);
    $stmt->bindParam(':order_id', $order_items['order_id']);
    $stmt->bindParam(':product_id', $order_items['product_id']);
    $stmt->bindParam(':quantity', $order_items['quantity']);
    $stmt->bindParam(':price', $order_items['price']);
    
    $stmt->execute();
}
?>