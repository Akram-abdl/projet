<?php
require_once('Model/User.php');

class UserManager
{
    private $db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function getUser($id)
    {
        $id = (int) $id;

        $query = $this->db->prepare('SELECT * FROM utilisateurs WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        $donnees = $query->fetch(PDO::FETCH_ASSOC);

        if(!empty($donnees)){
            return new User($donnees);
        }else{
            return null;
        }

    }

    public function addUser(User $user){
        $query = $this->db->prepare('INSERT INTO utilisateurs(nom, prenom, age, email, password, status) VALUES(:nom, :prenom, :age, :email, :password, :status)');

        $query->bindValue(':nom', $user->nom());
        $query->bindValue(':prenom', $user->prenom());
        $query->bindValue(':age', $user->age(), PDO::PARAM_INT);
        $query->bindValue(':email', $user->email());
        $query->bindValue(':password', $user->password());
        $query->bindValue(':status', $user->status());


        $query->execute();
    }

    public function getAllUser()
    {
        $users = [];

        $query = $this->db->query('SELECT * FROM utilisateurs');
        $donnees = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($donnees as $d){
            $users[] = new User($d);
        }

        return $users;
    }
    public function updateUser($id, $nom, $prenom, $age, $email, $password) {
			$con = getDatabaseConnexion();
			$requete = "UPDATE utilisateurs set 
						nom = '$nom',
						prenom = '$prenom',
						age = '$age',
						password = '$adresse',
                        status = '$status', 
						where id = '$id' ";
			$stmt = $this->db->query($requete);
	    
	}
}

?>