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
  <form action="result.php" method="get">
    <div class="row"style="margin-top:10px; background:#f2f2f2">
	     <div class="col-sm-1">
		 <a href="search.php"><img src="img/searchimage.jpg" class="img-responsive" alt="Search" height="60px" ></a>

		 </div>
		  <div class="col-sm-6">
		  <div class="input-group" >
		 <input type="text" class="form-control" name="search">
		 <span class="input-group-btn">
		  <input class="btn btn-primary" type="submit" name="search_button" value="Go">
		 </span>
           </div>
		 </div>
	</div>
  </form>
</div>

<div class="result">
<table>
<tr>

  <?php 
  
  $con=mysqli_connect('localhost','root','','search');
   
   if(isset($_GET["search_button"]))
   {
	   $search=$_GET['search'];
	   
	   if($search=="")
	   {
		   echo "<center><h1><b>Please Write Something In search Box</b></h1></center>"; 
		   exit();
	   }
	   
	   $sql= "select * from website where site_key like '%$search%' limit 0,1";
	   
	   $rs=mysqli_query($con,$sql);
	   
	   if(mysqli_num_rows($rs)<1)
	   {
		  echo "<center><h4><b>Oops !!! there is no result found related the word</b></h4></center>";
          exit();		  
	   }
	   
	   echo "<font size='+1' color='#0000cc'>Images for $search</font>";
	   
	   while($row = mysqli_fetch_array($rs))
	   {
		   echo "<td>
		   <table>
		   <tr>
		   <td>
		     <img src='img/$row[5]' height='100px' '>
		   </td>
		   </tr>
		   </table>
		   
		   
		   </td>";
	   }
	   
   }
  
  ?>
    

</tr>




</table>
<?php
  echo "<a href='images.php?id=$search'><font size='+1' color='#0000cc'>More Images for $search </font></a>";
  echo "<hr>";
  
   $sql1= "select * from website where site_key like '%$search%' ";
   
   $rs1=mysqli_query($con,$sql1);
   
   
   while($row1=mysqli_fetch_array($rs1))
   {
	   echo "<a href='$row1[2]'><font size='4' color='#0000cc'><b>$row1[1]</b></font></a><br>";
	   echo "<font size='3' color='#00c400'>$row1[2]</font><br>";
	   echo "<font size='3' color='#666666'>$row1[4]</font><br><br>";
	   
	   
	   
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