<?php


namespace App\Models;

use Core\Database;

class User extends Database {

    protected string $table = 'users';
    protected array $fill = ['name', 'password', 'email'];
}