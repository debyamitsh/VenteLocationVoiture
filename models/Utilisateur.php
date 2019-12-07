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


}