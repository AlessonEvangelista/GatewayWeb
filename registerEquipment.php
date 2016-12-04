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


<link type="text/css" rel="stylesheet" href="_css/registerEquipment.css"/>
<script type="text/javascript" src="_js/registerEquipment.js"></script>


<div id="registerEquipment">
    <header>

    </header>

    <main>

        <form id="formRegisterEquipment" action="javascript:void(0)">
            <p>Cadastramento de Equipamentos - Gateway Web Interface</p>

            <div id="dadosGeraisEquipment">
                <div id="divID"><label>ID:</label><input required="" type="text" id="ID"></div>
                <div id="divMbus"><label id="labelMbus">Resgistro Mbus:</label><input required="" type="text" id="regMbus"></div>
                <div><label>E-mail cliente:</label><input required="" placeholder="E-mail de cliente cadastrado" type="text" id="email"></div>
            <div id="divTagEquipment"><label id="labelTagEquipment">TAG Equipamento:</label><input required="" type="text" id="tagEquipment"></div>
            </div>
            <p>Entrada Analógica Ai1</p>

            <div id="divAi">
                <label>Fim de Escala:</label>
                <input type="number" required="" id="fimEscalaAi">

                <label>Zero Escala:</label>
                <input type="number" required="" id="ZeroEscalaAi">

                <label>Unidade Eng:</label>
                <select id="selEu" required="">
                    <option value="1">m³/h</option>
                    <option value="2">Kg/cm2</option>
                    <option value="3">°C</option>
                    <option value="4">m</option>
                </select>

                <label>Descrição:</label>
                <input type="text" required="" placeholder="Descrição da variável/instrumento" id="aiDescricao">

                <label>Tag:</label>
                <input type="text" required="" placeholder="Tag instrumento" id="aiTag">

            </div>

            <p>Entradas Digitais</p>

            <div>

                <table border="1">
                    <tr><td id="cellEntradaDigital">Entrada Digital</td> <td id="cellDescricao">Descrição</td> <td id="cellTag">Tag</td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi" id="checkboxdi1">Canal 1</td><td><input type="text" class="DiDescricao" id="descricaoDi1"></td> <td><input type="text"  class="DiTag" id="tagDi1"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi" id="checkboxdi2">Canal 2</td><td><input type="text" class="DiDescricao" id="descricaoDi2"></td> <td><input type="text"  class="DiTag" id="tagDi2"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi" id="checkboxdi3">Canal 3</td><td><input type="text" class="DiDescricao" id="descricaoDi3"></td> <td><input type="text"  class="DiTag" id="tagDi3"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi" id="checkboxdi4">Canal 4</td><td><input type="text" class="DiDescricao" id="descricaoDi4"></td> <td><input type="text"  class="DiTag" id="tagDi4"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi" id="checkboxdi5">Canal 5</td><td><input type="text" class="DiDescricao" id="descricaoDi5"></td> <td><input type="text"  class="DiTag" id="tagDi5"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi" id="checkboxdi6">Canal 6</td><td><input type="text" class="DiDescricao" id="descricaoDi6"></td> <td><input type="text"  class="DiTag" id="tagDi6"></td></tr>
                    <tr><td><input type="checkbox" class="checkboxDi" id="checkboxdi7">Canal 7</td><td><input type="text" class="DiDescricao" id="descricaoDi7"></td> <td><input type="text"  class="DiTag" id="tagDi7"></td></tr>
                </table>




            </div>




            <div><button onclick="bntRegisterEquipment()">Cadastrar</button></div>
            <span></span>

        </form>
    </main>

</div>

<?php require_once"footer.php"?>