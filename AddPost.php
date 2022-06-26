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
<?php
  if(isset($_SESSION['AuthUser']))
  {
    $user=$_SESSION['AuthUser'];
    $User_name=mysqli_query($conn,"select User_name from circle_user_tbl where User_email='$user'");
    $row=mysqli_fetch_array($User_name);
?>    

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="card">
  <div class="card-header">
    Add Post
  </div>
  <div class="card-body">
    <form method="post">
      <label>Post By</label>
      <input class="form-control" type="text" value="<?php echo $row['User_name'];?>" readonly="" name="Pst_user">
      <br>
      <label>Type of Post</label>
      <select class="form-control" id="" name="Pst_type">
      <option selected="">Select type</option>
      <option value="Job">Job</option>
      <option value="Project">Project</option>
    </select>
    <br>
      <label for="exampleFormControlTextarea1">Post Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Pst_content"></textarea>

    <br>
    <label>Contact details</label>
      <input class="form-control" type="text" value="" placeholder="Email or phone to company or person"  name="Pst_cont">
      <br>
    <button type="submit" name="sbtn" class="btn btn-info text-light">Submit</button>
  
  </div>
  <br>
 
</div>

  </div>
 
</div>
  <?php
   }
   else
   {
      header("location:401.php");
    ?>

<?php
 }
 ?>

 <?php
 if(isset($_POST['sbtn']))
 {
  $Posted_user=$_POST['Pst_user'];
  $Post_type=$_POST['Pst_type'];
  $Post_content=$_POST['Pst_content'];
  $Post_connect=$_POST['Pst_cont'];

  $addpost=mysqli_query($conn,"insert into posts_tbl(Posted_user,Post_content,Post_type,Post_contact,IsDeleted)value('$Posted_user','$Post_content','$Post_type','$Post_connect','0')");

  if($addpost)
  {
    echo"<div class='alert alert-primary' role='alert'>
  New post add succesfully!
   </div>";
  }
  else
  {
    echo"<div class='alert alert-danger' role='alert'>
    Fail to add post!
   </div>";
  }
 }
 ?> 


<br>

<!-- Footer -->

<?php include 'footer.php';?>



</body>
</html>
