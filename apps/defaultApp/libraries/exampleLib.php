<?php

namespace mpcmf\apps\defaultApp\libraries;

/**
 * Class exampleLib
 *
 * @package mpcmf\apps\defaultApp\libraries
 * @author greevex
 * @date   : 7/26/16 11:07 AM
 */
class exampleLib
{
    private $something = '';

    public function __construct($somethingNew)
    {
        $this->something = $somethingNew;
    }

    public function writeSomethingToErrorLog()
    {
        error_log("Something: {$this->something}");
    }
}