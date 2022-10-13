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

    <title>My profile</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>My profile
                            <a href="volunteer_dashboard.php" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['email']))
                        {
                            $patient_id = mysqli_real_escape_string($con, $_GET['email']);
                            //echo $patient_id;
                            $query = "SELECT * FROM volunteer WHERE email='$patient_id' ";
                            $_SESSION['username']=$patient_id;
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $patient = mysqli_fetch_array($query_run);
                                ?>
                                
                                <div class="row">
                                <div class="mb-3 col-md-6">
                                        <label> Name</label>
                                        <p class="form-control">
                                            <?=$patient['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label> Email</label>
                                        <p class="form-control">
                                            <?=$patient['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label>Phone</label>
                                        <p class="form-control">
                                            <?=$patient['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label>Address</label>
                                        <p class="form-control">
                                            <?=$patient['address'];?>
                                        </p>
                                    </div>
                                  
                                    <div class="mb-3 col-md-6">
                                        <label>Place</label>
                                        <p class="form-control">
                                            <?=$patient['place'];?>
                                        </p>
                                    </div>
                                  
                                    
                                  
                                    
                                    

                                    <!-- <div class="mb-1 col-md-2">
                                        <button type="submit" name="accept_patient" class="btn btn-success">
                                            Verify application
                                        </button>
                                    </div>
                                    <div class="mb-1 col-md-2">
                                        <button type="submit" name="delete_patient" class="btn btn-danger">
                                            Reject application
                                        </button>
                                    </div> -->
                                    <!-- <div class="col-md-3 ps-5 ">
                                    <a href="update_patientstatus.php?user=<?= $patient['email']; ?>"><button class="btn btn-success" > Approve application</button></a>
                                    </div>
                                    <div class="col-md-4 px-0 mx-0">
                                     <a href="update_patientstatus.php?email=<?= $patient['email']; ?>" ><button class="btn btn-danger">Reject application</button></a>
                                    </div> -->
                                    
                                                    
                                    </div>
                           
                                    <?php
                                  
                               
                                    

                                
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>