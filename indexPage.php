<?php
session_start() ;
if(isset($_SESSION['usuario'] )){
echo '
    <script>
        alert("Por favor debes iniciar sesion");
        window.location="./index.php";
    </script>
    ';
    session_destroy();
    die();
}
?>


<!DOCTYPE html>
<HTML lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="shortcut icon" href="./assets/Fondos/Fondo17.jpg">
    <link rel="stylesheet" href="./assets/css/estilohome.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="box">
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <img src="/assets/Recursos/celloption.png"></i>
        </label>
        <a href="/indexPage.html" class="enlace">
            <img src="/assets/Fondos/Fondo14.jpg" alt="fondo" class="logo">
        </a>
        <ul>       
              <li><a class="active" href="indexPage.php">Inicio</a></li>
     
            <li><a  href="./Formulario.html">Usuarios</a></li>
            <li><a  href="./Usuarios/usuarios.php">Usuarios</a></li>
        </ul>
    </nav>




</div>

    <section  style="background-image: url(./assets/Fondos/Fondo27.jpg) ">
        
        <section class="text_prin">
            
            <div class="card1">
                <div class="face front">
                    <img src="./assets/Recursos/gtaiv.jpg" alt="Gtaiv_portada">
                    <h3>Grand Theft Auto IV</h3>
                </div>
                <div class="face back">
                    <h3 style="color: #fff;">Grand Theft Auto IV</h3>
                    <p style="color: #fff;">Rockstar Games no se va a quedar sólo con GTA V para vivir de rentas sabiendo el potencial que tiene el sandbox más mediático de la historia de los videojuegos y por fin es oficial que trabajan en GTA VI (nombre provisional): "el desarrollo para el próximo videojuego en la serie Grand Theft Auto está en marcha".</p>
                    <div class="link">
                        <a target="_blank" href="https://www.vidaextra.com/juegos-nuevos/gta-vi-fecha-lanzamiento-ultimas-noticias-rumores">Leer más</a>
                    </div>
                </div>
            </div>
         <div class="card2">
                <div class="face front">
                    <img class="portadad2" src="./assets/Recursos/cod.jpg" alt="COD_portada">
                    <h3>Call of Duty Warzone Mobile</h3>
                </div>
                <div class="face back">
                    <h3 style="color: #fff;">Call of Duty Warzone Mobile</h3>
                    <p style="color: #fff;">Tras muchos meses de rumores, hoy Activision ha anunciado oficialmente Call of Duty Warzone Mobile, la adaptación a dispositivos móviles del exitoso título multijugador.</p>
                    <div class="link">
                        <a target="_blank" href="https://www.guardadorapido.com/anunciado-oficialmente-call-of-duty-warzone-mobile/">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="card3">
                <div class="face front">
                    <img src="./assets/Recursos/alice.jpg" alt="Alice_portada">
                    <h3>Alicia En El Pais De Las Maravillas</h3>
                </div>
                <div class="face back">
                    <h3 style="color: #fff;">Alicia En El Pais De Las Maravillas</h3>
                    <p style="color: #fff;">Alice Madness Returns para PC en Español es un videojuego de plataformas y acción con toques góticos desde una perspectiva de tercera persona, con ataques y combos fáciles de usar parecidos a la series de Devil May Cry.</p>
                    <div class="link">
                        <a target="_blank" href="https://pivigames.blog/alice-madness-returns/">Leer más</a>
                    </div>
                </div>
            </div>
 
            </section>
    </section>
   
    <section class="cuadro_2"  style="  background: url(./assets/Fondos/Fondo27.jpg) ">
        <br><br>
        <h1 class="texto-animado">Descarga de juegos</h1>
        <br>
        <p>Puedes decargar cualquiera de estos juegos </p>
        <br>
        <div class="card_d0" style="background-image:url(./assets/Recursos/minecraft.gif)">
            <div class="content">
                <h2>Minecraft </h2>
                <h3>Requisitos</h3>
                <p><b>CPU:</b> Intel i3 2,8 GHz | AMD Athlon II 2,8 GHz.
                    <br>
                <b>GPU:</b> NVIDIA GeForce 2xx | AMD Radeon HD 5xxx.
                <br>
            <b>Memoria RAM:</b> 4 GB.
<br>
        <b> Sistema Operativo:</b> Windows 7 en adelante.
<br>
    <b> Espacio en disco:</b> 1 GB.
    <br>

<b> Versión de Java:</b> Java 7</p>
                <a style=" background-color: rgb(101, 98, 238);" target="_blank" href="https://www.minecraft.net/es-es/download">Descargar</a>
            </div>
        </div>
        <div class="card_d0" style="background-image:url(./assets/Recursos/deadspace.gif)">
            <div class="content">
                <h2>Dead Space</h2>
                <h3>Requisitos</h3>
                <p><b>Sistemas Operativos:</b> Microsoft Windows XP SP2 y Vista
                    <br>
                <b>Procesador:</b>2.8 GHz o más rapido
                    <br>
                <b>Memoria:</b> de 1 GB de memoria RAM arriba
                <br>
            <b>Disco Duro:</b> 7.5 GB de espacio libre
            <br>
                    </p>
                <a style=" background-color: rgb(101, 98, 238);"  target="_blank" href="https://pivigames.blog/dead-space-en-espanol/">Descargar</a>
            </div>
        </div>
        <div class="card_d1" style="background-image:url(./assets/Recursos/halo.gif)">
            <div class="content">
                <h2>Halo</h2>
                <h3>Requisitos</h3>
                <p>
                    <b>Sistema operativo:</b> Microsoft Windows 98 o superior
                    <br>
                    <b>Procesador:</b> procesador a 733 megahercios (MHz).
                    <br>
                    <b>Memoria:</b> 128 megabytes (MB) de memoria RAM.
                    <br>
                    <b>Disco duro:</b> 1,2 gigabytes (GB) de espacio disponible en disco duro.
                </p>
                <a style=" background-color: rgb(101, 98, 238);" target="_blank" href="https://dto2games.com/descargar-halo-1-para-pc-gratis-en-espanol-completo-mediafire/">Descargar</a>
            </div>
        </div>
        <div class="card_d1" style="background-image:url(./assets/Recursos/naruto.gif)">
            <div class="content">
                <h2>Naruto UNS4</h2>
                <h3>Requisitos</h3>
                <p>
                    <b>Sistema Operativo:</b> Windows (64bit) 7 o superior
                <br>
                    <b>Procesador:</b> Intel i3-530, 2.93Ghz / AMD Phenom II X4 940, 3.0GHz
            <br>
                <b>Memoria:</b> 4 GB RAM
        <br>
        <b>Gráfica:</b> 1024 MB video card, Pixel Shader 4.0, DirectX10 GPU
<br>
<b>Disco duro:</b> 25 GB
                </p>
                <a style=" background-color: rgb(101, 98, 238);" target="_blank" href="https://pivigames.blog/naruto-shippuden-ultimate-ninja-storm-4-en-espanol-con-online-steam/">Descargars</a>
            </div>
        </div>
        <div class="card_d2" style="background-image:url(./assets/Recursos/gta.gif)">
        <div class="content">
            <h2>GTA San andres</h2>
            <h3>Requisitos</h3>
            <p><b>SO:</b> Windows 10 de 64 bits
            <b>Procesador:</b> Intel® Core™ i7-2700K/AMD Ryzen 5 2600
        <br>
                    <b>Memoria:</b> 16 GB
                <br>
                    <b>Tarjeta gráfica:</b> NVIDIA GeForce GTX 970 con 4 GB/AMD Radeon RX 570 con 4 GB
                <br>
                    <b>      Disco:</b> 45 GB</p>
            <a style=" background-color: rgb(101, 98, 238);" target="_blank" href="https://es.wizcase.com/download/grand-theft-auto-san-andreas/">Descargar</a>
        </div>
    </div>
    <div class="card_d3" style="background-image:url(./assets/Recursos/fifa.gif)">
        <div class="content">
            <h2>Fifa 2022</h2>
            <h3>Requisitos</h3>
            <p><b>Sistema operativo:</b> Windows 10 64 bits
                <br>
        <b>Procesador:</b> Core i5-3550 o equivalente
        <br>
    <b>Memoria:</b> 8 GB
    <br>
<b>Tarjeta gráfica:</b> GeForce GTX 670 o equivalente
<br>
<b>Espacio disco duro:</b>50 GB</p>
            <a style=" background-color: rgb(101, 98, 238);"target="_blank" href="https://www.ea.com/es-es/games/fifa/fifa-22/buy/pc">Descargar</a>
        </div>
    </div>
</section>
    <section class="cuadro_3"  style="  background: url(./assets/Fondos/Fondo27.jpg) ">
        <h1>VideoJuegos</h1>
        <p><br><br>
            Durante bastante tiempo ha sido <br>complicado señalar cual fue el primer videojuego, principalmente debido a las múltiples<br> definiciones de este que se han ido estableciendo, pero se puede considerar como primer <br>videojuego el Nought and crosses, también llamado OXO, desarrollado por Alexander S.Douglas en 1952. <br><br>El juego era una versión computerizada del tres en raya que se ejecutaba <br>sobre la EDSAC y permitía enfrentar a un jugador humano contra la máquina.<br><br>
            En 1958 William Higginbotham creó,<br> sirviéndose de un programa para el cálculo de trayectorias y <br>un osciloscopio, Tennis for Two (tenis para dos): un simulador de tenis de mesa para entretenimiento de los visitantes de la <br>exposición Brookhaven National Laboratory.
            <br><br>
        Este videojuego fue el primero en permitir el juego entre dos jugadores humanos.<br><br> Cuatro años más tarde Steve Russell, <br>un estudiante del Instituto de Tecnología de Massachussets, dedicó seis meses a crear un juego <br>para computadora usando gráficos vectoriales: Spacewar.
<br><br><br>
<img src="./assets/Recursos/deco1.gif">       
</p>
    </section>
    
    <section class="cuadro_4" style="background-image: url(./assets/Fondos/Fondo27.jpg) ">
      
        <h1>Discuciones</h1>
            <div class="Tarjeta1">
                <div class="face front">
                  <img src="./assets/Recursos/damian.jpg" alt="">
                </div>
                <div class="tex1">
                    <div class="cont">
                        <h2>Grand Theft Auto IV</h2> 
                  <p>Damian ortega: La historia está muy bien llevada con unos grandes personajes bien construidos y carismáticos, misiones variadas e interesantes y todo doblado con un gran nivel, jugabilidad máxima, puedes hacer prácticamente lo que quieras, además, en el online se amplia todavía más, gráficos bastante buenos teniendo en cuenta que es un sandbox que presenta un mapa muy grande y con multitud de opciones jugables, incluye modo primera persona</p>         
                     </div>
                </div>
            </div>
       

            <div class="Tarjeta2">
                <div class="face front">
                  <img src="./assets/Recursos/andreu.png" alt="">
                </div>
                <div class="tex2">
                    <div class="cont2">
                  <h2>FIFA 2022</h2>           
                  <p>Andreu Ricci:Es dif&Oacute;cil deshacerse de la sensación de que FIFA 21 casi se ha congelado en estasis desde la temporada pasada. Si bien existen las mejoras estacionales esperadas, nada se destaca por sí solo para hacer de esta una entrega «imprescindible». Ojalá tengan más innovación reservada para el próximo año, porque definitivamente parece que EA está tratando de agotar el tiempo en esta generación</p></div>
                </div>
            </div>
            <div class="Tarjeta2">
                <div class="face front">
                  <img src="./assets/Recursos/matha.jfif" alt="">
                </div>
                <div class="tex3">
                    <div class="cont">
                        <h2>Minecraft</h2>           
                        <p>Martha Lucia: Para mi minecraft es un juego que marco la historia y se merese estar donde esta con pocos graficos y siendo un juego mu simole esta muy entretenido y muy adictivo. es para toda las edades y no carese de cosas violentas y una forma educativa de entretenimiento para todas las edades y para tanto se esncuetra en todo los dipositivos. Si creo que esta muy bien este video debrian verlo esta en ingles pero esta subtitulado al espanol:</p> </div>
                         
                    </div>
            </div>
           
           <div class="contenedor__login-register" >
                <!--Login-->
                    <!--Register-->
                    <form class="formulario__login">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contraseña">
                    <button>Regístrarse</button>
                </form>
            </div>

    </section>

</div>
</main>
</section>
<section class="encima" style="background-image: url(./assets/Fondos/Fondo27.jpg) ">
    <img src="./assets/Recursos/spidergay.gif" width="30%"  alt="spider">
</section>
    <footer  style="background-image: url(./assets/Fondos/es.gif);">
        <div class="footer">
            <div class="footer-contentr">
                <h1 class="game">GAME <span> OVER?</span></h1>
                <h2> <a class="hdvd" href="/Hojas.html">Hojas de vida</h2>
              </div>
            </div>
      </div>
    </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="./assets/Js/app.js"></script>
</body>
</html>