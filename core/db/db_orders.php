<?php
require_once 'mysql.php';
$pdo = get_pdo();
function get_all_order()
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS";
    $stmt = $pdo->prepare($sql);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    $orders_list = array();

    // Lặp kết quả
    foreach ($result as $row) {
        $orders = array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'users_id' => $row['users_id'],
            'phone' => $row['phone'],
            'address' => $row['address'],
            'date' => $row['date'],
        );
        array_push($orders_list, $orders);
    }

    return $orders_list;
}

function delete_orders($orders_id)
{
    global $pdo;

    $sql = "DELETE FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $orders_id);

    $stmt->execute();

}

function insert_orders($orders)
{
    global $pdo;
    $sql = "INSERT INTO ORDERS(ID, CODE, STATUS, USERS_ID, PHONE, ADDRESS, DATE) VALUES(NULL, :code, :status, :users_id,  :phone, :address, :date)";
    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':code', $orders['code']);
    $stmt->bindParam(':status', $orders['status']);
    $stmt->bindParam(':users_id', $orders['users_id']);
    $stmt->bindParam(':phone', $orders['phone']);
    $stmt->bindParam(':address', $orders['address']);
    $stmt->bindParam(':date', $orders['date']);

    // Lấy order_id sau khi thêm
    $lastOrderId = $pdo->lastInsertId();

    $stmt->execute();
}
function get_orders($orders_id)
{
    global $pdo;

    $sql = "SELECT * FROM ORDERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $orders_id);


    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row) {
        return array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'users_id' => $row['users_id'],
            'phone' => $row['phone'],
            'address' => $row['address'],
            'date' => $row['date'],
        );
    }

    return null;
}

function update_orders($orders)
{
    global $pdo;
    $sql = "UPDATE ORDERS SET CODE=:code, STATUS=:status, USERS_ID=:users_id WHERE ID=:id";
    $stmt = $pdo->prepare($sql);


    $stmt->bindParam(':id', $orders['id']);
    $stmt->bindParam(':code', $orders['code']);
    $stmt->bindParam(':status', $orders['status']);
    $stmt->bindParam(':users_id', $orders['users_id']);

    $stmt->execute();
}

function get_all_by_order($userId)
{
    global $pdo;

    $sql = "SELECT `orders`.`id`, users_id, code, status, `date`, address,
    GROUP_CONCAT(products.name) as product_names,
    SUM(products.price) as total, phone,
    SUM(order_items.quantity) as number
    FROM `orders`
    JOIN order_items ON `orders`.`id` = order_items.order_id
    JOIN products ON order_items.product_id = products.id
    WHERE users_id = :userId
    GROUP BY code;";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT); // Sử dụng bindParam để gán giá trị

    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    $orders_list = array();

    // Lặp kết quả
    foreach ($result as $row) {
        $productNames = explode(',', $row['product_names']);
        $orders = array(
            'id' => $row['id'],
            'code' => $row['code'],
            'status' => $row['status'],
            'date' => $row['date'],
            'total' => $row['total'],
            'number' => $row['number'],
            'users_id' => $row['users_id'],
            'phone' => $row['phone'],
            'address' => $row['address'],
            'name' => $productNames,
        );
        array_push($orders_list, $orders);
    }

    return $orders_list;
}
?>