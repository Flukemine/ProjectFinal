<?php
	function reg(){
	if (isset($_POST['submit'])) {
		$user = $_POST['user'];
        $pass = $_POST['pass'];
	
		
        //Connect to db
        $conn = mysqli_connect('localhost', 'root','','lotto','3307') or die('Cannot connect to DB');	 
        $query = "insert into accounts (Username,Password)
                    values('$user', '$pass')";
        echo "<br>$query<br>";
        if(mysqli_query($conn, $query)) { 
            echo mysqli_affected_rows($conn);            
        }
        else
            echo "Error: ".mysqli_error($conn);
			
		}
        return true;
    }
reg();
						
	
?>