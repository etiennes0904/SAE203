<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<title>LISTING</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/style.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
    <br>
    <div id="globalsection">
<div id="contenu">

            <?php 
            $db= new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8','sae203User','etienne');
            $db->query('SET NAMES utf8;');

            $requete="SELECT *  FROM sneakers;";
            $jeux=$db->query($requete);

            //var_dump($jeux);

            foreach($jeux as $unjeu) {
                echo '<div class="section1">';
                echo '<img src="images/uploads/'.$unjeu['photo_sneakers'].'" width="300px"/>';
                echo 'Nom de la Sneakers : '.$unjeu['nom_sneakers'];
                echo '<p>Type de sneakers : '.$unjeu['type_sneakers'].'</p>';
                echo '<p>Couleur de la sneakers : '.$unjeu['couleur_sneakers'].'</p>';
                echo '</div>';
                echo '<br><br>';
            }
            ?>
        </div>
        </div>
</main>


<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>