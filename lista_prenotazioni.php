<?php

// dice a livello dello script che gli errori verranno mostrati e che non verranno loggati
ini_set('display_errors', 1);
ini_set('log_errors', 0);


$host = 'localhost';
$db = 'covid';
$user = 'root';
$pass = '';
$charset = 'utf8';

//Stringa di connessione
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

// Query di inserimento preparata
$sql = "SELECT * FROM prenotazioni";
$stmt = $pdo-> query($sql);

$result = $stmt-> fetchAll();
echo "<pre>";
var_dump($result);
echo "</pre>";