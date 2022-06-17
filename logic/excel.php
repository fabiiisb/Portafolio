

<?php
header("Content-Type: aplication/xlsx");

header("Content-Disposition: attachment; filename= ListaDeMensajes.xls");

?>

<table>

  <thead>
    <tr class="col">
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Asunto</th>
      <th scope="col">Mensaje</th>
      
    </tr>
  </thead>
  <tbody>

 
    <?php
      include("connection-crud.php");
      $query = "SELECT * FROM contacto";
      $result_contacto = mysqli_query($conn, $query);
      while($row = mysqli_fetch_array($result_contacto)){?>
        <tr>
          <td data-label="Id:" name="id"> <?php echo $row['id']?> </td>
          <td data-label="Nombre:" name="name"> <?php echo $row['nombre']?> </td>
          <td data-label="Correo:" name="email"> <?php echo $row['correo']?> </td>
          <td data-label="Asunto:" name="subject"> <?php echo $row['asunto']?> </td>
          <td data-label="Mensaje:" name="menssage"> <?php echo $row['mensaje']?> </td>
           

      <?php  } ?>

   
    
  </tbody>
</table>


