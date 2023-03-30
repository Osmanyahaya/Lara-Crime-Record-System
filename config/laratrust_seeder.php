<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'case_tables' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'investigations' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'nco' => [
            'case_tables' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'cid' => [
            'investigations' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
