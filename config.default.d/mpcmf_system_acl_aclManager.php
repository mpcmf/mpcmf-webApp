<?php
/**
 * @author greevex
 * @date   : 11/16/12 5:11 PM
 */

\mpcmf\system\configuration\config::setConfig(__FILE__, [
    'cookie' => [
        'name' => 'mpcmf:user',
        'expire' => '+1 day'
    ],
    'acl_class' => \mpcmf\apps\mpcmfWeb\libraries\acl\defaultAclManager::class //set to your class name
]);