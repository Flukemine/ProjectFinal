<!DOCTYPE html>

<html>
    
    <head>
        <title> process register form </title>
    </head>
    
    <body>
        
        <h2> Register</h2>
        
           <?php ini_set('display_errors', 'On'); 

        function con(){
          	#echo $_SERVER['DOCUMENT_ROOT'];
	require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #Superglobal
	
	$username = $_POST['username'];
	$pwd= $_POST['password'];
    $comments = $_POST['name'];
    
	
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->isHtml(true);
	$mail->Debugoutput = 'html';
	$mail->Host = "smtp.office365.com";
	$mail->SMTPDebug = 2; #include client and server messages
	$mail->Port = 587;
	#$mail->Port = 465; #change to ssl SMTPSecure
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "dawson.camilleri.b43145@mcast.edu.mt";
	$mail->Password = $pwd;
	
	$mail->From = "dawson.camilleri.b43145@mcast.edu.mt";
	$mail->AddAddress("dawson.camilleri.b43145@mcast.edu.mt"); #later
	$mail->Subject = 'These are your details ';
	$mail->Body = $comments;    
	#$mail->WordWrap = 50;
	
	if(!$mail->Send()) {
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent.';
	}	
            return true;
        }
        
        con();
        ?>
    </body>
</html>