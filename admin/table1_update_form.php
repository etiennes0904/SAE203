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
    titre:<input type="text" name="titre" value="<?php echo $value['nom_sneakers']?>"><br>
    genre:<input type="text" name="genre"  value="<?php echo $value['type_sneakers']?>"><br>
    durée:<input type="text" name="duree" value="<?php echo $value['couleur_sneakers']?>"><br>
    prix:<input type="text" name="dureee" value="<?php echo $value['prix_sneakers']?>"><br>

        <br>
    Photo : <input type="file" name="photo" /><br />
    artiste:
    <select name="crea">
<?php
            $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM  createur ";
            $resultat = $mabd->query($req);


            foreach ($resultat as $art) {
                $selection2="";
                if($value['_id_crea'] == $art['id_crea']) $selection2="selected";
                echo '<option '.$selection2 . ' value="' . $art['id_crea'] . '"> ' . $art['nom_crea'] . ' </option>';
            }
         ?>

    </select>
    <br>
    <input type="submit" name="" value="Enregistrer">
</form>

</body>
</html>