function myMap() {
	var myCenter = new google.maps.LatLng(48.860470, 2.337547);
	var mapCanvas = document.getElementById("map");
	var mapOptions = {center: myCenter, zoom: 15};
	var map = new google.maps.Map(mapCanvas, mapOptions);
	directionsService = new google.maps.DirectionsService;
	directionsDisplay = new google.maps.DirectionsRenderer;
	directionsDisplay.setMap(map);
	/*var marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);*/
}

function calcRoute() {
	current_pos = new google.maps.LatLng(48.862829, 2.338203);
	end_pos = new google.maps.LatLng(48.860470, 2.337547);
	var request = {
		origin:current_pos,
		destination:end_pos,
		travelMode: google.maps.TravelMode.DRIVING
	};
	directionsService.route(request, function(result, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(result);
		}
	});
}

function Edit(edit, save) {
	p = document.getElementById(edit);
	p.setAttribute("contenteditable", true);
	p.style.background = "rgba(255, 255, 255, 0.5)";

	saveButton = document.getElementById(save);
	saveButton.setAttribute("type", "image");
}

function saveEdits() {

	p.setAttribute("contenteditable", false);
	p.style.background = "none";

	saveButton.setAttribute("type", "hidden");
}