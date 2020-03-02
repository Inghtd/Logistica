<!DOCTYPE html>
<html>
<body>
<?php
$lat="13.705243";
$log="-89.24231";
$nam="punto 0";
    if(isset($_GET['lat'])){
        $lat=$_GET['lat'];
        $log=$_GET['log'];
        $nam=$_GET['nam'];
    }
?>

<h1 class="solo"><?php echo $nam." - Latitud: ".$lat." - Longitud: ".$log; ?></h1>

<div id="googleMap" style="width:100%;height:400px;"></div>


<script>
function myMap() {

var myLatlng = new google.maps.LatLng(<?php echo $lat.", ".$log; ?>);
var mapProp= {
  center:myLatlng,
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);


var marker = new google.maps.Marker({
    position: myLatlng,
    title:"<?php echo $nam; ?>"
});

marker.setMap(map);

}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjyM0CyjiksJbMk4SVzZTz-Uzn5QusoRE&callback=myMap"></script>

</body>
</html> 