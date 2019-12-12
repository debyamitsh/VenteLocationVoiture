<?php


class Voiture
{
    private $id;
    private $numeroplaque;//que pour des voitures à louer
    private $model;
    private $marque;
    private $couleur;
    private $photo;
    private $prix;
    private $etat;//soit à vendre,à louer,vendu,loué ou en attente
    private $id_utilisateur;//le propriétaire de la voiture

    /**
     * Voiture constructor.
     * @param $id
     * @param $numeroplaque
     * @param $model
     * @param $marque
     * @param $couleur
     * @param $photo
     * @param $prix
     * @param $etat
     * @param $id_utilisateur
     */
    public function __construct($id, $numeroplaque, $model, $marque, $couleur, $photo, $prix, $etat, $id_utilisateur)
    {
        $this->id = $id;
        $this->numeroplaque = $numeroplaque;
        $this->model = $model;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->photo = $photo;
        $this->prix = $prix;
        $this->etat = $etat;
        $this->id_utilisateur = $id_utilisateur;
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
    public function getNumeroplaque()
    {
        return $this->numeroplaque;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }

    public static function AjoutVoiture($id, $numeroplaque, $model, $marque, $couleur, $photo, $prix, $etat, $id_utilisateur){ //foction de l'ajout d'une voiture dans la bdd
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "INSERT INTO voiture VALUES ('','$numeroplaque','$model','$marque','$couleur','$photo'.'$prix'.'$etat'.'$id_utilisateur')";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Voiture($ob->id, $ob->numeroplaque, $ob->model, $ob->marque, $ob->couleur, $ob->photo, $ob->prix, $ob->etat, $ob->id_utilisateur);
                }
            }
            return $tableau;

        }catch (PDOException $e){

        }

    }

    public static function AfficharVoiture(){ //fonction permettant d'afficher une voiture
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "SELECT * FROM voiture ";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Voiture($ob->id, $ob->numeroplaque, $ob->model, $ob->marque, $ob->couleur, $ob->photo, $ob->prix, $ob->etat, $ob->id_utilisateur);
                }
            }
            return $tableau;

        }catch (PDOException $e){

        }

    }

    public static function ModifierVoiture($id, $etat){ //fonction qui permet de changer l'état d'une voiture soit à vendre ou à louer
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "UPDATE voiture SET etat = '$etat' WHERE id = '$id'  ";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Voiture($ob->id, $ob->numeroplaque, $ob->model, $ob->marque, $ob->couleur, $ob->photo, $ob->prix, $ob->etat, $ob->id_utilisateur);
                }
            }
            return $tableau;

        }catch (PDOException $e){

        }

    }

    //fonction permettant la suppression d'une voiture
    public static function SupprimerVoiture($id){
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "DELETE FROM voiture WHERE id = '$id'";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();

        }catch (PDOException $e){

        }

    }

    public static function AfficharProiprietaire($id,$id_utilisateur){ //fonction permettant d'afficher le p
        try{
            $pdo_connexion = Connexion::GetConnexion();
            $pdo_query = "SELECT id_utilisateur FROM voiture WHERE id = '$id'";
            $pdo_result = $pdo_connexion->prepare($pdo_query);
            $pdo_result->execute();
            $tableau = array();
            if($pdo_result != NULL){
                while ($ob = $pdo_result->fetch(PDO::FETCH_OBJ) ){
                    $tableau[] = new Voiture($ob->id, $ob->numeroplaque, $ob->model, $ob->marque, $ob->couleur, $ob->photo, $ob->prix, $ob->etat, $ob->id_utilisateur);
                }
            }
            return $tableau;

        }catch (PDOException $e){

        }

    }

}