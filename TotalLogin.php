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
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Women Harassment Managment System</h1>
        </div>
        
                  <h1 id="heading">Total Login</h1>
<?php
$sql="SELECT * FROM register";
$res=$db->query($sql);
if($res->num_rows>0)
{
 echo "<table>
  <tr> <th>SNO</th> <th>Phone Number</th> <th>PASSWORD</th> </tr>";
$i=0;
while($row=$res->fetch_assoc())
 {
  $i++;
  echo "<tr>";
  echo "<td>{$i}</td>";
  echo "<td>{$row["RPHO"]}</td>";
  echo "<td>{$row["RPASS"]}</td>";
  echo "</tr>";
  
 }
 
echo "</table>";
}
else
{
 echo "<p  class='error'>No Login Records Found</p>";
}
?>
<br>

        <div id="footer">
            <p>Copyright &copy; Vaani2005</p>
        </div>
    </div>
</body>
</html>