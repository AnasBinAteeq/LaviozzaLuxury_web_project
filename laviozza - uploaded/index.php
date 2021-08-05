<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style_LL.css" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
    <link rel="manifest" href="img/icon//site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Laviozza Luxury</title>
</head>

<body>

<!-- NAV BAR -->
    <nav>

        <div class="logo">
            <a href="#">LAVIOZZA LUXURY</a>
        </div>

        <ul name="navMenu">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="contact.php">Contact us</a></li>
        </ul>

        <div class="navIcon">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <div class="ticker">
        <div class="tickerText">
            This is a dummy website for project purpose.
            No such hotel named as LAVIOZZA LUXURY is located in any city of Pakistan.
        </div>
    </div>
<!-- SLIDER -->
    <div class="slider">

        <div class="mySlides fade">
            <img src="img\slider\slider1.jpg" class="sliderImage zoom">
            <div class="sliderText move">
                <h1>THE ULTIMATE <br>FIVE-STAR EXPERIENCE</h1>
                <p>First time in Pakistan<br>Book your Room now</p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img\slider\slider2.jpg" class="sliderImage zoom">
            <div class="sliderText move">
                <h1>EXTRAORDINARY DINING</h1>
                <p>All-day dining at its absolute best with options so extensive
                you won't know where to start; the range of dishes at Laviozza
                straddle the line between comforting and complex.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img\slider\slider3.jpg" class="sliderImage zoom">
            <div class="sliderText move">
                <h1>COMFORTABLE STAY</h1>
                <p>With a choice of one king or two queen beds,
                our large Palm Hotel Rooms are ideal for a couple's retreat or family holiday.
                After a fun-filled day at the resort, relax with our 24-hour room service menu.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img\slider\slider4.jpg" class="sliderImage zoom">
            <div class="sliderText move">
                <h1>DEDICATED WORKSPACE</h1>
                <p>On a business tour? we got it covered by the rooms
                having dedicated workspace, where with all the necessities
                we bring the best working experience along with comfort and your ease.</p>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="img\slider\slider5.jpg" class="sliderImage zoom">
            <div class="sliderText move">
                <h1>HEATED POOL</h1>
                <p>A state of Art pool equipped with a fitted heater
                to provide the best leisure and recreational time</p>
            </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094</a>
        <a class="next" onclick="plusSlides(1)">&#10095</a>

    </div>
    
    <div class="indicator">
        <span class="dot" onclick="currentSlide(1)" ></span>
        <span class="dot" onclick="currentSlide(2)" ></span>
        <span class="dot" onclick="currentSlide(3)" ></span>
        <span class="dot" onclick="currentSlide(4)" ></span>
        <span class="dot" onclick="currentSlide(5)" ></span>
    </div>

<!-- PAGE CONTENT -->

    <div class="indexContent" id="about">
        <div class="text index1">
            Nestled between the calm turquoise waters of the Arabian Sea and
            the majestic skyline, <strong>Laviozza</strong>, is the crown of the
            Pakistan's first and only man made island. Whether you’re staying in our
            world-renowned resort or dining in one of our award-winning celebrity
            chef restaurants, experience a world away from your everyday at Laviozza.
            <br>
        </div>
        
        <div class="index2">
            <img src="img/index/index1.jpg" data-aos="flip-left">
        </div>
        
        <div class="text index3">
            This Karachi icon is the ultimate holiday destination for both couples
            and families to make lifetime memories. From thrill-seekers to foodies,
            sun lovers to explorers, there is an unforgettable experience for everyone.
            <br>
        </div>
    
        <div class="text">
            Cozy rooms have juice bars, flat-screens and free Wi-Fi, as well as island views.
            Suites offer sitting areas; some include terraces, whirlpool baths, dedicated workspace 
            and/or living rooms. Upgraded suites are set in the water tank of an aquarium, 
            and have floor-to-ceiling windows with views of marine life. Room service is available 24/7.
            <br>
        </div>
    
        <div class="text">
            There are 23 restaurants, plus a spa, a gym & a heated pool. Other amenities include an 
            aquarium and a dolphin pool, along with a kids’ club and a indoor sports gymnasium.
        </div>
    </div>

<!-- FOOTER -->

    <footer data-aos="slide-up">
        <div class="footerContainer">
            <div class="row">
                
                <div class="footerCol">
                    <h4>LAVIOZZA LUXURY</h4>
                    <ul>
                        <li><a href="#about">About us</a></li>
                        <li><a href="services.php">Our Services</a></li>
                    </ul>
                </div>
                
                <div class="footerCol">
                    <h4>Reservation</h4>
                    <ul>
                        <li><a href="reservation.php">Book a Room</a></li>
                        <li><a href="#">Order Food</a></li>
                        <li><a href="#">Book a Ride</a></li>
                    </ul>
                </div>
                
                <div class="footerCol">
                    <h4>Contact us</h4>
                    <ul>
                        <li>
                            <a class="fa fa-phone" href="tel:333444555"></a> | 333-444-555<br>
                            <a class="fa fa-whatsapp" href="https://wa.me/923342686516/?text=Hi%2C%20is%20there%20anyone%20to%20provide%20information%20about%20Laviozza%20Luxury%20Booking."></a> | +92-334-2686516
                            
                        </li>
                    </ul>
                </div>
                
                <div class="footerCol">
                    <h4>Follow us</h4>
                    <div class="social">
                        <a class="fa fa-facebook" href="https://www.facebook.com/" target="_blank"></a>
                        <a class="fa fa-instagram" href="https://www.instagram.com/" target="_blank"></a>
                        <a class="fa fa-twitter" href="https://twitter.com/?lang=en" target="_blank"></a>
                        <a class="fa fa-linkedin" href="https://www.linkedin.com/" target="_blank"></a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="script_LL.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

</body>
</html>