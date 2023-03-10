<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        
        <title>Index Page</title>

        <style>
        .hero-image 
        {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("https://images.pexels.com/photos/2422461/pexels-photo-2422461.jpeg?cs=srgb&dl=pexels-josh-hild-2422461.jpg&fm=jpg");
  
       
        height: 50vh;
        width: auto;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        }

        .hero-subheading 
        {
        font-size: 30px;
        font-weight: 100;
        }

        .hero-input 
        {
        width: 80%;
        height: 50px;
        padding: 16px;
        border-radius: 8px;
        border: none;
        margin-right: auto;
        margin-left: auto;
        }

        .container, .container-lg, .container-md, .container-sm, .container-xl 
        {
        width: 100%;
        margin-right:auto;
        margin-left: auto;
        padding-bottom: 40px;
        }
        

            .tile
            {
                text-align: center!important;
                width: 260px;
                z-index: 1;
                text-transform: uppercase;
                letter-spacing: 2px;
                border: solid 1px;
                border-radius: 8px;
                border-color: rgba(156, 155, 155, 0.864);
                
                
            }
            .col-sm
            {
                
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
            }
            .cities
            {
                width: 258px;
                height: 350px;
                border-radius: 8px;
            }
            .container-1
            {
                display: flex;
                padding: 30px;
                padding-left: 70px;
            }
            .text
            {
                font-size: large;
                font-family: fantasy;
                color: #000;
               
            }



            .zoom-effect-container 
            {
                float: left;
                position: relative;
                width: 258px;
                height: 350px;
                border-radius: 8px;
                margin: auto;
                overflow: hidden;
            }
            .image-card 
            {
                position: absolute;
                top: 0;
                left: 0;
            }
            .image-card img 
            {
                -webkit-transition: 0.4s ease;
                transition: 0.4s ease;
            }
            .zoom-effect-container:hover .image-card img 
            {
                -webkit-transform: scale(1.08);
                transform: scale(1.08);
            }


        </style>


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#!"><strong>Trip-Tourism</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav d-flex justify-content-end w-100">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#!"><strong>Home(current)</strong></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="/tt/cities/places/resevation.php"><strong>Reservations</strong></a>
                    </li>
                   </ul>
                </div>   
            </div>
        </nav>

        <div class="hero-image d-flex justify-content-center align-items-center text-white flex-column text-center">
            <div class="container">
              <div class="text-center" style="color: aliceblue;">
                <h1>Welcome to Trip-Tourism</h1>
                <p class="hero-subheading">Explore the world with fantastic places to venture around</p>
              </div>
            </div>  
        </div>
  

        <div class="container-1">
            <div class="row">
                <div class="col-sm" id="bengaluru">
                  <a href="/tt/cities/bengaluru.php">
                    <div class="tile" >
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img class="cities" src="https://images.pexels.com/photos/3573382/pexels-photo-3573382.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                            </div>
                        </div>
                        <div class="text">
                        <h5>bengaluru</h5>
                        <p>100+ places</p> 
                        </div>
                    </div>
                  </a>
                </div>
                <div class="col-sm" id="goa">
                    <a href="/tt/cities/goa.php">
                      <div class="tile" >
                          <div class="zoom-effect-container">
                              <div class="image-card">
                                  <img class="cities" src="https://images.pexels.com/photos/1078983/pexels-photo-1078983.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                              </div>
                          </div>
                          <div class="text">
                          <h5>goa</h5>
                          <p>100+ places</p>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-sm" id="kolkata">
                    <a href="/tt/cities/kolkata.php">
                      <div class="tile" >
                          <div class="zoom-effect-container">
                              <div class="image-card">
                                  <img class="cities" src="https://images.pexels.com/photos/2524368/pexels-photo-2524368.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                              </div>
                          </div>
                          <div class="text">
                          <h5>kolkata</h5>
                          <p>100+ places</p>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-sm" id="mahabaleshwar">
                    <a href="/tt/cities/mahabaleshwar.php">
                      <div class="tile" >
                          <div class="zoom-effect-container">
                              <div class="image-card">
                                  <img class="cities" src="https://static2.tripoto.com/media/filter/tst/img/379421/TripDocument/1529605076_img_20170718_132923_577.jpg">
                              </div>
                          </div>
                          <div class="text">
                          <h5>mahabaleshwar</h5>
                          <p>100+ places</p>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-sm" id="kokan">
                    <a href="/tt/cities/kokan.php">
                      <div class="tile" >
                          <div class="zoom-effect-container">
                              <div class="image-card">
                                  <img class="cities" src="https://i.pinimg.com/236x/9f/e2/f2/9fe2f21f4b23b40dd6d7671b9a5d5bed--palm-trees-kerala-india.jpg">
                              </div>
                          </div>
                          <div class="text">
                          <h5>kokan</h5>
                          <p>100+ places</p>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-sm" id="rajasthan">
                    <a href="/tt/cities/rajasthan.php">
                      <div class="tile" >
                          <div class="zoom-effect-container">
                              <div class="image-card">
                                  <img class="cities" src="https://photos.travellerspoint.com/64884/large_061009__222__SUPER.jpg">
                              </div>
                          </div>
                          <div class="text">
                          <h5>rajasthan</h5>
                          <p>100+ places</p> 
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-sm" id="kerala">
                    <a href="/tt/cities/kerala.php">
                      <div class="tile" >
                          <div class="zoom-effect-container">
                              <div class="image-card">
                                  <img class="cities" src="https://i.pinimg.com/originals/7a/b8/90/7ab8907a36aa1c1b5940ed1635f0eb6e.jpg">
                              </div>
                          </div>
                          <div class="text">
                          <h5>kerala</h5>
                          <p>100+ places</p>
                          </div>
                      </div>
                    </a>
                </div>
                <div class="col-sm" id="tamil-nadu">
                    <a href="/tt/cities/tamil-nadu.php">
                      <div class="tile" >
                          <div class="zoom-effect-container">
                              <div class="image-card">
                                  <img class="cities" src="https://i.redd.it/m99c5cb2cpy11.jpg">
                              </div>
                          </div>
                          <div class="text">
                          <h5>tamil Nadu</h5>
                          <p>100+ places</p>
                          </div>
                      </div>
                    </a>
                </div>
            </div>
        </div>

        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color:lightgrey">
              ?? 2021 Copyright:
              <a href="/tt/index.php" class="text-dark">Trip-Tourism</a>
            </div>
        </footer>
        
       
    </body>
</html>
