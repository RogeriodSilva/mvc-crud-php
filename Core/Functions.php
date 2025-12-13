<?php

// Website Functions
function base_path($path_file)
{
    $base = __DIR__ . "/../";
    $path = "{$base}/{$path_file}";

    if (file_exists($path)) {
        return $path;
    }

    return false;
}

function tableToModel($tableName)
{
    $data = [
        $tableName,
        substr($tableName, 0, strlen($tableName) - 1)
    ];

    foreach ($data as $name) {
        $name = ucfirst($name);
        $path = base_path("App/Models/{$name}.php");
        if($path) return $path;
    }

    echo "The $tableName table model was not found.";
    die();
}

//Generic Functions
function dump(...$data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data)
{
    dump($data);
    die();
}
