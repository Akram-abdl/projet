<?php
    session_start();
    include_once('config/pdo.php');
    require_once('Manager/UserManager.php');
    $user_controller = new UserManager($pdo);
    $query = $pdo->prepare('INSERT INTO announcement(announce) VALUES(:announce)');
    $query->bindValue(':announce', ($_POST['announce']));
    $query->execute();
    $ad = "admin";
    $comp = "company";
    if ($_SESSION["status"] == $ad){
    header('Location: http://localhost:8080/projet/admins.php');
    exit;
    }
    if ($_SESSION["status"] == $comp){
    header('Location: http://localhost:8080/projet/company.php');
    exit;
    
    }
?>