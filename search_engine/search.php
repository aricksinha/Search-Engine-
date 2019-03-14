<!DOCTYPE html>
<html>
<head>
   <title>Our Search Engine</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body onload="ld()">
<script>
 function ld()
 {
	 document.search_box.search.focus();
 }
</script>
<style>
body{
	margin:12%;
}

</style>
<form name="search_box" action="result.php" method="get">
<center>
<img src="img/searchimage.jpg" class="img-fluid" alt="Search" >
<input type="text" class="form-control" name="search" style="width:50%;margin-top:20px;">
<br>
<input type="submit" class="btn btn-success btn-md" value="Search" name="search_button">
</center>










</form>



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>









</body>
</html>