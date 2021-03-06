<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Weather</title>
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


     
<style>
      

      .grid-item {

          padding: 5px;
          color: white;
          text-align: center;
      }

 

      .gif-container img {
          background-color: rgb(200, 233, 238);


      }

      .my-container {
          padding-top: 20px;
          text-align: center;
          background-color: rgb(200, 233, 238);
          max-width: 90%;
          margin-left:5%;
      }

            .row {
          padding-top: 20px;
          text-align: center;
          background-color: rgb(200, 233, 238);
          max-width: 90%;
          margin-left:5%;
      }
      .btn{
            font-size: .5em !important;
            /* white-space: normal !important; */
        }
        .btn-dark{
            font-size: .5em !important;
            /* white-space: normal !important; */
        }
  </style>


 




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
                            <a class="dropdown-item" href="../index.html"target="_blank">Home</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/stores.html" target="_blank">Shop</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="test btn  dropdown-toggle" tabindex="-1" href="#" href="#">Dine
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="../Dine/dine.html"target="_blank">Salty Dog Dining</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/cafe.html"target="_blank">Salty Dog Cafe</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/bluffdog.html"target="_blank">Salty Dog Cafe Bluffton</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/landsend.html"target="_blank">Land's End</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/wreck.html"target="_blank">Wreck</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/kiwi.html"target="_blank">Kiwi's Island Cookout</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/pizza.html"target="_blank">Pizza</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/icecream.html"target="_blank">IceCream</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../Dine/cater.html"target="_blank">Private Events</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../daily-special/dailyspec.php"target="_blank">Daily Specials</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a class="dropdown-item" href="../cruise/cruise.html" target="_blank">Cruise</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../cruise/inn.html" target="_blank">Stay</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/events.html"target="_blank">Events</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="../Pages/live.html" target="_blank">Watch</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/radio.html"target="_blank">Radio</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/kids.html"target="_blank">Kids</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../feedback/feedback.html"target="_blank">Feedback Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Pages/findus.html"target="_blank">Find Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../contact/contact.html"target="_blank">Contact Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../lucky/win.html"target="_blank">Lucky Receipts</a>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="test btn  dropdown-toggle" tabindex="-1" href="#" href="#">Photos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="../photos/photos.html"target="_blank">Pet Photos</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/petmemorial.html"target="_blank">Pet Memorial Photos</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/photosevents.html"target="_blank">Special Events photos</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/photossanta.html"target="_blank">Photos with Santa</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/photosjake.html"target="_blank">Photos with Jake</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../photos/photospeople.html"target="_blank">Salty Dog Folks Photos</a>
                                </li>
                            </ul>

                        </li>



                        <li class="dropdown-submenu">
                            <a class="test btn  dropdown-toggle" tabindex="-1" href="#" href="#">Webcams
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="../WebCams/webcams.html"target="_blank">See all our Webcams</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/bluewatercam.html"target="_blank">Bluewater Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/boatcam.html"target="_blank">BoatCam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/boatcamaft.html"target="_blank">BoatCam Aft</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/boatcambow.html"target="_blank">BoatCam Bow</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/calibogue.php"target="_blank">Calibogue Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/courtyardcam.html"target="_blank">Courtyard Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/overheadcam.html"target="_blank">Overhead Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/South Beach Cam.html"target="_blank">South Beach Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/tangercam.html"target="_blank">Tanger Outlet Cam</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="../WebCams/tshirtcam.html"target="_blank">T-Shirt Cam</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a class="dropdown-item" href="../Pages/weather.php"target="_blank">Weather</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../Legend/legend.html"target="_blank">The Legend</a>
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
        <img src="../images/HeaderBanners/WEATHER.png" style="width:100%; height:auto" alt="Banner of Overhead drone shot of salty dog cafe in south beach, with salty dog logo and weather written on it.">

    </div>




    <div class="container">

      <div class="my-container">
        <div class="row">
                
            <div class="col">
            <div class="grid-item">
                <a href="https://www.weatherforyou.com/reports/index.php?forecast=zandh&amp;place=hilton%20head%20island&amp;state=sc&amp;zipcode=29928">
                <button type="button" class="btn btn-dark">FORECAST</button></a>  
             </div>
             </div>


             <div class="col">
            <div class="grid-item">
                <a href="https://radar.weather.gov/Conus/southeast_loop.php"> <button type="button" class="btn btn-dark">RADAR</button></a>
            </div>
             </div>

            <div class="col">
            <div class="grid-item">
                <a href="https://www.wunderground.com/MAR/AM/352.html"><button type="button" class="btn btn-dark">MARINE</button></a>
            </div>
             </div>

              <div class="col">
            <div class="grid-item">
                <a href="http://saltydog.com/weather/sbeach/downld02.txt"><button type="button" class="btn btn-dark">TWO DAY DATA</button></a>
            </div>
             </div>

                <div class="col">
                    <div class="grid-item">
                        <a href="tideChart.html"><button type="button"class="btn btn-dark">TIDE CHART - Updated Monthly</button></a>
                    </div>
                </div>

          </div>

      </div>


             <div class="my-container">
                <div class="row" >
                
<a href="http://98.101.223.10:8078/axis-cgi/mjpg/video.cgi">


<script language="javascript">
var refreshrate=1;             
var image="http://98.101.223.10:8078/axis-cgi/jpg/image.cgi?";     
// var imgheight=450;                   
// var imgwidth=800;                
function refresh(){
document.images["pic"].src=image+"?"+new Date();
setTimeout('refresh()', refreshrate*1000);}
document.write('<IMG SRC="'+image+'" ALT="Please Stand By For Webcam Photo Upload" NAME="pic" ID="pic" WIDTH="90%" HEIGHT="auto" STYLE="border: 3px solid Black;">');
if(document.images)window.onload=refresh;
</script>  
</a>






                <div class="grid-item">

            <h4 style="color:black !important">Live Webcam From South Beach Marina in Sea Pines Hilton Head Island</h4>

             </div>

        </div>
        </div>
        <div class="my-container">
<div class="row">

<?php $date = date("Y-m-d-H-i-s"); ?>

<div class="col">
<div class="grid-item">
<img id="image1" src="http://saltydog.com/weather/sbeach/WindSpeed.gif?date=<?php echo $date; ?>" alt="Wind Speed" />
</div>
</div>

<div class="col">
<div class="grid-item">
<img id="image2" src="http://saltydog.com/weather/sbeach/WindDirection.gif?date=<?php echo $date; ?>" alt="Wind direction"  />
</div>
</div>

<div class="col">
<div class="grid-item">
<img id="image3" src="http://saltydog.com/weather/sbeach/10MinAvgWindSpeed.gif?date=<?php echo $date; ?>" alt="Average wind Speed"  /> 
</div>
</div>

</div>

<div class="row">


 <div class="col">  
<div class="grid-item">
<img id="image4" src="http://saltydog.com/weather/sbeach/HighWindDirHistory.gif?date=<?php echo $date; ?>" alt=""  />
</div>
</div> 

<div class="col">
 <div class="grid-item">
<img id="image5" src="http://saltydog.com/weather/sbeach/HiWindSpeedHistory.gif?date=<?php echo $date; ?>" alt=""  />
</div>
</div> 

</div>

<div class="row">
<!-- <div class="col">
<div class="grid-item">
<img id="image6" src="http://saltydog.com/weather/sbeach/OutsideHumidity.gif?date=<?php echo $date; ?>" alt=""  />
</div>
</div> -->

<!-- <div class="col">
<div class="grid-item">
<img id="image7" src="http://saltydog.com/weather/sbeach/OutsideTemp.gif?date=<?php echo $date; ?>" alt="Outside Temp."  />
</div>
</div> -->

<div class="col">
<div class="grid-item">
<img id="image11" src="http://saltydog.com/weather/sbeach/Barometer.gif?date=<?php echo $date; ?>" alt="Barometer."  />
</div>
</div>

<!-- <div class="col">
<div class="grid-item">
<img id="image8" src="http://saltydog.com/weather/sbeach/HeatIndex.gif?date=<?php echo $date; ?>" alt=""  />
</div>
</div> -->

<div class="col">
<div class="grid-item">
<img id="image9" src="http://saltydog.com/weather/sbeach/Rain.gif?date=<?php echo $date; ?>" alt="Rain Daily amount." />
</div>
</div>

<div class="col">
<div class="grid-item">
<img id="image10" src="http://saltydog.com/weather/sbeach/MonthlyRain.gif?date=<?php echo $date; ?>" alt="Rain per Month."  />
</div>
</div>

<div class="col">
<div class="grid-item">
<img id="image11" src="http://saltydog.com/weather/sbeach/YearlyRain.gif?date=<?php echo $date; ?>" alt="Rain per year."  />
</div>
</div>
</div>

<div class="row">
<div class="col">
<div class="grid-item">
<img id="image12" src="http://saltydog.com/weather/sbeach/Temperature2.gif?date=<?php echo $date; ?>" alt="Surface Water temp." />
</div>
</div>

</div>




<div class="col">  
<div class="grid-item">
<p style="color:black !important; text-align: center">suface water temp</p>
</div>
</div>
</div>

<div class="row">
<div class="col">
<div class="grid-item">
<img src="http://64.203.225.15:8018/images/tides.jpg?date=<?php echo $date; ?>" alt="tides" style="border: 2px" width="80%"
                height="auto" />
</div>             
</div>
</div>

<div class="row">
<div class="col">
<div class="grid-item">
<p style="color:green !important;text-align: center">Green Clock = Tide Falling with Low Tide at Bottom of Clock</p>
</div>
</div>
</div>
<div class="row">
<div class="col">
<div class="grid-item">
<p style="color:blue!important;text-align: center">Blue Clock = Tide Rising with High Tide at Top of Clock</p>
</div>
</div>
</div>
<div class="row">
<div class="col">
<div class="grid-item">
<p style="color:red !important;text-align: center">Red Clock = Negative Low</p>
</div>
</div>
</div>
<div class="row">
<div class="col">
<div class="grid-item">
<p style="color:black!important;text-align: center">Current Eastern Standard Time in Center of Clock  </p>
</div>
</div>
</div>
<div class="row">
<div class="col">
<div class="grid-item">
<p style="color:black!important;text-align: center">Current Tide Height on Face of Clock</p>

</div>
</div>
</div>    



    
</div>


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






