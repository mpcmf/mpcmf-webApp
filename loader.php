<?php

namespace mpcmf;

use mpcmf\system\io\log;

!defined('APP_ROOT') && define('APP_ROOT', __DIR__);
!defined('APP_NAME') && define('APP_NAME', 'mpcmf');

$GLOBALS['MPCMF_START_TIME'] = microtime(true);

require_once APP_ROOT . '/vendor/autoload.php';
require_once APP_ROOT . '/environment.php';

MPCMF_DEBUG && log::factory()->addDebug('Base project directory: ' . APP_ROOT);
