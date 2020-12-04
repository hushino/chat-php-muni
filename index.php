<?php
require "header.php";
?>

<body>
        <?php
        require "conexion.php";
        $sqlMaxCodigo = "SELECT * FROM filiacion ORDER BY id DESC LIMIT 10 ";
        $res = $conn->prepare($sqlMaxCodigo);
        $res->execute();
        ?>
        <div class="container">

                <?php while ($re = $res->fetch(PDO::FETCH_ASSOC)) : ?>

                        <div class="card mb-3" style="max-width: 540px;margin-top: 30px;">
                                <div class="row no-gutters">
                                        <div class="col-md-4">
                                                <img src="<?php echo $re['foto']; ?>" class="card-img" alt="foto">
                                        </div>
                                        <div class="col-md-8">
                                                <div class="card-body">
                                                        <h5 class="card-title"><?php echo $re['titular']; ?></h5>
                                                        <p class="card-text">Nacionalidad: <?php echo $re['nacionalidad']; ?></p>
                                                        <p class="card-text"><small class="text-muted"></small></p>
                                                        <a href="ver.php?id=<?php echo $re['id']; ?>" class="btn btn-primary">Ver</a>

                                                </div>
                                        </div>
                                </div>
                        </div>

                <?php endwhile; ?>

        </div>
</body>

</html>