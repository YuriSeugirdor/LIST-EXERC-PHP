<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LISTA03</title>
  </head>
  <body>
    <h1>03 LISTA DE EXERCICIOS - PHP BÁSICO</h1>
    <h2>01</h2>

    <?php
$vala = 2;
$valb = 5;

echo "$vala + $valb =".($vala + $valb)."<br>";
echo "$vala - $valb =".($vala - $valb)."<br>";
echo "$vala x $valb =".($vala * $valb)."<br>";
echo "$vala ÷ $valb =".($vala / $valb)."<br>";


     ?>
<hr>
<h2>02</h2>

<?php
$a = 10;
$b = 15;
echo "*Valores inicial:<br>";
echo "Valor de A= $a <br>";
echo "Valor de B= $b <br>";
echo "<br>";

$troca = $a;
$a = $b;
$b = $troca;

echo "*Troca de valores:<br>";
echo "Valor de A= $a <br>";
echo "Valor de B= $b <br>";

 ?>

 <hr>

 <h2>03</h2>
 <?php
$va = 5;
echo "o valor absoluto de $va é $va";

  ?>
<hr>
  <h2>04</h2>
$p = 8;
$s = 7;



  </body>
</html>
