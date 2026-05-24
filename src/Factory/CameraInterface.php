<?php
declare(strict_types=1);

namespace Patterns\Factory;

interface CameraInterface
{
    public function connect(): string;
}