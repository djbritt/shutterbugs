<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/links.php'?>  
        <style>
          #aboutImg {
            width: 94%;
          }
          #accordion {
           width:100%;
           margin: 0;
           padding: 0;
          }
          #accordion p span {
           cursor:pointer;
           font-size: 15px;
           font-family: calibri;
          }
          .news-title {
           color: #1E6E86;
           font: bold 12px calibri;
           margin-bottom: 10px;
           background: #EDEDED;
           padding: 12px 10px;
           border-radius: 10px;
          }
          .news_text {
           margin-left: 10px;
           line-height: 18px;
           padding: 10px;
           font-family: calibri;
           text-align: justify;
          }
        </style>
    </head>
    <body>
    
    <div id="main">
        
    </div>
        <div class="wrapper">
            <header class="header">
                <div id="navBar">
                    <?php include 'includes/header.php'?>    
                </div>
            </header>
          <article class="main">
            <div id="accordion">
              <p class="news-title"><span>How much do cameras range from?</span></p>
              <div class="news_text"> <strong>Answer</strong>:
                <p>Usually between 75-1500 dollars.</p>
              </div>
              <p class="news-title"><span>How do you upload an image?</span></p>
              <div class="news_text"> <strong>Answer</strong>:
                <p>Head over to our upload page under the gallery tab item!</p>
              </div>
              <p class="news-title"><span>What lens takes good close up pictures?</span></p>
              <div class="news_text"> <strong>Answer</strong>:
                <p>Lens with a high pixel ratio are good for taking close up photos.</p>
              </div>
              <p class="news-title"><span>How do you transfer photos to your computer from your camera?</span></p>
              <div class="news_text"> <strong>Answer</strong>:
                <p>First, plug the camera into a computer. Second, navigate to the camera's card, and move the photos to your computer.</p>
              </div>
              <p class="news-title"><span>Where is a good place to take photos?</span></p>
              <div class="news_text"> <strong>Answer</strong>:
                <p>Monterey of course! Come on over. We have ocean and wildlife, all within minutes of each other.</p>
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
       $('#accordion div').hide();
       $('#accordion p span').click(function(){
               $('#accordion div').slideUp();
               $(this).parent().next().slideDown();
               return false;
       });
    </script>
</html>


