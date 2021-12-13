<!DOCTYPE html>
<html>

<head>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
</head>

<body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            // var uluru = {
            //     lat: -25.344,
            //     lng: 131.036
            // };
            // The map, centered at Uluru
            // var tester;
            // var map = new google.maps.Map(document.getElementById('map'), {
            //     zoom: 4,
            //     center: uluru
            // });
            if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var tester = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 4,
                            center: tester
                        });
                        var marker = new google.maps.Marker({position: tester, map: map});
                    });
            }
            // The marker, positioned at Uluru
            //   var marker = new google.maps.Marker({position: uluru, map: map});
            // var marker = new google.maps.LatLng(-25.344, 131.036);
        }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfQiyNZ7M2P_vWQZWYNUNj0TSIBt8fhSE&callback=initMap">
    </script>
    <!-- <script defer
    src="https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAfQiyNZ7M2P_vWQZWYNUNj0TSIBt8fhSE">
    </script> -->
</body>

</html>