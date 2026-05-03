<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project PHP</title>
</head>
<body>
    
       
<?php 

    
    // here to import the model file and instantiate the model class
    require_once __DIR__ . '/../src/models/user.php';

    $user = new user();
    $users = $user->getAll();
    include_once __DIR__ . '/../src/views/user_list.php';

    

    ?>

    
    
</body>
</html>