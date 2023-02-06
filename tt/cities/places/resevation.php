<?php


if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";



    // Collect post variables
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $payment = $_POST['payment'];

    $sql = "INSERT INTO `reservation`.`trip` (`name`, `number`, `email`, `city`, `place`, `date`, `payment`, `reservation_date`) VALUES ('$name', '$number', '$email', '$city', '$place', '$date', '$payment', current_timestamp() )";
    

    
    

    if (mysqli_query($con, $sql)) {

        //$to_email = $email;
       // $subject = "Your Reservation is Done!";
       // $body = "Hello $name, your reservation $city city at $place place on date $date for tourism is done. Enjoy your trip...";
       // $headers = "From: triptourism2021@gmail.com";
        
       // if (mail($to_email, $subject, $body, $headers)) 
       // {

    session_start();
    {
    $_SESSION['Name']=$name;
    $_SESSION['Number']=$number;
    $_SESSION['Email']=$email;
    $_SESSION['City']=$city;
    $_SESSION['Place']=$place;
    $_SESSION['Date']=$date;
    $_SESSION['Payment']=$payment;

    header("location: mail.php");
    }
    header("Location: /paytm/pgRedirect.php");
       // }


        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    
    $con->close();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Reservation
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <style>

            .container-2{

                padding: 20px;
                width: 40%;
                border-radius: 10px;
                
            }
            
            .form-group{
                margin-top: 20px;
                margin-bottom: 20px;
                color: rgb(255, 255, 255);
                
            }
            .container-1{
                margin-top: 20px;
                

                
            }
            .container-3{
                background-image: url("https://images.unsplash.com/photo-1503220317375-aaad61436b1b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80");
                
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                width: 100%;
                height: auto;
                
            }
            .formerror {
            color: red;
            }
            

            .contact
            {   
                text-align: center;
                padding: 8px;
                font-weight: bold;
                margin: auto;
            }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/tt/index.php"><strong>Trip-Tourism</strong></a>
            <div id="city-name"></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex justify-content-end w-100">
                    <li class="nav-item active">
                        <a class="nav-link" href="/tt/index.php"><strong>Home</strong></a>
                    </li>
                </ul>
            </div>
        </nav>
   
    <div class="container-3">
        <div class="container-2">
            <h1 style="color: rgb(0, 0, 0);"><strong>RESERVE YOUR ADVENTURE 
                HERE..</strong> </h1>
            <p style="color: rgb(0, 0, 0);"><strong>Fill this given form.</strong></p>
            
            <form name="autoSelectForm" method="post">
        
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="Number">Number</label>
                    <input type="text" class="form-control" name="number" id="number" placeholder="Enter Number" required>
                    </div>
                <div class="form-group">
                  <label for="Email">Email address</label>
                  <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email" required>
                </div>

            <div class="container-1">
                <label for="place"  style="color: rgb(255, 255, 255);">Select your city and place to visit</label><br>
                
                  
                  <script>
                  var city = new Array("BENGALURU", "GOA", "KOLKATA", "MAHABALESHWAR", "KOKAN","RAJASTHAN","KERALA","TAMIL NADU" );
                  var place = new Array();
                  place['BENGALURU'] = new Array('LALBAGH', 'BANNERGHATTA NATIONAL PARK', 'BANGLORE PALACE','CUBBON PARK','INNOVATIVE FILM CITY','COMMERCIAL STREET','ISKCON TEMPLE','WONDERLA AMUSEMENT PARK','MG ROAD','UB CITY MALL');
                  place['GOA'] = new Array('CALANGUTE BEACH', 'FORT AGUADA', 'CRUISE IN GOA', 'DUDHSAGAR FALLS','ANJUNA BEACH','CHAPORA FORT','THALASSA','BASILICA OF BOM JESUS','BAGA BEACH','BUTTERFLY BEACH');
                  place['KOLKATA'] = new Array('VICTORIA MEMORIAL KOLKATA', 'FORT WILLIAM', 'BELUR MATH','HOWRAH BRIDGE','BIRLA PLANETARIUM','INDIAN MUSEUM','MARBLE PALACE MANSION','MOTHER HOUSE','SCIENCE CITY KOLKATA','ST.PAULS CATHEDRAL KOLKATA');
                  place['MAHABALESHWAR'] = new Array('ELEPHANTS HEAD POINT', 'CHINAMANS FALLS', 'DHOBI WATERFALL','ARTHURS SEAT','VENNA LAKE','WILSON POINT','MAHABALESHWAR TEMPLE','PANCHGANI','TAPOLA','PRATAPGAD FORT');
                  place['KOKAN'] = new Array('GANPATIPULE', 'ALIBAG', 'RATNAGIRI', 'TARKARLI','SINDHUDURG','DAPOLI','MURUD','HARNAI','MAHAD','ROHA');
                  place['RAJASTHAN'] = new Array('JAIPUR', 'UDAIPUR', 'MOUNT ABU','JAISALMER','JODHPUR','AJMER','RANTHAMBORE','BIKANER','PUSHKAR','BHARATPUR');
                  place['KERALA'] = new Array('MUNNAR', 'ALLEPPEY', 'KOCHI','PERIYAR NATIONAL PARK','VARKALA','KOVALAM','WAYANAD','POOVAR','SABARIMALA');
                  place['TAMIL NADU'] = new Array('RAMESHWARAM', 'YERCAUD', 'KODAIKANAL', 'OOTY','CHENNAI','HOGENAKKAL','MAHABALIPURAM','KANYAKUMARI','KANCHIPURAM','MADURAI');
    


                function resetForm(theForm) {
                /* reset city */
                theForm.city.options[0] = new Option("Please select a City", "");
                for (var i=0; i<city.length; i++) {
                theForm.city.options[i+1] = new Option(city[i], city[i]);
                }
                theForm.city.options[0].selected = true;
                /* reset place */
                theForm.place.options[0] = new Option("Please select a Place", "");
                theForm.place.options[0].selected = true;
                }

                function updateModels(theForm) {
                var make = theForm.city.options[theForm.city.options.selectedIndex].value;
                var newModels = place[make];
                theForm.place.options.length = 0;
                theForm.place.options[0] = new Option("Please select a Place", "");
                for (var i=0; i<newModels.length; i++) {
                theForm.place.options[i+1] = new Option(newModels[i], newModels[i]);
                }
                theForm.place.options[0].selected = true;
                }

                </script>

                <select size="1" name="city" type="text" onchange="updateModels(this.form)"></select>
                <select size="1" name="place" type="text" onclick = ""></select>
                
            </div>
                  <br>
                <div class="form-group">
                    <label>Pick a Date to visit</label>
                    <input type="date" class="form-control" name="date" id="date" required>
                </div>
                <div class="form-group">
                    <label for="Payment">Payment</label>
                    <select class="form-control" name="payment" id="payment" required>
                        <option >50.00</option>
                    </select>
                <br>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary" style="align-items: center;">Pay & Reserve</button>
              </form>

              <script type="text/javascript">
                resetForm(document.autoSelectForm);
              </script>
            </div>
        </div>


        <h6 class="contact">FOR ANY INFORMATION OR ANY QUERY,   CONTACT US : triptourism2021@gmail.com</h6>
        
    
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color:lightgrey">
              © 2020 Copyright:
              <a href="/tt/index.php" class="text-dark">Trip-Tourism</a>
            </div>
        </footer>

        <script>
            var a=localStorage.getItem("myValue1");
            var b=localStorage.getItem("myValue2");
            alert("Remeber that, You have to Select City "+a+" and palce "+b+" in the following form.");
            var resetValue1="from first dropdown arrow";
            var resetValue2="from second dropdow arrow";
            localStorage.setItem("myValue1",resetValue1);
            localStorage.setItem("myValue2",resetValue2);

        </script>



        <!-- INSERT INTO `trip` (`sno`, `name`, `number`, `email`, `city`, `place`, `date`, `payment`, `reservation_date`) VALUES ('2', 'omkar yadav', '9372895997', 'omkar@gmail.com', 'GOA', 'BAGHA BEACH', '2021-10-15', '50.00', current_timestamp());  -->
    </body>
</html>



