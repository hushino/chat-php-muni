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
    
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

  </div>