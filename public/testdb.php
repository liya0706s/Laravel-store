<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=astore', 'your_username', 'your_password');
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
