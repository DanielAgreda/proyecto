<?php

if(isset($_POST['registro-ticket'])){

    $ticket = mysqli_real_escape_string($conexion, $_POST['ticket']);
    $descripcion = mysqli_real_escape_string($conexion, $_POST['ticket-descripcion']);

    $sqlticket = "SELECT * FROM ticket";
    $resultado = $conexion->query($sqlticket);
    $rows = $resultado->num_rows;

    if ($rows > 0){
        $rows = $resultado->fetch_assoc();
        echo "<script>
                alert('El ticket ya existe');
                window.location = 'ticket.php';
            </script>";
    } else {
        $sql = "INSERT INTO ticket (titulo, descripcion) VALUES ('$ticket','$descripcion')";
        $resultadoticket = $conexion->query($sql);
        $filas = $resiltado->num_rows;
        if ($filas > 0){
            $filas = $resultado->fetch_assoc();
            echo "<script>
                    alert('Ticket realizado correctamente');
                    window.location = 'ticket.php';
                </script>";
        } else {
            echo "<script>
                    alert('Error al realizar el ticket');
                    window.location = 'ticket.php';
                </script>";
        }
    }

}

?>