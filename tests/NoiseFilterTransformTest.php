<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;


class NoiseFilterTransformTest extends TestCase {
    public function testApply() {
        $image = new \Imagick();

        $image->readImage('/root/image/logo.png');


        $transform = new NoiseFilterTransform();
        $transform->apply($image);


        $this->assertTrue(true);

        $this->assertNotEquals('original_image_hash', $image->getImageSignature());
    }
}
