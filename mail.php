<!DOCTYPE html>
<html>
<?php 
ini_set("max_execution_time", 0);

		  if(isset($_POST['submit']))
      {
                    $msg='name:'.$_POST['Name']."\n\n"
                        .'area:'.$_POST['Location']."\n"
                        .'course:'.$_POST['Course']."\n"
                        .'experience:'.$_POST['experience']."\n"
                        .'language1:'.$_POST['Languages_known_to_speak']."\n"
                        .'language2:'.$_POST['Languages_known_to_write']."\n"
                        .'mobileno:'.$_POST['Contact']."\n"
                        .'email:'.$_POST['email'];
        $to ="rubaktechie@gmail.com";
        $a=$_POST['email'];
		    $msg_content ='Hai '.$_POST['Name'].'thank you for contacting us----- We will contact you back shortly' ;
        $subject="contact form details";
		$headers  = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
	            'MIME-Version: 1.0' . "\r\n" .
	            'Content-type: text/html; charset=utf-8';
		mail($to, $subject, $msg, $headers);
    mail($a,$msg_content,$headers);
		   

       }?>
      <head>
 <link rel="stylesheet" type="text/css" href="thankyou.css">
 <script type="text/javascript">
 </script>
 </head>
 <body id=body>
 	<h1>Thankyou for Contacting us..</h1>
</body>
</html>
