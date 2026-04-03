<!--getcarinfo.php-->

<!DOCTYPE html>
<html>
<body>

<?php
echo readfile("carinfo.txt");
?>

</body>
</html>

<!DOCTYPE html>

<html>
<body>
<br>
<br>
<?php
$infile = fopen("carinfo.txt", "r") or die ("Unable to open file!");
echo fread($infile, filesize("carinfo.txt"));
fclose($infile);
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>
<br>
<br>
<?php
//to read one line
$infile = fopen("carinfo.txt","r")or die("Unable to open file");
echo fgets($infile);
fclose($infile);
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>
<br>
<br>
<?php
//now put it in a loop
$infile = fopen("carinfo.txt","r")or die("Unable to open file");
while (!feof($infile)){
echo fgets($infile)."<br>";
}
fclose($infile);
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>
<br>
<br>
<?php
class Car{
	private $make;
	private $model;
	function __construct($make){
		$this->make=$make;
	}
	function get_make(){
		return $this->make;
	}
}
$mycar=new Car("Toyota");
echo $mycar->get_make();
?>

</body>
</html>