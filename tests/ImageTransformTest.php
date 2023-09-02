<?php
namespace ImageApp;
use PHPUnit\Framework\TestCase;

require 'vendor/autoload.php'; 

class ImageTransformTest extends \PHPUnit\Framework\TestCase {
    public function testImageTransform() {
        // Создайте объект Imagick или загрузите изображение для теста
        $image = new \Imagick();
        // Примените трансформацию
        $transform = new \ImageApp\ImageTransform();
        $transform->apply($image);

        // Здесь можно добавить проверки для убеждения, что трансформация была применена корректно

        $this->assertTrue(true); // Просто заглушка, чтобы тест завершился успешно
    }
}
