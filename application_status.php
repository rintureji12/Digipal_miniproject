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
                                $username=$_SESSION['patient'];
                                    $query = "SELECT status as s FROM patient where email='$username'";
                                    $query_run = mysqli_query($con, $query);

                                    $data=mysqli_fetch_assoc($query_run);
                                    $status=$data['s'];
                                 
                                    if ($status=='Approved')
                                    {
                               
                                        echo'<script>
                            swal("Your application is approved", "Welcome to digipal community...", "success",
                             {button: "Back to Home",}
                              )
                              .then((value) => {
                                window.location.href = "patient_dashboard.php";
                              });
                               </script>';
                                    }
                                    else if($status=='Rejected')
                                    {
                                        echo'<script>
                            swal("Your application is rejected", "Let care reach to the most needy and deserving hands...", 
                             {button: "Back to Home",}
                              )
                              .then((value) => {
                                window.location.href = "patient_dashboard.php";
                              });
                               </script>';
                                    }
                                    else{
                                        echo'<script>
                            swal("Your application is being reviewed", "Be patient and we will let you know about the status soon...", 
                             {button: "Back to Home",}
                              )
                              .then((value) => {
                                window.location.href = "patient_dashboard.php";
                              });
                               </script>';
                                    }
                                    
                                   ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>