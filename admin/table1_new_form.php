<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <style>
        form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

label {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
  color: #555;
}

input[type="text"], 
input[type="email"], 
textarea {
  padding: 0.8rem;
  border: none;
  border-radius: 5px;
  margin-bottom: 1rem;
  width: 100%;
  background-color: #f2f2f2;
  color: #555;
}

input[type="submit"] {
  background-color: #555;
  color: #fff;
  border: none;
  padding: 0.8rem 2rem;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #333;
}

input[type="text"]:focus, 
input[type="email"]:focus, 
textarea:focus {
  outline: none;
  box-shadow: 0 0 5px #555;
}

/* Style pour les messages d'erreur */
.error {
  color: #ff0000;
  font-size: 0.8rem;
  margin-bottom: 1rem;
}
        </style>
<a href="table1_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>Gestion des Sneakers</h1>
<p>Ajouter ici une sneakers</p>
<hr>
<form method="POST" action="table1_new_valide.php" enctype="multipart/form-data">
    Nom :<input type="text" name="nom"><br>
    Type :<input type="text" name="type"><br>
    Couleur :<input type="text" name="couleur"><br>
    Photo : <input type="file" name="photo" required><br>
    

        <br>
    Prix :<input type="text" name="prix"><br>
    artiste:
<select name="crea">
        <?php
        $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'etienne');
        $mabd->query('SET NAMES utf8;');
        $req = "SELECT * FROM  createur ";
        $resultat = $mabd->query($req);

foreach ($resultat as $art) {
    echo '<option value="'.$art['id_crea'].'">'.$art['nom_crea'].'</option>';
}
?>
</select>
<br>
    <input type="submit" name="">
</form>

</tbody>
</table>
</body>
</html>