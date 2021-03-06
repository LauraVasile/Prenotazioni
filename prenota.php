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

// $sql = "SELECT * FROM prenotazioni WHERE giorno = 2021-06-03";
 // variabili al momento costanti, poi verranno prese tramite POST
$codice_fiscale = 'BGTLSN00N00B157H';
$giorno = '2021-06-03';


// Query di inserimento preparata
$sql = "INSERT INTO prenotazioni VALUES(null, :codice_fiscale, :giorno)";

//inviamo la query al database che la tiene in pancia
$stmt = $pdo->prepare($sql);

//inviamo i dati concreti che verranno messi al posto dei segnaposto

$stmt -> execute(
    [
        'codice_fiscale' => $codice_fiscale,
        'giorno' => $giorno
    ]
);
