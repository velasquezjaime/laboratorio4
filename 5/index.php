

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<br><br><br>
<div class="container-xxl" style="width:500px; margin 0 auto;">
<?php
    require_once("Componentes.php");        
    Componentes::MyModal("Ir a Google", 
                        "danger", 
                        "Modal para ir a google",
                        "da clic en el botón Google para abrir el buscador", 
                        "Cerrar",
                        "Abrir Google.com",
                        "https://www.google.com/?hl=es");


    ?>
    <br><br><br><br>
</div>

<div class="container-xxl" style="width:500px; margin 0 auto;">
<form name="sumar" action="index.php" method="post">
    <p style="text-align:center">Ingrese el mensaje que desea desplegar: <input type="text" name="texto" /></p>
    <p style="text-align:center"><button type="button" class="btn btn-success">Enviar</button></p>
    
    </form>

<?php
 if($_POST){
    $texto = $_POST["texto"];
    Componentes::MyAlert($texto);
    }

?>
</div>

    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>