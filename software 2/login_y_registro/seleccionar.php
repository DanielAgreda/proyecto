<?php

if(isset($_POST["mostrar-ciclista"])){

    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $equipo = mysqli_real_escape_string($conexion,$_POST['equipo']);

    $sql = "SELECT * FROM users WHERE correo ='$correo'";
    $resultado = $conexion->query($sql);
    $filas = $resultado->num_rows;
    $sql1 = "SELECT * FROM ciclistas WHERE equipo = '$equipo'";
    $resultado1 = $conexion->query($sql1);
    $filas1 = $resultado1->num_rows;

    if(($filas && $filas1) > 0){
        $filas = $resultado->fetch_assoc();
        $filas1 = $resultado1->fetch_assoc();

        echo "<script>
                window.location = 'equipo_usuario';
            </script>";
    } else {
        echo "<script>
                alert('Correo del manager o el equipo no existen');
                window.location = 'mostrar_equipo.php';
            </script>";
    }

}

?>