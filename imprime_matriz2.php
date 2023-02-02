<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array de 4 filas por 5 columnas</title>

    <style>
    body {
        text-align: center;
        background-color: black;
        color: white;
    }



    table,
    tr,
    td {
        border: 3px red solid;
        text-align: center;
        margin: auto;
        padding: 5px;
    }

    tr,
    td {
        margin: 3px;
    }

    p spam {

        color: green;
        font-weight: 900;

    }

    .total {
        background-color: aqua;
    }
    </style>
</head>

<body>
    <h1>Programacion PHP</h1>
    <h3>Array de 4 filas por 5 columnas</h3>
    <p>
        Escribe un programa que genere 20 números aleatorios enteros. Estos números se deben introducir en un array de 4
        filas por 5 columnas. El programa mostrará las sumas parciales de filas y columnas igual que si de una hoja de
        cálculo se tratara. La suma total debe aparecer en la esquina inferior derecha.

    </p>
    <?php 
$sumarows=0;
$sumacolu=0;
$totalrows=0;
$totalcolun=0;
$total=0;
$e=0;

$i=0;
echo "<table><tr>";
for($e=0; $e<=3;$e++){
	for($i=0;$i<=4;$i++){
$mat[$e][$i]=rand(10,100);
echo " <td><p> Col (" . ($i+1) . ") Fila (". ( $e+1) . ") =<spam> " .  $mat[$e][$i] . "</spam> </p></td>";

$sumarows=$sumarows + $mat[$e][$i];
}
$totalrows=$totalrows + $sumarows;
echo " <td><p>  Σ Fila " . ($e+1) . " = <spam> " . $sumarows . "</spam> </p></td> </tr>";
$sumarows=0;
}
	for($i=0;$i<=4;$i++){
for($e=0; $e<=3;$e++){
$sumacolu=$sumacolu+ $mat[$e][$i];
}
echo " <td><p>Σ Colum " . ($i+1) . "=<spam>". $sumacolu . "</spam></sp></td> ";
$totalcolun=$totalcolun + $sumacolu ;
$sumacolu=0;
}
$total=$totalcolun+$totalrows;
 echo " <td class='total' ><p >  Total = " . $total  . "</p></td></tr></table> ";
 ?>
</body>

</html>