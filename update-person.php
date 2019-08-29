<?php
require 'db.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
$id = $_GET['id'];


$result = $pdo->prepare("SELECT * FROM list where id = '$id'");
$result->execute();

$person = $result->fetch();
    }
    else{

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $id = $_POST['id'];

        $sql = "UPDATE list SET name=?, surname=? WHERE id=?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$name, $surname, $id]);
        header("Location: http://example.test");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action = "update-person.php" method = "POST">
        <input name = "name" placeholder = "name" value = <?=$person['name']?>>
        <input name = "surname" placeholder = "surname" value = <?=$person['surname']?>>
        <input type="hidden" name = "id" placeholder = "id" value = <?=$person['id']?>>
        <button> Изменить </button>
    </form>


    
</body>
</html>