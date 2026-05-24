<?php
declare(strict_types=1);

namespace Patterns\Service;

use Patterns\Repository\CameraRepositoryInterface;

class CameraService
{
    public function __construct(private CameraRepositoryInterface $repository) {}
    public function getCameraReport(int $id): string
    {
        $camera = $this->repository->findById($id);
        if ($camera === null) {
            throw new \Exception("Camera with ID {$id} not found.");
        }

        return "Report: Camera '{$camera->getName()}' (Type: {$camera->getType()}) is connected and working.";
    }
}