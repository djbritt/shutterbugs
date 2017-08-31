<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/links.php'?>  
        <style>
        .main {
          text-align: left;
        }
          #profilePic {
            width: 300px;
            /*height: 300px;*/
            border-radius: 150px;
            border: 4px solid;
          }
          textarea, input{
            width: 300px;
            text-align: center;
          }
          table {
            width: 100%;
            margin: 0 !important;
            text-align: center;
          }
          table td {
            width: 50%;
          }
          #logout {
            margin-left: 280px;
            font-size: 20px;
            font-weight: bold;
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
            <div>
              <img id="profilePic" src="images/image-slider-3.jpg"><span style="font-size: 30px; font-weight: bold" >Daniel Britt</span><a href=""><span id="logout">Logout</span></a><br>
              <br>
              <table>
                <tr>
                  <td>Username: </td>
                  <td><input type="text" value="dbritt"></td>
                </tr>
                <tr>
                  <td>Gender: </td>
                  <td>Male <br><input type="radio" value="male"><br>
                  Female <br><input type="radio" value="male"></td>
                </tr>
                <tr>
                  <td>About: </td>
                  <td><textarea name="comment" form="usrform">Daniel Britt is an aspiring photographer...</textarea></td>
                </tr>
                <tr>
                  <td>Email: </td>
                  <td><input type="text" value="dbritt@csumb.edu"></td>
                </tr>
              </table>
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


