<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device, initial-scale=1.0"> <!-- needed when using media queries and adjusting to mobile screens -->
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">        
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">      
        <link rel="stylesheet" type="text/css" href="vendors/js/animate.css">      
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <title>Omnifood</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="resources/img/logo-white.png" alt="Omnifood Logo" class="logo">
                    <img src="resources/img/logo.png" alt="Omnifood Logo" class="logo-black"><!--making black logo for sticky nav since white blends in -->
<!--Navigation is normally used with ul and links-->
                    <ul class="main-nav js--main-nav">
                        <li><a href = "#features">Food Delivery</a></li> <!-- anchor is features which corresponds down below -->
                        <li><a href = "#works">How it Works</a></li>
                        <li><a href = "#cities">Our Cities</a></li>
                        <li><a href = "#plans">Signup</a></li>
                    </ul>
                    
                    <a class="mobile-nav-icon js--nav-icon"><i class="icon ion-ios-menu"></i></a>
                </div>
            
            </nav>
            <div class="hero-text-box">
                <h1>Goodbye junk food.<br> Hello super healthy meals.</h1>
                <!--Changed class names so we could reference in jquery-->
                <a class = "btn btn-full js--scroll-to-plans" href="#">I’m hungry</a>
                <a class = "btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
            </div>
            
        </header>
        
        <section class="section-features js--section-features" id="features"> <!-- Readjusted class name of section so we could reference it better in jquery and added anchor which is features -->
            <div class="row">
                
                <h2>Get food fast &mdash; not fast food.</h2> <!-- using a special character for the dash -->
                <p class="long-copy">Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!</p>
            </div>
            
            <div class="row js--wp-1">
                <div class="col span-1-of-4 box"> <!-- NEVER FORMAT CLASS FROM GRID. To get around this we create a new class. In this case box.-->
                    <i class="icon ion-ios-infinite icon-big"></i> <!-- Icons from ionicons -->
                    <h3>Up to 365 days/year</h3>
                    <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>
                </div> <!-- need to make columns for each section -->
                
                <div class="col span-1-of-4 box">
                    <i class="icon ion-ios-time icon-big"></i> <!-- Icons from ionicons -->
                    <h3>Ready in 20 minutes</h3>
                    <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
                </div> <!-- need to make columns for each section -->
                
                <div class="col span-1-of-4 box">
                    <i class="icon ion-ios-nutrition icon-big"></i> <!-- Icons from ionicons -->
                    <h3>100% organic</h3>
                    <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
                </div> <!-- need to make columns for each section -->
                
                <div class="col span-1-of-4 box">
                    <i class="icon ion-ios-cart icon-big"></i> <!-- Icons from ionicons -->
                    <h3>Order anything</h3>
                    <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
                </div> <!-- need to make columns for each section -->
            
            </div>
        
        </section>
        
        <section class="section-meals">
            <!--not using row because we want 100 % of broswers width-->
        
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
            
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
        </section>
        
        <section class="section-steps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/app-iPhone.png" alt="Omniphone app on Iphone" class="app-screen js--wp-2">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>
                
                <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="app store button"></a>
                <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store button"></a>
            </div>
            </div>
        </section>
        
        <section class="section-cities" id="cities">
            <div class="row">
                <h2>We're currently in these cities</h2>
            </div>
            <div class="row js--wp-3">
                <div class="col span-1-of-4 box">
                    <img src="resources/img/lisbon-3.jpg" alt="Lisbon">
                    <h3>Lisbon</h3>
                    <div class="city-feature">
                        <i class="icon ion-ios-person icon-small"></i> <!-- Icons from ionicons -->
                        1600+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-ios-star icon-small"></i> <!-- Icons from ionicons -->
                        60+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-logo-twitter icon-small"></i> <!-- Icons from ionicons -->
                        <a href="#">@omnifood_lx</a>
                    </div>
                    
                </div>
                
                <div class="col span-1-of-4 box">
                    <img src="resources/img/san-francisco.jpg" alt="San Francisco">
                    <h3>San Francisco</h3>
                    <div class="city-feature">
                        <i class="icon ion-ios-person icon-small"></i> <!-- Icons from ionicons -->
                        3700+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-ios-star icon-small"></i> <!-- Icons from ionicons -->
                        160+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-logo-twitter icon-small"></i> <!-- Icons from ionicons -->
                        <a href="#">@omnifood_sf</a>
                    </div>
                    
                </div>
                
                <div class="col span-1-of-4 box">
                    <img src="resources/img/berlin.jpg" alt="Berlin">
                    <h3>Berlin</h3>
                    <div class="city-feature">
                        <i class="icon ion-ios-person icon-small"></i> <!-- Icons from ionicons -->
                        2300+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-ios-star icon-small"></i> <!-- Icons from ionicons -->
                        110+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-logo-twitter icon-small"></i> <!-- Icons from ionicons -->
                        <a href="#">@omnifood_berlin</a>
                    </div>
                    
                </div>
                
                <div class="col span-1-of-4 box">
                    <img src="resources/img/london.jpg" alt="London">
                    <h3>London</h3>
                    <div class="city-feature">
                        <i class="icon ion-ios-person icon-small"></i> <!-- Icons from ionicons -->
                        1200+ happy eaters
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-ios-star icon-small"></i> <!-- Icons from ionicons -->
                        50+ top chefs
                    </div>
                    <div class="city-feature">
                        <i class="icon ion-logo-twitter icon-small"></i> <!-- Icons from ionicons -->
                        <a href="#">@omnifood_london</a>
                    </div>
                    
                </div>
            </div>
        </section>
        
        <section class="section-testimonials">
            <div class="row">
                <h2>Our customers can't live without us</h2>
            </div>
            
            <div class="row">
                <div class="col span-1-of-3">
                    <blockquote>Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                    <cite><img src="resources/img/customer-1.jpg" alt="Alberto Duncan">Alberto Duncan</cite>
                    </blockquote>
                </div> 
                
                <div class="col span-1-of-3">
                    <blockquote>Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                    <cite><img src="resources/img/customer-2.jpg" alt="Joana Silva">Joana Silva</cite>
                    </blockquote>
                </div>
                
                <div class="col span-1-of-3">
                    <blockquote>I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                    <cite><img src="resources/img/customer-3.jpg" alt="Milton Chapman">Milton Chapman</cite>
                    </blockquote>
                </div>
                
            </div>
            
        </section>
        
        <section class="section-plans js--section-plans" id="plans">
            <div class="row">
                <h2>Start eating healthy today</h2>
            </div>
            <div class="row">
                <!--Premium Plan-->
                <div class="col span-1-of-3">
                    <div class="plan-box js--wp-4">
                        <!--Price-->
                        <div>
                            
                            <h3>Premium</h3>
                            <p class="plan-price">$399 <span>/ month</span></p>
                            <p class="plan-price-meal">That's only 13.30$ per meal</p>
                        </div>
                        <!--Details-->
                        <div>
                            <ul>
                                <li><i class="icon ion-ios-checkmark icon-small"></i>1 meal every day</li>
                                <li><i class="icon ion-ios-checkmark icon-small"></i> Order 24/7</li>
                                <li><i class="icon ion-ios-checkmark icon-small"></i> Access to newest creations</li>
                                <li><i class="icon ion-ios-checkmark icon-small"></i> Free delivery</li>
                            </ul>
                        </div>
                        <!--Sign up button-->
                        <div>
                            <a href="#" class="btn btn-full">Sign up now</a>
                        </div>
                        
                    </div>
                </div>
                <!--Pro Plan-->
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <!--Price-->
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">$149 <span>/ month</span></p>
                            <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                        </div>
                        <!--Details-->
                        <div>
                            <ul>
                                <li><i class="icon ion-ios-checkmark icon-small"></i>1 meal 10 days/month</li>
                                <li><i class="icon ion-ios-checkmark icon-small"></i> Order 24/7</li>
                                <li><i class="icon ion-ios-checkmark icon-small"></i> Access to newest creations</li>
                                <li><i class="icon ion-ios-checkmark icon-small"></i> Free delivery</li>
                            </ul>
                        </div>
                        <!--Sign up button-->
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                        
                    </div>
                </div>
                <!--Starter Plan-->
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <!--Price-->
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">$19 <span>/ meal</span></p>
                            <p class="plan-price-meal">&nbsp;</p><!--This adds a space so we force the bottom border line-->
                        </div>
                        <!--Details-->
                        <div>
                            <ul>
                                <li><i class="icon ion-ios-checkmark icon-small"></i>1 meal </li>
                                <li><i class="icon ion-ios-checkmark icon-small"></i> Order from 8 am to 12 pm</li>
                                <li><i class="icon ion-ios-close icon-small"></i></li>
                                <li><i class="icon ion-ios-checkmark icon-small"></i> Free delivery</li>
                            </ul>
                        </div>
                        <!--Sign up button-->
                        <div>
                            <a href="#" class="btn btn-ghost">Sign up now</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section-form" id="form">
            <div class="row">
            <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form method="post" action="mailer.php" class="contact-form"><!--Form element-->

                    <div class="row">

                        <?php
                            if($_GET['success']== 1){
                                echo "<div class=\"form-messages success\">
                                Thank you! Your message has been sent.</div>"
                        }
                            if($_GET['success']== -1){
                                echo "<div class=\"form-messages error\">
                                Oops! Something went wrong. Please try again!</div>"
                        }
                        

                       
                        ?>
                        

                    </div>
                    <div class="row">

                        
                        
                        <div class="col span-1-of-3">
                            <label for="name">Name</label><!-- Label element. For attribute allows you to select form input with corresponding id-->
                        </div>
                        
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your Name" required><!-- textbox with placeholder and also lets browser know its required before sending-->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label><!-- Label element. For attribute allows you to select form input with corresponding id-->
                        </div>
                        
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required><!-- email textbox with placeholder and also lets browser know its required before sending-->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label><!-- Label element. For attribute allows you to select form input with corresponding id-->
                        </div>
                        
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us"><!-- Select used for dropdown. then use option element for options -->
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option> <!-- Selected makes this option the first one to be selected -->
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="news">Newsletter</label><!-- Label element. For attribute allows you to select form input with corresponding id-->
                        </div>
                        
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please <!-- checkbox with checked from beginning-->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label><!-- Label element -->
                        </div>
                        
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea><!-- memobox with placeholder-->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label><!-- Label element -->
                        </div>
                        
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!"> <!-- Submit button-->
                        </div>
                    </div>
                </form>
            
            </div>
        </section>
    
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                        <li><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                        <li><a href="#"><i class="icon ion-logo-googleplus"></i></a></li>
                        <li><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                    </ul>
                </div>
                
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2019 by Omnifood. All rights reserved.
                </p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script> <!-- Allows us to create a sticky nav after going through the features sections --> 
        <script src="resources/js/scripts.js"></script>
<!--Used to make sure older browsers can run media queries and use html 5 stuff-->
    </body>
    


</html>