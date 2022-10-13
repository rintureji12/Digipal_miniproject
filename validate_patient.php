<?php
session_start();
  $username= $_POST['username'];
  $password=$_POST['password'];
  $error="Incorrect credentials";

//   $username=stripcslashes($username);
//   $password=stripcslashes($password);
//   $username=mysql_real_escape_string($username);
//   $password=mysql_real_escape_string($password);

  $con=mysqli_connect("localhost","root","","digipal");
//   mysql_select_db("lms");

  $result=mysqli_query($con,"select * from patient_login where username='$username' and userpass='$password'");

  $row=mysqli_fetch_assoc($result);

  if($row && $row['username']==$username && $row['userpass']==$password)
  {
    //   echo "success";
    // session_start();
    // $_SESSION['username']=strstr($username,'@',true);
    $_SESSION['patient']=$username;
    header("Location:patient_dashboard.php");
  }
  else{
    //   echo "Invalid credentials";
    // session_start();
    // $error="Invalid credentials!!"
    // $_SESSION['invalid']=$error;
    // session_start();
    $_SESSION['error']=$error;
    header ("Location:patient_login.php");
}
?>