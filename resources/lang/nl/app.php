<?php

return [
    'header' => [
        'home' => 'Home',
        'clients' => 'Klanten',
        'reservations' => 'Reservaties',
    ],
    'clients' => [
        'title' => 'Klanten',
        'add' => 'Voeg klant toe',
        'fields' => [
            'name' => 'Naam',
            'email' => 'Email',
            'postal_code' => 'Postcode',
            'county' => 'Provincie',
            'action' => 'Actie',
        ],
        'titles' => [
            'mr' => 'Mr.',
            'ms' => 'Mw.',
            'mrs' => 'Juf.',
            'dr' => 'Dr.',
        ]
    ],
    'reservations' => [
        'title' => 'Reservaties',
        'fields' => [
            'room' => 'Kamer',
            'client' => 'Naam',
            'dates' => 'Datums',
            'action' => 'Actie',
        ],
        'create' => [
            'title' => 'Nieuwe reservatie',
        ]
    ]
];
