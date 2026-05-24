<?php
declare(strict_types=1);

namespace Patterns\Repository;

interface CameraRepositoryInterface
{
    public function findById(int $id): ?CameraEntity;
    public function findAll(): array;
}