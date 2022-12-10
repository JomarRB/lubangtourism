<!DOCTYPE html>
<html lang="en">
    <?php require_once('config.php'); ?>
 <?php require_once('inc/header.php') ?>
    <!-- CSS only -->
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
          <h3 class="position-absolute top-0 start-50 translate-middle-x" >SEABOURN BEACH RESORT</h3>
        </div>
				<?php
					require_once 'admin_seabourn/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "card mx-auto d-grid gap-3 mb-5 border-0 shadow" style = "max-width: 90%;">
          <div class="row g-0 p-3 " >
						<div class="col-md-4" >
							<img src = "images/<?php echo $fetch['photo']?>" class="img-fluid rounded-start"/>
						</div>
            <div class="col-md-8">
						<div class="card-body text-dark">
							<h3 class="card-title"><?php echo $fetch['room_type']?></h3>
							<h4 class="card-text"><?php echo "Price: Php. ".$fetch['price'].".00"?></h4>
							
							<a style = "margin-left:580px;" href = "add_reserve-seabourn.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
        </div>
        </div>
				<?php
					}
				?>
		    
			<form style = "margin-left:500px; margin-bottom:40px">
 <input class="bg-success" type="button" value="GO BACK!" onclick="history.back()">
</form>

</body>
</html>