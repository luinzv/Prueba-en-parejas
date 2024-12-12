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

    <link rel="stylesheet" href="styles/styles-ingresar.css">
</head>

<body>
    <div class="formulario">
        <h1>¡Bienvenido Entrenador Pokemón!</h1>
        <form action="login.php" method="POST">
            <div class="nombre">
                <input type="text" name="nombre" id="nombre" required placeholder="Nombre de usuario">
            </div>

            <div class="nombre">
                <input type="password" name="contraseña" required placeholder="Contraseña">
            </div>

            <div class="recordar">¿Olvidó su contraseña?</div>
            <input type="submit" value="Iniciar">

            <div class="registrarse">
                Quiero hacer el <a href="index.php">registro</a>
            </div>
        </form>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>