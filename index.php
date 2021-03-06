<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="script.js"></script>

        <link rel="shortcut icon" type="image/png" href="img/favicon2.png">
        
        <title>GOTAXI | Your traveling companion</title>
    </head>
    <body>
        <header class="header">
           <a id="home"></a>
            <div class="header__logo-box">
                <img src="img/favicon2.png" alt="logo" class="header__logo">
            </div>


            <?php
              if(isset($_SESSION['adminlogged'])) {   //check if admin logged in
                  echo '<a href="includes/logout.inc.php" class="btn btn--white btn--animated header-btn-1"><p class="log-btn">LogOut</p></a>';

                  echo '<a href="#" class="btn btn--white btn--animated header-btn-1"><p class="log-btn">Admin</p></a>';
                  echo '<a href=panel.php class="btn btn--white btn--animated header-btn-1"><p class="log-btn">Options</p></a>';


              }else{
                if(isset($_SESSION['username'])) {   //check if user logged in
                echo '<a href="#" class="btn btn--white btn--animated header-btn-1"><p class="log-btn">'.$_SESSION['username'].'</p></a>';
                echo '<a href="includes/logout.inc.php" class="btn btn--white btn--animated header-btn-1"><p class="log-btn">LogOut</p></a>';

              }else{
                if(isset($_SESSION['usersigned'])){   //check if user signed in
                echo '<div>' . $_SESSION['usersigned'] . '</div>';
                echo '<script> alert("User SignedUp Successfully! Please Login! "); </script>';
                session_unset();
                session_destroy(); // user signup sessions destroyed 

                echo '<a href="#" class="btn btn--white btn--animated header-btn-1" onclick="document.getElementById(\'id02\').style.display=\'block\'"><p class="log-btn">Login</p></a>';
                }else{
                  echo '<a href="#" class="btn btn--white btn--animated header-btn-1" onclick="document.getElementById(\'id01\').style.display=\'block\'"><p class="log-btn">Sign up</p></a>';

                  echo '<a href="#" class="btn btn--white btn--animated header-btn-1" onclick="document.getElementById(\'id02\').style.display=\'block\'"><p class="log-btn">Login</p></a>';
                }
              }
              }
              
              
            ?>
            
            <div class="header__text-box">
                <h1 class="heading-primary">
                <span class="heading-primary--main"><span class="go">GO</span>TAXI</span>
                <span class="heading-primary--sub">Your traveling companion</span>
                </h1>
                
                <a href="#" class="btn btn--white btn--animated">Book your ride!</a>
                
            </div>
            
            
        </header>
        
        
        <main>
        <a id="options"></a>
        <section class="section-about" id="options">
           <div class="center-text center-margin-bottom">
                <h2 class="heading-secondary one">
                    Know your options!
                </h2>
                <p class="option">GOTAXI offers you a wide range of vehicles to choose,  ranging from the tiny Tuk-Tuk to the luxurious Sedans and also features a fleet more than 500 vehicles..</p>
                
                
        <div class="row">        
        <div class="slideshow-container">
           <div style="display: block" class="slides">     
               <div><img class="slider-image" src="img/Tuk.png"> </div>
               <h2 class="heading-secondary slider-h">Tuk</h2>
               <p class="slide-t">The friendly open air (non air conditioned) three wheeled taxi with a maximum passenger capacity of three, the TUK is a very common mode of transportation in our sunny island.</p>           
           </div>
           
           <div class="slides">            
               <div><img class="slider-image" src="img/Nano.png" > </div>
               <h2 class="heading-secondary slider-h">Nano</h2>
               <p class="slide-t">The budget friendly option for a four-wheeled, air-conditioned taxi, the NANO is a good travel choice for a maximum of 3 passengers. Not suitable for carrying heavy / large luggage.</p>
           </div>
           
           <div class="slides">
               <div><img class="slider-image" src="img/Mini.png"> </div>
               <h2 class="heading-secondary slider-h">Mini</h2>
               <p class="slide-t">A small and comfortable car (usually hatchback) suitable for a maximum of 3 passengers or 2 passengers with more than a few bags accompanying them.</p>    
           </div>
           
           <div class="slides">            
               <div><img class="slider-image" src="img/Car.png"> </div>
               <h2 class="heading-secondary slider-h">Car</h2>
               <p class="slide-t">A comfortable sedan with reasonable luggage space and the capacity to accommodate a maximum of 4 passengers. A economical option for a grand entrance.</p>              
           </div>
           
           <div class="slides">               
               <div><img class="slider-image" src="img/Van.png"> </div>
               <h2 class="heading-secondary slider-h">Van</h2>
               <p class="slide-t">With a capacity of a maximum of 12 passengers, this is the ideal mode of transport for those traveling in packs. The van is also a good choice for luggage transport.</p>  
           </div>
           
           <div class="slides"> 
               <div><img class="slider-image" src="img/VIP.png"> </div>
               <h2 class="heading-secondary slider-h">VIP</h2>
               <p class="slide-t">A luxury sedan of a world class brand like Mercedes BMW or AUDI , that can guarantee a grand entrance to a maximum of 4 passengers.</p>   
           </div>
            
           <a class="prev" onclick="plusIndex(-1)">&#10094;</a>
           <a class="next" onclick="plusIndex(+1)">&#10095;</a>  
        </div>
        
        
        <div style="text-align: center;">
            <span class="dots" onclick="currentslide(1)"></span>
            <span class="dots" onclick="currentslide(2)"></span>
            <span class="dots" onclick="currentslide(3)"></span>
            <span class="dots" onclick="currentslide(4)"></span>
            <span class="dots" onclick="currentslide(5)"></span>
            <span class="dots" onclick="currentslide(6)"></span>
        </div>
        </div>
                
                
                
                
                
                
                
                
           </div>
            
            
        </section>
        
        <section class="features">
        <div class="grid-container outline"> 
            <div class="row">
                <div class="col-2">
                    <img class="feature-img" src="img/24-hours2.png">
                    <h3 class="feature-head">24 hour service</h3>
                    <p class="feature-para">Day or night, we are here to take you to your destination</p>
                </div> 
                <div class="col-2">
                    <img class="feature-img" src="img/driver.png">
                    <h3 class="feature-head">Trained Staff</h3>
                    <p class="feature-para">Rest assured cause you'll have no worries in the safe hands of our staff</p>
                </div> 
                <div class="col-2">
                    <img class="feature-img" src="img/taxic.png">
                    <h3 class="feature-head">Quality Vehicles</h3>
                    <p class="feature-para">Ride in comfort with our well maintained fleet of vehicles</p>
                </div>
                <div class="col-2">
                    <img class="feature-img" src="img/price-tag1.png">
                    <h3 class="feature-head">Lowest Rates</h3>
                    <p class="feature-para">We provide the best service for the best rates in town.Guaranteed!</p>
                </div> 
            </div>  
        </div>
        </section>
        
        <section class="section-about-tours">
           <div class="center-text center-margin-bottom-1">
                <p class="option-tours">Explore Sri Lanka with our exclusive</p>
                <h2 class="heading-secondary-tours">
                    Tour packages
                </h2>
                
                
                <div class="row">
                 <a id="tours"></a>
                  <div class="column">
                    <div class="card">
                      <img class="tim" src="img/galle.jpg" alt="Jane" style="width:100%">
                       <p class="card-text">Galle</p>
                       <p id="yellow">7000 LKR / 250 Km</p>
                      <div class="container">
                        <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div>

                  <div class="column">
                    <div class="card">
                      <img class="tim" src="img/kandy.jpg" alt="kandy" style="width:100%">
                      <p class="card-text">Kandy</p>
                      <p id="yellow">8500 LKR / 250 Km</p>
                      <div class="container">
                       <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img class="tim" src="img/trinco.jpeg" alt="John" style="width:100%">
                      <p class="card-text">Trinco</p>
                       <p id="yellow">18000 LKR / 525 Km</p>
                      <div class="container">
                        <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img class="tim" src="img/apura.jpg" alt="John" style="width:100%">
                      <p class="card-text">Anuradhapura</p>
                       <p id="yellow">13500 LKR / 400 Km</p>
                      <div class="container">
                        <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div><div class="column">
                    <div class="card">
                      <img class="tim" src="img/nuel.jpg" alt="John" style="width:100%">
                      <p class="card-text">Nuwaraeliya</p>
                       <p id="yellow">12000 LKR / 350 Km</p>
                      <div class="container">
                        <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img class="tim" src="img/badulla.png" alt="John" style="width:100%">
                      <p class="card-text">Badulla</p>
                       <p id="yellow">16500 LKR / 500 Km</p>
                      <div class="container">
                        <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img class="tim" src="img/aru.jpg" alt="John" style="width:100%">
                      <p class="card-text">Arugambay</p>
                       <p id="yellow">21500 LKR / 700 Km</p>
                      <div class="container">
                        <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img class="tim" src="img/jaf.jpg" alt="John" style="width:100%">
                      <p class="card-text">Jaffna</p>
                       <p id="yellow">26000 LKR / 800 Km</p>
                      <div class="container">
                        <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="card">
                      <img class="tim" src="img/mat.jpg" alt="John" style="width:100%">
                      <p class="card-text">Matara</p>
                       <p id="yellow">11500 LKR / 300 Km</p>
                      <div class="container">
                        <a href="#" class="btn btn--white btn--animated second">Book your tour!</a>
                      </div>
                    </div>
                  </div>
                </div>
               
                
                
                
                
                
            </div>
            
        </section>
        
        <section class="testimo">
           <div class="bg-video">
               <video class="bg-vdeo-content" autoplay muted loop>
                   <!--<source src="img/Concrete_Jungle.webm" type="video/webm">-->
                   <source src="img/Yellow-Cars.mp4" type="video/mp4">
               </video>
           </div>
           
            <div class="center-text center-margin-bottom-2">
                <h2 class="heading-secondary-testimo">We make people genuinely <span class="happy">happy</span></h2>
            </div>
            
            <div class="row">
                <div class="story">
                    <figure class="story-shape">
                        <img class="story-image" src="img/u4.jpg">
                    </figure>
                    <div class="story-text">
                        <h3 class="story-head">
                            Great service for great price
                        </h3>
                        <p class="story-para">
                            <!--These people provide a really good service and it's actually for a really low price which is a great thing in these difficult times-->
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                        </p>
                    </div>
                    
                    
                </div>
                
                <div class="story">
                    <figure class="story-shape">
                        <img class="story-image" src="img/u2.jpg">
                    </figure>
                    <div class="story-text">
                        <h3 class="story-head">
                            Great service for great price
                        </h3>
                        <p class="story-para">
                            <!--These people provide a really good service and it's actually for a really low price which is a great thing in these difficult times-->
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                        </p>
                    </div>
                    
                    
                </div>
                
                <div class="story">
                    <figure class="story-shape">
                        <img class="story-image" src="img/u3.jpg">
                    </figure>
                    <div class="story-text">
                        <h3 class="story-head">
                            Great service for great price
                        </h3>
                        <p class="story-para">
                            <!--These people provide a really good service and it's actually for a really low price which is a great thing in these difficult times-->
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                        </p>
                    </div>
                    
                    
                </div>
                
                <div class="story">
                    <figure class="story-shape">
                        <img class="story-image" src="img/u1.jpg">
                    </figure>
                    <div class="story-text">
                        <h3 class="story-head">
                            Great service for great price
                        </h3>
                        <p class="story-para">
                            <!--These people provide a really good service and it's actually for a really low price which is a great thing in these difficult times-->
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                        </p>
                    </div>
                    
                    
                </div>
                
                
                
            </div>
            
            
        </section>
        
    
            
            
            
        
        
        
       <!-- <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">    
                    col 1 of 2
                </div>
                <div class="col-1-of-2">    
                    col 1 of 2
                </div>
            </div>
            
            <div class="row">
                <div class="col-1-of-3">    
                    col 1 of 3
                </div>
                <div class="col-1-of-3">    
                    col 1 of 3
                </div>
                <div class="col-1-of-3">    
                    col 1 of 3
                </div>
            </div>
            
            <div class="row">
                <div class="col-1-of-3">    
                    col 1 of 3
                </div>
                <div class="col-2-of-3">    
                    col 2 of 3
                </div>     
            </div>
            
            <div class="row">
                <div class="col-1-of-4">    
                    col 1 of 4
                </div>
                <div class="col-1-of-4">    
                    col 1 of 4
                </div>
                <div class="col-1-of-4">    
                    col 2 of 4
                </div>
            </div>
            
            <div class="row">
                <div class="col-1-of-4">    
                    col 1 of 4
                </div>
                <div class="col-3-of-4">    
                    col 2 of 4
                </div>
            </div>
        </section>
        -->
        
    </main>
    <section class="bottom">   
    <footer class="footer">
        <div class="footer-logo">
            <img src="img/favicon2.png" class="footer-logo-img">
            <h2 class="heading-primary">
            <span class="heading-primary--main"><span class="go">GO</span>TAXI</span>
            </h2>
        </div>
        
        <div class="row">
            <div class="cols">
                <div class="footer-nav">
                    <ul class="footer-list">
                        <li class="footer-item"><a href="#home" class="footer-link">HOME</a></li>
                        <li class="footer-item"><a href="#options" class="footer-link">OPTIONS</a></li>
                        <li class="footer-item"><a href="#tours" class="footer-link">PACKAGES</a></li>
                        <li class="footer-item"><a href="#" class="footer-link"
                        onclick="document.getElementById('id03').style.display='block'">CONTACT US</a></li>
                        
                    </ul>
                </div>
            </div>
            
            
            <div class="cols">
                <p class="footer-copyright right">
                    Copyright &copy; Himansa Gayath Dineesha Reshani 
                </p>
            </div>
        </div>
        
           <!-- <div class="cols right">
                <p class="footer-copyright">
                    Copyright &copy; Himansa Samarakoon 
                </p>
            </div> -->
    </footer>
    </section>   
        
        
<div id="id03" class="modal cu">
  <span onclick="document.getElementById('id03').style.display='none'" 
   class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  
  <div class="container-cu">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row-cu">
    <div class="column-cu">
      <div id="map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d962.0363720001681!2d79.86059707412099!3d6.901995942721271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sUniversity+of+Colombo+School+of+Computing+(UCSC)!5e0!3m2!1sen!2slk!4v1531653969866" style="width: 100%; border:5px solid white ; height:30rem;" allowfullscreen></iframe></div>
    </div>
    <div class="column-cu">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="lanka">Sri Lanka</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="australia">Australia</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit" >
      </form>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  </div>
</div>
</div>
   
        
        
        
        
        
        
        
        <!-- Button to open the modal -->

<!-- The Modal (contains the Sign Up form) -->
<?php
  include_once('signup.php');
  include_once('login.php');
?>  
   
<!-- <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><p class="sig-t">Cancel</p></button>
        <button type="submit" class="signup"><p class="sig-t">Sign Up</p></button>
      </div>
    </div>
  </form>
</div> -->
    </body>
</html>

