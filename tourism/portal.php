
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<style>
	header.masthead{
		background-image: url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
	}
	header.masthead .container{
		background:#0000006b;
    background-size: auto;
    
	}
  .masthead{
        background-color: #ec6510;
    }
	.featured-item{
    position: relative;
    width: 100%;
    overflow: hidden;
    -webkit-transition: var(--trans);
    -o-transition: var(--trans);
    transition: var(--trans);
    
}
.featured-item::after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    background: -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(18%, transparent), color-stop(99%, rgba(0, 0, 0, 0.8)), to(rgba(0, 0, 0, 0.8)));
    background: -o-linear-gradient(top, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
    background: linear-gradient(to bottom, transparent 0%, transparent 18%, rgba(0, 0, 0, 0.8) 99%, rgba(0, 0, 0, 0.8) 100%);
}
.box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
}
.featured-item-content{
    
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 2;
    color: #fff;
    width: 50%;
    padding: 1rem;
    -webkit-transform: translateY(68%);
        -ms-transform: translateY(68%);
            transform: translateY(68%);
    -webkit-transition: var(--trans);
    -o-transition: var(--trans);
    transition: var(--trans);
}
.featured-item-content span{
    position: absolute;
    top: -20px;
    color: white;
    font-size: 1.2rem;
    display: block;
    margin-bottom: 1.2rem;
    text-transform: capitalize;
}
.container{
    max-width: 1320px;
    padding: 0 1rem;
    margin: 0 auto;
}
.flex{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
}
.text{
    font-weight: 500;
    opacity: 0.9;
    line-height: 1.6;
    letter-spacing: 1px;
}
.form-control{
    width: 100%;
    margin: 0.6rem 0;
    max-width: 500px;
    border: 1px solid #fff;
    border-radius: 0.2rem;
    padding: 0.7rem;
    font-size: 1rem;
    font-family: 'Raleway', sans-serif;
    color: #fff;
    background-color: transparent;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
}


/* css stop transition and animation */
.resize-animation-stopper *{
    -webkit-animation: none!important;
            animation: none!important;
    -webkit-transition: none!important;
    -o-transition: none!important;
    transition: none!important;
}

.py-4{
    padding: 3rem 0;
}
img{
   height: 100%;
    width: 100%;
    display: block;
}




.title-wrap{
    text-align: center;
    padding: 1.4rem 0;
    margin-bottom: 2rem;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.lg-title{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
    font-size: 1.8rem;
}
.sm-title{
    display: block;
    color: #ec6510;
    font-weight: 500;
    font-size: 1.5rem;
    padding-bottom: 1rem;
    max-width: 450px;
    margin-right: auto;
    margin-left: auto;
    line-height: 1.7;
    font-family: 'Helvetica' ;
}
.my-2{
    margin: 2rem 0;
}
.shadow:hover{
    -webkit-box-shadow: 0px 0px 18px -4px rgba(109, 109, 109, 0.64);
            box-shadow: 0px 0px 18px -4px rgba(109, 109, 109, 0.64);
}
.video-wrapper{
    height: 600px;
    position: relative;
}
.video-wrapper video{
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover;
}

</style>
<!-- Masthead-->
<header class="masthead">
	<div class="container">
		<div class="masthead-subheading">Come and Visit Lubang</div>
		<div class="masthead-heading text-uppercase">The Amazing Island</div>
		<a class="btn btn-info btn-xl text-uppercase" href="#home">Explore</a>
	</div>
</header>

<section id = "featured" class = "py-4 bg-dark">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Discover why we are Amazing....</span>
                </div>
                
         <!-- video section -->
        <section id = "video" class="bg-dark">
            <div class = "video-wrapper flex">
                <video controls>
                    <source src = "videos/lubang.mp4" type = "video/mp4">
                </video>
            
            </div>
        </section>

		
        <!-- end of video section -->
		      
		<h2 class="text-center text-light">FEATURED PLACES</h2>
    <div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="40%">
	</div>   

                <div class = "box-container">

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-light house.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Light House, Cabra Island
                            </span>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-binacas.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Punta Cave, Binacas
                            </span>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-ambil.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Ambil Island
                            </span>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-shakira beach.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Shakira Beach, Tagbac
                            </span>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-sorville.JPG " alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Sorville Park, Sorville
                            </span>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "images/featured-hulagaan.JPG" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Hulagaan Falls, Binacas
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--Popular places-->

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