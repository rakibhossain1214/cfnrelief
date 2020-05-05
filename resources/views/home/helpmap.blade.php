<!--The div element for the map -->
    <div id="map"></div>
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 23.6850, lng: 90.3563}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          var marker = new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });

          google.maps.event.addListener(marker, 'click', function(evt) {
            infoWin.setContent(location.info);
            infoWin.open(map, marker);
            })

            return marker;
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});


        var infoWin = new google.maps.InfoWindow();
        // var infowindow = new google.maps.InfoWindow({
        //     content: contentString
        // });

        var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';
      }
      var locations = [
        {lat: 23.6850, lng: 90.3573, info: "Needs help: 1520"},
        {lat: 23.6860, lng: 90.3583, info: "Needs help: 1520"},
        {lat: 23.6870, lng: 90.3593, info: "Needs help: 1520"},
        {lat: 23.6880, lng: 90.3103, info: "Needs help: 1520"},
        {lat: 23.6890, lng: 90.3113, info: "Needs help: 1520"}, 
        {lat: 23.6100, lng: 90.3123, info: "Needs help: 1520"},
        {lat: 23.4110, lng: 90.4133, info: "Needs help: 1520"},
        {lat: 23.4120, lng: 90.4143, info: "Needs help: 1520"},
        {lat: 23.4130, lng: 90.4153, info: "Needs help: 1520"},
        {lat: 23.4140, lng: 90.4163, info: "Needs help: 1520"},
        {lat: 23.5150, lng: 90.5173, info: "Needs help: 1520"},
        {lat: 23.5160, lng: 90.5183, info: "Needs help: 1520"},
        {lat: 23.5170, lng: 90.5193, info: "Needs help: 1520"},
        {lat: 21.5180, lng: 78.5203, info: "Needs help: 1520"},
        {lat: 21.9190, lng: 78.6213, info: "Needs help: 1520"},
        {lat: 21.9200, lng: 78.6223, info: "Needs help: 1520"},
        {lat: 21.9210, lng: 78.6233, info: "Needs help: 1520"},
        {lat: 22.8949, lng: 89.8687, info: "Needs help: 1520"},
        {lat: 22.8230, lng: 89.7253, info: "Needs help: 1520"},
        {lat: 22.8240, lng: 89.7263, info: "Needs help: 1520"},
        {lat: 22.8250, lng: 89.7273, info: "Needs help: 1520"},
        {lat: 22.8456, lng: 89.5403, info: "Needs help: 1520"},
        {lat: 24.7270, lng: 88.8293, info: "Needs help: 1520"},
        {lat: 24.7280, lng: 88.8303, info: "Needs help: 1520"},
        {lat: 24.7290, lng: 88.8313, info: "Needs help: 1520"},
        {lat: 24.3745, lng: 88.6042, info: "Needs help: 1520"}
      ]
    </script>
    <!-- Replace following script src -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/markerclustererplus/2.1.4/markerclusterer.min.js" integrity="sha256-k6ny1ynyuFwRCbNHPHfWZNNWXGLmz5+AN9AZPAa4zeA=" crossorigin="anonymous"></script>
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC37QRGR6Op-mGipsEBBSOnsysS_MboA-o&callback=initMap">
    </script>