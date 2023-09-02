<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;


class RotateTransformTest extends TestCase {
    public function testApply() {

        $image->readImage('/root/image/logo.png');


        $transform = new RotateTransform(90);
        $transform->apply($image);


        $this->assertTrue(true);

    }
}
