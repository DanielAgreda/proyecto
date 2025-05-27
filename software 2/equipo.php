<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ciclismo - Equipo</title>
        <link rel="stylesheet" href="estilos/equipo.css">
        <style>
            .estadisticas {
                display: none;
                margin-top: 10px;
                background-color: #f0f0f0;
                padding: 10px;
                border-radius: 10px;
                transition: all 0.3s ease;
            }
            .mostrar {
                display: block;
            }
            .equipo-lista li {
                cursor: pointer;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
    <div class="background-aurora"></div>
        <nav>
            <div class = "container_menu">
                <div class="container_items">
                    <div id="logo">
                        <img src = "assets/Metatash.jpg" alt = "imagen 0">
                        <h1>CICLISMO</h1>
                    </div>
                    <div class="botones_menu">
                        <a href="inicio_sesion.php" class="button">INICIAR SESION</a>
                        <a href="registro.php"class = "button">REGISTRARSE</a>
                    </div>
                </div>
                <div class="menu">
                    <a href="index.php">INICIO</a>
                    <a href="carreras.php">CARRERAS</a>
                    <a href="equipo.php">EQUIPO</a>
                    <a href="noticias.php">NOTICIAS</a>
                    <a href="historia.php">HISTORIA</a>
                    <a href="contacto.php">CONTACTO</a>
                </div>
            </div>
        </nav>
        <div id="equipo" style="margin-top: 50px;">
            <h1 class="titulos-decorados">EQUIPO</h1>
            <ul class="equipo-lista">
                <li onclick="toggleStats(this)">
                    <img src="assets/inte1.jpg" alt="integrante 1">
                    <div class="nombre">Egan Bernal 
                        <span class="pais">
                            <img src="assets/colombia.png" alt="Colombia Bandera">
                        </span>
                    </div>
                    <div class="estadisticas">
                        <p><strong>Edad:</strong> 27 años</p>
                        <p><strong>Altura:</strong> 1.75 m</p>
                        <p><strong>Peso:</strong> 60 kg</p>
                        <p><strong>Palmarés:</strong> Tour de Francia 2019, Giro de Italia 2021</p>
                    </div>
                </li>
                <li onclick="toggleStats(this)">
                    <img src="assets/inte2.jpg" alt="integrante 2">
                    <div class="nombre">Jonathan Castroviejo 
                        <span class="pais">
                            <img src="assets/espana.png" alt="España Bandera">
                        </span>
                    </div>
                    <div class="estadisticas">
                        <p><strong>Edad:</strong> 36 años</p>
                        <p><strong>Altura:</strong> 1.71 m</p>
                        <p><strong>Peso:</strong> 62 kg</p>
                        <p><strong>Palmarés:</strong> Campeón Nacional CRI España, Bronce Mundial CRI</p>
                    </div>
                </li>
                <li>
                    <img src="assets/inte3.jpg" alt="integrante 3">
                    <div class="nombre">Laurens de Plus 
                        <span class="pais">
                            <img src="assets/belgica.png" alt="Belgica Bandera">
                        </span>
                    </div>
                </li>
                <li>
                    <img src="assets/inte4.jpg" alt="integrante 4">
                    <div class="nombre">Pauline Ferrand-Prevot
                        <span class="pais">
                            <img src="assets/francia.png" alt="Francia Bandera">
                        </span>
                    </div>
                </li>
                <li>
                    <img src="assets/inte5.jpg" alt="integrante 5">
                    <div class="nombre">Filippo Ganna
                        <span class="pais">
                            <img src="assets/italia.png" alt="Italia Bandera">
                        </span>
                    </div>
                </li>
                <li>
                    <img src="assets/inte6.jpg" alt="integrante 6">
                    <div class="nombre">Kim Heiduk
                        <span class="pais">
                            <img src="assets/alemania.png" alt="Alemania Bandera">
                        </span>
                    </div>
                </li>
                <li>
                    <img src="assets/inte7.jpg" alt="integrante 7">
                    <div class="nombre">Artem Shmidt 
                        <span class="pais">
                            <img src="assets/usa.png" alt="Usa Bandera">
                        </span>
                    </div>
                </li>
                <li>
                    <img src="assets/inte8.jpg" alt="integrante 8">
                    <div class="nombre">Ben Swift 
                        <span class="pais">
                            <img src="assets/reino unido.png" alt="Reino Unido Bandera">
                        </span>
                    </div>
                </li>
                <li>
                    <img src="assets/inte9.jpg" alt="integrante 9">
                    <div class="nombre">Geraint Thomas 
                        <span class="pais">
                            <img src="assets/reino unido.png" alt="Reino Unido Bandera">
                        </span>
                    </div>
                </li>
            </ul>
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
        <script>
            function toggleStats(element) {
                const stats = element.querySelector('.estadisticas');
                if (stats) {
                    stats.classList.toggle('mostrar');
                }
            }
        </script>
    </body>
    <script>
        document.querySelectorAll('.estadisticas').forEach((el, i) => {
            console.log(`Bloque ${i + 1}`, el);
        });
    </script>
</html>