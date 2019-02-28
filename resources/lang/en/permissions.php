<?php

return [
    'categories' => [
        'school'   => 'Schools',
        'blog'     => 'Curriculars',
        'form'     => 'Forms',
        'access'   => 'Access',
        'report'   => 'Reports',
        'seo'      => 'SEO',
    ],

    'access' => [
        'backend' => [
            'display_name' => 'Backoffice access',
            'description'  => 'Can access to administration pages.',
        ],
    ],

    'view' => [
        'form_settings' => [
            'display_name' => 'View form settings',
            'description'  => 'Can view form settings.',
        ],

        'form_submissions' => [
            'display_name' => 'View form submissions',
            'description'  => 'Can view form submissions.',
        ],

        'users' => [
            'display_name' => 'View users',
            'description'  => 'Can view users.',
        ],

        'roles' => [
            'display_name' => 'View roles',
            'description'  => 'Can view roles.',
        ],

        'reports' => [
            'display_name' => 'View reports',
            'description'  => 'Can view reports buttons.',
            'activity'     => [
                'display_name' => 'View user logs',
                'description'  => 'Can view user logs.',
            ],
            'system' => [
                'display_name' => 'View system logs',
                'description'  => 'Can view system logs.',
            ],
        ],

        'metas' => [
            'display_name' => 'View metas',
            'description'  => 'Can view metas.',
        ],

        'redirections' => [
            'display_name' => 'View redirections',
            'description'  => 'Can view redirections.',
        ],

        'schools' => [
            'display_name' => 'View all schools',
            'description'  => 'Can view all schools.',
        ],

        'posts' => [
            'display_name' => 'View all posts',
            'description'  => 'Can view all posts.',
        ],

        'own' => [
            'posts' => [
                'display_name' => 'View own posts',
                'description'  => 'Can view own posts.',
            ],
        ],
    ],

    'create' => [
        'form_settings' => [
            'display_name' => 'Create form settings',
            'description'  => 'Can create form settings.',
        ],

        'users' => [
            'display_name' => 'Create users',
            'description'  => 'Can create users.',
        ],

        'roles' => [
            'display_name' => 'Create roles',
            'description'  => 'Can create roles.',
        ],

        'metas' => [
            'display_name' => 'Create metas',
            'description'  => 'Can create metas.',
        ],

        'redirections' => [
            'display_name' => 'Create redirections',
            'description'  => 'Can create redirections.',
        ],

        'schools' => [
            'display_name' => 'Create schools',
            'description'  => 'Can create all schools.',
        ],

        'posts' => [
            'display_name' => 'Create posts',
            'description'  => 'Can create all posts.',
        ],
    ],

    'edit' => [
        'form_settings' => [
            'display_name' => 'Edit form settings',
            'description'  => 'Can edit form settings.',
        ],

        'users' => [
            'display_name' => 'Edit users',
            'description'  => 'Can edit users.',
        ],

        'roles' => [
            'display_name' => 'Edit roles',
            'description'  => 'Can edit roles.',
        ],

        'metas' => [
            'display_name' => 'Edit metas',
            'description'  => 'Can edit metas.',
        ],

        'redirections' => [
            'display_name' => 'Edit redirections',
            'description'  => 'Can edit redirections.',
        ],

        'schools' => [
            'display_name' => 'Edit all schools',
            'description'  => 'Can edit all schools.',
        ],

        'posts' => [
            'display_name' => 'Edit all posts',
            'description'  => 'Can edit all posts.',
        ],

        'own' => [
            'posts' => [
                'display_name' => 'Edit own posts',
                'description'  => 'Can edit own posts.',
            ],
        ],
    ],

    'delete' => [
        'form_settings' => [
            'display_name' => 'Delete form settings',
            'description'  => 'Can delete form settings.',
        ],

        'form_submissions' => [
            'display_name' => 'Delete form submissions',
            'description'  => 'Can delete form submissions.',
        ],

        'users' => [
            'display_name' => 'Delete users',
            'description'  => 'Can delete users.',
        ],

        'roles' => [
            'display_name' => 'Delete roles',
            'description'  => 'Can delete roles.',
        ],

        'metas' => [
            'display_name' => 'Delete metas',
            'description'  => 'Can delete metas.',
        ],

        'redirections' => [
            'display_name' => 'Delete redirections',
            'description'  => 'Can delete redirections.',
        ],

        'schools' => [
            'display_name' => 'Delete all schools',
            'description'  => 'Can delete all schools.',
        ],

        'posts' => [
            'display_name' => 'Delete all posts',
            'description'  => 'Can delete all posts.',
        ],

        'own' => [
            'posts' => [
                'display_name' => 'Delete own posts',
                'description'  => 'Can delete own posts.',
            ],
        ],
    ],

    'publish' => [
        'posts' => [
            'display_name' => 'Publish posts',
            'description'  => 'Can manage posts publication.',
        ],
    ],

    'impersonate' => [
        'display_name' => 'Impersonate user',
        'description'  => 'Can take ownership of others user identities. Useful for tests.',
    ],

    'search' => [
        'posts' => [
            'display_name' => 'Search all posts',
            'description'  => 'Can search all posts.',
        ]
    ],
];
