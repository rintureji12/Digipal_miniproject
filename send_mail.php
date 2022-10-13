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

    <title>Assigned works</title>
</head>
<body> <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
                                <?php 
                               $to_email = $_POST['email'];
                               $time=$_POST['time'];
                               $date=$_POST['date'];
                               $from_email="rintureji9074@gmail.com";
                               
                               
                               $s1 = explode(":", $time);
                               $s=$s1[0];
                               if ($s>12)
                                   $a="PM";
                               else
                                   $a="AM";
                               
                                   $db = mysqli_connect("localhost", "root", "", "digipal"); 
                                   $s="INSERT INTO work VALUES('$to_email','$date','waiting for confirmation','$time $a')";
                                   mysqli_query($db,$s);
                               
                               $subject = "volunteer call";
                               $body = "Hi, You are requested to provide your service on $date at $time $a . Kindly mark your availability in the website www.google.com \nFor any queries contact:9812345671\nThanks and Regards,\n Digipal palliative care";
                              //  $headers = "From:digipal@gmail.com";

                              $headers = "From: Digipal  <$from_email>\r\nReply-To: ".$from_email;
                               
                               if (mail($to_email, $subject, $body, $headers)) {
    
                                echo'<script>
                                swal("Email sent successfully", "", "success",
                                 {button: "Back to Home",}
                                  )
                                  .then((value) => {
                                    window.location.href = "adminhome.php";
                                  });
                                   </script>';
                            } else {
                               
                                echo'<script>
                                swal("Email sending failed", "Please try again later...", "",
                                 {button: "Back to Home",}
                                  )
                                  .then((value) => {
                                    window.location.href = "adminhome.php";
                                  });
                                   </script>';
                            }
                            ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>