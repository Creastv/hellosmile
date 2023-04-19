// When the user clicks the marker, an info window opens.

function initMap() {
  var myLatLng = {
    lat: 51.9637635,
    lng: 19.5095982
  };

  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 5.7,
    center: myLatLng,
    styles: [
      {
        featureType: "landscape.natural",
        elementType: "geometry.fill",
        stylers: [
          {
            visibility: "on"
          },
          {
            color: "#e0efef"
          }
        ]
      },
      {
        featureType: "poi",
        elementType: "geometry.fill",
        stylers: [
          {
            visibility: "on"
          },
          {
            hue: "#1900ff"
          },
          {
            color: "#c0e8e8"
          }
        ]
      },
      {
        featureType: "road",
        elementType: "geometry",
        stylers: [
          {
            lightness: 100
          },
          {
            visibility: "simplified"
          }
        ]
      },
      {
        featureType: "road",
        elementType: "labels",
        stylers: [
          {
            visibility: "off"
          }
        ]
      },
      {
        featureType: "transit.line",
        elementType: "geometry",
        stylers: [
          {
            visibility: "on"
          },
          {
            lightness: 700
          }
        ]
      },
      {
        featureType: "water",
        elementType: "all",
        stylers: [
          {
            color: "#7dcdcd"
          }
        ]
      }
    ]
  });

  var count = 0;

  for (count = 0; count < locations.length; count++) {
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[count][4], locations[count][5]),
      map: map,
      icon: "https://hellosmile.pl/wp-content/themes/hellosmile/blocks/placowki/pin.png"
    });

    marker.info = new google.maps.InfoWindow({
      content: `
              <div class="wraper-tooltip">
            <div class="top">
            <h3>${locations[count][0]}</h3>
            </div>
            <div class="bottom">
            <span>${locations[count][1]}</span>
            <span>${locations[count][2]}</span>
            <span>${locations[count][3]}</span>
            <a class="btn" href="https://www.google.com/maps/dir/?api=1&destination=${locations[count][4]},${locations[count][5]}" rel="nooopener">Wyznacz trasę</a>
            </div>
            </div>
            `
    });

    google.maps.event.addListener(marker, "click", function () {
      var marker_map = this.getMap();
      map.setZoom(8);
      map.setCenter(marker.getPosition());
      this.info.open(marker_map, this);

      // Note: If you call open() without passing a marker, the InfoWindow will use the position specified upon construction through the InfoWindowOptions object literal.
    });
  }
}
