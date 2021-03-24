<?php
// To start with, lets display any errors.
// - this will reveal if you entered wrong paths
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Once you got it working, make sure that PHP warnings are not send to the output
// - this will corrupt the image
// For example, you can do it by commenting out the lines below:
// error_reporting(0);
// ini_set("display_errors", 0);

use WebPConvert\WebPConvert;

require 'build/latest/webp-on-demand-1.inc';

function webpconvert_autoloader($class) {
    if (strpos($class, 'WebPConvert\\') === 0) {
        require_once __DIR__ . '/build/latest/webp-on-demand-2.inc';
    }
}
spl_autoload_register('webpconvert_autoloader', true, true);

$source = $_GET['source'];            // Absolute file path to source file. Comes from the .htaccess
$destination = $source . '.webp';     // Store the converted images besides the original images (other options are available!)

$options = [

    // UNCOMMENT NEXT LINE, WHEN YOU ARE UP AND RUNNING!
    'show-report' => true             // Show a conversion report instead of serving the converted image.

    // More options available!
    // https://github.com/rosell-dk/webp-convert/blob/master/docs/v2.0/converting/introduction-for-converting.md
    // https://github.com/rosell-dk/webp-convert/blob/master/docs/v2.0/serving/introduction-for-serving.md
];
WebPConvert::serveConverted($source, $destination, $options);