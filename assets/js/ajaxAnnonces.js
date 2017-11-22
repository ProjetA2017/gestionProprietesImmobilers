google.maps.event.addDomListener(window, 'load', init);
function init() {
    var autocomplete = new google.maps.places.Autocomplete(document.getElementById('adresse'));

    google.maps.event.addListener(autocomplete, 'place_changed', function () {

        var place = autocomplete.getPlace();

        document.getElementById('lat').value = place.geometry.location.lat();
        document.getElementById('long').value = place.geometry.location.lng();

    });
}

/*
document.getElementById("bCreationAnnonce").addEventListener("click", ajouterAnnonce);
function ajouterAnnonce() {
    var lat = document.getElementById('lat').value;
    var long = document.getElementById('long').value;
    var identifiant = document.getElementById('identifiant').value;
    var prenom = document.getElementById('prenom').value;
    var nomfamille = document.getElementById('nfamille').value;
    var adresse = document.getElementById('adresse').value;
    var prix = document.getElementById('prix').value;
    var typeannonce = document.getElementById('typeannonce').value;
    var typelogement = document.getElementById('typelogement').value;

    console.log(lat);
    console.log(long);
    $.ajax({
        type: "POST",
        url: "?action=creerAnnonceAjax",
        data: "latitude="+lat+"&longitude="+long+"&identifiant="+identifiant+"&prenom="+prenom+"&nom="+nomfamille+"&adresse="+adresse+"&prix="+prix+"&typeannonce="+typeannonce+"&typelogement="+ typelogement,
        success: function (result) {
            window.location.href = "?action=ajouterImagesAnnonces";
        },
        error: function (data) {
        }
    });
}*/
