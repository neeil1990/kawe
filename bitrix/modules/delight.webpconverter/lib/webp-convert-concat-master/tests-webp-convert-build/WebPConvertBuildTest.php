<?php

namespace WebPConvert\Tests;

use WebPConvert\WebPConvert;
use WebPConvert\Convert\Exceptions\ConversionFailed\ConverterNotOperationalException;
use WebPConvert\Convert\Exceptions\ConversionFailed\InvalidInput\TargetNotFoundException;
use WebPConvert\Convert\Exceptions\ConversionFailed\FileSystemProblems\CreateDestinationFolderException;

use PHPUnit\Framework\TestCase;

/**
 *  Test the complete build (webp-convert.inc)
 */
class WebPConvertBuildTest extends TestCase
{

    public static function getImageFolder()
    {
        return realpath(__DIR__ . '/..') . '/vendor/rosell-dk/webp-convert/tests/images';
    }

    public static function getImagePath($image)
    {
        return self::getImageFolder() . '/' . $image;
    }

    public function testWebPConvertBuildNotCompletelyBroken()
    {
        require __DIR__ . '/../build/latest/webp-convert.inc';

        $source = self::getImagePath('png-without-extension');
        $this->assertTrue(file_exists($source), 'image not found at:' . $source);

        ob_start();
        WebPConvert::serveConverted(
            $source,
            $source . '.webp',
            [
                'reconvert' => true,
                //'converters' => ['imagick'],
                'converters' => [
                    'imagick',
                    'gd',
                    'cwebp',
                    //'vips',
                    '\\WebPConvert\\Tests\\Convert\\TestConverters\\SuccessGuaranteedConverter'
                ],
            ]
        );
        ob_end_clean();
        $this->addToAssertionCount(1);

    }
}
//require_once(__DIR__ . '/../vendtests/Serve/mock-header.inc');
