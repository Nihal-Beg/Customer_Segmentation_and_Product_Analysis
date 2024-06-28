<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StatOculus</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Cormorant+Garamond:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/h1.css">
</head>
<body>
    <header>
        <nav class="navbar">
          <button class="menu-toggle">&#9776;</button> 
          <ul>
            <li class="dropdown">
              <a href="#">Analysis &#x2B9F;</a>
              <ul class="dropdown-menu">
                <li><a href="#">Location Based</a></li>
                <li><a href="new_elec.php">Electronics</a></li>
                <li><a href="automotive.php">Automotive</a></li>
                <li><a href="homeapp.php">Home Appliances</a></li>
                <li><a href="baby and kids.php">Baby & Kids</a></li>
                <li><a href="#">Home Decor & Furniture</a></li>
              </ul>
            <li><a href="#">Featured Analysis</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </nav>
        <section class="section1">
          <div class="logo">
            <h1 class="logo-content">StatOculus</h1>
            <h2 class="tagline">Seeing Beyond the Numbers</h2>
          </div>
          <div class="search-container">
            <input type="text" id="search-input" placeholder="Find Analysis.....">
            <button class = "search-button" onclick="redirectToPage()">GO</button> 
        </div>
        </section>
        <div>
          <ul class="rec-box">
            <li><a href="#">Apple</a></li>
            <li><a href="#">Vadodara</a></li>
            <li><a href="#">Retail Market</a></li>
            <li><a href="#">Mahindra</a></li>
            <li><a href="#">E-Commerce Mobile</a></li>
            <li><a href="#">Home Appliances</a></li>
            <li><a href="automotive.php">Electric Vehicels</a></li>
          </ul>
        </div>
      </header>
  <main>
    
    <div class="slide-tagline">
      <h1>Featured</h1> <h1 style="color: #0666e5;">Analysis</h1>
    </div>
    <div class="slider-container">
      <div class="slider">
        <div class="slide">
          <div class="islide">
          <p>Vadodara | Mobile Brand<br>Brand Performance Analysis 2022-2023<br>
            Samsung with the highest volume of sales in vadodara and Apple <br>with highest Revenue in 2022-2023 </p>
          <img src="../html/img/mobile brand performance.png">
          <a href="#">Read More</a>
        </div>
        </div>
        <div class="slide">
          <div class="islide">
          <p>2022 - 2023 | Lpatop <br> Location-Wise Revenue vs Volume Analysis <br>
            Among the locations studied, Gandhinagar emerged as a standout performer,<br> boasting the highest revenue and sales volume. </p>
          <img src="../html/img/laptop location based revenue vs quantity.png">
          <a href="#">Read More</a>
        </div>
        </div>
        <div class="slide">
          <div class="islide">
          <p>Vadodara | Mobile Devices <br>Profitability Analysis <br>Notably, the robust profit margin achieved by Nokia 8.3 signifies its <br>ability to generate substantial revenue relative to its <br>production costs in 2022 - 2023
          </p>
          <img src="../html/img/profitability analysis mobile devices vadodara.png">
          <a href="#">Read More</a>
        </div>
        </div>
      
        <!-- Add more slides as needed -->
      </div>
      <div class="sbutton">
      <button class="prev-btn" onclick="prevSlide()">Prev</button>
      <button class="next-btn" onclick="nextSlide()">Next</button>
      </div>
    </div>
    <div class="brantitle">
      <h1> Brand</h1>  <h1 style="color: #0666e5;">Showcase</h1>
    
    </div>
    <div class="branlogo">
      <li><img src="../html/img/appleg.png"></li>
      <li><img src="../html/img/google.png"></li>
      <li><img src="../html/img/windows.png"></li>
      <li><img src="../html/img/samsung.png"></li>
     

    </div>
    <div class="poptopic">
      <h1> Start your</h1> <h1 style="color: #0666e5;">Research</h1>
      <div class="top">
        <li><a href="#">Mobile Retail Market</a></li>
        <li><a href="#">Apple</a></li>
        <li><a href="automotive.php">Electric Vehicels</a></li>
        <li><a href="#">Vadodara</a></li>
        <li><a href="#">Electronics Gadgets</a></li>
        <li><a href="#">Amazon Mobile</a></li>
        <li><a href="#">Samsung</a></li>
        <li><a href="#">Ahmedabad Laptop Retail Market</a></li>
        <li><a href="automotive.php">Maruti Suzuki</a></li>
        <li><a href="#">Kids Items</a></li>
        <li><a href="automotive.php">Automotive</a></li>
        <li><a href="#">Home Decor & Furniture</a></li>
        
      </div>
    </div>

<div class="ourser">
<h1>Our<span class=services>Services</span></h1><br>
<h2>StatOculus: Your Time and Money Saving Solution</h2>

<div class="mainser">
  <div class="ser1">
    <img class = "serimg" src="../html/img/award.png" alt="Analysis">
    <p>Our Product Analysis Services:</p><br>
    <P>At StatOculus,we offer a diverse range of services<br>tailored to provide detailed and in-depth product<br> analysis across various markets and criteria. Our<br> team of experts is committed to empowering <br>businesses and individuals with valuable insights<br> to make well-informed decisions.</P>
  </div>
  <div class="ser1">
    <img class="serimg2" src="../html/img/chart.png" alt="visualization">
    <p>Visual insights</p><br>
    <p>At StatOculus, we take data analysis to the next<br> level with our cutting-edge Visual Insights service.<br> We understand that raw data alone can be <br>overwhelming,and that's where our expert team <br>comes in to transform complex information into <br>easily digestible visuals. 
  </div>
  <div class="ser1">
    <img class="serimg2" src="../html/img/add.png" alt="addvertisement">
    <p>Targeted Advertising</p><br>
    <p>At StatOculus, we offer Targeted Advertising Solutions <br>that leverage the power of data-driven product <br>analysis to help you reach the right audience in specific <br> markets. We understand that effective advertising <br> requires a tailored approach, and our team of experts is <br>dedicated to optimizing your product's visibility and impact.</p>
  </div>
</div>
</div>

<h1 class="random">Our <span class="us"> Plans</span></h1>

<div class="subs">
 

  <div class="subsplan">
    <div class="plan1">
      <h1>Basic Plan</h1>
      <p><span class=" arrow">&#10148;</span> Limitless Access to All Analysis</p>
      <p> <span class=" arrow">&#10148;</span> Access to All Visulisation</p>
      <h2>Free </h2>
    </div>
  </div>
  <h1>Our <span class="us"> Advertisement Plans</span></h1>
  <div class="subsplan2">
    
    <div class="plan1">
      <h1>SMS & WhatsApp Advertising</h1>
      <p><span class=" arrow">&#10148;</span> 500 Contacts SMS</p>
      <p> <span class=" arrow">&#10148;</span> 500 Contacts WhatsApp</p>
      <p> <span class=" arrow">&#10148;</span> No daily Sending limit</p>
      <h2> &#8377; 49/ Week </h2>
    </div>

    <div class="plan1">
      <h1>Email Advertisement</h1>
      <p><span class=" arrow">&#10148;</span> 500 emails</p>
      <p> <span class=" arrow">&#10148;</span> No daily Sending limit</p>
      <p> <span class=" arrow">&#10148;</span> Basic Reporting & analytics</p>
      <h2>&#8377; 149/Week </h2>
    </div>
  </div>
  <div class="subsbut">
    <a href="product overwiew.php">Go to Product Overview</a>
  </div>

  
</div>

  </main>

  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 StatOculus. All rights reserved.</p>
      <ul class="footer-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </footer>

  <script src="../js/h1.js"></script>
</body>
</html>

