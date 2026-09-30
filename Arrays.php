<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercicis PHP</title>
<style>
        body {
            background-color: #1c1b1b; /* Fondo negro */
            color: #ffffff;            /* Letras blancas */
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            margin: 0;
        }
    </style>
<style>
    .contenedor {
      display: flex;
      gap: 40px;
      align-items: flex-start;
    }
  </style>
</head>
<body>

<div class="contenedor">

<!-- Exercici 1 -->
<div>
<h3>Exercici 1</h3>
<pre>
<?php
$frutas = ["Bicicleta", "Rotulador", "Televisor","Videojuego","Libro" ];

echo $frutas[0] . "\n";  
echo $frutas[1] . "\n";   
echo $frutas[2] . "\n";   
echo $frutas[3] . "\n";
echo $frutas[4] . "\n";

?>

</pre>
</div>
</div>

</body>
</html>