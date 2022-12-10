
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
  font-size: 12px;
  font-family: Arial, Helvetica, sans-serif;
}
.write{
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 1.5px;
  font-size:15px;
  font-family: system-ui;
  color: black;
}
h5{
  color: darkorange;
}
.card{
   height: 95%;
   width: 100%;
}

.image{
   height: 55%;
   width: 100%;
}
.photo {
  padding: 25px 25px 25px 25px;
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
<section class="page-section bg-dark" id="popular">
	<div class="container">
		<h2 class="text-center">POPULAR PLACES</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="55%">
	</div>

   
  <div class="row text-center text-dark">
  <div class="col-sm-6">
    <div class="card  ">
    <img src="images/featured-onoda cave.jpg" class="image card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ONODA CAVE, VIGO</h5>
        <p class="card-text">One of the very distinct places known to the natives. It is noted as hiding place of the last known Japanese soldier straggler who came out after 30 years on March 10, 1974. The caves and rocks are all marble stones and it is surrounded by a number of trees and plants that has been influential to the long stay of the Japanese soldier in the mountain trail thus called the Onoda Cave.</p>
        <button 
        onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">View</button>
        <div id="id01" class="w3-modal">
  <div class="w3-modal-content">

    <header class="w3-container w3-blue">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>ONODA CAVE </h2>
    </header>

    <div class="w3-container bg-light">
    <div class="photo row bg-dark">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
    <img
      src="images/onoda 2.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-info"
      style=" height: 250px;"
    />

    <img
      src="images/onoda 5.JPG"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-info"
      style=" height: 300px;"
    />
  </div>

  <div class="col-lg-4   mb-4 mb-lg-0">
    <img
      src="images/onoda 1.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-info"
      style=" height: 350px;"
    />

    <img
      src="images/featured-onoda cave.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-info"
      style=" height: 200px;"
    />
  </div>

  <div class="col-lg-4  mb-4 mb-lg-0">
    <img
      src="images/onoda 3.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-info"
      style=" height: 200px;"
    />

    <img
      src="images/onoda 4.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-info"
      style=" height: 350px;"
    />
  </div>
</div>
  <br>
      <p class="write card-text">Onoda Trail and Caves – The forests of Lubang was the hideout of Japanese officer Lt. Hiroo Onoda for 30 years, who was convinced that the war was still not over. The soldier, along with three other comrades, first occupied the forest of Puting Bato Mountain in February 1945 to hide from the Americans who took over Lubang. It reached just 7 months before Japan finally declared their surrender. Unaware, the troops managed to survive on bananas, coconut milk, and hunting, sometimes stealing from the villagers nearby. In 1949, one of Onoda’s men, Private Akatsu, surrendered to the Philippine Army. Akatsu went back for the others. However, Onoda and his men refused to believe him, insisting that it was a trap. The succeeding years, efforts were made to persuade the soldiers; none of them yielded. Eventually, Onoda was the only one left (the two others died respectively in 1954 and 1972). It was only in 1974 when Onoda’s former commanding officer met with him and finally convinced him to surrender. Today, tourists can visit Puting Bato and retrace Onoda’s steps. The trail ranges a total of 8 kilometers, covering a series of visits to 4 caves in which Onoda and his men took shelter. To visit the caves, hikers are advised to coordinate with the local tourism office.</p>
   <br>
  </div>
    <footer class="w3-container w3-blue">
      <p >Brgy. Vigo, Lubang Occidental Mindoro</p>
    </footer>

  </div>
</div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <img src="images/featured-light house1.jpg" class="image card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">LIGHT HOUSE, Cabra Island</h5>
        <p class="card-text">Parola is located at Barangay Cabra, is a more than 150 year old lighthouse that uses solar energy during the time of the Spaniards in the Philippines. This was used as watch tower by the Spaniards from any passing vessel approaching the island. Another watch tower has been built which has the same purpose as the Parola during the early times.</p>
        
        <button 
        onclick="document.getElementById('id02').style.display='block'" class="btn btn-primary">View</button>
        <div id="id02" class="w3-modal">
  <div class="w3-modal-content">

    <header class="w3-container w3-blue">
      <span onclick="document.getElementById('id02').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>LIGHT HOUSE (Parola) </h2>
    </header>

    <div class="w3-container bg-light">
    <div class="photo row bg-dark">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
    <img
      src="images/featured-light house.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 250px;"
    />

    <img
      src="images/parola 3.JPG"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 300px;"
    />
  </div>

  <div class="col-lg-4   mb-4 mb-lg-0">
    <img
      src="images/parola 4.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 350px;"
    />

    <img
      src="images/parola 5.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 200px;"
    />
  </div>

  <div class="col-lg-4  mb-4 mb-lg-0">
    <img
      src="images/parola 2.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 200px;"
    />

    <img
      src="images/parola 1.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 350px;"
    />
  </div>
</div>
  <br>
      <p class="write card-text">The Cabra Island Lighthouse is a historic lighthouse built on Cabra Island, the north-westernmost of the Lubang group of islands in Occidental Mindoro, Philippines. International vessels entering the Philippines from South China Sea were welcomed by the Cabra Light and directed either towards Manila Bay or the center of the archipelago through Verde Island Passage, one of busiest sea routes of the Philippines.

The island is the north-westernmost among the Lubang Group of islands and is an island-barangay of Lubang, Occidental Mindoro. With a length of about 2.8 miles (4.5 km) and about 1.8 miles (2.9 km) at its widest, the island has a flat terrain with the highest elevation at around 200 feet. The lighthouse complex is situated about 656 yards (600 m.) from the west end of the island.

The community in Cabra was established by the Spaniards in 1885, the year they started building the lighthouse. It was named Cabra (goat) after the Spaniards saw herds of goats when they landed.

The lighthouse of Cabra was the first completed during Spain’s revitalized program of lighthouse construction in the Philippines. Construction was started on May 3, 1885, and it was first lit on March 1, 1889. It was also the first of the five first-order lighthouses built by the Spaniards in the latter part of their colonization of the archipelago</p>
   <br>
  </div>
    <footer class="w3-container w3-blue">
      <p >Brgy. Cabra, Lubang Occidental Mindoro</p>
    </footer>

  </div>
</div>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
    <img src="images/featured-hulagaan.jpg" class="image card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HULAGAAN FALLS, Binacas</h5>
        <p class="card-text">HULAGAAN FALLS- is a cascading 3 meters of water that falls into a pool cupped by towering boulders on both sides.
                          Most visitors to hulagaan trek to the falls for a quick dip in its natural pool.  Hulagaan drains out to the sea, hence trekkers had to traverse a rocky creek where small tributaries drain cool water from the springs that originate deep in the forest. 
                          Hulagaan is ideal for day hikes and for those who are willing to experience an authentic outdoor experience.</p>
        
      <button onclick="document.getElementById('id03').style.display='block'" class="btn btn-primary">View</button>
        <div id="id03" class="w3-modal">

  <div class="w3-modal-content">

    <header class="w3-container w3-blue">
      <span onclick="document.getElementById('id03').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>HULAGAAN FALLS </h2>
    </header>

    <div class="w3-container bg-light">
    <div class="photo row bg-dark">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
    <img
      src="images/hulagaan 4.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 250px;"
    />

    <img
      src="images/featured-hulagaan.JPG"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 300px;"
    />
  </div>

  <div class="col-lg-4   mb-4 mb-lg-0">
    <img
      src="images/hulagaan 1.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 350px;"
    />

    <img
      src="images/hulagaan 5.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 200px;"
    />
  </div>

  <div class="col-lg-4  mb-4 mb-lg-0">
    <img
      src="images/hulagaan 3.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 200px;"
    />

    <img
      src="images/hulagaan 2.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 350px;"
    />
  </div>
</div>
  <br>
      <p class="write card-text">To proceed on a trek to Hulagaan Falls we started by hiring a fishing boat from Tagbac beach. The trip took approximately half an hour.  From the beach to the falls is about a 40 minute walk.  On the trek up the Hulagaan river bed one has to be on the lookout for snakes.A further word of caution – the pool beneath the falls is several metres deep and there is little in the way of a foot hold on the steeply sloping rock walls.  So if you are not a good swimmer, it is best not to bathe there. 
         The falls though attractive, are relatively small, being at a guess less then six meters high.
         When they reach Hulagaan they usually get fascinated by the colorful pebbles on the beach, the rugged terrain, pristine wildlife, interesting flora and fauna and the enticing waterfalls. </p>
   <br>
  </div>
    <footer class="w3-container w3-blue">
      <p >Brgy. Binacas, Lubang Occidental Mindoro</p>
    </footer>

  </div>
</div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <img src="images/binacas.jpg" class="image card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> PICNIC GROVE, BINACAS</h5>
        <p class="card-text">BINACAS PICNIC GROVE found in binacas accommodates transient visitors who wish to sit and eat amidst viewing the sea. It is a good place to swim too. From this place, one can take a boat ride going the most scenic places of the barangay particularly the hulagaan, tabionan and pinagdagatan. It has been managed by the barangay servicing local residents who frequent the area for picnics and excursions. Picnickers are requested to bring their own food, since there are no restaurants available.   </p>
        
        <button onclick="document.getElementById('id04').style.display='block'" class="btn btn-primary">View</button>
        <div id="id04" class="w3-modal">

  <div class="w3-modal-content">

    <header class="w3-container w3-blue">
      <span onclick="document.getElementById('id04').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h2>BINACAS PICNIC GROVE </h2>
    </header>

    <div class="w3-container bg-light">
    <div class="photo row bg-dark">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 ">
    <img
      src="images/binacas 1.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 250px;"
    />

    <img
      src="images/binacas 2.JPG"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 300px;"
    />
  </div>

  <div class="col-lg-4   mb-4 mb-lg-0">
    <img
      src="images/binacas.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 350px;"
    />

    <img
      src="images/binacas 5.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 200px;"
    />
  </div>

  <div class="col-lg-4  mb-4 mb-lg-0">
    <img
      src="images/binacas 3.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 200px;"
    />

    <img
      src="images/binacas 4.jpg"
      class="w-100 shadow-1-strong rounded mb-4 border border-5 border-secondary"
      style=" height: 350px;"
    />
  </div>
</div>
  <br>
      <p class="write card-text">BINACAS  PICNIC GROVE –has been developed by the LGU of lubang as a public park or picnic area. Benches, a pavilion and a restroom complete with outdoor showers had been constructed for this purpose. It is one of the jump-off points to hulagaan and other coves towards the southeastern shore.

The area is characterized by a rugged meandering coastline laced every now and then by sandy beaches. The hills provide a stunning view of the coasts and it is not surprising that during the American occupation, they were used as look-out points.  Some beaches are not inhabited due to their remoteness and inaccessibility. 
</p>
   <br>
  </div>
    <footer class="w3-container w3-blue">
      <p >Brgy. Binacas, Lubang Occidental Mindoro</p>
    </footer>

  </div>
</div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <img src="images/featured-sorville.jpg" class="image card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SORVILLE PARK, Sorville</h5>
        <p class="card-text">In the later part of the 1960's, the commander of Gozar Air Station, Colonel Romulo Soriano, requested that the PAF (Philippine Air Force) buy land from Juanna Torreliza to establish a housing subdivision, in Barrio Ambulong, for the soldiers. Later after a village had been established it was named Soriano Village -- and later this was shortened to Sorville. Sorville has a cooler micro-climate compared to the lowland barangays.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <img src="images/featured-mangrove.jpg" class="image card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> MANGROVE TREES, Tumibo</h5>
        <p class="card-text">In the past there were extensive mangrove forests around Lubang, but now there is only left remnants, such as that at Tumibo. Mangrove trees grow where no tree has grown before. They are able to survive inundation by salt water twice a day, and in "soil" which is unstable and poor in oxygen (anaerobic). They also have to deal with swollen rivers carrying silt during the wet season, as well as violent storms that hit the coasts.</p>
        
      </div>
    </div>
  </div>





    </div>
  </div>


<!--Stunning beaches-->
<section id="beach">
	<div class="container">
		<h2 class="text-center text-light">STUNNING BEACHES</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="55%">
	</div>
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="images/palanas 1.JPG" class="card-img-top" style=" height: 300px;" alt="...">
      <div class="card-body">
        <h5 class="card-title text-blue fs-4 fw-bolder">PALANAS BEACH, VIGO</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/featured-shakira beach.jpg" class="card-img-top" style=" height: 300px;"  alt="...">
      <div class="card-body">
        <h5 class="card-title text-blue fs-4 fw-bolder">SHAKIRA BEACH, TAGBAC</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/kibrada.jpg" class="card-img-top" style=" height: 300px;" alt="...">
      <div class="card-body">
        <h5 class="card-title text-blue fs-4 fw-bolder">KIBRADA BEACH, CABRA</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/featured-white sand.jpg" class="card-img-top" style=" height: 300px;" alt="...">
      <div class="card-body">
        <h5 class="card-title text-blue fs-4 fw-bolder">SAPA BEACH,MALIIG</h5>
        </div>
    </div>
  </div>
    <div class="col">
    <div class="card">
      <img src="images/TAGBAC BEACH.jpg" class="card-img-top" style=" height: 300px;" alt="...">
      <div class="card-body">
        <h5 class="card-title text-blue fs-4 fw-bolder">TAGBAC BEACH, TAGBAC</h5>
        
    </div>
  </div>
</div>
    <div class="col">
    <div class="card">
      <img src="images/tabionan.jpg" class="card-img-top" style=" height: 300px;" alt="...">
      <div class="card-body">
        <h5 class="card-title text-blue fs-4 fw-bolder">TABIONAN BEACH, BINACAS</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/libis.jpg" class="card-img-top" style=" height: 300px;" alt="...">
      <div class="card-body">
        <h5 class="card-title text-blue fs-4 fw-bolder">LIBIS BEACH, CABRA</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/binacas beach.jpg" class="card-img-top" style=" height: 300px;" alt="...">
      <div class="card-body">
        <h5 class="card-title text-blue fs-4 fw-bolder">BINACAS BEACH, BINACAS</h5>
        
      </div>
    </div>
  </div>
</div>
  </div>

	
<section id="trivia">
		<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">TRIVIA</h2>
		</div>
		<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="55%">
	</div>
		<div>
			<div class="card w-100">
				<div class="card-body">
					<?php echo file_get_contents(base_app.'trivia.html') ?>
				</div>
			</div>
		</div>
	</div>
	</section> 
</section> 
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