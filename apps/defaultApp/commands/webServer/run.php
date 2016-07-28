<?php

namespace mpcmf\apps\defaultApp\commands\webServer;

use mpcmf\apps\defaultApp\defaultApp;
use mpcmf\apps\mpcmfWeb\commands\server\run as abstractRun;
use mpcmf\system\application\webApplicationBase;

/**
 * Default Web Server
 *
 * @author Gregory Ostrovsky <greevex@gmail.com>
 */
class run
    extends abstractRun
{

    /**
     * @return webApplicationBase
     */
    protected function getBaseApplication()
    {
        return new defaultApp();
    }
}
