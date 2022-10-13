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

    <title> View document</title>
    
</head>
<body>

    <div class="container mt-5 ">

        <div class="row">
            <div class="col-md-9 text-center">
                <div class="card mx-auto">
                    <div class="card-header">
                        <h4>Patient Health certificate
                            <a href="patients.php" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['email']))
                        {
                            $patient_id = mysqli_real_escape_string($con, $_GET['email']);
                            $query = "SELECT filename FROM patient WHERE email='$patient_id' ";
                            $_SESSION['username']=$patient_id;
                            $query_run = mysqli_query($con, $query);
                            
                            $row=mysqli_fetch_array($query_run)
                            ?>
                            <img src="image/<?php echo $row['filename'];?>"class="card-img-top" alt="" height=25%>
                               <?php 
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
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