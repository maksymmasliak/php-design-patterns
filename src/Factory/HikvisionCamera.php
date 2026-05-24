<?php
declare(strict_types=1);

namespace Patterns\Factory;

class HikvisionCamera implements CameraInterface
{
    public function __construct(private string $credential) {}

    public function connect(): string
    {
        return "Connected to Hikvision via Local IP. Used token: {$this->credential}";
    }
}