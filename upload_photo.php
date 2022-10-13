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
.avatar-pic {
width: 50%;
}
      </style>
    </head>
<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image"> -->
                <img src="upload_image.svg"

                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
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

        <form  action="pic_insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-5">
                <label for="Image" class="form-label"><b>Upload your photo here<b></label>
                <input  type="file" required accept="image/png, image/jpeg" class="form-control" id="formFile" name="uploadfile" onchange="preview()">
              <div>
              
                <input type="submit" value="Upload image" name="upload" class="btn btn-primary mt-3 ms-5" />
                
</div>
            </div>
            <img id="frame" src="" class="img-fluid" /> 
        </form>
      </section>
     
     <script>
        function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                frame.src = "";
                window.location.href='upload_photo.php';
        
            }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>
<?php
unset($_SESSION['error']);
?>