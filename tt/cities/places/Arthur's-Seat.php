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
                            <h1 id="adventure-name">Arthur's Seate</h1>
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
                                    <img class="d-block w-100" src="https://i.ytimg.com/vi/z8BScM-6IGc/maxresdefault.jpg" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="https://www.trawell.in/admin/images/upload/162482708Mahabaleshwar_Arthur_%20Seat_Point_Main.jpg" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="http://www.journeymart.com/de/AttrationImages/arthur-seat.jpg" alt="Third slide">
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
                        <div id="adventure-content">Arthur's Seat is one of the most popular viewpoints in Mahabaleshwar, located around 13km away. Also known as the Suicide Point, it is popular as the Queen of all points as it offers the most mesmerizing and fascinating view of the dense valleys of Brahma-Arayana and the Savitri river.

Arthur's Seat Point is made up of 6 viewpoints - Arthur's Seat Point, Tiger Sprint Point, Hunter Point, Echo Point, Window Point and Malcolm Point. Arthur's Seat is famous for the floating of light object. This means that if you throw light things like a bottle cap into the valley, it floats back up due to air pressure. It is named as Arthur's Point after Arthur Malet whose wife and daughter drowned in the Savitri River. He used to sit at this point and stare at the river below. Reaching the viewpoint requires a 30-minute trek from the parking lot.
                            A visit to the palace gives you a chance to witness the elegant and lavish splendour of one of the most powerful dynasties of South India. An audio tape is available inside the Palace, both in Hindi and English, to help the people having language issues, understand its history better.
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="">
                        <div id="reservation-panel-sold-out" >
                            <h3 class="back">INFORMATION</h3>
                            <hr>
                            <ul>
                            <li><h5><strong>Weather: </strong>20?? C</h5></li>
                            <br>
                            <li><h5><strong>Timing: </strong>10:00 AM - 5:30 PM</h5></li>
                            <br>
                            <li><h5><strong>Time Required: </strong>1-2 hours</h5></li>
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
                                var city='MAHABALESHWAR';
                                var place='ARTHURS SEAT';

                                localStorage.setItem("myValue1",city);
                                localStorage.setItem("myValue2",place);
                                window.location.href="/tt/cities/places/reservation.php";
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