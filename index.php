<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Alketa Bala">
  <meta name="keywords" content="Perfume Shop, Fragrances, Alexia">
  <meta name="description" content="Alexia - Your one-stop shop for luxury perfumes. Explore our collection.">
  <title>Alexia - Perfume Shop</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
  <header>
     <!-- Logo -->
  <div class="logo">
    <img src="Group 1.svg" alt="Alexia Logo" style="width: 150px; height: auto;">
  </div>
    <nav>
      <a href="index.html">Home</a>
      <a href="about.html">About Us</a>
      <a href="contact.html">Contact</a>
<?php
if (isset($_GET['emri'])) {
    $emri = $_GET['emri'];
    echo "<a>Welcome " . $emri."</a>";
} else {
    echo "<a href='loginform.php'>Kyçu</a>";
}
?>
    </nav>
    <h1>Welcome to Alexia</h1>
    <p>"Perfume is the art that makes memory speak."</p>
  </header>



    <div class="img" >
            <img src="BestsellingPerfume.jpg" style="width:100%">
           
    </div>
                    
    <br>
<main>
    <center>
    <section id="brands" style="text-align: center;">
    <h2>Explore Our Perfume Brands</h2>
    
    <?php 
    $i = 0; 
    $fjalli = fopen('shporta.csv', 'r'); 

    $a = [];

    
    while (($row = fgetcsv($fjalli, 1000, ",", '"', '\\')) !== FALSE) { 
        $a[] = $row; 
    }
    fclose($fjalli); 

    foreach ($a as $product) {
        
        if (count($product) >= 6) {
            $linku = $product[5];  
            $emri = $product[1];   
            $price = $product[3];  

            echo '<div style="display: inline-block; margin: 10px; text-align: center;">';
            echo '<button style="border: none; background-color: transparent;">'; 
            echo '<img src="' . $linku . '" alt="' . $emri . '" style="width: 300px; height: 280px;">'; 
            echo '</button>'; 

            echo '<p style="margin: 5px 0; font-weight: bold;">' . $emri . '</p>'; 
            echo '<p style="margin: 0; color: red;">Price: $' . $price . '</p>';  
            echo '<a href="shporta.php">Add to Basket</a>';

            echo '</div>'; 
        }
    }
?>


    
        <br><br><br>

    <aside>
      <h2>Why Choose Alexia?</h2>
      <p>At Alexia, we bring you the finest selection of luxury perfumes from top brands. Quality and authenticity are our promises.</p>
      <p>Look at the Feedback people give us to understand better why people choose us.</p>
    </aside>
  </center>
  </main>


      </section>
    
        <br><br><br>

    <aside>
      <h2>Why Choose Alexia?</h2>
      <p>At Alexia, we bring you the finest selection of luxury perfumes from top brands. Quality and authenticity are our promises.</p>
      <p>Look at the Feedback people give us to understand better why people choose us.</p>
    </aside>
  </center>
  </main>
  <div style="text-align: center; padding: 30px; font-family: Arial, sans-serif;">
    <!-- Feedback Slideshow -->
    <div class="slideshow-container" style="max-width: 800px; margin: auto; position: relative; overflow: hidden;">
  
      <!-- Slide 1 -->
      <div class="mySlides" style="display: block; padding: 20px;">
        <img src="perfume-svgrepo-com (1).svg" alt="Perfume Icon" style="width: 50px; margin-bottom: 20px;">
        <blockquote style="font-style: italic; font-size: 18px;">
          "Alexia is the ONLY place I purchase perfume from. The selection and quality is amazing. I would recommend Alexia to everyone I know!"
        </blockquote>
        <p style="margin-top: 10px; font-weight: bold;">- Misty C.</p>
      </div>
  
      <!-- Slide 2 -->
      <div class="mySlides" style="display: none; padding: 20px;">
        <img src="perfume-svgrepo-com (1).svg" alt="Perfume Icon" style="width: 50px; margin-bottom: 20px;">
        <blockquote style="font-style: italic; font-size: 18px;">
          "Amazing customer service and fast delivery! I’ve found my go-to shop for all my favorite scents."
        </blockquote>
        <p style="margin-top: 10px; font-weight: bold;">- John D.</p>
      </div>
  
      <!-- Slide 3 -->
      <div class="mySlides" style="display: none; padding: 20px;">
        <img src="perfume-svgrepo-com (1).svg" alt="Perfume Icon" style="width: 50px; margin-bottom: 20px;">
        <blockquote style="font-style: italic; font-size: 18px;">
          "I love the variety of perfumes available here! The prices are unbeatable, and I’ll definitely be back for more."
        </blockquote>
        <p style="margin-top: 10px; font-weight: bold;">- Sarah L.</p>
      </div>
  
      <!-- Navigation Arrows -->
      <a class="prev" onclick="plusSlides(-1)" style="cursor: pointer; position: absolute; top: 50%; left: 0; transform: translateY(-50%); font-size: 24px; text-decoration: none;">&#10094;</a>
      <a class="next" onclick="plusSlides(1)" style="cursor: pointer; position: absolute; top: 50%; right: 0; transform: translateY(-50%); font-size: 24px; text-decoration: none;">&#10095;</a>
    </div>
  
    <!-- Dots -->
    <div style="text-align: center; margin-top: 20px;">
      <span class="dot" onclick="currentSlide(1)" style="cursor: pointer; height: 10px; width: 10px; margin: 0 5px; background-color: #bbb; border-radius: 50%; display: inline-block;"></span>
      <span class="dot" onclick="currentSlide(2)" style="cursor: pointer; height: 10px; width: 10px; margin: 0 5px; background-color: #bbb; border-radius: 50%; display: inline-block;"></span>
      <span class="dot" onclick="currentSlide(3)" style="cursor: pointer; height: 10px; width: 10px; margin: 0 5px; background-color: #bbb; border-radius: 50%; display: inline-block;"></span>
    </div>
  </div>
  
<center>
  <h2>Here is the location of our Alexia</h2>
  <!-------------------------------------------------------------- Ifram ------------------------------------------------>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96772.36582084437!2d-74.06624078750613!3d40.71501300319713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27b354c293%3A0x2587a3358961049d!2sYardley%20Photo%20Studio!5e0!3m2!1sen!2s!4v1637706200196!5m2!1sen!2s"
height="450" 
width="700"
style="border:0; margin-top: 2em; margin-bottom: 2em;" 
allowfullscreen="" 
loading="lazy">
</iframe>
</center>
  <!-------------------------------------------------------------- Foter ------------------------------------------------>
  <div id="Footer">
    <div class="social">
  
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
          <a href="https://x.com/?lang=en"><i class="fab fa-twitter"></i></a>
         
              
    </div>
    <ul class="list">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a href="about.html">About Us</a>
      </li>
      <li>
        <a href="contact.html">Contact</a>
      </li>
      <li>
        <a href="contact.html">Kyçu</a>
      </li>
    </ul>
    <p class="copyright">
      Alexia @2024
    </p>



</div>
</body>
</html>
