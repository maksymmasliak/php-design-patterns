<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Patterns\Repository\MemoryCameraRepository;

$repo = new MemoryCameraRepository();

echo "All cameras:\n";
var_dump($repo->findAll());
echo "\n";

$camera = $repo->findById(2);
if ($camera !== null) {
    echo "Found camera: " . $camera->getName() . "\n";
} else {
    echo "Camera not found.\n";
}