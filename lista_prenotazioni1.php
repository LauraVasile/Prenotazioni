<?php

require 'vendor/autoload.php';
include_once 'config.php';

use League\Plates\Engine;

// viene creato l'oggetto per la gestione dei template
$templates= new Engine('./view', 'tpl');


// Query di inserimento preparata
$sql = "SELECT * FROM prenotazioni";
//invio la query al server MySQL
$stmt = $pdo-> query($sql);


$result = $stmt-> fetchAll();


echo $templates ->render('lista_prenotazioni1', ['result'=> $result]);


/*echo '<table>
<tr>
<td> Id</td>
<td> codice fiscale</td>
<td> Data</td>
<td> Codice prenotazione </td>
</tr>';
*/

/*$stmt  = $pdo -> query($sql);
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $codice_fiscale = $row['codice_fiscale'];
    $data = $row['giorno'];
    $codice_prenotazione= $row['codice_prenotazione'];
}
*/
   /* echo "<tr>
          <td>$id</td>
          <td>$codice_fiscale</td>
          <td>$data</td>
          <td>$codice_prenotazione</td>
          </tr>";

//echo '</table>'; */
 // Rendo un template che mi visualizza la tabella

/*
echo "
<table>
    <td></td>
</table>";
*/

