<?php
namespace ImageApp; 
class ScaleTransform extends ImageTransform {
  private $scaleFactor;

  public function __construct($scaleFactor = 2.0) {
      $this->scaleFactor = $scaleFactor;
  }

  public function apply(\Imagick $image) {
      $image->scaleImage(
          $image->getImageWidth() * $this->scaleFactor,
          $image->getImageHeight() * $this->scaleFactor
      );
  }
}
