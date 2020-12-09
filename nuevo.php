  <?php
  require "header.php";
  ?>
  <div class="container">
    <h1>Formulario</h1>
    <form action="insert.php" method="post" enctype='multipart/form-data'>
      <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="titular">Titular</label>
          <input type="text" class="form-control" name="titular" id="titular" aria-describedby="titular">
        </div>

        <div class="col-md-4 mb-4">
          <label for="nacionalidad">Nacionalidad</label>
          <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" aria-describedby="nacionalidad">
        </div>

        <div class="col-md-4 mb-4">
          <label for="fechadenacimiento">Fecha de Nacimiento</label>
          <input type="date" class="form-control" name="fechadenacimiento" id="fechadenacimiento" aria-describedby="fechadenacimiento">
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="domicilio">Foto</label>
          <input type="file" class="form-control" name="foto" id="foto" aria-describedby="foto">
        </div>
        <div class="col-md-3 mb-3">
          <label for="domicilio">Domicilio</label>
          <input type="text" class="form-control" name="domicilio" id="domicilio" aria-describedby="domicilio">
        </div>
        <div class="col-md-3 mb-3">
          <label for="licencia">Licencia N°</label>
          <input type="number" class="form-control" name="licencia" id="licencia" aria-describedby="licencia">
        </div>
        <div class="col-md-2 mb-2">
          <label for="CAT">CAT.</label>
          <input type="text" class="form-control" name="cat" id="cat" aria-describedby="cat">
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="gruposanguinio">Grupo sanguinio</label>
          <input type="text" class="form-control" name="gruposanguinio" id="gruposanguinio" aria-describedby="gruposanguinio">
        </div>

        <div class="col-md-4 mb-3">
          <label for="rh">RH</label>
          <input type="text" class="form-control" name="rh" id="rh" aria-describedby="rh">
        </div>

        <div class="col-md-4 mb-3">
          <label for="disp">Disp N°</label>
          <input type="number" class="form-control" name="disp" id="disp" aria-describedby="disp">
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="expediente">Expediente N°</label>
          <input type="number" class="form-control" name="expediente" id="expediente" aria-describedby="expediente">
        </div>

        <div class="col-md-3 mb-3">
          <label for="letra">Letra</label>
          <input type="text" class="form-control" name="letra" id="letra" aria-describedby="letra">
        </div>


        <div class="col-md-3 mb-3">
          <label for="anio">Año</label>
          <input type="number" class="form-control" name="anio" id="anio" aria-describedby="año">
        </div>

        <div class="col-md-3 mb-3">
          <label for="fecha">Fecha</label>
          <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="fecha">
        </div>

      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

  </div>