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

            <!-- Footer Menu -->
            <div id="footerNav">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-center">

                        <!-- Footer Buttons -->
                        <p class="footButton">
                            <a class="btn btn-secondary" data-toggle="collapse" href="#contactCard" role="button" aria-expanded="false" aria-controls="contactCard">Hours & Location</a>
                            <a class="btn btn-secondary" data-toggle="collapse" href="#termsCard" role="button" aria-expanded="false" aria-controls="termsCard">Terms of Use</a>
                        </p>
                    </div>
                </div>
    
                <!-- Footer Cards -->
                <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
    
                        <!-- Contact Card -->
                        <div class="collapse" id="contactCard" data-parent="#footerNav">
                            <div class="card bg-light card-body">
                                <h5 class="card-title">Hours & Location<hr></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Hours of Operation:</h6>
                                <p class="card-text">
                                    <span class="bold">Mon-Thur:</span> 11:30am-9pm <br>
                                    <span class="bold">Fri & Sat:</span> 11:30am-10pm <br>
                                    <span class="bold">Sun:</span> 11am-8pm <br>
                                </p>
                                <br>
                                <h6 class="card-subtitle mb-2 text-muted">Phone Number:</h6>
                                <p class="card-text">
                                    <a href="tel:123-456-7890">561-123-4567</a>
                                </p>
                                <br>
                                <h6 class="card-subtitle mb-2 text-muted">Location:</h6>
                                <p class="card-text">
                                    445 E Atlantic Ave <br>
                                    Delray Beach, FL 33483
                                </p>
                                <br>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3025.278025578503!2d-80.06974895343214!3d26.46220238550362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1591646520474!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
    
                        <!-- Terms Cards -->
                        <div class="collapse" id="termsCard" data-parent="#footerNav">
                            <div class="card bg-light card-body">
                                <h5 class="card-title">Terms of Use<hr></h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mi tempus imperdiet nulla malesuada pellentesque elit eget. Etiam sit amet nisl purus in mollis. Diam in arcu cursus euismod quis viverra. Eu scelerisque felis imperdiet proin fermentum. Imperdiet proin fermentum leo vel orci porta. Quisque sagittis purus sit amet volutpat. Tempor commodo ullamcorper a lacus vestibulum. Amet nisl purus in mollis nunc sed id semper risus. Quis viverra nibh cras pulvinar. Scelerisque fermentum dui faucibus in ornare quam. Eleifend quam adipiscing vitae proin. Condimentum lacinia quis vel eros donec ac odio tempor orci. Id velit ut tortor pretium viverra.
                                </p>
                                <p class="card-text">
                                    Pharetra convallis posuere morbi leo urna molestie. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra. Suspendisse ultrices gravida dictum fusce ut. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Lectus sit amet est placerat in egestas erat imperdiet sed. Dolor magna eget est lorem ipsum dolor sit amet. Pellentesque adipiscing commodo elit at imperdiet dui. Dignissim diam quis enim lobortis scelerisque fermentum. Velit euismod in pellentesque massa placerat. Erat pellentesque adipiscing commodo elit at imperdiet dui. Massa tincidunt nunc pulvinar sapien et ligula ullamcorper. Justo eget magna fermentum iaculis eu non diam phasellus. Risus sed vulputate odio ut. Ac feugiat sed lectus vestibulum. In pellentesque massa placerat duis ultricies lacus sed turpis. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Integer eget aliquet nibh praesent tristique magna sit amet. Molestie a iaculis at erat pellentesque. Pharetra convallis posuere morbi leo urna molestie at.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- jQuery, Popper.js, Bootstrap 4.0 JS Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <!-- Custom scripts -->
        <script src="js/scripts.js"></script>

    </body>
</html>