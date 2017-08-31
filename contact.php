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
    
    <div id="main">
        
    </div>
        <div class="wrapper">
            <header class="header">
                <div id="navBar">
                    <?php include 'includes/header.php'?>    
                </div>
            </header>
          <article class="main">
            <form id="contact_form" action="#" style='font-size: 30px' method="POST" enctype="multipart/form-data">
            	<div class="row">
            		<label for="name">Your name:</label><br />
            		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
            	</div>
            	<div class="row">
            		<label for="email">Your email:</label><br />
            		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
            	</div>
            	<div class="row">
            		<label for="message">Your message:</label><br />
            		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
            	</div>
            	<input id="submit_button" type="submit" value="Send email" />
            </form>						
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


