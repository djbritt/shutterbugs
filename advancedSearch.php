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
            Advanced Search<br>
            <table>
              <tr>
                <td>Keyword: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Phrase: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Username: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Category: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Photo Location: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Camera Used: </td>
                <td><input type="text"></td>
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


