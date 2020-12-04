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
            <h1>Al Titular: <?php echo $re['titular']; ?></h1>
            <form action="agregar.php" method="post">
                <input style="visibility: hidden;" value="<?php echo $re["id"] ?>" type="id" class="form-control" name="id" id="id" aria-describedby="id">
                <div class="form-row">
                    <div class="col-md-4 mb-4">
                        <label for="titular">Renovo Año</label>
                        <input type="number" class="form-control" name="renovo" id="renovo" aria-describedby="renovo">
                    </div>

                    <div class="col-md-4 mb-4">
                        <label for="nacionalidad">Rec. N°</label>
                        <input type="number" class="form-control" name="rec" id="rec" aria-describedby="rec">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <?php endwhile; ?>
    </div>

</body>

</html>