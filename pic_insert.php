
<?php
session_start();
?>

<?php
$msg = "";



// If upload button is clicked ...
if (isset($_POST['upload'])) {
    // echo "upload_clicked";
    // echo "\n";

	$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];	
    $folder = "image/".$filename;
    $username=$_SESSION['username'];

  
   
           
           
	$db = mysqli_connect("localhost", "root", "", "digipal"); 
   
		// Get all the submitted data from the form
        $sql="update volunteer set pic='$filename' where email='$username' ";
		
		// Execute query
		
		$res=mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
            // echo $msg;
		}else{
			$msg = "Failed to upload image";
	}

    
}

$_SESSION['success']="Registration successful";
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
                            swal("Profile photo  updated successfully", "", "success",
                             {button: "Back to Home",}
                              )
                              .then((value) => {
                                window.location.href = "volunteer_dashboard.php";
                              });
                               </script>';
                    
                            }
                            // header ("Location:Login.php");
                            ?>







