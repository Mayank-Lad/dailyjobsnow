<?php 
session_start();
include('php/config.php');
if(empty($_SESSION['Emailid'])&& empty($_SESSION['number'])&& empty($_SESSION['name'])&& empty($_SESSION['genderuser'])&&empty($_SESSION['role'])&&empty($_SESSION['area'])):
    header('Location:index.php');
endif;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Reverse geocoding from map</title>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="main5.js"></script>
  <!-- Load Leaflet from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@2.5.0/dist/esri-leaflet.js"
    integrity="sha512-ucw7Grpc+iEQZa711gcjgMBnmd9qju1CICsRaryvX7HJklK0pGl/prxKvtHwpgm5ZHdvAil7YPxI1oWPOWK3UQ=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet Geocoder from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"
    integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA=="
    crossorigin=""></script>

  <style>
    body { margin:0; padding:0; }
    #map { position: absolute; top:0; bottom:0; right:0; left:0; }
  </style>
</head>
<body>

<div id="map"></div>
<script>
  var lat;
  var lon
var map = L.map('map').setView([21.1290, 82.7792], 5);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  var gcs = L.esri.Geocoding.geocodeService();

  map.on('click', (e)=>{
    gcs.reverse().latlng(e.latlng).run((err, res)=>{
      if(err) return;
      alert(res.latlng);
      console.log(res.latlng);
      var lat = res.latlng.lat;
      var lon = res.latlng.lng;
console.log(lat);
      calc(res.latlng);
      L.marker(res.latlng).addTo(map).bindPopup(`${res.address.Match_addr} <br><a href="workerspage3.php"><button>go back</button></a>`).openPopup();
    });
  });
</script>
</body>
</html>