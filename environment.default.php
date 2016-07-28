<?php

namespace mpcmf;

use mpcmf\system\configuration\environment;

environment::setCurrentEnvironment(environment::ENV_DEBUG);

define('MPCMF_DEBUG', true);