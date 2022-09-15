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
    <fieldset>
    <legend> Porcentaje estudiantes </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese la cantidad de estudiantes: <input type="number" name="cant" /></p>
    <p>Ingrese la cantidad de estudiantes mujeres: <input type="number" name="muj" /></p>
    <p>Ingrese la cantidad de estudiantes hombres: <input type="number" name="hom" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
    </fieldset>
</div>
<?php

           
if($_POST){
   $cant = $_POST["cant"];
   $muj = $_POST["muj"];
   $hom = $_POST["hom"];

    require_once ("calculo.php");
    $obj = new calculo($cant, $muj, $hom);



?> 
    <div class="container-xxl">
        <table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
            <thead>
                <tr>
                    <th scope="col">Total de estudiantes</th>
                    <th scope="col">Cantidad de mujeres</th>
                    <th scope="col">Cantidad de hombres</th>
                    <th scope="col">Porcentaje hombres</th>
                    <th scope="col">Porcentaje mujeres</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td><?php echo $obj->getCant();  ?></td>
                    <td><?php echo $obj->getmuj(); ?></td>
                    <td><?php echo $obj->gethom(); ?></td>
                    <td><?php echo round($obj->perchom($hom, $cant)); ?>%</td>
                    <td><?php echo round($obj->percmuj($muj, $cant)); ?>%</td>

                    
                </tr>
            </tbody>
        </table>
    </div>
    <?php } ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>