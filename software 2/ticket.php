<?php

include("conexion/conexion.php");
include("login_y_registro/ticket_registro.php")

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TICKET</title>
        <link rel="stylesheet" href="estilos/ticket.css">
    </head>
    <body>
        <nav>
            <div class="container_menu">
                <div class="container_items">
                    <div id="logo">
                        <img src = "assets/Metatash.jpg" alt = "imagen 0">
                        <h1>CICLISMO</h1>
                    </div>
                    <div id="botones_menu">
                        <a href="index.php" class="button">Logout</a>
                    </div>
                </div>
                <div class="menu">
                    <a href="mostrar_equipo.php">Mostrar Equipo</a>
                    <a href="ingresar_miembros.php">Ingresar Miembros</a>
                    <a href="update.php">Update</a>
                    <a href="delete.php">Delete</a>
                    <a href="ticket.php">Ticket</a>
                </div>
            </div>
        </nav>
        <div id="contenido">
            <div class="registro-container">
                <h1>Registro de ticket</h1>
                <form id="registro-ciclista" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <div class="input-group">
                        <label for="ticket">Titulo del ticket</label>
                        <input type="text" id="ticket" name="ticket" placeholder="TItulo del ticket" required>
                    </div>
                    <div class="input-group">
                        <label for="ticket-descripcion">Describe el ticket</label>
                        <textarea name="ticket-descripcion" id="ticket-descripcion" placeholder="Describe  tu problema"></textarea>
                    </div>
                    <button type="submit" class="registro-button" id="registro-ticket">Crear Ticket</button>
                </form>
            </div>
        </div>
        <footer>
            <div class="footer-contenido">
                <div class="footer-seccion">
                    <a href="carreras.php"><h3>CARRERAS</h3></a>
                    <ul>
                        <li>Reportes Carreras</li>
                        <li>Fotos</li>
                        <li>Videos</li>
                        <li>Calendario Carreras</li>
                    </ul>
                </div>
                <div class="footer-seccion">
                    <a href="equipo.php"><h3>EQUIPO</h3></a>
                    <ul>
                        <li>Ciclistas</li>
                        <li>Staff</li>
                        <li>Patrocinadores</li>
                    </ul>
                </div>
                <div class="footer-seccion">
                    <a href="noticias.php"><h3>NOTICIAS</h3></a>
                    <ul>
                        <li>Noticias</li>
                        <li>Calendario</li>
                        <li>Galeria</li>
                    </ul>
                </div>
                <div class="footer-seccion">
                    <a href="historia.php"><h3>HISTORIA</h3></a>
                    <ul>
                        <li>INEOS</li>
                        <li>The Grenadier</li>
                        <li>Camino</li>
                    </ul>
                </div>
                <div class="footer-seccion">
                    <a href="contacto.php"><h3>CONTACTO</h3></a>
                    <ul>
                        <li>Contactos</li>
                        <li>Seguirnos</li>
                        <li>Visita Más</li>
                    </ul>
                </div>
            </div>
            <p>&copy; 2024 Ciclismo. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>