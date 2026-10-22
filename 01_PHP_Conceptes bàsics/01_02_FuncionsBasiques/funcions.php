<?php
/**
 * Exemple 01_02: Funcions Bàsiques en PHP
 * 
 * Aquest exemple mostra com crear i utilitzar funcions en PHP
 */

// Funció simple sense paràmetres
function saludar() {
    echo "Hola, benvingut al món de PHP!<br>";
}

// Funció amb paràmetres
function saludarPersona($nom) {
    echo "Hola, " . $nom . "! Com estàs?<br>";
}

// Funció que retorna un valor
function sumar($a, $b) {
    return $a + $b;
}

// Funció amb valor per defecte
function mostrarMissatge($missatge = "Missatge per defecte") {
    echo "<p>" . $missatge . "</p>";
}

// Funció que retorna múltiples valors (array)
function calcularEstadistiques($numeros) {
    $suma = array_sum($numeros);
    $mitjana = $suma / count($numeros);
    $maxim = max($numeros);
    $minim = min($numeros);
    
    return array(
        "suma" => $suma,
        "mitjana" => $mitjana,
        "maxim" => $maxim,
        "minim" => $minim
    );
}

// Funció amb tipus de retorn (PHP 7+)
function multiplicar(int $a, int $b): int {
    return $a * $b;
}

// EXECUTAR LES FUNCIONS
echo "<h2>Exemple de Funcions en PHP</h2>";
echo "<hr>";

echo "<h3>1. Funció simple sense paràmetres:</h3>";
saludar();

echo "<h3>2. Funció amb paràmetres:</h3>";
saludarPersona("Maria");
saludarPersona("Pere");

echo "<h3>3. Funció que retorna un valor:</h3>";
$resultat = sumar(5, 3);
echo "La suma de 5 + 3 = " . $resultat . "<br>";

echo "<h3>4. Funció amb valor per defecte:</h3>";
mostrarMissatge();
mostrarMissatge("Aquest és un missatge personalitzat!");

echo "<h3>5. Funció que retorna múltiples valors:</h3>";
$numeros = [10, 20, 30, 40, 50];
$estadistiques = calcularEstadistiques($numeros);
echo "Números: " . implode(", ", $numeros) . "<br>";
echo "Suma: " . $estadistiques["suma"] . "<br>";
echo "Mitjana: " . $estadistiques["mitjana"] . "<br>";
echo "Màxim: " . $estadistiques["maxim"] . "<br>";
echo "Mínim: " . $estadistiques["minim"] . "<br>";

echo "<h3>6. Funció amb tipus definits:</h3>";
echo "Multiplicar 4 * 7 = " . multiplicar(4, 7) . "<br>";
?>

<?php
 function multiplicar($a) {
          echo $a*3 . "\n";
      } multiplicar(fgets(STDIN));
      ?>

      ❯ <?php
  function sumar() {
  $a = (fgets(STDIN));
  $b = (fgets(STDIN));
      echo $a + $b . "\n";
  }

  sumar();


<?php
  function triangle() {
  $a = (fgets(STDIN));
  $b = (fgets(STDIN));
      
      
      echo number_format(($a * $b)/2, 1, '.', '') . "\n";
  }

  triangle();

  <?php
 function cuadrado($a) {
          echo $a*$a . "\n";
      } cuadrado(fgets(STDIN));
      ?>


<?php
  function amber() {
  $a = (fgets(STDIN));
  $b = (fgets(STDIN));
      echo $a . " amb "  . $b . "\n";
  }

  amber();

  <?php
  function sweetycalc() {
  $a = (fgets(STDIN));
  $b = (fgets(STDIN));
        if (floor($a / $b) == $a / $b)
            echo "0\n";
        else
            echo ($a - $b * floor($a / $b)) . "\n";
     
  }

  <?php
  function zeldaDiaCalc($a) {

  $x = floor($a / 43200);

    if($x % 2 == 1)
        echo "nit del dia " . floor(($x / 2)+1) . "\n";
    else    
        echo "mati del dia " . floor(($x / 2) +1) . "\n";

  }

  zeldaDiaCalc(fgets(STDIN));

  sweetycalc();


  Si es diu "Coratge", dirà "Gryffindor"
Si es diu "Coneixement", dirà "Ravenclaw"
Si es diu "Ambicio", dirà "Slytherin"
Si es diu qualsevol altra cosa, dirà "Hufflepuff"

<?php
 function houseHog($a) {
            if ($a == "Coratge")
                echo "Gryffindor\n";
            else if ($a == "Coneixement")
                echo "Ravenclaw\n";
            else if ($a == "Ambicio")
                echo "Slytherin\n";
            else
                echo "Hufflepuff\n";
      } houseHog(trim(fgets(STDIN)));
      ?>

      Entrada	Sortida
1	1
32	2
62	3
364	12

<?php
 function monthCalc($a) {
            if (0 < $a && $a < 32)
                echo "1\n";
            else if (32 <= $a && $a < 60)
                echo "2\n";
            else if (60 <= $a && $a < 91)
                echo "3\n";
            else if (91 <= $a && $a < 121)
                echo "4\n";
            else if (121 <= $a && $a < 152)
                echo "5\n";
            else if (152 <= $a && $a < 182)
                echo "6\n";
            else if (182 <= $a && $a < 213)
                echo "7\n";
            else if (213 <= $a && $a < 244)
                echo "8\n";
            else if (244 <= $a && $a < 274)
                echo "9\n";
            else if (274 <= $a && $a < 305)
                echo "10\n";
            else if (305 <= $a && $a < 335)
                echo "11\n";
            else if (335 <= $a && $a < 366)
                echo "12\n";
      } monthCalc(trim(fgets(STDIN)));
      ?>
Entrada	Sortida
1	1
32	2
62	3
364	12

<?php
 function monthCalc($a) {
            if (0 < $a && $a < 32)
                echo "1\n";
            else if (32 <= $a && $a < 60)
                echo "2\n";
            else if (60 <= $a && $a < 91)
                echo "3\n";
            else if (91 <= $a && $a < 121)
                echo "4\n";
            else if (121 <= $a && $a < 152)
                echo "5\n";
            else if (152 <= $a && $a < 