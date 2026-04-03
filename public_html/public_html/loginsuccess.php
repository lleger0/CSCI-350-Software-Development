<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false){
    header("location:loginsuccess.php");
    
}

?>

<!DOCTYPE html>
<html>
    <header>
        
        <script type="text/javascript" src="EditContent.js"></script>

        
    </header>
    <body window.onload = "editPage();">
        <h3>You have logged in successfully!</h3>
        
        <input type="button" value="Add Content" onClick="window.location.href='CMS.html';"/>
        
        
        <script>
        
        //document.write("I am java");
        
        
        console.log("hello")</script>
    </body>
</html>