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
             Signup<br><br>
            <table>
              <tr>
                <td>Username: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Password: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Re-Enter Password: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>First Name: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Last Name: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Email: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Re-Enter Email: </td>
                <td><input type="text"></td>
              </tr>
              <tr>
                <td>Mobile Number: </td>
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


