<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Patterns\Repository\MemoryCameraRepository;
use Patterns\Service\CameraService;

$repo = new MemoryCameraRepository();
$service = new CameraService($repo);
// Test 1: Existing camera
try {
    echo $service->getCameraReport(1) . "\n";
} catch (\Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
}
// Test 2: Non-existing camera
try {
    echo $service->getCameraReport(99) . "\n";
} catch (\Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
}