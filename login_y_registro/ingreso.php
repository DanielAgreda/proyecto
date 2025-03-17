<?php

if(isset($_POST["registrar-ciclista"])){

    $nombre = mysqli_real_escape_string($conexion,$_POST['nombres']);
    $apellido = mysqli_real_escape_string($conexion,$_POST['apellidos']);
    $correo = mysqli_real_escape_string($conexion,$_POST['correo']);
    $equipo = mysqli_real_escape_string($conexion,$_POST['equipo']);
    $telefono = mysqli_real_escape_string($conexion,$_POST['telefono']);
    $fecha_nacimiento = mysqli_real_escape_string($conexion,$_POST['fecha_nacimiento']);
    $pais = mysqli_real_escape_string($conexion,$_POST['pais_origen']);
    $referencia = mysqli_real_escape_string($conexion,$_POST['referencia_cicla']);
    $tipo_carrera = mysqli_real_escape_string($conexion,$_POST['tipo_carrera']);
    $nombre_carrera = mysqli_real_escape_string($conexion,$_POST['nombre_carrera']);
    $pais_carrera = mysqli_real_escape_string($conexion,$_POST['pais_carrera']);
    $imagen = '';

    $sqlcorreo = "SELECT * FROM ciclista WHERE email = '$correo'";
    $resultadocorreo = $conexion->query($sqlcorreo);
    $filas = $resultadocorreo->num_rows;

    if($filas > 0) {
        echo "<script>
                alert('El ciclista ya esta registrado');
                window.location = 'ingresar_miembros.php';
            </script>";
    } else {
        if(isset($_FILES["imagen_ciclista"])){
            $file = $_FILES["imagen_ciclista"];
            $nombre_foto = $file["name"];
            $tipo = $file["type"];
            $ruta_provisional = $file["tmp_name"];
            $carpeta = ".../assets/";
            if($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif'){
                echo "<script>
                        alert('Tipo de archivo no permitido');
                    </script>";
            } else {
                $src = $carpeta.$nombre_foto;
                move_uploaded_file($ruta_provisional, $src);
                $imagen = ".../assets/".$nombre_foto;
            }
        }
        $sqlusuario = "INSERT INTO ciclista (nombres, apellidos, email, telefono, fecha_nacimiento, pais, referencia, tipo_carrera, nombre_carrera, pais_carrera, imagen) VALUES ('$nombre','$apellido','$correo','$telefono','$fecha_nacimiento', '$pais', '$referencia', '$tipo_carrera', '$nombre_carrera', '$pais_carrera', '$imagen')";
        $resultadousuario = $conexion->query($sqlusuario);
        if ($resultadousuario > 0){
            echo "<script>
                    alert('Ciclista registrado correctamente');
                    window.location = 'ingresar_miembros.php';
                </script>";
        } else {
            echo "<script>
                    alert('Error al registrar');
                    window.location = 'ingresar_miembros.php';
                </script>";
        }
    } 
}

?>