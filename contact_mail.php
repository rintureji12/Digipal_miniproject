<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Contact us</title>
</head>
<body> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
                                <?php 
                                $name = $_POST['name'];
                                $from_email = $_POST['email'];
                                $phone = $_POST['phone'];
                               $place = $_POST['place'];
                               $message=$_POST['message'];
                               $to_email="minireji8921@gmail.com";
                               $subject = "Need Help";
                               $body = "Message sent by:$name\n$message\n\ncontact number:$phone\nplace:$place";
                            //    $headers = "From:digipal@gmail.com";
                            // $headers='From: '$name' <$from_email>';
                            $headers = "From: $name <$from_email>\r\nReply-To: ".$from_email;
                               
                               if (mail($to_email, $subject, $body, $headers)) {
    
                                echo'<script>
                                swal("Your message has been sent successfully", "", "success",
                                 {button: "Back to Home",}
                                  )
                                  .then((value) => {
                                    window.location.href = "index.html";
                                  });
                                   </script>';
                            } else {
                               
                                echo'<script>
                                swal("Email sending failed", "Please try again later...", "",
                                 {button: "Back to Home",}
                                  )
                                  .then((value) => {
                                    window.location.href = "index.html";
                                  });
                                   </script>';
                            }
                            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>