<?php

 // here to import the model file and instantiate the model class
    require_once __DIR__ . '/../src/models/user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'edit') {
    echo $_POST['email'] ;
}

 //edit
    include_once __DIR__ . '/../src/views/edit_user.php';



?>