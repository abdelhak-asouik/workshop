<h1> Clients <?=$client['id']?></h1>
<table border="1">
<tr>
    <th>
        Nom
    </th>
    <th>
        Prenom
    </th>
    <th>
        Adresse
    </th>
</tr>
    <tr>
    <td><?= $client['nom'] ?>
    </td>
    <td>
    <?= $client['prenom'] ?>
    </td>
    <td>
    <?= $client['adresse'] ?>
    </td>
</tr>
</table>