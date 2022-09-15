<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Estudiantes Salón</title>
</head>
<body>
    <div class="container-xxl" style="width:600px; margin: 0 auto;">
    <h1>Cálculo de la Depreciación</h1>
    <fieldset>
    <legend> Porcentaje estudiantes </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese el precio original: <input type="number" name="og" /></p>
    <p>Ingrese la vida útil: <input type="number" name="vu" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
    </fieldset>
</div>
<?php

           
if($_POST){
   $og = $_POST["og"];
   $vu = $_POST["vu"];

    require_once ("calculo.php");
    $obj = new calculo($og, $vu);



?>

<div class="container-xxl" style="width:600px; margin: 0 auto;">
    <h2 style="text-align:center">Precio original: <?php echo $obj->getog(); ?></h2>
    <h2 style="text-align:center">Vida Útil: <?php echo $obj->getvu(); ?></h2>
</div>


<div class="container-xxl">
    <?php echo $obj->vpa($og, $vu); ?>
</div>

    <?php } ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>