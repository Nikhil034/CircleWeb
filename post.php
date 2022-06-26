<style type="text/css">
  .my_scroll_div{
    overflow-y: auto;
    max-height: 400px;
}
</style>
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
<?php include 'connection.php';?>
<?php
$query=mysqli_query($conn,"select * from posts_tbl where IsDeleted=0 order by id desc");
// $rowofpost=mysqli_fetch_array($query);

?>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">


  <div class="card my_scroll_div" >
  <div class="card-header" >
    <a href="AddPost.php"><button class="btn btn-warning text-light" style="float: right;">Add Post</button></a>
  </div>
  
  <div class="card-body" >
      
      <div class="card" id="sdt"  >
    <?php
    while($rowofpost=mysqli_fetch_array($query))
    {
    ?>    
  <div class="card-body">
    <label class="text-primary text-uppercase">Posted by:-</label><?php echo $rowofpost[1];?>
  </div>
   <div class="card-body">
    <label class="text-primary text-uppercase">Post details:-</label><?php echo $rowofpost[2];?>
      
  </div>
  <div class="card-body">
    <label class="text-primary text-uppercase">Post type:-</label><?php echo $rowofpost[3];?>
      
  </div>
  <div class="card-body">
    <label class="text-primary text-uppercase">Post timeline:-</label><?php echo $rowofpost[5];?>
      
  </div>
  <div class="card-body">
    <label class="text-primary text-uppercase">Resource:-</label><?php echo $rowofpost[4];?>
      
  </div>
  <hr style="color: purple;">
  <?php
   }
   ?>
</div>


  </div>

</div>
<br>

<!-- Footer -->
<script src="script.js"></script>

<?php include 'footer.php';?>



</body>
</html>
