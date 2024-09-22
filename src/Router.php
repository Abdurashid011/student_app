<?php

declare(strict_types=1);

namespace App;

use PDO;

class Router
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function getResourceId(): false|int
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = explode('/', $uri);
        $resourceId = $path[count($path) - 1];

        return is_numeric($resourceId) ? (int)$resourceId : false;
    }

    public static function get($path, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if ((new self())->getResourceId()) {
                $path = str_replace('{id}', (string) (new self())->getResourceId(), $path);
                if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                    $callback((new self())->getResourceId());
                    exit();
                }
            }
            if ($path === parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)) {
                $callback();
                exit();
            }
        }
    }

    public static function post($path, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === $path) {
            $callback();
            exit();
        }
    }
}