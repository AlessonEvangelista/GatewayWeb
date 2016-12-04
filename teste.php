<!--*********************************************************************************
     @ Project: System interface web for monitoring of the Gateways Modbus Gprs
     @ Author: Edson Xavier
     @ Date: 11/2016
     @ Company: Dalton Engenharia e Desenvolvimento
     @ Version 0.0
 ************************************************************************************
     @ Describe of the archive: page in php for register new equipment (new gateway)
 ************************************************************************************
-->

<?php require_once"header.php"?>



<script type="text/javascript" src="_js/teste.js"></script>


<div id="registerEquipment">
    <header>

    </header>

    <main>

        <form id="formRegisterEquipment" action="javascript:void(0)">


            <p>Entradas Digitais</p>

            <div>

                <table border="1">
                    <tr><td id="cellEntradaDigital">Entrada Digital</td> <td id="cellDescricao">Descrição</td> <td id="cellTag">Tag</td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi">Canal 1</td><td><input type="text" class="DiDescricao"></td> <td><input type="text"  class="DiTag"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi">Canal 2</td><td><input type="text" class="DiDescricao"></td> <td><input type="text"  class="DiTag"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi">Canal 3</td><td><input type="text" class="DiDescricao"></td> <td><input type="text"  class="DiTag"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi">Canal 4</td><td><input type="text" class="DiDescricao"></td> <td><input type="text"  class="DiTag"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi">Canal 5</td><td><input type="text" class="DiDescricao"></td> <td><input type="text"  class="DiTag"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi">Canal 6</td><td><input type="text" class="DiDescricao"></td> <td><input type="text"  class="DiTag"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi">Canal 7</td><td><input type="text" class="DiDescricao"></td> <td><input type="text"  class="DiTag"></td></tr>
                </table>




            </div>




            <div><button onclick="bntteste()">Cadastrar</button></div>
            <span></span>

        </form>
    </main>

</div>

<?php require_once"footer.php"?>