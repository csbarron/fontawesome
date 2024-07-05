<?php

namespace Laraveldesign\Fontawesome;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laraveldesign\Fontawesome\Skeleton\SkeletonClass
 */
class FontawesomeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fontawesome';
    }
}
