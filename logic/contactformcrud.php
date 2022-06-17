<?php
include 'connection.php';

if(isset($_POST['submit'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['mail']) >= 1 && strlen($_POST['subject']) >= 1 &&    strlen($_POST['message']) >= 1 ){
        $name=trim($_POST['name']);
        $mail=trim($_POST['mail']);
        $subject=trim($_POST['subject']);
        $message=trim($_POST['message']);

        $consulta="INSERT INTO contacto(nombre, correo, asunto, mensaje) VALUES ('$name','$mail','$subject','$message')";
        
        $resultado=mysqli_query($conectar,$consulta);

        if($resultado){
          
            header("Location: ../crud.php");
        }else{
          
        };

    } else{
        ?>
            <h3 class="bad">Por favor complete los campos</h3>
        <?php
    }
}

?>