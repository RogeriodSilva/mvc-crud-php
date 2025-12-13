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
    <p>

        use App\Models\User;

        User::insert([
            'name' => 'RogeriodSilva',
            'email' => 'ro@email.com',
            'password' => '1234' // Sem censura;
        ]);

    </p>
</div>
