<?php
/**
 * Created by PhpStorm.
 * User: ISRA NDAYA
 * Date: 11/08/2022
 * Time: 03:36
 */
require_once "../config/config.php";
require_once "../model/DAO/Connexion.class.php";

if(!empty($_POST["idProduit"])) {
    $query ="SELECT * FROM produit_tbl";
    $req_prepare =  Connexion::getConnexion()->prepare($query);
    $req_prepare->execute(array($_POST["idProduit"] ));
    $results = $req_prepare->fetchAll(PDO::FETCH_ASSOC);

    echo "<input value='".$produit['pv']."' name=\"pv\" type=\"text\" class=\"form-control validate\"/>";

}
?>