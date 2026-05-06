<?php 
include_once __DIR__ . '/../src/views/navbar.php';

include '../src/models/user.php';

$error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $raw_password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $Age = $_POST['Age'];
    
    if(empty($full_name) || empty($email) || empty($raw_password) || empty($re_password) || empty($Age)){
        $error = 'Please fill in all fields';
    }
    elseif($raw_password !== $re_password){
        $error = 'Passwords do not match';
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'Invalid email';
    }
    elseif(strlen($raw_password) < 8){
        $error = 'Password must be at least 8 characters long';
    }
    
    if(empty($error)) {
        try {
            $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
            $user = new user();
            $user->create_user($full_name, $email, $hashed_password, $Age);
            header("Location: index.php");
            exit();
        } catch (PDOException $e) {
            // Catching duplicate emails or other DB issues
            $error = 'This email is already in use!';
        }
    }
}
include_once '../src/views/ajouterUser.php';
?>