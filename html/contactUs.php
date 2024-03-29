<html lang="en">
	<head>
        <meta charset="utf-8">
            <title>Artesano</title>
            <script type="text/javascript" src="../JS/scripts/jquery-3.3.1.js"></script>   
            <link rel="stylesheet" type="text/css" href="../css/contactUs.css" />
            <link href="https://fonts.googleapis.com/css?family=Montserrat|Tangerine" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
        <body>    
            <div class="background">
                    <div class="transbox">
                            <p id="year">Est. 1918</p>
                            <header id="header">
                                    <div class="container">
                                             <i class="fa fa-facebook fa-2x"></i>
                                             <i class="fa fa-twitter fa-2x"></i>
                                             <i class="fa fa-instagram fa-2x"></i>
                                    </div>
                                 <div id="logo">
                                        <img src="../images/logo.png" alt="Artesano Logo" width="10%" height="10%">
                                    </div>
                            </header>

                <div class="allDropDowns">
                    <div class="dropdown">
                        <a href="../index.php"><button class="dropbtn">Home</button></a>
                        </div>
                <div class="dropdown">
                        <a href="aboutUs.php"><button class="dropbtn">About Us</button></a>
                        <div class="dropdown-content">
                          <a href="contactUs.php">Contact Us</a>
                          <a href="locations.php">Locations</a>
                          <a href="careers.php">Careers</a>
                          <a href="sitemap.php">Site Map</a>
                        </div>
                      </div>
                      <div class="dropdown">
                            <a href="menu.php"><button class="dropbtn">Menu</button></a>
                            <div class="dropdown-content">
                              <a href="specials.php">Specials</a>
                            </div>
                          </div>
                          <div class="dropdown">
                                <a href="eventsBooking.php"><button class="dropbtn">Events/Booking</button></a>
                                <div class="dropdown-content">
                                  <a href="contest1.php">Contest</a>
                                  <a href="giftCards.php">Gift Cards</a>
                                </div>
                              </div>
            
                            </div>
                            </div>
                        </div>
                        <div class="transbox">
                            <!--enter your content here-->
                            <main id="main">
		
                                    <div class="flex-container">
                                        <div class="column">
                                            <h3>Address</h3>
                                            <p> 200 Front Street</p>
                                            <p> Toronto</p>
                                            <p> Ontario</P>
                                            <p> M5J 1E3</p>
                                            <p> TEL + 1 416 368 2511 </p>
                                            <p> FAX + 416 368 9040 </p>
                                            <a href="#">International Numbers</a>
                                            <a href="#">Info@ArtisanoFront.com</a>
                                        </div>
                                        <div class="column">
                                            <h3>Hours of Operation</h3>
                                            <p>Lunch (Monday-Friday)</p>
                                            <p>12:00 p.m. — 2:00 p.m.</p>
                                            <p>Dinner (Tuesday-Saturday)</p>
                                            <p>5:30 p.m. — 9:30 p.m.</p>
                                            <p>Bar (Tuesday-Saturday)</p>
                                            <p>5:00 p.m. — Close</p>
                                            <p>Sunday – Closed</p>
                                        </div>
                                        <div class="column">
                                            <h3>Holiday Hours</h3>
                                            <p>Closed:</p>
                                            <p>December 23–26, 2018	</p>				
                                            <p>January 1–3, 2019</p>
                                            <p>Open for Dinner: </p>
                                            <p><p>December 27– 31, 2018</p>
                                            <p>January 4–5, 2019</p>
                                        </div>
                                    </div>
                                        
    
                    
                                    <h1 id="contact">Contact Us:</h1>
                                        <!--CONTACT US FORM-->
                                    <section id="contact-form">
                                        <h2 class="hidden">contact us form</h2>
                                        <form method="post" action="#" id="contactUs" name="contact_Us">
                                            <div  class="cust-Info">
                                                <label for="name"class="hidden" >Full Name:</label>
                                                <input type="text"  id="in_Name" name="full_Name"  placeholder="Full Name"/>
                                            </div>
                                            <div class="cust-Info">
                                                <label for="phone-no" class="hidden">Phone Number:</label>
                                                <input type="text"  id="in-Phone" name="phone_Num"  placeholder="Phone Number"/>
                                            </div>
                                            <div class="cust-Info">
                                                <label for="email" class="hidden">Email:</label>
                                                <input type="text" id="in-Email" name="email" placeholder="Email" />
                                            </div>
                                        
                                            <div>
                                                <label for="message" class="hidden">Message:</label>
                                                <input type="text" id="in-Message" name="message" placeholder="Comments"/>
                                            </div>
                                            <div>   
                                                <button type="submit" id="submit" name="submit">Submit</button>
                                            </div>
                            
                    
                                            </form>
                                            <!--#### OUTPUT MESSAGE (HIDDEN UNTIL FORM VALIDATES) #### -->
                                            <!--<div id="errorMessages">
                                                <h3> Please Enter <span id="errorMessages"></span></h3>
                                            </div>-->
                                            <div id="thanks_msg">
                                                <h3>Thank you <span id="thanksCustomer"></span> for your feedback!</h3>
                                                
                                            </div>
                                        
                                        
                                        
                                  
                                    </section>
                                
                                </main>
                        



                        </div>
                        
                                               
                                       
                                    
                                  
                        
                <script type="text/javascript" src="../JS/contactUs.js"></script> 
            <footer>
                &copy; Programming Guru's, 2018.
            </footer>
        </body>
</html>