<?php 
   include("connection-crud.php");

   if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM contacto WHERE id=$id";
        $result=mysqli_query($conn, $query);
        if(!$result){
            die("<h1 style='font-size:100px; color:#C70039;''>No se pudo eliminar </h1> <br><a style='text-decoration:none; color:#C70039;  border: 1px solid #C00; ' href='javascript:history.back()'>VOLVER</a>");
        }
   }

   $_SESSION['mensaje']='Task removed successfully';


   header("Location: ../crud.php");
?>