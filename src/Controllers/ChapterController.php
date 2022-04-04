<?php

namespace Superlatif\InfomaniakVod\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;
use Superlatif\InfomaniakVod\Services\Infomaniak;

class ChapterController
{
    public function all($media, $params = []): Response
    {
        return Infomaniak::get("/media/{$media}/chapter", Infomaniak::parameters($params));
    }

    public function get($media, $chapter, $params = []): Response
    {
        return Infomaniak::get("/media/{$media}/chapter/{$chapter}", Infomaniak::parameters($params));
    }

    public function create($media, $params): Response
    {
        Validator::make($params, [
            'timestamp' => 'required|integer'
        ]);

        return Infomaniak::post("/media/{$media}/chapter", $params);
    }

    public function update($media, $chapter, $params): Response
    {
        Validator::make($params, [
            'timestamp' => 'required|integer'
        ]);

        return Infomaniak::put("/media/{$media}/chapter/{$chapter}", $params);
    }

    public function delete($media, $chapter): Response
    {
        return Infomaniak::delete("/media/{$media}/chapter/{$chapter}");
    }
}
