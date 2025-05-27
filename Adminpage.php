<?php
 session_start();
 include "database.php";
 function countRecord($sql,$db)
 {
  $res=$db->query($sql);
  return $res->num_rows;
  
 }
 if(!isset($_SESSION["AID"]))
 {
  header("location:Adminlogin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Women Harassment Managment System</h1>
        </div>
        <div id="wrapper">
                  <h1 id="heading">WELCOME ADMIN</h1>
<br>

            Total Complaints</h4> <br> <mark><?php echo CountRecord("select * from complaint",$db); ?></mark><br>
<br> 
            Total Users</h4> <br> <mark><?php echo CountRecord("select * from register",$db); ?></mark><br>   
<br>       
            Total FeedBack</h4> <br> <mark><?php echo CountRecord("select * from feedback",$db); ?></mark><br> 
         
         </div>
      <div id="navi">
           <ul>
            <li><a href="totalcomplaint.php">Total Complaints</a></li>
            <li><a href="TotalLogin.php">Total Login</a></li>
            <li><a href="feedback.php">FeedBack</a></li>
            <li><a href="logout.php">LogOut</a></li>
           </ul> 
        </div>
        <div id="footer">
            <p>Copyright &copy; Vaani2005</p>
        </div>
    </div>
</body>
</html>