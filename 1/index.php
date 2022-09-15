<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Salario Neto</title>
</head>
<body>
<div class="container-xxl" style="width:500px; margin: 0 auto;" >
<br>
<fieldset>
        <legend> Cálculo Salario Neto </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese nombre del trabajador: <input type="text" name="nombre" /></p>
    <p>Ingrese las horas trabajas: <input type="number" name="ht" /></p>
    <p>Ingrese el salario por hora: <input type="number" name="pph" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
</fieldset>
</div>

<?php

if($_POST){
        $nombre = $_POST["nombre"];
        $ht = $_POST["ht"];
        $pph = $_POST["pph"];


        require_once("calculo.php");
        $obj = new calculo($nombre, $ht, $pph);

        ?>
<div class="container-xxl">
    <table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Horas Trabajadas</th>
                <th scope="col">Salario por hora</th>
                <th scope="col">Salario Bruto</th>
                <th scope="col">Descuento</th>
                <th scope="col">Salario Neto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $obj->getNombre(); ?></th>
                <td><?php echo $obj->getht();?></td>
                <td><?php echo $obj->getpph(); ?>$</td>
                <td><?php echo $obj->salbrut($ht, $pph);?>$</td>
                <td><?php echo $obj->desc($ht, $pph); ?>$</td>
                <td><?php echo $obj->salnet($ht, $pph);?>$</td>
            </tr>
        </tbody>
    </table>
</div>

        <?php
}
        ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>