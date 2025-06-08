<?php
namespace Core;

ini_set('display_errors', 1); // turn off in production!

use PDO;
use PDOException;


class Database
{
    private $pdo;

    public function __construct(
        string $host = 'localhost',
        string $db = 'superblox',
        string $user = 'root',
        string $pass = '',
    )

    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getPDO(): PDO
    {
        return $this->pdo;
    }
}

$db = new Database();
$pdo = $db->getPDO();

$project = [
    'name' => 'SUPERBLOX',
    'logo' => '',
    'fulllogo' => '/assets/logo/full.png',
    'desc' => ''
];

foreach ($project as $key => $value) {
    define($key, $value);
}
