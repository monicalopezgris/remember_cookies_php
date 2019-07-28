<?php

/* 
 * Mostrar valor cookies creadas en create_cookies.php
 */

if(isset($_COOKIE['simpleCookie'])){
    echo '<h2>'.$_COOKIE['simpleCookie'].'</h2>';
}else{
    echo '<h2>No existe cookie simple</h2>';
};

if(isset($_COOKIE['dayCookie'])){
    echo '<h2>'.$_COOKIE['dayCookie'].'</h2>';
}else{
    echo '<h2>No existe cookie diaria</h2>';
};

?>

<a href="create_cookies.php">Crear cookies</a>

<a href='delete_coocies.php'>Borrar cookies</a>