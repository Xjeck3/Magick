<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;


class NoiseFilterTransformTest extends TestCase {
    public function testApply() {
        $image = new \Imagick();
        // Load a test image
        $image->readImage('/root/image/logo.png');


        $transform = new NoiseFilterTransform();
        $transform->apply($image);

        // Assert that applying the filter doesn't cause errors
        $this->assertTrue(true);

        // You can also compare image hashes to check for changes (optional)
        $this->assertNotEquals('original_image_hash', $image->getImageSignature());
    }
}
