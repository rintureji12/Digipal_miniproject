
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
    
    <link href="https://cdn.syncfusion.com/ej2/ej2-base/styles/material.css" rel="stylesheet" type="text/css" />
            <link href="https://cdn.syncfusion.com/ej2/ej2-buttons/styles/material.css" rel="stylesheet" type="text/css" />
            <link href="https://cdn.syncfusion.com/ej2/ej2-calendars/styles/material.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="adminstyles.css" />
            <title>Admin Dashboard</title>
    <script src="https://cdn.syncfusion.com/ej2/ej2-base/dist/global/ej2-base.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-inputs/dist/global/ej2-inputs.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-buttons/dist/global/ej2-buttons.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-lists/dist/global/ej2-lists.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-popups/dist/global/ej2-popups.min.js" type="text/javascript"></script>
            <script src="https://cdn.syncfusion.com/ej2/ej2-calendars/dist/global/ej2-calendars.min.js" type="text/javascript"></script>
</head>

<body>
       <?php 
            $result=mysqli_query($con,"SELECT count(*) as total from volunteer");
            $data=mysqli_fetch_assoc($result);
            // echo $data['total'];

            $res=mysqli_query($con,"SELECT count(*) as t from patient");
            $d=mysqli_fetch_assoc($res);

            $r=mysqli_query($con,"SELECT sum(price) as amount from orders");
            $s=mysqli_fetch_assoc($r);
            
        ?>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading mx-3 py-4 primary-text fs-4 fw-bold text-uppercase "><i
                    class=""></i>DIGIPAL</div>
                    
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="bi bi-house-fill me-2 fs-4"></i>Dashboard</a>
                <a href="volunteers.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-people-fill me-2 fs-4"></i>Volunteers</a>
                <a href="verified_patients.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="bi bi-person-circle me-2 fs-4"></i>Patients</a>
                <a href="donors.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-hand-holding-usd me-2 fs-4"></i>Donators</a>
                <a href="patients.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="bi bi-person-check-fill me-2 fs-4"></i>Patient verification</a>
                <a href="demo.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="bi bi-calendar-check me-2 fs-4"></i>Assigned works</a> 
                            
                <hr>
                <!-- <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a> -->

                        <div class="dropdown pt-3 ps-4 ">
                            <a href="#" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-2 fw-bold" style="color:black">Admin</span>
                            </a>
                            <ul class="dropdown-menu  text-small shadow " >
                                
                                
                                <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
                                <!-- <li><a class="dropdown-item" href="#">Reset password</a></li>
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
                    <h2 class="fs-2 m-0 "style="color:#fcfff9">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?= $d['t'];?></h3>
                                <p class="fs-5">Registered patients</p>
                            </div>
                            <i class="bi bi-person-circle fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?= $data['total'];?></h3>
                                <p class="fs-5">Registered volunteers</p>
                            </div>
                            <i
                                class="bi bi-people-fill fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?= $s['amount'];?></h3>
                                <p class="fs-5">Amount Received</p>
                            </div>
                            <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    
                </div>

               
    <!-- /#page-content-wrapper -->
    </div>
 
<!-- <div class="row pt-5 mt-5 ps-5">
    <div class="col-md-6">
        <canvas id="myChart" style="width:100%;max-width:500px"></canvas>
    </div>
    <div class="col-md-6">
        <canvas id="myChart2" style="width:100%;max-width:400px"></canvas>
    </div>
</div> -->
<div class="row">

<div class="col-md-5 mt-5 ms-5 " id="element">
</div>
<?php 
                               
            $query = "SELECT * FROM orders order by id desc limit 5";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                ?>
<div class="col-md-7 mt-5 ms-5">
    <h4>Recent Donations</h4>
<table class="table pt-5 table-hover table-striped table-light">
    <thead>
        <tr>
            
            <th scope="col">order_id</th>
            <th scope="col">Email-id</th>
            <th scope="col">Amount donated</th>
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
            ?>
</div>

        </div>
        <!-- <div class="col-md-5 mt-5 ms-5 " id="element"/> -->
    <script>
        // initialize the Calendar component
        var calendar = new ej.calendars.Calendar();
 
        // Render the initialized button.
        calendar.appendTo('#element')
    </script>

<!--  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- <script src="admin.js"></script> -->
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