<?php

namespace Imsidz\Delhivery;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Imsidz\Delhivery\DelhiverApi
 */
class Delhivery extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'delhivery';
    }
}
