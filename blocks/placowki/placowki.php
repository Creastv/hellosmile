<?php 
$posts = get_posts( array(
    'post_type'   => 'placowki',
    'numberposts' => -1,
) );
?>
<div class="b-map-placowki">
    <div class="container">
        <div class="row">
            <div class="b-map-placowki__wraper">
                <div class="col">
                    <InnerBlocks />
                </div>
                <div class="col">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8pMQYqHehRWSDeAVKOrv8JD9s1dR6Y2Q&callback=initMap"> </script>

<script>
var locations = [
    <?php
$i=1;
foreach ($posts as $post) :
setup_postdata($post);
$location = get_field('lokalizacja', $post->ID);
$info =  get_field('info', $post->ID);
$title = get_the_title($post->ID);
?>['<?php echo $title; ?>', '<?php echo $info['adres']; ?>', '<?php echo $info['kod_pocztowy']; ?>', '<?php echo $info['strona_www']; ?>', '<?php echo $location['lat']; ?>', '<?php echo $location['lng']; ?>', '<?php echo $i; ?>'],
    <?php $i++; endforeach; ?>
    // ['Maroubra Beach', -33.950198, 151.259302, 1]
];


// When the user clicks the marker, an info window opens.

function initMap() {
    var myLatLng = {
        lat: 51.9637635,
        lng: 19.5095982
    };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5.7,
        center: myLatLng,
        styles: [{
                "featureType": "landscape.natural",
                "elementType": "geometry.fill",
                "stylers": [{
                        "visibility": "on"
                    },
                    {
                        "color": "#e0efef"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [{
                        "visibility": "on"
                    },
                    {
                        "hue": "#1900ff"
                    },
                    {
                        "color": "#c0e8e8"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [{
                        "lightness": 100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [{
                        "visibility": "on"
                    },
                    {
                        "lightness": 700
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                    "color": "#7dcdcd"
                }]
            }
        ]
    });

    var count = 0;


    for (count = 0; count < locations.length; count++) {

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[count][4], locations[count][5]),
            map: map,
            icon: "<?php echo get_template_directory_uri() ?>/blocks/placowki/pin.png",
        });

        marker.info = new google.maps.InfoWindow({
            content: `
            <div class="wraper-tooltip">
            <div class="top">
            <h3>${locations[count][0]}</h3>
            </div>
            <div class="bottom">
            <p>${locations[count][1]}</p>
            <p>${locations[count][2]}</p>
            <p>${locations[count][3]}</p>
            </div>
            </div>
            `,
        });

        google.maps.event.addListener(marker, 'click', function() {


            var marker_map = this.getMap();
            map.setZoom(8);
            map.setCenter(marker.getPosition());
            this.info.open(marker_map, this);

            // Note: If you call open() without passing a marker, the InfoWindow will use the position specified upon construction through the InfoWindowOptions object literal.
        });
    }
}
</script>
