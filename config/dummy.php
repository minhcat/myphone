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
            (object) [
                'id'        => 1,
                'name'      => 'apple',
                'sku'       => 'AP',
                'products'  => [
                    (object) [
                        'name'      => 'iphone',
                        'sku'       => 'I-',
                        'price'     => [10, 20],
                        'versions'  => [
                            (object) [
                                'sku'   => 10,
                                'name'  => '10',
                            ],
                            (object) [
                                'sku'   => 12,
                                'name'  => '12',
                            ],
                            (object) [
                                'sku'   => 13,
                                'name'  => '13',
                            ]
                        ],
                    ],
                    (object) [
                        'name'      => 'ipad',
                        'sku'       => 'P-',
                        'price'     => [15, 30],
                        'versions'  => [
                            (object) [
                                'sku'   => 20,
                                'name'  => 'Air',
                            ],
                            (object) [
                                'sku'   => 21,
                                'name'  => 'Pro',
                            ],
                            (object) [
                                'sku'   => 22,
                                'name'  => 'Gen',
                            ]
                        ],
                    ],
                    (object) [
                        'name'      => 'macbook',
                        'sku'       => 'M-',
                        'price'     => [20, 40],
                        'versions'  => [
                            (object) [
                                'sku'   => 30,
                                'name'  => '12',
                            ],
                            (object) [
                                'sku'   => 32,
                                'name'  => 'Air',
                            ],
                            (object) [
                                'sku'   => 34,
                                'name'  => 'Pro',
                            ]
                        ],
                    ],
                ]
            ],
            (object) [
                'id'        => 2,
                'name'      => 'samsung',
                'sku'       => 'SS',
                'products'  => [
                    (object) [
                        'name'      => 'galaxy',
                        'sku'       => 'G-',
                        'price'     => [10, 20],
                        'versions'  => [
                            (object) [
                                'sku'   => 10,
                                'name'  => 'A2',
                            ],
                            (object) [
                                'sku'   => 12,
                                'name'  => 'A3',
                            ],
                            (object) [
                                'sku'   => 14,
                                'name'  => 'S3',
                            ],
                            (object) [
                                'sku'   => 16,
                                'name'  => 'Z1',
                            ]
                        ],
                    ],
                    (object) [
                        'name'      => 'galaxy tab',
                        'sku'       => 'T-',
                        'price'     => [15, 30],
                        'versions'  => [
                            (object) [
                                'sku'   => 20,
                                'name'  => 'A7',
                            ],
                            (object) [
                                'sku'   => 22,
                                'name'  => 'A8',
                            ],
                            (object) [
                                'sku'   => 24,
                                'name'  => 'S3',
                            ],
                            (object) [
                                'sku'   => 26,
                                'name'  => 'S7',
                            ]
                        ],
                    ],
                ],
            ],
            (object) [
                'id'        => 3,
                'name'      => 'xiaomi',
                'sku'       => 'XM',
                'products'  => [
                    (object) [
                        'name'      => 'xiaomi redmi',
                        'sku'       => 'R-',
                        'price'     => [15, 25],
                        'versions'  => [
                            (object) [
                                'sku'   => 10,
                                'name'  => '10',
                            ],
                            (object) [
                                'sku'   => 11,
                                'name'  => '11',
                            ],
                            (object) [
                                'sku'   => 12,
                                'name'  => '12',
                            ]
                        ],
                    ],
                    (object) [
                        'name'      => 'xiaomi',
                        'sku'       => 'X-',
                        'price'     => [5, 15],
                        'versions'  => [
                            (object) [
                                'sku'   => 21,
                                'name'  => '11',
                            ],
                            (object) [
                                'sku'   => 22,
                                'name'  => '12',
                            ]
                        ],
                    ],
                ],
            ],
            (object) [
                'id'        => 4,
                'name'      => 'oppo',
                'sku'       => 'OP',
                'products'  => [
                    (object) [
                        'name'      => 'oppo',
                        'sku'       => 'S-',
                        'price'     => [15, 25],
                        'versions'  => [
                            (object) [
                                'sku'   => 10,
                                'name'  => 'a55',
                            ],
                            (object) [
                                'sku'   => 12,
                                'name'  => 'a56',
                            ],
                            (object) [
                                'sku'   => 12,
                                'name'  => 'a77',
                            ],
                            (object) [
                                'sku'   => 15,
                                'name'  => 'a95',
                            ]
                        ],
                    ],
                    (object) [
                        'name'      => 'oppo reno',
                        'sku'       => 'R-',
                        'price'     => [5, 15],
                        'versions'  => [
                            (object) [
                                'sku'   => 16,
                                'name'  => '6',
                            ],
                            (object) [
                                'sku'   => 17,
                                'name'  => '7',
                            ],
                            (object) [
                                'sku'   => 18,
                                'name'  => '8',
                            ]
                        ],
                    ],
                    (object) [
                        'name'      => 'oppo find',
                        'sku'       => 'F-',
                        'price'     => [5, 15],
                        'versions'  => [
                            (object) [
                                'sku'   => 11,
                                'name'  => 'X3',
                            ],
                            (object) [
                                'sku'   => 12,
                                'name'  => 'X5',
                            ]
                        ],
                    ],
                ],
            ],
        ]
    ],
];