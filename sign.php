<?php
 session_start();
 include "database.php";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>
    <link rel="stylesheet" href="userlogin.css">
</head>
<body>
    <div class="container" id="registration">
<?php
if(isset($_POST["submit"]))
{
 $sql="SELECT * FROM register WHERE RPHO='{$_POST["phone"]}' and CPASS='{$_POST["pass"]}'";
 $res=$db->query($sql);
 if($res->num_rows>0)
 {
  $row=$res->fetch_assoc();
  $_SESSION["RID"]=$row["RID"];
  $_SESSION["RPHO"]=$row["RPHO"];
  header("location:complaint.php");
 }
 else
 {
  echo "<p class='error'>Invalid User Details</p>";
 }

}
?>
        <h2>Sign In</h2>
        <form action="sign.php" method="post">
            <label for="login-phone">Phone Number</label>
            <input type="text" id="login-phone" name="phone"  minlength="10" maxlength="10" placeholder="Enter your phone number" required>

            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="pass" placeholder="Enter your password" required>

            <button type="submit" name="submit">Sign In</button>
        </form>

        <div class="link">
            <p><a href="reset.php" onclick="showResetPassword()">Reset Password</a></p>
<div class="link">
            <p>New User? <a href="userlogin.php" onclick="showLogin()">register</a></p>
        </div>


  </body>
</html>
