<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 10/08/2022
 * Time: 14:17
 */
require_once "../config/config.php";
require_once "../model/DAO/Connexion.class.php";
require_once "../model/DAO/ChequeDAO.class.php";
require_once "../model/entities/Cheque.class.php";

try{
    $cheque = new Cheque(0,
                         $_GET['dateCheque'],
                         $_GET['montantNum'],
                         $_GET['montantLettres'],
                         $_GET['nomBeneficiaire'],
                         $_GET['observation']);
    ChequeDAO::createCheque($cheque);

}catch (Exception $ex){
    echo "Message = ".$ex->getMessage()."Line = ".$ex->getLine();
}
header("Location:../view/listeCheques.php");