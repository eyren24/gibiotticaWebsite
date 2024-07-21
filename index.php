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
    <div class="navbar-container">
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
                    <a class="nav-link" id="sidebarbutton" aria-current="page" style="cursor: pointer;" onclick="showSideBar()"><i
                                class="nav-icon fw-bold fa-solid fa-bars"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="flex-column flex-shrink-0 p-3 sidebar" id="sidebar">
    <ul class="nav nav-pills flex-column mb-auto mt-3">
        <li class="nav-item">
            <a href="#" class="nav-link" style="text-decoration: none; color: black;" aria-current="page">
                <i class="bi bi-bag-check me-4" style="font-size: 27px"></i>
                <p class="p-0 m-0 d-inline-block" style="font-size: 27px">SHOP</p>
                <span class="p-0 m-0 d-inline-block float-end" style="font-size: 27px;color: black;"> > </span>
                <hr style="height: 2px; opacity: 1;border-radius: 20px; color: black; background: white;">
            </a>
        </li>
        <li class="nav-item mt-2 ">
            <a href="#" class="nav-link" style="text-decoration: none; color: black;" aria-current="page">
                <i class="bi bi-bag-check me-4" style="font-size: 27px"></i>
                <p class="p-0 m-0 d-inline-block" style="font-size: 27px">OUTLET</p>
                <span class="p-0 m-0 d-inline-block float-end" style="font-size: 27px;color: black;"> > </span>
                <hr style="height: 2px; opacity: 1;border-radius: 20px; color: black; background: white;">
            </a>
        </li>
        <li class="nav-item mt-2">
            <a href="#" class="nav-link" style="text-decoration: none; color: black;" aria-current="page">
                <i class="bi bi-people-fill me-4" style="font-size: 27px"></i>
                <p class="p-0 m-0 d-inline-block" style="font-size: 27px">ABOUT US</p>
                <span class="p-0 m-0 d-inline-block float-end" style="font-size: 27px;color: black;"> > </span>
                <hr style="height: 2px; opacity: 1;border-radius: 20px; color: black; background: white;">
            </a>
        </li>
        <li class="nav-item mt-2">
            <a href="#" class="nav-link" style="text-decoration: none; color: black;" aria-current="page">
                <i class="fa-solid fa-headset me-4" style="font-size: 27px"></i>
                <p class="p-0 m-0 d-inline-block" style="font-size: 27px">ASSISTENZA</p>
                <span class="p-0 m-0 d-inline-block float-end" style="font-size: 27px;color: black;"> > </span>
                <hr style="height: 2px; opacity: 1;border-radius: 20px; color: black; background: white;">
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
    <div class="container-fluid container-half mb-5">
        <div class="left-side"></div>
        <div class="right-side"></div>
        <img src="img/Screenshot_2.png" alt="Centered Image" class="center-image">
        <img src="img/logo.png" alt="Centered Image" class="center-image-logo">
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