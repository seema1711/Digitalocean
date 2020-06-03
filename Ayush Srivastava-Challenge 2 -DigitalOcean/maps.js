


const mymap = L.map('mapContainer').setView([20.5937, 78.9629] ,5);
const mapBoxToken =api;
console.log(mapBoxToken)
L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/dark-v10/tiles/{z}/{x}/{y}?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
maxZoom: 5,
id: 'mapbox/streets-v11',
tileSize: 512,
zoomOffset: -1,
accessToken: mapBoxToken
}).addTo(mymap);
var marker = L.marker([20.5937, 78.9629]).addTo(mymap);

marker.bindPopup("<b>COVID-19 Cnf Cases:-</b><br><%=confirmed%>");
