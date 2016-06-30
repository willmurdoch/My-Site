<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/wamp/www/portfolio/user/config/site.yaml',
    'modified' => 1467131702,
    'data' => [
        'title' => 'Portfolio',
        'author' => [
            'name' => 'Will Murdoch',
            'email' => 'willmdev@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Lorem ipsum'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/grid'
        ],
        'grid' => [
            'route' => '/grid'
        ]
    ]
];
