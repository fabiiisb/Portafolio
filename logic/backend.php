<?php
include 'db.inc.php';

if(isset($_POST['search'])){
    $search = $_POST['search'];
    $search = "%$search%";
    if(strlen($search) > 2){
        $sql = "SELECT * FROM contacto WHERE nombre LIKE :s || correo LIKE :s";
        
        $stmt = $db->prepare($sql);
        $stmt ->bindParam('s',$search);
        $stmt ->execute();
        while($row=$stmt->fetch()){
            $id = $row['id'];
            $nombre= $row['nombre'];
            $correo= $row['correo'];
            $asunto= $row['asunto'];
            $mensaje= $row['mensaje'];
            
            echo "
            
            
            <table>

            <thead>
                <tr id='colsearch'class='col'>
                <th scope='col'>Id</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Correo</th>
                <th scope='col'>Asunto</th>
                <th scope='col'>Mensaje</th>
                <th scope='col'>Acción</th>
                </tr>
            </thead>

            <tbody>
            <tr>
            <td data-label='Id:' name='id'> $id </td>
            <td data-label='Nombre:' name='name'> $nombre </td>
            <td data-label='Correo:'' name='email'> $correo </td>
            <td data-label='Asunto:' name='subject'> $asunto </td>
            <td data-label='Mensaje:' name='menssage'> $mensaje </td>
             <td data-label='Accion' name='delete'> <a id='deletesearch' onclick='eliminar()' >Eliminar <i class='far fa-trash-alt'></i></a></td>
           </tr>
  
            </tbody>

            </table>
            
            


            ";

        }
    }
}
?>
