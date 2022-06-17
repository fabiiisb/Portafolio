<?php
require_once 'logic/fichero-global.php'; 
if(isset($_SESSION['usuario'])){
  


  include("logic/connection-crud.php")  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/crud.css">
    <link rel="icon" href="img/favicon-admin.ico">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <script src="scripts\sweetalertcrud.js"></script>

    

    <title>Admin Panel</title>
</head>
<body>

<a class="a" href="logic/excel.php"><i class="fas fa-file-excel"></i></a>
<a onclick="insertar()" class="a"><i class="fas fa-user-plus"></i> </a>
<a id="destroy" class="a" onclick="cerrarses()"> <i class="fas fa-times"> </i> </a>
<a  id="reload" onclick="window.location.reload();" class="a"> <i class="fas fa-redo-alt"> </i> </a>
<a id="back" class="a" href="index.php"> <i class="fas fa-chevron-left"> </i> </a>



<script>
  $(document).ready(function(){
    $("#search").keyup(function(){
      $.ajax({
        url:'logic/backend.php',
        type:'post',
        data: {search: $(this).val()},
        success:function(result){
          $("#result").html(result)
        }
      })
    })
  })
</script>



<div class="div-buscar"><input placeholder="Buscar" type="TEXT" id="search"></div>
<span id="result"></span>



<br>

<table>

  <thead>
    <tr class="col">
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Asunto</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>

 
    <?php
      $query = "SELECT * FROM contacto";
      $result_contacto = mysqli_query($conn, $query);
      while($row = mysqli_fetch_array($result_contacto)){?>
        <tr>
          <td data-label="Id:" name="id"> <?php echo $row['id']?> </td>
          <td data-label="Nombre:" name="name"> <?php echo $row['nombre']?> </td>
          <td data-label="Correo:" name="email"> <?php echo $row['correo']?> </td>
          <td data-label="Asunto:" name="subject"> <?php echo $row['asunto']?> </td>
          <td data-label="Mensaje:" name="menssage"> <?php echo $row['mensaje']?> </td>
           <td data-label="Accion" name="delete"> <a onclick="eliminar()" >Eliminar <i class="far fa-trash-alt"></i></a></td>
         </tr>

      <script>

        function eliminar(){

          Swal.fire({
              title: '¿Estas seguro?',
              text: "El mensaje será eliminado",
              icon: 'warning',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Eliminar',
              cancelButtonText:'Cancelar',
              showConfirmButton: false,
              footer:`<a  href="logic/delete.php?id=<?php echo $row['id']?>">Eliminar</a>`,
              
              
            }).then((result) => {
              if (result.isConfirmed) {
            
                Swal.fire(
                  
                  '¡Eliminado!',
                  'El mensaje ha sido eliminado.',
                  'success'
                )
              }
            })
        
      }

    
 </script>

      <?php  } ?>

   
    
  </tbody>
</table>




<div class="go-top-container">
      <div class="go-top-button">
        <i class="fas fa-chevron-up"></i>
      </div>
</div>






<script src="scripts\maincrud.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html> 
<?php 

  }else{
    header("Location: login.php");
  }

?>