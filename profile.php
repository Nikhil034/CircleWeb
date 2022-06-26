<?php
session_start();
?>



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

<?php 

include 'connection.php';

//echo $_SESSION['AuthUser'];

?>

<?php include('header.php');?>

<!-- Content -->



<div class="" style="">


  
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <?php 

  if(isset($_SESSION['AuthUser']))
  {
       // print_r($_SESSION);
       $mail=$_SESSION['AuthUser'];
       $AuthorizeUserData=mysqli_query($conn,"select * from circle_user_tbl where User_email='$mail'");
       $Profile=mysqli_fetch_array($AuthorizeUserData);
       //print_r($Profile);
       $status=$Profile[12];
      


 ?>   

 
<div class="container">
  
  <div class="card">
    <div class="card-header">Welcome to  CircleWeb,dear <?php echo $Profile[1];?></div>
    <div class="card-body">
      
      <div class="container overflow-hidden">
        <div class="row gx-4">
            <div class="col">
              <label class="text-primary">Email</label>
              <div class="p-3 border bg-light"><?php echo $Profile[2];?></div>
            </div>
            <div class="col">
              <label class="text-primary">Contact</label>
              <div class="p-3 border bg-light"><?php echo $Profile[4];?></div>
            </div>
        </div>
        <br>
         <div class="row gx-4">
            <div class="col">
              <label class="text-primary">Work as</label>
              <div class="p-3 border bg-light"><?php echo $Profile[5];?></div>
            </div>
            <div class="col">
              <label class="text-primary">Position</label>
              <div class="p-3 border bg-light"><?php echo $Profile[7];?></div>
            </div>
        </div>
        <br>
         <div class="row gx-4">
            <div class="col">
              <label class="text-primary">Your Company</label>
              <div class="p-3 border bg-light"><?php echo $Profile[8];?></div>
            </div>
            <div class="col">
              <label class="text-primary">Company Address</label>
              <div class="p-3 border bg-light"><?php echo $Profile[9];?></div>
            </div>
        </div>
        <br>
         <div class="row gx-4">
            <div class="col">
              <label class="text-primary">Years of Experience</label>
              <div class="p-3 border bg-light"><?php echo $Profile[6];?></div>
            </div>
            <div class="col">
              <label class="text-primary">Your Status</label>
              <div class="p-3 border bg-light"><?php  echo($status==1)?"Active":"Deactive";?></div>
            </div>
        </div>
        <br>
         <div class="row gx-4">
            <div class="col">
              <label class="text-primary">Your Skills</label>
              <div class="p-3 border bg-light"><?php echo $Profile[10];?></div>
            </div>
            <div class="col">
              <label class="text-primary">Whatsapp number</label>
              <div class="p-3 border bg-light "><?php echo $Profile[11];?></div>
            </div>
        </div>
      </div>

    </div> 
    <div class="card-footer"><a href="Logout.php"><button class="btn btn-danger">Logout</button></a>
      <a href="EditProfile.php?User=<?php echo $Profile[1];?>"><button class="btn btn-info text-light">Edit Profile</button></a>
      <a href="userpost.php" target="__blank"><button class="btn btn-warning text-light">Your Post</button></a>
    </div>
  </div>
</div>

<!-- Here are our user profile is display when user is Authenticate and Authorize to show details-->

  
<?php
 }
 else
 {
    //First Time Display Login layout for new user
 ?>

   <form method="post">

    <div class="input-group mb-3">
    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
    <input type="Email" class="form-control" aria-label="Sizing example input" name="AuthEmail" aria-describedby="inputGroup-sizing-default">
  </div>

  <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
  <input type="Password" class="form-control" aria-label="Sizing example input" name="AuthPassword" aria-describedby="inputGroup-sizing-default">
</div>

  <button type="submit" name="lgbtn" class="btn btn-info">Login</button>
  <a href="NewRegister.php"><button type="button" class="btn btn-warning">Create Profile</button></a>
 </div>
</form>
<?php
 }
 ?>


 <?php 

if(isset($_POST['lgbtn']))
{
 
  $Secure_Email=mysqli_real_escape_string($conn,$_POST['AuthEmail']);
  $Secure_Password=mysqli_real_escape_string($conn,$_POST['AuthPassword']);
  
  //echo $Secure_Email,$Secure_Password;

  $AuthenticateUser=mysqli_query($conn,"select id from circle_user_tbl where User_email='$Secure_Email' and User_password='$Secure_Password'");

  if(mysqli_fetch_array($AuthenticateUser))
  {
     $_SESSION['AuthUser']=$Secure_Email;
     echo"<div class='alert alert-success' role='alert'>
      You are Login succesfully !<a href='profile.php'> Tap to Profile</a>!
   </div>";
  }
  else
  {
     echo"<div class='alert alert-danger' role='alert'>
    Plese try again!
   </div>";
  }
}
?>


</div>


<!-- Footer -->

<?php include('footer.php');?>



</body>
</html>




