<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 10/08/2022
 * Time: 14:04
 */
class Cheque
{
    private $id;
    private $dateCheque;
    private $montantNum;
    private $montantLettres;
    private $nomBeneficiaire;
    private $observation;

    /**
     * Cheque constructor.
     * @param $id
     * @param $dateCheque
     * @param $montantNum
     * @param $montantLettres
     * @param $nomBeneficiaire
     * @param $observation
     */
    public function __construct($id, $dateCheque, $montantNum, $montantLettres, $nomBeneficiaire, $observation)
    {
        $this->id = $id;
        $this->dateCheque = $dateCheque;
        $this->montantNum = $montantNum;
        $this->montantLettres = $montantLettres;
        $this->nomBeneficiaire = $nomBeneficiaire;
        $this->observation = $observation;
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
    public function getDateCheque()
    {
        return $this->dateCheque;
    }

    /**
     * @param mixed $dateCheque
     */
    public function setDateCheque($dateCheque)
    {
        $this->dateCheque = $dateCheque;
    }

    /**
     * @return mixed
     */
    public function getMontantNum()
    {
        return $this->montantNum;
    }

    /**
     * @param mixed $montantNum
     */
    public function setMontantNum($montantNum)
    {
        $this->montantNum = $montantNum;
    }

    /**
     * @return mixed
     */
    public function getMontantLettres()
    {
        return $this->montantLettres;
    }

    /**
     * @param mixed $montantLettres
     */
    public function setMontantLettres($montantLettres)
    {
        $this->montantLettres = $montantLettres;
    }

    /**
     * @return mixed
     */
    public function getNomBeneficiaire()
    {
        return $this->nomBeneficiaire;
    }

    /**
     * @param mixed $nomBeneficiaire
     */
    public function setNomBeneficiaire($nomBeneficiaire)
    {
        $this->nomBeneficiaire = $nomBeneficiaire;
    }

    /**
     * @return mixed
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @param mixed $observation
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    }


}