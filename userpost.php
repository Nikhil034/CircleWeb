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

$mail=$_SESSION['AuthUser'];
$result=mysqli_query($conn,"select User_name from circle_user_tbl where User_email='$mail'");
$row=mysqli_fetch_row($result);

$query=mysqli_query($conn,"select * from posts_tbl where Posted_user='$row[0]'and IsDeleted=0");


  ?>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Content</th>
      <th scope="col">Remove</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $count=0;
    while($fetchpost=mysqli_fetch_array($query))
       
    {
       $count++;
    ?>
    <tr>
      <th scope="row"><?php echo $count;?></th>
      <td><?php echo $fetchpost[3];?></td>
      <td><?php echo $fetchpost[2];?></td>
      <td><a href="removepost.php?uspid=<?php echo $fetchpost[0];?>"><button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></button></a></td>
    </tr>
  </tbody>
<?php } ?>
</table>




  </div>

<!-- Footer -->

<?php include('footer.php');?>



</body>
</html>




