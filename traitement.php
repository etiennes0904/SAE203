<?php
    if ( (empty($_POST['texte'])) || (empty($_POST['age'])) ) {
        header('Location: reponse_recherche.php');
    }
    $prenom = $_POST['texte'];


     $prenom_nettoye =  filter_var( $texte ,  FILTER_UNSAFE_RAW );
    
?>
 <html>
  <body>
  <h1> reponse </h1>

 </body>
 </html>