<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="loginStyle.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Sign in & Sign up Form</title>
    <script type="text/javascript">

function validateFileType(){
        var fileName = document.getElementById("fileName").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            //TO DO
        }else{
            document.getElementById("fileName").value=null;
            alert("Only jpg/jpeg and png files are allowed!");
        }   
    }
</script> 
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="validate_volunteer.php" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />

            <?php
                          
                            if(isset($_SESSION['verror']))
                            {
                              $msg=$_SESSION['verror'];
              
                              echo "<p align='center'> <font color=red font face='arial'>$msg</font></p>";
                    
                            }
                            ?>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
           
          </form>
          
          <form action="volunteer_insert.php" method="POST" class="sign-up-form" enctype="multipart/form-data">
            <h2 class="title">Sign up</h2>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Name" name="name" pattern="[a-z A-Z]*" title="enter a valid name" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain atleast 8 characters long and atleast one uppercase,one lowercase character and a number"/>
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" placeholder="Phone number" name="phone" required
              pattern="[6789][0-9]{9}" title="Enter a valid 10 digit mobile number"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email"  required/>
            </div>
            
            <div class="input-field">
              <i class="fa fa-home"></i>
              <input type="text" placeholder="Address" name="address" required/>
            </div>

            <div class="input-field">
              <i class="fa fa-home"></i>
              <input type="text" placeholder="Place" name="place" pattern="[a-z A-Z]*" minlength="3" title="enter a valid place" required/>
            </div>

            <div style="margin-top:1rem">
              <!-- actual upload which is hidden -->
              <!-- <p class="constraint">(only .png and .jpeg format supported)</p> -->
              <label>Upload your aadhar(only png,jpeg,jpg formats supported)</label>
            <input type="file" style="margin-top:1rem;margin-left:8rem;" id="fileName" name="uploadfile" class="custom-file-input" accept="image/png, image/jpeg" required title="upload your aadhar" onchange="validateFileType()" />
           
            <!-- our custom upload button -->
            <!-- <label for="actual-btn"> Upload your Aadhar</label>
             -->
            
            <!-- name of file chosen -->
            <!-- <span id="file-chosen">No file chosen</span> -->
            
            
            </div>
            <!-- <div class="input-field">
              <i class="bi bi-123"></i>
              <input type="number" id="quantity" name="quantity" min="1" max="15" placeholder="Ward number">
            </div> -->

            <!-- <p style="margin-left: 1%;color:grey"> Upload your aadhaar card:</p>
  
            <input type="file" id="" name="uploadfile" style="margin-left:2px"> -->

            
            
            <input type="submit" class="btn" value="Sign up" name="upload" style="margin-top:1rem" />
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Register here and help us to build a better tomorrow for many people.
              Your small service can make a big impact to the needy
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              If you are already a part of digipal community, login here.<br>
                 Let us gift a colourful life to the needy people.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="login.js"></script>
  </body>
</html>

<?php
unset($_SESSION['success']);
unset($_SESSION['verror']);
?>