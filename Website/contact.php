<?php
error_reporting( -1);
ini_set('display_errors', 'On');
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS implement-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type=text/css href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/contactstyle.php">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Kontaktformular</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
</head>

<body>

<!-- Navigation Bar -->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
            <img src="img/strawhat.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Assetsstore
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Assets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Team
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Kristina Nguyen</a>
                        <a class="dropdown-item" href="#">Yannick Tretau</a>
                        <a class="dropdown-item" href="#">Mariko Kp</a>
                        <a class="dropdown-item" href="#">Jimmy Cu</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Projectdescription</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="contact.php" class="btn btn-outline-success my-2 my-sm-0" role="button" aria-pressed="true">Contact now</a>
            </form>
        </div>
    </nav>
</section>



<section id="contact">
    <div class="container">
        <h1>Kontaktieren Sie Uns!</h1>
        <section class="container" id="alets">
            <div class="alert alert-success" role="alert">
                Anfrage versendet!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger" role="alert">
                Fehler beim versenden der Anfrage
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </section>
        <div class="row">
            <div class="col-md-12">
                <form class="contact-form">
                    <h6 class="form-check-inline">Anrede:</h6>
                    <div class="form-group form-check-inline form-check">
                        <input class="form-check-input" type="radio" name="salutation" id="salutationMrs" value="mrs">
                        <label class="form-check-label" for="salutationMrs">Frau</label>
                    </div>
                    <div class="form-group form-check-inline form-check">
                        <input class="form-check-input" type="radio" name="salutation" id="salutationMr" value="mr">
                        <label class="form-check-label" for="salutationMrs">Herr</label>
                    </div>
                    <div class="form-group form-check-inline form-check">
                        <input class="form-check-input" type="radio" name="salutation" id="salutationDivers" value="divers">
                        <label class="form-check-label" for="salutationDivers">Divers</label>
                    </div>
                    <div class="form-group">
                        <h6>Firma</h6>
                        <input type="text" class="form-control" placeholder="Firma">
                    </div>
                    <div class="form-group">
                        <h6>Ansprechpartner<span>*</span></h6>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <h6>Ihre Email Adresse<span>*</span></h6>
                        <input type="email" class="form-control" placeholder="Maxmuster@example.com">
                    </div>
                    <div class="form-group">
                        <h6>Telefon<span>*</span></h6>
                        <input type="telefon" class="form-control" placeholder="+49 ">
                    </div>
                    <div class="form-group">
                        <h6>Ihre Nachricht an Uns<span>*</span></h6>
                        <textarea class="form-control" rows="4" placeholder="Nachricht"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Nachricht senden</button>
                </form>
            </div>

        </div>
    </div>
</section>



<!--- Footer --->
<footer>
    <div class="container">
        <div class="row text-light text-center py-4 justify-content-center">
            <div class="col-md-4">
                <img src="img/strawhat.png" alt="">
                <hr class="light">
                <p>Impressum</p>
                <p>Datenschutzerklärung</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Information</h5>
                <hr class="light">
                <p>Maxmusterstraße 30,</p>
                <p>22309, Hamburg</p>
                <p>Mobil: +49 173 12 123 345</p>
                <p>E-Mail: Maxmuster@gmail.com</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hours</h5>
                <hr class="light">
                <p>Montag - Mittwoch: 08:00 - 14:00</p>
                <p>Donnerstag - Samstag: 08:00 - 16:00</p>
                <p>Sonntag: Geschlossen</p>
            </div>
        </div>
    </div>
</footer>

<!-- Socket -->
<div class="socket text-light text-center py-3">
    <p>&copy; <a href="#">www.wennwireinennamenhätten.com</a></p>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>