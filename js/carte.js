function initialisation(){
	var centreCarte = new google.maps.LatLng(44.826971, -0.559583);
	var optionsCarte = {
		zoom: 6,
		center: centreCarte
	}
	var maCarte = new google.maps.Map(document.getElementById("carte"), optionsCarte);

	//création du marqueur
    var marqueur = new google.maps.Marker({
      position: centreCarte,
      map: maCarte
    });
};
google.maps.event.addDomListener(window, 'load', initialisation)