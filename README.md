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
    <h4>Insert</h4>

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
   </div>

   ```PHP
    use App\Models\User;

    User::find(1) // Retorna o user com id = 1;
    User::find('RogeriodSilva', 'name') // Retorna o user com 'name' = 'RogeriodSilva'
   ```
   
</div>
