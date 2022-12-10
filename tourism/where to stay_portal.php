<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

<style>
	header.masthead{
		background-image: url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
	}
	header.masthead .container{
		background:#0000006b;
	}
   
.packages{
    background-color: darkturquoise;
}
 .packages.box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap: 2rem;
   
}

.packages .box-container .box{
   height: 100%;
   width: 100%;
   box-shadow: var(--box-shadow);
   background: whitesmoke;
   
}

.packages .box-container .box:nth-child(1),
.packages .box-container .box:nth-child(2),
.packages .box-container .box:nth-child(3),
.packages .box-container .box:nth-child(4),
.packages .box-container .box:nth-child(5),
.packages .box-container .box:nth-child(6),
.packages .box-container .box:nth-child(7),
.packages .box-container .box:nth-child(8){
   display: flex;
}

.packages .box-container .box:hover .image img{
   transform: scale(1.1);
}

.packages .box-container .box .image{
   width: 70%;
   height: 25rem;
   overflow: hidden;
}

.packages .box-container .box .image img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}

.packages .box-container .box .content{
   padding:2rem;
   text-align: center;
}

.packages .box-container .box .content .stay{
   font-size: 2rem;
   color:blue;
   font-family: 'Permanent Marker', cursive;
}

.packages .box-container .box .content p{
   font-size: 1rem;
   color:var(--dark);
   line-height: 2;
   padding:1rem 0;
   font-family:  cursive;
}

 .packages{
    background-color: white;
    padding:5rem 10%;
 }
 @keyframes fadeIn {
    0%{
       transform: scale(0);
       opacity: 0;
    }
 }
 
 .write{
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 1.5px;
  font-size:15px;
  font-family: system-ui;
  color: black;
}
 
</style>


<section class="packages">

            <div class = "title-wrap">
                <span class = "sm-title">Great service creates great guests </span>
                <h2 class = "lg-title">Accommodations</h2>
                             </div>
         
            <div class="box-container">
         
               <div class="box">
                  <div class="image">
                     <img src="images/Lubang Bay Hotel.jpg" alt="">
                  </div>
                  <div class="content">
                     <h3 class="stay">LUBANG BAY HOTEL</h3>
                     <p>
                        Location:Brgy. Tilik <br>
                        Accommodation: Hotel <br>
                        Contact with:Ms. Marites Tria 09399293534
                    </p>
                     <a href="room_lubangbh.php" class="btn">book now</a>
                  </div>
               </div>
         
               <div class="box">
                  <div class="image">
                     <img src="images/precilla.jpg" alt="">
                  </div>
                  <div class="content">
                     <h3 class="stay">PRECILA'S HAVEN</h3>
                     <p>
                        Location: Brgyy. Tilik <br>
                        Accommodation: Hotel <br>
                        Contact with:Ms. Precy Balibay 09183068970
                    </p>
                     <a href="room_precilas.php" class="btn">book now</a>
                  </div>
               </div>
         
             <div class="box">
                  <div class="image">
                     <img src="images/seabourn.jpg" alt="">
                  </div>
                  <div class="content">
                     <h3 class="stay">SEABOURN BEACH RESORT</h3>
                     <p>
                        Location: Brgyy. Maligaya <br>
                        Accommodation: Resort <br>
                        Contact with:Mr.Ferdie Tangi 09081625763
                    </p>
                     <a href="room_seabourn.php" class="btn">book now</a>
                  </div>
               </div>
         
               <div class="box">
                  <div class="image">
                     <img src="images/stay-carmen.jpg" alt="">
                  </div>
                  <div class="content">
                     <h3 class="stay">CARMEN'S HOME STAY</h3>
                     <p> 
                        Location: Brgyy. Paraiso <br>
                        Accommodation: Homestay <br>
                        Contact with:Ms. Carmen aguilar 09989744037
                    </p>
                     <a href="room_carmens.php" class="btn">book now</a>
                  </div>
               </div>
         
               <div class="box">
                  <div class="image">
                     <img src="images/Michelle's Lodging House.jpg" alt="">
                  </div>
                  <div class="content">
                     <h3 class="stay">MICHELLE'S LODGING HOUSE</h3>
                     <p> 
                        Location: Brgyy. Paraiso<br>
                        Accommodation: Hotel <br>
                        Contact with:Ms.Jenny Lazerna 09465410202
                    </p>
                     <a href="room_michelles.php" class="btn">book now</a>
                  </div>
               </div>
         
               <div class="box">
                  <div class="image">
                     <img src="images/stay-jaime.jpg" alt="">
                  </div>
                  <div class="content">
                     <h3 class="stay">JAIME'S HOME STAY</h3>
                     <p>
                        Location: Brgyy. Maginhawa <br>
                        Accommodation: Homestay <br>
                        Contact with:Ms. JP Pagilagan 09283962334</p>
                     <a href="room_jaimes.php" class="btn">book now</a>
                  </div>
               </div>
         
               <div class="box">
                  <div class="image">
                     <img src="images/featured-bamboo.jpg" alt="">
                  </div>
                  <div class="content">
                     <h3 class="stay">BAMBOO HUT RESORT</h3>
                     <p>
                        Location: Brgyy. Kusangloob <br>
                        Accommodation: Resort <br>
                        Contact with:Ms. Dingson Mago 09670076645
                     </p>
                     <a href="room_bamboo.php" class="btn">book now</a>
                  </div>
               </div>
               <div class="row text-center">
               
                <div class="content content-center ">
                   
                   
                   <button 
        onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary"><h3 class="stay">BOOKING POLICY</h3></button>
        <div id="id01" class="w3-modal">
  <div class="w3-modal-content">

    <header class="w3-container w3-blue">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h4>BOOKING POLICY </h4>
    </header>

    <div class="w3-container bg-light">
    
  <br>
      <p class="write card-text"><h5>Deposit Policy:</h5>
50% deposit is required to confirm booking.<br>
50% balance payable upon check out. <br>
<br>
For Peak Season, all reservations payments are non-refundable.
Reservation is allowed to modify/cancel online on your own before 48 hours prior to the arrival date and no cancellation fees. Should you wish to make full payment in advance, please contact our Office to discuss your details.  
<h5>Cancellation/No Show Policy:</h5><br>
Once a reservation is confirmed, please notify us by phone or email of any cancellation or modification of the booking at least 2 days (48 hours) before arrival in order to avoid a charge of 25% of deposit.
All guests must produce a valid ID upon Check-in: 
In an event of a guest No Show, a fee of 25%  of deposit will be charged.
Early check-In or Late-Check out is subjected to bed/room availability on the relevant day, To be reconfirmed with the front office staff. 
Room not occupied by 2200 hours will be seen as No Show, unless prior arrangement has been made.
</p>
   <br>
  </div>
    <footer class="w3-container w3-blue">
      <p >Lubang Tourism</p>
    </footer>

  </div>
</div>

                </div>
             </div>
            </div>
        </section>

        <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<!-- Services->
<section class="page-section bg-dark" id="home">
	<div class="container">
		<h2 class="text-center">Accommodations</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="15%">
	</div>


<div class="row text-dark">
	<div class="card col " style="width: 20rem;">
  <img src="images/Lubang Bay Hotel.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lubang Bay Hotel</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="lubang bay.php " class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PRECILA'S HAVEN</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="precilas haven.php" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SEABOURN BEACH RESORT</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CARMEN'S HOME STAY</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">MICHELLE'S LODGING HOUSE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">JAIME'S HOME STAY</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>





	<!--div class="row">
		
			<div class="col-md-4 p-4 ">
				<div class="card w-100 rounded-0">
					<img class="card-img-top" src="<!?php echo validate_image($cover) ?>" alt="<!?php echo $row['title'] ?>" height="200rem" style="object-fit:cover">
					<div class="card-body">
					<h5 class="card-title truncate-1 w-100"><!php echo $row['title'] ?></h5><br>
					<div class=" w-100 d-flex justify-content-start">
						<div class="stars stars-small">
								<input disabled class="star star-5" id="star-5" type="radio" name="star" <!?php echo $rate == 5 ? "checked" : '' ?>/> <label class="star star-5" for="star-5"></label> 
								<input disabled class="star star-4" id="star-4" type="radio" name="star" <!?php echo $rate == 4 ? "checked" : '' ?>/> <label class="star star-4" for="star-4"></label> 
								<input disabled class="star star-3" id="star-3" type="radio" name="star" <!?php echo $rate == 3 ? "checked" : '' ?>/> <label class="star star-3" for="star-3"></label> 
								<input disabled class="star star-2" id="star-2" type="radio" name="star" <!?php echo $rate == 2 ? "checked" : '' ?>/> <label class="star star-2" for="star-2"></label> 
								<input disabled class="star star-1" id="star-1" type="radio" name="star" <!?php echo $rate == 1 ? "checked" : '' ?>/> <label class="star star-1" for="star-1"></label> 
						</div>
                    </div>
    				<p class="card-text truncate"><!?php echo $row['description'] ?></p>
					<div class="w-100 d-flex justify-content-end">
						<a href="./?page=view_package&id=<!?php echo md5($row['id']) ?>" class="btn btn-sm btn-flat btn-warning">View Package <i class="fa fa-arrow-right"></i></a>
					</div>
					</div>
				</div>
			</div>
		
	</div>
	<div class="d-flex w-100 justify-content-end">
		<a href="./?page=packages" class="btn btn-flat btn-warning mr-4">Explore Package <i class="fa fa-arrow-right"></i></a>
	</div>
	</div>
</section-->
<!-- About>
<section class="page-section" id="about">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">About Us</h2>
		</div>
		<div>
			<div class="card w-100">
				<div class="card-body">
					<!?php echo file_get_contents(base_app.'about.html') ?>
				</div>
			</div>
		</div>
	</div>
</section-->
<!-- Contact>
<section class="page-section" id="contact">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Contact Us</h2>
			<h3 class="section-subheading text-muted">Send us a message for inquiries.</h3>
		</div>
		<!-- * * * * * * * * * * * * * * *-->
		<!-- * * SB Forms Contact Form * *-->
		<!-- * * * * * * * * * * * * * * *-->
		<!-- This form is pre-integrated with SB Forms.-->
		<!-- To make this form functional, sign up at-->
		<!-- https://startbootstrap.com/solution/contact-forms-->
		<!-- to get an API token!>
		<form id="contactForm" >
			<div class="row align-items-stretch mb-5">
				<div class="col-md-6">
					<div class="form-group">
						
						<input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required />
					</div>
					<div class="form-group">
						
						<input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
					</div>
					<div class="form-group mb-md-0">
						<input class="form-control" id="subject" name="subject" type="subject" placeholder="Subject *" required />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group form-group-textarea mb-md-0">
						
						<textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
					</div>
				</div>
			</div>
			<div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
		</form>
	</div>
</section-->
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