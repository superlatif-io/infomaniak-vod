<?php

namespace Superlatif\InfomaniakVod\Controllers;

use Illuminate\Http\Client\Response;
use Superlatif\InfomaniakVod\Services\Infomaniak;

class PlaylistController
{
    public function all($params = []): Response
    {
        return Infomaniak::get("/playlist", Infomaniak::parameters($params));
    }

    public function get($playlist, $params = []): Response
    {
        return Infomaniak::get("/playlist/{$playlist}", Infomaniak::parameters($params));
    }
}
