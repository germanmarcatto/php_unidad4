<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio</title>
<link rel="stylesheet" href="estilos_web.css">

</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <li> <a href="index.php">Inicio </a></li>
                <li> <a href="nosotros.php">Acerca de Nosotros </a></li>
                <li> <a href="contacto.php">Contacto </a></li>
                <li> <a href="intranet.php">Acceso Intranet </a></li>
            </ul>
        </nav>
    </header>
    
    <div class="box"></div>
   
    <?php
        /* configuro variales */
        $titulo_principal = "EVENTOS ACTIVOS";
        $listado_eventos = array("Fiesta de Disfraces", "Fiesta de las Mascaras", "FiestaGood");
        $precio_eventos = array("1500","2500","4000");
        $salto_de_linea = "<br>";
        $cual_mostrar = 0;
    ?>

    <h2>
        <?php
            echo $titulo_principal;
        ?>

    </h2>
    <br>
    
    <ul class = lista_item>
        <li>
            Evento: <?php echo $listado_eventos[$cual_mostrar] ?> <br>
            Costo del Evento: $ <?php echo $precio_eventos[$cual_mostrar] ?> <br>
            Precio Combo: $ <?php echo $precio_eventos[$cual_mostrar] * 0.9 ?> <br>
            <?php echo $salto_de_linea ?>
        </li>
        <li>
            <?php $cual_mostrar = $cual_mostrar +1 ?> 
            Evento: <?php echo $listado_eventos[$cual_mostrar] ?> <br>
            Costo del Evento: $ <?php echo $precio_eventos[$cual_mostrar] ?> <br>
            Precio Combo: $ <?php echo $precio_eventos[$cual_mostrar] * 0.9 ?> <br>
            <?php echo $salto_de_linea ?>
        </li>
        <li>
            <?php $cual_mostrar = $cual_mostrar +1 ?> 
            Evento: <?php echo $listado_eventos[$cual_mostrar] ?> <br>
            Costo del Evento: $ <?php echo $precio_eventos[$cual_mostrar] ?> <br>
            Precio Combo: $ <?php echo $precio_eventos[$cual_mostrar] * 0.9 ?> <br>
            <?php echo $salto_de_linea ?>
        </li>
    </ul>

    <footer class = piedepagina >
        "Diseño - German Marcatto"
    </footer>    
</body>

</html>
