<?php
require_once"_class/ConexaoMysql.php"; /// request archive to autoload
///define variables

session_start();   /// init session user logon in function setLogin

$login_user = $_SESSION['logado']['login'];   // user login by $_session

$email = '';
$log = '';
$crud =  new Crud();

$log =  $crud->select('*','clientes','WHERE login=?',array($login_user));/// select all table clients

while($linha = $log->fetch(PDO::FETCH_ASSOC)){

    $email =  (string)$linha['email'];      /// load all emails this user logon

}


?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Grafico Teste</title>

    <!-- Links css files-->
     <link type="text/css" rel="stylesheet" href="_css/chart.css"/>
     <link rel="stylesheet" href="_css/style.min.css" />
    <!-->

    <!--Lib google chart -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi" ></script>
    <!-->

    <!-- lib to treewview-->
    <script src="_js/jstree.min.js"></script>
    <!-->



    <!--Script update on the chart
    -->
    <script type="text/javascript">

        $(function(){

            var refresh =  setInterval(function(){
                $('chart_div').load(draw());

            },5000);

        })


    </script>

    <!--Script make chart
   -->
    <script type="text/javascript">

        google.load('visualization','1',{packages: ['corechart', 'line']});
        google.setOnLoadCallback(draw);

        function draw(){

            drawBasic();

        }

        function drawBasic() {

            var jsonData = $.ajax({
                url: "_json/getDataJsonToChart.php",
                dataType: "json",
                async: false
            }).responseText;

            var data = new google.visualization.DataTable(jsonData);

            var options = {

                hAxis: {
                    title: 'Tempo'

                },
                vAxis: {
                    title: 'Valor'
                },

                title:  'Entrada Analógica',
                curveType: 'function',
                width: 1100,
                height: 500

            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

            chart.draw(data, options);
             

        }

    </script>

</head>


<body>

<section id="banner">
    <nav id=”topo”>
    <span id="span_user_logon"><?php echo $email ?></span>
    </nav>
</section>


<section id="principal">
    <article>
        <div id="chart_div" style="height: 570px;"></div>
    </article>
</section>


<aside id="canto_esquerdo">
    <h1>Navegação</h1>
    <div id="ajax" class="demo"></div>
</aside>



<!-- Script Script for get json data format from equipment tags of the user logon
-->
<script type="text/javascript">

    // ajax demo
    $('#ajax').jstree(
        {

            'core': {
                'data': {
                    "url": "_json/getDataJsonToTreeview.php?email="+'<?php echo $email ?>',
                    "dataType": "json" // needed only if you do not supply JSON headers
                }
            }
        }
    );


</script>



<footer id=”rodape”>
</footer>


</body>
</html>