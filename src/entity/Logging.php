<?php

namespace Src\Entity;

use DateTime;

class Logging
{
    private int $id;
    private ?\DateTime $date_heure;
    private string $localisation;
    private ?Statut $statut;
    private string $coderecharge;
    private float $nombrekilowatt;

    public function __construct(int $id, ?\DateTime $date_heure, string $localisation, ?Statut $statut, string $coderecharge, float $nombrekilowatt)
    {
        $this->id = $id;
        $this->date_heure = $date_heure;
        $this->localisation = $localisation;
        $this->statut = $statut;
        $this->coderecharge = $coderecharge;
        $this->nombrekilowatt = $nombrekilowatt;
    }

    public function getId(): int { return $this->id; }
    public function getDateHeure(): ?\DateTime { return $this->date_heure; }
    public function getLocalisation(): string { return $this->localisation; }
    public function getStatut(): ?Statut { return $this->statut; }
    public function setStatut(?Statut $statut): void { $this->statut = $statut; }
    public function getCodeRecharge(): string { return $this->coderecharge; }
    public function getNombreKilowatt(): float { return $this->nombrekilowatt; }
}
