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
 $sql="SELECT * FROM sign WHERE SPHO='{$_POST["SPHO"]}' and SPASS='{$_POST["SPASS"]}'";
 $res=$db->query($sql);
 if($res->num_rows>0)
 {
  header("location:complaintform.html");
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
            <input type="text" id="login-phone" name="SPHO"  minlength="10" maxlength="10" placeholder="Enter your phone number" required>

            <label for="login-password">Password</label>
            <input type="password" id="login-password" name="SPASS" placeholder="Enter your password" required>

            <button type="submit" name="submit">Sign In</button>
        </form>

        <div class="link">
            <p><a href="#" onclick="showResetPassword()">Reset Password</a></p>
<div class="link">
            <p>New User? <a href="userlogin.php" onclick="showLogin()">register</a></p>
        </div>
    <div class="container" id="reset-password" style="display: none;">
        <h2>Reset Password</h2>
        <form>
            <label for="reset-phone">Phone Number</label>
            <input type="text" id="reset-phone" name="reset-phone" placeholder="Enter your phone number" required>

            <label for="new-password">New Password</label>
            <input type="password" id="new-password" name="new-password" placeholder="Enter your new password" required>

            <button type="submit">Reset Password</button>
        </form>
        <div class="link">
            <p><a href="sign.php">Back to Login</a></p>
        </div>
        

  </body>
</html>
