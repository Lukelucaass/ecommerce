<?php
require_once('controllers/controller.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>MyShop</title>
</head>

<body class="">

    <nav class="col navbar navbar-expand-lg bg-body-tertiary barra-nav">
        <div class="row-12 container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" role="search">
                    <!--<input class="form-control me-2" type="search" placeholder="Buscar productos" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>-->
                    <input type="search" placeholder="Buscar Productos" id="Buscador" />
                </form>

            </div>
            <a class="navbar-brand" href="#">
                <h2>MyShop</h2>
            </a>

            <div class="collapse navbar-collapse ite0" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link aria-current=" page" href="#"><i class="fa-solid fa-user"></i> Iniciar
                            sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i> Carrito de compras</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row-12 container-fluid " id="navbarSupportedContent bar-item1">
            <div class="ite1 collapse navbar-collapse ">
                <ul class="navbar-nav">
                    <li class="nav-item item-space">
                        <a class="nav-link" href="#">Mujer</a>
                    </li>
                    <li class="nav-item item-space">
                        <a class="nav-link" href="#">Hombre</a>
                    </li>
                    <li class="nav-item item-space">
                        <a class="nav-link" href="#">Niños</a>
                    </li>
                    <li class="nav-item item-space">
                        <a class="nav-link" href="#">Sport</a>
                    </li>
                    <li class="nav-item item-space">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <!--Carrusel 1-->
    <div id="carouselAutoplaying" class="container carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselAutoplaying" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 h-100" role="img"
                        aria-label="Placeholder: First slide" src="images/img-mujer3.jpg" alt="" width="800"
                        height="600" role="img" aria-label="Placeholder: First slide">
                    <div class="text-item-carousel">
                        <h1>Colección Verano</h1>
                        <h2>Puedes explorar y comprar diferentes prendas de la nueva colección.</h2>
                    </div>
                    <a class="btn btn-outline-light btn-item-carousel"><i class="fa-solid fa-bag-shopping"></i>
                        Comprar Ahora</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 h-100" role="img"
                        aria-label="Placeholder: Second slide" src="images/img-mujer2.jpg" alt="" width="800"
                        height="600" role="img" aria-label="Placeholder: Second slide">
                    <div class="text-item-carousel">
                        <h1>Colección Verano</h1>
                        <h2>Puedes explorar y comprar diferentes prendas de la nueva colección.</h2>
                    </div>
                    <a class="btn btn-outline-light btn-item-carousel"><i class="fa-solid fa-bag-shopping"></i>
                        Comprar Ahora</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container ">
        <div class="titulo-1">
            <h2>Las tendencias del momento</h2>
        </div>
        <div class="news-bar">
            <div class="Tarjetas02">
                <div class="tarjeta02">
                    <a href="">
                        <img class="img02" src="images/camiseta.jpg" alt="">
                    </a>
                    <div class="text-tarjet02">
                        <h3>Básicos</h3>
                    </div>
                </div>
                <div class="tarjeta02">
                    <a href="">
                        <img class="img02" src="images/vestido.jpg" alt="">
                    </a>
                    <div class="text-tarjet02">
                        <h3>Vestidos</h3>
                    </div>
                </div>
                <div class="tarjeta02">
                    <a href="">
                        <img class="img02" src="images/denim.jpg" alt="">
                    </a>
                    <div class="text-tarjet02">
                        <h3>Denim</h3>
                    </div>
                </div>
                <div class="tarjeta02">
                    <a href="">
                        <img class="img02" src="images/sport.jpg" alt="">
                    </a>
                    <div class="text-tarjet02">
                        <h3>Sport</h3>
                    </div>
                </div>
                <div class="tarjeta02">
                    <a href="">
                        <img class="img02" src="images/zapatos.jpg" alt="">
                    </a>
                    <div class="text-tarjet02">
                        <h3>Zapatos</h3>
                    </div>
                </div>
                <div class="tarjeta02">
                    <a href="">
                        <img class="img02" src="images/conjunto.jpg" alt="">
                    </a>
                    <div class="text-tarjet02">
                        <h3>Set y conjuntos</h3>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <!--Carrusel 2-->
    <!--<<div id="carouselAutoplaying" class="container carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="back-item">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 h-100" role="img"
                        aria-label="Placeholder: First slide" src="images/img-hombre1.jpg" alt="" width="800"
                        height="600" role="img" aria-label="Placeholder: First slide">
                    <div class="text-item-carousel">
                        <h2>Puedes explorar y comprar diferentes prendas de la nueva colección.</h2>
                    </div>
                    <a class="btn btn-outline-light btn-item-carousel"><i class="fa-solid fa-bag-shopping"></i>
                        Comprar Ahora</a>
                </div>
            </div>
            div class="carousel-item">
                <div class="back-item">
                    <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 h-100" role="img"
                        aria-label="Placeholder: Second slide" src="images/img-hombre2.jpg" alt="" width="800"
                        height="600" role="img" aria-label="Placeholder: Second slide">
                    <div class="text-item-carousel">
                        <h2>Puedes explorar y comprar diferentes prendas de la nueva colección.</h2>
                    </div>
                    <a class="btn btn-outline-light btn-item-carousel"><i class="fa-solid fa-bag-shopping"></i>
                        Comprar Ahora</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>-->

    <div class="container back-item">
        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 h-100" role="img"
            aria-label="Placeholder: First slide" src="images/img-hombre1.jpg" alt="" width="800" height="600"
            role="img" aria-label="Placeholder: First slide">
        <div class="text-item-carousel2">
            <h1>Colección 2023</h1>
            <h2>Novedades que no te puedes perder en ropa de hombre.</h2>
        </div>
        <a class="btn btn-outline-light btn-item-carousel"><i class="fa-solid fa-bag-shopping"></i>
            Comprar Ahora</a>
    </div>

    <!--Carrusel 3-->

    <div id="carouselNews" class="container carousel slide" data-ride="carousel">
        <div class="titulo-2">
            <h2>Novedades</h2>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselNews" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner carrusel-3">
            <div class="carousel-item active">
                <div class="cards-wrapper">
                    <div class="card">
                        <a href="">
                            <img src="images/falda.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Falda plisada de estilo retro</h5>
                                <p class="item-price"><strike></strike> <span>$65.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/camiseta2.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camiseta clásica de algodón</h5>
                                <p class="item-price"><strike></strike> <span>$35.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/jeans.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jeans de corte recto</h5>
                                <p class="item-price"><strike></strike> <span>$60.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/chaqueta.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chaqueta de cuero sintético</h5>
                                <p class="item-price"><strike></strike> <span>$90.000</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card">
                        <a href="">
                            <img src="images/traje-baño.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Traje de baño</h5>
                                <p class="item-price"><strike></strike> <span>$50.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/chaleco.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chaleco acolchado de invierno</h5>
                                <p class="item-price"><strike></strike> <span>$85.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/camisa-cuadros.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camisa cuadros manga larga</h5>
                                <p class="item-price"><strike></strike> <span>$45.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/fedora.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sombrero fedora</h5>
                                <p class="item-price"><strike></strike> <span>$20.000</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card">
                        <a href="">
                            <img src="images/blusa-seda.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Blusa elegante de seda</h5>
                                <p class="item-price"><strike></strike> <span>$70.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/abrigo.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Abrigo de lana clásico</h5>
                                <p class="item-price"><strike></strike> <span>$120.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/polo.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Camiseta polo de estilo casual</h5>
                                <p class="item-price"><strike></strike> <span>$30.000</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="card d-none d-md-block">
                        <a href="">
                            <img src="images/calcetines.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Calcetines de colores variados</h5>
                                <p class="item-price"><strike></strike> <span>$15.000</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" data-bs-target="#carouselNews" type="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselNews" type="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container back-item">
        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 h-100" role="img"
            aria-label="Placeholder: First slide" src="images/img-ropa.jpg" alt="" width="800" height="600" role="img"
            aria-label="Placeholder: First slide">
        <div class="text-item-carousel2">
            <h1>Colección 2023</h1>
            <h2>Puedes explorar y comprar la nueva colección.</h2>
        </div>
        <a class="btn btn-outline-light btn-item-carousel"><i class="fa-solid fa-bag-shopping"></i>
            Ver Colección</a>
    </div>

    <!-- Todos los Productos -->

    <div class="container container-fluid cont-prod">

        <div class="row cont-prod2">
            <div class="col-3 list-categ">
                <h5>Nuevos productos</h5>
                <ul>
                    <li>
                        <a class="categ-link" href="">Ver todo</a>
                    </li>
                </ul>
                <h5>Comprar por producto</h5>
                <ul>
                    <li>
                        <a class="categ-link" href="">Ver todo</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Camisetas</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Shorts</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Pantalones</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Jeans</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Sacos y hoodies</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Básicos</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Medias</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Accesorios</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Zapatos</a>
                    </li>
                    <li>
                        <a class="categ-link" href="">Ropa interior</a>
                    </li>

                </ul>
            </div>
            <div class="col-9 list-product">
                <div class="titulo-2">
                    <h3>TODO LOS PRODUCTOS PARA HOMBRE</h3>
                    <p>Explora la amplia selección de moda masculina que ofrece MyShop Colombia. Descubre una variedad
                        de
                        estilos que abarcan desde los clásicos hasta los más modernos. En nuestro catálogo encontrarás
                        camisetas, sudaderas con capucha, chaquetas, pantalones, abrigos, camisas y mucho más. Renueva
                        tu guardarropa hoy mismo con nuestras opciones ideales para cualquier ocasión.</p>
                </div>
                <div class="cont-targetas">
                    <?php
                    while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="card d-none d-md-block">
                        <img src="images/<?php echo $row['img_prod'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['nombre_prod'] ?></h5>
                            <p class="item-price"><strike></strike> <span>$<?php echo number_format($row['precio_prod'], 0, '.', '.') ?></span></p>
                            <a href="#" class="btn btn-outline-secondary">Añadir a Carrito</a>
                        </div>
                    </div>
                    <?php
                    }
                    mysqli_close($getconex);
                    ?>
                    
                </div>

            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="fondo-footer">
        <footer class="container footer">
            <div class="row">
                <div class="col-12 col-md">
                    <div>
                        <h3>MyShop</h3>
                    </div>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, sed. Optio reiciendis natus.</p>
                    <div class="redes-sociales">
                        <a href="#"><img class="icono-redes" src="images/icons/facebook-icon.png" alt="Facebook"></a>
                        <a href="#"><img class="icono-redes" src="images/icons/twitter-icon.png" alt="Twitter"></a>
                        <a href="#"><img class="icono-redes" src="images/icons/linkedin-icon.png" alt="LinkedIn"></a>
                        <a href="#"><img class="icono-redes" src="images/icons/instagram-icon.png" alt="Instagram"></a>
                    </div>
                </div>
                <div class="col-6 col-md">
                    <h5>CATALOG</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary text-decoration-none" href="#">Mujer</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Hombre</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Niños</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Sport</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Ofertas</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>ABOUT US</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary text-decoration-none" href="#">Our Prodocers</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Sitemap</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">FAQ</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">About Us</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>CUSTOMER SERVICES</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary text-decoration-none" href="#">Contact Us</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Track Your Order</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Product Care & Repair</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Book an Appointment</a></li>
                        <li><a class="link-secondary text-decoration-none" href="#">Shipping & Returns</a></li>
                    </ul>
                </div>

            </div>
        </footer>
        <div class="footer-f">
            <h5 class="d-block mb-3 text-body-light">&copy; 2023 MyShop</h5>
        </div>
    </div>

    

    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e57c3d96a0.js" crossorigin="anonymous"></script>
</body>

</html>