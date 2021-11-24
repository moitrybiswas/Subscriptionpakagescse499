<?php 

session_start();

//include("connection.php");
	//include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

  <!-- Glidejs StyleSheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css" />

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <!-- StyleSheet -->
  <link rel="stylesheet" href="Birthday.css" />
  <title>Birthday</title>
</head>

<body>
 
  
  <div class="advert">
    <form action="#">
	        
            <a class="log" name="log" href="profile.php?token=<?php echo $_GET["token"]; ?>"><i class="far fa-user"> profile</i></a>
			
			<form action="#">
            <a class="cart" href="cart.php?token=<?php echo $_GET["token"]; ?>"><i class="fas fa-shopping-cart"></i>
			<?php
			if (isset($_SESSION['shopping_cart'])){
				$count=count($_SESSION['shopping_cart']);
				echo "$count";
			}else{
				echo"0";
			}
			?>
			</a>
          </form>
          </form>
  </div>
  
 

  <!-- Header -->
  <header id="home" class="header">
    <nav class="navigation">
      <div class="nav-center container">
        <a href="home.php" class="logo">
          <h1>SN<span>ACK</span>BOX</h1>
        </a>

        <div class="nav-menu">
          <div class="nav-top">
            <div class="close">
              <i class="fas fa-times"></i>
            </div>
          </div>

          <ul class="nav-list">
           
		   <li class="nav-item">
              <a href="unsubscribe.php?token=<?php echo $_GET["token"]; ?>" class="nav-link scroll-link"> Subscription</a>
            </li>

            <li class="nav-item">
              <a href="#Feature Brands" class="nav-link scroll-link">Feature Brands</a>
            </li>

            <li class="nav-item">
              <a href="#Reffer & earn" class="nav-link scroll-link">Reffer & earn</a>
            </li>

            <li class="nav-item">
              <a href="#Terms and Conditions" class="nav-link scroll-link">Terms and Conditions</a>
            </li>

            <li class="nav-item">
              <a href="#Questions and review" class="nav-link scroll-link">Questions and review</a>
            </li>
          </ul>
        </div>

        <div class="hamburger">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>
  </header>



    <!-- weekly blog -->
    <section class="section blog" id="blog">
      <div class="title-container">
        <div class="section-titles">
          <div class="section-title active">
            <h2 class="title"><span>-----------</span> PLEASE CHOOSE A CATAGORY! <span>-----------</span></h2>
	  
            <h1 class="primary-title"> SNACK BOX FOR MONTHLY </h1>
          </div>
        </div>
      </div>

      <div class="blog-container container">
        <div class="glide" id="glide1">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/32.jpg" alt="">
                  </div>
                  <div class="card-footer">
                    <h3>price: 60 TAKA</h3>
                    <span>Details</span>
                    <p>Origin: Bangladesh<br> Manufacturer: Cocola food products Ltd.</p>
                    
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/2.jpeg" alt="">
                  </div>
                  <div class="card-footer">
                    <h3>Price:135 TAKA</h3>
                    <span>Details</span>
                    <p>Origin: Bangladesh<br>Manufacturer: Nestle Food Bangladesh Ltd.</p>
                    
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/7.jpeg"alt="">
                  </div>
                  <div class="card-footer">
                    <h3>Price: 80 TAKA</h3>
                    <span>Details</span>
                    <p>Origin: Bangladesh<br>Manufacturer: Bashundhara Bangladesh Ltd.</p>
                    
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/9.jpg" alt="">
                  </div>
                  <div class="card-footer">
                    <h3>Price: 36 TAKA</h3>
                    <span>Details</span>
                    <p>Origin: Bangladesh<br>Manufacturer: Unilever Bangladesh Limited.</p>
                    
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/8.jfif" alt="">
                  </div>
                  <div class="card-footer">
                    <h3>Price: 65 TAKA </h3>
                    <span>Details</span>
                    <p>Origin: Bangladesh<br>Manufacturer: Bashundhara Bangladesh Ltd.</p>
                    
                  </div>
                </div>
              </li>
			  
            </ul>
			<a class="quiz" href="page1.php?token=<?php echo $_GET["token"]; ?>">SELECT PRODUCTS</a>
			
          </div>
		  
		  <!-- Arrows -->
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
              class="fas fa-arrow-right"></i></button>
        </div>
        </div>
      </div>
    </section>
	
	
	 <!-- Spaical blog -->
    <section class="section blog" id="blog">
      <div class="title-container">
        <div class="section-titles">
          <div class="section-title active">
            
            <h1 class="primary-title"> <span>----- OR -----</span><br> SPECIAL SNACK BOXES </h1>
          </div>
        </div>
      </div>

      <div class="blog-container container">
        <div class="glide" id="glide2">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/box1.jpg" alt="">
                  </div>
                  <div class="card-footer">
                    <h3>Diet Food(age upto 25) </h3>
                    <span>Details</span>
                    <p>This is for those who want to diet here he will get soup,noodles ete products.</p>
					<a href="box1.php?token=<?php echo $_GET["token"]; ?>"><button>OPEN </button></a>
                    
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/box2.jpg" alt="">
                  </div>
                  <div class="card-footer">
                    <h3>Diabetes Food(age upto 25) </h3>
                    <span>Details</span>
                    <p>This is for those who have  diabets here he will get soup,noodles ete products.</p>
					<a href="box2.php?token=<?php echo $_GET["token"]; ?>"><button>OPEN </button></a>
                    
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/box3.png" alt="">
                  </div>
                 <div class="card-footer">
                    <h3>Diet Food(age upto 55) </h3>
                    <span>Details</span>
                    <p>This is for those who want to diet here he will get soup,noodles ete products.</p>
					<a href="box3.php?token=<?php echo $_GET["token"]; ?>"><button>OPEN </button></a>
                    
                  </div>
                </div>
              </li>
			  <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/box4.jpg" alt="">
                  </div>
                   <div class="card-footer">
                    <h3>Diabetes Food(age upto 55) </h3>
                    <span>Details</span>
                    <p>This is for those who have  diabets here he will get soup,noodles ete products.</p>
					<a href="box4.php?token=<?php echo $_GET["token"]; ?>"><button>OPEN </button></a>
                    
                  </div>
                </div>
              </li>
			  <li class="glide__slide">
                <div class="blog-card">
                  <div class="card-header">
                    <img src="./images/box5.jpg" alt="">
                  </div>
                  <div class="card-footer">
                    <h3>Diet Food(age upto 75) </h3>
                    <span>Details</span>
                    <p>This is for those who want to diet here he will get soup,noodles ete products.</p>
					<a href="box5.php?token=<?php echo $_GET["token"]; ?>"><button>OPEN </button></a>
                    
                  </div>
                </div>
              </li>
			  
			  
			  
              
			  
            </ul>
			
			
          </div>
		  
		  <!-- Arrows -->
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
              class="fas fa-arrow-right"></i></button>
        </div>
        </div>
      </div>
    </section>
	
	
	<!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3 class="logoimage"><img  src="./images/logo.png"</h3>
          
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
        </div>
        <div class="footer-center">
          <h3>MY ACCOUNT</h3>
          <a href="#">My Account</a>
          <a href="#">Order History</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            8/1 Future Town,Mohammadpur, Dhaka-1207
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            SB@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            01683560258
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Dhaka City, Bangladesh
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->
	
	 <!-- Glidejs Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

  <!-- Custom Script -->
  <script src="Birthday.js"></script>
 
  
  
</body>
	</html>