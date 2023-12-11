<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peta Lokasi Pedagang Kaki Lima Sol Sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  </head>
  <body>
    <h1>Peta pedagang Sol Sepatu Area purwokerto</h1>
    <div id="map" style="width: 700px; height: 500px;"></div>
    <div class="row">
        <div class="col-sm-5">
            <div id="mapid" style="width: 100; height: 600px;"></div>
        </div>

    <script src="resources/Titik/Sol_Sepatu_1.js"></script>
    <script src="resources/Titik/Sol_Sepatu_2.js"></script>
    <script src="resources/Titik/Sol_Sepatu_3.js"></script>
    <script src="resources/Titik/Sol_Sepatu_4.js"></script>
    <script src="resources/Titik/Sol_Sepatu_5.js"></script>
    <script>
    const map = L.map('map').setView([-7.42430789042247, 109.24378735545575], 13);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    L.geoJSON(Sol_Sepatu_1).bindPopup("Sol Sepatu 1 <br> 09.00 - 15.00").addTo(map);
    L.geoJSON(Sol_Sepatu_2).bindPopup("Sol Sepatu 2 <br> 09.00 - 15.00").addTo(map);
    L.geoJSON(Sol_Sepatu_3).bindPopup("Sol Sepatu 3 <br> 09.00 - 15.00").addTo(map);
    L.geoJSON(Sol_Sepatu_4).bindPopup("Sol Sepatu 4 <br> 09.00 - 15.00").addTo(map);
    L.geoJSON(Sol_Sepatu_5).bindPopup("Sol Sepatu 5 <br> 09.00 - 15.00").addTo(map);
    </script>
  </body>
</html>