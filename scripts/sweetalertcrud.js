function insertar(){
    Swal.fire({
        title: 'Ingresar nuevo usuario',
        html: `<form class="contact-form" name="form-work"  action="logic/contactformcrud.php"  method="post">

        <Input id="input-nombre" name="name" type="text" placeholder="Nombre" maxlength="40" required></Input>
        <Input id="input-correo" name="mail" type="email" placeholder="Correo" maxlength="60" required></Input>
        <Input id="input-asunto" name="subject" type="text" placeholder="Asunto" maxlength="50" required></Input>
        <textarea id="input-mensaje" name="message"  placeholder="Mensaje" maxlength="500" required></textarea></Input>
        <Button id="button-submit" name="submit" type="submit" >Insertar <i class="fas fa-user-plus"></i></Button>

    </form>`
    ,
    showCancelButton: true,
    showConfirmButton: false,

      })
}


function cerrarses(){

    Swal.fire({
        title: '¿Desea cerrar sesión?',
        text: "Se cerrará su sesión",
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText:'Cancelar',
        showConfirmButton: false,
        footer:`<a href="logic/destroysession.php">Cerrar sesión</a>`,
        
        
      })
    
    }

