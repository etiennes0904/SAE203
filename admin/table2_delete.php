<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a>
<hr> <h1>Gestion des Sneakers</h1> <hr>

<?php

$id_crea=$_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');

$req= 'DELETE FROM createur WHERE id_crea='.$id_crea; 


echo $req;
 
$resultat = $mabd->query($req); 

echo '<h2>vous venez de supprimer le créateur numéro : '.$id_crea.' </h2>';
?>

</body>
</html>