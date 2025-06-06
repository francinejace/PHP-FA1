<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  
  <title>Title page</title>  

<link href="./main.3da94fde.css" rel="stylesheet"></head>

<body>

 <!-- Add your content of header -->

<header>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      <nav class="navbar-fullscreen" id="navbar-middle">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul class="navbar-fullscreen-links">
          <li><a href="./index.html" title="">Home</a></li>
          <li><a href="./project.html" title="">Project</a></li>
          <li><a href="./about.html" title="">About me</a></li>
          <li><a href="./components.html" title="">Components</a></li>
        </ul>

        <div class="footer-container">
           
          <p><small>© Untitled | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></small></p>
          <p class="footer-share-icons">
              <a href="https://www.twitter.com" class="fa-icon" title="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.linkedin.com" class="fa-icon" title="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="https://www.behance.com" class="fa-icon" title="">
                  <i class="fa fa-behance" aria-hidden="true"></i>
              </a>
              <a href="https://www.vimeo.com" class="fa-icon" title="">
                  <i class="fa fa-vimeo" aria-hidden="true"></i>
              </a>
          </p>
        </div>


      </nav> 
    
    </div>
  </nav>
</header>

<div class="hero-full-container background-image-container white-text-container" style="background-image:url('./assets/images/img-home.jpg')">
  <div class="overlay-gradient"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-7 col-md-offset-1">
        <div class="hero-full-wrapper">
          <div class="text-content">
            <h1>
              <?php
                $firstname = "Francine Jace";
                $lastname = "Bachiller";

                echo $firstname . " " . $lastname; 
              ?>  
            </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navbarFixedTopAnimation();
    closeMenuBeforeGoingToPage();
  });
</script>




<script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
</script>
 <script type="text/javascript" src="./main.4c6e144e.js"></script></body>

</html>