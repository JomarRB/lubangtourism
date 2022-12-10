
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

.page-section{
	background-color:rgba(255, 255, 255, 0.07);
fill:rgba(60, 180, 179, 0.79);
background-size:621px 621px;
background-repeat:repeat;
background-image:url("data:image/svg+xml;charset=utf8,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' x='0' y='0' viewBox='0 0 600 600' xml:space='preserve'%3E%3Cstyle%3E.st0{fill:rgba(60, 180, 179, 0.79)}%3C/style%3E%3Cpath class='st0' d='M-.3 111.6H110v6H-.3zM-.3 99.9H110v6H-.3zM-.3 88.2H110v6H-.3zM-.3 76.5H110v6H-.3zM-.3 64.8H110v6H-.3zM-.3 53.1H110v6H-.3zM-.3 41.4H110v6H-.3zM-.3 18H110v6H-.3zM-.3 29.7H110v6H-.3zM-.3 6.3H110v6H-.3zM552.1 205h16.2v395h-16.2z'/%3E%3Cpath class='st0' d='M520.6 240.8H328.5v6h192.1v5.7H328.5v6h192.1v5.7H328.5v6h192.1v5.7H328.5v6h192.1v5.7H328.5v6h192.1v5.7H328.5v6h192.1v5.7H328.5v6h192.1v5.7H328.5v6h192.1v5.7H328.5v6h192.1v5.7H328.5v5h-.3v86.3H221.5V347h.2V240.6h106.8v-107H221.7v36.8h-.2V0h-6v170.4h-5.7V0h-6v170.4h-5.7V0h-6v170.4h-5.7V0h-6v170.4h-5.7V0h-6v170.4H163V0h-6v170.4h-5.7V0h-6v170.4h-5.7V0h-6v170.4H128V0h-6v170.4h-5.7V0h-6v122.9H.1v16.2h110.2v15.2H.1v16.2h110v5.9h111.6v17.4H110.3v-5.7h111v-6H109.7v3.6H.1V202h110.3v-2.1h111.3v5.7H110.1v6h111.6v5.7H.1v16.2h110v1.5h111.6v5.1H110v8.6H.1v16.2H110V280H.1v16.2H110v15.2H.1v16.2H110v15.2H.1V359h110.2v15.2H.1v16.2h110.2v15.2H.1V422h110.2v15.4H0v16.2h110.2v15.2H0V485h110.2v15.2H0v99.4h82v-83.2h28.2V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h25V599h82v-82.6H404V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.7V599h6v-82.6h5.4V600h16.2V205h-16.2v35.8zm-410.3-11.9v-5.7h111.3v5.7H110.3zm387.2 208.5h-5.7v-85.3h5.7v85.3zm6.1-85.3h5.7v85.3h-5.7v-85.3zm-17.7 85.3h-5.7v-85.3h5.7v85.3zm-11.7 0h-5.7v-85.3h5.7v85.3zm-11.7 0h-5.7v-85.3h5.7v85.3zm-11.7 0h-5.7v-85.3h5.7v85.3zm-11.7 0h-5.7v-85.3h5.7v85.3zm-11.7 0h-5.7v-85.3h5.7v85.3zm-11.7 0h-5.5v-85.3h5.5v85.3zm0 16.2v15.2H410v-15.2h5.7zm6 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.4v15.2h-5.4v-15.2zm0-16.2v-85.3h5.4v85.3h-5.4zM404 453.6v15.2H221.5v-15.2H404zm-211.9-16.2h-5.7V347h5.7v90.4zm6-90.4h5.7v90.4h-5.7V347zm-17.7 90.4h-5.7V347h5.7v90.4zm-11.7 0H163V347h5.7v90.4zm-11.7 0h-5.7V347h5.7v90.4zm-11.7 0h-5.7V347h5.7v90.4zm-11.7 0H128V347h5.7v90.4zm0 16.2v15.2H128v-15.2h5.6zm6.1 0h5.7v15.2h-5.7v-15.2zm11.6 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2H163v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm11.7 0h5.7v15.2h-5.7v-15.2zm5.7-16.2h-5.7V347h5.7v90.4zM116.3 347h5.7v90.4h-5.7V347zm0 106.6h5.7v15.2h-5.7v-15.2zm0 46.6V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2H128zm11.7 0V485h5.7v15.2h-5.7zm11.6 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2H163zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485H404v15.2H221.5zm188.5 0V485h5.7v15.2H410zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.7v15.2h-5.7zm11.7 0V485h5.4v15.2h-5.4zM583.5 205h16.2v395h-16.2z'/%3E%3Cpath class='st0' d='M328.5 198.6h271.2v6H328.5zM328.5 186.9h271.2v6H328.5zM328.5 175.2h271.2v6H328.5zM328.5 163.5h271.2v6H328.5zM328.5 151.8h271.2v6H328.5zM328.5 140.2h271.2v6H328.5zM328.5 128.5h271.2v6H328.5zM328.5 105.1h271.2v6H328.5zM328.5 116.8h271.2v6H328.5zM328.5 93.4v6h271.2V-.4h-82.8v93.8z'/%3E%3Cpath class='st0' d='M328.2 0h84.4v93.2h-84.4z'/%3E%3C/svg%3E");
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
<section class="page-section  bg-secondary" >
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">About Us</h2>
		</div>
		<div>
			<div class="card w-100">
				<div class="card-body text-dark">
					<?php echo file_get_contents(base_app.'about.html') ?>
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