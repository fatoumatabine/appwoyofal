<?php
namespace Src\Controller;

class AchatController
{
    public function index()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Liste des achats (exemple)',
            'data' => []
        ]);
    }

    public function show($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Détail de l'achat $id (exemple)",
            'data' => null
        ]);
    }

    public function create()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Achat créé (exemple)'
        ]);
    }

    public function update($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Achat $id mis à jour (exemple)"
        ]);
    }

    public function delete($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Achat $id supprimé (exemple)"
        ]);
    }
}
