<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
    <link rel="stylesheet" href="adminstyles.css" />
    
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading mx-3 py-4 primary-text fs-4 fw-bold text-uppercase "><i
                    class=""></i>DIGIPAL</div>
                    
            <div class="list-group list-group-flush my-3">
                <a href="adminhome.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-house-fill me-2 fs-4"></i>Dashboard</a>
                <a href="volunteers.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-people-fill me-2 fs-4"></i>Volunteers</a>
                <a href="verified_patients.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-person-circle me-2 fs-4"></i>Patients</a>
                <a href="donors.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-hand-holding-usd me-2 fs-4"></i>Donators</a>
                <a href="patients.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="bi bi-person-check-fill me-2 fs-4"></i>Patient verification</a>
                <hr>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a> -->

                        <div class="dropdown pt-3 ps-4 ">
                            <a href="#" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-2 fw-bold" style="color:black">Admin</span>
                            </a>
                            <ul class="dropdown-menu  text-small shadow " >
                                
                                
                                <!-- <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li> -->
                                <li><a class="dropdown-item" href="index.html">Sign out</a></li>
                            </ul>
                        </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
       
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-white fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 "style="color:#fcfff9">Donators</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
            
            <?php 
                               
            $query = "SELECT * FROM orders ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                ?>
                <div class="container">
<div class="row">
<div class="col-md-12 pt-5 text-white">
<table class="table pt-5 table-hover table-striped table-secondary">
    <thead>
        <tr>
            
            <th scope="col" >order_id</th>
            <th scope="col" >Email-id</th>
            <th scope="col" >Amount donated</th>
            <th scope="col">Payment id</th>
        </tr>
    </thead>
    <tbody>
        <?php
                foreach($query_run as $donor)
                {
                    ?>
                    <tr>
                       
                       
                        <td><?= $donor['order_id']; ?></td>
                        <td><?= $donor['email']; ?></td>
                        <td><?= $donor['price']; ?></td>
                        <td><?= $donor['razorpay_payment_id']; ?></td>
                        
                        
                    </tr>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    
</body>

</html>