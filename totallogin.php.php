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
            <h1>Women Arrasment Managment System</h1>
        </div>
        
                  <h1 id="heading">Total Complaints</h1>
<?php
$sql="SELECT * FROM complaint";
$res=$db->query($sql);
if($res->num_rows>0)
{
 echo "<table>
  <tr> <th>SNO</th> <th>NAME</th> <th>AGE</th> <th>DISTRICT</th> <th>COMPLAINT DISTRICT</th> <th>COMPLAINT AREA</th> <th>PROBLEM</th> </tr>";
$i=0;
while($row=$res->fetch_assoc())
 {
  $i++;
  echo "<tr>";
  echo "<td>{$i}</td>";
  echo "<td>{$row["NAME"]}</td>";
  echo "<td>{$row["AGE"]}</td>";
  echo "<td>{$row["DIS"]}</td>";
  echo "<td>{$row["CDIS"]}</td>";
  echo "<td>{$row["AREA"]}</td>";
  echo "<td>{$row["PRO"]}</td>";
  echo "</tr>";
  
 }
 
echo "</table>";
}
else
{
 echo "<p  class='error'>No Students Records Found</p>";
}
?>
<br>

        <div id="footer">
            <p>Copyright &copy; Vaani2005</p>
        </div>
    </div>
</body>
</html>