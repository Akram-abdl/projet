<?php
    session_start();
    if(isset($_SESSION["IS_CONNECTED"])){
        header('Location: http://localhost:8080/cours/projet/users.php');
exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Test session</title>
</head>

<body>
<h1>Ma page de SESSION</h1>

<form action="connexion.php" method="post">
    <input type="text" name="nom" placeholder="NOM" />
    <br>
    <input type="text" name="prenom" placeholder="PRENOM" />
    <br>
    <input type="test" name="age" placeholder="AGE"/>
    <br>
    <input type="test" name="email" placeholder="EMAIL"/>
    <br>
    <input type="test" name="password" placeholder="PASSWORD"/>
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

<a href="users.php">Test</a>

</body>
</html>
