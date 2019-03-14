<!DOCTYPE html>
<head>
   <title>Our Search Engine</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


</head>
<body>

<div class="container">
<br>
       <center><h2><b>Insert Website</b></h2></center>
	   <br>
	   <form action="insert_site.php" method="post" enctype="multipart/form-data">
	   <div class="form-group">
	   
	   <div class="row">
	   <label class="col-sm-2" for="stitle">Site Title</label>
	   
	   <div class="col-sm-10">
	   <input type="text" class="form-control" id="stitle" name="s_title" placeholder="Enter Site Title" required>
	   </div>
	   </div>
	   </div>
	   <div class="form-group">
	   
	   <div class="row">
	   <label class="col-sm-2" for="slink">Site Link</label>
	   
	   <div class="col-sm-10">
	   <input type="text" class="form-control" id="slink" name="s_link" placeholder="Enter Site Link"required>
	   </div>
	   </div>
	   </div>
	   <div class="form-group">
	   
	   <div class="row">
	   <label class="col-sm-2" for="skey">Site Keywords</label>
	   
	   <div class="col-sm-10">
	   <input type="text" class="form-control" id="skey" name="s_key" placeholder="Enter Site keywords" required>
	   </div>
	   </div>
	   </div>
	   <div class="form-group">
	   
	   <div class="row">
	   <label class="col-sm-2" for="slink">Site Description</label>
	   
	   <div class="col-sm-10">
	   <textarea class="form-control" id="sdes" name="s_des" placeholder="Enter Site Description"required></textarea>
	   </div>
	   </div>
	   </div>
	   <div class="form-group">
	   
	   <div class="row">
	   <label class="col-sm-2" for="simg">Site Image</label>
	   
	   <div class="col-sm-10">
	  <input type="file" class="form-control" name="s_img" required>
	  </div>
	   </div>
	   </div><br><br>
	   <center>

	   <div class="form-group">
	   	   <div class="row">
	   
	    <input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel">
	   </div>
	   
	   </div>
	   </center>
	   
	   
	   
	   </form>
	   
	   
</div>





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<body>
</html>


<?php
$con=mysqli_connect('localhost','root','','search');
if(isset($_POST["submit"]))
{
	$s_title= addslashes($_POST["s_title"]);	
	$s_link= addslashes($_POST["s_link"]);	
	$s_key= addslashes($_POST["s_key"]);
	$s_des= addslashes($_POST["s_des"]);
	$s_img=addslashes($_FILES["s_img"]["name"]);
	
	
	if(move_uploaded_file($_FILES["s_img"] ["tmp_name"],"img/".$_FILES["s_img"] ["name"]))
	{
		$sql="insert into website(site_title,site_link,site_key,site_des,site_img) values('$s_title','$s_link','$s_key','$s_des','$s_img')";
		
		$rs=mysqli_query($con,$sql);
		
		if($rs)
		{
			echo "<div class='alert alert-success'>Site Uploaded Successfully</div>";
		}
		else{
			echo "<div class='alert alert-danger'>Site  Not Uploaded </div>";
		
		}
	}
}


?>