<?php

//Almacenamos las posibilidades de cada parámetro en un array asociativo
//precio BASE según el destino
$destinos = array("Madrid" => 25.50, "Barcelona" => 42.25, "Valencia" => 15,
    "Sevilla" => 10, "Jaen" => 7);
//según la clase, aplicamos uno u otro multiplicador
$clases = array("turista" => 1, "business" => 1.25, "VIP" => 1.5);
//extras posibles
$extras = ["C" => 'comida', "A" => 'Almohadilla', 'W'=>'WI-FI'];
//importe de cada extra
$importeExtras =["C"=>10,"A"=>1,"W"=>2.50]; 
//funcion para poner leuros
function leuros($importe) {
    return number_format($importe, 2, ",", ".") . "€";
}
