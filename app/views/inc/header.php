<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $datos['title'] ?></title>
    <link rel="stylesheet" href="../public/css/style.css">
    <script src="../public/js/mode-toggle.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body data-bs-theme="light" class="container-fluid p-0">
    <div class="container-xxl" style="height: 100vh;">
        <main class="row flex-reverse" style=" height: inherit;">
            <aside class="col-2 p-0 d-flex flex-column justify-content-between" data-bs-theme="light">
                <section id="section-user" class="d-flex flex-column ps-1 pe-1 pt-3 pb-3 mt-2">
                    <figure class="w-100 d-flex justify-content-center">
                        <img class="img-user" src="../public/img/icon-user.png" alt="user-profile">
                    </figure>
                    <h3 class="p-1 fs-5">Candido Hernandez Martin</h3>
                    <h4 class="p-1 fs-6">Desarrollador Web</h4>
                </section>
                <ul class="nav nav-pills flex-column p-2"> 
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="about.php">
                            <img class="bi me-2" style="filter: invert(1)" width="25px" height="25px" src="../public/img/icon-about.svg" alt="home">
                            <span class="fs-6 fw-medium">Sobre mí</span>
                        </a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="experiencia.php">
                            <img class="bi me-2" width="25px" style="filter: invert(1)" height="25px" src="../public/img/icon-experiencia.svg" alt="experiencia">
                            <span class="fs-6 fw-medium">Experiencia</span> 
                        </a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formacion.php">
                            <img class="bi me-2" style="filter: invert(1)" width="25px" height="25px" src="../public/img/icon-education.svg" alt="formacion">
                            <span class="fs-6 fw-medium">Formación</span>
                        </a> 
                    </li>
                </ul>
                <section class="d-flex justify-content-end flex-column pe-2 ps-2">
                    <button id="btn-theme" class="mt-3 mb-3" onclick="modeToggle()" class="badge"></button>
                    <button id="btn-account" class="mt-3 mb-3" type="reset">
                        <span>Cerrar Sesión</span>
                    </button>
                </section>
            </aside>