<?php

namespace Superlatif\InfomaniakVod\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\Client\Response all($params = [])
 * @method static \Illuminate\Http\Client\Response get($media, $params = [])
 * @method static \Illuminate\Http\Client\Response chapters($media, $params = [])
 * @method static \Illuminate\Http\Client\Response chapter($media, $chapter, $params = [])
 * @method static \Illuminate\Http\Client\Response delete($media)
 * @method static \Illuminate\Http\Client\Response update($media, $params)
 * @method static \Illuminate\Http\Client\Response uploadFromFile(array $params)
 * @method static \Illuminate\Http\Client\Response uploadFromURL(array $params)
 *
 * @see \Superlatif\InfomaniakVod\Controllers\MediaController
 */
class Media extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'infomaniak.media';
    }
}
