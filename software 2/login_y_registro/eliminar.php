<?php 

if(isset($_POST["eliminar-ciclista"])){

    $nombre = mysqli_real_escape_string($conexion,$_POST['nombres']);
    $apellido = mysqli_real_escape_string($conexion,$_POST['apellidos']);
    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion,$_POST['telefono']);
    $fecha_nacimiento = mysqli_real_escape_string($conexion,$_POST['fecha_nacimiento']);
    $pais = mysqli_real_escape_string($conexion,$_POST['pais_origen']);
    $referencia = mysqli_real_escape_string($conexion,$_POST['referencia_cicla']);
    $tipo_carrera = mysqli_real_escape_string($conexion,$_POST['tipo_carrera']);
    $nombre_carrera = mysqli_real_escape_string($conexion,$_POST['nombre_carrera']);
    $pais_carrera = mysqli_real_escape_string($conexion,$_POST['pais_carrera']);

    $sql = "SELECT * FROM ciclista WHERE email = '$correo'";
    $resultado = $conexion->query($sql);
    $filas = $resultado->num_rows;

    if($filas > 0) {
        $filas = $resultado->fetch_assoc();
        $sqleliminar = "UPDATE ciclista DROP 
            nombres='$nombre', 
            apellidos='$apellido', 
            email = '$correo',
            telefono='$telefono', 
            fecha_nacimiento='$fecha_nacimiento',
            pais='$pais', 
            referencia='$referencia', 
            tipo_carrera='$tipo_carrera', 
            nombre_carrera='$nombre_carrera', 
            pais_carrera='$pais_carrera', 
            imagen WHERE email='$correo'";

    } else {
        echo "<script>
                alert('El ciclista ingresado no existe');
                window.location = 'delete.php';
            </script>";
    } 
}

?>