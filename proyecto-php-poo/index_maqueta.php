<!DOCTYPE HTML>
<html lang="es">    
    <head>
        <meta charset="utf-8"/>
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        <div id="container">
            <!--CABECERA-->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="Camiseta Logo"/>
                    <a href="index.php">
                        Tienda de camisetas
                    </a>
                </div>
            </header>

            <!--MENU-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">Categoria 1</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">Categoria 2</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">Categoria 3</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">Categoria 4</a>
                    </li>
                </ul>
            </nav>

            <div id="contenido">

                <!--BARRA LATERAL-->
                <aside id="lateral">                
                    <div id="login" class="block_aside">
                        <form action="#" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password">
                            <input type="submit" value="Enviar">
                        </form>

                        <a href="#">Mis Pedidos</a>
                        <a href="#">Gestionar pedidos</a>
                        <a href="#">Gestionar categorias</a>
                    </div>                

                </aside>

                <!--CONTENIDO CENTRAL-->
                <div id="central">
                    <h1>
                        Productos destacados
                    </h1>
                    <div class="product">
                        <img src="assets/img/camiseta.png" />
                        <h2>Camiseta Azul</h2>
                        <p>30 quetzales</p>
                        <a href="#" class="button">Comprar</a>
                    </div>

                    <div class="product">
                        <img src="assets/img/camiseta.png" />
                        <h2>Camiseta Azul</h2>
                        <p>30 quetzales</p>
                        <a href="#" class="button">Comprar</a>
                    </div>

                    <div class="product">
                        <img src="assets/img/camiseta.png" />
                        <h2>Camiseta Azul</h2>
                        <p>30 quetzales</p>
                        <a href="#" class="button">Comprar</a>
                    </div>

                    <div class="product">
                        <img src="assets/img/camiseta.png" />
                        <h2>Camiseta Azul</h2>
                        <p>30 quetzales</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </div>

            </div>

            <!--PIE DE PAGINA-->
            <footer id="footer">
                <p>Desarrollado por Kevin Cuyan &COPY; <?= date('Y') ?></p>
            </footer>
        </div>
    </body>
</html>
