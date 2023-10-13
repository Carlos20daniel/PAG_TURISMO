<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA TURISTICA</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
    }

    body {
        font-family: 'Poppins', 'sans-serif';
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .header {
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(imagen/imgcentral.jpg);
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 70vh;
        display: flex;
        align-items: center;
    }

    .menu {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo {
        color: #FFFDFC;
        font-size: 25px;
        font-weight: 800;
    }

    .menu .navbar ul li {
        position: relative;
        float: left;
    }

    .menu .navbar ul li a {
        font-size: 18px;
        padding: 20px;
        color: #FFFDFC;
        display: block;
        font-weight: 600;
    }

    .menu .navbar ul li a:hover {
        color: #CE967B;
    }

    #menu {
        display: none;
    }

    .menu-icono {
        width: 25px;
    }

    .menu label {
        cursor: pointer;
        display: none;
    }

    .header-content {
        text-align: center;
    }

    .header-content h1 {
        font-size: 75px;
        line-height: 80px;
        color: #F9FAFC;
        text-transform: uppercase;
        margin-bottom: 35px;
    }

    .header-content p {
        font-size: 16px;
        color: #C5C5C5;
        padding: 0 250px;
        margin-bottom: 25px;
    }

    .btn-1 {
        display: inline-block;
        padding: 11px 35px;
        background-color: #CE967B;
        color: #F9FAFC;
        text-transform: uppercase;
    }

    .btn-1:hover {
        background-color: #ebad8d;
    }

    .turismo {
        padding: 100px 0;
        background-color: #E1E2E6;
        position: relative;
    }

    .turismo-content {
        text-align: center;
    }

    .turismo-content h2 {
        font-size: 55px;
        line-height: 70px;
        color: #323337;
        text-transform: uppercase;
        padding: 0 250px;
        margin-bottom: 15px;
    }

    .txt-p {
        font-size: 16px;
        color: #414247;
        padding: 0 250px;
        margin-bottom: 35px;
    }

    .turismo-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 50px;
    }

    .turismo-1 {
        width: 0 200px;
    }

    .turismo-1 img {
        width: 200px;
    }

    .turismo-img {
        position: absolute;
        top: 0;
        right: 0;
    }

    .turismo-1 h3 {
        color: #323337;
        font-size: 20px;
        margin-bottom: 15px;
    }

    .services {
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(imagen/imgcentral.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        padding: 100px 0;
    }

    .services-content {
        text-align: center;
    }

    .services-content h2 {
        font-size: 55px;
        line-height: 70px;
        color: #F9FAFC;
        text-transform: uppercase;
        margin-bottom: 50px;
    }

    .services-content p {
        font-size: 16px;
        color: #C5C5C5;
        margin-bottom: 50px;
        padding: 0 100px;
    }

    .services-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 50px;
    }

    .services-1 {
        padding: 0 100px;
    }

    .services-1 img {
        width: 25px;
        margin-bottom: 15px;
    }

    .services-1 h3 {
        color: #EACCB3;
        font-size: 18px;
    }

    .general {
        display: flex;
    }

    .general-1 {
        width: 50px;
        padding: 100px 250px 100px 100px;
        background-color: #E1E2E6;
    }

    .general-2 {
        background-image: url(imagen/imgcentral.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 50%;
    }

    .general-3 {
        background-image: url(imagen/imgcentral.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 50%;
    }

    h2 {
        font-size: 55px;
        line-height: 70px;
        color: #323337;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    p {
        font-size: 16px;
        color: #414247;
        margin: 25px 0 45px 0;
    }

    .blog {
        padding: 100px 0;
        text-align: center;
    }

    .blog-content {
        display: flex;
        justify-content: space-between;
    }

    .blog-1 {
        padding: 15px 55px;
    }

    .blog-1 img {
        width: 250px;
        border-radius: 15px;
        margin-bottom: 15px;
    }

    .blog-1 h3 {
        font-size: 25px;
        color: #323337;
    }

    .footer {
        padding: 100px 0;
        background-color: #000000;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
    }

    .link h3 {
        font-size: 18px;
        color: #F9FAFC;
        margin-bottom: 15px;
    }

    .link a {
        font-size: 16px;
        color: #C5C5C5;
        display: block;
        margin-bottom: 15px;
    }

    @media(max-width:991px) {
        .menun {
            padding: 30px;
        }

        .menu label {
            display: initial;
        }

        .menu .navbar {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #323337;
            display: none;
        }

        .menu .navbar ul li {
            width: 100%;
        }

        #menu:checked,
        .navbar {
            display: initial;
        }

        .header {
            min-height: 0vh;
        }

        .header-content {
            padding: 100px 30px;
        }

        .header-content p {
            padding: 0%;
        }

        .turismo {
            padding: 30px;
        }

        .turismo-content h2 {
            padding: 0;
        }

        .txt-p {
            padding: 0;
        }

        .turismo-group {
            flex-direction: column;
            margin-bottom: 0;
        }

        .turismo-img {
            display: none;
        }

        .services {
            padding: 30px;
        }

        .services-content p {
            padding: 0;
        }

        .services-group {
            flex-direction: column;
            margin-bottom: 0;
        }

        .services-1 {
            margin-bottom: 25px;
        }

        .general {
            flex-direction: column;
        }

        .general-1 {
            width: 100%;
            padding: 30px;
            text-align: center;
        }

        .general-2,
        .general-3 {
            display: none;
        }

        .blog {
            padding: 30px;
        }

        .blog-content {
            flex-direction: column;
        }

        .blog-1 {
            padding: 0;
        }

        .footer {
            padding: 30px;
        }

        .footer-content {
            flex-direction: column;
            text-align: center;
        }
    }
</style>

<body>
    <header class="header">
        <div class="menu container">
            <a href="imagen/imghu.jpg">logo</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="0">Servicios</a></li>
                    <li><a href="0">Paquetes</a></li>
                    <li><a href="0">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-container">
            <h1>HUANUCO</h1>
            <p>Huánuco te muestra la unión de la sierra y la selva peruana. Visita sus elevadas montañas, aguas termales, cuevas, lagunas y una seductora formación rocosa llamada la Bella Durmiente; llénate de historia con sus monumentos como el Templo de la Manos Cruzadas y aventúrate a conocer la naturaleza viva en la Cueva de las Lechuzas de Tingo Marí­a. La región huanuqueña tiene mucho por ofrecerte, ¿empezamos el viaje?
            </p>
            <a href="https://www.tripadvisor.com.pe/Attractions-g1391902-Activities-Huanuco_Huanuco_Region.html" class="btn-1">Informacion</a>
        </div>
    </header>

    <section class="turismo">
        <img src="img1.jpg" alt="">
        <div class="turismo-content container">
            <h2>LUGARES TURISTICOS DE HUANUCO</h2>
            <p>Huánuco te muestra la unión de la sierra y la selva peruana. Visita sus elevadas montañas, aguas termales, cuevas, lagunas y una seductora formación rocosa llamada la Bella Durmiente; llénate de historia con sus monumentos como el Templo de la Manos Cruzadas y aventúrate a conocer la naturaleza viva en la Cueva de las Lechuzas de Tingo Marí­a. La región huanuqueña tiene mucho por ofrecerte, ¿empezamos el viaje?
            </p>
            <div class="turismo-group">
                <div class="turismo-1">
                    <img src="imagen/tur1.jpg" alt="">
                    <h3>Puente Calicanto</h3>
                    <p>El Puente Calicanto está ubicado en la ciudad de Huánuco y cruza el río Huallaga.​ Su construcción comenzó en 1879 y culminó el 1884. Fue diseñado por Santos Benedetti, Silverio Lázzaro y Vitorio Albertini.​ Tiene una longitud de 60 m y dos columnas. Fue construido sobre la base de piedra de canto rodado junto con mezcla de cal, arena y claras de huevos
                    </p>
                    <a href="0" class="btn-1">Informacion</a>
                </div>
                <div class="turismo-1">
                    <img src="imagen/tur2.jpg" alt="">
                    <h3>Manos Cruzadas</h3>
                    <p>Kotosh es un sitio arqueológico ubicado en el distrito, provincia y departamento de Huánuco, en el Perú. Se compone de una serie de edificios superpuestos con 6 periodos de ocupación continua que datan desde el Arcaico Tardío hasta el Intermedio Temprano. El más famoso de sus recintos, que se encuentra expuesto actualmente al público, es el Templo de las Manos Cruzadas, llamado así por tener dos altorrelieves en barro en forma de sendos brazos cruzados, cuya antigüedad se remonta al 1800 a. C.
                    </p>
                    <a href="0" class="btn-1">Informacion</a>
                </div>
                <div class="turismo-1">
                    <img src="imagen/tur3.jpg" alt="">
                    <h3>Bella Durmiente</h3>
                    <p>Bella Durmiente es una montaña que adorna el horizonte de la ciudad de Tingo María, en Huánuco. Conoce la leyenda que se cuenta acerca de su origen.
                    </p>
                    <a href="0" class="btn-1">Informacion</a>
                </div>
                <div class="turismo-1">
                    <img src="imagen/tur4.jpg" alt="">
                    <h3>Casa de la Perricholi</h3>
                    <p>Hermosa casa de adobe construida sobre una cuesta empinada. Desde el punto más alto se logra una vista panorámica del pueblo de Tomayquichua. Se construyó en 1739 y en ella vivió Micaela Villegas Hurtado: mujer de encantadora belleza conocida como La Perricholi, quien se convirtió en la amante del virrey Amat y Juniet. En la actualidad, la casa tiene un pequeño guarda ropa en la habitación principal y muebles de la época, una réplica de la cocina, un carruaje reconstruido, vestidos de moda de la época.
                    </p>
                    <a href="0" class="btn-1">Informacion</a>
                </div>
                <div class="turismo-1">
                    <img src="imagen/tur5.jpg" alt="">
                    <h3>Lago Lauricocha</h3>
                    <p>Esta laguna se encuentra rodeada por las estribaciones orientales de la Cordillera Occidental Andina; a 25 km de distancia del pueblo de Cauri (a 131 km de la ciudad de Huánuco) pasando por los pueblos de Gashanpampa y Antacolpa. Tiene una altitud de 3845 m s. n. m. La forma que tiene es de una forma alargada que se distribuye de este a oeste, y cuenta con aproximadamente 7 km, de largo por 1.5 km en su parte más ancha, con 75 m de profundidad en promedio y 160,7 km² de área.
                    </p>
                    <a href="0" class="btn-1">Informacion</a>
                </div>
                <div class="turismo-1">
                    <img src="imagen/tur6.jpg" alt="">
                    <h3>Huanuco Pampa</h3>
                    <p>Conocido también como Huánuco Viejo. Importantísimo centro de más de 2 km² ubicado sobre una meseta o pampa de 200 ha de extensión a 3,700 metros de altura que se emplaza sobre el valle del Vizcarra. Fue establecido allí porque marcaba el punto medio del camino entre el Cuzco y Tomebamba, hoy en el sur de Ecuador. Desde entonces la ciudadela ha sido reconocida como "La Capital del Chinchaysuyo", una de las cuatro regiones en que estaba dividido políticamente el llamado Imperio de los Incas.Por esta población pasaba el Camino del Inca, en uno de sus ramales.
                    </p>
                    <a href="0" class="btn-1">Informacion</a>
                </div>
            </div>
        </div>
    </section>

    <main class="services">
        <div class="services-content container">
            <h2>Servicios Turisticos</h2>
            <div class="services-group">
                <div class="services-1">
                    <img src="img1.jpg" alt="">
                    <h3>Servicio Turistico</h3>
                </div>
                <div class="services-1">
                    <img src="img1.jpg" alt="">
                    <h3>Servicio Completo</h3>
                </div>
                <div class="services-1">
                    <img src="img1.jpg" alt="">
                    <h3>Servicio VIP</h3>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ut rerum fugiat, perspiciatis quisquam tenetur architecto necessitatibus
                voluptatibus esse unde aliquid deserunt accusamus natus fuga magnam nihil soluta dolor error ratione!
            </p>
            <a href="0" class="btn-1">Informacion</a>
        </div>
    </main>

    <section class="general">
        <div class="general-1">
            <h2>Historia de Huanuco</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Eligendi ducimus voluptate a tenetur fugit inventore unde officiis pariatur
                praesentium ex ipsum iusto velit adipisci rerum, earum doloribus? Repellat, vel sequi?
            </p>
            <a href="0" class="btn-1">Informacion</a>
        </div>
        <div class="general-2"></div>
    </section>

    <section class="general">
        <div class="general-3"></div>
        <div class="general-1">
            <h2>total similitud</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Eligendi ducimus voluptate a tenetur fugit inventore unde officiis pariatur
                praesentium ex ipsum iusto velit adipisci rerum, earum doloribus? Repellat, vel sequi?
            </p>
            <a href="0" class="btn-1">Informacion</a>
        </div>
    </section>

    <section class="blog-container">
        <h2>BLOG</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="blog-content">
            <div class="blog-1">
                <img src="img1.jpg" alt="">
                <h3>blog 1</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Incidunt voluptate nesciunt sunt quis reprehenderit error harum beatae,
                    sapiente possimus molestiae perspiciatis aliquid assumenda dolores quos tempora dolorem inventore tempore praesentium.
                </p>
            </div>
            <div class="blog-1">
                <img src="img1.jpg" alt="">
                <h3>blog 2</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Incidunt voluptate nesciunt sunt quis reprehenderit error harum beatae,
                    sapiente possimus molestiae perspiciatis aliquid assumenda dolores quos tempora dolorem inventore tempore praesentium.
                </p>
            </div>
            <div class="blog-1">
                <img src="img1.jpg" alt="">
                <h3>blog 3</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Incidunt voluptate nesciunt sunt quis reprehenderit error harum beatae,
                    sapiente possimus molestiae perspiciatis aliquid assumenda dolores quos tempora dolorem inventore tempore praesentium.
                </p>
            </div>
        </div>
        <a href="0" class="btn-1">Informacion</a>
    </section>

    <footer class="footer">
        <div class="footer-content conteiner">
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>lorem</h3>
                <ul>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                    <li><a href="0">lorem</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>