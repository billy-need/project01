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
    <body>
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <!-- Logo -->
            <img src="images/ZenosLogo.png" alt="Zeno's Chicago Grill" class="navbar-brand" loading="lazy">

            <!-- Button for small screens -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarLinks">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.html" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a href="reservation.html" class="nav-link">Reservation</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <h2 class="display-4">Rerservation has been confirmed!</h2>
                        <p class="lead">Congraulations, your reservation for <?php echo $_GET["partySelect"]; ?> people on <?php echo $_GET["resDate"]; ?> at <?php echo $_GET["resTime"]; ?> has been made.</p>
                        <hr class="my-4">
                        <p>Reservation for <?php echo $_GET["firstName"]; ?> <?php echo $_GET["lastName"]; ?></p>
                        <p>Confirmation email sent to <?php echo $_GET["email"]; ?>.</p>
                        <p>Call back Phone number entered <?php echo $_GET["phone"]; ?></p>
                    </div>
                </div>
            </div>
            <h5>Raw Results</h5>
            <p>First Name: <?php echo $_GET["firstName"]; ?></p>
            <p>Last Name: <?php echo $_GET["lastName"]; ?></p>
            <p>Email: <?php echo $_GET["email"]; ?></p>
            <p>Phone: <?php echo $_GET["phone"]; ?></p>
            <p>Reservation Date: <?php echo $_GET["resDate"]; ?></p>
            <p>Reservatoin Time: <?php echo $_GET["resTime"]; ?></p>
            <p>Party Size: <?php echo $_GET["partySelect"]; ?></p>
        </div>

    </body>
</html>