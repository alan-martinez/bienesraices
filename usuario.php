<?php
    require 'includes/app.php';
    //Importar la conexion 
    $db = conectarDB();

    //Crear usuario y password 
    $email = "correo@correo.com";
    $password = "123456";

    $passwordHash = password_hash($password, PASSWORD_BCRYPT);


    //query para crear el usuario
    $query = " INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}'); ";
    // echo $query;

    //Agregarlo a la base de datos
    mysqli_query($db, $query);