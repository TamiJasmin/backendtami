<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1>Números del 1 al 1000</h1>
<?php
$a = 0;
while ($a <= 100) {
  print "<p>El valor de a es $a</p>";
  $a++;
}
 ?>


<h1>Números del 100 al 1</h1>

<?php
$b = 100 ;
while ($b > 0) {
  print "<p>El valor de b es $b</p>";
  $b--;
}

 ?>

<h1>Números Pares</h1>

<?php

print "<p>Comienzo</p>\n";


for($n=2; $n<=100; $n= $n+2){

print "<p>El valor de n es $n</p>";
}


print "<p>Final</p>\n";

?>

<h1>Números Impares</h1>


<?php
print "<p>Comienzo</p>\n";


for($n=1; $n<=100; $n= $n+2){

print "<p>El valor de n es $n</p>";
}


print "<p>Final</p>\n";

?>

<h1>Suma 1 al 20</h1>

<?php
$resultado=1;

for($i = 1; $i <= 20; $i++){
 $resultado = $resultado + $i;
 echo "<p>$resultado</p>";
}

echo "<h3>El resultado es: $resultado</h3>"
?>

<h1>Suma de los números de 1 al 20 Pares</h1>

<?php
$resultado1=2;

for($n=2; $n<=20; $n= $n+2){
$resultado1=$resultado1+$n;
echo "<p>$resultado1</p>";
}

echo "<h3>El resultado es: $resultado1</h3>"

 ?>
  </body>
</html>
