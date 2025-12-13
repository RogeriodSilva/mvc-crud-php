<?php

spl_autoload_register(function ($class) {
    $path = base_path(str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php');
    if (!$path) return;
    require $path;
});

require '../Core/Functions.php';

use App\Models\User;


/*
    User | name, email, password
*/

User::insert([
    'name' => 'RogeriodSilva',
    'email' => 'ro@email.com',
    'password' => '1234' // Sem censura;
]);

//
//

/*  

    ::find(value, key = 'id') : FetcObject - fetch()
    
    Encontrar um user pelo key(id) = 1, com isso
    retorno um objeto com os valores no banco de
    dados.

    ::get(value, key) : FetchObject - fetchAll()

    Mesmo proposito do find, mas retorna uma listagem
    ao invés de apenas um valor do banco.

    ::all() : FetchObject - fetchAll()

    Retorna todos os elementos do banco.

*/

// dd(User::find(1)); 

//
//

/* ::delete(1) : void

    Faz uma verificação  se existe um elemento no
    banco com o mesmo id, caso tenha será deletado

*/

// User::delete(1)

//
//

/* 
    ::insert($_POST) : void

    Cria uma nova informação na tabela do mesmo tipo
    do objeto. 

    ::update($_POST) : void

    No post deve haver um input:hidden com o nome 'id'
    para que seja encontrado o elemento com id igual,
    assim atualizando os dados de acordo com o banco.
*/

// User::update(['id'=>1,'name'=>'RogerioDaSilva'])
