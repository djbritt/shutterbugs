<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/links.php'?>  
        <style>
          #aboutImg {
            width: 94%;
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
            <img src="images/upload.png">
            <table style="margin: auto">
              <tr>
                <td>Photo Title: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Category: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Type of Camera Used: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Date Taken: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Location: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Description: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Use on site? </td>
                <td><input type="checkbox"></td>
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


