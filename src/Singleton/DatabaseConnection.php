<?php
declare(strict_types=1);

namespace Patterns\Singleton;

class DatabaseConnection
{
    private static ?self $instance = null;
    private function __construct() {}
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone(): void
    {
        throw new \RuntimeException('Cloning Singleton is forbidden.');
    }
    public function __wakeup(): void
    {
        throw new \RuntimeException('Unserializing Singleton is forbidden.');
    }
    public function query(string $sql): string
    {
        return "Executing query: {$sql}";
    }
}