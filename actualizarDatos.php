<?php
require "conexion.php";
$id = $_GET["id"];
$sqlMaxCodigo = "SELECT * FROM filiacion WHERE id=$id";
$res = $conn->prepare($sqlMaxCodigo);
$res->execute();
require "header.php";
?>
<div class="container">
    <h1>Formulario</h1>
    <?php while ($re = $res->fetch(PDO::FETCH_ASSOC)) : ?>
        <form action="update.php" method="post" enctype='multipart/form-data'>
            <input style="visibility: hidden2;" value="<?php echo $re["id"] ?>" type="id" class="form-control" name="id" id="id" aria-describedby="id">
            <div class="form-row">
                <div class="col-md-4 mb-4">
                    <label for="titular">Titular</label>
                    <input value="<?php echo $re["titular"] ?>" type="text" class="form-control" name="titular" id="titular" aria-describedby="titular">
                </div>

                <div class="col-md-4 mb-4">
                    <label for="nacionalidad">Nacionalidad</label>
                    <input value="<?php echo $re["nacionalidad"] ?>" type="text" class="form-control" name="nacionalidad" id="nacionalidad" aria-describedby="nacionalidad">
                </div>

                <div class="col-md-4 mb-4">
                    <label for="fechadenacimiento">Fecha de Nacimiento</label>
                    <input value="<?php echo $re["fechadenacimiento"] ?>" type="date" class="form-control" name="fechadenacimiento" id="fechadenacimiento" aria-describedby="fechadenacimiento">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="domicilio">Foto</label>
                    <input value="<?php echo $re["foto"] ?>" type="file" class="form-control" name="foto" id="foto" aria-describedby="foto">
                    <small id="emailHelp" class="form-text text-muted">Asegurese de tener la foto original antes de dar al boton enviar.</small>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="domicilio">Domicilio</label>
                    <input value="<?php echo $re["domicilio"] ?>" type="text" class="form-control" name="domicilio" id="domicilio" aria-describedby="domicilio">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="licencia">Licencia N°</label>
                    <input value="<?php echo $re["licencia"] ?>" type="number" class="form-control" name="licencia" id="licencia" aria-describedby="licencia">
                </div>
                <div class="col-md-2 mb-2">
                    <label for="CAT">CAT.</label>
                    <input value="<?php echo $re["cat"] ?>" type="text" class="form-control" name="cat" id="cat" aria-describedby="cat">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="gruposanguinio">Grupo sanguinio</label>
                    <input value="<?php echo $re["gruposanguinio"] ?>" type="text" class="form-control" name="gruposanguinio" id="gruposanguinio" aria-describedby="gruposanguinio">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="rh">RH</label>
                    <input value="<?php echo $re["rh"] ?>" type="text" class="form-control" name="rh" id="rh" aria-describedby="rh">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="disp">Disp N°</label>
                    <input value="<?php echo $re["disp"] ?>" type="number" class="form-control" name="disp" id="disp" aria-describedby="disp">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="expediente">Expediente N°</label>
                    <input value="<?php echo $re["expediente"] ?>" type="number" class="form-control" name="expediente" id="expediente" aria-describedby="expediente">
                </div>

                <div class="col-md-3 mb-3">
                    <label for="letra">Letra</label>
                    <input value="<?php echo $re["letra"] ?>" type="text" class="form-control" name="letra" id="letra" aria-describedby="letra">
                </div>


                <div class="col-md-3 mb-3">
                    <label for="anio">Año</label>
                    <input value="<?php echo $re["anio"] ?>" type="number" class="form-control" name="anio" id="anio" aria-describedby="año">
                </div>

                <div class="col-md-3 mb-3">
                    <label for="fecha">Fecha</label>
                    <input value="<?php echo $re["fecha"] ?>" type="date" class="form-control" name="fecha" id="fecha" aria-describedby="fecha">
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-4 mb-4">
                    <label for="renovo">Renovo año</label>
                    <input value="<?php echo $re["renovo"] ?>" type="date" class="form-control" name="renovo" id="renovo" aria-describedby="renovo">
                </div>

                <div class="col-md-4 mb-4">
                    <label for="rec">Rec N°</label>
                    <input value="<?php echo $re["rec"] ?>" type="number" class="form-control" name="rec" id="rec" aria-describedby="rec">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    <?php endwhile; ?>
</div>