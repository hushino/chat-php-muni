  <?php
  require "header.php";
  ?>
  <div class="container">
    <h1>Rendicion de Caja Chinca N°1</h1>
<!--     <form action="insert.php" method="post" enctype='multipart/form-data'>
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
    </form> -->
<div class="container">
  <div class="row">
    <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="form-group">
          <form name="add_name" id="add_name">
            <table class="table table-bordered table-hover" id="dynamic_field">
              <tr>
                <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                <td><input type="text" name="email[]" placeholder="Enter your Email" class="form-control name_email"/></td>
                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>  
              </tr>
            </table>
            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
          </form>
        </div>
      </div>
    <div class="col-md-1"></div>
  </div>
</div>
  </div>

  <script type="text/javascript">
  $(document).ready(function(){

    var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list"/></td><td><input type="text" name="email[]" placeholder="Enter your Email" class="form-control name_email"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
    });

    $(document).on('click', '.btn_remove', function(){  
      var button_id = $(this).attr("id");   
      $('#row'+button_id+'').remove();  
    });

    $("#submit").on('click',function(){
      var formdata = $("#add_name").serialize();
      $.ajax({
        url   :"action.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#add_name")[0].reset();
        }
      });
    });
  });
</script>