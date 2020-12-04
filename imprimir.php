<?php
require "conexion.php";
$id = $_GET["id"];
$sqlMaxCodigo = "SELECT * FROM filiacion WHERE id=$id";
$res = $conn->prepare($sqlMaxCodigo);
$res->execute(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <?php while ($re = $res->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="card mb-3" style="max-width: 540px;margin-top: 30px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo $re['foto']; ?>" class="card-img" alt="1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $re['titular']; ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

</body>
<script>
    window.print();
</script>

</html>