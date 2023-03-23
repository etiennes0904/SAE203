<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<p>ajouter ici un album</p>
<hr>
<form action="valid_ajout.php" method="post" enctype="multipart/form-data">
    titre:<input type="text" name="titre"><br>
    prix:<input type="text" name="prix"><br>
    nombre de pages:<input type="text" name="nbpages"><br>
    Photo : <input type="file" name="photo" required /><br />
    auteur:
    <select name="numauteur">
        <?php
        $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'phpmyadmin', 'PASSWORD');
        $mabd->query('SET NAMES utf8;');
        $req = "SELECT * FROM  sneakers ";
        $resultat = $mabd->query($req);

        foreach ($resultat as $value) {
            echo '<option value="' . $value['id_sneakers'] . '">' . $value['nom_sneakers'] . '</option>';
        }
        ?>
    </select><br>
    taper pour l'instant un numero d'auteur (1,2,3...) pas son nom :-)<br>
    <input type="submit" name="">
</form>

</tbody>
</table>
</body>
</html>