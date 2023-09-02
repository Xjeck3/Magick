<?php
namespace ImageApp; 
class NoiseFilterTransform extends ImageTransform {
    public function apply(\Imagick $image) {
        $image->addNoiseImage(\Imagick::NOISE_IMPULSE, \Imagick::CHANNEL_ALL);
    }
}
