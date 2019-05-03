<?php 

$pdo = new PDO('mysql:host=localhost; dbname=warcraft; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('SELECT * FROM characters WHERE id=:id');
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();
$character = $stmt->fetch(PDO::FETCH_ASSOC);
