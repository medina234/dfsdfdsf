<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/css/styles-index.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container">
        <div class="container-main">

            <form class="section-form" action="login.php" method="POST">
                <h2>Inicio de sesión</h2>
                <label>Ingrese su usuario o email</label>
                <input id="usuario" required>
                <label>Ingrese su contraseña</label>
                <input type="text" id="contraseña" required>

                <div class="container-btn">
                    <input id="btn" type="submit" value="Iniciar sesión">
                </div>

                <p>¿Es nuevo? <span> <a href="Vista/pag-creacion.html">Crea tu usuario</a></span></p>
                <p>¿Olvideaste tu contraseña? <a href="Vista/pag-recuperacion.html">Recuperala</a></p>
            </form>

            <section class="section-img">
                <img src="Vista/img/image.png" alt="">
            </section>
        </div>
    </div>
</body>
</html>