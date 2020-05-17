<?php
session_start();
if($_SESSION['IS_CONNECTED'] == true){
    session_destroy();
    header('Location: http://localhost:8080/cours/projet/index.php');
    exit;
}
?>