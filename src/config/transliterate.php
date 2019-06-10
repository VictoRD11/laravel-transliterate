<?php

use VictoRD11\Transliterate\Map;

/* @noinspection PhpVoidFunctionResultUsedInspection */
return [
    /*
    |--------------------------------------------------------------------------
    | Default transliteration map
    |--------------------------------------------------------------------------
    |
    | This option specifies the transliteration map that will be used by default
    | if no another one will be provided during Transliteration::make() call.
    |
    */
    'default_map' => Map::DEFAULT,

    /*
    |--------------------------------------------------------------------------
    | Set default language
    |--------------------------------------------------------------------------
    | The language of transliterating text.
    | Will be used unless no explicitly provided.
    |
    */
    'default_lang' => Map::LANG_RU,

    /*
    |--------------------------------------------------------------------------
    | Custom transliteration maps
    |--------------------------------------------------------------------------
    |
    | You can create your custom transliteration maps or even override default.
    | Each map must be defined as "lang_code" => ["map_name" => "/absolute/path/to/map.php"].
    |
    */
    'custom_maps' => [
//        'uk' => [
//            'common' => dirname(__DIR__) . '/app/path/to/maps/uk/common.php',
//        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Transformer callbacks
    |--------------------------------------------------------------------------
    |
    | It is possible to register your own transformer functions that will be
    | called on transliterated string. This is useful if you need to perform
    | the same actions on a result string every time.
    |
    | Since closures can't be serialized during "artisan config:cache" call,
    | use "\VictoRD11\Transliterate\Closure::register"
    |
    */
    'transformers' => [
//        \VictoRD11\Transliterate\Transformer::register(\Closure::fromCallable('trim'))
    ],
];
