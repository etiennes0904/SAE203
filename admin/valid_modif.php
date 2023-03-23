
<p>vous venez de modifier un album</p>

<?php
$num=$_GET['num'];
$titre=$_GET['titre'];
$prix=$_GET['prix'];
$nbpages=$_GET['nbpages'];
$numauteur =$_GET['numauteur'];



$mabd = new PDO('mysql:host=localhost;dbname=r214base;charset=UTF8;', 'r214user', 'PASSWORD');
$mabd->query('SET NAMES utf8;');

$req = 'UPDATE bandes_dessinees SET bd_titre="'.$titre.'", bd_prix='.$prix.', bd_nb_pages='.$nbpages.', _auteur_id='.$numauteur.' WHERE bd_id='.$num;

echo $req;

$resultat = $mabd->query($req);

?>
