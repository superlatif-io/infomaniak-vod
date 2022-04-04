<?php

namespace Superlatif\InfomaniakVod\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Http\Client\Response all($media, $params = [])
 * @method static \Illuminate\Http\Client\Response get($media, $chapter, $params = [])
 * @method static \Illuminate\Http\Client\Response create($media, $params)
 * @method static \Illuminate\Http\Client\Response update($media, $params)
 * @method static \Illuminate\Http\Client\Response delete($media, $chapter)
 *
 * @see \Superlatif\InfomaniakVod\Controllers\MediaController
 */
class Chapter extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'infomaniak.chapter';
    }
}
