<?php $this->layout('main',['argomento' => 'Lista delle prenotazioni giornaliere']); ?>

<table class="striped">
    <caption> Lista delle Prenotazioni correnti</caption>
    <thead>
    <tr>
        <th>Giorno prenotazione:</th>
        <th>Numero delle prenotazioni:</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($result as $row): ?>
    <tr>
        <td><?php echo $row['giorno'] ?></td>
        <td><?php echo $row['n_prenotazioni'] ?></td>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>
