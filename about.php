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
    </style>

    <title>About Us | Chill Tour</title>
  </head>
  <body>
    <?php
        $navbarIndex = '';
        include 'component/navbar.php';        
    ?>

  <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="assets/images/slider-2.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Best Organic Fruits And Vegetables</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
     
    <br><br><br><br><br>

    <!-- Footer -->
    <?php include 'component/footer.php' ?>

    <!-- script -->
    <?php include 'component/script.php' ?>
  </body>
</html>