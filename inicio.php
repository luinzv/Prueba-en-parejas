<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid navbars">
            <a class="navbar-brand" href="#">
                <img src="src/logo-page-pokedex.png" alt="logo pokemon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active background-nav" aria-current="page" href="inicio.php">POKEDEX</a>
                    </li>
                    <li class="nav-item background-nav">
                        <a class="nav-link" href="#">NOTICIAS</a>
                    </li>

                    <li class="nav-item background-nav">
                        <a class="nav-link" href="#">NOSOTROS</a>
                    </li>
                </ul>
                <div class="d-flex container-ingresar">
                    <a href="ingresar.php" class="container-register text-danger">EXPLORA LA POKEDEX!</a>


                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="contenedor-presentacion">
                    Este proyecto es una aplicación web interactiva que utiliza la PokeAPI para mostrar información
                    dinámica sobre Pokémon. El objetivo es integrar funcionalidades avanzadas como login y registro de
                    usuarios para ofrecer una experiencia personalizada.
                </div>
            </div>
            <div class="col-6">
                <div class="contenedor-presentacion">

                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>