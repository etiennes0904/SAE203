<?php
    if ( (empty($_POST['prenom'])) || (empty($_POST['age'])) ) {
        header('Location: recherche_reponse.php');
    }
    $prenom = $_POST['prenom'];


     $prenom_nettoye =  filter_var( $prenom ,  FILTER_UNSAFE_RAW );
    
?>
 <html>
  <body>
  <h1> reponse </h1>

 </body>
 </html>