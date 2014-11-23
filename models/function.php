<?php

function redirect($url){
    header("location: $url");
    exit();
}
function __autoload($url){
    $url_= "models/$url";
    $real_url= strtolower($url_);
    require_once "$real_url.php";
}
