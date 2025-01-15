<?php
session_start();
$username="user";
$password="password";

$usernamej1="judge1";
$passwordj1 = "password";

$usernamej2 = "judge2";
$passwordj2 = "password";

$usernamej3 = "judge3";
$passwordj3 = "password";

$usernamej4 = "judge4";
$passwordj4 = "password";

$admin = "admin";
$adminpassword = "password";




if(isset($_POST['username']) && isset($_POST['password'])){
    //create a switch case
    
    if(($_POST['username'])==$username && $_POST['password']==$password){
        $_SESSION['loggedin'] = true;
    }
    else{
        //echo "Username or password is incorrect";
        header("location:index.php");
    }
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    header("location:loginsuccess.php");
}

if(isset($_POST['username']) && isset ($_POST['password'])){
    if(($_POST['username'])==$usernamej1 && $_POST['password']==$passwordj1){
        //to be continued....
    }
}

?>


<!DOCTYPE html>

<html>
    <head>
        <title>Validating Login.........</title>
    </head>
    
    <body>
        I am in the validating login page....
    </body>
</html>