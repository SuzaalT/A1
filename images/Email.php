<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    $resume = isset($_GET['resume']) ? $_GET['resume'] : '';
    $message = isset($_GET['message']) ? $_GET['message'] : '';
   
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Resume: $resume <br>";
    echo "Email: $message <br>";
   
}
?>
This works if you upload the code to 000webhost.com and run it you will get the printed form of the data which entered in the form.