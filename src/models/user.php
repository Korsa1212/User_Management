<?php

include_once __DIR__ . '/../config/database.php';

//getting all user from database 
class user {
    function getAll() {
        $user = getDB()->query("SELECT * FROM Users");
        return $user->fetchAll();
    }
    //function to add new user
    
    function create_user ($full_name ,$email ,$password ,$Age){
    $db=getDB();
    $stmt=$db->prepare("INSERT INTO Users (full_name ,email ,password ,Age,role) VALUES (?,?,?,?,?)");
    $stmt->execute([$full_name ,$email ,$password ,$Age,'user']);
    }


    function getById($id) {
        $user = getDB()->query("SELECT * FROM Users WHERE id_user = ?",[$id]);
        return $user->fetch();
    }
    function getByName($name) {
        $user = getDB()->query("SELECT * FROM Users WHERE full_name = ?",[$name]);
        return $user->fetchAll();
    }
    function getByEmail() {
        $user = getDB()->query("SELECT * FROM Users WHERE email = ?");
        return $user->fetchAll();
    }

}

?>