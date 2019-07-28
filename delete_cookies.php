<?php


if(isset($_COOKIE['simpleCookie'])){
    undet($_COOKIE['simpleCookie']);
    setcookie('simpleCookie','', time()-100);
}

// Redireccionar a la location indicada en el header
header('Location:result_cookies.php');