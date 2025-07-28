<?php
namespace src\Entity;

class Compteur
{
    private $id;
    private $numerocompteur;
    private $client; // Client
    private $achat = [];
    private $tranche; // Tranche

    public function __construct($id, $numerocompteur, $client, $tranche)
    {
        $this->id = $id;
        $this->numerocompteur = $numerocompteur;
        $this->client = $client;
        $this->tranche = $tranche;
    }

    public function getId() { return $this->id; }
    public function getNumeroCompteur() { return $this->numerocompteur; }
    public function getClient() { return $this->client; }
    public function setClient($client) { $this->client = $client; }
    public function getAchat() { return $this->achat; }
    public function addAchat($achat) { $this->achat[] = $achat; }
    public function getTranche() { return $this->tranche; }
    public function setTranche($tranche) { $this->tranche = $tranche; }
}
