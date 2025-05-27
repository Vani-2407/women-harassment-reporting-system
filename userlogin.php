<?php
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
if(isset($_POST["submi"]))
{
  $sql="insert into register (RPHO,RPASS,CPASS) values ('{$_POST["phone"]}','{$_POST["pass"]}','{$_POST["cpass"]}')";
  $db->query($sql);
  echo "<h3><center>Register Successfully</center></h3>";
}
?>        <h2>Register</h2>
        <form action="userlogin.php" method="post">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" minlemgth="10" maxlength="10" placeholder="Enter your phone number" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="pass" placeholder="Enter your password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="cpass" placeholder="Confirm your password" required>

            <button type="submit" name="submi">Register</button>
        </form>
        <div class="link">
            <p>Already have an account? <a href="sign.php" onclick="showLogin()">Sign In</a></p>
        </div>
        
        <table>
<?php
if(isset($_POST["submit"]))
{
 header("location:total.php"); 
}
?>
<form action="total.php" method="post">
            <tr><td><button type="submit" name="submit">Check Complaints</button></td> </form>
                
<?php
if(isset($_POST["sub"]))
{
 header("location:Adminlogin.php"); 
}
?>
  <form ction="Adminlogin.php" method="post"> <td width="40%"> <center><button type="submit" name="sub">Admin</button></center></td>       </form>
            
<?php
if(isset($_POST["subm"]))
{
 header("location:help.html"); 
}
?>
  <form action="help.html" method="post"><td><button type="subm" name="submit">Help Line</button></td></tr></form>
        </table>
    </div>

    <div class="container" id="login" style="display: none;">
            <p>Don't have an account? <a href="#" onclick="showRegistration()">Register</a></p>
  </div>


    </div>

  </div>
    
</body>

</html>
