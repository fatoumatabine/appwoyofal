<?php
namespace src\Entity;

class Achat
{
    private $id;
    private $reference;
    private $coderecharge;
    private $nombrekilowatt;
    private $date_heure;
    private $prixkw;
    private $compteur; // Compteur

    public function __construct($id, $reference, $coderecharge, $nombrekilowatt, $date_heure, $prixkw, $compteur)
    {
        $this->id = $id;
        $this->reference = $reference;
        $this->coderecharge = $coderecharge;
        $this->nombrekilowatt = $nombrekilowatt;
        $this->date_heure = $date_heure;
        $this->prixkw = $prixkw;
        $this->compteur = $compteur;
    }

    public function getId() { return $this->id; }
    public function getReference() { return $this->reference; }
    public function getCodeRecharge() { return $this->coderecharge; }
    public function getNombreKilowatt() { return $this->nombrekilowatt; }
    public function getDateHeure() { return $this->date_heure; }
    public function getPrixKw() { return $this->prixkw; }
    public function getCompteur() { return $this->compteur; }
    public function setCompteur($compteur) { $this->compteur = $compteur; }
}
