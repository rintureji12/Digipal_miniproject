
<?php
session_start();
require 'dbcon.php';

if(isset($_GET['email']))
                        {
                            
                            $patient_id = mysqli_real_escape_string($con, $_GET['email']);
                            $query = "UPDATE patient set status='Rejected' WHERE email='$patient_id' ";
                            
                            $query_run = mysqli_query($con, $query);
                        }

                        if(isset($_GET['user']))
                        {
                            $patient_id = mysqli_real_escape_string($con, $_GET['user']);
                            $query = "UPDATE patient set status='Approved' WHERE email='$patient_id' ";
                           
                            $query_run = mysqli_query($con, $query);
                        }

                        header ("Location:patients.php");

?>





 

 

 

 

 
