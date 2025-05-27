<?php
 session_start();
 include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login - Women Harassment Reporting System</title>
    <link rel="stylesheet" href="Adminlogin.css" />
  </head>
  <body>

    <!-- Admin Login Form -->
    <div class="Adminlogin-container">
      <div class="Adminlogin-form">
<?php
if(isset($_POST["submit"]))
{
 $sql="SELECT * FROM admin WHERE EMAIL='{$_POST["EMAIL"]}' and APASS='{$_POST["APASS"]}' and AKEY='{$_POST["AKEY"]}'";
 $res=$db->query($sql);
 if($res->num_rows>0)
 {
  $row=$res->fetch_assoc();
  $_SESSION["AID"]=$row["AID"];
  $_SESSION["EMAIL"]=$row["EMAIL"];
  header("location:Adminpage.php");
 }
 else
 {
  echo "<p class='error'>Invalid User Details</p>";
 }
}
?>
        <h2>Login</h2>
        <form action="Adminlogin.php" method="post">
          <label for="email">Email</label>
          <input type="email" id="email" name="EMAIL" required />

          <label for="password">Password</label>
          <input type="password" id="password" name="APASS" required />
          
          <label for="key">Key</label>
          <input type="key" id="key" name="AKEY" required /> 

          <button type="submit" name="submit">Login</button>
        </form>
        
      </div>
    </div>
  </body>
</html>
