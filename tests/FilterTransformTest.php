<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;

class FilterTransformTest extends TestCase {
    public function testApply() {
        $image = new \Imagick();
        // Load a test image
        $image->readImage('/root/image/logo.png');

        $transform = new FilterTransform();
        $transform->apply($image);

        // Assert that applying the filter transformation doesn't cause errors
        $this->assertTrue(true);
    }
}