<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './datosBilletes.php';
        ?>
        <h3> BUSES 'ONDEVAS'</h3>
         <?php
         //Generamos un numero de billete desde el 1 al 10000
         $numeroBillete = rand(1,10000);
         ?>
        BILLETE NUMERO : <?php echo $numeroBillete; ?><hr>       
        <form action="billete.php" method="POST">
            <fieldset>
                <legend> SELECCIONE DESTINO (OBLIGATORIO)  </legend>                
                <?php
                //Ordenamos la tabla por precios de menor a mayor
                asort($destinos);
                //
                //Generamos los radio botom de los destinos
                foreach ($destinos as $destino => $precio) {
                    echo "<input type='radio' id='$destino' name='destino' value='$destino'>";
                    echo "<label for='$destino'>$destino(" .
                    number_format($precio, 2, ",", ".") .
                    "€)</label>";
                }
                ?>
            </fieldset>
            <fieldset>
                <legend> OPCIONES  </legend>                
                <!--Desplegable para Clase-->
                <b>Clase:</b>
                <select name="clase">
                    <?php
                    //<option value = turista> turista </option>
                    foreach ($clases as $clase => $precio) {
                    echo "<option value = $clase> $clase </option>";
                    }
                    ?>
                </select>
                <?php
                //<input type='checkbox' id='C' name='C' value='comida'/><label for='C'>comida 10,00€</label>
                // Recorremos los extras
                foreach ($extras as $extra => $nombreExtra){
                    echo "<input type='checkbox' id='$extra' name='$extra' "
                            . "value='$nombreExtra'/>"
                            . "<label for='$extra'>$nombreExtra "
                            . number_format($importeExtras[$extra],2,',','.')
                            ."€</label>";
                }
                ?>
            </fieldset>
            <fieldset>
                <legend> FECHAS DEL VIAJE  </legend>    
                <label for='fechaIda'>IDA</label>
                <input type='date' id='fechaIda' name='fechaIda'
                       value='<?php echo date('Y') .'-' .date('m') .'-' .date('d')?>'>  
                       <label for='fechaVuelta'>VUELTA</label>
                <input type="date" id='fechaVuelta' name='fechaVuelta' value=''>
            </fieldset>
            <input type="submit" value ="MOSTRAR BILLETE">
        </form>
    </body>
</html>
