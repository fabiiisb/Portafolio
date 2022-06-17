<?php
 session_start();
 $usuario=$_POST['usuario'];
 $contraseña=$_POST['contraseña'];
 
 

 $conexion=mysqli_connect("localhost","id18419491_fabiiisb","LwL{^GPb0$*N7rn{","id18419491_portafolio_db");
 
 $consulta="SELECT * FROM login_admin WHERE usuario='$usuario' AND contraseña= '$contraseña'";
 $resultado=mysqli_query($conexion,$consulta);

 $filas=mysqli_num_rows($resultado);

 if($filas){
     
     $_SESSION['usuario']=$usuario;
     header("Location: ../crud.php");
    
    
 }else{
 
     ?>
    <script>
        
        alert("Incorrecto")
        window.location = "../login.php";
    </script>
    <?php
        // header("Location: ../login.php");

   
    ?>
    
    
    
    <?php
    

   
   
 }
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
