<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'token' => env('INFOMANIAK_TOKEN', ''),
    'api_base_uri' => env('INFOMANIAK_API_BASE_URI', 'https://api.infomaniak.com/1/vod/channel/'),
    'channel' => env('INFOMANIAK_CHANNEL', ''),
    'folder' => env('INFOMANIAK_FOLDER', ''),
];
