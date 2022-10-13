<?php
session_start();
  $username= $_POST['username'];
  $password=$_POST['password'];
  $error="Incorrect credentials";

  $con=mysqli_connect("localhost","root","","digipal");
//   mysql_select_db("lms");

  $result=mysqli_query($con,"select * from volunteer_login where username='$username' and pass='$password'");

  $row=mysqli_fetch_assoc($result);

  if($row && $row['username']==$username && $row['pass']==$password)
  {
      echo "success";
    // session_start();
    // $_SESSION['username']=strstr($username,'@',true);
    $_SESSION['username']=$username;
    header("Location:volunteer_dashboard.php");
  }
  else{
    //   echo "Invalid credentials";
    // session_start();
    // $error="Invalid credentials!!"
    // $_SESSION['invalid']=$error;
    // session_start();
    $_SESSION['verror']=$error;
    header ("Location:login.php");
}
?>