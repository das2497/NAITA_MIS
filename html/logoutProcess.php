<?php

session_start();

if (isset($_SESSION["SA"])) {

    $_SESSION["SA"] = null;
    session_destroy();
    echo "success";
    
}elseif (isset($_SESSION["AD"])) {
    
    $_SESSION["AD"] = null;
    session_destroy();
    echo "success";
}
