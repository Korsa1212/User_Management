<?php 
session_start();

include_once __DIR__ . '/../src/views/navbar.php';

    
    // here to import the model file and instantiate the model class
    require_once __DIR__ . '/../src/models/user.php';

    $user = new user();
    // Génère le token CSRF
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    
    // Handle DELETE
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
        if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
            die('Invalid CSRF token');
        }
    
        $user->deleteUser((int) $_POST['id_user']);
        header('Location: index.php?deleted=1');
        exit;
    }
    

    $users = $user->getAll();
    $csrf_token = $_SESSION['csrf_token'];
    
    include_once __DIR__ . '/../src/views/user_list.php';
?>