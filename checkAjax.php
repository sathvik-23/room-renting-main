<?php

    include "Controller/bachelorsignupValidation.php";
    $user_name=$_GET["user_name"];
    $check=checkUsername($user_name);
    if($check){
        echo "true";
    }
    else {
        echo "false";
    }

?>