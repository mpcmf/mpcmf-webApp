<?php
/**
 * @author greevex
 * @date   : 11/16/12 5:11 PM
 */

use mpcmf\system\configuration\config;

config::setConfig(__FILE__, [
    'localhost' => [
        'host' => '127.0.0.1',
        'port' => '5672',
        'login' => 'guest',
        'password' => 'guest'
    ],
]);