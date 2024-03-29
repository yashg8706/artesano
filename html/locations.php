<!--
  Developed by:- Yash Gandhi
  Purpose:- Locations of restaurent using integretion of google map api.
-->
<html lang="en">
	<head>
        <meta charset="utf-8">
            <title>Artesano</title>
            <script type="text/javascript" src="../JS/jquery-3.3.1.js"></script>   
            <link rel="stylesheet" type="text/css" href="../css/locations.css" />
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
                            <div class="wrapper">
                                    <main>
                                      <h1>Here We Are...</h1>
                                      <section class="restaurant border" id="location-1">
                                        <div class="flex-container">
                                          <h2>Annex</h2>
                                          <iframe class="map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIhbDXNxmbEGHXBEvaq0tFmYOYXxkJXNE&q=Metro+Toronto+Convention+Centre,Toronto+ON" frameborder="0" style="border:0"></iframe>
                                          <!-- <img class="map border" src="images/Location1-Map.jpg" alt="Map of the restaurant location in the Annex"/> -->
                                          <img class="storefront border" src="../images/image.png" alt="Storefront entrance of the restaurant"/>
                                          <!--Original photo (https://unsplash.com/search/photos/restaurent/)-->
                                        </div>
                                        <div class="details flex-container border">
                                          <div class="border">
                                            <a class="button border" target="blank" href="https://www.google.ca/maps/dir//Metro+Toronto+Convention+Centre,+255+Front+St+W,+Toronto,+ON+M5V+2W6/@43.6449394,-79.3883397,17z/data=!3m1!5s0x882b34d4183fb333:0x98da98a40a192145!4m16!1m6!3m5!1s0x0:0x3207662d503e969f!2sMetro+Toronto+Convention+Centre!8m2!3d43.6438288!4d-79.3867893!4m8!1m0!1m5!1m1!1s0x882b34d6bbf1de83:0x3207662d503e969f!2m2!1d-79.3867892!2d43.6438286!3e3" title="Get directions to our Annex location">Get Directions</a>
                                          </div>
                                          <!--to make href go to https://developers.google.com/maps/documentation/embed/guide#forming-the-url -->
                                          <div class="border contact">
                                            <span>200 Front Street</span>Toronto, Ontario, M5J 1E3
                                            <p><a href="tel: 14163682511" target="blank"> TEL +1-416-368-2511</a></p>
                                            <p><a href="fax: 14163689040" target="blank"> FAX +1-416-368-9040</a></p>
                                            <p><a href="mailto:Info@ArtisanoFront.com" target="blank">Info@ArtisanoFront.com</a></p>
                                          </div>
                                          <table class="border">
                                            <tr>
                                              <th>Monday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tuesday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Wednesday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tursday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Friday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Saturday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Sunday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </section>
                                      <hr>
                                      <section class="restaurant" id="location-2">
                                        <div class="flex-container">
                                          <h2>Venice</h2>
                                          <iframe class="map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIhbDXNxmbEGHXBEvaq0tFmYOYXxkJXNE&q=Rialto+Bridge"frameborder="0" style="border:0"></iframe>
                                          
                                          <img class="storefront border" src="../images/image.png" alt="Storefront entrance of the restaurant"/>
                                          <!--Original photo (https://unsplash.com/search/photos/restaurent/)-->
                                          </div>
                                        <div class="details flex-container border">
                                          <div class="border">
                                            <a class="button border" target="blank" href="https://www.google.ca/maps/dir//Rialto+Bridge,+Sestiere+San+Polo,+30125+Venezia+VE,+Italy/@45.4299982,12.3289411,14z/data=!4m16!1m6!3m5!1s0x477eb1c7faa33a3b:0x732011a1298ecc89!2sRialto+Bridge!8m2!3d45.4379832!4d12.3358977!4m8!1m0!1m5!1m1!1s0x477eb1c7faa33a3b:0x732011a1298ecc89!2m2!1d12.335898!2d45.4379842!3e3" title="Get directions to our Venice location">Get Directions</a>
                                          </div>
                                          <!--to make href go to https://developers.google.com/maps/documentation/embed/guide#forming-the-url -->
                                          <div class="border contact">
                                            <span>Rialto Bridge</span>Venezia VE, Italy
                                            <p><a href="tel: 14163682511" target="blank"> TEL +1-416-368-2511</a></p>
                                            <p><a href="fax: 14163689040" target="blank"> FAX +1-416-368-9040</a></p>
                                            <p><a href="mailto:Info@ArtisanoFront.com" target="blank">Info@ArtisanoFront.com</a></p>
                                          </div>
                                          <table class="border">
                                            <tr>
                                              <th>Monday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tuesday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Wednesday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tursday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Friday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Saturday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Sunday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </section>
                                      <hr>
                                      <section class="restaurant" id="location-3">
                                        <div class="flex-container">
                                          <h2>Madison Square</h2>
                                          <iframe class="map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIhbDXNxmbEGHXBEvaq0tFmYOYXxkJXNE&q=Madison+Square+Park"frameborder="0" style="border:0"></iframe>
                                          <img class="storefront border" src="../images/image.png" alt="Storefront entrance of the restaurant"/>
                                          <!--Original photo (https://unsplash.com/search/photos/restaurent/)-->
                                        </div>
                                        <div class="details flex-container border">
                                          <div class="border">
                                            <a class="button border" target="blank" href="https://www.google.ca/maps/place/Madison+Square+Park/@40.7415154,-73.9891564,17z/data=!4m5!3m4!1s0x89c259a6bd917da7:0x79997d3983197d7c!8m2!3d40.742037!4d-73.9875636" title="Get directions to our Madison Square location">Get Directions</a>
                                          </div>
                                          <!--to make href go to https://developers.google.com/maps/documentation/embed/guide#forming-the-url -->
                                          <div class="border contact">
                                            <span>Madison Square</span>New York, USA
                                             <p><a href="tel: 14163682511" target="blank"> TEL +1-416-368-2511</a></p>
                                            <p><a href="fax: 14163689040" target="blank"> FAX +1-416-368-9040</a></p>
                                            <p><a href="mailto:Info@ArtisanoFront.com" target="blank">Info@ArtisanoFront.com</a></p>
                                          </div>
                                          <table class="border">
                                            <tr>
                                              <th>Monday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tuesday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Wednesday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tursday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Friday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Saturday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Sunday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </section>
                                      <hr>
                                      <section class="restaurant" id="location-4">
                                        <div class="flex-container">
                                          <h2>Av. Isaac Newton</h2>
                                          <iframe class="map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIhbDXNxmbEGHXBEvaq0tFmYOYXxkJXNE&q=Quintonil"frameborder="0" style="border:0"></iframe>
                                         
                                          <img class="storefront border" src="../images/image.png" alt="Storefront entrance of the restaurant"/>
                                           <!--Original photo (https://unsplash.com/search/photos/restaurent/)-->
                                        </div>
                                        <!--to make href go to https://developers.google.com/maps/documentation/embed/guide#forming-the-url -->
                                        <div class="details flex-container border">
                                          <div class="border">
                                            <a class="button border" target="blank" href="https://www.google.ca/maps/place/Quintonil/@19.4308557,-99.1938909,17z/data=!3m1!4b1!4m5!3m4!1s0x85d201ff65042f6d:0xada8294307fc00c3!8m2!3d19.4308557!4d-99.1917022" title="Get directions to our Av. Isaac Newton location">Get Directions</a>
                                          </div>
                                          <div class="border contact">
                                            <span>Av. Isaac Newton location</span>CDMX, Maxico
                                            <p><a href="tel: 14163682511" target="blank"> TEL +1-416-368-2511</a></p>
                                            <p><a href="fax: 14163689040" target="blank"> FAX +1-416-368-9040</a></p>
                                            <p><a href="mailto:Info@ArtisanoFront.com" target="blank">Info@ArtisanoFront.com</a></p>
                                          </div>
                                          <table class="border">
                                            <tr>
                                              <th>Monday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tuesday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Wednesday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tursday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Friday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Saturday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Sunday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </section>
                                      <hr>
                                      <section class="restaurant" id="location-5">
                                        <div class="flex-container">
                                          <h2>25 Avenue Montaigne</h2>
                                          <iframe class="map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAIhbDXNxmbEGHXBEvaq0tFmYOYXxkJXNE&q=Alain+Ducasse+au+Plaza+Ath%C3%A9n%C3%A9e"frameborder="0" style="border:0"></iframe>
                                        
                                          <img class="storefront border" src="../images/image.png" alt="Storefront entrance of the restaurant"/>
                                           <!--Original photo (https://unsplash.com/search/photos/restaurent/)-->
                                        </div>
                                        <div class="details flex-container border">
                                          <div class="border">
                                            <a class="button border" target="blank" href="https://www.google.ca/maps/place/Alain+Ducasse+au+Plaza+Ath%C3%A9n%C3%A9e/@48.8661967,2.3020254,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66fdcc0df35ef:0x4a8e0cfc65675fcb!8m2!3d48.8661932!4d2.3042141" title="Get directions to our Avenue Montaigne location">Get Directions</a>
                                          </div>
                                          <!--to make href go to https://developers.google.com/maps/documentation/embed/guide#forming-the-url -->
                                          <div class="border contact">
                                            <span>25 Avenue Montaigne</span>Paris, France,
                                            <p><a href="tel: 14163682511" target="blank"> TEL +1-416-368-2511</a></p>
                                            <p><a href="fax: 14163689040" target="blank"> FAX +1-416-368-9040</a></p>
                                            <p><a href="mailto:Info@ArtisanoFront.com" target="blank">Info@ArtisanoFront.com</a></p>
                                          </div>
                                          <table class="border">
                                            <tr>
                                              <th>Monday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tuesday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Wednesday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Tursday</th>
                                              <td>11:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Friday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>10:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Saturday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                            <tr>
                                              <th>Sunday</th>
                                              <td>09:00 am</td>
                                              <td> to </td>
                                              <td>11:00 pm</td>
                                            </tr>
                                          </table>
                                        </div>
                                      </section> 
                                    </main>
                                  </div> 
                                </div>       
                <script type="text/javascript" src="../JS/locations.js"></script> 
            <footer>
                &copy; Programming Guru's, 2018.
            </footer>
        </body>
</html>