<?php
session_start();
require_once __DIR__ . '/../src/models/user.php';

$userModel = new user();

// Génère le token CSRF
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Handle DELETE
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
        die('Invalid CSRF token');
    }

    $userModel->deleteUser((int) $_POST['id_user']);
    header('Location: index.php?deleted=1');
    exit;
}

// Fetch users pour la vue
$users = $userModel->getAll();
$csrf_token = $_SESSION['csrf_token'];

require_once __DIR__ . '/../src/views/user_list.php';

?>