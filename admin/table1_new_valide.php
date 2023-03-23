<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>gestion de nos musiques</h1>
<h2>vous venez d'ajouter une musique</h2>
<hr>
<?php
$titre=$_POST['nom'];
$genre=$_POST['type'];
$duree=$_POST['couleur'];
$vues=$_POST['prix'];
$numartiste=$_POST['crea'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');

//verification du fichier
$imageType=$_FILES['photo']['type'];
            if ( ($imageType != "image/png") &&
                ($imageType != "image/jpg") &&
                ($imageType != "image/jpeg") ) {
                    echo '<p>Désolé, le type dimage nest pas reconnu !';
                    echo 'Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
                    die();
            }


//creation d'un nouveau nom pour cette image téléchargée
// pour éviter d'avoir 2 fichiers avec le même nom
$nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];

// dépot du fichier téléchargé dans le dossier /var/www/r214/images/uploads
if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
    if(!move_uploaded_file($_FILES["photo"]["tmp_name"], 
    "../images/uploads/".$nouvelleImage)) {
        echo '<p>Problème avec la sauvegarde de limage, désolé...</p>'."\n";
        die();
    }
} else {
    echo '<p>Problème : image non chargée...</p>'."\n";
    die();
}

$req = "INSERT INTO sneakers(nom_sneakers,type_sneakers,couleur_sneakers,prix_sneakers,_id_crea) VALUES('".$titre."','".$genre."', $duree,  $vues, '".$nouvelleImage."' , $numartiste)";
echo $req;
$resultat = $mabd->query($req);


?>
</tbody>
</table>
</body>
</html>