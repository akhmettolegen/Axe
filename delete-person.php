<?php
require 'db.php';
$id = $_GET['id'];


$result = $pdo->prepare("DELETE FROM list where id = '$id'");
$result->execute();

header("Location: http://example.test");