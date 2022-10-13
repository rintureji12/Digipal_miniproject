<?php
session_start();
require 'dbcon.php';
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if(isset($_GET['email']))
                        {
                            $vol_id = mysqli_real_escape_string($con, $_GET['email']);
                
                            // echo $vol_id;
                            $s1 = explode("|", $vol_id);
                            $date=$s1[1];
                            $user_id=$s1[0];
                            // echo $date;
                            $query = "UPDATE work set status='unavailable' WHERE userid='$user_id' and work_date='$date' ";
                            
                            $query_run = mysqli_query($con, $query);
                            header ("Location:my_works.php");
                        }

                        if(isset($_GET['user']))
                        {
                            $vol_id = mysqli_real_escape_string($con, $_GET['user']);
                          // echo $vol_id;
                          $s1 = explode("|", $vol_id);
                          $date=$s1[1];
                          $user_id=$s1[0];
                          // echo $date;
                            $query = "UPDATE work set status='Accepted' WHERE userid='$user_id' and work_date='$date' ";
                          
                            $query_run = mysqli_query($con, $query);

                         echo "<p></p>";
                            echo"<script>
                            swal('Mark your calendars for $date and arrive at digipal office in time', '', 'info',
                             {button: 'Back to Home',}
                              )
                              .then((value) => {
                                window.location.href = 'volunteer_dashboard.php';
                              });
                               </script>";
                            
                        }

                        // header ("Location:patients.php");

?>





 

 

 

 

 
