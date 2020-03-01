<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>



<div id="Map" style="width:95%;height:750px;"></div>

<script>
function myMap1() {
var mapProp= {
  center:new google.maps.LatLng(37.774546, -122.433523),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("Map"),mapProp);
}
</script>



<script>
function myMap() {
    var heatMapData = [
  {location: new google.maps.LatLng(37.782, -122.447), weight: 0.5},
  new google.maps.LatLng(37.782, -122.445),
  {location: new google.maps.LatLng(37.782, -122.443), weight: 2},
  {location: new google.maps.LatLng(37.782, -122.441), weight: 3},
  {location: new google.maps.LatLng(37.782, -122.439), weight: 2},
  new google.maps.LatLng(37.782, -122.437),
  {location: new google.maps.LatLng(37.782, -122.435), weight: 0.5},

  {location: new google.maps.LatLng(37.785, -122.447), weight: 3},
  {location: new google.maps.LatLng(37.785, -122.445), weight: 2},
  new google.maps.LatLng(37.785, -122.443),
  {location: new google.maps.LatLng(37.785, -122.441), weight: 0.5},
  new google.maps.LatLng(37.785, -122.439),
  {location: new google.maps.LatLng(37.785, -122.437), weight: 2},
  {location: new google.maps.LatLng(37.785, -122.435), weight: 3}
];

var sanFrancisco = new google.maps.LatLng(37.774546, -122.433523);

map = new google.maps.Map(document.getElementById('Map'), {
  center: sanFrancisco,
  zoom: 13,
  mapTypeId: 'satellite'
});

var heatmap = new google.maps.visualization.HeatmapLayer({
  data: heatMapData
});
heatmap.setMap(map);

}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&callback=myMap"></script>

</body>
</html> 