<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>Hamzza Pizza | Lokation</title>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
    <div class="container shop-location">
        <h3>Søndergade 20 - 5620 Glamsbjerg</h3>
        <h5>Åbningstider: Alle dage 15:00-21:00</h5>
        
    <div id="map"></div>
    
    </div>
    
    <div class="container vises-tekst">
        <h2>Vi glæder os til at se dig - Hamzza Pizzaria</h2>
    </div>
<script>
function initMap(){
    var location = {lat: 55.277430, lng: 10.106150};
    var map = new google.maps.Map(document.getElementById("map"),{
        zoom: 10,
        center: location
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_U9TnzZC5Gudt8R6ZN2zEdN4mGIm-Ze4&callback=initMap"></script>
</body>
</html>