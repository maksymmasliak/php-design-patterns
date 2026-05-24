<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Patterns\Factory\CameraFactory;

$hikvisionCamera = CameraFactory::createCamera('hikvision', '192.168.1.104');
$tapoCamera = CameraFactory::createCamera('tapo', 'eu_token_9f8d7e6c5b4a');

echo $hikvisionCamera->connect() . "\n";
echo $tapoCamera->connect() . "\n";