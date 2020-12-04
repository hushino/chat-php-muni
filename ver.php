<?php
require "header.php";
require "conexion.php";
$id = $_GET["id"];
$sqlMaxCodigo = "SELECT * FROM filiacion WHERE id=$id";
$res = $conn->prepare($sqlMaxCodigo);
$res->execute();
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
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

</body>

</html>