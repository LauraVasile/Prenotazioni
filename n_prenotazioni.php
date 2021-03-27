<?php

require 'vendor/autoload.php';
include_once 'config.php';

use League\Plates\Engine;

// viene creato l'oggetto per la gestione dei template
$templates = new Engine('./view', 'tpl');


// Query di inserimento preparata
$sql = "SELECT giorno, COUNT(*) AS n_prenotazioni FROM prenotazioni GROUP BY giorno";
//invio la query al server MySQL
$stmt = $pdo->query($sql);

$result = $stmt->fetchAll();

echo $templates->render('n_prenotazioni', ['result' => $result]);