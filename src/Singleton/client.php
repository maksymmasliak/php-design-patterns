<?php
declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Patterns\Singleton\DatabaseConnection;

$db1 = DatabaseConnection::getInstance();
$db2 = DatabaseConnection::getInstance();

var_dump($db1 === $db2);
echo $db1->query("SELECT * FROM cameras") . "\n";