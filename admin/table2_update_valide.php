<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>gestion de nos créateur</h1>
<h2>vous venez de modifier un créateur</h2>
<hr>
<?php
$num=$_POST['num'];
$id=$_POST['Id'];
$nom=$_POST['nom'];
$nationalite=$_POST['nationalite'];
$marque=$_POST['marque'];



$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');



$req = 'UPDATE createur SET nom_crea="'.$nom.'", nationalite_crea="'.$nationalite.'", marque_crea="'.$marque.'" WHERE id_crea='.$num ;


echo 'juste pour le debug: '. $req;
$resultat = $mabd->query($req);

?>

</body>
</html>