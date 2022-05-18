<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'component/header.php';?>
    <link rel="stylesheet" href="assets/css/styles_porto.css">

    <style>
        h1 {
            color: #fff;
            padding: 10px 0;
        }
    </style>

    <title>Portofolio | Chill Tour</title>
  </head>
  <body>
    <?php
        $navbarIndex = '';
        include 'component/navbar.php';        
    ?>

     <!-- Projects-->
     <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/images/globe.png" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Chill Tour</h4>
                            <p class="text-black-50 mb-0">Chill Tour is a service company that provides tour packages in the best places around the world. This company was founded by 3 youths namely Angga, Ridwan, and Adik.</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/images/turing.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Tour Guide</h4>
                                    <p class="mb-0 text-white-50">Group Touring Package is our main product that we provide. In addition to providing group tour packages, we also have tour guides who will accompany customers on their vacation trips.</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/images/Award.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Best Travel Guide of The Year</h4>
                                    <p class="mb-0 text-white-50">In addition, we have also received many awards as the best travel and touring service provider company in 2021.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Footer -->
    <?php include 'component/footer.php' ?>

    <!-- script -->
    <?php include 'component/script.php' ?>
  </body>
</html>