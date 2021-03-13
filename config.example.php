<?php
ini_set('display_errors', 1);
ini_set('log_errors', 0);
// Esempio di file di configurazione
// Creare un file config.php e inserire le seguenti righe
//Addattandole alla propria configurazione

$host = 'your_host';
$db = 'your_db';
$user = 'your_usarname';
$pass = 'your_password';
$charset = 'utf8';

//Stringa di connessione
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);