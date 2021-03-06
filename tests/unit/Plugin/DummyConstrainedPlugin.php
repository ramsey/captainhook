<?php

namespace CaptainHook\App\Plugin;

use CaptainHook\App\Hook\Constrained;
use CaptainHook\App\Hook\Restriction;

class DummyConstrainedPlugin extends DummyPlugin implements Constrained
{
    /**
     * @var Restriction|null
     */
    public static $restriction;

    public static function getRestriction(): Restriction
    {
        return self::$restriction;
    }
}
