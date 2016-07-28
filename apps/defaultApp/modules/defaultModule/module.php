<?php

namespace mpcmf\modules\defaultModule;

use mpcmf\modules\moduleBase\moduleBase;
use mpcmf\system\pattern\singleton;

/**
 * Default module
 *
 * @author Gregory Ostrovsky <greevex@gmail.com>
 * @date 2015-08-12
 */


class module
    extends moduleBase
{
    use singleton;

    protected function bindAclGroups()
    {

    }

    public function getName()
    {
        return 'Default Module';
    }

}