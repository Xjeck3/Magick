<?php
namespace ImageApp; 
class RotateTransform extends ImageTransform {
    private $angle;

    public function __construct($angle = 45) {
        $this->angle = $angle;
    }

    public function apply(\Imagick $image) {
        $image->rotateImage(new \ImagickPixel(), $this->angle);
    }
}
