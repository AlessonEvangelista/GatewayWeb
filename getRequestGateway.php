

<?php

/*********************************************************************************
     @ Project: System interface web for monitoring of the Gateways Modbus Gprs
     @ Author: Edson Xavier
     @ Date: 11/2016
     @ Company: Dalton Engenharia e Desenvolvimento
     @ Version 0.0  -  Equipment with only 2 analog inputs and 7 digital inputs
************************************************************************************
     @ Describe of the archive: Page in PHP for get request of the gateways
************************************************************************************/



require_once"_class/ConexaoMysql.php";

$crud =  new Crud();
$equipment = new Equipment();

/// get variables on the url
$digital_inputs = $_GET['Ed'];
$id_equipment = $_GET['Id'];
$log =  $_GET['Log'];
$Ai = $_GET['Ai1'];
///////////////////////////////

       /// Check is exist equipment
      if($equipment->existId($id_equipment)<>$id_equipment)
      {
          /// register in the database the digital inputs
          $equipment->registerDigitalInputs($digital_inputs,$id_equipment);
         /// register in the database the logs
          $equipment->registerLogs($id_equipment,$log);

          $equipment->regiterAnalogInputs($Ai,$id_equipment);

          $equipment->registerLastConection($id_equipment);

      }else{
          ///this equipment not exist , not was registed.
      }






