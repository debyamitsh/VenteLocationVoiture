<?php


class Connexion
{
    private static $ressource;

    public static function GetConnexion()
    {
        if(self::$ressource == null)
        {
            self::$ressource = new PDO(DNS,DB_USER,DB_PASSWORD,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            return self::$ressource;
        }
        else
        {
            return self::$ressource;

        }

    }
}