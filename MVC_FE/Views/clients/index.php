<h1> Liste des clients </h1>
<table border="1">
<tr>
    <th>
        Nom
    </th>
    <th>
        Prenom
    </th>
    <th>
    <td><a href="../clients/addC/"> Ajouter Client</a></td>
    </th>
</tr>
<?php foreach($clients as $client):?>
<tr>
    <td>    <?= $client['nom'] ?>    </td>
    <td>    <?= $client['prenom'] ?>    </td> 
    <td> Supprimer</td>
    <td><a href="../clients/getC/<?=$client['id']?>">Afficher</a></td>
    <td><a href="../clients/updateC/<?=$client['id']?>">Modifier</a></td>
<tr>
<?php endforeach ?>
</table>




