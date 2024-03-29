<html lang="en">
	<head>
        <meta charset="utf-8">
            <title>Artesano</title>
            <script type="text/javascript" src="../JS/jquery-3.3.1.js"></script>   
            <link rel="stylesheet" type="text/css" href="../css/giftCards.css" />
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
                            <div id="form-wrapper">

                                    <form method="post" action="#"  name="recepients_form">
                                        <div id="card-theme-wrapper">
                                        <label for="giftcard-theme"> Select Gift Card Theme:</label>
                                        
                                        <select id="cardtype" name="card_type">
                                          <option name="card" value="birthday"> Birthday</option>
                                          <option name="card" value="anniversary">Anniversary</option>
                                          <option name="card" value="promotion">Promotion</option>
                                          <option name="card" value="graduation">Graduation</option>
                                        </select>
                                        </div>
                                        <div id="gift-card-wrapper">
                                            <label for="name" >Select Gift Card Amount:</label>
                                            <select>				
                                              <option value="gift-card1">25</option>
                                              <option value="gift-card2">50</option>
                                              <option value="gift-card3">75</option>
                                              <option value="gift-card4">100</option>
                                            </select>
                                        </div>
                                        
                                        
                                        
                <!--CONTACT US FORM-->
                                        <section id="giftcard-form">
                                            <h2> Please fill out the fields below:</h2>
                                            
                                            
                                                <div  class="cust-Info">
                                                    <label for="name"class="hidden" >Full Name:</label>
                                                    <input type="text"  id="in_Name" name="full_Name"  placeholder="Full Name"/>
                                                </div>
                                                
                                                <div class="cust-Info">
                                                    <label for="email" class="hidden">Email:</label>
                                                    <input type="text" id="in-Email" name="email" placeholder="Email" />
                                                </div>
                                            
                                                <div>
                                                    <label for="message" class="hidden">Message:</label>
                                                    <input type="text" id="in-Message" name="message" placeholder="Message"/>
                                                </div>
                                                <div>   
                                                    <button type="submit" id="submit" name="submit">Submit</button>
                                                </div>
                                        </section>
                                    </form>
                                
                    
                                            
                                            
                                            <div id="thanks_msg">
                                        
                                                <h3>Thank you <span id="thanksCustomerName"></span>for ordering a gift card. your e-card is emailed to <span id="thanksCustomerEmail"></span> </h3>
                                                
                                            </div>



                        </div>
                        </div>
                                               
                                       
                                    
                                  
                        
                <script type="text/javascript" src="../JS/giftCards.js"></script> 
            <footer>
                &copy; Programming Guru's, 2018.
            </footer>
        </body>
</html>