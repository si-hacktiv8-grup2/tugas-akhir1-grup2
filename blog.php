<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php include 'component/header.php';?>
    <link rel="stylesheet" href="assets/css/styles_blog.css">

    <style>
        h1 {
            color: #fff;
            padding: 10px 0;
        }
    </style>

    <title>Blog | Chill Tour</title>
  </head>
  <body>
    <?php
        $navbarIndex = '';
        include 'component/navbar.php';        
    ?>

    <!-- Page Header-->
      <div class="container">
        <header class="masthead" style="background-image: url('assets/images/Blog1.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Chill Tour Blog</h1>
                            <span class="subheading">Blogspot for Chill.Tour Company</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
      </div>

     <!-- Main Content-->
     <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                            People should explore every beautiful place around the world.</h2>
                            <h3 class="post-subtitle">
                            There are still many tourist spots that are not yet known by travellers around the world.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Chill One</a>
                            on May 1, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html"><h2 class="post-title">What's so interesting about a tour package?</h2></a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Chill One</a>
                            on May 10, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Have Impressions and questions about us?</h2>
                            <h3 class="post-subtitle">Please send comments and contact us available on the web page.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Chill One</a>
                            on May 19, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Comment and Imppresion</h2>
                            <h3 class="post-subtitle">
                            Messages and impressions from users of our services will really help us in the progress of our services.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Chill Three</a>
                            on May 20, 2022
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
      <br><br>

    <!-- Footer -->
    <?php include 'component/footer.php' ?>

    <!-- script -->
    <?php include 'component/script.php' ?>
  </body>
</html>