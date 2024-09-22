<?php

declare(strict_types=1);

function dd($args)
{
    echo "<pre>";
    print_r($args);
    echo "</pre>";
    die();
}

function basePath(string $path): string
{
    return __DIR__ . $path;
}

function Loadview(string $path, array|null $args = null): void
{
    $file = "/resources/views/$path.php";
    $filePath = basePath($file);

    if (!file_exists($filePath)) {
        echo "Required view not found: $filePath";
        return;
    }

    if (is_array($args)) {
        extract($args);
    }
    require $filePath;
}

function loadPartials (string $path): void
{
    $file = "/resources/partials/$path.php";
    $filePath = basePath($file);

    if (!file_exists($filePath)) {
        echo "Required partials not found: $filePath";
        return;
    }

    require $filePath;
}