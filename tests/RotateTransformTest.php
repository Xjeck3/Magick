<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;


class RotateTransformTest extends TestCase {
    public function testApply() {
        $image = new \Imagick();
        // Load a test image
        $image->readImage('/root/image/logo.png');


        $transform = new RotateTransform(90); // Example angle
        $transform->apply($image);

        // Assert that applying the rotation doesn't cause errors
        $this->assertTrue(true);

        // You can also compare image hashes or dimensions to check for changes (optional)
    }
}
