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


<?php
$p = 9;
$s = 5;
$t = 2;
$aux = 0;

if ($p > $s) {
$aux = $p;
$p = $s;
$s = $aux;
  }
if ($s > $t) {
$aux = $s;
$s = $t;
$t = $aux;
}

if ($p > $s) {
$aux = $p;
$p = $s;
$s = $aux;
  }

  echo("$t, $s, $p")
 ?>
<hr>
<h2>05</h2>

<?php
$num = 1900;
$aux = $num;
$numinv = 0;


while ($aux > 0) {
  $numinv = $numinv * 10 + ($aux % 10);
  $aux = (int)($aux / 10);
  }


  if($num % 2 == 0 && $num % 5 == 0 && $num % 10 == 0){
  echo "$num ---> 0$numinv";
   } else {
    echo "$num ---> $numinv";
   }
   echo '<br><hr><br>';
//se o numero digitado terminar em zero quando o inverter ele vai add 1

 ?>

<hr>
<h2>06</h2>

<?php

$num = 1230;
if($num % 2 == 0){
   echo "$num é par";
 } else {
   echo "$num é impar";
 }
 echo '<br><hr><br>';

?>
<hr>
<h2>07</h2>
<p></p>

<?php
$numel = 100;
$i = 0;
$cont = 0;
//para i de 1 ate numel faca
  for($i = 1; $i <= $numel; $i++){

      if($numel % $i == 0) {
        $cont++;
      }

}

if ($cont == 2) {
  echo "Primo";
  // code...
}else {
  echo "Não primo";
}

?>
<hr>
<h2>08</h2>
<?php
$sexo = "m";
$alt = 1.70;

if ($sexo == "m") {
  $pi = (72.7 * $alt) - 58;

  echo "Vc é Homem e seu peso ideal seria $pi";

}elseif ($sexo == "f") {
    $pi = (62.1 * $alt) - 44.7;

      echo "Vc é mulher e seu peso ideal seria $pi";

    // code...
  }
  // code...


 ?>


<hr>

<h2>09</h2>


<?php
$p = 9;
$s = 5;
$t = 2;
$aux = 0;

if ($p > $s) {
$aux = $p;
$p = $s;
$s = $aux;
}
if ($s > $t) {
$aux = $s;
$s = $t;
$t = $aux;
}

if ($p > $s) {
$aux = $p;
$p = $s;
$s = $aux;
}

echo("$p, $s, $t")
?>
<hr>
<h2>10</h2>

<?php
$tab = 7;
$num = 1;
       while($num<=10){
           echo $tab. " x " . $num . " = " . ($num * $tab) . "<br>";
           $num++;
       }
 ?>

<hr>

<h2>11</h2>
<p>Não entendi</p>
<hr>
<h2>12</h2>
<?php
$joao = 100;
$rend = 0.05;
$aomes = (100 * 0.05);
$totalmes = 205 /$aomes; //Ultrapasse 200

echo "Serão descessario $totalmes meses para ultrapassar 200";
 ?>

<hr>
<h2>13</h2>

<?php



for($i = 1; $i <= 100; $i++)
{
    $divisores = 0;

    for($j = $i; $j >= 1; $j--)
    {

        if (($i % $j) == 0) {
            $divisores++;
        }
    }


    if ($divisores == 2)
    {
        echo $i . ', ';
    }
}


 ?>
 <hr>

<h2>14</h2>
<?php
$i = 1;
$numel = 0;
$soma = 0;


$numel = 10;
$aux = $numel;
$numel = $numel - 1;


  for($i = 1; $i <= $numel; $i++){
    if ($aux % $i == 0) {
      echo " $i ";
      $soma = $soma + $i;

    }

  }
  echo "<br>";
  if ($soma == $aux) {
     echo "perfeito";
  }else{
    echo "Não perfeito";
  }





 ?>
 <hr>
  </body>
</html>
