<html lang="IT-it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/product.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand navbar-light fixed-top">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                            <image href="/img/icons/7.svg" width="100%" height="100%"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item me-3 ms-5">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="/img/icons/sale.png" width="60" alt="">
                    </a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link" id="sidebarbutton" aria-current="page" style="cursor: pointer;"
                       onclick="showSideBar()"><i
                                class="nav-icon fw-bold fa-solid fa-bars"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="flex-column flex-shrink-0 p-3 sidebar" id="sidebar">
    <ul class="nav nav-pills flex-column mb-auto mt-3">
        <li class="nav-item">
            <a href="#" class="nav-link" style="text-decoration: none; color: white" aria-current="page">
                <i class="bi bi-bag-check me-4" style="font-size: 27px"></i>
                <p class="p-0 m-0 d-inline-block" style="font-size: 27px">SHOP</p>
                <span class="p-0 m-0 d-inline-block float-end" style="font-size: 27px;color: white;"> > </span>
                <hr style="height: 2px; opacity: 1;border-radius: 20px; color: white; background: white;">
            </a>
        </li>
        <li class="nav-item mt-2 ">
            <a href="#" class="nav-link" style="text-decoration: none; color: white" aria-current="page">
                <i class="bi bi-bag-check me-4" style="font-size: 27px"></i>
                <p class="p-0 m-0 d-inline-block" style="font-size: 27px">OUTLET</p>
                <span class="p-0 m-0 d-inline-block float-end" style="font-size: 27px;color: white;"> > </span>
                <hr style="height: 2px; opacity: 1;border-radius: 20px; color: white; background: white;">
            </a>
        </li>
        <li class="nav-item mt-2">
            <a href="#" class="nav-link" style="text-decoration: none; color: white" aria-current="page">
                <i class="bi bi-people-fill me-4" style="font-size: 27px"></i>
                <p class="p-0 m-0 d-inline-block" style="font-size: 27px">ABOUT US</p>
                <span class="p-0 m-0 d-inline-block float-end" style="font-size: 27px;color: white;"> > </span>
                <hr style="height: 2px; opacity: 1;border-radius: 20px; color: white; background: white;">
            </a>
        </li>
        <li class="nav-item mt-2">
            <a href="#" class="nav-link" style="text-decoration: none; color: white" aria-current="page">
                <i class="fa-solid fa-headset me-4" style="font-size: 27px"></i>
                <p class="p-0 m-0 d-inline-block" style="font-size: 27px">ASSISTENZA</p>
                <span class="p-0 m-0 d-inline-block float-end" style="font-size: 27px;color: white;"> > </span>
                <hr style="height: 2px; opacity: 1;border-radius: 20px; color: white; background: white;">
            </a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="text-light">ALL RIGHTS RESERVED 2024</p>
            </div>
        </div>
    </div>
</div>
<div class="overlay" id="overlay"></div>
<section>
    <div class="container-fluid">
        <div class="custom-background"></div>
        <div class="row" style="margin-top: 7%;">
            <div class="col ms-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active carousel-circle" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="carousel-circle" aria-current="true" aria-label="Slide 1"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/prodotti/1.png" class="d-block img-product" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/prodotti/1.png" class="d-block img-product" alt="...">
                        </div>
                    </div>
                </div>
                <h1 class="text-product fw-bold">NOME DEL PRODOTTO - CODICE</h1>
            </div>
            <div class="col ms-5">
                <div class="row mt-5">
                    <div class="col d-flex justify-content-end me-5">
                        <div class="colored-square color-green"></div>
                        <div class="colored-square color-yellow"></div>
                        <div class="colored-square color-red"></div>
                    </div>
                </div>
                <div class="row mt-0">
                    <div class="col">
                        <p class="p-0 m-0"><strong>MATERIALE MONTATURA:</strong></p>
                        <p class="mb-4">Iniettato</p>
                        <p class="p-0 m-0"><strong>FORMA MONTATURA:</strong></p>
                        <p class="mb-4">Maschera</p>
                        <p class="p-0 m-0"><strong>COLORE MONTATURA:</strong></p>
                        <p class="mb-4">Grey Ink</p>
                        <p class="p-0 m-0"><strong>VESTIBILITÀ MONTATURA:</strong></p>
                        <p class="mb-4">Ampio</p>
                        <p class="p-0 m-0"><strong>COLORE LENTI:</strong></p>
                        <p class="mb-4">Prizm Road Jade</p>
                        <p class="p-0 m-0"><strong>TRATTAMENTO LENTI:</strong></p>
                        <p class="mb-4">Prizm</p>
                        <p class="p-0 m-0"><strong>GENERE:</strong></p>
                        <p class="mb-4">UNISEX</p>
                        <p class="p-0 m-0 me-5">Oakley è il marchio di occhiali leader mondiale nel segmento sportivo, unico ed inimitabile
                            grazie al mix di tecnologia e design di tutti i suoi prodotti</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <h1 class=" price-product fw-bold">€178,00</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="application/javascript">
    const showSideBar = () => {
        document.getElementById("sidebarbutton").classList.toggle('show');
        document.getElementById("sidebar").classList.toggle('show');
        document.getElementById("overlay").classList.toggle('show');
    }
</script>
<script src="https://kit.fontawesome.com/cc852ff3c8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>
</html>