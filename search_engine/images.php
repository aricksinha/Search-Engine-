<!DOCTYPE html>
<html>
<head>
<title>Result Found</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
    .result{
		 margin-left:10%; amrgin-right:29%; margin-top:12px;
		
	}

</style>
</head>
<body>
<div class="container-fluid">

<?php


$search=$_GET["id"];
$con=mysqli_connect('localhost','root','','search');
  
  $sql= "select * from website where site_key like '%$search%' ";
   
   $rs=mysqli_query($con,$sql);
   
   while($row=mysqli_fetch_array($rs))
   {
	   echo "<a href='img/$row[5]' download><img src='img/$row[5]' height='200px' style='margin-top:15px;'></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
   }
   


?>

</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
</html>