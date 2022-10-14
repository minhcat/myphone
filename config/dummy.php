<?php

return [
    'users' => [
        (object) [
            'id'    => 1,
            'name'  => 'Minh Cat'
        ],
        (object) [
            'id'    => 2,
            'name'  => 'Long Geo'
        ],
        (object) [
            'id'    => 3,
            'name'  => 'K\'Gom'
        ],
        (object) [
            'id'    => 4,
            'name'  => 'Pham Doan'
        ],
    ],
    'brands' => [
        (object) [
            'id'    => 1,
            'name'  => 'Apple'
        ],
        (object) [
            'id'    => 2,
            'name'  => 'Samsung'
        ],
        (object) [
            'id'    => 3,
            'name'  => 'Xiaomi'
        ],
        (object) [
            'id'    => 4,
            'name'  => 'Oppo'
        ],
    ],
    'categories' => [
        (object) [
            'id'    => 1,
            'name'  => 'smartphone'
        ],
        (object) [
            'id'    => 2,
            'name'  => 'cell phone'
        ],
        (object) [
            'id'    => 3,
            'name'  => 'laptop'
        ],
        (object) [
            'id'    => 4,
            'name'  => 'tablet'
        ],
        (object) [
            'id'    => 5,
            'name'  => 'phone accessories'
        ],
    ],
    // data factory
    'factory' => [
        'product' => [
            [
                'id'        => 1,
                'name'      => 'apple',
                'products'  => [
                    [
                        'name'      => 'iphone',
                        'price'     => [10, 20],
                        'versions'  => ['10', '12', '13'],
                    ],
                    [
                        'name'      => 'ipad',
                        'price'     => [15, 30],
                        'versions'  => ['Air', 'Pro', 'Gen'],
                    ],
                    [
                        'name'      => 'macbook',
                        'price'     => [20, 40],
                        'versions'  => ['12', 'Air', 'Pro'],
                    ],
                ]
            ],
            [
                'id'        => 2,
                'name'      => 'samsung',
                'products'  => [
                    [
                        'name'      => 'galaxy',
                        'price'     => [10, 20],
                        'versions'  => ['A2', 'A3', 'S3', 'Z1'],
                    ],
                    [
                        'name'      => 'galaxy tab',
                        'price'     => [15, 30],
                        'versions'  => ['A7', 'A8', 'S8', 'S7'],
                    ],
                ],
            ],
            [
                'id'        => 3,
                'name'      => 'xiaomi',
                'products'  => [
                    [
                        'name'      => 'xiaomi redmi',
                        'price'     => [15, 25],
                        'versions'  => ['10', '11', '12'],
                    ],
                    [
                        'name'      => 'xiaomi',
                        'price'     => [5, 15],
                        'versions'  => ['11', '12'],
                    ],
                ],
            ],
            [
                'id'        => 4,
                'name'      => 'oppo',
                'products'  => [
                    [
                        'name'      => 'oppo',
                        'price'     => [15, 25],
                        'versions'  => ['a55', 'a56', 'a77', 'a95'],
                    ],
                    [
                        'name'      => 'oppo reno',
                        'price'     => [5, 15],
                        'versions'  => ['6', '7', '8'],
                    ],
                    [
                        'name'      => 'oppo find',
                        'price'     => [5, 15],
                        'versions'  => ['X3', 'X5'],
                    ],
                ],
            ],
        ]
    ],
];