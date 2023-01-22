<?php
    
    $name = $_POST['name'];
    $password = $_POST['password'];

    echo $name . " " . $password;
    
    if ($name == "coder" && $password == "heyyou"){
        header("location: ../admin/dashboard.html");
    } else{
        header("location: ../admin/index.html");

    }

?>