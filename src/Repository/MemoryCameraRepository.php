<?php
declare(strict_types=1);

namespace Patterns\Repository;

class MemoryCameraRepository implements CameraRepositoryInterface
{
    private array $cameras = [];
    public function __construct()
    {
        $this->cameras[] = new CameraEntity(1, 'Main Entrance', 'hikvision');
        $this->cameras[] = new CameraEntity(2, 'Backyard', 'tapo');
        $this->cameras[] = new CameraEntity(3, 'Warehouse', 'dahua');
    }
    public function findById(int $id): ?CameraEntity
    {
        foreach ($this->cameras as $camera) {
            if ($camera->getId() === $id) {
                return $camera;
            }
        }
        return null;
    }
    public function findAll(): array
    {
        return $this->cameras;
    }
}