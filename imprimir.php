<?php
require "conexion.php";
$id = $_GET["id"];
$sqlMaxCodigo = "SELECT * FROM filiacion WHERE id=$id";
$res = $conn->prepare($sqlMaxCodigo);
$res->execute();

$asoc = "SELECT * FROM renovacion WHERE titularid=$id";
$res2 = $conn->prepare($asoc);
$res2->execute();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <?php while ($re = $res->fetch(PDO::FETCH_ASSOC)) : ?>
            <h1>Municipalidad de clorinda - Filiación del conductor</h1>
            <h3 style="text-align: center;">Direccion de Tránsito</h3>
            <!-- <div class="card mb-3" style="max-width: 540px;margin-top: 30px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo $re['foto']; ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                <h5 class="mt-0">Titular: <?php echo $re['titular']; ?></h5>
                                <h5 class="mt-0">Nacion: <?php echo $re['nacionalidad']; ?></h5>
                                <h5 class="mt-0">Fecha de nacimiento: <?php echo $re['fechadenacimiento']; ?></h5>
                                <h5 class="mt-0">Domicilio: <?php echo $re['domicilio']; ?></h5>
                                <h5 class="mt-0">Licencia N°: <?php echo $re['licencia']; ?></h5>
                                <h5 class="mt-0">Grupo sanguinio: <?php echo $re['gruposanguinio']; ?></h5>
                                <h5 class="mt-0">RH: <?php echo $re['rh']; ?></h5>
                                <h5 class="mt-0">Disp: <?php echo $re['disp']; ?></h5>
                                <h5 class="mt-0">Expediente N°: <?php echo $re['expediente']; ?></h5>
                                <h5 class="mt-0">Letra: <?php echo $re['letra']; ?></h5>
                                <h5 class="mt-0">Año: <?php echo $re['anio']; ?></h5>
                                <h5 class="mt-0">Fecha: <?php echo $re['fecha']; ?></h5>
                                <h5 class="mt-0">Cat: <?php echo $re['cat']; ?></h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="media" style="margin-top: 30px;">
                <img style="max-width: 160px" src="<?php echo $re['foto']; ?>" class="card-img" alt="1">
                <div class="media-body">
                    <div class="row" style="margin-left: 10px;">
                        <div class="col-sm">
                            <h5 class="mt-0">Titular: <?php echo $re['titular']; ?></h5>
                            <h5 class="mt-0">Nacion: <?php echo $re['nacionalidad']; ?></h5>
                        </div>
                        <div class="col-sm">
                            <h5 class="mt-0">Fecha de nacimiento: <?php echo $re['fechadenacimiento']; ?></h5>
                            <h5 class="mt-0">Domicilio: <?php echo $re['domicilio']; ?></h5>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10px;">
                        <div class="col-sm">
                            <h5 class="mt-0">Licencia N°: <?php echo $re['licencia']; ?></h5>
                            <h5 class="mt-0">Grupo sanguinio: <?php echo $re['gruposanguinio']; ?></h5>
                        </div>
                        <div class="col-sm">
                            <h5 class="mt-0">RH: <?php echo $re['rh']; ?></h5>
                            <h5 class="mt-0">Disp: <?php echo $re['disp']; ?></h5>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10px;">
                        <div class="col-sm">
                            <h5 class="mt-0">Expediente N°: <?php echo $re['expediente']; ?></h5>
                            <h5 class="mt-0">Letra: <?php echo $re['letra']; ?></h5>
                        </div>
                        <div class="col-sm" style="margin-left: 10px;">
                            <h5 class="mt-0">Año: <?php echo $re['anio']; ?></h5>
                            <h5 class="mt-0">Fecha: <?php echo $re['fecha']; ?></h5>
                            <h5 class="mt-0">Cat: <?php echo $re['cat']; ?></h5>
                        </div>
                    </div>

                    <table class="table" style="margin-top: 10px;">
                        <thead>
                            <tr>
                                <th scope="col">Renovo Año</th>
                                <th scope="col">Rec. N°</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($ree = $res2->fetch(PDO::FETCH_ASSOC)) : ?>

                                <tr>

                                    <td><?php echo $ree['renovo']; ?></td>
                                    <td><?php echo $ree['rec']; ?></td>

                                </tr>
                            <?php endwhile; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

</body>
<script>
     window.print();
</script>

</html>