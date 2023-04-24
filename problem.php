<?php

include 'header.php';


$_SESSION["first_name"] = $_GET["first_name"];
$_SESSION["last_name"] = $_GET["last_name"];
$_SESSION["role"] = $_GET["role"];

print_r($_SESSION);

role_call();

function role_call () {
    $role = $_SESSION["role"];
    echo $role;
    if ( $role == "admin") {
        print("you are a $role");
        <html>
            
        </html>
        
    }
    elseif ($role == "manager") {
        print("you are a $role");
    }
    elseif ($role == "ceo") {
        print("you are a $role");
    }
}

?>