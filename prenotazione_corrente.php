<?php

require 'vendor/autoload.php';
include_once 'config.php';

use League\Plates\Engine;

// viene creato l'oggetto per la gestione dei template
$templates= new Engine('./view', 'tpl');


// Query di inserimento preparata
$sql = "SELECT * FROM prenotazioni WHERE giorno=current_date()";
//invio la query al server MySQL
$stmt = $pdo-> query($sql);


$result = $stmt-> fetchAll();


echo $templates ->render('prenotazione_corrente', ['result'=> $result]);

