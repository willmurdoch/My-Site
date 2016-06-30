<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home2/willmurd/public_html/portfolio/user/config/plugins/email.yaml',
    'modified' => 1467236088,
    'data' => [
        'enabled' => true,
        'from' => 'contact@willmurdoch.com',
        'from_name' => 'Will',
        'to' => 'willmdev@gmail.com',
        'to_name' => 'Portfolio Contact',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
