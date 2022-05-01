<!-- Document Wrapper
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Header -->
  <header id="header"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-md navbar-text-light bg-transparent border-bottom-0">
      <div class="container position-relative">
        <div class="col-auto col-lg-2"> 
          <!-- Logo --> 
          <a class="logo" href="index.html" title="Zoon"> <img src="images\logo.png" alt="Zoon"> </a> 
          <!-- Logo End --> 
        </div>
        <div class="col navbar-accordion px-0">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav"><span></span><span></span><span></span></button>
          <div id="header-nav" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#about" href="#">A propos</a></li>
            </ul>
          </div>
        </div>
        <div class="col-auto d-flex justify-content-end">
          <ul class="social-icons social-icons-light">
            
            <li class="social-icons-facebook"><a data-bs-toggle="tooltip" href="https://www.facebook.com/Association-Sciences-and-Technology-Ben-Arous-386082501794370" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a></li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>
  <!-- Header End --> 
  
  <!-- Hero Backgroung
  ========================= -->
  <div class="hero-wrap">
    <div class="hero-mask opacity-8 bg-dark"></div>
    <div class="hero-bg hero-bg-scroll" style="background-image:url('<?php echo base_url() ?>assets/images/intro-bg.jpg');"></div>
    <div class="hero-content py-4 py-lg-0">
      <div class="container">
        <div class="row min-vh-100"> 
          
          <!-- Coming Soon Information
          ============================== -->
          <div class="col-lg-8 align-items-center d-flex flex-column py-5">
              <div class="row py-5 my-auto text-center text-lg-start">
                <div class="col-12 mx-auto">
                  <h1 class="text-9 text-white bg-danger d-inline-block fw-700 rounded px-3 py-2 mb-4">À venir!</h1>
                  <h2 class="text-15 fw-600 text-white mb-4">Notre nouveau site Web est en route.</h2>
                </div>
                <div class="col-md-8 col-lg-9 col-xl-8 mx-auto me-lg-auto ms-lg-0">
                  <p class="text-5 text-light mb-3">Soyez averti lorsque nous lançons.</p>
                  <!-- Subscribe Form -->
              <div class="subscribe-form">
              <form action="<?php echo base_url()  ?>Contact/Notify" role="form" method="post">
                <div class="input-group">
                  <input type="email" id="subscribe-form-email" name="subscribe-form-email" class="form-control required" required="" placeholder="Enter Your Email Here..">
                  <button id="subscribe-form-submit" name="subscribe-form-submit" class="btn btn-primary px-4 shadow-none" type="submit"><span class="d-none d-sm-block">Prévenez-moi</span><span class="text-4 d-block d-sm-none"><i class="fas fa-arrow-right"></i></span></button>
                </div>
              </form>
              <div class="subscribe-form-result mt-3"></div>
              </div>
              <!-- Subscribe End -->
                </div>
              </div>
          </div>
          <!-- Coming Soon Information End --> 
          
          <!-- Contact Us
          ========================= -->
          <div class="col-lg-4 my-auto py-lg-5">
            <div class="row bg-light rounded text-center mx-0 py-4 mb-4 mb-lg-0">
              <div class="col-11 mx-auto">
                <h3 class="fw-600 mb-3 mt-3">Nous contacter</h3>
                <p class="text-black-50 mb-4">Envoyez-nous une note.</p>
                <!-- Contact Form -->
                <form id="contact-form" action="<?php echo base_url()  ?>Contact/addNew" method="post">
                  <div class="mb-3">
                    <input id="name" name="nom" type="text" class="form-control border-2" placeholder="Enter Votre Nom" required="">
                  </div>
                  <div class="mb-3">
                    <input id="email" name="email" type="email" class="form-control border-2" placeholder="Enter Votre Email" required="">
                  </div>
                  <div class="mb-3">
                    <textarea id="form-message" name="text" class="form-control border-2" rows="2" placeholder="Entrez votre demande" required=""></textarea>
                  </div>
                  <div class="d-grid mt-4">
                    <button id="submit-btn" class="btn btn-primary" type="submit">Envoyer le message</button>
                  </div>
                </form>
                <!-- Contact Form end -->
              </div>
            </div>
          </div>
          <!-- Contact Us End --> 
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Backgroung End --> 
</div>
<!-- Document Wrapper End --> 

<!-- About Popup
================================== -->
<div id="about" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-600 text-7 mx-auto">A propos</h5>
        <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <p class="lead text-center">Une association scientifique vise à encadrer et développer les compétence des jeunes  afin de produire des projets innovations</p>
        <div class="row">
          <div class="col-lg-4">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-primary"> <i class="far fa-thumbs-up"></i></div>
              <h4 class="fw-600">Why Choose Us</h4>
              <p class="text-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-primary"> <i class="far fa-paper-plane"></i></div>
              <h4 class="fw-600">Nos Missions</h4>
              <p class="text-3">Encadrer les éleve dans ces projets.</p>
              <p class="text-3">Developper les compétences des jeunes  dans le domaines des sciences et technologie .</p>
               <p class="text-3">. </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="featured-box text-center">
              <div class="featured-box-icon text-primary"> <i class="far fa-eye"></i></div>
              <h4 class="fw-600">Notre Vision</h4>
              <p class="text-3">La création des leaders dans le domaine des sciences et technologies</p>
            </div>
          </div>
        </div>
        
        <hr class="my-5">
        
        <!-- Recent Work -->
        <h3 class="text-center my-5">Some of our most recent projects.</h3>
        <div class="portfolio popup-img-gallery">
          <div class="row g-4">
            <div class="col-sm-6 col-lg-4">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images\intro-bg-2.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-img stretched-link" href="images\intro-bg-2.jpg"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">Project Title</h5>
                      <span class="text-light">Category</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images\intro-bg-3.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-img stretched-link" href="images\intro-bg-3.jpg"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">Project Title</h5>
                      <span class="text-light">Category</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images\intro-bg-4.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-img stretched-link" href="images\intro-bg-4.jpg"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">Project Title</h5>
                      <span class="text-light">Category</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images\intro-bg-5.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-img stretched-link" href="images\intro-bg-5.jpg"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">Project Title</h5>
                      <span class="text-light">Category</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images\intro-bg-6.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-img stretched-link" href="images\intro-bg-6.jpg"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">Project Title</h5>
                      <span class="text-light">Category</span> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="portfolio-box rounded">
                <div class="portfolio-img rounded"> <img class="img-fluid d-block" src="images\intro-bg.jpg" alt="">
                  <div class="portfolio-overlay"> <a class="popup-img stretched-link" href="images\intro-bg.jpg"></a>
                    <div class="portfolio-overlay-details">
                      <h5 class="text-white fw-400">Project Title</h5>
                      <span class="text-light">Category</span> </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Popup End -->  