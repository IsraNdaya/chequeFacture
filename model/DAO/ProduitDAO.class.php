<?php

/**
 * Created by PhpStorm.
 * User: ISRA NDAYA
 * Date: 09/08/2022
 * Time: 22:28
 */
class ProduitDAO
{
    public static function createProduit(Produit $produit){

        try{
            $req = "call proc_createProduit('".addslashes($produit->getCodeProduit())."',
                                            '".addslashes($produit->getLibelle())."', 
                                            '".addslashes($produit->getPa())."', 
                                            '".addslashes($produit->getPv())."', 
                                            '".addslashes($produit->getQteStock())."', 
                                            '".addslashes($produit->getEtat())."')";
            $req_prepare = Connexion::getConnexion()->prepare($req);
            $req_prepare->execute();
            $req_prepare->closeCursor();
        }catch (Exception $ex){
            echo "Message = ".$ex->getMessage()."Line=".$ex->getLine();
        }

    }

    public static function getAllProduits(){

        try{
            $req = "call proc_getAllProduits()";
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