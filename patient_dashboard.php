<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "icon" href ="https://media-exp1.licdn.com/dms/image/C5603AQFPwTFlbsV-ag/profile-displayphoto-shrink_200_200/0/1609478420339?e=1645660800&v=beta&t=KstdRmKubsZqHkzNe8chh9Dvq0-VSaQ1EibXhHnk1hY"
        type = "image/x-icon">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
</head>
<body>
  
<body style="background-color: #F5F5F5;">

<header class="container-fluid bg-primary" style="position:fixed;z-index: 1;background-color: #d4418e;
background-image: linear-gradient(315deg, #d4418e 0%, #0652c5 74%);">
    <!-- we set z-index=1 bcs the header need to stay on top while scrolling -->
        <div class="row">
            <div class="col-md-7 col-7 p-3 ps-5 text-white"> <!--ps represents left padding-->
                <h2><i class="bi bi-stack"></i>  DIGIPAL</h2>
            </div>
            <div class="col-md-5 col-5 my-auto"> <!--my-auto to centre the div content-->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                              <!--ms-auto to move content to right-->
            
                              <li class="nav-item">
                                <a class="nav-link text-white"href="index.html">Home</a>
                              </li>

                              
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?=$_SESSION['patient'];?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            
                                      <li><a class="dropdown-item" href="profile.php?email=<?= $_SESSION['patient']; ?>"><i class="bi bi-person-fill"></i> My profile</a></li>
                                      <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
                                    </ul>
                                  </li>
                             
                            </ul>
    
                          </div>
                  </nav>
                </div>
    </div>
    </header>
    
    <section id="home" style="padding-top:13em">
    <div class="container " >
      <div class="row">
            <div class="col-md-4 animate__animated animate__backInLeft ">
              <div class="card text-center p-3 "  style="background-color: #DFECFB">
                <!-- display-1 to make the icon larger -->
                <!-- <i class="bi-alarm display-1 text-info"></i> icon -->
                <i class="bi bi-person-circle display-1"></i>
                <div class="card-body">
                  <h5 class="card-title">View my profile</h5>
                  <!-- <p class="card-text">Collection of books issued to me can be viewed here</p> -->
                  <!-- <a href="profile.php" class="btn btn-success mt-3 ">View here</a> -->
                  <a href="profile.php?email=<?= $_SESSION['patient']; ?>" class="btn btn-primary mt-3">view here</a>
                </div>
              </div>
            </div>

            <div class="col-md-4  animate__animated animate__backInDown animate__delay-2s"> 
              <div class="card text-center p-3" style="background-color: #DFECFB">
                <!-- display-1 to make the icon larger -->
                <i class="bi bi-question-octagon-fill display-1"></i> 
                
                <!--icon -->
                <div class="card-body">
                  <h5 class="card-title">Application status</h5>
                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  <a href="application_status.php" class="btn btn-primary mt-3">View here</a>
                </div>
              </div>
            </div>

            <div class="col-md-4  animate__animated animate__backInRight animate__delay-1s">
              <div class="card text-center p-3 "style="background-color:  #DFECFB " >
                <!-- display-1 to make the icon larger -->
                <i class="bi bi-search display-1"></i> <!--icon -->
                <div class="card-body">
                  <h5 class="card-title">More about Digipal</h5>
                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                  <a href="more_about.html" class="btn btn-primary mt-3">View here</a>
                </div>
              </div>
            </div>
      </div>

      
        <!-- <div class="col-md-4">
          <div class="card text-center p-3" > -->
            <!-- display-1 to make the icon larger -->
            <!-- <i class="bi-alarm display-1 text-info"></i>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  
</script>
<!-- <script src="js/wow.min.js"></script>
          <script>
          new WOW().init();
          </script> -->

</body>
</html>