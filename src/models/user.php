<?php

include_once __DIR__ . '/../config/database.php';

//getting all user from database 
class user {
    function getAll() {
        $user = getDB()->query("SELECT id_user, full_name, email, password, Age, Created_User_at FROM Users LIMIT 100 OFFSET 0");
        return $user->fetchAll();
    }
    //function to add new user
    
    function create_user ($full_name ,$email ,$password ,$Age){
        $db=getDB();
        $stmt=$db->prepare("INSERT INTO Users (full_name ,email ,password ,Age,role) VALUES (?,?,?,?,?)");
        $stmt->execute([$full_name ,$email ,$password ,$Age,'user']);
    }

    function deleteUser(int $id): bool {
        $stmt = getDB()->prepare("DELETE FROM Users WHERE id_user = ?");
        return $stmt->execute([$id]);
    }


    

}

?>