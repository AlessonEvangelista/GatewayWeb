
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



$equipment =  new Equipment();

$entradaDigital =  array();
$entradaDigital[1] =  new IODigital('1',$_POST['tagDi1'],$_POST['descDi1'],$_POST['habDi1']);
$entradaDigital[2] =  new IODigital('2',$_POST['tagDi2'],$_POST['descDi2'],$_POST['habDi2']);
$entradaDigital[3] =  new IODigital('3',$_POST['tagDi3'],$_POST['descDi3'],$_POST['habDi3']);
$entradaDigital[4] =  new IODigital('4',$_POST['tagDi4'],$_POST['descDi4'],$_POST['habDi4']);
$entradaDigital[5] =  new IODigital('5',$_POST['tagDi5'],$_POST['descDi5'],$_POST['habDi5']);
$entradaDigital[6] =  new IODigital('6',$_POST['tagDi6'],$_POST['descDi6'],$_POST['habDi6']);
$entradaDigital[7] =  new IODigital('7',$_POST['tagDi7'],$_POST['descDi7'],$_POST['habDi7']);


$analog_input =  new AnalogInput($_POST['tag'],$_POST['des'],$_POST['eu_max'],$_POST['eu'],$_POST['eu_min']);

print $equipment->registerEquipment($_POST['email'],$_POST['id'],$_POST['mbus'],$_POST['tag_equipment'],$analog_input,$entradaDigital);

