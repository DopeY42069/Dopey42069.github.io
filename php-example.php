<?php 
// The global $_POST variable allows you to access the data sent with the POST method by name 
// To access the data sent with the GET method, you can use 

$name = htmlspecialchars($_POST['name']); 

$email = htmlspecialchars($_POST['email']);


$website = htmlspecialchars($_POST['website']);


$comment = htmlspecialchars($_POST['comment']);


$email_form = 'joker0142000@gmail.com';

$email1_subject = 'New contact form submission';

$email_body = "User name : $name.n\".
                 "User email : $email.n\".
				   "User website : $website.n\".
				    "User comment : $comment.n\".;


             $to = "pritamsamaddar142@gmail.com";
			 
			 $headers = "Form: $email_form \r\n";
			 
			 $headers .= "Reply-To: $email \r\n";
			 
			 mail($$to,$email1_subject,$email_body,$headers);
			 
			 
			 header("location: index.html");
			 




echo $name, ' ', $email1, ' ', $wbsite, ' ', $Textarea1; 
?>









