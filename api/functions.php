<?php

function getConnection() {
	include 'config.php';

    $host     = $config['db_host'];
    $username = $config['db_username'];
    $password = $config['db_password'];
    $table    = $config['db_table'];

    $connection = mysqli_connect($host, $username, $password, $table);

    return $connection;
}

function getAllUsers(){
		$query = "SELECT * FROM users";
	    $connection = getConnection();

        $result = mysqli_query($connection, $query);

        $data = array();

        while($row = mysqli_fetch_array($result)) {
          $data[] = $row;
        }

        echo json_encode($data);
}

function getUsersByCategory($category){

		$query = "SELECT * FROM users WHERE category = $category";

        $connection = getConnection();

        $result = mysqli_query($connection, $query);

        $data = array();

        while($row = mysqli_fetch_array($result)) {
          $data[] = $row;
        }

        echo json_encode($data);
        
}

function getUserById($id){
		$query = "SELECT * FROM users WHERE id = $id";

        $connection = getConnection();

        $result = mysqli_query($connection, $query);

        $data = mysqli_fetch_array($result);

        echo json_encode($data);
}


?>