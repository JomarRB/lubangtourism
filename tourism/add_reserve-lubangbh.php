<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>LUBANG BAY HOTEL</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	</head>
<body class="bg-info">
	<nav class="navbar bg-dark  d-grid gap-3">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#">
     		 	<img src="images/logo.jpg" alt="Logo" width="50" height="50" class="rounded-circle d-inline-block align-text-top">
    			<h1 class="d-inline-block align-text-top text-info" >LubangTourism</h1>
    		</a>
  		</div>
	</nav>
	<div class="position-relative text-bg-info p-4" style = "max-width: 100%;" >
          <h3 class="position-absolute top-0 start-50 translate-middle-x" >LUBANG BAY HOTEL</h3>
        </div>
				<?php 
					require_once 'admin_lubangbh/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") ;
					$fetch = $query->fetch_array();
				?>
					<div class = "card mx-auto bg-dark d-grid gap-3 mb-5 border-0 shadow" style = "max-width: 90%;">
          <div class="row g-0 p-3 " >
						<div class="col-md-4 mb-3   text-center text-light " >
							<img src = "images/<?php echo $fetch['photo']?>" class="img-fluid rounded-start"/>
							<h3><?php echo $fetch['room_type']?></h3>
						<h3 style = "color:aqua;"><?php echo "Php. ".$fetch['price'].".00";?></h3>
						</div>
            <div class="col-md-8  bg-light ">
						<div class="card-body text-dark">
							
							<div class = "col-md-8 " >
							<strong><h3 class="text-right">MAKE A RESERVATION</h3></strong>
				<br />
					<form method = "POST" enctype = "multipart/form-data"  >
					<div class="form-row" style = "width: 150%;">
						<div class = "col-md-8 mb-3 ">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "col-md-8 mb-3">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "col-md-8 mb-3">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "col-md-8 mb-3">
							<label>City/Province</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "col-md-8 mb-3">
							<label>Nationality</label>
							<input type = "text" class = "form-control" name = "nationality" required = "required" />
						</div>
						<div class = "col-md-8 mb-3">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "col-md-8 mb-3">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "col-md-6 mb-3">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</div>
					</form>
				</div>
				
			</div>
		</div>
		</div>
	</div>
	<form style = "margin-left:500px; margin-bottom:40px">
 <input class="bg-success" type="button" value="GO BACK!" onclick="history.back()">
</form>
<div class = "col-md-4"></div>
				<?php require_once 'add_query-lubangbh.php'?>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>