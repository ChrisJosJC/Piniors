<?php

class View {
    function __construct()
    {
        
    }

    function render($name, $level=0, $redirect="login/index"){
        if(($level == 0 && isset($_SESSION["level"]) == 0) || isset($_SESSION["level"]) ==(1||2)){
            include_once("view/".$name.".php");
        }else {
            include_once("view/".$redirect.".php") ;
        }
    }

    
}


?>