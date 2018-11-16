<!DOCTYPE html>
<html>
    <head>
        <title>Acton Corporate Services Limited</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            x = 0;
            $(document).ready(function () {
                var prevScrollpos = window.pageYOffset;
                window.onscroll = function () {
                    var currentScrollPos = window.pageYOffset;
                    if (prevScrollpos > currentScrollPos) {
                        document.getElementById("navbar").style.top = "0";
                    } else {
                        document.getElementById("navbar").style.top = "-50px";
                    }
                    prevScrollpos = currentScrollPos;
                }
            });
        </script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            li{margin-top: 5px;}
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #navbar {
                background-color: #fffff; /* Black background color */
                position: fixed; /* Make it stick/fixed */
                top: 0; /* Stay on top */
                width: 100%; /* Full width */
                transition: top 0.3s; /* Transition effect when sliding down (and up) */
            }

            /* Style the navbar links */
            #navbar a {
                float: left;
                display: block;
                color: black;
                text-align: center;
                //padding: 15px;
                text-decoration: none;
            }


        </style>  
    </head>

    <body id="myPage">
        <div class="flex-center position-ref full-height wrapper">
            <div class="w3-top">
                <!-- Navbar -->

                <div class="w3-bar w3-left-align " id="navbar" >
                    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white " href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                    <a href="#" class="w3-bar-item w3-button w3-white"><img src={{asset('/ActonLogo.png')}} alt="LOGO"  height="30"  > </a>
                    <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About Us</a>
                    <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
                    <a href="#services" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Services</a>
                    <a href="#testimonials" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Testimonials</a>
                    <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact Us</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
                </div>
                <!-- Navbar on small screens -->
                <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
                    <a href="#about" class="w3-bar-item w3-button">About Us</a>
                    <a href="#team" class="w3-bar-item w3-button">Team</a>
                    <a href="#services" class="w3-bar-item w3-button">Services</a>
                    <a href="#testimonials" class="w3-bar-item w3-button">Testimonials</a>
                    <a href="#contact" class="w3-bar-item w3-button">Contact Us</a>
                </div>
            </div>
            <div class="w3-middle ">            
              
                <img src={{asset('/corporatemeeting.jpg')}} alt="banner" style="min-width:1150px;max-width:1150px;min-height:600px;max-height:600px;"/>
                
                <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
                    <button onclick="document.getElementById('id01').style.display = 'block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">Learn about our App</button>
                </div>
            </div>

        </div>

        <!-- About Us Row -->
        <div class="w3-row-padding w3-center w3-padding-64" id="about">

            <h2>About Us</h2>
            <div class="w3-container w3-center">
                <p class="flex-center">
                    Acton Corporate Services Limited was incorporated on April 5, 2011.  
                    It was founded by Judi-ann Campbell, a Fellow of the Institute of Chartered Secretaries who holds an LLB.  
                    Our Company has been offering the highest quality professional Corporate Services to the business community of Barbados and the wider world from the year 2000.  
                </p>
            </div>
            <h3>Our Pledge</h3>
            <div class="w3-half w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li> <i class="fa fa-check"></i> To strengthen our business relationship</li> 
                    <li> <i class="fa fa-check"></i> To serve you with honesty and integrity</li>
                    <li> <i class="fa fa-check"></i> To continually offer quality service</li>
                    <li> <i class="fa fa-check"></i> To listen to you and find solutions to meet your needs</li>
                    <li> <i class="fa fa-check"></i> To always be professional and courteous</li>
                    <li> <i class="fa fa-check"></i> To complete assignments in a timely manner</li>
                    <li> <i class="fa fa-check"></i> To provide clear and concise information</li> 
                </ul>
            </div>
            <div class="w3-half w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li> <i class="fa fa-check"></i> To continually look for ways to enhance our customer service</li>
                    <li> <i class="fa fa-check"></i> To meet and/or exceed your expectations</li>
                    <li> <i class="fa fa-check"></i> To return calls in a timely manner</li>
                    <li> <i class="fa fa-check"></i> To meet deadlines set with you</li>
                    <li> <i class="fa fa-check"></i> To work on the project until our client states that they are satisfied</li>
                    <li> <i class="fa fa-check"></i> To keep your information strictly confidential</li>
                    <li> <i class="fa fa-check"></i> To always charge a fair value for the services or products we provide</li>  
                </ul>
            </div>
        </div>

        <!-- Team Container -->
        <div class="w3-container w3-padding-190 w3-center" id="team">
            <h2>Team Acton</h2>
            <div class="w3-row">

                <div class="w3-half">
                    <img src={{asset('/corporatewoman.jpg')}} alt="" style="width:45%" class="w3-circle w3-hover-opacity"/>
                    <h3>Judi-Ann Campbell</h3>
                    <p>Founder CEO</p>
                </div>

                <div class="w3-half">
                    <img src={{asset('/corporatewoman.jpg')}} alt="" style="width:45%" class="w3-circle w3-hover-opacity"/>
                    <h3>Liz Ward </h3>
                    <p>Partner</p>
                </div>
            </div>
        </div>

        <!--Services-->
        <div class="w3-row-padding w3-center w3-padding-64" id="services">
            <h2>Services</h2> 
            <div class="w3-half w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li>Incorporation of Companies</li>
                    <li>Advising the clients on best corporate practices to setting up their corporate structure</li>
                    <li>Attending Board and Shareholder Meetings</li>
                    <li>Preparing minutes</li>
                    <li>Requesting and obtaining Certificate of Good Standing</li>
                    <li>Providing corporate advice to the Directors</li>
                    <li>Trademarks</li> 
                    <li>Obtaining Certified Copies of Corporate Documents</li>
                    <li>Conducting Company searches</li> 
                    <li>Preparation of Notices for board meetings</li>
                    <li>Attending quarterly meetings of the Audit Committee and the Board of Directors</li>
                </ul>
            </div>
            <div class="w3-half w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li>Attendance at the Annual Meeting</li>
                    <li>Any other corporate duties that may arise from time to time in preparation of the quarterly meetings.</li> 
                    <li>Providing when required corporate advice for statutory requirements</li>
                    <li>Maintenance of the minute book and statutory registers</li>
                    <li>Signing documents requiring the signature of the Secretary</li>
                    <li>Guiding Companies to ensure that Regliatory or Compliant Insurance issues are complied with by the Company</li>
                    <li>Preparing board resolutions or secretarial certificates which may be required from time to time</li>
                    <li>Making the necessary provisions for dividend distribution</li>
                    <li>Acting as named Secretary and as such ensuring good corporate governance through ongoing company secretarial practice.</li> 
                    <li>Preparation of Corporate Annual Returns.</li>
                    <li>Providing other Corporate Secretarial Services</li>
                </ul>
            </div>
        </div>

        <!--Testimonials-->
        <div class="w3-container w3-padding-190 w3-center" id="testimonials">
            <h2>Testimonials</h2> 
        </div>

        <!-- Contact Container -->
        <div class="w3-container w3-padding-64" id="contact">
            <div class="w3-row">
                <div class="w3-col m5">
                    <div class="w3-padding-16"><span class="w3-large">Contact Us</span></div>
                    <h4>Address</h4>
                    <p><i class="fa fa-map-marker w3-text-teal w3-large"></i> 26-27 Newton Terrace</p>
                    <p>Christ Church, BB17073</p>
                    <p>Barbados</p>
                    <p><i class="fa fa-phone w3-text-teal w3-medium"> (246) 418-9741 </i> </p>
                    <p><i class="fa fa-phone w3-text-teal w3-medium"> (246) 231-0358 </i> </p>
                    <p><i class="fa fa-envelope-o w3-text-teal w3-medium"></i>  test@test.com</p>
                </div>
                <div class="w3-col m7">
                    <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                        <div class="w3-section">      
                            <label>Name</label>
                            <input class="w3-input" type="text" name="Name" required>
                        </div>
                        <div class="w3-section">      
                            <label>Email</label>
                            <input class="w3-input" type="text" name="Email" required>
                        </div>
                        <div class="w3-section">      
                            <label>Message</label>
                            <input class="w3-input" type="text" name="Message" required>
                        </div>  
                        <input class="w3-check" type="checkbox" checked name="Like">
                        <label>I Like it!</label>
                        <button type="submit" class="w3-button w3-right w3-theme">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-container w3-padding-32 w3-center">
            <h4>Follow Us</h4>
            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
            <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
            <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
            <p>Powered by <a href="https://www.kitjistudios.com" target="_blank">Kitji Studios</a></p>

            <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
                <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
                <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
                        <i class="fa fa-chevron-circle-up"></i></span></a>
            </div>
        </footer>

        <script>
            // Used to toggle the menu on smaller screens when clicking on the menu button
            function openNav() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>

    </body>
</html>
