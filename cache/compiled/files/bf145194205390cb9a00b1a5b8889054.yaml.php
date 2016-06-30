<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/wamp/www/My-Site/user/themes/willm/blueprints/job.yaml',
    'modified' => 1467302670,
    'data' => [
        'title' => 'Job',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'details' => [
                            'type' => 'tab',
                            'title' => 'Details',
                            'fields' => [
                                'header.url' => [
                                    'type' => 'text',
                                    'label' => 'Destination'
                                ],
                                'header.desktop' => [
                                    'type' => 'toggle',
                                    'label' => 'Desktop',
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.desktopImage' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Desktop Image'
                                ],
                                'header.tablet' => [
                                    'type' => 'toggle',
                                    'label' => 'Tablet',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.tabletImage' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Tablet Image'
                                ],
                                'header.mobile' => [
                                    'type' => 'toggle',
                                    'label' => 'Mobile',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.mobileImage' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Mobile Image'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
