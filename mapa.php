<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:95%;height:750px;"></div>

<script>


function myMap() {
var mapProp= {
  center:new google.maps.LatLng(13.705243,-89.24231),
  zoom:6,
};
var map1=new google.maps.LatLng(13.705243,-89.24231);


var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

setMarkers(map);

}

var clientes=[
    ['Punto 1', 13.705243,-89.24231, 5],
    ['Punto 2', 13.696674,-89.197927, 4],
    ['Punto 3', 14.692511,-87.86136, 3],
    ['Punto 4', 12.022747,-86.252007, 2],
    ['Punto 5', 8.103289,-80.596013, 1]
];

function setMarkers(map){
    //agregar as marca al mapa
    var image = {
        url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32)

    };

    var shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: 'poly'
  };


  for (var i = 0; i < clientes.length; i++) {
    var cl = clientes[i];
    var marker = new google.maps.Marker({
      position: {lat: cl[1], lng: cl[2]},
      map: map,
     
      shape: shape,
      title: cl[0],
      zIndex: cl[3]
    });
  }
}



</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&callback=myMap"></script>

</body>
</html> 