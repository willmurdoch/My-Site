<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/wamp/www/portfolio/user/themes/willm/blueprints/modular.yaml',
    'modified' => 1467229055,
    'data' => [
        'title' => 'Modular',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'child_type' => 'module',
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.child_type' => [
                                            'default' => 'module'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'modularSettings' => [
                            'type' => 'tab',
                            'title' => 'Modular',
                            'fields' => [
                                'header.subhead' => [
                                    'type' => 'text',
                                    'label' => 'Subheader'
                                ],
                                'header.content.items' => [
                                    'type' => 'textarea',
                                    'yaml' => true,
                                    'label' => 'Items',
                                    'default' => '@self.children'
                                ],
                                'header.content.limit' => [
                                    'type' => 'text',
                                    'label' => 'Max Module Count',
                                    'default' => 10,
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'Order By',
                                    'default' => 'Children',
                                    'options' => [
                                        'folder' => 'Folder',
                                        'title' => 'Title',
                                        'date' => 'Date',
                                        'children' => 'Children',
                                        'default' => 'Default'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'Order',
                                    'default' => 'asc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ]
                                ],
                                'header.content.pagination' => [
                                    'type' => 'toggle',
                                    'label' => 'Pagination',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.content.url_taxonomy_filters' => [
                                    'type' => 'toggle',
                                    'label' => 'URL Taxonomy Filters',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
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
