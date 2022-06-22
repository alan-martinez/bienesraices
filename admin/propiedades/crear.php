<?php 

    //Base de datos
    require '../../includes/config/database.php';

    $db = conertarDB();

    //Arreglo con mensajes de error 
    $errores = [];

    //Ejecutar el formulario despues de que el usuario lo envie
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';
        
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];
        
        if (!$titulo){
            $errores[] = 'El titulo no puede ir vacio';
        }
        if (!$precio){
            $errores[] = 'El precio es obligatorio';
        }
        if (strlen($descripcion) < 50){
            $errores[] = 'La descripcion es obligatoria y minimo 50 caracteres';
        }
        if (!$habitaciones){
            $errores[] = 'El numero de habitaciones es obligatorio';
        }
        if (!$wc){
            $errores[] = 'El numero de baños es obligatorio';
        }
        if (!$estacionamiento){
            $errores[] = 'El numero de lugares de estacionamiento es obligatorio';
        }
        if (!$vendedorId){
            $errores[] = 'Elige un vendedor';
        }
        
        // echo '<pre>';
        // var_dump($errores);
        // echo '</pre>';

        //Revisar que el arreglo de errores este vacio 
        if (empty($errores)) {
            //Insertar en la base de datos
            $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) 
                    VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc' , '$estacionamiento',  '$vendedorId');
            ";
    
            // echo $query;
    
            $resultado = mysqli_query($db, $query);
            if($resultado){
                echo 'Insertado correctamente';
            }
        }


    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action='/admin/propiedades/crear.php'>
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Numero habitaciones" min="1" max="9">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Numero baños" min="1" max="9">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Numero estacionamientos" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor" id="vendedor">
                    <option value="">--Seleccione--</option>
                    <option value="1">Alan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>