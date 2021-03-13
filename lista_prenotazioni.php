<?php
include_once "config.php";


// Query di inserimento preparata
$sql = "SELECT * FROM prenotazioni";
//invio la query al server MySQL
$stmt = $pdo-> query($sql);


//$result = $stmt-> fetchAll();

echo '<table>
<tr>
<td> Id</td>
<td> codice fiscale</td>
<td> Data</td>
</tr>';

$stmt  = $pdo -> query($sql);
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'];
    $codice_fiscale = $row['codice_fiscale'];
    $data = $row['giorno'];
    echo "<tr>
          <td>$id</td>
          <td>$codice_fiscale</td>
          <td>$data</td>
          </tr>";
}
echo '</table>';



echo "
<table>
    <td></td>
</table>";


