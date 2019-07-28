<?php

setcookie('simpleCookie','Simple value');
setcookie('dayCookie', 'Cookie that expires in 1 day', time()+(60*60*24));

header('Location:result_cookies.php');


