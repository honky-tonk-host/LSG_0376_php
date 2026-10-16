<!DOCTYPE html>
<body>
  
</body>

<?php
//Part que s´executa al servidor de PHP
  function CondicionalSimple() {
    //Estic creant una funció simple que executa un condicional.
    echo "<h3>1. Condicional If-Else:</h3>";
    $t = 14;// Recorda que en PHP no es diu de quin tipus de variable es.

    if ($t <= 20) {
      echo "Aquest missatge surt, si es compleix la condició del condicional<br>";
    }
  }
  function CondicionalSwitch(){
    //Exemple de com estructura un switch en PHP
    echo "<h3>2. Condicional Switch:</h3>";
    $opcio=0;

    switch($opcio){
      case 1:
        echo "Aquí aniria el codi per la opció 1 de un menú<br>";
        break;
      case 2:
        echo "Aquí aniria el codi per la opció 2 de un menú<br>"; 
        break;
      case 3:
        echo "Aquí aniria el codi per la opció 3 de un menú<br>";
        break;
      default: 
        echo "Opció no vàlida<br>";
    }
  }

  condicionalSimple();
  
  condicionalSwitch();

?>