<!DOCTYPE html>
<html>
<head>
    <title>Admin The Sneakers Spot</title>
</head>
<body>
    <style>
        table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

th {
  background-color: #333;
  color: #fff;
  font-weight: bold;
  padding: 10px;
  text-align: left;
  border: 1px solid #ddd;
}

td {
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  padding: 10px;
}

tr:nth-child(even) td {
  background-color: #f2f2f2;
}

tr:hover td {
  background-color: #e6e6e6;
}

.caption {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

@media (max-width: 600px) {
  th, td {
    font-size: 14px;
    padding: 5px;
  }
  .caption {
    font-size: 16px;
  }
}
.btn {
  background-color: #e5e5e5;
  border: none;
  color: #555;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 25px;
  width: 150px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #ccc;
  color: #fff;
}
        </style>
<a href="../index.php">retour au site</a>
    <hr>
<h1>Gestion des Sneakers</h1>
<hr>
<br>
<button class='btn'><a href="table1_new_form.php">Ajouter une sneakers</a></button>
<br>
<br>
<table>
    <thead>
        <tr><td>Photo</td><td>Numéro</td><td>Nom</td><td>Type</td><td>Couleur</td><td>modifier</td><td>supprimer</td></tr>
    </thead>
    <tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM sneakers";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td><img style="width:100px !important; height:100px;" , src="../images/uploads/'.$value['photo_sneakers'].'"  alt="cover du son"></td>';
    echo '<td>'.$value['id_sneakers'] . '</td>';
    echo '<td>' . $value['nom_sneakers'] . '</td>';
    echo '<td>' . $value['type_sneakers'] . '</td>';
    echo '<td>' . $value['couleur_sneakers'] .'</td>';
    echo '<td> <a href="table1_update_form.php?num='.$value['id_sneakers'].'" > modifier </a> </td>';
    echo '<td> <a href="table1_delete.php?num='.$value['id_sneakers'].'"> supprimer </a> </td>';

    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>