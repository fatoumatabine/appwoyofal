<?php
namespace Src\Controller;

class LoggingController
{
    public function index()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Liste des logs (exemple)',
            'data' => []
        ]);
    }

    public function show($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Détail du log $id (exemple)",
            'data' => null
        ]);
    }

    public function create()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Log créé (exemple)'
        ]);
    }

    public function update($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Log $id mis à jour (exemple)"
        ]);
    }

    public function delete($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Log $id supprimé (exemple)"
        ]);
    }
}
