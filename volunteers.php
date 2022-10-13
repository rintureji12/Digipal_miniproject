<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Volunteers</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="volunteer_style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
    
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<!-- <h1><a class="navbar-brand text-white " href="#">DIGIPAL</a></h1> -->
		  
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<!-- <h1><a class="navbar-brand text-white " href="#">DIGIPAL</a></h1> -->
			  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
				  <a class="nav-link text-white" href="adminhome.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-white" href="verified_patients.php">Patients</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="donors.php">Donators</a>
				  </li>
				  <li class="nav-item ">
					<a class="nav-link text-white" href="patients.php">patient verification</a>
				  </li>
				  
			  </ul>
			  <!-- <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search by place..." aria-label="Search">
				<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
			  </form> -->
			</div>
		  </nav>
	</header>
	<section class="main-content">
		<div class="container">
			
			<div class="row">
            <?php 
                                    $query = "SELECT * FROM volunteer";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $volunteer)
                                        {
                                            ?>

				<div class="col-md-4">
					<div class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center position-relative overflow-hidden">
						<div class="banner"></div>
						<img id="profile" src="image/<?php echo $volunteer['pic'];?>" onerror="this.onerror=null; this.src='user1.png'" alt="" class="img-circle mx-auto mb-3">
						<h3 class="mb-4"><?= $volunteer['name'];?></h3>
						<div class="text-left mb-4 ">
							<p class="mb-2"><i class="fa fa-envelope mr-2"></i> <?= $volunteer['email'];?></p>
							<p class="mb-2"><i class="fa fa-phone mr-2"></i> <?= $volunteer['phone'];?></p>
							
							<p class="mb-2"><i class="fa fa-map-marker-alt mr-2"></i> <?= $volunteer['place'];?></p>
							<p class="mb-2 "><i class="fa fa-globe  mr-2"></i>   <span style="color:green">Available</span> </p>
						</div>
						<div class="social-links d-flex justify-content-center">
							<!-- <button type="button" class="btn btn-primary btn-lg">Assign Work</button> -->
							<a href="type_email.php?email=<?= $volunteer['email']; ?>" class="btn btn-primary btn-lg">Assign work</a>
							
						</div>
					</div>
				</div>
                <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
            </div>

		</div>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
