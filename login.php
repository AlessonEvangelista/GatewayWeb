

<?php require_once"header.php";
/*********************************************************************************
     #@ Projeto: Sistema de interface web para monitoramento das Gateways Modbus Gprs
     #@ Autor: Edson Xavier
     #@ Data: 10/2016
     #@ Empresa: Dalton Engenharia e Desenvolvimento
     #@ Versão 0.0
 ************************************************************************************
     #@ Descrição do arquivo: Página em php para logim de usuário
 ************************************************************************************/
?>
<link type="text/css" rel="stylesheet" href="_css/login.css"/>

  <div id="divLogin">
    <header>
    </header>

    <main>

                           <form id="formLogin" action="javascript:void(0)">
                               <p>Bem-Vindo - Gateway Web Interface</p>
                               <div><label for="EmailLogin">E-mail:</label><input required="" type="text" id="EmailLogin"></div>
                               <div><label for="sLogin">Senha:</label><input required="" type="password" id="sLogin"></div>
                               <div><button onclick="bntLoginclick()">Entrar</button></div>
                               <span></span>

                           </form>
    </main>

  </div>
<?php require_once"footer.php"?>
