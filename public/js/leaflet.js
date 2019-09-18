var mymap = L.map('leafletmap').setView([43.2133, 2.32325000000003], 13);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoidGhvbWFzY2FkZWkiLCJhIjoiY2pxeHQzaWcxMDI1YjQycHBhYmVrYTAwbiJ9.BvaqbQlCb3sJgL_IusmUGg', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/" target="_blank">OpenStreetMap</a> Equipe LauGreDirTomAu Simplon 2019',
	maxZoom: 18,
	id: 'mapbox.streets',
	accessToken: 'your.mapbox.access.token'
}).addTo(mymap);

// Icônes personnalisées
const theIcon = L.icon({
	iconUrl: 'pics/simplon.png',
	iconSize: [30, 30],
	iconAnchor: [14, 12],
});
var marker = L.marker([43.2133, 2.32325000000003], {icon: theIcon}).addTo(mymap)
		.bindPopup('Kappa[R] - Tiers lieu de formation.<br> 302 rue Lamark - 11000 Carcassonne. <br> Tél : 04.68.71.51.27, coworking@carcassonne-agglo.fr')
    .openPopup();
