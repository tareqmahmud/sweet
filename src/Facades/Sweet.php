<?php

namespace Tareqmahmud\Sweet\Facades;

use Illuminate\Support\Facades\Facade;

class Sweet extends Facade
{
    /**
     * Create sweet facade
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sweet';
    }
}