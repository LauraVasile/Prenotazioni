<?php
// dice a livello dello script che gli errori verranno mostrati e che non verranno loggati
include_once "config.php";

// $sql = "SELECT * FROM prenotazioni WHERE giorno = 2021-06-03";

 // variabili valorizzate tramite POST
$codice_fiscale = $_POST['codice'];
$giorno = $_POST['giorno'];


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
 // query preparate servono per passare i valori delle variabili

//spedire delle righe nell'header dell'http
// Ridirige il browser verso la pagina indicata nella location
header('Location:lista_prenotazioni.php'); // risposta che arriva al browser
exit(0);  // fa finire lo script