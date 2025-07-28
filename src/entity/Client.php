<?php
namespace src\Entity;

class Client
{
    private $id;
    private $nom;
    private $prenom;
    private $compteur = [];

    public function __construct($id, $nom, $prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getId() { return $this->id; }
    public function getNom() { return $this->nom; }
    public function getPrenom() { return $this->prenom; }
    public function getCompteur() { return $this->compteur; }
    public function addCompteur($compte) { $this->compteur[] = $compte; }
}
