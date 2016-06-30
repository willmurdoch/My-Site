<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/wamp/www/portfolio/user/themes/willm/blueprints/grid.yaml',
    'modified' => 1467230322,
    'data' => [
        'title' => 'Grid',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'tiles' => [
                            'type' => 'tab',
                            'title' => 'Tiles',
                            'fields' => [
                                'tileProps' => [
                                    'type' => 'section',
                                    'title' => 'Repeating Tiles',
                                    'underline' => true
                                ],
                                'header.tiles' => [
                                    'name' => 'tiles',
                                    'type' => 'list',
                                    'label' => 'Tile Content',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'title',
                                            'label' => 'Title'
                                        ],
                                        '.blurb' => [
                                            'type' => 'text',
                                            'label' => 'Blurb'
                                        ],
                                        '.image' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Tile Image'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Destination'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
