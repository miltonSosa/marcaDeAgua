# marcaDeAgua
script para poder realar marcas en archivos pdf, sirve tanto para poner fondos como sellos (tanto para pdf de textos como para los pdf escaneados)

#instalar librerias
```
{ 
    "require": {
        "php": ">=5.0.0",
        "mikehaertl/php-shellcommand": "^1.0.2",
        "mikehaertl/php-tmpfile": "^1.0.0",
	"mikehaertl/php-pdftk": "*"
    },
    "autoload": {
        "psr-4": {
            "mikehaertl\\pdftk\\": "src/"
        }
    },
    "suggest": {
        "mikehaertl/pdftk2-precise-amd64": "pdftk 2 binary for Ubuntu 12.04 LTS (amd64)"
    }
}
```

#instalar dependecia pdftk 
```sudo apt-get install pdftk```

########## EJEMPLO ##########
#crear elemento pdf
```
$pdf = new \mikehaertl\pdftk\Pdf('prueba.pdf', [
    'command' => '/usr/bin/pdftk',
    'useExec' => true,
]);
```
#para poner sello (si el pdf es una imagen lo pone arriba)
```
$pdf->stamp('logo.pdf')
    ->saveAs('guardar.pdf');
```
#para poner un fondo (si el pdf es una imagen no se va a ver)
```
$pdf->background('logo.pdf')
    ->saveAs('guardar.pdf');
```

#para dividir un pdf
```
$pdf->burst('page_%d.pdf');  
```
