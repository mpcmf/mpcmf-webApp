<?php
/**
 * mongoInstance configuration
 *
 * @author Gregory Ostrovsky <greevex@gmail.com>
 */

use mpcmf\system\configuration\config;
use mpcmf\system\configuration\environment;

config::setConfig(__FILE__, [
    'default' => [
        'uri' => 'mongodb://localhost',
        'options' => [
            'connect' => true,
        ]
    ],
    'localhost' => [
        'uri' => 'mongodb://localhost',
        'options' => [
            'connect' => true,
        ]
    ]
]);

config::setConfig(__FILE__, [
    'localhost' => [
        'uri' => 'mongodb://localhost',
        'options' => [
            'connect' => true,
        ]
    ]
], environment::ENV_PRODUCTION);