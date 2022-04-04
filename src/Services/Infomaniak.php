<?php

namespace Superlatif\InfomaniakVod\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Infomaniak
{
    /**
     * @param $url
     * @param  array  $params
     * @return Response
     */
    public static function get($url, $params = []): Response
    {
        return Http::infomaniak()->get($url, $params);
    }

    /**
     * @param $url
     * @param  array  $params
     * @return Response
     */
    public static function post($url, $params = []): Response
    {
        return Http::infomaniak()->asForm()->post($url, $params);
    }

    /**
     * @param $url
     * @param  array  $params
     * @return Response
     */
    public static function put($url, $params = []): Response
    {
        return Http::infomaniak()->put($url, $params);
    }

    /**
     * @param $url
     * @param  array  $params
     * @return Response
     */
    public static function delete($url, $params = []): Response
    {
        return Http::infomaniak()->delete($url, $params);
    }

    public static function attach($url, $file, $params = []): Response
    {
        $name = $params['name'] ?? 'default name';
        return Http::infomaniak()->attach('file', $file, $name)->post($url, $params);
    }

    /*
     * Converts an array of parameters to the Infomaniak's standard
     */
    public static function parameters(array $params): array
    {
        $converted = [];
        if (count($params)) {
            $params = implode(',', $params);
            $converted['with'] = $params;
        }

        return $converted;
    }
}
