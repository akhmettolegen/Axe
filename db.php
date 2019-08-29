<?php

try{
    $pdo = new PDO('mysql:host=127.0.0.1; dbname=mylist', 'root', 'akha070395');
}
catch (PDOException $e){
    die('Could not connect!');

}