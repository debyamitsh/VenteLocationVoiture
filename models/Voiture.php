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


}