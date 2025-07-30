<?php
namespace Src\Controller;

use Src\Repository\LoggingRepository;
use App\Core\Database;

class LoggingController
{
    public function index()
    {
        header('Content-Type: application/json');
        try {
            $repo = new \Src\Repository\LoggingRepository();
            $logs = $repo->findAll();
            $data = array_map(function($log) {
                return [
                    'id' => $log->getId(),
                    'date_heure' => $log->getDateHeure() ? $log->getDateHeure()->format('Y-m-d H:i:s') : null,
                    'localisation' => $log->getLocalisation(),
                    'statut' => $log->getStatut() ? $log->getStatut()->value : null,
                    'coderecharge' => $log->getCodeRecharge(),
                    'nombrekilowatt' => $log->getNombreKilowatt(),
                ];
            }, $logs);
            echo json_encode([
                'message' => 'Liste des logs',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                'message' => 'Erreur lors de la récupération des logs',
                'error' => $e->getMessage()
            ]);
        }
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
