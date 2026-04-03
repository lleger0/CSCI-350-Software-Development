<!DOCTYPE html>

<html>
    <body>
        Ths is judge 1 page <br>
        <form method="POST" action="todatabase.php">
        <table border = 1>
            <tr>
                <td colspan=3>Computer Science Project</td>
                
            </tr>
            <tr>
              <td colspan=2><label for="members">Group Members</label>
                <input type="text" name="members" id="members"></td><td>Group Number:<label for="gnum">Group Number</label>
                <input type="text" name="gnum" id="gnum"></td>  
            </tr>
            <tr><td colspan=3>
            <label for="ptitle">Project Title</label>
                <input type="text" name="ptitle" id="ptitle"></td></tr>
            <tr>
                <td>Criteria</td>
                <td>Developing</td>
                <td>Accomplished</td></tr>
            <tr>
                <td>Articulate Requirements</td>
                <td><input type="text" name="articulate" id="articulate"></td>
                <td><input type="text" name="articulate" id="articulate"></td>
                </tr>
            <tr>
                <td>Choose Appropriate Tools and Methods for each task</td>
                <td><input type="text" name="methods" id="methods"></td>
                <td><input type="text" name="methods" id="methods"></td>
                </tr>
            <tr>
                <td>Give clear and coherent oral presentation</td>
                <td><input type="text" name="oralpres" id="oralpres"></td>
                <td><input type="text" name="oralpres" id="oralpres"></td>
                </tr>
            <tr>
                <td>Functioned Well as a team:</td>
                <td>
                <input type="text" name="function" id="function"></td>
                <td>
                <input type="text" name="function" id="function"></td>
                </tr>
            <tr>
                <td>Total</td>
                <td colspan=2><input type="text" name="total" id="total"></td>
                </tr>
            <tr>
                <td colspan=3><label for="jname">Judge's Name</label>
                <input type="text" name="jname" id="jname"></td>
                
                </tr>
            <tr>
                <td colspan=2><label for="comment">Comments:</label>
                <input type="text" name="comment" id="comment">
                    </td>
                <td><input type="submit" name="submit" id="submit" value="Submit"</td>
                </tr>
                
</table>
</form>

<?php

$servername = "localhost";
$username = "id20403647_username";
$password = "(9NXKtEY|^G*y40I";
$database = "id20403647_database";
//Create a connection

$conn = new mysqli($servername, $username, $password,$database);

//Check the connection status

if($conn->connect_error){
	die("Connection failed: " . $conn ->connect_error);
}

echo "Connecton was successful";

// $groupname = $_POST['gnum'];
// echo $groupname;
// $sql = "CREATE TABLE ";
// //mysqli_query($conn,)



?>
    </body>
</html>