<?php

// Configuration des routes pour l'API
$routes = [
    // ...routes existantes...

    // Routes Logging
    [
    'path' => ' ',
        'controller' => 'Src\\Controller\\LoggingController',
        'action' => 'index',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/loggings',
        'controller' => 'Src\\Controller\\LoggingController',
        'action' => 'create',
        'methods' => ['POST'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/loggings/{id}',
        'controller' => 'Src\\Controller\\LoggingController',
        'action' => 'show',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/loggings/{id}',
        'controller' => 'Src\\Controller\\LoggingController',
        'action' => 'update',
        'methods' => ['PUT', 'PATCH'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/loggings/{id}',
        'controller' => 'Src\\Controller\\LoggingController',
        'action' => 'delete',
        'methods' => ['DELETE'],
        'middlewares' => []
    ],

    // Routes Achat
    [
        'path' => '/api/v1/achats',
        'controller' => 'Src\\Controller\\AchatController',
        'action' => 'index',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/achats',
        'controller' => 'Src\\Controller\\AchatController',
        'action' => 'create',
        'methods' => ['POST'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/achats/{id}',
        'controller' => 'Src\\Controller\\AchatController',
        'action' => 'show',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/achats/{id}',
        'controller' => 'Src\\Controller\\AchatController',
        'action' => 'update',
        'methods' => ['PUT', 'PATCH'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/achats/{id}',
        'controller' => 'Src\\Controller\\AchatController',
        'action' => 'delete',
        'methods' => ['DELETE'],
        'middlewares' => []
    ],

    // Routes Client
    [
        'path' => '/api/v1/clients',
        'controller' => 'Src\\Controller\\ClientController',
        'action' => 'index',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/clients',
        'controller' => 'Src\\Controller\\ClientController',
        'action' => 'create',
        'methods' => ['POST'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/clients/{id}',
        'controller' => 'Src\\Controller\\ClientController',
        'action' => 'show',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/clients/{id}',
        'controller' => 'Src\\Controller\\ClientController',
        'action' => 'update',
        'methods' => ['PUT', 'PATCH'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/clients/{id}',
        'controller' => 'Src\\Controller\\ClientController',
        'action' => 'delete',
        'methods' => ['DELETE'],
        'middlewares' => []
    ],

    // Routes Compteur
    [
        'path' => '/api/v1/compteurs',
        'controller' => 'Src\\Controller\\CompteurController',
        'action' => 'index',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/compteurs',
        'controller' => 'Src\\Controller\\CompteurController',
        'action' => 'create',
        'methods' => ['POST'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/compteurs/{id}',
        'controller' => 'Src\\Controller\\CompteurController',
        'action' => 'show',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/compteurs/{id}',
        'controller' => 'Src\\Controller\\CompteurController',
        'action' => 'update',
        'methods' => ['PUT', 'PATCH'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/compteurs/{id}',
        'controller' => 'Src\\Controller\\CompteurController',
        'action' => 'delete',
        'methods' => ['DELETE'],
        'middlewares' => []
    ],

    // Routes Tranche
    [
        'path' => '/api/v1/tranches',
        'controller' => 'Src\\Controller\\TrancheController',
        'action' => 'index',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/tranches',
        'controller' => 'Src\\Controller\\TrancheController',
        'action' => 'create',
        'methods' => ['POST'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/tranches/{id}',
        'controller' => 'Src\\Controller\\TrancheController',
        'action' => 'show',
        'methods' => ['GET'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/tranches/{id}',
        'controller' => 'Src\\Controller\\TrancheController',
        'action' => 'update',
        'methods' => ['PUT', 'PATCH'],
        'middlewares' => []
    ],
    [
        'path' => '/api/v1/tranches/{id}',
        'controller' => 'Src\\Controller\\TrancheController',
        'action' => 'delete',
        'methods' => ['DELETE'],
        'middlewares' => []
    ],

    // Route par défaut
    [
        'path' => '/',
        'controller' => 'Src\\Controller\\HomeController',
        'action' => 'index',
        'methods' => ['GET'],
        'middlewares' => []
    ]
];

// Configuration des middlewares
$middlewares = [
    // Ajoutez ici vos middlewares si nécessaire
    // 'auth' => 'App\\Middleware\\AuthMiddleware',
    // 'cors' => 'App\\Middleware\\CorsMiddleware',
];
//         'methods' => ['GET']
//     ],
//     [
//         'path' => '/api/v1/citoyens',
//         'controller' => CitoyenController::class,
//         'action' => 'create',
//         'methods' => ['POST']
//     ],
//     [
//         'path' => '/api/v1/citoyens/{cni}',
//         'controller' => CitoyenController::class,
//         'action' => 'show',
//         'methods' => ['GET']
//     ],
//     [
//         'path' => '/api/v1/citoyens/{cni}',
//         'controller' => CitoyenController::class,
//         'action' => 'update',
//         'methods' => ['PUT', 'PATCH']
//     ],
//     [
//         'path' => '/api/v1/citoyens/{cni}',
//         'controller' => CitoyenController::class,
//         'action' => 'delete',
//         'methods' => ['DELETE']
//     ],
//     [
//         'path' => '/api/v1/citoyens/search',
//         'controller' => CitoyenController::class,
//         'action' => 'search',
//         'methods' => ['GET']
//     ]
// ];

// pour router les requêtes
// foreach ($routes as $route) {
//     $path = $route['path'];
//     $pattern = preg_replace('#\{[^/]+\}#', '([^/]+)', $path);
//     $pattern = '#^' . $pattern . '$#';

//     if (preg_match($pattern, $uri, $matches) && in_array($method, $route['methods'])) {
//         // ...
//     }
// }
