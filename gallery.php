<?php
function sliderPhotos() {
  for ($i = 1; $i < 28; $i++) {
    echo ("<li><img width=800 src=images/gallery/1(".$i.").jpeg></li>");
  }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/links.php'?>  
        <style>
          #aboutImg {
            width: 94%;
          }
          .rating {
              overflow: hidden;
              display: inline-block;
              font-size: 0;
              position: relative;
          }
          .rating-input {
              float: right;
              width: 16px;
              height: 16px;
              padding: 0;
              margin: 0 0 0 -16px;
              opacity: 0;
          }
          .rating:hover .rating-star:hover,
          .rating:hover .rating-star:hover ~ .rating-star,
          .rating-input:checked ~ .rating-star {
              background-position: 0 0;
          }
          .rating-star,
          .rating:hover .rating-star {
              position: relative;
              float: right;
              display: block;
              width: 16px;
              height: 16px;
              background: url('http://kubyshkin.ru/samples/star-rating/star.png') 0 -16px;
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
            <div class="rslides_container">
              <ul class="rslides" id="slider1">
                <?=sliderPhotos()?>
              </ul>
            </div>
            Commend and rate!<br>
            <table>
              <tr>
                <td>Name: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Comment: </td>
                <td><input type="text"><br></td>
              </tr>
              <tr>
                <td>Rate: </td>
                <td><span class="rating">
                <input type="radio" class="rating-input"
            id="rating-input-1-5" name="rating-input-1"/>
                <label for="rating-input-1-5" class="rating-star"></label>
                <input type="radio" class="rating-input"
                        id="rating-input-1-4" name="rating-input-1"/>
                <label for="rating-input-1-4" class="rating-star"></label>
                <input type="radio" class="rating-input"
                        id="rating-input-1-3" name="rating-input-1"/>
                <label for="rating-input-1-3" class="rating-star"></label>
                <input type="radio" class="rating-input"
                        id="rating-input-1-2" name="rating-input-1"/>
                <label for="rating-input-1-2" class="rating-star"></label>
                <input type="radio" class="rating-input"
                        id="rating-input-1-1" name="rating-input-1"/>
                <label for="rating-input-1-1" class="rating-star"></label>
        </span></td>
              </tr>
            </table>
            <br>
        <button class="button">Submit</button>
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


