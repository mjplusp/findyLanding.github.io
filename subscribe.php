<?php 
  
	if($_POST) {
  
	    // Enter the email where you want to receive notification
		
		$emailTo = 'deukhyun.ku@gmail.com';
    
          // DON'T EDIT BELOW CODE

    	$subscriber_email = ($_POST['email']);
      
		    // Send email code
			$subject = 'Hello, You Got new Findy Subscriber';
			$message = "You got a new subscriber!\n\nEmail: " . $subscriber_email;
			$headers = "From: ".$subscriber_email." <" . $subscriber_email . ">" . "\r\n" . "Reply E-mail: " . $subscriber_email;
			
			mail($emailTo, $subject, $message, $headers);
      
     
		}
?>