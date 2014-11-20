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

function sanitize($string){
    $cleanstring = htmlspecialchars($string);
    return $cleanstring;
}

function querySingle($query){
        $connection = getConnection();

        $result = mysqli_query($connection, $query);

        $data = mysqli_fetch_assoc($result);

        return json_encode($data);
}

function queryMultiple($query){
        $connection = getConnection();

        $result = mysqli_query($connection, $query);

        $data = array();

        while($row = mysqli_fetch_array($result)) {
          $data[] = $row;
        }

        return json_encode($data);
}


?>