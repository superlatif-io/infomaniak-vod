<?php

namespace Superlatif\InfomaniakVod\Controllers;

use Illuminate\Http\Client\Response;
use Superlatif\InfomaniakVod\Services\Infomaniak;

class FolderController
{
    public function files($folder = null, $params = []): Response
    {
        $folder = $folder ?: config('infomaniak-vod.folder');
        return Infomaniak::get("/browse/{$folder}", Infomaniak::parameters($params));
    }

    public function all($params = []): Response
    {
        return Infomaniak::get("/folder", Infomaniak::parameters($params));
    }

    public function get($folder = null, $params = []): Response
    {
        $folder = $folder ?: config('infomaniak-vod.folder');
        return Infomaniak::get("/folder/{$folder}", Infomaniak::parameters($params));
    }

    public function playlists($folder = null, $params = []): Response
    {
        $folder = $folder ?: config('infomaniak-vod.folder');
        return Infomaniak::get("/folder/{$folder}/playlist", Infomaniak::parameters($params));
    }

}
