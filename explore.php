<style type="text/css">
	.modal
	{
		display: none;
	}
</style>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Explore circle</title>
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
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:0px">

	<?php
global $mail;
if(isset($_SESSION['AuthUser']))
{
	
	$mail=$_SESSION['AuthUser'];


$query=mysqli_query($conn,"select * from circle_user_tbl where NOT User_email='$mail' AND isDeleted='0' AND User_status='1'");
// $row=mysqli_fetch_array($query);
// echo"<pre>";
// print_r($row);
?>


<table class="table table-hover"  id="sdt">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Work & Position</th>
      <th>Experience</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
     while($fetch=mysqli_fetch_array($query))
     {
     ?>	
      <td><?php echo $fetch[1];?></td>
      <td><?php echo $fetch[5].",".$fetch[7];?></td>
      <td><?php echo $fetch[6];?></td>
      <td><a href="ViewProfile.php?User=<?php echo $fetch[1];?>"><button class="btn btn-info text-light" id="mybtn">View Profile</button></a></td>
     

    </tr>

<?php
   }
   ?> 

   
  </tbody>
 

</table>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#sdt').DataTable();
</script>


<?php
   }
   else
   {
     echo"<div class='alert alert-warning text-center text-primary' role='alert'>
 Plese first create profile or login!Error 401!
</div";
    ?>
<?php 
}
?>


<!-- Footer -->


<script src="script.js" defer=""></script>




</body>
<?php include('footer.php');?>
</html>
