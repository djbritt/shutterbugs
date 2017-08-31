<!DOCTYPE html>
<html>

<head>
  <?php include 'includes/links.php'?>
  <style>
    #aboutImg {
      width: 94%;
    }
    
    li {
      list-style: none;
    }
    li p {
      text-align: left;
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
      <ul>
        <li><img src="images/slider/news1.jpg" alt="">
          <p>VSCO Mobile Photo Editing App Will Soon Support Raw Images</p>
          <p>By Stan Horaczek |  October 6, 2016<br>
Do you know of a great photo editing app for your mobile device? Well if you haven’t heard about it, VSCO is a great app for that. It is packed full of great features you don’t want to miss out on. Including its plethora of features, VSCO is adding a new feature we think you’ll love! VSCO is adding native DNG raw support in its popular mobile editing app. How cool is that?</p>
        </li>
        <hr class="hr">
        <li><img src="images/slider/news2.jpg" alt="">
          <p>The Current High-Five Selfie Trend Requires You To Throw Your Phone</p>
          <p>By Stan Horaczek October 11, 2016<br>
Isn’t it interesting what our culture decides is a current trend? Well this new one will surprise you. The current trend on social media is to throw your phone to try and take a selfie during a self high-five. Isn’t that mind boggling? First off, who would want to risk breaking your phone, just for a high five?? And secondly, what’s the importance of getting a photo of you taking a high five, even if it works. But in the end it’s up to you if you try it or not!</p>
        </li>
        <hr class="hr">
        <li><img src="images/slider/news3.jpg" alt="">
          <p>Why It Is Essential for Photographers to Know Their Clients Prior to a Photoshoot</p>
          <p>By Khatleen Minerva | October 11, 2016<br>
It did not dawn on me until I was watching the first episode of “Top Photographer with Niger Barker” that some photographers do not actually take time to talk to their clients in order to get to know them better. It may seem insignificant, but let me tell you why it matters. Getting to know your clients can lead to a lot of interesting points of view on how to take a photo you may have not had before. It also lets the client know that you are not just there for the money, and that you actually are taking time to get to know them. Try it out before taking photos next time!</p>
        </li>
        <hr class="hr">
        <li><img src="images/slider/news4.jpg" alt="">
          <p>Photographer Captures an Erupting Volcano and Gets a Perfectly Aligned Meteor as Bonus</p>
          <p>By Daniel Laan | November 9, 2016<br>
Landscape photographers know that there’s only so much you can plan. Today I want to introduce you to a fellow Dutch landscape photographer who recently came back from the volcanically active Kamchatka Peninsula in Russia. What Tomas van der Weijden captured there is truly extraordinary and he told me everything about the creation of this photo.Tomas has some great tips I think we can all learn something from. The first tip was to simply be patient. The perfect photo won’t happen as soon as you sit down. And secondly, make sure you have a good camera with a fast shutter speed, so you can get as many photos taken at once as possible.</p>
        </li>
        <hr class="hr">
        <li><img src="images/slider/news5.png" alt="">
          <p>A GoPro Camera Went to Space, Got Lost, Came Back With Awesome Images of Earth</p>
          <p>By Stan Horaczek | September 28, 2016<br>
            You guys will never believe this story. Some students from Stanford decided they wanted to send a goPro into the stratosphere, and get some photos. The way they would track is that they attached a smartphone to the camera, to track it’s gps. So they 3d printed a box to hold it all, attached it to a balloon in the grand canyon made specifically for high altitudes, and sent it up. Little did they realize, that when the balloon popped, the phone and camera fell out of GPS coverage, so it was lost. Until… Two years later, a lady happened to find it, and returned it to ATT, who got hold of the students and returned the device. They got the footage! A clever project to send a GoPro camera to space resulted in some great images of the earth after it was found several years later.</p>
        </li>
      </ul>
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
