<?php

var_dump($_POST);

//Controlamos los errores
$errores = 0;
//Comprobamos que existe destino 
if ( !isset($_POST["destino"])) {
    
    $errores++;
    echo 'Tienes que elegir destino <br>';
}
//Comprobamos la fecha de ida
$fechaDelDia = date('Y-m-d');
if ($fechaDelDia >= $_POST["fechaIda"]){
    
    $errores++;
    echo 'La fecha de ida no puede ser anterior a hoy <br>';
}

//Comprobamos si hay fecha de vuelta, que sea mayor o igual que la de ida

if (isset($_POST['fechaVuelta'])) {
    
    if ($_POST['fechaVuelta'] < $_POST['fechaIda']){ 
        
        $errores++;
        echo 'La fecha es anterior';
    } 
}

//Si hay errores se vuelve

if ($errores > 0) {
    
    echo "<a href='formularioBillete.php'>Volver</a>";
    
} else {
    
    //Iria el calculo del billete
}
?>

