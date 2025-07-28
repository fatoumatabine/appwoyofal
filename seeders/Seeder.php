<?php

namespace Seeders;

use App\Core\App;
use App\Core\Database;
use Src\Service\IUploadService;
use PDO;
use Exception;
use PDOException;

class Seeder
{
    private IUploadService $uploadService;

    public function __construct()
    {
        // Récupération du service d'upload via le conteneur DI
        $this->uploadService = App::get(IUploadService::class);
    }


    public function run()
    {
        try {
            $this->seedClients();
            echo "Insertion des données terminée avec succès!\n";
        } catch (PDOException $e) {
            die("Échec de l'insertion des données: " . $e->getMessage() . "\n");
        } catch (Exception $e) {
            die("Erreur: " . $e->getMessage() . "\n");
        }
    }

    // Ancienne méthode seedCitoyens supprimée, seeding client uniquement
    
    public function seedClients()
    {
        $db = Database::getInstance();
        echo "\n📊 Début du seeding des clients...\n";
        $clients = [
            ['nom' => 'Sow', 'prenom' => 'Amina'],
            ['nom' => 'Diop', 'prenom' => 'Marie'],
            ['nom' => 'Doe', 'prenom' => 'John'],
            ['nom' => 'Doe', 'prenom' => 'Jane'],
            ['nom' => 'Doe', 'prenom' => 'Jin']
        ];
        foreach ($clients as $client) {
            $stmt = $db->prepare("INSERT INTO client (nom, prenom) VALUES (:nom, :prenom)");
            $stmt->execute($client);
            echo "   ✓ Client créé: {$client['prenom']} {$client['nom']}\n";
        }
        echo "\n👥 " . count($clients) . " clients créés\n";
    }
}