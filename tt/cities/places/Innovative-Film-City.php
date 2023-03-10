<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
      
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/tt/index.php"><strong>Trip-Tourism</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav d-flex justify-content-end w-100">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/tt/index.php"><strong>Home</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/tt/cities/places/resevation.php"><strong>Reservations</strong></a>
                </li>
               </ul>
            </div>   
        </div>
      </nav>
    <div class="container">
        <div class="content">
            
            <div class="row">
                <div class="col-lg-8">
                    <div class="adventure-detail-card mb-3">
                        <div>
                            <h1 id="adventure-name">Innovative Film City</h1>
                            <p style="font-size: 20px; color: #999" id="adventure-subtitle">This is a Awesome Place!</p>
                            <hr>
                        </div>
                        <div class="row mb-3" id="photo-gallery">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://www.holidify.com/images/compressed/attractions/attr_1599.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="https://www.holidify.com/images/cmsuploads/compressed/InnovativeFilmCity_20200605083510.jpg" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="https://www.holidify.com/images/compressed/attractions/attr_1416.jpg" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                        </div>
                        <hr>
                        <h4>Description</h4>
                        <div id="adventure-content">The Innovative Film City in Bengaluru is an Indian movie theme park located at Bidadi, just 40 kilometres on the outskirts of the city towards Mysore. One of the most popular tourist attractions in Bangalore, the place covers almost 58 acres of land of fun-filled experiences. Whether you like to shop, eat, simply walk and explore or experience your childhood again; there is something unique that Film City has to offer you.

                            The Innovative Film City is broadly divided into three parts and is large enough for you to spend at least half of your day here- to walk around and enjoy all that the city has to offer. Step into the Innovative Attractions to enjoy amusement park rides and museums and enjoy the countless sections, such as Wild West Wind and Cartoon City; and the Innovative Studio to witness the world of movies and glamour. Visit the Innovative Style in between to enjoy shopping and gorge on cuisines from all around the world. A high-quality amalgamation of different themes, the Innovative Film City beckon to both: kids as well as grownups. So make sure that you visit this attraction with your family or friends when you visit Bangalore.
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="">
                        <div id="reservation-panel-sold-out" >
                            <h3 class="back">INFORMATION</h3>
                            <hr>
                            <ul>
                            <li><h5><strong>Weather: </strong>28?? C</h5></li>
                            <br>
                            <li><h5><strong>Timing: </strong>10:00 AM - 7:00 PM</h5></li>
                            <br>
                            <li><h5><strong>Time Required: </strong>4-5 hours</h5></li>
                            <br>
                            <li><h5><strong>Reservation Fee: </strong>??? 50/person</h5></li>
                            </ul><br>
                            <h6>
                            <ul><strong>Reservation Fee include:</strong> 
                            <li>Breakfast/lunch pass (depends on time)</li>
                            <li>Guide</li>
                            <li>Entry pass (if needed)</li>
                            </ul><br>
                            We will reserve seat for you,just do reservation & enjoy your trip.<br>
                            </h6>
                            
                            <hr>
                            <a href="/tt/cities/places/resevation.php" onclick="valuesender()"><h4 class="reserve">Reserve Now!</h4></a>

                            <script>
                              function valuesender()
                              {
                                var city='BENGALURU';
                                var place='INNOVATIVE FILM CITY';

                                localStorage.setItem("myValue1",city);
                                localStorage.setItem("myValue2",place);
                                window.location.href="/tt/cities/places/resevation.php";
                              }
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color:lightgrey">
          ?? 2021 Copyright:
          <a href="/tt/index.php" class="text-dark">Trip-Tourism</a>
        </div>
    </footer>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>