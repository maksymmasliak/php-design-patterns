<?php
declare(strict_types=1);

namespace Patterns\Repository;

class CameraEntity
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
        private readonly string $type
    ) {}
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getType(): string
    {
        return $this->type;
    }
}