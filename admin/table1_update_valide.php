<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>gestion de nos musiques</h1>
<h2>vous venez de modifier une musique</h2>
<hr>
<?php
$num=$_POST['num'];
$titre=$_POST['titre'];
$genre=$_POST['genre'];
$duree=$_POST['duree'];

$numartiste=$_POST['crea'];

$mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
$mabd->query('SET NAMES utf8;');

$imageName=$_FILES["photo"]["name"];

if($imageName!=""){

            //vérification du format de l'image téléchargée
            $imageType=$_FILES["photo"]["type"];
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


            // dépot du fichier téléchargé dans le dossier /var/www/sae203/images/uploads
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

            $req = 'UPDATE sneakers SET nom_sneakers="'.$titre.'", type_sneakers="'.$genre.'", prix_sneakers='.$duree.', musique_photo="'.$nouvelleImage.'", _id_crea='.$numartiste.' WHERE id_sneakers='.$num ;

        }
else {
    $req = 'UPDATE sneakers SET nom_sneakers="'.$titre.'", type_sneakers="'.$genre.'", prix_sneakers='.$duree.', _id_crea='.$numartiste.' WHERE id_sneakers='.$num ;
}

echo 'juste pour le debug: '. $req;
$resultat = $mabd->query($req);

?>

</body>
</html>