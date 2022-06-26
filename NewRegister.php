<style type="text/css">
  .valid
  {
    border-color: red;
  }
</style>

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


<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <form method="post" onsubmit="return Validation()">

    <input class="form-control" id="User_name" type="text" placeholder="Enter Name" name="NewName"  required="" >
    <span id="msgNm" style="color: red"></span>
    <br>
    <input class="form-control" id="User_email" type="email" placeholder="Enter Email" name="NewEmail" required="" >
    <span id="msgEml" style="color: red"></span>
    <br>
    <input class="form-control" id="User_pass" type="password" placeholder="Enter password" name="NewPassword" required=""  >
    <br>
    <input class="form-control" id="User_conf" type="password" placeholder="Confirm password" required=""  >
     <span id="msgPass" style="color: red"></span>
    <br>
    <input class="form-control" id="User_number" name="NewPhone" type="number" placeholder="Enter phone no" required=""  >
    <span id="msgPhone" style="color: red"></span>
    <br>
    <select class="form-select" aria-label="Default select example" name="NewWork" required="" >
      <option selected>Work as</option>
      <option value="Front-End(Web)">Front-End(Web)</option>
      <option value="Back-End(Web)">Back-End(Web)</option>
      <option value="App Development">App Development</option>
      <option value="Game Development">Game Development</option>
      <option value="Digital Marketing">Digital Marketing</option>
      <option value="SEO">SEO</option>
      <option value="Other">Other</option>
    </select>
    <br>
      <select class="form-select" aria-label="Default select example" name="NewExperience" required="" >
      <option selected>Year of Experience</option>
      <option value="Fresher">0-1 Years</option>
      <option value="1-3 Year">1-3 Years</option>
      <option value="3-5 Year">3-5 Years</option>
      <option value="5-7 Year">5-7 Years</option>
      <option value="7-9 Year">7-9 Years</option>
      <option value="10 Year">10+ Years</option>
    </select>
    <br>
    <input class="form-control" id="User_position" type="text" placeholder="Enter position details"name="NewPos"  required="" >
    <span id="msgPos" style="color: red"></span>
    <br>
    <input class="form-control" id="User_company" type="text" placeholder="Enter your company name"name="NewCom" required="" >
    <span id="msgCom" style="color: red"></span>
    <br>
    <textarea class="form-control"  rows="2" placeholder="Enter company address" name="NewComAdd"></textarea>
    <span id="msgComAdd" style="color: red"></span>
    <br>
     <textarea class="form-control" id="User_skills"  rows="2" placeholder="Enter your skills" name="NewSkills" required=""></textarea>
    <span id="msgSkill" style="color: red"></span>
    <br>
    <input class="form-control" id="User_whatsapp" type="number" placeholder="Enter whatsapp number" name="NewWhatsapp" required="" >
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
  $Name=$_POST['NewName'];
  $Email=$_POST['NewEmail'];
  $Password=$_POST['NewPassword'];
  $Contact=$_POST['NewPhone'];
  $Work=$_POST['NewWork'];
  $Experience=$_POST['NewExperience'];
  $Position=$_POST['NewPos'];
  $Company=$_POST['NewCom'];
  $Company_address=$_POST['NewComAdd'];
  $Skills=$_POST['NewSkills'];
  $Whatsapp=$_POST['NewWhatsapp'];

  $AddRecord=mysqli_query($conn,"insert into circle_user_tbl(User_name,User_email,User_password,User_contact,User_work,User_Experience,User_position,User_company,User_company_addrress,User_skiils,User_whatsapp,User_status,IsDeleted)values('$Name','$Email','$Password','$Contact','$Work','$Experience','$Position','$Company','$Company_address','$Skills','$Whatsapp','1','0')");

  // echo"<pre>";
  // print_r($_POST);

 
 


  if($AddRecord)
  {
    echo"<div class='alert alert-primary' role='alert'>
  Your Profile created succesfully!
   </div>";
  }
  else
  {
    echo"<div class='alert alert-danger' role='alert'>
    Fail to create profile!
   </div>";
  }
}

?>



<!-- Footer -->

<?php include('footer.php');?>

<script src="script.js"></script>

</body>
</html>

