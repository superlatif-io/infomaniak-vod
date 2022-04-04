<?php

namespace Superlatif\InfomaniakVod\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\Client\Response all($params = [])
 * @method static \Illuminate\Http\Client\Response get($playlist, $params = [])
 *
 * @see \Superlatif\InfomaniakVod\Controllers\PlaylistController
 */
class Playlist extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'infomaniak.playlist';
    }
}
