<!DOCTYPE html>
<html>
<head>
<title>RECHERCHE</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link rel="stylesheet" type ="text/css" href="css/style.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
<br>
<br>
<h1>Résultat de votre recherche :</h1>
<br>




<div id="contenu">

            <?php 
            $resultatget= $_GET['texte'];
            $db= new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8','phpmyadmin','PASSWORD');
            $db->query('SET NAMES utf8;');

            $requete="SELECT * FROM sneakers
            INNER JOIN createur 
            ON sneakers._id_crea = createur.id_crea
            WHERE nom_sneakers LIKE '%" . $resultatget . "%'" ;;
            $resultat=$db->query($requete);

            //var_dump($jeux);

            foreach($resultat as $unjeu) {
                echo '<div id="globalsection">';
                echo '<div class="section1">';
                echo '<img src="images/uploads/'.$unjeu['photo_sneakers'].'" width="300px"/>';
                echo 'Nom de la Sneakers : '.$unjeu['nom_sneakers'];
                echo '<p>Type de sneakers : '.$unjeu['type_sneakers'].'</p>';
                echo '<p>Couleur de la sneakers : '.$unjeu['couleur_sneakers'].'</p>';
                echo '<p>Nom du créateur : '.$unjeu['nom_crea'].'</p>';
                echo '</div>';
                echo '</div>';
                echo '<br><br>';
            }
            ?>
        </div>

</main>


<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>