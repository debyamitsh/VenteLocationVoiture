<?php


class Operation_vehicule //lors de la location ou l'achat
{
    private $id;
    private $id_vehicule;
    private $id_client;//l'acheteur ou celui qui a loué la voiture
    private $type;//1 pour vendu et 0 pour louer
    private $date;//date de l'achat ou de la location
    private $datefin;//la date de fin de location

    /**
     * Operation_vehicule constructor.
     * @param $id
     * @param $id_vehicule
     * @param $id_client
     * @param $type
     * @param $date
     * @param $datefin
     */
    public function __construct($id, $id_vehicule, $id_client, $type, $date, $datefin)
    {
        $this->id = $id;
        $this->id_vehicule = $id_vehicule;
        $this->id_client = $id_client;
        $this->type = $type;
        $this->date = $date;
        $this->datefin = $datefin;
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
    public function getIdVehicule()
    {
        return $this->id_vehicule;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    
}