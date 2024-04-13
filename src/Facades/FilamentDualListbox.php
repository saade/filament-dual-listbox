<?php

namespace Saade\FilamentDualListbox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Saade\FilamentDualListbox\FilamentDualListbox
 */
class FilamentDualListbox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Saade\FilamentDualListbox\FilamentDualListbox::class;
    }
}
