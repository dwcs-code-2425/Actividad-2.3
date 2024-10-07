<?php
const PAGO_HORA_EXTRA  = 12.5;

$horas_extra = array(0, 0, 1, 0.5, 2, 0, 0);

$suma = array_sum($horas_extra);
//Outra opción
// $suma = 0;
// foreach ($horas_extra as $v) {
//     $suma += $v;
// }

$salario_extra = $suma * PAGO_HORA_EXTRA;

echo "O salario extra é $salario_extra";
