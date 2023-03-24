<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>Gestion des Sneakers</h1>
<p>modification d'information</p>

<?php
$num=$_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM sneakers WHERE id_sneakers=".$num;
$resultat = $mabd->query($req);
$value = $resultat->fetch();
?>
<hr>
<form method="POST" action="table1_update_valide.php" enctype="multipart/form-data">
    <input type="hidden" name="num"  value="<?php echo $value['id_sneakers']; ?>">
    Id :<input type="text" name="Id" value="<?php echo $value['id_sneakers']?>"><br>
    Nom :<input type="text" name="nom" value="<?php echo $value['nom_sneakers']?>"><br>
    Type:<input type="text" name="type"  value="<?php echo $value['type_sneakers']?>"><br>
    Couleur:<input type="text" name="couleur" value="<?php echo $value['couleur_sneakers']?>"><br>
    Prix :<input type="text" name="prix" value="<?php echo $value['prix_sneakers']?>"><br>
    Matiere :<input type="text" name="matiere" value="<?php echo $value['matiere_sneakers']?>"><br>
        <br>

    <br>
    <input type="submit" name="" value="Enregistrer">
</form>

</body>
</html>