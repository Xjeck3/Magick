<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;

class FilterTransformTest extends TestCase {
    public function testApply() {
        $image = new \Imagick();

        $image->readImage('/root/image/logo.png');

        $transform = new FilterTransform();
        $transform->apply($image);

        $this->assertTrue(true);
    }
}