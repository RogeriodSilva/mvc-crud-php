<?php

spl_autoload_register(function ($class) {
    $path = base_path(str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php');
    if (!$path) return;
    require $path;
});

require '../Core/Functions.php';

use App\Models\User;

User::insert([
    'name' => 'RogeriodSilva',
    'email' => 'ro@email.com',
    'password' => '1234' // Sem censura;
]);
