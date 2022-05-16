<?php
    
    if ($navbarIndex == 1) {
        $navbarIndexStyle = 'navbar-dark';
    } else {
        $navbarIndexStyle = 'navbar-light bg-light';
    }
?>
<style>
        /* Subs button */
    .subsBtn {
        background-color:transparent;
        border-radius:7px;
        border:2px solid #3498db;
        display:inline-block;
        cursor:pointer;
        color:#3498db !important;
        font-family:Arial;
        font-size:17px;
        font-weight: bold;
        padding:4px 8px;
        text-decoration:none;
        text-shadow:0px 1px 0px #3d768a;
    }

    .subsBtn:hover {
        background-color:transparent;
    }

    .subsBtn:active {
        position:relative;
        top:1px;
    }
</style>
<div class="container-fluid" style="z-index:9;position:absolute;">
    <nav class="navbar navbar-expand-lg <?= $navbarIndexStyle ?>">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/globe.png" width="30" height="30" class="d-inline-block align-top">
                <b>Chill.Tour</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="portofolio.php">Portofolio</a>
                    <a class="nav-link" href="blog.php">Blog</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                    <a class="nav-link" href="about.php">About</a>
                    <a class="nav-link" href="todo.php">Todos</a>
                    <a class="nav-link subsBtn" href="#" data-bs-toggle="modal" data-bs-target="#subsModal"> 
                        <div class="fa-1x">
                            <i class="fa-solid fa-circle-plus fa-bounce"></i> Subscribe
                        </div>    
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="subsModal" tabindex="-1" aria-labelledby="subsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="subsModalLabel">Form Subscribe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Subscribe</button>
      </div>
    </div>
  </div>
</div>