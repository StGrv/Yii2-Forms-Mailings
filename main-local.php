<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=test',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            
            'transport' => [ // All these fields can be copied from the mail provider. Example mailtrap.io
                'class' => '-',
                'host' => '-',
                'username' => '-',
                'password' => '-',
                'port' => -,
                'encryption' => '-',
            ],   
        ],
    ],
];
