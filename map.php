<!DOCTYPE html>
<html>
    <head>
        <?php include 'includes/links.php'?>  
        <style>
          #aboutImg {
            width: 94%;
          }
           html,
             body {
                 height: 100%;
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
          <!--<article class="main">-->
            <div id="map"></div>
        
            <div id="myModal" class="modal">
                <span class="close">×</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
          <!--</article>-->
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
            function modal(icon, description) {
                // Get the modal
                var modal = document.getElementById('myModal');
    
                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                
                modal.style.display = "block";
                var iconBig = icon.split("/");
                modalImg.src = "img/big/" + iconBig[1];
                captionText.innerHTML = description;
    
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];
    
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
            }
      
            var map;
    
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: new google.maps.LatLng(36.5943628, -121.9025184), 
                    mapTypeId: 'roadmap'
                });
    
                var icons = {
                    info1: {
                        icon: 'img/1.jpg'
                    },
                    info2: {
                        icon: 'img/2.jpg'
                    },
                    info3: {
                        icon: 'img/3.jpg'
                    }
                };
    
                function addMarker(feature) {
    
                    var marker = new google.maps.Marker({
                        position: feature.position,
                        icon: icons[feature.type].icon,
                        map: map,
                        feature: feature
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                        console.log(this.feature.description);
                        modal(marker.icon, this.feature.description)
                    });
                }
    
                var features = [{
                    position: new google.maps.LatLng(36.5956167,-121.912306),
                    type: 'info1',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.602187,-121.9090257),
                    type: 'info1',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.6057588,-121.9299201),
                    type: 'info1',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.6156588,-121.9289201),
                    type: 'info2',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.6056588,-121.9189201),
                    type: 'info2',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.6046588,-121.9389201),
                    type: 'info2',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.6067588,-121.9099201),
                    type: 'info2',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.602187,-121.9490257),
                    type: 'info3',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.584187,-121.9090257),
                    type: 'info3',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.590187,-121.9000057),
                    type: 'info3',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.916988, -121.236640),
                    type: 'info1',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.592187,-121.8890257),
                    type: 'info1',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.602187,-121.8990257),
                    type: 'info1',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.572187,-121.8890257),
                    type: 'info2',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.573187,-121.8990257),
                    type: 'info2',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.575187,-121.9190257),
                    type: 'info2',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.595187,-121.9290257),
                    type: 'info2',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.615187,-121.9190257),
                    type: 'info3',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }, {
                    position: new google.maps.LatLng(36.595187,-121.8990257),
                    type: 'info3',
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et pharetra dui, a placerat urna. Suspendisse molestie tempus laoreet. Praesent eleifend tempus ultricies."
                }];
    
                for (var i = 0, feature; feature = features[i]; i++) {
                    addMarker(feature);
                }
                // for (var i = 0; features.length; i++) {
                //     addMarker(features[i]);
                // }
    
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO6MhRKcBRhGrSZQAlwunxNRj2SE_rvpU&callback=initMap">
            </script>
    </script>
</html>


