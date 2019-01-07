<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$date = $_POST['date'];
$restaurant = $_POST['restaurant'];
$server = $_POST['server'];
$wait = $_POST['wait'];
$manager = $_POST['manager'];
$hostess = $_POST['hostess'];
$recommend= $_POST['recommend'];
$prompt = $_POST['prompt'];
$hot = $_POST['hot'];
$enjoy = $_POST['enjoy'];
$start = $_POST['start'];
$comments = $_POST['comments'];

//Validate first
// if(empty($name)||empty($visitor_email)) 
// {
//     echo "Name and email are mandatory!";
//     exit;
// }

// if(IsInjected($visitor_email))
// {
//     echo "Bad email value!";
//     exit;
// }

$email_from = "info@saltydog.com";//<== update the email address
$email_subject = "New  Feedback Form submission";
$email_body = "You have received a new message from : $name.\n".
"Their phone number is:  $phone.\n".
"Their email is: $visitor_email.\n".
"The date they visited was:  \n $date. \n".
"The restaurant they visited was:  $restaurant. \n".
" How many minutes did you wait before being served?  Answer:  $wait. \n".
"What was your Server's Name  Answer:  $server. \n".
"Were you visted by a manager during your visit?  Answer:  $manager. \n".
"Was the Hostess helpful and polite?  Answer:  $hostess. \n".
"Would you recommend our restaurant?:  Answer:  $recommend. \n".
" Was your food served promptly?  Answer:  $prompt. \n".
"Was your food served hot and fresh?  Answer:  $hot. \n".
" Overall would you say your experience was enjoyable? Answer:  $ejoy. \n".
"Start to finish, would you say the service was excellent?  Answer:  $start. \n".
"Any other comments or suggestions?:  Answer:  $comments. \n".

    
    
$to = "kat@saltydog.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 