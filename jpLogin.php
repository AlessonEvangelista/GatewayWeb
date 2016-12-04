
<?php

/*********************************************************************************
    @ Projeto: Sistema de interface web para monitoramento das Gateways Modbus Gprs
    @ Autor: Edson Xavier
    @ Data: 10/2016
    @ Empresa: Dalton Engenharia e Desenvolvimento
    @ Versão 0.0
************************************************************************************
    @ Descrição do arquivo: Troca de dados entre os arquivos .js e .php
************************************************************************************/

require_once"../_class/ConexaoMysql.php";
$lgn =  new Login();
print $lgn->setLogin($_POST["_email"],$_POST["_pass"]);



