<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'component/header.php';?>

    <style>
        h1 {
            color: #fff;
            padding: 10px 0;
        }

        /* card style*/
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border: none;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
        }
        .card a {
            color: initial;
        }
        .card a:hover {
            text-decoration: initial;
        }

        .card .text-muted i {
            margin: 0 10px;
        }

    </style>

    <title>Home | Chill Trip</title>
  </head>
  <body>
    <?php
        $navbarIndex = 1;
        include 'component/navbar.php';
        
    ?>
    <!-- Carousel -->
    <div class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image:url(assets/images/switzerland.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center">
	          		<h2>Best Place to Travel in Europe</h2>
		            <h1 class="mb-3">Swiss</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(assets/images/japan.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center">
                <h2>Best Place to Travel in Asia</h2>
		            <h1 class="mb-3">Japan</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(assets/images/bali.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center">
                <h2>Best Place to Travel in South East Asia</h2>
		            <h1 class="mb-3">Bali</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </div>

    <!-- Card -->
    <div class="container">
        <div class="text-center">
            <h1>Bootstrap card tiled layout</h1>
        </div>
        <div class="container">
            <div class="card-columns">
            <div class="card">
                <a href="#">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1535025639604-9a804c092faa?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6cb0ceb620f241feb2f859e273634393&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Countryside Vibes</h5>
                <p class="card-text">
                    Countryside vibe that will make your vacation more interesting and relaxing.
A village experience that will calm your mind and body, to the experience of meeting friendly villagers.
                </p>
                <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>1065<i class="far fa-user"></i>user<i class="fas fa-calendar-alt"></i>May 20, 2022</small></p>
            </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1472076638602-b1f8b1ac0b4a?ixlib=rb-0.3.5&s=63c9de7246b535be56c8eaff9b87dd89&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Hiking</h5>
                <p class="card-text">Hiking will also be very interesting, presented with beautiful natural scenery and beautiful forests. Equipment and guides are available.</p>
                <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>1522<i class="far fa-user"></i>user<i class="fas fa-calendar-alt"></i>May 20, 2022</small></p>
                </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1535086181678-5a5c4d23aa7d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=34c86263bec2c8f74ceb74e9f4c5a5fc&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Bike Touring</h5>
                <p class="card-text">Adventure with touring motorbikes will also be very fun with us. Vehicles and equipment are available according to standards and are guaranteed to be safe.</p>
                <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>2010<i class="far fa-user"></i>user<i class="fas fa-calendar-alt"></i>May 20, 2022</small></p>
                </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1535074153497-b08c5aa9c236?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d2aaf944a59f16fe1fe72f5057b3a7dd&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">City Tour</h5>
                <p class="card-text">City tourism is also available, not inferior to rural tourism, there are many interesting things in the city as a tourist destination.</p>
                <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>1000<i class="far fa-user"></i>user<i class="fas fa-calendar-alt"></i>May 20, 2022</small></p>
                </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1535124406821-d2848dfbb25c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=98c434d75b44c9c23fc9df2a9a77d59f&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Sea</h5>
                <p class="card-text">Marine tourism is also the main attraction, there are many things that can be enjoyed there. Beautiful sea views, beautiful coral reefs and aesthetic sea cliffs.</p>
                <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>1000<i class="far fa-user"></i>user<i class="fas fa-calendar-alt"></i>May 20, 2022</small></p>
                </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                <img class="card-img-top" src="assets/images/budaya.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Culture</h5>
                <p class="card-text">Cultural tourism is also an interesting thing for tourists, culture can be a unique travel experience. Besides enjoying the culture and being able to communicate directly with the surrounding community.</p>
                <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>1000<i class="far fa-user"></i>user<i class="fas fa-calendar-alt"></i>May 20, 2022</small></p>
                </div>
                </a>
            </div>
            </div>
        </div>
    </div>
     
    <section class="py-0" id="outlet">

        <div class="container">
          <div class="row h-100 g-0">
            <div class="col-md-6">
              <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/summer.png" alt="..." />
                <div class="card-img-overlay bg-dark-gradient rounded-0">
                  <div class="p-5 p-md-2 p-xl-5 d-flex flex-column flex-end-center align-items-baseline h-100">
                    <h1 class="fs-md-4 fs-lg-7 text-dark">Summer Tour of '22 </h1>
                  </div>
                </div><a class="stretched-link" href="#!"></a>
              </div>
            </div>
            <div class="col-md-6 h-100">
              <div class="row h-100 g-0">
                <div class="col-md-6 h-100">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/sunglasses.png" alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                      <div class="p-2 p-xl-4 p-md-0">
                        <h3 class="text-light">Sunglasses</h3>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/footwear.png" alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                      <div class="p-2 p-xl-4 p-md-0">
                        <h3 class="text-light">Footwear</h3>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/hat-black-border.png" alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                      <div class="p-2 p-xl-4 p-md-0">
                        <h3 class="text-light">Hat</h3>
                      </div>
                    </div><a class="stretched-link" href="#!"></a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-span h-100 text-white"><img class="card-img h-100" src="assets/img/gallery/watches.png" alt="..." />
                    <div class="card-img-overlay bg-dark-gradient rounded-0">
                      <div class="p-2 p-xl-4 p-md-0">
                        <h3 class="text-light">Watches</h3>
                      </div>
                    </div><a class="stretched-link" href="#!"> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
    <br><br>


    <!-- Footer -->
    <?php include 'component/footer.php' ?>

    <!-- script -->
    <?php include 'component/script.php' ?>

  </body>
</html>