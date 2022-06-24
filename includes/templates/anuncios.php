<?php
    //Importar la conexion 
    // require __DIR__ . '/../config/database.php';
    require 'includes/config/database.php';
    // require '../config/database.php';
    $db = conectarDB();
    //Consultar 
    $query = " SELECT * FROM propiedades LIMIT ${limite}";

    //Obtener los resultados
    $resultado = mysqli_query($db, $query);

?>


<div class="contenedor-anuncios">
    <?php while ($propiedades = mysqli_fetch_array($resultado)): ?>
    <div class="anuncio">
        <img loading="lazy" src="imagenes/<?php echo $propiedades['imagen']; ?>" alt="Anuncio">

        <div class="contenido-anuncio">
            <h3><?php echo $propiedades['titulo']; ?></h3>
            <p><?php echo $propiedades['descripcion']; ?></p>
            <div class="precio">$<?php echo $propiedades['precio']; ?></div>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                        <p><?php echo $propiedades['wc']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                        <p><?php echo $propiedades['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones">
                        <p><?php echo $propiedades['habitaciones']; ?></p>
                    </li>
                </ul>

                <a href="anuncio.php?id=<?php echo $propiedades['id']; ?>"class="boton-amarillo-block">
                    Ver propiedad
                </a>
        </div> <!-- .contenido-anuncio -->
    </div> <!-- .anuncio -->
    <?php endwhile; ?>

</div> <!-- .contenedor-anuncios -->

<?php 

    //Cerra la conexion 
    mysqli_close($db);
?>