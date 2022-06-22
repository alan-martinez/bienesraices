<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor, enim vel sollicitudin rutrum, mi velit tempus urna, eu porttitor tellus nisi sed nibh. Cras a magna eget augue consequat porta. Phasellus a tristique nisl, scelerisque luctus neque. Fusce dapibus vulputate nibh, pharetra aliquam enim dignissim in. Integer a dui et urna accumsan varius. Mauris urna est, pulvinar vel libero non, auctor aliquet eros. Pellentesque massa est, molestie eget tellus sed, rhoncus luctus metus.
            </p>
            <p>
                Fusce a mauris quis purus gravida volutpat lacinia eget erat. Nullam suscipit lacus eget est suscipit, non porttitor purus aliquam. Proin sed turpis cursus, malesuada diam commodo, viverra arcu. Vivamus luctus malesuada volutpat. Pellentesque vitae aliquam mi, vel mattis tortor. Nam iaculis malesuada dolor, nec varius metus ultricies eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
            </p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>