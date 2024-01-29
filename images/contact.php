<?php
//Setting the variables and getting the data from careers form id
$name = $_REQUEST['name'];
$email = $_REQUEST['email']
$position = $_REQUEST['position']
$resume = $_REQUEST['resume']
$message = $_REQUEST['message']

// Checking if the value is empty or not 
if(empty($name) || empty($email) || empty($position) || empty($resume) || empty($message))
{ 
  echo "The field is Empty"
}
else
{
  mail("suzaalthapa@gmail.com", "ApplicationforPosition" ,$message, "From: $name < $email >" )
  echo "<script type='text/javascript'>alert("Message sent Successfully") </script>"
}
?>

