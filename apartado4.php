<?php
echo "Introduzca un número entero\n";
fscanf(STDIN, "%d", $n);
echo "Se ha leído $n\n";
//Vamos a obviar por ahora la validación de la entrada
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

   //Otra opción:
   //$tabla["$n x $i"]=$n*$i;

   //Otra opción con sintaxis compleja: 
   //https://www.php.net/manual/en/language.types.string.php#language.types.string.parsing.complex
   //Permite evaluar una variable dentro de una cadena de texto cuando su delimitación podría dar lugar a confusión (entre otras cosas)
   //$tabla["{$n}x{$i}"]=$n*$i;
}
echo "<pre>";
print_r($tabla);
echo "</pre>";

?>
</body>
</html>


