<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $datos['title'] ?></title>

    <script src="../public/js/mode-toggle.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style.css">
    
</head>
<body data-bs-theme="light" class="container-fluid p-0">
    <div class="container-xxl" style="height: 100vh;">
        <main class="row flex-reverse" style="height: inherit;">
            <aside class="col-2 p-0 d-flex flex-column justify-content-between">
                <section id="section-user" class="d-flex flex-column ps-1 pe-1 pt-3 pb-3 mt-2">
                    <figure class="w-100 d-flex justify-content-center">
                        <img class="img-user" src="../public/img/icon-user.png" alt="user-profile">
                    </figure>
                    <h3 class="p-1 fs-5 d-none d-md-block">Candido Hernandez Martin</h3>
                    <h4 class="p-1 fs-6 d-none d-md-block">Desarrollador Web</h4>
                </section>
                <ul class="nav nav-pills flex-column p-1"> 
                    <li class="w-100 mt-2 nav-link <?php if($page=='about'){echo 'active';}?>"> 
                        <a class="nav-link d-flex flex-row" href="/generador-cv/views/about">
                            <img class="icon bi me-2" width="30px" height="30px" src="../public/img/icon-about.svg" alt="home">
                            <span class="text-aside fs-6 fw-medium d-none d-md-block">Sobre mí</span>
                        </a> 
                    </li>
                    <li class="w-100 nav-link <?php if($page=='experiencia'){echo 'active';}?>">
                        <a class="nav-link d-flex flex-row" href="/generador-cv/views/experiencia">
                            <img class="icon bi me-2" width="30px" height="30px" src="../public/img/icon-experiencia.svg" alt="experiencia">
                            <span class="text-aside fs-6 fw-medium d-none d-md-block">Experiencia</span> 
                        </a> 
                    </li>
                    <li class="w-100 nav-link <?php if($page=='formacion'){echo 'active';}?>">
                        <a class="nav-link d-flex flex-row" href="/generador-cv/views/formacion">
                            <img class="icon bi me-2" width="30px" height="30px" src="../public/img/icon-education.svg" alt="formacion">
                            <span class="text-aside fs-6 fw-medium d-none d-md-block">Formación</span>
                        </a> 
                    </li>
                </ul>
                <section class="d-flex justify-content-end flex-column pe-3 ps-3">
                    <button id="btn-theme" class="mt-3 mb-3" onclick="modeToggle()" class="badge"></button>
                    <button id="btn-account" class="mt-3 mb-3" type="reset">
                        <span class="d-none d-md-block">Cerrar Sesión</span>
                    </button>
                </section>
            </aside>