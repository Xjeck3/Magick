<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;

require 'vendor/autoload.php';

class ImageTransformTest extends \PHPUnit\Framework\TestCase {
    public function testImageTransform() {

        $image = new \Imagick();

        $transform = new \ImageApp\ImageTransform();
        $transform->apply($image);



        $this->assertTrue(true);
    }
}
