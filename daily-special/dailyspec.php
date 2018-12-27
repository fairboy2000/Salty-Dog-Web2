<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Daily Specials </title>
    <!-- Modernizr -->

    <!-- jQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <!-- framework css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!--<![endif]-->
    <link rel="icon" type="image/png" href="../images/social-logos/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/dropMenustyle.css">
    <link type="text/css" rel="stylesheet" href="css/styleBoot.css">

</head>



<body>

    




    <script>
        $(document).ready(function () {
            $('.dropdown-submenu a.test').on("click", function (e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>
  <div class="container">
  <nav class="navbar navbar-expand-lg ">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bars"></i> Menu
                </a>
                <ul>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="../index.html"target="blank">Home</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/stores.html" target="blank">Shop</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="test btn  dropdown-toggle" tabindex="-1" href="#" href="#">Dine
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="../Dine/dine.html"target="blank">Salty Dog Dining</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/cafe.html"target="blank">Salty Dog Cafe</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/bluffdog.html"target="blank">Salty Dog Cafe Bluffton</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/landsend.html"target="blank">Land's End</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/wreck.html"target="blank">Wreck</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/kiwi.html"target="blank">Kiwi's Island Cookout</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/pizza.html"target="blank">Pizza</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/icecream.html"target="blank">IceCream</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/cater.html"target="blank">Private Events</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../daily-special/dailyspec.php"target="blank">Daily Specials</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a class="dropdown-item" href="../cruise/cruise.html" target="blank">Cruise</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../cruise/inn.html" target="blank">Stay</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/events.html"target="blank">Events</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="../Pages/live.html" target="blank">Live</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/radio.html"target="blank">Radio</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/kids.html"target="blank">Kids</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../feedback/feedback.html"target="blank">Feedback Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/findus.html"target="blank">Find Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../contact/contact.html"target="blank">Contact Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../lucky/win.html"target="blank">Lucky Receipts</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="test btn  dropdown-toggle" tabindex="-1" href="#" href="#">Photos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="../photos/photos.html"target="blank">Pet Photos</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/petmemorial.html"target="blank">Pet Memorial Photos</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/photosevents.html"target="blank">Special Events photos</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/photossanta.html"target="blank">Photos with Santa</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/photosjake.html"target="blank">Photos with Jake</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/photospeople.html"target="blank">Salty Dog Folks Photos</a>
                                </li>
                            </ul>

                        </li>



                        <li class="dropdown-submenu">
                            <a class="test btn  dropdown-toggle" tabindex="-1" href="#" href="#">Webcams
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="../WebCams/webcams.html"target="blank">See all our Webcams</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/bluewatercam.html"target="blank">Bluewater Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/boatcam.html"target="blank">BoatCam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/boatcamaft.html"target="blank">BoatCam Aft</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/boatcambow.html"target="blank">BoatCam Bow</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/calibogue.php"target="blank">Calibogue Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/courtyardcam.html"target="blank">Courtyard Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/overheadcam.html"target="blank">Overhead Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/South Beach Cam.html"target="blank">South Beach Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/tangercam.html"target="blank">Tanger Outlet Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/tshirtcam.html"target="blank">T-Shirt Cam</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a class="dropdown-item" href="../Pages/weather.php"target="blank">Weather</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Legend/legend.html"target="blank">The Legend</a>
                        </li>
                    </div>
                </ul>
            </div>

                 <ul class="navbar-nav ml-auto" style="flex-direction: row !important">
                <li class="nav-item">
                    <a href="../tides/tides.html" target="_blank">

                        <img src="../images/social-logos/TIDESBUTTON.png"alt="Tides Magaxine logo">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../Pages/social.html" target="_blank">
                        <img src="../images/social-logos/Facebook_Rounded.png"alt="Facebook Logo">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../Pages/social.html" target="_blank">
                        <img src="../images/social-logos/Instagram_RoundedEdges.png"alt="Instagram Logo">
                    </a>
                </li>
            </ul>
        </nav>
    </div>


    <div class="container">
        <img src="images/SPECIALS.png" style="width:100%; height:auto">

    </div>

    

    <div class="container" >
           




           <br>
   
           <div class="container"  style="width:90%; margin-left: 6%">
<div class="row border-bottom border-white border-3"></div><br>
        <div class="row border-bottom border-white border-3"></div>
        <br>
        <div class="row">
            <div class="col">
            <img src="images/CAFE.png" alt="Cafe logo" width="30%" height="auto">
            </div>
            <div class="col">
                <br>
                <ul>
                    <li style="background-color: white;" >
                        <h3 style="color:black !important">Today's Chef is <?php echo $_POST["chefCafe"]; ?>!<br></h3>
                    </li>

                    <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Daily Special is <?php echo $_POST["specialCafe"]; ?>.</h3>
                    </li>
                    <li style="background-color: white;" >
                        <h3 style="color:black !important">Today's Kid's Daily Special is <?php echo $_POST["cafeKids"]; ?>.</h3>
                    </li>
                </ul>


            </div>


        </div>
        <br>
        <div class="row border-bottom border-white border-3"></div><br>
        <div class="row border-bottom border-white border-3"></div>
        <br>
        <div class="row">
            <div class="col">
                <img src="images/LET.png" alt="Land's end Tavenr logo" width="30%" height="auto">
            </div>
            <div class="col">
                <ul>
                <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Chef is <?php echo $_POST["chefLet"]; ?>!<br></h3>
                    </li>

                    <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Daily Special is <?php echo $_POST["specialLet"]; ?>.</h3>
                    </li>
                    <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Kid's Daily Special is <?php echo $_POST["letKids"]; ?>.</h3>
                    </li>
                </ul>


            </div>


        </div>
        <br>
        <div class="row border-bottom border-white border-3"></div>

        <br>
        <div class="row border-bottom border-white border-3"></div>
        <br>
        <div class="row">
            <div class="col">
                <img src="images/BLUFFDOG.png" alt="Bluffton Cafe logo" width="30%" height="auto">
            </div>
            <div class="col">
                <ul>
                <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Chef is <?php echo $_POST["chefBluff"]; ?>!<br></h3>
                    </li>

                    <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Daily Special is <?php echo $_POST["specialBluff"]; ?>.</h3>
                    </li>
                    <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Kid's Daily Special is <?php echo $_POST["BluffKids"]; ?>.</h3>
                    </li>
                </ul>

            </div>


        </div>
        <br>
        <div class="row border-bottom border-white border-3"></div><br>
        <div class="row border-bottom border-white border-3"></div>
        <br>
        <div class="row">
            <div class="col">
                <img src="images/WRECK.png" alt="The Wreck logo" width="30%" height="auto">
            </div>
            <div class="col">
                <ul>
                <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Chef is <?php echo $_POST["chefWreck"]; ?>!<br></h3>
                    </li>

                    <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Daily Special is <?php echo $_POST["specialWreck"]; ?>.</h3>
                    </li>
                    <li style="background-color: white;" >
                        <h3 style=" color:black !important">Today's Kid's Daily Special is <?php echo $_POST["wreckKids"]; ?>.</h3>
                    </li>
                </ul>
            </div>


        </div>
        <br>
        <div class="row border-bottom border-white border-3"></div><br>
        <div class="row border-bottom border-white border-3"></div>
        <br>
    </div>
    </div>
    <!-- google analytics  -->

    <script type="text/javascript">
        var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']); _gaq.push(['_trackPageview']); (function () {
            var ga
                = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol
                    ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>

</html>