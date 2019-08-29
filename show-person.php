<?php
require 'db.php';
$name = $_GET['id'];


$result = $pdo->prepare("SELECT surname FROM list where id = '$name'");
$result->execute();

$array = $result->fetch();

    echo $array['surname'];    
