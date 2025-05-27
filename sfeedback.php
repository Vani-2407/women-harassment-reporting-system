<?php
 session_start();
 include "database.php";
if(!isset($_SESSION["RID"]))
 {
   header("location:sign.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complaint Form</title>
  <link rel="stylesheet" href="complaintform.css"> 
</head>
<body>
  </div>
</body>
</html>

<body>
    <div id="container">
        <div id="header">
            <h1 class='headerr'>Women Arrasment Managment System</h1>
        </div>
<?php
if(isset($_POST["submit"]))
{
  $sql="insert into feedback (FEED,LOG) values ('{$_POST["fname"]}',now())";
  $db->query($sql);
  echo "<h3><center>FeedBack Submitted Successfully</center></h3>";
   echo "<h3><center><a href='logout.php'>Logout</a></center></h3>";
}
?>
<br>
  <div class="container">
    <h1 id="heading">FeedBack</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
      <div class="form-group">
        <label for="problematic_area"></label>
        <textarea id="problematic_area" name="fname" rows="5" placeholder="TYPE YOUR FEEDBACK" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Submit Complaint</button>
      </div>
    </form>        

        <div id="footer">
            <p>Copyright &copy; Vaani2005</p>
        </div>
    </div>
</body>
</html>