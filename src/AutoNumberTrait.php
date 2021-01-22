<?php

namespace Yudi1212\AutoNumber;

use Yudi1212\AutoNumber\Observers\AutoNumberObserver;

trait AutoNumberTrait
{
    /**
     * Boot the soft deleting trait for a model.
     *
     * @return void
     */
    public static function bootAutoNumberTrait()
    {
        static::observe(AutoNumberObserver::class);
    }

    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    abstract public function getAutoNumberOptions();
}
