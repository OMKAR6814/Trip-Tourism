<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places</title>
    <link rel="stylesheet" href="style.css">
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
            <h1>Explore all amazing places</h1>
            <p style="font-size: 24px">
                Here's a list of places that you can explore in city
            </p>
        </div>

          <div class="row" id="data">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/Jaipur.php">
                <div class="activity card" id="Jaipur">
                  <img class="activity-card img" src="https://www.holidify.com/images/bgImages/JAIPUR.jpg">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Jaipur</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>6:30 AM to 8:15 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">Pink City</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/Udaipur.php">
                <div class="activity card" id="Udaipur">
                  <img class="activity-card img" src="https://www.holidify.com/images/bgImages/UDAIPUR.jpg">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Udaipur</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>10:00 AM - 8:30 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">City of Lake</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/Mount-Abu.php">
                <div class="activity card" id="Mount Abu">
                  <img class="activity-card img" src="https://www.holidify.com/images/compressed/dest_wiki_10616.jpg">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Mount Abu</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>06:00 AM - 09:00 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">Hill Station</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/Jaisalmer.php">
                <div class="activity card" id="Jaisalmer">
                  <img class="activity-card img" src="https://www.holidify.com/images/compressed/1272.jpg?v=1.1">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Jaisalmer</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>06:00 AM - 11:00 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">Golden City</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/jodhpur.php">
                <div class="activity card" id="Jodhpur">
                  <img class="activity-card img" src="https://www.holidify.com/images/bgImages/JODHPUR.jpg">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Jodhpur</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>8:00 AM - 9:30 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">Sun City</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/Ajmer.php">
                <div class="activity card" id="Ajmer">
                  <img class="activity-card img" src="https://www.holidify.com/images/bgImages/AJMER.jpg">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Ajmer</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>10:00 AM - 8:00 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">City</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/rathambore.php">
                <div class="activity card" id="Ranthambore">
                  <img class="activity-card img" src="https://www.holidify.com/images/compressed/3582.jpg">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Ranthambore</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6> 8:30 AM - 8:00 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">National Park</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/Bikaner.php">
                <div class="activity card" id="Bikaner">
                  <img class="activity-card img" src="https://www.holidify.com/images/bgImages/BIKANER.jpg">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Bikaner</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>08:00 AM - 07:00 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">Desert Town</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/pushkar.php">
                <div class="activity card" id="Pushkar">
                  <img class="activity-card img" src="https://www.holidify.com/images/compressed/2261.jpg?v=1.1">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Pushkar</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>9:00 AM - 9:00 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">Temple Town</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 mb-4">
              <a href="/tt/cities/places/Bharatpur.php">
                <div class="activity card" id="Bharatpur">
                  <img class="activity-card img" src="https://www.holidify.com/images/bgImages/BHARATPUR.jpg">
                    <div class="m-3 flex-wrap">
                      <div class="d-flex justify-content-between">
                        <h5>Bharatpur</h5>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6>Timings:</h6>
                        <h6>9:00 AM - 6:00 PM</h6>
                      </div>
                    </div>
                  <div class="category-banner">Town</div>
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