<?php

include 'helpers.php';

function getAllUsers(){
		$query = "SELECT * FROM users";
        echo queryMultiple($query);
}

function getUsersByCategory($category){
		$category = sanitize($category);
		$query = "SELECT * FROM users WHERE category = $category";
        echo queryMultiple($query);
}

function getUserById($id){
		$query = "SELECT * FROM users WHERE id = $id";
        echo querySingle($query);
}


?>