<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Post and Project</title>
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


<?php include('header.php');?>
<?php include('connection.php');?>


<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

<?php
 $user=$_GET['User'];
 if(isset($_SESSION['AuthUser']))
 {
   $query=mysqli_query($conn,"select * from circle_user_tbl where User_name='$user'");
   $record=mysqli_fetch_array($query);

 ?>
  <div class="card">
  <div class="card-header">
    Profile of, <?php echo $user;?>
  </div>
  <div class="card-body">
    <div class="card">
      <div class="card-body text-primary">Email:-<?php echo $record[2];?></div>
   </div>
   <br>
   <div class="card">
      <div class="card-body text-primary">Contact:-<?php echo $record[4];?></div>
   </div>
   <br>
   <div class="card">
      <div class="card-body text-primary">Company:-<?php echo $record[8];?></div>
   </div>
   <br>
   <div class="card">
      <div class="card-body text-primary">Company Address:-<?php echo $record[9];?></div>
   </div>
   <br>
   <div class="card">
      <div class="card-body text-primary">Skills:-<?php echo $record[10];?></div>
   </div>
   <br>
    <a href="https://wa.me/+91<?php echo $record['11'];?>?text=Hello <?php echo $record[1];?>" target="_blank" class="btn btn-success">Whatsapp Direct</a>
  </div>
</div>

<?php
 }
 else
 {
   echo"<div class='alert alert-warning text-center text-primary' role='alert'>
 Access denied Error 401!
</div>";
?>

<?php
 }
 ?>

  </div>

<!-- Footer -->

<?php include('footer.php');?>



</body>
</html>
