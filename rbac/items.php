<?php

return [
    'dono' => [
        'type' => 1,
        'children' => [
            'post-index',
            'post-create',
            'post-edit',
            'post-delete',
        ],
    ],
    'gerente' => [
        'type' => 1,
        'children' => [
            'post-index',
            'post-edit',
            'post-create',
        ],
    ],
    'vendedor' => [
        'type' => 1,
        'children' => [
            'post-index',
        ],
    ],
    'post-index' => [
        'type' => 2,
    ],
    'post-create' => [
        'type' => 2,
    ],
    'post-edit' => [
        'type' => 2,
    ],
    'post-delete' => [
        'type' => 2,
    ],
];
