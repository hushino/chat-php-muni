<?php
require "header.php";
?>

<body>
        <?php
        require "conexion.php";
        $sqlMaxCodigo = "SELECT * FROM filiacion";
        $res = $conn->prepare($sqlMaxCodigo);
        $res->execute();
        ?>
        <div class="container">

                <?php while ($re = $res->fetch(PDO::FETCH_ASSOC)) : ?>
                        <ul class="list-group" style="margin-top: 10px;">
                                <li class="list-group-item"> <?php echo $re['titular']; ?></li>
                        </ul>
                <?php endwhile; ?>

        </div>
</body>

</html>