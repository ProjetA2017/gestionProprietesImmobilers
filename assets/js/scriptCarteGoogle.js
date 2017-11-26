function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(45.50884, -73.58781),
        zoom: 10

    });
    var infoWindow = new google.maps.InfoWindow;

    downloadUrl('?action=chargerMarkersCarte', function(data) {
        var xml = data.responseXML;
        //alert(xml);//TODO : Enlever
        var markers = xml.documentElement.getElementsByTagName('marker');
        Array.prototype.forEach.call(markers, function(markerElem) {
            var name = markerElem.getAttribute('name');
            var address = markerElem.getAttribute('address');
            var type = markerElem.getAttribute('type');
            var point = new google.maps.LatLng(
                parseFloat(markerElem.getAttribute('lat')),
                parseFloat(markerElem.getAttribute('lng')));
            var getpath=markerElem.getAttribute('path');// pour obtenir le path pour l image
            var infowincontent = document.createElement('div');
            //alert(markers);//TODO : Enlever
            var textprix= document.createElement('strong');
            textprix.style.color='#f12b4a';
            textprix.fontWeight = "bolder";
            textprix.fontSize='900px';
            textprix.textContent=type + '$ '; // on va changer le nom par prix
            infowincontent.appendChild(textprix);
            infowincontent.appendChild(document.createElement('br'));

            var strong = document.createElement('strong');
            strong.textContent = name;
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

            var text = document.createElement('text');
            text.textContent = address;
            infowincontent.appendChild(text);
            infowincontent.appendChild(document.createElement('br'));

            var image= document.createElement('img');
            image.style.height='200px';
            image.style.width='200px';
            image.src=getpath;

            infowincontent.appendChild(image);

            var icon={
                url:'upload/imagesAnnonces/default.png',
                scaledSize:new google.maps.Size(35,35),
                origin: new google.maps.Point(0,0),
                anchor: new google.maps.Point(0,0)
            }
            var marker = new google.maps.Marker({
                map: map,
                position: point,
                //label: icon.label
                icon:icon
            });
            marker.addListener('mouseout', function() {
                    infoWindow.close(map,marker);
            });
            marker.addListener('mouseover', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
            });
            marker.addListener('click',function() {
                infoWindow.close(map, marker);
                document.getElementById("message").innerHTML = "<style>label{ color:darkblue} #afficheDetailsMarker img{ width: 400px; height: 400px; position:relative; }</style><label >Propietaire :</label> <strong>" + name + "</strong>" + "<br>" +
                    "<label>Adresse :</label> <strong>" + address + "</strong><br><img src=" + getpath + " >";

            });
        });
    });
}


function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
        new ActiveXObject('Microsoft.XMLHTTP') :
        new XMLHttpRequest;

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };

    request.open('GET', url, true);
    request.send(null);
}

function doNothing() {}
