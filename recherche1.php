<!DOCTYPE html>
<html>
<head>
<title>RECHERCHE</title>
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
    <br>
    <br>
    <form action="traitement.php" method="post">
            
            <p>
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" />
            </p>
            <p> 
                <label for="age">age :</label>
                <input type="number" name="age" id="age" />
                <?php
                    if (isset($_GET['erreurage'])) {
                        echo '<span>Erreur d age, veuillez saisir un nombre</span>';
                    }
                ?>
            <p>
                <input type="submit" value="Valider" />
            </p>
        </form>
<br>
<br>
<br>
<br>

<br><br>
<br>
<br>

</main>


<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>