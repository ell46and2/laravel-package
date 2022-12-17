<?php

namespace EllAlderton\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EllAlderton\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \EllAlderton\Example\Example::class;
    }
}
