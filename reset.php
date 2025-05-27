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
    <h2>Reset Password</h2>
<?php
if(isset($_POST["submit"]))
{
 $sql="SELECT * from register where RPHO='{$_POST["SPHO"]}'";
 $res=$db->query($sql);
 if($res->num_rows>0)
 {
  $s="update register set CPASS='{$_POST["NPASS"]}' where RPHO=".$_POST["SPHO"];
  $db->query($s);
  echo "<p class='success'>Password Changed</p>";
  echo "<p class='success'><a href='sign.php'>Sign Now</a></p>";
 }
 else
 {
  echo "<p class='error'>Invalid Phone Number</p>";
 }
}
?>
      
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <label for="login-phone">Phone Number</label>
            <input type="text" id="login-phone" name="SPHO" maxlength="100" placeholder="Enter your phone number" required>

            <label for="login-password">New Password</label>
            <input type="password" id="login-password" name="NPASS" placeholder="Enter your password" required>

            <button type="submit" name="submit">Reset Password</button>
        </form>
</div>

  </body>
</html>
