<?php 

function conertarDB(){
    $db = mysqli_connect('localhost', 'root', 'root', 'bienes_raices');

    if($db){
        echo 'Se conecto';
    }else{
        echo 'No conecto';
    }
}