<?php

namespace App\models;

use Exception;
use PDO;

class Database
{
    private static $sqlPDO;

    public static function connect(): PDO|string
    {
        if (is_null(self::$sqlPDO)) {
            require_once("config/db_config.php");

            try {
                self::$sqlPDO = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USERNAME, DB_PASSWORD);
            } catch (Exception $e) {
//                throw new \ErrorException($e->getMessage());
                return $e->getMessage();
            }
        }

        return self::$sqlPDO;
    }

    public static function disconnect(): void
    {
        self::$sqlPDO = null;
    }
}
