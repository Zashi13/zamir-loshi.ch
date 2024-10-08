<?php
	if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
	
	$email = $_POST['email'];
	$from = filter_var($email,FILTER_VALIDATE_EMAIL);
	$name = $_POST['name'];
	$reason = str_ireplace(array("\r", "\n", '%0A', '%0D'), '', $_POST['reason']);
	$text = $_POST['text'];
	$textclean = str_replace("\n.", "\n..", $text);
	
//Validate first
if(empty($name)||empty($email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($mail))
{
    echo "Bad email value!";
    exit;
}

	$email_subject = "Anfrage zum Thema $reason";

	$email_body = "Grund: $reason".
					"Name: $name \n".
                  "$textclean \n".
		
	$to = "info@zamir-loshi.ch";
$headers = "From: $from \r\n";
		
		mail($to,$email_subject,$email_body,$headers);
	
	header('Location: index.php');
	
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