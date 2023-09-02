<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;

class ScaleTransformTest extends TestCase {
    public function testApply() {
        $image = new \Imagick();
        // Load a test image
        $image->readImage('/root/image/logo.png');

        // Get the original dimensions
        $originalWidth = $image->getImageWidth();
        $originalHeight = $image->getImageHeight();

        $transform = new ScaleTransform(0.5); // Example scale factor
        $transform->apply($image);

        // Assert that applying the scale transformation doesn't cause errors
        $this->assertTrue(true);

        // Check the dimensions of the scaled image
        $this->assertEquals($originalWidth * 0.5, $image->getImageWidth());
        $this->assertEquals($originalHeight * 0.5, $image->getImageHeight());
    }
}