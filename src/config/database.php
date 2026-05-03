<?php 

function getDB() {
    // Le chemin vers le fichier .env (qui est maintenant 2 niveaux plus haut)
    $envPath = __DIR__ . '/../../.env';
    
    if (file_exists($envPath)) {
        foreach(file($envPath) as $line){
            $line = trim($line);
            if ($line && strpos($line, '#') !== 0) {
                putenv($line);
            }
        }
    }

    try {
        // CORRECTION: 'mysql:host=' (sans espaces)
        $pdo = new PDO("mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_NAME'),
            getenv('DB_USER'),
            getenv('DB_PASS'));
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    catch(PDOException $e) {
        die("DB Error: " . $e->getMessage());
    }
}
