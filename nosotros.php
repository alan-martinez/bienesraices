<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porttitor, enim vel sollicitudin rutrum, mi velit tempus urna, eu porttitor tellus nisi sed nibh. Cras a magna eget augue consequat porta. Phasellus a tristique nisl, scelerisque luctus neque. Fusce dapibus vulputate nibh, pharetra aliquam enim dignissim in. Integer a dui et urna accumsan varius. Mauris urna est, pulvinar vel libero non, auctor aliquet eros. Pellentesque massa est, molestie eget tellus sed, rhoncus luctus metus.
                </p>
                <p>
                    Fusce a mauris quis purus gravida volutpat lacinia eget erat. Nullam suscipit lacus eget est suscipit, non porttitor purus aliquam. Proin sed turpis cursus, malesuada diam commodo, viverra arcu. Vivamus luctus malesuada volutpat. Pellentesque vitae aliquam mi, vel mattis tortor. Nam iaculis malesuada dolor, nec varius metus ultricies eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis ornare sem. Suspendisse et augue viverra, tincidunt lacus sed, aliquet risus. Phasellus rutrum accumsan lorem, non sagittis velit blandit at. Sed eget eros hendrerit, aliquam risus nec, convallis lectus.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis ornare sem. Suspendisse et augue viverra, tincidunt lacus sed, aliquet risus. Phasellus rutrum accumsan lorem, non sagittis velit blandit at. Sed eget eros hendrerit, aliquam risus nec, convallis lectus.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis ornare sem. Suspendisse et augue viverra, tincidunt lacus sed, aliquet risus. Phasellus rutrum accumsan lorem, non sagittis velit blandit at. Sed eget eros hendrerit, aliquam risus nec, convallis lectus.
                </p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>