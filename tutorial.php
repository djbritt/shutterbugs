<!DOCTYPE html>
<html>

<head>
  <?php include 'includes/links.php'?>
</head>

<body>

  <div class="wrapper">
    <header class="header">
      <div id="navBar">
        <?php include 'includes/header.php'?>
      </div>
    </header>
    <article class="main">
      <div>
        <b>Photography in Sunlight</b><br>
        <img alt="" width="400" src="images/image01.png">
        <p>Photography is all about light, the direction of the light falling on your subject is most important, you need to look at your subject carefully and watch how the shadows fall.
        If you are able to choose the time of day to shoot your pictures, try to pick a time when the sun is low in the sky, either shoot in the early morning or late afternoon.<br>
            <a href="http://www.geofflawrence.com/available_light.html">Stolen From</a></p>
      </div>
      <hr id="hr">
      <div>
        <b>An Explanation of Shutter Speed</b><br>
        <img alt="" width="400" src="images/image18.png">
        <p>Shutter Speed refers to the amount of time the shutter is open. This is usually measured in fractions of a second, a 'normal' (hate that word!) shutter speed would be around 1/125th of a second with a standard lens or mid-range zoom lens on the camera. Unless you have extremely shaky hands, that will give you a sharp picture most of the time.
        <a href="http://www.geofflawrence.com/shutter_speeds_and_apertures.html"><br>Stolen From</a></p>
      </div>
      <hr id="hr">
      <div>
        <b>Shooting Panoromas</b><br>
        <img alt="" width="400" src="images/image14.png">
        <p>This tutorial will show you how to shoot multiple shots of a scene, panning as you go, and then stitch the shots together to make one large file capable of producing a large print to hang on the wall. This technique is most often used to make panoramas of landscapes, like the one above.
        <a href="http://www.geofflawrence.com/photography_tips_shooting_and_stitching_panoramas.html"><br>Stolen From</a></p>
      </div>
      <hr id="hr">
      <div>
        <b>Close-ups</b><br>
        <img alt="" width="400" src="images/image02.png">
        <p>A while ago I was asked to take some pictures of snails which got me thinking about the perils of close-up photography in general. 
The first problem we need to look at is, how close the lens will focus. Lenses have a minimum focus distance which varies considerably from lens to lens, some longer zoom lenses have a 'macro' setting and will focus quite close but most lenses will not focus close enough to take the picture on the right.
        <a href="http://www.geofflawrence.com/closeups.html"><br>Stolen From</a></p>
      </div>
      <hr id="hr">
      <div>
        <b>Color Temperature</b><br>
        <img alt="" width="400" src="images/image08.png">
        <p>Color temperature is measured in 'kelvins' formerly known as 'degrees kelvin'. To get the idea, think of a piece of metal being heated in a fire. First it gives off a reddish glow and, as it gets hotter, the color gets whiter and then, as it really warms up, it starts to give off a bluish glow. In Physics of course, we can't use any old bit of metal for the kelvin scale, we need a 'theoretical black object'. The photographer's color temperature chart is a loose interpretation of the kelvin scale, the numbers are not used in any precise manner.
        <a href="http://www.geofflawrence.com/color_temperature.html"><br>Stolen From</a></p>
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
