<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Digital</title>
    <!-- Favicons -->
    <link rel="icon" href="../assets/img/favicon.png">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- =======================================================
    * Template Name: eStartup - v4.6.0
    * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body id="body-program">

<!-- HEADER ANIMATION -->
<div class="banner-marketing" id="principal-animation">
    <div>
        <img src="../assets/img/logo-blanco-horizontal.png" alt="">
        <div id="arrowAnimated">
            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
    </div>
</div>

<!-- HEADER --> 
<div class="header">
    <img onclick="location.href='../../public'" src="../assets/img/logo-blanco-horizontal.png" alt="">
</div>

<div class="container-fluid principal">
    <div class="row justify-content-center align-items-center banner-marketing">

        <div id="welcome-msg" class="col-6 banner-marketing">
            <p class="title-italic">¡Comienza ahora!<br><span class="title-black">Técnico Laboral en Marketing Digital</span></p>
        </div>

        <!-- FORM -->
        <div class="col-4 form-bg-color">
            <div>
                <p class="title">Transforma<br><span>tu futuro</span></p>
                <p class="subtitle">¡Comienza ahora!</p>
            </div>
            <div>
                <?php require_once ('../form.php')?>
            </div>
        </div>
    </div>
</div>

<!-- ARROW-UP -->
<div id="arrow-up">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
        <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
    </svg>
</div>

<div class="sub-menu">
    <button onclick="window.scroll(0,650)">¿Qué es el programa?</button>
    <button onclick="window.scroll(0,1380)">¿Qué necesitas para estudiar?</button>
    <button onclick="window.scroll(0,1985)">Habilidades y ventajas de estudiar</button>
</div>

<div class="pad-50">
    <p class="title-description">¿Que es el programa?</p>
    <p class="text-description">En este programa formamos técnicos laborales en Marketing Digital, con capacidades para acompañar la implementación de estrategias de posicionamiento, promoción de marca, análisis de datos, con capacidad de liderazgo y creatividad para apoyar la generación de campañas de mercadeo por medio de medios digitales.</p>
</div>

<div class="benefits">
    <div class="circles pad-50">
        <svg width="18" height="18">
            <circle cx="9" cy="9" r="7" fill="#FFFFFF" />
        </svg>
        <svg width="18" height="18">
            <circle cx="9" cy="9" r="7" fill="#FFFFFF" />
        </svg>
        <svg width="18" height="18">
            <circle cx="9" cy="9" r="7" fill="#FFFFFF" />
        </svg>
    </div>
    <div class="container-fluid no-carousel">
        <div class="row justify-content-evenly">
            <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="75" height="75" fill="#FFFFFF">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63l58.35 58.34zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63zM624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z"/>
                </svg>
                <br><br>
                <p>Modalidad virtual<br><br><span>por que estudiar virtualmente puede ser un beneficio</span></p>
            </div>
            <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="75" height="75" fill="#FFFFFF">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/>
                </svg>
                <br><br>
                <p>Costos y beneficios<br><br><span>por que estudiar virtualmente puede ser un beneficio</span></p>
            </div>
            <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="75" height="75" fill="#FFFFFF">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"/>
                </svg>
                <br><br>
                <p>Capacitación para el trabajo<br><br><span></span></p>
            </div>
        </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="75" height="75" fill="#FFFFFF">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M255.03 261.65c6.25 6.25 16.38 6.25 22.63 0l11.31-11.31c6.25-6.25 6.25-16.38 0-22.63L253.25 192l35.71-35.72c6.25-6.25 6.25-16.38 0-22.63l-11.31-11.31c-6.25-6.25-16.38-6.25-22.63 0l-58.34 58.34c-6.25 6.25-6.25 16.38 0 22.63l58.35 58.34zm96.01-11.3l11.31 11.31c6.25 6.25 16.38 6.25 22.63 0l58.34-58.34c6.25-6.25 6.25-16.38 0-22.63l-58.34-58.34c-6.25-6.25-16.38-6.25-22.63 0l-11.31 11.31c-6.25 6.25-6.25 16.38 0 22.63L386.75 192l-35.71 35.72c-6.25 6.25-6.25 16.38 0 22.63zM624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z"/>
                </svg>
                <br><br>
                <p>Modalidad virtual<br><br><span>por que estudiar virtualmente puede ser un beneficio</span></p>
            </div>
            <div class="carousel-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="75" height="75" fill="#FFFFFF">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/>
                </svg>
                <br><br>
                <p>Costos y beneficios<br><br><span>por que estudiar virtualmente puede ser un beneficio</span></p>
            </div>
            <div class="carousel-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="75" height="75" fill="#FFFFFF">
                    <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"/>
                </svg>
                <br><br>
                <p>Capacitación para el trabajo<br><br><span></span></p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="circles pad-50">
        <svg width="18" height="18">
            <circle cx="9" cy="9" r="7" fill="#FFFFFF" />
        </svg>
        <svg width="18" height="18">
            <circle cx="9" cy="9" r="7" fill="#FFFFFF" />
        </svg>
        <svg width="18" height="18">
            <circle cx="9" cy="9" r="7" fill="#FFFFFF" />
        </svg>
    </div>
</div>

<div class="container-fluid perfil">
    <div class="row justify-content-between align-items-center">
        <div class="col-6">
            <div class="padsid-75">
                <p class="title-perfil">Perfil del<br><span>Estudiante</span></p>
                <p class="subtitle-perfil">¿Qué necesitas para estudiar?</p>
                <p class="text-perfil padtop-20">El aspirante debe tener habilidades en redacción de textos, creatividad, proactividad, análisis, investigación, interés en la atención al cliente y un profundo sentido ético. Debe contar con facilidad para la comunicación oral y escrita y buen manejo de las redes sociales.</p>
            </div>
        </div>
        <div class="col-6">
            <img class="img-perfil" src="../assets/img/04-estudiante-marketing.jpg" alt="">
        </div>
    </div>
    <div class="row justify-content-between align-items-center">
        <div class="col-6">
            <img class="img-perfil" src="../assets/img/04-egresado-marketing.jpg" alt="">
        </div>
        <div class="col-6">
            <div class="padsid-75">
                <p class="title-perfil">Perfil del<br><span>Egresado</span></p>
                <p class="subtitle-perfil">Habilidades y ventajas de estudiar</p>
                <p class="text-perfil padtop-20">El egresado tendrá capacidades de utilizar medios digitales y manejo de campañas que le permitan planear, coordinar, apoyar y ejecutar campañas estratégicas de mercadeo, para contribuir a la adecuación de la imagen corporativa, ventas y posicionamiento de las marcas.</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-around align-items-center plan-estudios">
        <div class="col-auto">
            <p>Plan de Estudios<br><span>Técnico Laboral (4 módulos)</span></p>
        </div>
        <div class="col-auto">
            <a href="">Ver plan de estudio</a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="footer pad-50 row">
        <div class="col-6">
            <h2>Mantente en Contacto</h2>
            <h4>Dirección Cl. 56 # 45 26, Medellin, Antioquia</h4>
            <div>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                    </svg>
                    <a href="https://www.indecap.edu.co/" target="_blank" rel="noopener noreferrer">https://www.indecap.edu.co/</a>
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <a href="tel:+(4) 448 47 94">Tel: (4) 448 47 94</a>
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                    <a href="mailto:info@indecaptech.com">info@indecaptech.com</a>
                </p>
            </div>
        </div>
        <div class="col-6" id="social-footer">
            <a href="https://www.facebook.com/indecaptech" target="_blank" rel="noopener noreferrer">
                <div class="facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" viewBox="0 0 320 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                    </svg>
                </div>
            </a>
            <a href="https://www.instagram.com/indecap_tech/" target="_blank" rel="noopener noreferrer">
                <div class="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                    </svg>
                </div>
            </a>
            <a href="https://twitter.com/Indecap_Tech" target="_blank" rel="noopener noreferrer">
                <div class="twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" viewBox="0 0 512 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                    </svg>
                </div>
            </a>
            <a href="https://bit.ly/ProgramacionDeSoftware" target="_blank" rel="noopener noreferrer">
                <div class="whatsapp">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" viewBox="0 0 448 512">
                        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="derechos">
    <p>INDECAP | Instituto de Ciencias Aplicadas</p>
</div>

<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/programs.js"></script>

</body>
</html>