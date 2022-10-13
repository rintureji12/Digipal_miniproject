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

    <title>Student View</title>
    <script type="text/javascript">
function addIllness(val){
 var element=document.getElementById('illness');
 if(val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}
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
<body style="background-color: #8EC5FC;
background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);


">

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>REGISTER TO BE A PART OF DIGIPAL
                            <!-- <a href="patients.php" class="btn btn-primary float-end">BACK</a> -->
                        </h4>
                    </div>
        <div class="card-body">
            <form action="insert_patient.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                       <label for="exampleInputEmail1" class="form-label">Name</label>
                       <input type="text" pattern="[a-z A-Z]*" minlength="3" name="name" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter your Name">
                    </div>

                   <div class="col-md-6">
                       <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" placeholder="Enter your email" name="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label mt-2">Mobile number</label>
                         <input type="tel" class="form-control" name="phone" pattern="[6789][0-9]{9}" title="Enter a valid 10 digit mobile number" placeholder="Enter your phone number" id="exampleInputEmail1" required aria-describedby="emailHelp">
                    </div>

            <div class="col-md-6">
                  <label for="exampleInputEmail1" class="form-label mt-2">Password</label>
                  <input type="password" name="password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain atleast 8 characters long and atleast one uppercase,one lowercase character and a number"
            class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
            </div>

               </div>

               <div class="row">

               <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label mt-2">Address</label>
    <input type="text" class="form-control"  placeholder="Enter your address" name="address" required value="">
    </div>

                   <div class="col-md-6">
                       <label for="exampleInputEmail1" class="form-label mt-2">Date of Birth</label>
                       <input placeholder="Enter your date of birth" class="form-control" required class="textbox-n" type="text" onfocus="(this.type='date')" id="date" name="dob" max="<?= date('Y-m-d'); ?>">
                    </div>

                </div>  
                
                <div class="row">
                    <div class="col-md-6">
                       <label for="exampleInputEmail1" class="form-label mt-2">Gender</label>
                       <select id="" class="form-control" name="gender" required>
                <option value="" disabled selected>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="others">Others</option>
              </select>    
                    </div>

                   <div class="col-md-6">
                       <label for="exampleInputEmail1" class="form-label mt-2">Place</label>
                       <input  placeholder="Enter your place" name="place" pattern="[a-z A-Z]*" minlength="3" title="enter a valid place" class="form-control"><br>
                    </div>

                </div>  
                
                <select id="" name="illness" class="form-control" required onchange='addIllness(this.value);'>
  <option value="" disabled selected >Illness type</option>
  <option value="Cancer">Cancer</option>
  <option value="Alzheimers">Alzheimers</option>
  <option value="Cardiac disease">cardiac disease</option>
  <option value="Stroke">Stroke</option>
  <option value="Liver cirrhosis">Liver cirrhosis</option>
  <option value="Parkinson's disease">Parkinson's disease</option>
  <option value="others">others</option>
</select>
<input type="text"  class="form-control mt-3" name="illness_text" id="illness" placeholder="Specify your illness here" style='display:none;'/>
<div class="row">
   
    <div class="col-md-12">
    <label for="exampleInputEmail1" class="form-label mt-2">Upload your health record proof(only jpeg,jpg,png file formats supported)</label>
    <input type="file"  class="form-control" id="fileName" name="uploadfile" accept="image/png, image/jpeg" onchange="validateFileType()" required >
    </div>
</div>
            <input type="submit"  class="form-control btn btn-primary mt-3" name="upload" value="Register" required>
            </form>
     </div>
</div>
</div>
</div>
                        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>