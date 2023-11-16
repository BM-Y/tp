
<?php

require_once 'acces.php';

$pdo = new PDO($dsn, $user, $password);

 function getMeals(PDO $pdo){
    $sql = "SELECT * FROM meals";
    $stmt = $pdo->query($sql);
    $meals = $stmt->fetchAll();
            return $meals;
 }