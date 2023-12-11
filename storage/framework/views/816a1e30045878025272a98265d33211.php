<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Pedagang kaki Lima Sol Sepatu</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<body>
    <h1>Peta pedagang Sol Sepatu Area purwokerto</h1>
    <div id="map" style="width: 700px; height: 500px;"></div>
    <div class="row">
        <div class="col-sm-5">
            <div id="mapid" style="width: 100; height: 600px;"></div>
        </div>
</body>

<script>
    const map = L.map('map').setView([-7.424104895059056, 109.24385407695173], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

</script>
</html><?php /**PATH D:\Programming file\XAMPP\leaflet\resources\views/home.blade.php ENDPATH**/ ?>