<?php
session_start();
?>

<?php
$num = 20;

function demo(){
	global $num;
	echo "Value of num inside the function $num<br>";
}

demo();

echo "Value of num outside the function $num";

?>

<?php

// function definition

function test($arg1, $arg2){
	$arg2 = $arg1 *10;
return $arg2;

}

$result = test(5,2);
echo "<br>";
echo $result;

?>

<!DOCTYPE html>
<html>
<body>
<form action ="display.php" method="post">
Name: <input type="text" name="name"><br>
Address: <input type="text" name="address"><br>
<input type="submit">

</form>
</body>
</html>


<!DOCTYPE HTML>
<html>
<body>

<?php
//Set session variables
$_SESSION["myuniversity"] ="BMCC";
$_SESSION["status"] = "Senior";
echo "Session variables are set.";
?>

</body>
</html>



<!DOCTYPE html>
<html>
<body>
<?php
// accessing session variables that were set on previous page
echo "My university is ".$_SESSION["myuniversity"].".<br>";
echo "and I am a ".$_SESSION["status"].".";
?>

</body>
</html>

<?php
session_unset();
session_destroy();

echo "all sessions removed and destroyed";
?>

<html>
    <body>
        <form method="post" action="index.php">
            username:<br>
            <input type="text" name="username"><br>
            password:<br>
            <input type="text" name="password"><br>
            <input type="submit" value="login">
            
        </form>
    </body>
</html>

