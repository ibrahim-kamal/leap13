<?php 
    session_start();
    $url = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."";
    $setting["segment"] = explode('/',$url);
    $class = isset($setting["segment"][4]) ? $setting["segment"][4] : "";  
    $method = isset($setting["segment"][5]) ? $setting["segment"][5] : "index";
    if($class == ""){
        load_controller($setting["welcome_page"]);
    }
    else{
        load_controller($class,$method);
    }
?>