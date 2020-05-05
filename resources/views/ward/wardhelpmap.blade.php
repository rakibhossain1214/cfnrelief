<!--The div element for the map -->
<div id="map"></div>
    <script>

      function initMap() {

        var myLatLng = {lat: 23.6850, lng: 90.3563};

        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: myLatLng
        });

        var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
        });       
       
      }
      
    </script>
    <!-- Replace following script src -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/markerclustererplus/2.1.4/markerclusterer.min.js" integrity="sha256-k6ny1ynyuFwRCbNHPHfWZNNWXGLmz5+AN9AZPAa4zeA=" crossorigin="anonymous"></script>
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC37QRGR6Op-mGipsEBBSOnsysS_MboA-o&callback=initMap">
    </script>