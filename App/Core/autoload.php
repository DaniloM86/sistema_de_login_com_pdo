<?php



$rota = explode('/',$_GET['url'] ?? 'Home');

if (file_exists('App/Pages/'.$rota[0].'.php')) {
    
    require_once('App/Pages/'.$rota[0].'.php');
}
elseif (file_exists('App/Controller/'.$rota[0].'.php')) {

    require_once('App/Controller/'.$rota[0].'.php');
}
elseif (file_exists('App/Molde/'.$rota[0].'.php')) {
    
    require_once('App/Model/'.$rota[0].'.php');
}
else{
    exit();
}
