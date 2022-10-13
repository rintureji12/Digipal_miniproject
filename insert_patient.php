
<?php
session_start();
?>

<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // echo "upload_clicked";
    // echo "\n";
    
    if ($_POST['illness']=='others')
    {
        $_POST['illness']=$_POST['illness_text'];
    }
	$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];	
    $folder = "image/".$filename;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            //$age = $_POST['age'];
            // $confirmPassword = $_POST['confirm password'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $illness = $_POST['illness'];
            $address = $_POST['address'];
            $place = $_POST['place'];

            $diff = (date('Y') - date('Y',strtotime($dob)));
            //echo $diff;
            

	$db = mysqli_connect("localhost", "root", "", "digipal"); 
   
    $r="SELECT * from patient where email='$email'";
    $result=mysqli_query($db, $r);
    if (mysqli_num_rows($result)==0)
    {

		// Get all the submitted data from the form
        $sql="INSERT INTO patient VALUES('$name','$email','$password','$phone','$diff','$gender','$dob','$illness','$address','$place','$filename','not verified')";
		
		// Execute query
		
		$res=mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
            // echo $msg;
		}else{
			$msg = "Failed to upload image";
	}
    $s="INSERT INTO patient_login VALUES('$email','$password')";
    mysqli_query($db,$s);
    $_SESSION['success']="Registration successful";
}
else{
    unset($_SESSION['success']);
}
}


            // header("Location:patient_reg.php");

// header ("Location:enterbooks.php");
// while($row=mysqli_fetch_array($res))
// {
// 	echo "inside while";
// 	// echo "<img src='image/".$row['filename']."'>";
// 	echo $row['email'];
// }
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 

                if(isset($_SESSION['success']))
                            {
                                 echo '<p style="color:white">hai</p>';
                            //   echo '<script>alert("Registration successful")</script>';
                            // echo '<script>
                            // swal("Good job!", "You clicked the button!", "success");
                            // </script>';
                            echo'<script>
                            swal("Account created successfully", "Track the approval status on your dashboard", "success",
                             {button: "Back to Login",}
                              )
                              .then((value) => {
                                window.location.href = "patient_login.php";
                              });
                               </script>';
                    
                            }
                            else
                            {
                                echo '<p style="color:white">hai</p>';
                                echo'<script>
                                swal("Registration failed", "User with the same email-id already exists", "error",
                                 {button: "Back to Register",}
                                  )
                                  .then((value) => {
                                    window.location.href = "patient_reg.php";
                                  });
                                   </script>';
                        
                            }
                            // header ("Location:Login.php");
                            ?>






