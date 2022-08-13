<?php

/**
 * Created by PhpStorm.
 * User: ISRA NDAYA
 * Date: 09/08/2022
 * Time: 22:30
 */
class Connexion
{
    private static $con;
    public static function getConnexion(){
        if(self::$con == null){
            self::$con = new PDO(BD_DSN,BD_UTILISATEUR, BD_PASSWORD,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        }
        return self::$con;
    }

}