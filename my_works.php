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
<body>
  
                                <?php 
                                $username=$_SESSION['username'];
                                    $query = "SELECT * FROM work where userid='$username' and status='waiting for confirmation'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        ?>
                                        <div class="container mt-5">
                                        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Assigned works
                            <a href="volunteer_dashboard.php" class="btn btn-primary float-end">Back to home</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Assigned date</th>
                                    <th>Assigned time</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        foreach($query_run as $volunteer)
                                        {
                                            ?>
                                            <tr>
                                               
                                               
                                                <td><?= $volunteer['work_date']; ?></td>
                                                <td><?= $volunteer['work_time']; ?></td>
                                                
                                                <td>
                                                    <a href="work_status.php?user=<?= $volunteer['userid'],'|',$volunteer['work_date']?>" class="btn btn-success btn-sm">Accept</a>
                                                    <a href="work_status.php?email=<?= $volunteer['userid'],'|',$volunteer['work_date'] ?> " class="btn btn-danger btn-sm">Not available</a>
                                                    <!-- <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value=" class="btn btn-danger btn-sm">Delete</button>
                                                    </form> -->
                                                </td>
                                            </tr>
                                            </div>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                       ?>
<section class="vh-100">
        <div class="container-fluid h-custom mt-5 pt-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-6 col-lg-6 col-xl-5">
              <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image"> -->
                <img src="search.svg"

                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-1">
            <!-- <form class="md-form" action="pic_insert.php" method="POST">
            <div class="mb-5">
                <label for="Image" class="form-label"><b>Upload your photo here<b></label>
                <input class="form-control" type="file" id="formFile" name="uploadfile" onchange="preview()">
                <input type="file" name="uploadfile" >
                <button onclick="clearImage()" class="btn btn-primary mt-3">Reset</button>
                <input type="submit" value="Upload" name="upload" class="btn btn-primary mt-3 ms-5" />
            </div>
            <img id="frame" src="" class="img-fluid" /> 
        </form> -->

        <h2 style="color:#000080">No works scheduled for you</h2>
        <h5 style="color:#6495ed">We will notify you through email if any work is scheduled to you</h5>
            </div>
            <img id="frame" src="" class="img-fluid" /> 
        </form>
      </section>
                                       <?php
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>