<html lang="en">
	<head>
        <meta charset="utf-8">
            <title>Artesano</title>
            <script type="text/javascript" src="../JS/jquery-3.3.1.js"></script>   
            <link rel="stylesheet" type="text/css" href="../css/careers.css" />
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
                        <div class="background">
                                <div class="transbox1">
                                        <div class="jobs">
                                                <h1><span id="artesano">Artesano</span> is now hiring!</h1>
                                                    <div>
                                                        <h2>Location: 200 Front Street, Toronto, Ontario</h2>
                                                        <h2>Click on a position to fill out an application:</h2>
                                                        <h3><button class="dropbtn">Host/Hostess</button></h3>
                                                                <form action="careersApplication" method="post" id="hostHostess"> 
                                                                        <label for="fname">First Name:</label>
                                                                        <input type="text" id="fnameHost" name="firstname" placeholder="e.g. Twen">
                                                                    
                                                                        <label for="lname">Last Name:</label>
                                                                        <input type="text" id="lnameHost" name="lastname" placeholder="e.g. Mehretab">
                
                                                                        <label for="email">Email:</label>
                                                                        <input type="text" id="emailHost" name="emailAddress" placeholder="e.g. twen@gmail.com">
                                                                    
                                                                        <label for="phone">Phone Number:</label>
                                                                        <input type="text" id="phoneHost" name="phoneNumber" placeholder="e.g. (123) 456-7890">
                
                                                                        
                                                                        <input type="submit" class="submit" value="Apply!">
                                                                        
                                                                      </form>
                                                                      <div id="applyMsg1">
                                                                            <h4>Thank you for applying!</h4>
                                                                            
                                                                        </div>
                                                                        <div id="errorMsg1">
                                                                            <h5>Error!</h5>
                                                                        </div>
                                                                    </div>
                                                        <div>
                                                            <h3><button class="dropbtn">Chef</button></h3>
                                                            <form action="careersApplication" method="post" id="chef"> 
                                                                    <label for="fname">First Name:</label>
                                                                    <input type="text" id="fnameChef" name="firstname" placeholder="e.g. Twen">
                                                                    <!--for automatic validation, insert the word required next to 
                                                                        name="firstname", and when the user clicks submit, it'll 
                                                                        prompt the user to fill in that field-->
                                                                
                                                                    <label for="lname">Last Name:</label>
                                                                    <input type="text" id="lnameChef" name="lastname" placeholder="e.g. Mehretab">
            
                                                                    <label for="email">Email:</label>
                                                                    <input type="text" id="emailChef" name="emailAddress" placeholder="e.g. twen@gmail.com">
                                                                
                                                                    <label for="phone">Phone Number:</label>
                                                                    <input type="text" id="phoneChef" name="phoneNumber" placeholder="e.g. (123) 456-7890">
            
                                                                
                                                                    <input type="submit" class="submit" value="Apply!">
                                                                
                                                                  </form>

                                                                  <div id="applyMsg2">
                                                                        <h4>Thank you for applying!</h4>
                                                                        
                                                                    </div>
                                                                    <div id="errorMsg2">
                                                                        <h5>Error!</h5>
                                                                    </div>
                                                            
                                                    
                                                        </div>
                                   </div>
                                                </div>
                                       
                                    </div>
                                    
                        
                <script type="text/javascript" src="../JS/careers.js"></script> 
            <footer>
                &copy; Programming Guru's, 2018.
            </footer>
        </body>
</html>