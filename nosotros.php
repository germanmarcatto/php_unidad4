<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros</title>

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

    <section>
        <?php 
            $nombre_titular = 'German Marcatto';
            $actividad = array("Deserrollo de Sistemas a medida", "Servicio Tecnico", "Ventas de Hardware", "Organizacion de Eventos");
            $clientes = array("CLiente 1", "Cliente 2", "Cliente 3");
        ?>

        <p>Nuestra empresa se dedida a brindar servicios informaticos desde el año 1995, los servicios incluyen:</p> <br>
        <ol class = lista_item>
            <li>
                <?php echo $actividad[0]; ?>
            </li>
            <li>
                <?php echo $actividad[0+1]; ?>
            </li>
            <li>
                <?php echo $actividad[0+2]; ?>
            </li>
            <li>
                <?php echo $actividad[0+3]; ?>
            </li>
        </ol>
    </section>

    <br>

    <section>
        Estas son algunas de las empresas que confian en nuestros servicios son:
        <ol class = lista_item>
            <li>
                <?php echo $clientes[0]; ?>
            </li>
            <li>
                <?php echo $clientes[0+1]; ?>
            </li>
            <li>
                <?php echo $clientes[0+2]; ?>
            </li>
        </ol>
    </section>
    <footer class = piedepagina >
        <div class="box"></div>
        <a href="index.php">Regresar al Inicio </a></li>
    </footer>

</body>

</html>
