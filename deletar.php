
<?php

require_once"_class/ConexaoMysql.php";

$table =  array(

    array('id'=>'1','text'=>'Root node','children'=>array(

        array('id'=>'2','text'=>'child node 1'),
        array('id'=>'3','text'=>'child node 2','children'=>array(array('id'=>'4','text'=>'child node 1.1'),array('id'=>'5','text'=>'child node 2.1')))
    )

    )

);

$equipments= array();
$crud = new Crud();
$address  = array();
$Eds =  array();
$Ais = array();

try {

    $consult = $crud->select('*', 'equipamento', 'WHERE cliente=?', array('engeletrojunior@hotmail.com'));
    $i = 2;
    if ($consult) {


        while ($linha = $consult->fetch(PDO::FETCH_ASSOC)) {

            $tags = (string)$linha['tag'];
            $address = $linha['address'];

            $equipments[] = array('id' => $i, 'text' => $tags);

            $i = $i + 1;

        }








        echo json_encode(array(array('id' => '1', 'text' => 'Equipmento', 'children' => $equipments)));
    }
}catch (Exception $e){
    print 'Erro '.$e->getMessage();

}



