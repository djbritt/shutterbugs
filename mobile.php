<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/links.php'?>  
        <style>
        body {
          margin: auto !important;
          padding-left: 25%;
        }
          li img {
            height: 390px !important;
          }
          .main {
            width: 400px;
            margin-left: -15px;
          }
          #navBar {
            width: 720px;
          }
          .aside-2 {
            float: left;
            height: 1397px;
          }
          .footer {
            width: 720px;
          }
          #htmltagcloud {
            line-height: 2.8em;
          }
          .signup {
                padding-top: 78px !important;
          }
        </style>
    </head>
    <body>
    
        <div class="wrapper">
            <header class="header">
                <div id="navBar">
                    <?php include 'includes/header.php'?>    
                </div>
            </header>
          <article class="main">
            <div class="rslides_container">
              <ul class="callbacks rslides" id="slider1">
                <li>
                  <iframe width="600" height="390" src="https://www.youtube.com/embed/6_B8pVoANyY" frameborder="0" allowfullscreen></iframe>
                  </li>
                <li><a href="news.php"><img src="images/slider/news1.jpg" alt=""><p class="caption">VSCO Mobile Photo Editing App Will Soon Support Raw Images</p></a></li>
                <li><a href="news.php"><img src="images/slider/news2.jpg" alt=""><p class="caption">The Current High-Five Selfie Trend Requires You To Throw Your Phone</p></a></li>
                <li><a href="news.php"><img src="images/slider/news3.jpg" alt=""><p class="caption">Why It Is Essential for Photographers to Know Their Clients Prior to a Photoshoot</p></a></li>
                <li><a href="news.php"><img src="images/slider/news4.jpg" alt=""><p class="caption">Photographer Captures an Erupting Volcano and Gets a Perfectly Aligned Meteor as Bonus</p></a></li>
                <li><a href="news.php"><img src="images/slider/news5.png" alt=""><p class="caption">A GoPro Camera Went to Space, Got Lost, Came Back With Awesome Images of Earth</p></a></li>
              </ul>
            </div>
            
          <p style="font-size: 25px;">Welcome to Shutterbugs Monterey!</p>
          <p style="font-size: 25px;">We think you should join us because...</p>
          <div id="circles">
            <img src="img/circle1.png"><img src="img/circle2.png"><img src="img/circle3.png">
          </div>
          </article>
          <aside class="aside aside-2">
            <?php include 'includes/sidebar.php'?> 
          </aside>
          <footer class="footer">
            <?php include 'includes/footer.php'?> 
          </footer>
        </div>
    </body>
    <script>
      $("#slider1").responsiveSlides({
        auto: false,
        pager: true,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "centered-btns"
      });
    </script>
</html>


