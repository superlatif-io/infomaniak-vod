<?php

namespace Superlatif\InfomaniakVod\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\Client\Response files($folder = null, $params = [])
 * @method static \Illuminate\Http\Client\Response all($params = [])
 * @method static \Illuminate\Http\Client\Response get($folder = null, $params = [])
 * @method static \Illuminate\Http\Client\Response playlists($folder = null, $params = [])
 *
 * @see \Superlatif\InfomaniakVod\Controllers\FolderController
 */
class Folder extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'infomaniak.folder';
    }
}
