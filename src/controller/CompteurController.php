<?php
namespace Src\Controller;

class CompteurController
{
    public function index()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Liste des compteurs (exemple)',
            'data' => []
        ]);
    }

    public function show($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Détail du compteur $id (exemple)",
            'data' => null
        ]);
    }

    public function create()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Compteur créé (exemple)'
        ]);
    }

    public function update($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Compteur $id mis à jour (exemple)"
        ]);
    }

    public function delete($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Compteur $id supprimé (exemple)"
        ]);
    }
}
