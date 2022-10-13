<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>ASSIGN DATE AND TIME</title>
    <link rel="stylesheet" href="emailsend.css?v=<?php echo time()?>" type="text/css">
</head>
<body>
    <?php 
     $volunteer_id =  $_GET['email'];
    //  echo $patient_id;
    ?>
    <br><br><br><br><br><br><br><br>
    <form id="form1" action="send_mail.php" method="POST">
        <div class="col1">
    <table>
    <tr><td height="10px"><br><br><br></td></tr>
    <tr><td class="wn" colspan="2"  ><h2 class="sn">ASSIGN DATE AND TIME</h2></td></tr>

    <tr>
 <td class="psw" colspan="2" >
 <input type="text" name="email" value="<?=$volunteer_id;?>" readonly="readonly" /></td>
</tr>

<tr>
<td class="psw" colspan="8" >
<label for="birthday">Assign Date:</label>
<br> <br>
  <input type="date" id="birthday" name="date">
</tr>

<td class="psw" colspan="8" >
<label for="birthday">Assign time:</label>
<br> <br>
<input type="time" id="appt" name="time">
</tr>

<tr>

</td>

</tr>
<tr>
<td>

<input type="submit" form="form1" name="submitbtn" class="sg"><br>

</tr>

    <td>

    </td>
                            
<td></td>
</table>
</div>
</form>

</body>

</html>
<?php
unset($_SESSION['error']);

unset($_SESSION['success']);
?>