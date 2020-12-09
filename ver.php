<?php
require "header.php";
require "conexion.php";
$id = $_GET["id"];
$sqlMaxCodigo = "SELECT * FROM filiacion WHERE id=$id";
$res = $conn->prepare($sqlMaxCodigo);
$res->execute();

$asoc = "SELECT * FROM renovacion WHERE titularid=$id";
$res2 = $conn->prepare($asoc);
$res2->execute();
?>

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
                            <a href="imprimir.php?id=<?php echo $re['id']; ?>" target="_blank" class="btn btn-primary">Imprimir</a>
                            <a href="agregarDatos.php?id=<?php echo $re['id']; ?>" target="_blank" class="btn btn-primary">Agregar datos</a>
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
                </div>
            </div>
        <?php endwhile; ?>
    </div>

</body>

</html>