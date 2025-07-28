<?php
namespace src\Entity;

class Tranche
{
    private $id;
    private $type;
    private $consommation;
    private $prixkw;

    public function __construct($id, $type, $consommation, $prixkw)
    {
        $this->id = $id;
        $this->type = $type;
        $this->consommation = $consommation;
        $this->prixkw = $prixkw;
    }

    public function getId() { return $this->id; }
    public function getType() { return $this->type; }
    public function getConsommation() { return $this->consommation; }
    public function getPrixKw() { return $this->prixkw; }
}
