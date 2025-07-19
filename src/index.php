<?php
require 'vendor/autoload.php';

$redis = new Predis\Client([
    'scheme' => 'tcp',
    'host' => 'redis',
    'port' => 6379,
]);

$redis->set('msg', 'Hello Predis');
echo "Redis says: " . $redis->get('msg') . "<br>";

$mysqli = new mysqli('mysql-db', 'appuser', 'secret', 'appdb');
if ($mysqli->connect_error) {
    die("MySQL connection failed: " . $mysqli->connect_error);
}
echo "MySQL connection successful!";
