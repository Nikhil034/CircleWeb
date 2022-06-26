<?php session_start();?>


<!DOCTYPE html>
<html>
<head>
<title>Your Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="icon" type="image/png" href="favi1.png">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
</head>
<body>

<?php include('connection.php');?>
<?php include('header.php');?>

<?php 

$mail=$_SESSION['AuthUser'];
$result=mysqli_query($conn,"select User_name from circle_user_tbl where User_email='$mail'");
$row=mysqli_fetch_row($result);
// print_r($row[0]);

// $enm=$_GET['User'];
// echo $enm;


if($_GET['User']===$row[0])
{
  $enm=$_GET['User'];
  // echo"<script>console.log(`${mail}`)</script>";
  $EditData=mysqli_query($conn,"select * from circle_user_tbl where User_name='$enm'");
  $fetchData=mysqli_fetch_array($EditData);
}
else
{
   header("location:401.php");
}



?>


<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

<?php

?>  

  <form method="post" onsubmit="return Validation()">

    <input class="form-control" id="User_name" type="text" placeholder="Enter Name" name="EditName"  value="<?php echo $fetchData[1];?>"  required="" >
    <span id="msgNm" style="color: red"></span>
    <br>
    <input class="form-control" id="User_email" type="email" placeholder="Enter Email" name="EditEmail" value="<?php echo $fetchData[2];?>" required="" >
    <span id="msgEml" style="color: red"></span>
    <br>

    <input class="form-control" id="User_pass" type="password" placeholder="Enter password" name="EditPassword" value="<?php echo $fetchData[3];?>" required="" onmouseenter="ShowPassword()" onmouseleave="HidePassword()"  >
    <br>
    <input class="form-control" id="User_conf" type="password" placeholder="Confirm password" value="<?php echo $fetchData[3];?>"  required=""  >
     <span id="msgPass" style="color: red"></span>
    <br>
    <input class="form-control" id="User_number" name="EditPhone" type="number" placeholder="Enter phone no" value="<?php echo $fetchData[4];?>" required=""  >
    <span id="msgPhone" style="color: red"></span>
    <br>
    <select class="form-select" aria-label="Default select example" name="EditWork" required="" >
      <option selected ><?php echo $fetchData[5];?></option>
      <option value="Front-End(Web)">Front-End(Web)</option>
      <option value="Back-End(Web)">Back-End(Web)</option>
      <option value="App Development">App Development</option>
      <option value="Game Development">Game Development</option>
      <option value="Digital Marketing">Digital Marketing</option>
      <option value="SEO">SEO</option>
      <option value="Other">Other</option>
    </select>
    <br>
      <select class="form-select" aria-label="Default select example" name="EditExperience" required="" >
      <option selected><?php echo $fetchData[6];?></option>
      <option value="Fresher">0-1 Years</option>
      <option value="1-3 Year">1-3 Years</option>
      <option value="3-5 Year">3-5 Years</option>
      <option value="5-7 Year">5-7 Years</option>
      <option value="7-9 Year">7-9 Years</option>
      <option value="10 Year">10+ Years</option>
    </select>
    <br>
    <input class="form-control" id="User_position" type="text" placeholder="Enter position details" name="EditPos"  value="<?php echo $fetchData[7];?>" required="" >
    <span id="msgPos" style="color: red"></span>
    <br>
    <input class="form-control" id="User_company" type="text" placeholder="Enter your company name"name="EditCom" value="<?php echo $fetchData[8];?>" required="" >
    <span id="msgCom" style="color: red"></span>
    <br>
    <textarea class="form-control"  rows="2" placeholder="Enter company address" name="EditComAdd"><?php echo $fetchData[9];?></textarea>
    <span id="msgComAdd" style="color: red"></span>
    <br>
     <textarea class="form-control" id="User_skills"  rows="2" placeholder="Enter your skills" name="EditSkills" required=""><?php echo $fetchData[10];?></textarea>
    <span id="msgSkill" style="color: red"></span>
    <br>
    <input class="form-control" id="User_whatsapp" type="number" placeholder="Enter whatsapp number" name="EditWhatsapp" required="" value="<?php echo $fetchData[11];?>">
    <span id="msgWht" style="color: red"></span>
    <br>  

    <div class="d-grid gap-2 col-4 mx-auto">
  <button class="btn btn-primary" name="btnsubmit" type="Submit">Submit</button>
  <button class="btn btn-danger " type="button" onclick="Exit()">Exit</button>
  <br>
</div>


  
</form>

<?php

if(isset($_POST['btnsubmit']))
{
  $Name=$_POST['EditName'];
  $Email=$_POST['EditEmail'];
  $Password=$_POST['EditPassword'];
  $Contact=$_POST['EditPhone'];
  $Work=$_POST['EditWork'];
  $Experience=$_POST['EditExperience'];
  $Position=$_POST['EditPos'];
  $Company=$_POST['EditCom'];
  $Company_address=$_POST['EditComAdd'];
  $Skills=$_POST['EditSkills'];
  $Whatsapp=$_POST['EditWhatsapp'];

  $EditRecord=mysqli_query($conn,"update circle_user_tbl set User_name='$Name',User_email='$Email',User_password='$Password',User_contact='$Contact',User_work='$Work',User_Experience='$Experience',User_position='$Position',User_company='$Company',User_company_addrress='$Company_address',User_skiils='$Skills',User_whatsapp='$Whatsapp' where User_name='$enm'");



  // echo"<pre>";
  // print_r($_POST);

 
 


  if($EditRecord)
  {
    echo"<div class='alert alert-primary' role='alert'>
  Your Profile save succesfully!
   </div>";
  }
  else
  {
    echo"<div class='alert alert-danger' role='alert'>
    Fail to save profile!
   </div>";
  }
}

?>


<!-- Footer -->

<?php include('footer.php');?>

<script src="script.js"></script>

</body>
</html>