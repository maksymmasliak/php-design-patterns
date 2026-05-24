<?php
declare(strict_types=1);

namespace Patterns\Factory;

class TapoCamera implements CameraInterface
{
    public function __construct(private string $credential) {}

    public function connect(): string
    {
        return "Connected to Tapo via Cloud API. Used token: {$this->credential}";
    }
}