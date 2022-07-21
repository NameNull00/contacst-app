<?php

// Las variables empiezan por dolar

$contacts = ["Pepe", "Antonio", "Nate"];

//Recorrer elementos de una lista
//Comillas dobles imprime valor variables
//Concatenar cadenas con . y PHP_EOL endline

foreach ($contacts as $contact) {
  print("<div>$contact</div>" . PHP_EOL);
}

//Lo que hay fuera del tag ?php se interpreta como html

?>
