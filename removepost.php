<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>User Post</title>
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

?>

<?php include('header.php');?>

<!-- Content -->





  
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <?php
include 'connection.php';

$GetDeleteId=$_GET['uspid'];
$query=mysqli_query($conn,"update posts_tbl set IsDeleted=1 where id='$GetDeleteId'");

if($query)
{
  echo"<div class='alert alert-success' role='alert'>
  Your post removed succesfully!
</div>'<a href='userpost.php'><button class='btn btn-danger text-light'>Tap to Close</button></a>";
}
else
{
 echo"<div class='alert alert-danger' role='alert'>
  Fail to remove post!
</div>'";
}
?>


 

  </div>

<!-- Footer -->

<?php include('footer.php');?>



</body>
</html>




