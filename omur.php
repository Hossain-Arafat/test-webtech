<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['fname'];

    if(!empty($name)){
        echo "welcome $name";
    }
}

?>