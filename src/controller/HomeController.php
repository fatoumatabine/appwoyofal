<?php

namespace Src\Controller;

class HomeController
{
    public function index()
    {
        echo json_encode([
            'message' => 'Bienvenue sur l\'API compte woyofaff',
            'version' => '1.0.0',
            'documentation' => 'https://example.com/docs'
        ]);
    }
}
