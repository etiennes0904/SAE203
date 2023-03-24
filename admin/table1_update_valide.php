<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>Gestion des informations</h1>
<h2>Vous venez de modifier les informations</h2>
<hr>
<?php
$num=$_POST['num'];
$nom=$_POST['nom'];
$id=$_POST['Id'];
$type=$_POST['type'];
$couleur=$_POST['couleur'];
$matiere=$_POST['matiere'];
$prix=$_POST['prix'];



$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');



$req = 'UPDATE sneakers SET id_sneakers="'.$id.'",nom_sneakers="'.$nom.'", type_sneakers="'.$type.'", prix_sneakers='.$prix.', matiere_sneakers="'.$matiere.'", couleur_sneakers="'.$couleur.'" WHERE id_sneakers='.$num ;

        

echo 'juste pour le debug: '. $req;
$resultat = $mabd->query($req);

?>

</body>
</html>