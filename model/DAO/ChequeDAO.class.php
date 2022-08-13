<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 10/08/2022
 * Time: 14:08
 */
class ChequeDAO
{
    public static function createCheque(Cheque $cheque){

        try{
            $req = "call proc_creerCheque('".addslashes($cheque->getDateCheque())."', 
                                           '".addslashes($cheque->getMontantNum())."',
                                           '".addslashes($cheque->getMontantLettres())."',
                                           '".addslashes($cheque->getNomBeneficiaire())."',
                                           '".addslashes($cheque->getObservation())."'
                                           )";
            $req_prepare = Connexion::getConnexion()->prepare($req);
            $req_prepare->execute();
            $req_prepare->closeCursor();
        }catch (Exception $ex){
            echo "Message = ".$ex->getMessage()."Line=".$ex->getLine();
        }

    }
    public static function getAllCheques(){

        try{
            $req = "call proc_getAllCheques()";
            $req_prepare = Connexion::getConnexion()->prepare($req);
            $req_prepare->execute();
            $result = $req_prepare->fetchAll(PDO::FETCH_ASSOC);
            $req_prepare->closeCursor();
            return $result;
        }catch (Exception $ex){
            echo "Message = ".$ex->getMessage()." Line = ".$ex->getLine();
        }
    }

}