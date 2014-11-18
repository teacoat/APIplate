<?php

function getConnection() {
	include 'config.php';

    try {
        $db_username = $config['db_username'];
        $db_password = $config['db_password'];
        $conn = new PDO('mysql:host='.$config['db_host'].';dbname='.$config['db_name'], $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    return $conn;
}

function getAllUsers(){
		$sql = "SELECT * FROM users";
	    try {
	        $dbCon = getConnection();
	        $stmt   = $dbCon->query($sql);
	        $users  = $stmt->fetchAll(PDO::FETCH_OBJ);
	        $dbCon = null;
	        echo json_encode($users);
	    }
	    catch(PDOException $e) {
	        echo '{"error":{"text":'. $e->getMessage() .'}}';
	    }  
}

function getUsersByCategory($category){
		$sql = "SELECT * FROM users WHERE category = :category";
        try {
            $dbCon = getConnection();
            $stmt = $dbCon->prepare($sql);
            $stmt->bindParam("category", $category);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_OBJ);
            $dbCon = null;
            echo json_encode($users); 
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
}

function getUserById($id){
		$sql = "SELECT * FROM users WHERE id = :id";
        try {
            $dbCon = getConnection();
            $stmt = $dbCon->prepare($sql);  
            $stmt->bindParam("id", $id);
            $stmt->execute();
            $user = $stmt->fetchObject();  
            $dbCon = null;
            echo json_encode($user); 
        } catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}'; 
        }
}


?>