<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth"> <!--for smooth scrolling to different sections-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="about.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "icon" href ="https://media-exp1.licdn.com/dms/image/C5603AQFPwTFlbsV-ag/profile-displayphoto-shrink_200_200/0/1609478420339?e=1645660800&v=beta&t=KstdRmKubsZqHkzNe8chh9Dvq0-VSaQ1EibXhHnk1hY"
        type = "image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
      <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
      </style>
    </head>
<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
            <h2 class="mb-3 " style="color:#0047AB">Digipal helps you to lead a better life</h2>
                <img src="vol.svg"

                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <h2 class="mb-3 mx-5" style="color:#0047AB">Login to your account</h2>
              <form action="validate_patient.php" method="POST">
                
      
               
      
                <!-- Email input -->
                <div class="form-outline mb-2">
                  <input type="text" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter username" name="username" required/>
                  <label class="form-label" for="form3Example3"></label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-2">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" name="password" required/>
                  <label class="form-label" for="form3Example4"></label>
                </div>
      
               
                <!-- <div class="text-center text-lg-start ">
                 
                    <div class="d-grid gap-2 pt-2">
                        <a class="btn btn-primary" href="" role="button">Login</a>
                    </div>
                    <?php
                          
                          if(isset($_SESSION['error']))
                          {
                            $msg=$_SESSION['error'];
            
                            echo "<p align='center'> <font color=red font face='arial'>$msg</font></p>";
                  
                          }
                          ?>
                    <div class="col-md-12 text-center pt-3">
                        <a href="#" class="link-secondary">Forgot password?</a>
                      </div>

                     
                    </div>
                </div>
       -->
       <div class="d-grid gap-2 pt-1">
                            <!-- <a class="btn btn-primary" href="reader.html" role="button">Login</a> -->
                            <!-- <button type="submit" class="btn btn-primary">Login</button> -->
                            <input type="submit" value="Login" class="btn btn-primary"/>
                            <?php
                          
                            if(isset($_SESSION['error']))
                            {
                              $msg=$_SESSION['error'];
              
                              echo "<p align='center'> <font color=red font face='arial'>$msg</font></p>";
                    
                            }
                            ?>
                        </div>
              </form>
              <div class="row mt-2">
                          <div class="col-md-12 mt-2 text-center">
                            <a href="forgot.html" class="link-secondary">Forgot password?</a>
                          </div>

                          <div class="divider d-flex align-items-center my-2">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                      </div>
                  <p class="small fw-bold mt-1 pt-1 mb-0 text-center">Don't have an account? <a href="patient_reg.php"
                      class="link-danger">Register</a></p> 
                          
                      </div>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © Digipal 2022. All rights reserved.
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
     
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>
<?php
unset($_SESSION['error']);
?>