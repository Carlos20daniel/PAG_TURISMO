<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA TURISTICA</title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
        }
        body{
            font-family: 'Poppins','sans-serif';
        }
        .container{
            max-width: 1200px;
            margin: 0 auto;
        }
        .header{
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(imagen/imgcentral.jpg);
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 70vh;
            display: flex;
            align-items: center;
        }
        .menu{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo{
            color: #FFFDFC;
            font-size: 25px;
            font-weight: 800;
        }
        .menu .navbar ul li{
            position: relative;
            float: left;
        }
        .menu .navbar ul li a{
            font-size: 18px;
            padding: 20px;
            color: #FFFDFC;
            display: block;
            font-weight: 600;
        }
        .menu .navbar ul li a:hover{
            color: #CE967B;
        }
        #menu{
            display: none;
        }
        .menu-icono{
            width: 25px;
        }
        .menu label{
            cursor: pointer;
            display: none;
        }
        .header-content{
            text-align: center;
        }
        .header-content h1{
            font-size: 75px;
            line-height: 80px;
            color: #F9FAFC;
            text-transform: uppercase;
            margin-bottom: 35px; 
        }
        .header-content p{
            font-size: 16px;
            color: #C5C5C5;
            padding: 0 250px;
            margin-bottom: 25px;
        }
        .btn-1 {
            display: inline-block;
            padding: 11px 35px;
            background-color: #CE967B;
            color:#F9FAFC;
            text-transform: uppercase;
        }
        .btn-1:hover{
            background-color: #ebad8d;
        }
        .coffe{
            padding: 100px 0;
            background-color: #E1E2E6;
            position: relative;
        }
        .coffe-content{
            text-align: center
        }
        .coffe-content h2{
            font-size: 55px;
            line-height: 70px;
            color: #323337;
            text-transform: uppercase;
            padding: 0 250px;
            margin-bottom: 15px;
        }
        .txt-p{
            font-size: 16px;
            color: #414247;
            padding: 0 250px;
            margin-bottom: 35px;
        }
        .coffe-group{
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
        }
        .coffee-1{
            width: 0 200px;
        }
        .coffee-1 img{
            width: 200px;
        }
        .coffee-img{
            position: absolute;
            top: 0;
            right: 0;
        }
        .coffee-1 h3{
            color: #323337;
            font-size: 20px;
            margin-bottom: 15px;
        }
        .services{
            background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(imagen/imgcentral.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            padding: 100px 0;
        }
        .services-content{
            text-align: center;
        }
        .services-content h2{
            font-size: 55px;
            line-height: 70px;
            color: #F9FAFC;
            text-transform: uppercase;
            margin-bottom: 50px;
        }
        .services-content p{
            font-size: 16px;
            color: #C5C5C5;
            margin-bottom: 50px;
            padding: 0 100px;
        }
        .services-group{
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
        }
        .services-1{
            padding: 0 100px;
        }
        .services-1 img{
            width: 25px;
            margin-bottom: 15px;
        }
        .services-1 h3{
            color: #EACCB3;
            font-size: 18px;
        }
    </style>
    <body>
        <header class="header">
            <div class="menu container">
                <a href="0">logo</a>
                <input type="checkbox" id="menu"/>
                <label for="menu">
                    <img src="imghu.jpg" class="menu-icono" alt="">
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="0"></a>Inicio</li>
                        <li><a href="0"></a>Servicios</li>
                        <li><a href="0"></a>Paquetes</li>
                        <li><a href="0"></a>Contacto</li>
                    </ul>
                </nav>
            </div>
            <div class="header-container">
                <h1>Zona turistica</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                   Velit soluta expedita provident qui id libero totam sequi minus eius,
                   incidunt, nisi consequatur dolor nesciunt maiores! Soluta recusandae unde praesentium sint!
                </p>
                <a href="0" class="btn-1">Informacion</a>
            </div>
        </header>

        <section class="coffe">
            <img src="img1.jpg" alt="">
            <div class="coffe-content container">
                <h2>los diferentes tipos de cafe</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                   Nihil quam corporis ea accusantium totam quaerat cupiditate fugit tempore aut 
                   temporibus obcaecati nulla voluptatum et quasi sint dignissimos, veritatis natus animi.
                </p>
                <div class="coffee-group">
                    <div class="coffee-1">
                        <img src="img1.jpg" alt="">
                        <h3>cafe lorem</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus animi,
                           dolore voluptatum consequatur quod corrupti, enim repellendus ipsam tempore
                           impedit quo, molestias deserunt commodi accusantium veritatis excepturi quae ducimus inventore?
                        </p>
                    </div>
                    <div class="coffee-1">
                        <img src="img1.jpg" alt="">
                        <h3>cafe lorem</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus animi,
                           dolore voluptatum consequatur quod corrupti, enim repellendus ipsam tempore
                           impedit quo, molestias deserunt commodi accusantium veritatis excepturi quae ducimus inventore?
                        </p>
                    </div>
                    <div class="coffee-1">
                        <img src="img1.jpg" alt="">
                        <h3>cafe lorem</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus animi,
                           dolore voluptatum consequatur quod corrupti, enim repellendus ipsam tempore
                           impedit quo, molestias deserunt commodi accusantium veritatis excepturi quae ducimus inventore?
                        </p>
                    </div>
                    <div class="coffee-1">
                        <img src="img1.jpg" alt="">
                        <h3>cafe lorem</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus animi,
                           dolore voluptatum consequatur quod corrupti, enim repellendus ipsam tempore
                           impedit quo, molestias deserunt commodi accusantium veritatis excepturi quae ducimus inventore?
                        </p>
                    </div>
                    <div class="coffee-1">
                        <img src="img1.jpg" alt="">
                        <h3>cafe lorem</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus animi,
                           dolore voluptatum consequatur quod corrupti, enim repellendus ipsam tempore
                           impedit quo, molestias deserunt commodi accusantium veritatis excepturi quae ducimus inventore?
                        </p>
                    </div>
                    <div class="coffee-1">
                        <img src="img1.jpg" alt="">
                        <h3>cafe lorem</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus animi,
                           dolore voluptatum consequatur quod corrupti, enim repellendus ipsam tempore
                           impedit quo, molestias deserunt commodi accusantium veritatis excepturi quae ducimus inventore?
                        </p>
                    </div>
                </div>
                <a href="0" class="btn-1">Informacion</a>
            </div>
        </section>

        <main class="services">
            <div class="services-content container">
                <h2>Cafeteria servicios</h2>
                <div class="services-group">
                    <div class="services-1">
                        <img src="img1.jpg" alt="">
                        <h3>servicio 1</h3>
                    </div>
                    <div class="services-1">
                        <img src="img1.jpg" alt="">
                        <h3>servicio 2</h3>
                    </div>
                    <div class="services-1">
                        <img src="img1.jpg" alt="">
                        <h3>servicio 3</h3>
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
                <h2>total similitud</h2>
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
