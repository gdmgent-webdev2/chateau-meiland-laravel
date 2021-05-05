<?php

return [
    'header' => [
        'home' => 'Home',
        'clients' => 'Klanten',
        'reservations' => 'Reservaties',
        'rooms' => 'Kamers',
    ],
    'rooms' => [
        'title' => 'Kamers',
        'add' => 'Kamer toevoegen',
        'fields' => [
            'name' => 'Naam',
            'number' => 'Nummer',
            'action' => 'Actie',
        ],
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
        'title' => 'Toekomstige reservaties',
        'fields' => [
            'room' => 'Kamer',
            'client' => 'Naam',
            'dates' => 'Datums',
            'action' => 'Actie',
            'end_date' => 'Eind datum',
            'start_date' => 'Start datum',
        ],
        'create' => [
            'title' => 'Nieuwe reservatie',
        ]
    ]
];
