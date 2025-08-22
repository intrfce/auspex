<?php

namespace Intrfce\Auspex\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Intrfce\Auspex\Auspex
 */
class Auspex extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Intrfce\Auspex\Auspex::class;
    }
}
