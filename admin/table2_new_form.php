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
<a href="table2_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>Gestion des créateurs</h1>
<p>Ajouter ici un créateur</p>
<hr>
<form method="POST" action="table2_new_valide.php" enctype="multipart/form-data">
    ID :<input type="text" name="Id"><br>
    Nom :<input type="text" name="nom"><br>
    Nationalitée :<input type="text" name="nationalite"><br>
    Marque :<input type="text" name="marque"><br>

    
</select>
<br>
    <input type="submit" name="">
</form>

</tbody>
</table>
</body>
</html>