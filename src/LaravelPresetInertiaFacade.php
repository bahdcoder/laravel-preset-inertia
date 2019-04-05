<?php

namespace Bahdcoder\LaravelPresetInertia;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bahdcoder\LaravelPresetInertia\Skeleton\SkeletonClass
 */
class LaravelPresetInertiaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-preset-inertia';
    }
}
