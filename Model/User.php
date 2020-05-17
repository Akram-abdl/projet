<?php

class User
{
    public $id;
    public $nom;
    public $prenom;
    public $age;
    public $email;
    public $password;
    public $status;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    public function id(){
        return $this->id;
    }

    public function nom(){
        return $this->nom;
    }

    public function prenom(){
        return $this->prenom;
    }
    public function email(){
        return $this->email;
    }
    public function password(){
        return $this->password;
    }
    public function age(){
        return $this->age;
    }
    public function status(){
        return $this->status;
    }
    public function setId($id_envoyer){
        $id = (int) $id_envoyer;
        $this->id = $id;
    }

    public function setNom($nom_envoyer){
        if (is_string($nom_envoyer))
        {
            $this->nom = htmlspecialchars($nom_envoyer);
        }
    }
    public function setEmail($email_envoyer){
        if (is_string($email_envoyer))
        {
            $this->email = htmlspecialchars($email_envoyer);
        }
    }
    public function setPassword($password_envoyer){
        if (is_string($password_envoyer))
        {
            $this->password = htmlspecialchars($password_envoyer);
        }
    }
    public function setStatus($status_envoyer){
        if (is_string($status_envoyer))
        {
            $this->status = htmlspecialchars($status_envoyer);
        }
    }

    public function setPrenom($prenom_envoyer){
        if (is_string($prenom_envoyer))
        {
            $this->prenom = htmlspecialchars($prenom_envoyer);
        }
    }

    public function setAge($age_envoyer){
        $age = (int) $age_envoyer;

        if ($age >= 0 && $age <= 100)
        {
            $this->age = $age;
        }
    }
}
?>