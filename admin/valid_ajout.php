<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="gestion.php">retour au tableau de bord</a> 	
	<hr>
<h1>gestion de nos albums</h1>
<h2>vous venez d'ajouter un article</h2>
<hr>
<?php
$titre=$_POST['titre'];
$prix=$_POST['prix'];
$nbpages=$_POST['nbpages'];
$numauteur=$_POST['numauteur'];
//var_dump($_FILES);

$mabd = new PDO('mysql:host=localhost;dbname=r214base;charset=UTF8;', 'r214user', 'PASSWORD');
$mabd->query('SET NAMES utf8;');
//traitement de l'image
//vérification du format de l'image téléchargée
$imageType=$_FILES["photo"]["type"];
if ( ($imageType != "image/png") &&
    ($imageType != "image/jpg") &&
    ($imageType != "image/jpeg") ) {
    echo '<p>Désolé, le type d\'image n\'est pas reconnu !';
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
        echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
        die();
    }
} else {
    echo '<p>Problème : image non chargée...</p>'."\n";
    die();
}


//Fin du traitement

$req = 'INSERT INTO bandes_dessinees(bd_titre, bd_prix, bd_nb_pages, _auteur_id, bd_photo) VALUES("'.$titre.'",'.$prix.', '.$nbpages.', '.$numauteur.',"'.$nouvelleImage.'" )';
echo $req;
$resultat = $mabd->query($req);

?>
</tbody>
</table>
</body>
</html>