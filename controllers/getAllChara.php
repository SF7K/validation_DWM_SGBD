<?php 

$pdo = new PDO('mysql:host=localhost; dbname=warcraft; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('SELECT * FROM characters');
$stmt->execute();
$characters = $stmt->fetchAll(PDO::FETCH_ASSOC);
