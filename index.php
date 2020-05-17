<?php
    session_start();
    if(isset($_SESSION["IS_CONNECTED"])){
        $ad = "admin";
        $comp = "company";
        $can = "candidate";
        if ($_SESSION["status"] == $ad){
        header('Location: http://localhost:8080/projet/admins.php');
        exit;
        }
        if ($_SESSION["status"] == $can){
        header('Location: http://localhost:8080/projet/users.php');
        exit;
        }
        if ($_SESSION["status"] == $comp){
        header('Location: http://localhost:8080/projet/company.php');
        exit;
        
        }
        
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Test session</title>
</head>

<body>
<h1 class ='centertext'>Ma page de SESSION</h1>

<form action="connexion.php" method="post">
    <input type="text" name="nom" placeholder="NOM" />
    <br>
    <input type="text" name="prenom" placeholder="PRENOM" />
    <br>
    <input type="test" name="age" placeholder="AGE"/>
    <br>
    <input type="test" name="email" placeholder="EMAIL"/>
    <br>
    <input type="password" name="password" placeholder="PASSWORD"/>
    <br>
    <label for="status">Choisir un status</label>

    <select name="status" id="status">
        <option value="">--Please choose an option--</option>
        <option value="candidate">Candidate</option>
        <option value="company">Company</option>
        <option value="admin">Admin</option>
        
    </select>
    <br>
    <button type="submit">Envoyer</button>
    
</form>


</body>
</html>