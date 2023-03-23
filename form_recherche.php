<!DOCTYPE html>
<html>
<head>
<title>RECHERCHE</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link rel="stylesheet" type ="text/css" href="css/style.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
<style>
#searchbox {
background: #d8d8d8;
border: 4px solid #e8e8e8;
padding: 20px 10px;
width: 1065px;
display:flex;
justify-content:space-between;


}

input:focus::-webkit-input-placeholder {
color: transparent;
}

input:focus:-moz-placeholder {
color: transparent;
}

input:focus::-moz-placeholder {
color: transparent;
}

#searchbox input {
outline: none;
margin-left:10px;
width:650px;
height:30px;
padding:10px;
border-radius:5px;
border-color:grey;

}

#searchbox input[type= »text »] {
background: url(http://2.bp.blogspot.com/-xpzxYc77ack/VDpdOE5tzMI/AAAAAAAAAeQ/TyXhIfEIUy4/s1600/search-dark.png) no-repeat 10px 6px #fff;
border-width: 1px;
border-style: solid;
border-color: #fff;
font: bold 12px Arial,Helvetica,Sans-serif;
color: #bebebe;
width: 100%;
padding: 8px 15px 8px 30px;

}

#boutonrecherche{
    background-color: #555555;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
   
    font-size: 16px;
    height:50px;
    cursor: pointer;
    margin-left:20px;
    margin-top:15px;
    
}
</style>

    <br>
    <br>
    <br>
    <form id="searchbox" action="reponse_recherche.php" method="get">
            
            <p>
                <label for="prenom">Rechercher</label>
                <input type="searchbox" name="texte" id="prenom" placeholder="Nom , Designeur , Marque" required
    size="30"  maxlength="25"/>
            </p>
    <button type=submit id="boutonrecherche">Rechercher</button>
    <span class="validity"></span>
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