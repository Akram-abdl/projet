<?php
    session_start();
    include_once('config/pdo.php');
    require_once('Manager/UserManager.php');
    if(!isset($_SESSION["IS_CONNECTED"])){
        header('Location: http://localhost:8080/cours/projet/index.php');
        exit;
    }
    

    $user_controller = new UserManager($pdo);
    $liste_users = $user_controller->getAllUser();
    $data = [
            'nom' => strtolower($_SESSION['nom']),
            'prenom' => strtolower($_SESSION['prenom']),
            'age' => $_SESSION['age'],
            'email' => strtolower($_SESSION['email']),
            'password' => strtolower($_SESSION['password']),
            'status' => strtolower($_SESSION['status']),
        ];
    
    // $_POST["nom"]

    $offres = $pdo->prepare('SELECT announce FROM announcement');
    $offres->execute();
    $arrayoffres = $offres->fetchAll(PDO::FETCH_COLUMN);

    
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>List User</title>
</head>

<body>
<h1>Ma page de SESSION Entreprise</h1>
<form action="announce.php" method="post">
    <label for="announce">Zone de texte offre :</label>

    <textarea id="announce" placeholder = "Ecrivez votre offre...." name="announce" rows="4" cols="50"></textarea>
    <button type='submit'>Envoyer</button>
</form>
<table>
            
<?php
foreach ($arrayoffres as $key => $value) {
    echo"
        <tr>
            <td> Annonce $key : $value</td>
        </tr>
    ";
}
?>
</table>
<br>
<h3> Liste des candidats</h3>
<?php

if(!empty($liste_users)){
    foreach ($liste_users as $user){
        
        echo "<a href='profile.php?id=".$user->id().'&status='.$user->status().'&nom='.$user->nom().'&prenom='.$user->prenom().'&email='.$user->email().'&age='.$user->age()."'>".$user->nom().' '.$user->prenom(). '  '.$user->age()."</a>";
        ?><br>
        <?php
       
    }
} else {
    echo "<h1>Pas de user</h1>";
}
var_dump($_SESSION);
?>

<br>
<a href='deconnexion.php'>Se déconnecter</a>

</body>
</html>