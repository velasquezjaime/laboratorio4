<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Contraseñas Cifradas</title>
</head>
<body>
    <div class="container-xxl" style="width:600px; margin: 0 auto;">
    <fieldset>
    <legend> Cifrado de texto </legend>
    <form name="sumar" action="index.php" method="post">
    <p>Ingrese la contraseña a cifrar: <input type="text" name="pass" /></p>
    <p>Ingrese el salt: <input type="text" name="salt" /></p>
    <p style="text-align:center"><input type="submit" name="sumar" value="Calcular" /></p>
    </form>
    </fieldset>
</div>
<?php

           
if($_POST){
   $pass = $_POST["pass"];
   $salt = $_POST["salt"];

    require_once ("cifrar.php");
    $obj = new calculo($pass, $salt);



?> 
    <div class="container-xxl">
        <table class="table table-light table-striped table-hover table-bordered table-xxl table-responsive-xxl">
            <thead>
                <tr>
                    <th scope="col">Contraseña a cifrar</th>
                    <th scope="col"><?php echo $obj->getpass();?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> Salt </th>
                    <th scope="row"> <?php echo $obj->getsalt(); ?> </th>
                </tr>
                <tr>
                    <th scope="row"> base64 </th>
                    <td> <?php echo $obj->base($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> md5 </th>
                    <td> <?php echo $obj->md5($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> sha1 </th>
                    <td> <?php echo $obj->sha1($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> crc32 </th>
                    <td> <?php echo $obj->crc32($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> crypt </th>
                    <td> <?php echo $obj->crypt($pass, $salt); ?>   </td>
                </tr>
                <tr>
                    <th scope="row"> sha224 </th>
                    <td> <?php echo $obj->sha224($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> sha512 </th>
                    <td> <?php echo $obj->sha512($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> whirlpool </th>
                    <td> <?php echo $obj->whirlpool($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> snefru </th>
                    <td> <?php echo $obj->snefru($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> haval128,3 </th>
                    <td> <?php echo $obj->haval1283($pass, $salt); ?> </td>
                </tr>
                <tr>
                    <th scope="row"> haval128,5 </th>
                    <td> <?php echo $obj->haval1285($pass, $salt); ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php } ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>