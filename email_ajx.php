<?php
	
		if(isset($_POST['email']) and isset($_POST['name']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$msg=$_POST['msg'];
					$subject = "Contact";
						$to1='g.natili@gnstudio.com';
						$to='Developmentme@webplatform.io';
						
						$message = "
								<html>	
								<head>	
								<title>" .$subject."</title>	
								</head>	
								 <body>
						<center><h1><font color=#006400>Comment Details</font></h1>";
						$message .= "<hr/>";
						$message .= "<p> Name:-".ucfirst($name)."</p>";
						$message .= "<p>Email ID:- ".$email."</p>";
						$message .= "<p>Comment:- ".$msg."</p>";
						$message .= "<hr/>";
						$message .= "</center>  </body></html>	";
						$header = "From:mobappssolutions141@gmail.com \r\n";
						$header .= "MIME-Version: 1.0\r\n";
						$header .= "Content-type: text/html\r\n";
						if(mail($to,$subject,$message,$header))
						{
							echo"Information has been Sent";
							mail($to1,$subject,$message,$header);
						}
						else
						{
							echo"Somthing Error!!";
						}

		}

		if(isset($_POST['emails']))
		{
			$email=$_POST['emails'];
		

						$subject = "Subscriber";
						$to1='g.natili@gnstudio.com';
						$to='Developmentme@webplatform.io';
						
						$message = "
								<html>	
								<head>	
								<title>" .$subject."</title>	
								</head>	
								 <body>
						<center><h1><font color=#006400>Subscribe Details</font></h1>";
						$message .= "<hr/>";
						
						$message .= "<p>Email ID:- ".$email."</p>";
				
						$message .= "<hr/>";
						$message .= "</center>  </body></html>	";
						$header = "From:".$email." \r\n";
						$header .= "MIME-Version: 1.0\r\n";
						$header .= "Content-type: text/html\r\n";
					if(mail($to,$subject,$message,$header) and mail($to1,$subject,$message,$header))
						{
							echo"Information has been Sent";
						}
						else
						{
							echo"Somthing Error!!";
						}

		}
	?>