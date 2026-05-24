<?php
declare(strict_types=1);

namespace Patterns\Factory;

class CameraFactory
{
    private function __construct() {}

    public static function createCamera(string $type, string $credential): CameraInterface
    {
        return match (strtolower($type)) {
            'tapo' => new TapoCamera($credential),
            'hikvision' => new HikvisionCamera($credential),
            default => throw new \InvalidArgumentException('Unknown camera type'),
        };
    }
}