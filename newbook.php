<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
	<header>
		<title>Insert Book</title>	
		<style>
			body {padding:10px;}
			table {padding:5px;}
			td {border:1px solid blue; padding:2px;}
		</style>
	</header>
	<body>
		<h1>New Vehicle</h1>
		<form method="POST" action="newbook.php" >
			<table>
				<tr><td>Title:</td>
				<td><input type="text" name="title"></td></tr>
				<tr><td>Username:</td>
				<td><input type="text" name="user"></td></tr>
				<tr><td>Password:</td>
				<td><input type="text" name="pass"></td>
                </tr>	
				<tr><td colspan="2" align="center">
				<input type="submit" name='submit' value="Insert"></td></tr>
			</table>
			<?php var_dump($_POST);?>
		</form>
		
	</body>
</html>
<?php
	
	if (isset($_POST['submit'])) {
		$user = $_POST['user'];
        $pass = $_POST['pass'];
        insert($user,$pass);
    }
    

        //Connect to db
function insert($user,$pass){
        $conn = mysqli_connect('localhost', 'root','','lotto') or die('Cannot connect to DB');	 
        $query = "insert into accounts (Username,Password)
                    values('$user', '$pass')";
        echo "<br>$query<br>";
        if(mysqli_query($conn, $query)) { 
            echo mysqli_affected_rows($conn);            
        }
        else
            echo "Error: ".mysqli_error($conn);
    return $user;
}
		
						
	
?>