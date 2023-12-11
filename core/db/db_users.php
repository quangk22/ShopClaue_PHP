<?php 
require_once 'mysql.php';
$pdo = get_pdo();
function get_all_users(){
    global $pdo;

    $sql = "SELECT * FROM USERS";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $users_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $users= array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password'],
            'role' => $row['role']
        );
        array_push($users_list, $users);
    }
    
    return $users_list;
}

function delete_users($users_id){
    global $pdo;

    $sql = "DELETE FROM USERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $users_id);

    $stmt->execute();

}

function insert_users($users){
    global $pdo;
    $sql = "INSERT INTO USERS(ID, EMAIL, PASSWORD, ROLE) VALUES(NULL, :email, :password, :role)";
    $stmt = $pdo->prepare($sql);
    
   
    $stmt->bindParam(':email', $users['email']);
    $stmt->bindParam(':password', $users['password']);
    $stmt->bindParam(':role', $users['role']);    
    $stmt->execute();
}
function get_users($users){
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE ID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $users);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password'],
            'role' => $row['role']
        );
    }

    return null;
}

function update_users($users){
    global $pdo;
    $sql = "UPDATE USERS SET EMAIL=:email, PASSWORD=:password,ROLE=:role WHERE ID=:id";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $users['id']);
    $stmt->bindParam(':email', $users['email']);
    $stmt->bindParam(':password', $users['password']);
    $stmt->bindParam(':role', $users['role']);
    
    $stmt->execute();
}
function get_by_email_users($email){
    global $pdo;

    $sql = "SELECT * FROM USERS WHERE EMAIL=:email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $row){
        return array(
            'id' => $row['id'],
            'email' => $row['email'],
            'password' => $row['password'],
            'role' => $row['role']
        );
    }

    return null;
}
function get_all_users_customers(){
    global $pdo;

    $sql = "SELECT COUNT(id) as user
    FROM users
    WHERE ROLE = 'user';";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();
     
    $users_list = array();

    // Lặp kết quả
    foreach ($result as $row){
        $users= array(
            'user' => $row['user']
        );
        array_push($users_list, $users);
    }
    
    return $users_list;
}
?>