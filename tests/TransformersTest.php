<?php

namespace VictoRD11\Transliterate\Tests;

use VictoRD11\Transliterate\Transformer;
use VictoRD11\Transliterate\Transliterator;

class TransformersTest extends TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        Transformer::override([
            \Closure::fromCallable('trim'),
            \Closure::fromCallable('strtoupper'),
        ]);
    }

    public function testTransformers()
    {
        $initialString = '  Строка с пробелами  ';
        $transliterator = (new Transliterator())->from('ru')->useMap('common');

        $this->assertEquals(
            strtoupper(trim('  Stroka s probelami  ')),
            $transliterator->make($initialString)
        );
    }
}
