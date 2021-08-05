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
<!-- CONTENT -->


    <div class="contactImg">
        <img src="img/contact/contact1.jpg">
    </div>

    <div class="contact">

        <h4>CONTACT US</h4>
        
        <div class="contactbox" data-aos="slide-left">
            <div class="contactIcon">
                <a class="fa fa-phone" style="font-size: 70px; margin: 5px; color: #ffffff;" href="tel:333444555"></a>
            </div>
            <div class="contactText">
                (021)-333-444-555
                <br><span class="subtext">(Call Laviozza and Inquire)</span>
            </div>
        </div>

        <div class="contactbox" data-aos="slide-left">
            <div class="contactIcon">
                <a class="fa fa-whatsapp" style="font-size: 70px; margin: 5px; color: #ffffff;" href="tel:333444555"></a>
            </div>
            <div class="contactText">
                (+92)-334-2686516
                <br><span class="subtext">(Chat with our Representative for info)</span>
            </div>
        </div>

        
        <div class="contactbox" data-aos="slide-left">
            <div class="contactIcon">
                <i class="fa fa-envelope" id="cToggle" style="font-size: 60px; margin: 5px; color: #ffffff;"></i>
            </div>
            <div class="contactText">
                laviozza@gmail.com
                <br><span class="subtext">(click for Complaints and Suggestions)</span>
            </div>
        </div>

    </div>

    <div class="contactForm">
        <i class="fa fa-envelope" id="cIcon" style="font-size: 100px; margin-top: 5px; color: #ffffff;"></i>

        <form id="cform" action="">
            <fieldset>
                <legend>Email Laviozza</legend>

                <div class="formfield">
                    <label for="fname" class="text">First Name: </label>
                    <input type="text" placeholder="Enter Your First Name" id="fname" name="fname" required>
                </div>

                <div class="formfield">
                    <label for="lname" class="text">Last Name: </label>
                    <input type="text" placeholder="Enter Your Last Name" id="lname" name="lname" required>    
                </div>

                <div class="formfield">
                    <label for="email" class="text">Email: </label>
                    <input type="email" placeholder="Enter Your Email" id="email" name="email" required>
                </div>

                <div class="formfield">
                    <textarea type="text" placeholder="Your Text here ..." class="message" id="message" name="message" rows="10" required></textarea>
                </div>

                <div>
                    <button class="sendBtn">SEND</button>
                </div>

            </fieldset>
        </form>
    </div>
    <div class="map">
        <div class="text">OUR LOCATION</div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.0662432461663!2d67.11264271465414!3d24.929813148614837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338b8d4494c91%3A0xf864ed97b4a8ec0e!2sNED%20University%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sus!4v1627392964193!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
    </div>
    


<!-- FOOTER -->
    <footer data-aos="slide-up">
        <div class="footerContainer">
            <div class="row">
                
                <div class="footerCol">
                    <h4>LAVIOZZA LUXURY</h4>
                    <ul>
                        <li><a href="index.php #about">About us</a></li>
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