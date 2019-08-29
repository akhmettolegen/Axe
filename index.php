<?php
    require 'db.php';


        
         $result = $pdo->prepare("SELECT id, name, surname FROM list");
         $result->execute();

         $users = $result->fetchAll();
      
//     }
// }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <a href="roommates.php?name=Akhmet"> Akhmet Tolegen </a> <br>
    <a href="roommates.php?name=Sula"> Sula Sagiev </a><br>
    <a href="roommates.php?name=Bob"> Bob Mukhsimbayev </a> -->
    <ul>
    <?php foreach ($users as $person) : ?>
    <a href="show-person.php?id=<?= $person['id']?>">
    <?php echo $person['name'] . ' ' . $person['surname'] ?></a> <a style="color: red" href="delete-person.php?id=<?= $person['id']?>">X</a>     <a style="color: green" href="update-person.php?id=<?= $person['id']?>">Edit</a> <br>
    <?php endforeach ?>


    </ul>
    <form action = "create-person.php" method = "POST">
        <input name = "name" placeholder = "name">
        <input name = "surname" placeholder = "surname">
        <button> Внести в список </button>
    </form>
</body>
</html>