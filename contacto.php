<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactenos</title>

    <head>
        <link rel="stylesheet" href="estilos_web.css">
    </head>

<body>

    <header>
        <nav class="menu">
            <ul>
                <li> <a href="index.php">Inicio </a></li>
                <li> <a href="nosotros.php">A cerca de Nosotros </a></li>
                <li> <a href="contacto.php">Contacto </a></li>
                <li> <a href="intranet.php">Acceso Intranet </a></li>
            </ul>
        </nav>
    </header>

    <section class="formulario_estilo">
        <form action="">
            <ul>
                <li><label for="nombre">Indiquenos su Nombre</label>
                    <input type="text" name="nombre" class="contacto_input">
                </li>
                <li><label for="apellido">Indiquenos su Apellido</label>
                    <input type="text" name="apellido" class="contacto_input">
                </li>
                <li><label for="localidad">Indiquenos su Localidad</label>
                    <input type="text" name="edad" class="contacto_input">
                </li>
                <li><label for="mensaje">Diaganos en que podemos ayudarlo</label>
                    <textarea name="mensaje" id="" cols="80" rows="10" class="contacto_input"></textarea>
                </li>
            </ul>
        </form>
    </section>

    <footer class = piedepagina >
        <div class="box"></div>
        <a href="index.php">Regresar al Inicio </a></li>
    </footer>
</html>
