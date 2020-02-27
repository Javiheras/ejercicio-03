<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

echo "hola Mundo";
echo "nueva linea";

$fecha = Carbon::now();

$fecha->addDays(20);

echo $fecha->format('d-m-Y');