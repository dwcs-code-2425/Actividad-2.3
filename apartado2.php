<?php
$valores_top5_subidas= [
    "B.SABADELL" => 2.58,
    "CAIXABANK" =>2.51,
    "INDRA" => 2.38,
    "FLUIDRA" => 2.36,
    "BBVA" => 2.34

];

foreach ($valores_top5_subidas as $key => $value) {
   echo "Clave $key, Valor $value<br/>";

}
$suma = array_sum($valores_top5_subidas);
$media = $suma/sizeof( $valores_top5_subidas );
echo "La media de subidas es $media";

?>
