<?php
  session_start();
  
    $name = $_SESSION['Name'];
    $number = $_SESSION['Number'];
    $email = $_SESSION['Email'];
    $city =$_SESSION['City'];
    $place = $_SESSION['Place'];
    $date = $_SESSION['Date'];
    $payment = $_SESSION['Payment'];

    if(isset($_SESSION['Name']))
    {
    $to_email = $email;
        $subject = "Your Reservation is Done!";
        $body = "Hello $name, your reservation $city city at $place place on date $date for tourism is done. Enjoy your trip...";
        $headers = "From: triptourism2021@gmail.com";
        
        if (mail($to_email, $subject, $body, $headers)) 
        {
           
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>confirmation</title>
</head>
<body>
  <h2>mail have been sent successfully</h2>
  <h3>For new Reservation <a href="/tt/index.php" >click here...</a>
  
</body>
</html>