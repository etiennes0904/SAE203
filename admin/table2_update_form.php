<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table2_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>Gestion des créateurs</h1>
<p>modification d'information</p>

<?php
$num=$_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM createur WHERE id_crea=".$num;
$resultat = $mabd->query($req);
$value = $resultat->fetch();
?>
<hr>
<form method="POST" action="table2_update_valide.php" enctype="multipart/form-data">
    <input type="hidden" name="num"  value="<?php echo $value['id_crea']; ?>">
    Id :<input type="text" name="Id" value="<?php echo $value['id_crea']?>"><br>
    Nom:<input type="text" name="nom"  value="<?php echo $value['nom_crea']?>"><br>
    Nationalitée :<input type="text" name="nationalite" value="<?php echo $value['nationalite_crea']?>"><br>
    Marque :<input type="text" name="marque"  value="<?php echo $value['marque_crea']?>"><br>

    <br>
    <input type="submit" name="" value="Enregistrer">
</form>

</body>
</html>