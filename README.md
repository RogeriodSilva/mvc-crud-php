<div>
    <h4>Requesitos</h4>
    <ul>
        <li>PHP - 8.4^</li>
    </ul>
    <h2>Modelo CRUD (Create, Read, Update, Delete) PHP</h2>
    <p style="text-align: justify;">
        Este projeto é um CRUD (Create, Read, Update, Delete) desenvolvido em PHP puro, utilizando arquitetura MVC.
        O sistema permite cadastrar, listar, editar e excluir registros de forma segura, utilizando prepared statements
        para evitar SQL Injection.
    </p>
    <p>
        Esse projeto utilizar conexão com banco local, tendo como exemplo o <span
            style="font-style: italic;">database.sqlite</span>.
        O arquivo <span style="font-style: italic;">database_create.sql</span> tem como escrito a tabela de exemplo
        <span style="font-style: italic;">"users"</span>
        para afins de teste do CRUD.
    </p>
    <h3>Funcionalidade</h3>
    <p>
        Para o CRUD funcionar de forma correta ele necessita de uma class com
        o nome da correspondente ao banco de dados. <strong>Ex.: table users > User.php</strong>
    </p>

    <div>
        <h4>Insert</h4>
    </div>

    ```PHP
    use App\Models\User;

    User::insert([
    'name' => 'RogeriodSilva',
    'email' => 'ro@email.com',
    'password' => '1234' // Sem censura;
    ]);
    ```

    <div>
        <h4>Find</h4>
        <p>
            Encontrar um user pelo key(id) = 1, com isso
            retorno um objeto com os valores no banco de
            dados.

        </p>
    </div>

    ```PHP
    use App\Models\User;

    User::find(1) // Retorna o user com id = 1;
    User::find('RogeriodSilva', 'name') // Retorna o user com 'name' = 'RogeriodSilva'
    ```

    <div>
        <h4>Get</h4>
        <p>
            Mesmo proposito do find, mas retorna uma listagem
            ao invés de apenas um valor do banco.
        </p>
    </div>

    ```PHP
    use App\Models\User;

    User::get('RogeriodSilva', 'name') // Retorna todos user com 'name' = 'RogeriodSilva'
    ```

    <div>
        <h4>All</h4>
        <p>
            Retorna todos os elementos do banco.
        </p>
    </div>

    ```PHP
    use App\Models\User;

    User::all() // Retorna todos user
    ```

    <div>
        <h4>Delete</h4>
        <p>
            Faz uma verificação se existe um elemento no
            banco com o mesmo id, caso tenha será deletado
        </p>
    </div>

    ```PHP
    use App\Models\User;

    User::delete(1) // Deleta o user com id = 1
    ```

    <div>
        <h4>Update</h4>
        <p>
            No $_POST deve haver um input:hidden com o nome 'id'
            para que seja encontrado o elemento com id igual,
            assim atualizando os dados de acordo com o banco.
        </p>
    </div>

    ```PHP
    use App\Models\User;

    User::delete(1) // Deleta o user com id = 1
    ```

</div>
