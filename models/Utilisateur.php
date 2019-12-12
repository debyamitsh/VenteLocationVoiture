<?php


class Utilisateur
{
    private $id;
    private $prenom;
    private $nom;
    private $email;//login
    private $password;//password
    private $photo;

    /**
     * Utilisateur constructor.
     * @param $id
     * @param $prenom
     * @param $nom
     * @param $email
     * @param $password
     * @param $photo
     */
    public function __construct($id, $prenom, $nom, $email, $password, $photo)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;//login
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;//password
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    public static function SeConnecter($email, $password){//fonction permettant de se connecter à l'aide de l'email et du password
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "SELECT * FROM utilisateur WHERE email = '$email' AND password = '$password' ";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Utilisateur($ob->id, $ob->prenom, $ob->nom, $ob->email, $ob->password, $ob->photo);
                }
            }
            return $tableau;

        }catch (PDOException $e){

        }

    }

    //vérifie si un email est déjà utilisée ou pas
    public static function VerifierLogin($email){
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "SELECT * FROM utilisateur WHERE email = '$email'";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Utilisateur($ob->id, $ob->prenom, $ob->nom, $ob->email, $ob->password, $ob->photo);
                }
            }
            return $tableau;

        }catch (PDOException $e){

        }

    }


    public static function Enregistre($id, $prenom, $nom, $email, $password, $photo){ //fonction de l'ajout d'un utilisateur dans la bdd
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "INSERT INTO utilisateur VALUES ('','$prenom','$nom','$email','$password','$photo')";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Utilisateur($ob->id, $ob->prenom, $ob->nom, $ob->email, $ob->password, $ob->photo);
                }
            }
            return $tableau;

        }catch (PDOException $e){

        }

    }

    public static function AfficherUtilisateur(){//fonction permettant d'afficher les utilisateurs
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "SELECT * FROM utilisateur ";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Utilisateur($ob->id, $ob->prenom, $ob->nom, $ob->email, $ob->password, $ob->photo);
                }
            }
            return $tableau;

        }catch (PDOException $e){

        }

    }
    //fonction permettant la suppression d'un utilisateur
    public static function SupprimerUtilisateur($id){
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "DELETE FROM utilisateur WHERE id = '$id'";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();

        }catch (PDOException $e){

        }

    }

}