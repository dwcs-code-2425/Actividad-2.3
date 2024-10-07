<?php
echo "Introduzca un número entero\n";
fscanf(STDIN, "%d", $n);
echo "Se ha leído $n\n";
//Imos  obviar por agora a validación da entrada
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Apartado 3 A2.3</title>
</head>
<body>
<?php

const TOPE_MAX= 10;


$tabla= [];
echo "<h1>La tabla del $n</h1>";

for ($i=0; $i <=TOPE_MAX ; $i++) { 
   

   
   $clave = $n.'x'.$i;
   $tabla[$clave] = $n * $i;

   //Outra opción:
   //$tabla["$n x $i"]=$n*$i;

   //Outra opción con sintaxis complexa: 
   //https://www.php.net/manual/en/language.types.string.php#language.types.string.parsing.complex
   //Permite evaluar unha variable dentro dunha cadea de texto cando a súa delimitación podería dar lugar a confusión (entre outras cosas)
   //$tabla["{$n}x{$i}"]=$n*$i;
}
echo "<pre>";
print_r($tabla);
echo "</pre>";

?>
</body>
</html>


