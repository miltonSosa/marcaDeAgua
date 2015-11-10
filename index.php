<?php
require 'vendor/autoload.php';

$pdf = new \mikehaertl\pdftk\Pdf($archivo, [
    'command' => '/usr/bin/pdftk',
    'useExec' => true,
]);
$pdf->stamp($marca)
    ->saveAs($salida);


