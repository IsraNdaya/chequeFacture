<?php

/**
 * Created by PhpStorm.
 * User: ISRA NDAYA
 * Date: 09/08/2022
 * Time: 22:13
 */
class Produit
{
    private $id;
    private $codeProduit;
    private $libelle;
    private $pa;
    private $pv;
    private $qteStock;
    private $etat;

    /**
     * Produit constructor.
     * @param $id
     * @param $codeProduit
     * @param $libelle
     * @param $pa
     * @param $pv
     * @param $qteStock
     * @param $etat
     */
    public function __construct($id, $codeProduit, $libelle, $pa, $pv, $qteStock, $etat)
    {
        $this->id = $id;
        $this->codeProduit = $codeProduit;
        $this->libelle = $libelle;
        $this->pa = $pa;
        $this->pv = $pv;
        $this->qteStock = $qteStock;
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCodeProduit()
    {
        return $this->codeProduit;
    }

    /**
     * @param mixed $codeProduit
     */
    public function setCodeProduit($codeProduit)
    {
        $this->codeProduit = $codeProduit;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getPa()
    {
        return $this->pa;
    }

    /**
     * @param mixed $pa
     */
    public function setPa($pa)
    {
        $this->pa = $pa;
    }

    /**
     * @return mixed
     */
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * @param mixed $pv
     */
    public function setPv($pv)
    {
        $this->pv = $pv;
    }

    /**
     * @return mixed
     */
    public function getQteStock()
    {
        return $this->qteStock;
    }

    /**
     * @param mixed $qteStock
     */
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

}