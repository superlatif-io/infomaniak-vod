<?php

namespace Superlatif\InfomaniakVod\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;
use Superlatif\InfomaniakVod\Services\Infomaniak;

class MediaController
{
    public function all($params = []): Response
    {
        return Infomaniak::get("/media", Infomaniak::parameters($params));
    }

    public function get($media, $params = []): Response
    {
        return Infomaniak::get("/media/{$media}", Infomaniak::parameters($params));
    }

    public function update($media, $params): Response
    {
        return Infomaniak::put("/media/{$media}", $params);
    }

    public function delete($media): Response
    {
        return Infomaniak::delete("/media/{$media}");
    }

    public function uploadFromFile(array $params): Response
    {
        Validator::make($params, [
            'folder' => 'required',
            'file' => 'required',
        ]);

        $file = $params['file']->getContent();

        return Infomaniak::attach("/upload", $file, $params);
    }

    public function uploadFromURL(array $params): Response
    {
        Validator::make($params, [
            'folder' => 'required',
        ]);

        return Infomaniak::post("/upload", $params);
    }
}
