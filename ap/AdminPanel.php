<?php
  session_start();
  if(!isset($_SESSION['AdminLoginId']))
  {
    header("location: AdminLogin.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js'></script>

        <style>
        body{
            margin: 0px;
        }

        .header{
            font-family: poppins;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 60px;
            background-color: rgb(130, 119, 232);
            margin-bottom: 20px;
        }
        
        div.header button{
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }

        .table{
            text-align: center;
            margin-top: 20px;

        }
        </style>    

        <script>
            $(document).ready(function () {

                // Delete 
                $('.delete').click(function () {
                    var el = this;

                    // Delete id
                    var deleteid = $(this).data('id');

                    // Confirm box
                    bootbox.confirm("Do you really want to delete record?", function (result) {

                        if (result) {
                            // AJAX Request
                            $.ajax({
                                url: 'ajaxfile.php',
                                type: 'POST',
                                data: {id: deleteid},
                                success: function (response) {

                                    // Removing row from HTML Table
                                    if (response == 1) {
                                        $(el).closest('tr').css('background', 'tomato');
                                        $(el).closest('tr').fadeOut(800, function () {
                                            $(this).remove();
                                        });
                                    } else {
                                        bootbox.alert('Record not deleted.');
                                    }

                                }
                            });
                        }

                    });

                });
            });
        </script>

    </head>
    <style type="text/css">
        .main-section{
            margin-top:150px;
        }
    </style>
    <body>


    <div class="header">
    <h1>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId']?></h1>
    <form method="POST">
    <button name="Logout">LOG OUT</button>
    </form>
    </div>

        <?php
        include "config.php";
        ?>
        <div class='container'>
            <table border='1' class='table'>
                <tr style='background: whitesmoke;'>
                <th>SNO.</th>
                <th>ID</th>
                <th>Name</th>
                <th>Number</th>
                <th>Email</th>
                <th>City</th>
                <th>Place</th>
                <th>Date</th>
                <th>Payment</th>
                <th>Reservation Date & Time</th>
                <th>Operation</th>

                </tr>

                <?php
                $query = "SELECT * FROM trip";
                $result = mysqli_query($con, $query);

                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['sno'];
                    $name = $row['name'];
                    $number = $row['number'];
                    $email = $row['email'];
                    $city = $row['city'];
                    $place = $row['place'];
                    $date = $row['date'];
                    $payment = $row['payment'];
                    $reservation_date = $row['reservation_date'];



                    ?>
                    <tr>
                        <td align='center'><?= $count ?></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $id ?></a></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $name ?></a></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $number ?></a></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $email ?></a></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $city ?></a></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $place ?></a></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $date ?></a></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $payment ?></a></td>
                        <td><a href='<?= $link ?>' target='_blank'><?= $reservation_date ?></a></td>
                        <td align='center'>
                            <button class='delete btn btn-danger' id='del_<?= $id ?>' data-id='<?= $id ?>' >Delete</button>
                        </td>
                    </tr>
                    <?php
                    $count++;
                }
                ?>
            </table>
        </div>

    <?php
    if(isset($_POST['Logout']))
    {
        session_destroy();
        header("location: AdminLogin.php");
    }
    
    ?>
    </body>
</html>