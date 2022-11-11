<?php

/* escribir la función validaContraseña($contraseña): true/false 
 * la contraseña tiene que tener:
 * - longitud mínima de 8
 * - Mayúsculas y Minúsculas
 * - números
 * - símbolos especiales
 */

   //funcion para saber si hay al menos una mayuscula.
   function tieneMayuscula($contraseña){
       //recorro la contraseña
       for($i=0;$i< strlen($contraseña); $i++){
           //comprobamos la letra
       $letra=$contraseña[$i];
       if(ctype_upper($letra)){
       return true;
       }
   }  
       return false;
   }
   
      //funcion para saber si hay minusculas.
      function tieneMinusculas($contraseña){
       for($i=0;$i< strlen($contraseña); $i++){
       //comprobamos la letra
       $letra=$contraseña[$i];
       if(ctype_lower($letra)){  
        return true;
       }
      }
        return false;
       }
      
      
      function tieneNumeros($contraseña){
        for($i=0;$i< strlen($contraseña); $i++){
        //comprobamos la letra
       $letra=$contraseña[$i];
       if(ctype_digit($letra)){
           }
        }
        return false;
        }      
      
      
      function tieneSimbolosEspeciales($contraseña){
         for($i=0;$i< strlen($contraseña); $i++){
         //comprobamos la letra
       $letra=$contraseña[$i];
       if(!tieneMayuscula($letra)&
           !tieneMinusculas($letra)&
           !tieneNumeros($letra)){
           return true; 
          
       }
         }
        return false;
      }



function validaContraseña($contraseña) {
    return strlen($contraseña)>=8 &  //validamos longitud
    tieneMayuscula($contraseña)&
    tieneMinusculas($contraseña)&
    tieneNumeros($contraseña)&
    tieneSimbolosEspeciales($contraseña);
        }
    
    
    //Funcion para ver si hay mayuscula
 
    
    



$listaContraseñas = ['111111111','Hola_comoEstas',"Mi#contraseña@2", "hola", "dfewfgwegewg__"];

//Recorremos la $listaContraseñas y mostramos en pantalla si es buena o no

foreach ($listaContraseñas as $contraseña) {
    echo "la contraseña $contraseña es ";
    if (validaContraseña($contraseña)) {
        echo 'Buena';
    }
    else {
        echo 'Mala';
    }
    echo '<br>';
}