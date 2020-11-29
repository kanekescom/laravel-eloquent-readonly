<?php

namespace Kanekescom\LaravelEloquentReadonly\Facades;

use Illuminate\Support\Facades\Facade;

class EloquentReadonly extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'eloquent-readonly';
    }
}
