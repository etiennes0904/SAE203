<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>Gestion des créateurs</h1>
<h2>Vous venez d'ajouter un créateur</h2>
<hr>
<?php
$id=$_POST['Id'];
$nom=$_POST['nom'];
$nationalite=$_POST['nationalite'];
$marque=$_POST['marque'];


$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');


$req = "INSERT INTO createur(id_crea,nom_crea,nationalite_crea,marque_crea) VALUES('".$id."','".$nom."','".$marque."','".$nationalite."')";
echo $req;
$resultat = $mabd->query($req);


?>
</tbody>
</table>
</body>
</html>