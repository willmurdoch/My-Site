<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/wamp/www/My-Site/user/themes/willm/blueprints.yaml',
    'modified' => 1467295582,
    'data' => [
        'name' => 'WillM',
        'version' => '0.0.1',
        'description' => 'Theme for portfolio website',
        'readme' => 'http://willmurdoch.com',
        'icon' => 'smile-o',
        'author' => [
            'name' => 'Will Murdoch',
            'email' => 'willmdev@gmail.com',
            'url' => 'http://willmurdoch.com'
        ],
        'homepage' => 'http://willmurdoch.com',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Default lang',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];
