<?php require_once"header.php"?>


    <link type="text/css" rel="stylesheet" href="_css/cadastroCliente.css"/>
    <script type="text/javascript" src="_js/cadastroCliente.js"></script>

<div id="cadastroCliente">
    <header>

    </header>

    <main>

<form id="formCadastroCliente" action="javascript:void(0)">
    <p>Cadastramento de Cliente - Gateway Web Interface</p>
    <div id="divNome"><label>Nome:</label><input placeholder="Nome Completo" type="text" id="nome"></div>
    <div><label>Endereço:</label><input type="text" placeholder="Endereço" id="endereco"></div>
    <div><label>Cidade:</label><input type="text" placeholder="Cidade" id="cidade"></div>
    <div><label>Estado:</label><input type="text" placeholder="Estado" id="estado"></div>
    <div><label>Telefone:</label><input type="text" placeholder="Telefone (0xx) xxxx-xxxx" id="telefone"></div>
    <div><label>Email:</label><input type="text" placeholder="E-mail" id="email"></div>
    <div><label>Login:</label><input type="text" placeholder="Login de usuário" id="login"></div>
    <div><label>Senha:</label><input type="password" placeholder="Senha de acesso" id="senha"></div>

    <div><button onclick="bntCadastraCliente()">Cadastrar</button></div>
    <span></span>

</form>
    </main>

</div>

<?php require_once"footer.php"?>