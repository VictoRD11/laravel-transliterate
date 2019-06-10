<?php

namespace VictoRD11\Transliterate\Tests;

use VictoRD11\Transliterate\Transformer;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $config = require dirname(__DIR__).'/src/config/transliterate.php';
        $app['config']->set('transliterate', $config);

        Transformer::override([
            \Closure::fromCallable('trim'),
        ]);
    }
}
