<?php 

$pdo = new PDO('mysql:host=localhost; dbname=warcraft; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('INSERT INTO characters (name, race, affiliation, status) VALUES (:name, :race, :affiliation, :status)');
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':race', $_POST['race']);
$stmt->bindParam(':affiliation', $_POST['affiliation']);
$stmt->bindParam(':status', $_POST['status']);
$stmt->execute();

header('Location: /characters.php');
