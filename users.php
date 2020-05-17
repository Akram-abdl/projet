<?php
    session_start();
    include_once('config/pdo.php');
    require_once('Manager/UserManager.php');
    if(!isset($_SESSION["IS_CONNECTED"])){
        header('Location: http://localhost:8080/projet/index.php');
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
    
    
    
    
    $offres = $pdo->prepare('SELECT announce FROM announcement');
    $offres->execute();
    $arrayoffres = $offres->fetchAll(PDO::FETCH_COLUMN);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <title>List User</title>
</head>

<body>
    <div id="header">

                
                <hr>
                <div>
                    <ul id="menu">
                        <li class="inc_fast"><a href="index.php">HOME</a></li>
                        <li class="inc_fast"><a href="deconnexion.php">Se déconnecter</a></li>
                    </ul>
                </div>





    </div>
<h1 class ='centertext'>Ma page d'accueil Candidat</h1>

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
</div>
<br>


<h3 class = 'centertext'> Liste des candidats</h3>
<?php

if(!empty($liste_users)){
    foreach ($liste_users as $user){
        
        echo "<div class= 'centertext' ><a href='profile.php?id=".$user->id().'&status='.$user->status().'&nom='.$user->nom().'&prenom='.$user->prenom().'&email='.$user->email().'&age='.$user->age()."'>".$user->nom().' '.$user->prenom(). '  '.$user->age().' ans ('.$user->status().")</a></div>";
        ?><br>
        <?php
       
    }
} else {
    echo "<h1>Pas de user</h1>";
}

?>

<br>
<a href='deconnexion.php'>Se déconnecter</a>

</body>
</html>