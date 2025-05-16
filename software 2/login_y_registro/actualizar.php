<?php

if(isset($_POST["actualizar-ciclista"])){

    $nombre = mysqli_real_escape_string($conexion,$_POST['nombres']);
    $apellido = mysqli_real_escape_string($conexion,$_POST['apellidos']);
    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $equipo = mysqli_real_escape_string($conexion, $_POST['equipo']);
    $telefono = mysqli_real_escape_string($conexion,$_POST['telefono']);
    $fecha_nacimiento = mysqli_real_escape_string($conexion,$_POST['fecha_nacimiento']);
    $pais = mysqli_real_escape_string($conexion,$_POST['pais_origen']);
    $referencia = mysqli_real_escape_string($conexion,$_POST['referencia_cicla']);
    $tipo_carrera = mysqli_real_escape_string($conexion,$_POST['tipo_carrera']);
    $nombre_carrera = mysqli_real_escape_string($conexion,$_POST['nombre_carrera']);
    $pais_carrera = mysqli_real_escape_string($conexion,$_POST['pais_carrera']);
    $imagen = $_FILES["imagen-ciclista"]["tmp_name"];
    $nombre_imagen = $_FILES["imagen-ciclista"]["name"];
    $tipo_imagen = strtolower(pathinfo($nombre_imagen,PATHINFO_EXTENSION));
    $size_imagen = $_FILES["imagen-ciclista"]["size"];
    $directorio = "software 2/assets/";

    $sql = "SELECT * FROM ciclista WHERE email = '$correo'";
    $resultadocorreo = $conexion->query($sql);
    $filas = $resultadocorreo->num_rows;

    if($filas > 0) {

        if($tipo_imagen=="jpg" or $tipo_imagen=="jpeg" or $tipo_imagen=="png"){
            $registro = $conexion->query("UPDATE ciclista SET imagen ");
        }


        $sqlupdate = "UPDATE ciclista SET 
            nombres='$nombre', 
            apellidos='$apellido',
            equipo = '$equipo',
            telefono='$telefono', 
            fecha_nacimiento='$fecha_nacimiento', 
            pais='$pais', 
            referencia='$referencia', 
            tipo_carrera='$tipo_carrera', 
            nombre_carrera='$nombre_carrera', 
            pais_carrera='$pais_carrera' WHERE email='$correo'";
            
        if($conexion->query($sqlupdate) === TRUE) {
            echo "<script>
                    alert('Datos actualizados correctamente');
                    window.location = 'update.php';
                </script>";
        } else {
            echo "<script>
                    alert('Error al actualizar datos');
                    window.location = 'update.php';
                </script>";
        }
    } else {   
        echo "<script>
                alert('El ciclista no esta registrado');
                window.location = 'update.php';
            </script>";
    }
}

?>