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
    
    $imagen = $_FILES["imagen-ciclista"]["tmp_name"];
    $nombre_imagen = $_FILES["imagen-ciclista"]["name"];
    $tipo_imagen = strtolower(pathinfo($nombre_imagen,PATHINFO_EXTENSION));
    $size_imagen = $_FILES["imagen-ciclista"]["size"];
    $directorio = "software 2/assets/";

    $sqlcorreo = "SELECT * FROM ciclista WHERE email = '$correo'";
    $resultadocorreo = $conexion->query($sqlcorreo);
    $filas = $resultadocorreo->num_rows;

    if($filas > 0) {
        echo "<script>
                alert('El ciclista ya esta registrado');
                window.location = 'ingresar_miembros.php';
            </script>";
    } else {

        if($tipo_imagen=="jpg" or $tipo_imagen=="jpeg" or $tipo_imagen=="png"){
            $registro = $conexion->query("INSERT INTO ciclista(imagen)  VALUES ('')");
            $idregistro = $conexion->insert_id;

            $ruta = $directorio.$idregistro.".".$tipo_imagen;
            $actualizarimagen = $conexion->query("UPDATE ciclista SET imagen = '$ruta' WHERE id_ciclista='$idregistro'");

            if(move_uploaded_file($imagen,$ruta)){
                echo "<script>
                    alert('Imagen registrada correctamente');
                </script>";
            } else {
                echo "<script>
                    alert('Error al registrar imagen');
                </script>";
            }
        }

        $sqlusuario = "INSERT INTO ciclista (nombres, apellidos, email, telefono, fecha_nacimiento, pais, referencia, tipo_carrera, nombre_carrera, pais_carrera) VALUES ('$nombre','$apellido','$correo','$telefono','$fecha_nacimiento', '$pais', '$referencia', '$tipo_carrera', '$nombre_carrera', '$pais_carrera')";
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

