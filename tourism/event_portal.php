
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<style>
	header.masthead{
		background-image: url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
	}
	header.masthead .container{
		background:#0000006b;
	}
   .card-text{
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 1px;
  font-size: 11px;
  font-family: Arial, Helvetica, sans-serif;
}
.card{
   height: 95%;
   width: 100%;
}
.image{
   height: 55%;
   width: 100%;
}


</style>
<!-- Masthead>
<header-- class="masthead">
	<div class="container">
		<div class="masthead-subheading">Come and Visit Lubang</div>
		<div class="masthead-heading text-uppercase">The Amazing Island</div>
		<a class="btn btn-info btn-xl text-uppercase" href="#home">Explore</a>
	</div>
</header-->


<!--Popular places-->
<section class="page-section " >
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Events/News</h2>
		</div>
		<div>
			<div class="card w-100">
				<div class="card-body">
					<?php echo file_get_contents(base_app.'events.html') ?>
				</div>
			</div>
		</div>
	</div>
</section>
    
<script>
$(function(){
	$('#contactForm').submit(function(e){
		e.preventDefault()
		$.ajax({
			url:_base_url_+"classes/Master.php?f=save_inquiry",
			method:"POST",
			data:$(this).serialize(),
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("an error occured",'error')
				end_loader()
			},
			success:function(resp){
				if(typeof resp == 'object' && resp.status == 'success'){
					alert_toast("Inquiry sent",'success')
					$('#contactForm').get(0).reset()
				}else{
					console.log(resp)
					alert_toast("an error occured",'error')
					end_loader()
				}
			}
		})
	})
})
</script>