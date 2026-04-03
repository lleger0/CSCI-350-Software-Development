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

if(isset($_POST['username']) && isset ($_POST['password'])){
    //judge1
    if(($_POST['username'])==$usernamej1 && $_POST['password']==$passwordj1){
        //echo("hello");
        header("location:loginsuccessj1.php");
        //$_SESSION['loggedin']=true;
    }elseif(($_POST['username'])==$usernamej2 && $_POST['password']==$passwordj2){
        header("location:loginsuccessj2.php");
        $_SESSION['loggedin']=true;
    }
    elseif(($_POST['username'])==$usernamej3 && $_POST['password']==$passwordj3){
        header("location:loginsuccessj3.php");
        $_SESSION['loggedin']=true;
    }
    elseif(($_POST['username'])==$usernamej4 && $_POST['password']==$passwordj4){
        header("location:loginsuccessj4.php");
        $_SESSION['loggedin']=true;
    }
    elseif(($_POST['username'])==$admin && $_POST['password']==$adminpassword){
        header("location:loginsuccessadmin.php");
        $_SESSION['loggedin']=true;
    }
    else{
        header("location:index.php");
    }
    
    
}

if(isset($_POST['username']) && isset($_POST['password'])){
    //create a switch case
    
    if(($_POST['username'])==$username && $_POST['password']==$password){
        $_SESSION['loggedin'] = true;
    }
    // else{
    //     //echo "Username or password is incorrect";
    //     header("location:index.php");
    // }
}
// if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
//     header("location:loginsuccess.php");
// }



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