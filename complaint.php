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

  <div class="container">

    <h2>Complaint Form</h2>
<?php
if(isset($_POST["submit"]))
{
 $target_dir="proof/";
 $target_file=$target_dir.basename($_FILES["efile"]["name"]);
 if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))
 {
  $sql="insert into complaint (NAME,AGE,DIS,CDIS,PRO,CAREA,file) values ('{$_POST["name"]}','{$_POST["age"]}','{$_POST["district"]}','{$_POST["pdistrict"]}','{$_POST["problem"]}','{$_POST["parea"]}','{$target_file}')";
  $db->query($sql);
  echo "<h3><center>Complaint Submitted Successfully</center></h3>";
  echo "<h4><center><a href='sfeedback.php'>FEEDBACK</a></center></h4>";
 }
 else
 {
  echo " Error While Uploading ";
 }
}
?>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Enter your age" min="1" required>
      </div>
      <div class="form-group">
        <label for="district">Your District:</label>
        <select id="district" name="district" required>
          <option value="" disabled selected>Select your district</option>
          <option>Ariyalur</option>
          <option>Chengalpattu</option>
          <option>Chennai</option>
          <option>Coimbatore</option>
          <option>Cuddalore</option>
          <option>Dharmapuri</option>
          <option>Dindigul</option>
          <option>Erode</option>
          <option>Kallakurichi</option>
          <option>Kanchipuram</option>
          <option>Kanniyakumari</option>
          <option>Karur</option>
          <option>Krishnagiri</option>
          <option>Madurai</option>
          <option>Mayiladuthurai</option>
          <option>Nagapattinam</option>
          <option>Namakkal</option>
          <option>Perambalur</option>
          <option>Pudukkottai</option>
          <option>Ramanathapuram</option>
          <option>Ranipet</option>
          <option>Salem</option>
          <option>Sivaganga</option>
          <option>Tenkasi</option>
          <option>Thanjavur</option>
          <option>Theni</option>
          <option>Thoothukudi</option>
          <option>Tiruchirappalli</option>
          <option>Tirunelveli</option>
          <option>Tirupathur</option>
          <option>Tiruppur</option>
          <option>Tiruvallur</option>
          <option>Tiruvannamalai</option>
          <option>Tiruvarur</option>
          <option>Vellore</option>
          <option>Viluppuram</option>
          <option>Virudhunagar</option>
        </select>
      </div>
      <div class="form-group">
        <label for="harassment_district">District Where Harassment Occurred:</label>
        <select id="harassment_district" name="pdistrict" required>
          <option value="" disabled selected>Select the district where harassment occurred</option>
          <option>Ariyalur</option>
          <option>Chengalpattu</option>
          <option>Chennai</option>
          <option>Coimbatore</option>
          <option>Cuddalore</option>
          <option>Dharmapuri</option>
          <option>Dindigul</option>
          <option>Erode</option>
          <option>Kallakurichi</option>
          <option>Kanchipuram</option>
          <option>Kanniyakumari</option>
          <option>Karur</option>
          <option>Krishnagiri</option>
          <option>Madurai</option>
          <option>Mayiladuthurai</option>
          <option>Nagapattinam</option>
          <option>Namakkal</option>
          <option>Perambalur</option>
          <option>Pudukkottai</option>
          <option>Ramanathapuram</option>
          <option>Ranipet</option>
          <option>Salem</option>
          <option>Sivaganga</option>
          <option>Tenkasi</option>
          <option>Thanjavur</option>
          <option>Theni</option>
          <option>Thoothukudi</option>
          <option>Tiruchirappalli</option>
          <option>Tirunelveli</option>
          <option>Tirupathur</option>
          <option>Tiruppur</option>
          <option>Tiruvallur</option>
          <option>Tiruvannamalai</option>
          <option>Tiruvarur</option>
          <option>Vellore</option>
          <option>Viluppuram</option>
          <option>Virudhunagar</option>
        </select>
      </div>
      <div class="form-group">
        <label for="problem">Select Problem:</label>
        <select id="problem" name="problem" required>
          <option value="" disabled selected>Select the problem</option>
          <option>Verbal Harassment</option>
          <option>Physical Harassment</option>
          <option>Cyber Harassment</option>
          <option>Stalking</option>
          <option>Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="problematic_area">Problematic Area Description:</label>
        <textarea id="problematic_area" name="parea" rows="5" placeholder="Describe the problematic area in detail" required></textarea>
      </div>
      <div class="form-group">
       <label for="proof">Upload Proof (Optional):</label>
       <input type="file" id="proof" name="efile" >
      </div>

      <div class="form-group">
        <button type="submit" name="submit">Submit Complaint</button>
      </div>
    </form>
  </div>
</body>
</html>
