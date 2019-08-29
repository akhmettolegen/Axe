<?php
require 'db.php';
$name = $_POST['name'];
$surname = $_POST['surname'];

$array= $pdo->prepare("INSERT INTO list (name, surname) VALUES (?,?)");
$array->execute([$name, $surname]);

header("Location: http://example.test");
