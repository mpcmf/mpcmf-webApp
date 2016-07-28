<?php
/**
 * @author greevex
 * @date   : 11/16/12 5:11 PM
 */

\mpcmf\system\configuration\config::setConfig(__FILE__, [
    'token_class' => \mpcmf\apps\mpcmfWeb\libraries\acl\defaultTokenManager::class
]);