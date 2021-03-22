
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Reval Gym</title>
        <!---Bootstrap css file--->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!---FontAwesome css file--->
        <link rel="stylesheet" href="css/all.min.css">
        <!---Hover css file--->
        <link rel="stylesheet" href="css/hover.min.css"> 
        <!---Animate css file--->
        <link rel="stylesheet" href="css/animate.css"> 
        <!---Main css file--->
        <link rel="stylesheet" href="css/main.css">
        
    </head>
    <body>

        <!----------------------------Start Navbar---------------------------->
        <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container">
              <i class="fas fa-dumbbell fa-2x "></i>
              <a class="navbar-brand hvr-pop wow bounceInDown" data-wow-offset="0" href="#"> <span>REval </span><span>GYM</span> </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                  <li class="nav-item active">
                    <a class="nav-link hvr-grow" href="#" data-value="home">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link hvr-grow" href="#" data-value="about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link hvr-grow" href="#" data-value="offer">Offer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-grow" href="#"data-value="trainers">Trainers</a>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-grow" href="#" data-value="contact">Contact</a>
                          </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Global
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">American Branches</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Egypt Branches</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Other Branches</a>
                    </div>
                  </li>
                </ul>
              </div>
          </div>
        </nav>
        <!----------------------------End Navbar------------------------------>

        <!----------------------------Start Slider---------------------------->
        <div id="carousel_in" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel_in" data-slide-to="0" class="active"></li>
              <li data-target="#carousel_in" data-slide-to="1"></li>
              <li data-target="#carousel_in" data-slide-to="2"></li>
              <li data-target="#carousel_in" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slider1.jpg" class="d-block " alt="s1">
              </div>
              <div class="carousel-item">
                <img src="images/slider2.jpg" class="d-block " alt="s2">
              </div>
              <div class="carousel-item">
                <img src="images/slider3.jpg" class="d-block " alt="s3">
              </div>
              <div class="carousel-item">
                  <img src="images/slider4.jpg" class="d-block " alt="s3">
                </div>
            </div>
          </div>
        
        <!----------------------------End Slider---------------------------------->
        <!----------------------------Start About Us------------------------------>
        <section class="about-us" id="about">
          <div class="container">
            <h2 class="text-center">ABOUT US</h2>
            <div class="divider text-center">
                <span class=""><hr ></span>
                <i class="fab fa-affiliatetheme"></i>
                <span class=""><hr  ></span>
            </div>
                
            <div class="row">
              <article class="col-md-6 wow  bounceInLeft"data-wow-offset="250">
                  <h4>RevaL Gym</h4>
                  <p>  RevaL Gym International, Inc. is an American chain of international
                     co-ed fitness centers (commonly referred to as gyms) 
                     originally started by Joe Gold in Venice Beach, 
                     California. Each gym offers a variety of cardio 
                     and strength training equipment as well as group exercise programs.
                     Its headquarters  since relocated.</p>
                     <button class=" btn ">More Information</button>
              </article>

              <article class="col-md-6 wow  bounceInRight" data-wow-offset="250">
                  <h4>Corporate History</h4>
                  <p > Joe Gold opened the first Reval Gym in August 1965, in Venice Beach,
                     California, long before the modern day health club existed.
                      Featuring homemade equipment and dubbed "the Mecca of bodybuilding",
                       it was frequented by Arnold Schwarzenegger
                     and Dave Draper and featured in the docudrama Pumping Iron (1977)</p>
                     <button class=" btn ">More Information</button>
              </article>
              
              <article class="col-md-6 wow  bounceInLeft "data-wow-offset="300">
                  <h4 >Corporate Information</h4>
                  <p> Joe Gold opened the first Reval Gym in August 1965, in Venice Beach,
                      California, long before the modern day health club existed.
                       Featuring homemade equipment and dubbed "the Mecca of bodybuilding",
                        it was frequented by Arnold Schwarzenegger
                      and Dave Draper and featured in the docudrama Pumping Iron. </p>
                     <button class=" btn ">More Information</button>
              </article>

              <article class="col-md-6 wow  bounceInRight" data-wow-offset="300">
                  <h4>Reval Gym Challenge</h4>
                  <p class="wow  bounceInRight "  data-wow-offset="300">  RevaL Gym International, Inc. is an American chain of international
                     co-ed fitness  (commonly referred to as gyms) 
                     originally started by Joe Gold in  Beach 
                     California. Each gym offers a variety of cardio 
                     and strength training this equipment well group exercise programs.
                     Its headquarters have since relocated.</p>
                     <button class=" btn ">More Information</button>
              </article>
            </div>
          </div> 
        </section>
        <!----------------------------End About Us-------------------------------->

        <!----------------------------Start Offer---------------------------->
        <section class="offer" id="offer">
            <div class="container">
              <h2 class="text-center">What We Offer</h2>
              <div class="divider text-center">
                  <span class=""><hr ></span>
                  <i class="fab fa-affiliatetheme"></i>
                  <span class=""><hr></span>
              </div>
              <div class='row'>
                  <div class='col-sm-4'>
                      <div class="card" >
                        <img src="images/offer1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Sports are important things !</p>
                        </div>
                      </div>
                  </div>
                  <div class='col-sm-4'>
                      <div class="card">
                        <img src="images/offer2.png" class="card-img-top" alt="offer2">
                        <div class="card-body">
                          <p class="card-text">Fitness & Body Building !</p>
                        </div>
                      </div>
                  </div>
                  <div class='col-sm-4'>
                      <div class="card">
                        <img src="images/offer3.jpg" class="card-img-top" alt="offer3">
                        <div class="card-body">
                          <p class="card-text">Continue and achieve  Goals !</p>
                        </div>
                      </div>
                  </div>
                  <div class='col-sm-4'>
                      <div class="card">
                        <img src="images/offer4.jpg" class="card-img-top" alt="offer4">
                        <div class="card-body">
                          <p class="card-text">The Latest Sports Equipment !</p>
                        </div>
                      </div>
                  </div>
                  <div class='col-sm-4'>
                      <div class="card" >
                        <img src="images/offer5.jpeg" class="card-img-top" alt="offer5">
                        <div class="card-body">
                          <p class="card-text">Highly Experienced Trainers !</p>
                        </div>
                      </div>
                  </div>
                  <div class='col-sm-4'>
                      <div class="card">
                        <img src="images/offer6.jpg" class="card-img-top" alt="offer6">
                        <div class="card-body">
                          <p class="card-text">Get A Perfect Body !</p>
                        </div>
                      </div>
                  </div>
              </div>

            </div>
        </section>
        <!----------------------------End Offer------------------------------->

        <!----------------------------Start Trainers--------------------------->
        <section class="trainers" id="trainers">
          <div class="container">
            <h2 class="text-center">Trainers</h2>
            <div class="divider text-center">
                <span class=""><hr ></span>
                <i class="fab fa-affiliatetheme"></i>
                <span class=""><hr  ></span>
            </div>
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card" >
                        <img src="images/trainer1.jpg" class="card-img-top" alt="1t">
                        <div class="card-body text-center ">
                          <h5 class="card-title">Mark Lorive</h5>
                          <p>Age:38 Year</p>
                          <p>Experinace:3 Years</p>
                          <i class="fab fa-facebook hvr-wobble-vertical"></i>
                          <i class="fab fa-youtube hvr-wobble-vertical"></i>
                          <i class="fab fa-twitter hvr-wobble-vertical"></i>
                          <i class="fab fa-instagram hvr-wobble-vertical"></i>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" >
                        <img src="images/trainer2.jpg" class="card-img-top" alt="2t">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lazar Rodrigiz</h5>
                            <p>Age:32 Years</p>
                            <p>Experinace:5 Years</p>
                            <i class="fab fa-facebook hvr-wobble-vertical"></i>
                            <i class="fab fa-youtube hvr-wobble-vertical"></i>
                            <i class="fab fa-twitter hvr-wobble-vertical"></i>
                            <i class="fab fa-instagram hvr-wobble-vertical"></i>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" >
                        <img src="images/trainer3.jpg" class="card-img-top" alt="trainer3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Larson Marlo</h5>
                            <p>Age:29 Year</p>
                            <p>Experinace:3 Years</p>
                            <i class="fab fa-facebook hvr-wobble-vertical"></i>
                            <i class="fab fa-youtube hvr-wobble-vertical"></i>
                            <i class="fab fa-twitter hvr-wobble-vertical"></i>
                            <i class="fab fa-instagram hvr-wobble-vertical"></i>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card" >
                        <img src="images/trainer4.jpg" class="card-img-top" alt="trainer4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Carlos Nedve</h5>
                            <p>Age:27 Year</p>
                            <p>Experinace:4 Years</p>
                            <i class="fab fa-facebook hvr-wobble-vertical"></i>
                            <i class="fab fa-youtube hvr-wobble-vertical"></i>
                            <i class="fab fa-twitter hvr-wobble-vertical"></i>
                            <i class="fab fa-instagram hvr-wobble-vertical"></i>
                        </div>
                      </div>
                </div>
              </div>
          </div>
        </section>
        <!----------------------------End Trainers--------------------------------->


        <!----------------------------Start What's new----------------------------->
        <section class="new ">
         <div class="container">
            <h2 class="text-center">What's New</h2>
            <div class="divider text-center">
                <span class=""><hr ></span>
                <i class="fab fa-affiliatetheme"></i>
                <span class=""><hr  ></span>
            </div>
        </div>
            <div class="row ">
              <div class="col-md-6 left">
                  <h3 class="wow slideOutUp" data-wow-offset="120">Germany Branches</h3>
                  <p>Now we have 6 branches in Germany</p>
                  <ul class="list-unstyled">
                      <li>Frankfurt</li>
                      <li>Berlin</li>
                      <li>Munich</li>
                      <li>Hamburg</li>
                      <li>Stuttgart</li>
                      <li>Dortmond</li>
                    </ul>
                    <a class="text-right" href="#">Read More <i class="far fa-grin"></i> </a>

              </div>
              <div class="col-md-6 right">
                   <h3 class="wow slideOutUp" data-wow-offset="120">Italy Branches</h3>
                   <p>Now we have 6 branches in Italy</p>
                   <ul class="list-unstyled">
                     <li>Roma</li>
                     <li>Milano</li>
                     <li>Napoli</li>
                     <li>Verona</li>
                     <li>Torino</li>
                     <li>Biza</li>
                   </ul>
                   <a class="text-right" href="#">Read More <i class="far fa-grin"></i> </a>
                </div>
          </div>
        </section>
        <!----------------------------End What's new------------------------------->

        <!----------------------------Start Sponser------------------------------->
        <section class="sponser" id="sponsers">
          <div class="container">
              <h2 class="text-center">Sponsers</h2>
              <div class="divider text-center">
                  <span class=""><hr ></span>
                  <i class="fab fa-affiliatetheme"></i>
                  <span class=""><hr  ></span>
              </div>
            <div class="row">
              <div class="col-md-6 col-lg-3 text-center">
                  <figure class="figure">
                      <img src="images/sponser1.jpg" width="255" height="255" class="figure-img img-fluid rounded wow rotateInDownLeft" data-wow-offset="200" alt="sponser1">
                    </figure>
              </div>
              <div class="col-md-6 col-lg-3 text-center">
                  <figure class="figure">
                      <img src="images/sponser2.jpg" width="255" height="255" class="figure-img img-fluid rounded" alt="sponser1">
                    </figure>
              </div>
              <div class="col-md-6 col-lg-3 text-center">
                  <figure class="figure">
                      <img src="images/sponser3.jpg" width="255" height="255" class="figure-img img-fluid rounded" alt="sponser2">
                    </figure>
              </div>
              <div class="col-md-6 col-lg-3 text-center">
                  <figure class="figure">
                      <img src="images/sponser4.jpg" width="255" height="255" class="figure-img img-fluid rounded wow rotateInDownRight" data-wow-offset="200" alt="sponser3">
                    </figure>
              </div>
            </div>
          </div>
        </section>
        <!----------------------------End Sponser--------------------------------->


        <!----------------------------Start Contact-us-------------------------------->
          <section class="contact-us" id="contact">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-3">
                  <h3>Follow Us</h3>
                  <div class="contact">
                  <i class="fab fa-facebook-f "></i>
                  <i class="fab fa-youtube"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                  <p>
                      Significant change, positive impact and passion are our fuel.
                       We have a unique culture
                       reflecting the way we think and act.
                        A culture that encourages freedom and responsibility,
                       high performance, customer centricity and innovation.
                      </p>
                      </div>
                </div>
                <div class="col-md-6 col-lg-3 about text-left">
                    <h3>About Us</h3>
                    <ul class="list-unstyled">
                      <li>Who We Are</li>
                      <li>Our Clients</li>
                      <li>Careers</li>
                      <li>News & Events</il>
                    </ul>
                    <h3>Services</h3>
                    <ul class="list-unstyled">
                      <li>Body Bulding</li>
                      <li>Consultancy</li>
                      <li>Fitness</li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-3">
                      <h3>Management</h3>
                      <ul class="list-unstyled">
                        <li>Analytics & Data Management</li>
                        <li>Business Process Automation</li>
                        <li>Connectivity & System Integration</li>
                        <li>Enterprise Content Management</il>
                        <li>Enterprise Portal & Mobility</il>
                      </ul>
                      <h3>Industries</h3>
                      <ul class="list-unstyled">
                        <li>Banking</li>
                        <li>Government</li>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h3>Latest News</h3>
                      <div class="first1">
                        <p>
                         Reval is the best integrated gym in the world according to the Sun
                        </p>
                        <span>November 1, 2018</span>
                      </div>
                      <div class="second2">
                          <p>
                           Reval is exhibiting at IBM Digital Business Automation day in Egypt
                          </p>
                          <span>October 2, 2019</span>
                        </div>
                      </div>
              </div>
            </div>
          </section>
          <!----------------------------End Contact-us------------------------------>

          <!----------------------------Start Footer-------------------------------->
          <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="copyright text-center">
                      Copyright Ⓒ 2020 Reval Gym. All rights reserved.
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <span>Blog  | </span>
                  <span>Support  | </span>
                  <span>Contact </span>
                  </div>
              </div>
            </div>
          </footer>
          <!----------------------------End Footer---------------------------------->
          <div id="scroll-top" class="hvr-icon-bob">
              <i class="fas fa-arrow-alt-circle-up hvr-icon"></i>
          </div>
        
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
        <script src="js/myScript.min.js"></script>
       
    </body>
</html>