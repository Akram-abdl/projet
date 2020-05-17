<?php
session_start();
if(isset($_POST["nom"]) && isset($_POST["prenom"])){
    include_once('config/pdo.php');
    require_once('Manager/UserManager.php');
    $user_controller = new UserManager($pdo);
    $_SESSION["IS_CONNECTED"]= true;
    $_SESSION["nom"]= $_POST["nom"];
    $_SESSION["prenom"]= $_POST["prenom"];
    $_SESSION["age"] = $_POST["age"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["status"] = $_POST["status"];
    $ad = "admin";
    $comp = "company";
    $can = "candidate";
    $query = $pdo->prepare('INSERT INTO utilisateurs(nom, prenom, age, email, password, status) VALUES(:nom, :prenom, :age, :email, :password, :status)');

    $query->bindValue(':nom', strtolower($_SESSION['nom']));
    $query->bindValue(':prenom', strtolower($_SESSION['prenom']));
    $query->bindValue(':age',$_SESSION['age']);
    $query->bindValue(':email', strtolower($_SESSION['email']));
    $query->bindValue(':password', strtolower($_SESSION['password']));
    $query->bindValue(':status', strtolower($_SESSION['status']));

    $query->execute();
    if ($_POST["status"] == $ad){
    header('Location: http://localhost:8080/cours/projet/admins.php');
    exit;
    }
    if ($_POST["status"] == $can){
    header('Location: http://localhost:8080/cours/projet/users.php');
    exit;
    }
    if ($_POST["status"] == $comp){
    header('Location: http://localhost:8080/cours/projet/company.php');
    exit;
    
    }
}else{
    header('Location: http://localhost:8080/cours/projet/index.php');
    exit;
}
?>