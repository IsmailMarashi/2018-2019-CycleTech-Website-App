      $(document).ready(function(){
   var http = new XMLHttpRequest();
         var url = 'http://192.168.1.117/t.php';
                  http.open('POST', url, true);
         http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  http.onreadystatechange = function() {
              if (http.readyState == XMLHttpRequest.DONE) {
                  var json=jQuery.parseJSON(http.responseText);
                  json=json.response_array;
                   var mp=  `<script>
                  // Initialize and add the map
                    function initMap() {
              var pos ={lat: 25.197418, lng: 55.279240};
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude
                };})}
                        var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 12, center:pos});
                        map.setOptions({streetViewControl: false});
                        map.setOptions({disableDefaultUI: true});
                        var geocoder = new google.maps.Geocoder;
                        var infowindow = new google.maps.InfoWindow;
                        `; 
                  json=jQuery.parseJSON(json).terminals;
                  for(key in json){
                     mp=mp+`var x`+json[key][0]+` = new google.maps.Marker({position: {lat:`+json[key][4]+`, lng: `+json[key][3]+`}, map: map}); x`
                    +json[key][0]+`.addListener('click', function() {
                    var xy=this;
                    geocoder.geocode( { 'location': xy.getPosition()}, function(results, status) {
                      if (status === 'OK') {
                            if (results[0]) {
                              map.setCenter(xy.getPosition());
                              infowindow.setContent('Hub: `+json[key][0]+`<p>Name: `+json[key][1]+`</p>At: '+results[0].formatted_address);
                              infowindow.open(map, xy);
                           }
                        }
                       });
                  }); `;
                  }

                mp=mp+`}</script>
                <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0c6uz6U6phJevwpEQ10DLgLZ1mf2SVyo&sensor=true&callback=initMap">
                </script>
                `;
                mp=mp;
             $("#m").append(mp);

              }
            }       

                     http.send('');});
