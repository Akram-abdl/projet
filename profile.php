<?php
session_start();
include_once('config/pdo.php');
require_once('Manager/UserManager.php');

if (isset($_GET['id']) && ($_GET['id']) > 0) {
    $user_controller = new UserManager($pdo);
    $user = $user_controller->getUser($_GET['id']);

    if(empty($user)){
        header('Location: users.php');
    }

} else {
    header('Location: users.php');
}


$nom = $user->nom();
$prenom = $user->prenom();
$age = $user->age();
$email= $user->email();
$status= $user->status();
$password= $user->password();
$id = $user->id();

?>

<?php
if(isset($_POST['prenom'])) {
    $prenomp = $_POST['prenom'];
    $nomp = $_POST['nom'];
    $agep = $_POST['age'];
    $emailp = $_POST['email'];
    $passwordp = $_POST['password'];
    $statusp = $_POST['status']; 

   
    $query = $pdo->prepare("UPDATE utilisateurs set nom = :nom,
                            prenom = :prenom,
                            age = :age,
                            email = :email,
                            password = :password,
                            status = :status
                            WHERE id = :id ");

    $query->execute(array(
        'nom'=> $nomp,
        'prenom'=> $prenomp,
        'age'=> $agep,
        'email'=> $emailp,
        'password'=> $passwordp,
        'id'=> $id,
        'status'=> $statusp,
    ));
?>
    <p>Modifications effectuée</p>
    <!DOCTYPE html>
        <html>
        <head>
        <title>List User</title>
        </head>

        <body>
        <h1>Ma page de SESSION</h1>


        <table>
            <tr>
                <td> L'utilsateur est un: <?php echo "$status";?> </td>
                <td> Prenom de utilisateur: <?php echo "$prenom";?> </td>
                <td> Nom de utilisateur: <?php echo "$nom"; ?></td>
                <td> Age de utilisateur: <?php echo "$age"; ?></td>
                <td> Email de utilisateur: <?php echo "$email"; ?> </td>
            </tr>
        </table>

        <h3> Modifier information </h3>
        <form action='' method="post">
            <input type='text' name='nom' placeholder = <?php echo"$nom"?> />
            <br>
            <input type='text' name='prenom' placeholder =<?php echo"$prenom"?> />
            <br>
            <input type='text' name='age' placeholder = <?php echo"$age"?> />
            <br>
            <input type='text' name='email' placeholder = <?php echo"$email"?> />
            <br>
            <input type='text' name='password' placeholder = <?php echo"$password"?> />
            <br>
            <label for='status'>Choisir un status</label>

            <select name='status' id='status'>
                <option value=''>--Please choose an option--</option>
                <option value='candidate'>Candidate</option>
                <option value='company'>Company</option>
                <option value='admin'>Admin</option>
                
            </select>
            <br>
            <button type='submit'>Envoyer</button>
        <a href='index.php'>Home</a>
        </form>
        </body>
        </html>



<?php
} else {
?>
        <!DOCTYPE html>
        <html>
        <head>
        <title>List User</title>
        </head>

        <body>
        <h1>Ma page de SESSION</h1>


        <table>
            <tr>
                <td> L'utilsateur est un: <?php echo "$status";?> </td>
                <td> Prenom de utilisateur: <?php echo "$prenom";?> </td>
                <td> Nom de utilisateur: <?php echo "$nom"; ?></td>
                <td> Age de utilisateur: <?php echo "$age"; ?></td>
                <td> Email de utilisateur: <?php echo "$email"; ?> </td>
            </tr>
        </table>

        <h3> Modifier information </h3>
        <form action='' method="post">
            <input type='text' name='nom' placeholder = <?php echo"$nom"?> />
            <br>
            <input type='text' name='prenom' placeholder =<?php echo"$prenom"?> />
            <br>
            <input type='text' name='age' placeholder = <?php echo"$age"?> />
            <br>
            <input type='text' name='email' placeholder = <?php echo"$email"?> />
            <br>
            <input type='text' name='password' placeholder = <?php echo"$password"?> />
            <br>
            <label for='status'>Choisir un status</label>

            <select name='status' id='status'>
                <option value=''>--Please choose an option--</option>
                <option value='candidate'>Candidate</option>
                <option value='company'>Company</option>
                <option value='admin'>Admin</option>
                
            </select>
            <br>
            <button type='submit'>Envoyer</button>
        
            <a href='index.php'>Home</a>
        </form>
        </body>
        </html>

<?php 
}



?>