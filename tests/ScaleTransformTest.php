<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;

class ScaleTransformTest extends TestCase {
    public function testApply() {
        $image = new \Imagick();

        $image->readImage('/root/image/logo.png');

        $originalWidth = $image->getImageWidth();
        $originalHeight = $image->getImageHeight();

        $transform = new ScaleTransform(0.5);
        $transform->apply($image);

        $this->assertTrue(true);


        $this->assertEquals($originalWidth * 0.5, $image->getImageWidth());
        $this->assertEquals($originalHeight * 0.5, $image->getImageHeight());
    }
}