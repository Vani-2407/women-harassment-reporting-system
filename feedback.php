<?php
 session_start();
 include "database.php";
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
  <title>FeedBack</title>
  <link rel="stylesheet" href="index.css"> 
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Women Arrasment Managment System</h1>
        </div>

<h1 id="heading">FeedBack</h1>

<?php
$sq="SELECT * from feedback";
$sql="SELECT feedback.FEED,complaint.NAME, feedback.LOG FROM feedback INNER JOIN complaint on complaint.CID=feedback.FID";
$res=$db->query($sql);
if($res->num_rows>0)
{
 echo "<table>
  <tr> <th>SNO</th> <th>NAME</th> <th>COMMENTS</th> <th>TIME</th> </tr>";
$i=0;
while($row=$res->fetch_assoc())
 {
  $i++;
  echo "<tr>";
  echo "<td>{$i}</td>";
  echo "<td>{$row["NAME"]}</td>";
  echo "<td>{$row["FEED"]}</td>";
  echo "<td>{$row["LOG"]}</td>";
  echo "</tr>";  
 }
 
echo "</table>";
}
else
{
 echo "<p  class='error'>No FeedBack Found</p>";
}
?>
<br>     
                  

        <div id="footer">
            <p>Copyright &copy; Vaani2005</p>
        </div>
    </div>
</body>
</html>