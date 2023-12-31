<?php
namespace ImageApp;

require 'vendor/autoload.php';

if (count($argv) < 4) {
    echo "Usage: php index.php source_image_path destination_image_path transformation1 transformation2 ...\n";
    exit(1);
}

$sourceImagePath = $argv[1];
$destinationImagePath = $argv[2];
$transformations = array_slice($argv, 3);

$image = new \Imagick();
$image->readImage($sourceImagePath);

$transformObjects = [];
foreach ($transformations as $transformation) {
    $transformClass = 'ImageApp\\' . ucfirst($transformation) . 'Transform';
    if (class_exists($transformClass)) {
        $transformObjects[] = new $transformClass();
    } else {
        echo "Transformation '$transformation' is not recognized.\n";
    }
}

foreach ($transformObjects as $transform) {
    $transform->apply($image);
}

$image->writeImage($destinationImagePath);

echo "Image with transformations applied saved as $destinationImagePath\n";
?>
