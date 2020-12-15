<?php
require "conexion.php";

$records = $conn->prepare('SELECT * FROM `articulos` WHERE 1');
        
    
        $records->execute();
    
        $results = ($records->fetchAll(PDO::FETCH_ASSOC));

$articulos_x_pagina=3;

$total_articulos_db=$records->rowCount();

$paginas=$total_articulos_db/3;

$paginas=ceil($paginas);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container my-5">
<?php
if (!$_GET) {
    header('location: index.php?paginas=1');
}

$iniciar=($_GET['paginas']-1)*$articulos_x_pagina;
$sql_articulos="SELECT * FROM `articulos` limit :iniciar , :narticulo ";
$sentencia_articulos=$conn->prepare($sql_articulos);
$sentencia_articulos->bindParam(':iniciar',$iniciar,PDO::PARAM_INT);
$sentencia_articulos->bindParam(':narticulo',$articulos_x_pagina,PDO::PARAM_INT);
$sentencia_articulos->execute();
$resultados_articulos=$sentencia_articulos->fetchAll();


?>
<h1>
Paginacion
</h1>

<?php  foreach ($resultados_articulos as $articulo):?>
<div class="alert alert-primary" role="alert">
 <?php echo $articulo['titulo'];?>
</div>
<?php  endforeach ?>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?php echo $_GET['paginas']<=1 ? 'disabled' : '' ?>">
    <a class="page-link" href="index.php?paginas=<?php echo $_GET['paginas']-1?>">anterior</a>
    </li>



    <?php for ($i=0; $i < $paginas ; $i++):?>
    <li class="page-item <?php echo $_GET['paginas']==$i+1 ? 'active' : '' ?>">
     <a class="page-link" href="index.php?paginas=<?php echo $i+1;?>"><?php echo $i+1;?></a>
    </li>
    <?php endfor ?>
    



    <li class="page-item <?php echo $_GET['paginas']>=$paginas ? 'disabled' : '' ?>">
    <a class="page-link" href="index.php?paginas=<?php echo $_GET['paginas']+1?>">siguiente</a>
    </li>
  </ul>
</nav>

</div>















    
</body>
</html>