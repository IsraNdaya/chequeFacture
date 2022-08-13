<?php
/**
 * Created by PhpStorm.
 * User: ISRA NDAYA
 * Date: 09/08/2022
 * Time: 22:46
 */
require_once "../config/config.php";
require_once "../model/DAO/Connexion.class.php";
require_once "../model/DAO/ProduitDAO.class.php";
require_once "../model/entities/Produit.class.php";

try{
    $produit = new Produit(0, $_GET['codeProduit'],$_GET['libelle'], $_GET['pa'], $_GET['pv'], $_GET['qteStock'],"");
    ProduitDAO::createProduit($produit);

}catch (Exception $ex){
    echo "Message = ".$ex->getMessage()."Line = ".$ex->getLine();
}
header("Location:../view/products.php");
