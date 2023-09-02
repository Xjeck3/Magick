<?php
namespace ImageApp; 

class FilterTransform extends ImageTransform {
    public function apply(\Imagick $image) {
        // Create a matrix for the filter
        $matrix = [
            [-1, -1, -1],
            [-1, 8, -1],
            [-1, -1, -1]
        ];

        // Create an ImagickKernel with the matrix
        $kernel = \ImagickKernel::fromMatrix($matrix);

        // Apply the filter using convolveImage
        $image->convolveImage($kernel->getMatrix());
    }
}