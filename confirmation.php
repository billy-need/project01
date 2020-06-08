<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Metadata -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" contect="IE=edge">
        <meta name="viewport" content="width = device-width, initial-scale = 1">

        <!-- Tab in tab -->
        <title>Zeno's Chicago Grill</title>

        <!-- Bootstrap 4.0 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Set favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    </head>
    <body onload="confirmationLoad()">
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Logo -->
            <a  class="navbar-brand" href="index.html">
                <img src="images/ZenosLogo.png" alt="Zeno's Chicago Grill" loading="lazy">
            </a>
            
            <!-- Button for small screens -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarLinks">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="index.html" aria-haspopup="true" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.html" aria-haspopup="true" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a href="reservation.html" aria-haspopup="true" class="nav-link">Reservation</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <Header><h2 class="display-4">Rerservation has been confirmed!</h2></Header>
                        <p class="lead">Congratulations <span class="bold"><?php echo $_GET["firstName"]; ?> <?php echo $_GET["lastName"]; ?></span>, your reservation for <span class="bold"><?php echo $_GET["partySelect"]; ?></span> people on <span class="bold"><?php echo $_GET["resDate"]; ?></span> at <span class="bold"><?php echo $_GET["resTime"]; ?></span> has been set.</p>
                        <hr class="my-4">
                        <p>A confirmation email was sent to <b><?php echo $_GET["email"]; ?></b>. Please arrive 15 minutes prior to your reservation time.</p>
                        <div id="resOptions">
                            <p ><h5>Requests: </h5>
                                <div id="wheelchairCheck"><?php echo $_GET["wheelchairCheck"]; ?></div>
                                <div id="highchairCheck"><?php echo $_GET["highchairCheck"]; ?></div>
                                <div id="strollerCheck"><?php echo $_GET["strollerCheck"]; ?></div>
                                <div id="outdoorCheck"><?php echo $_GET["outdoorCheck"]; ?></div>
                            </p>
                        </div>
                        <div id="specText">
                        <p><h5>Special Instructions: </h5><i><div id="specInstructionText"><?php echo $_GET["specInstructionText"]; ?></div></i></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- jQuery, Popper.js, Bootstrap 4.0 JS Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- My scripts -->
        <script src="js/scripts.js"></script>
    </body>
</html>