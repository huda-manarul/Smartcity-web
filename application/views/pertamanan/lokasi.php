<a href="#" class="map-toggle arrow">locate us on the map</a>
<div id="map">
	<div class="marker" data-lat="48.75221" data-lng="-122.47787" itemprop="map"></div>
</div>


<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=PT+Sans+Narrow);

$white: #fff;
$red: #cc3333;

body {
	margin: 0;
	padding: 0;
	background: $white;
}

a.map-toggle {
	display: block;
	position: relative;
	padding: 30px 0;
	width: 100%;
	background: $red;
	color: $white;
	font: normal 22px 'PT Sans Narrow', sans-serif;
	letter-spacing: 2px;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
}

.arrow:after {
	display:block;
	position: absolute;
	margin-left: -50px;
	top: 88px;
	left: 50%;
	content:"";
	border-left: 50px solid transparent;
	border-right: 50px solid transparent;
	border-top: 30px solid $red; 
	z-index: 999;
}

#map {
	width: 100%;
	min-width: 320px;
	height:300px;
}
</style>
<script type="text/javascript">
	jQuery(document).ready(function ($) {

		$('#map').hide();
		$('.map-toggle').on('click', function (e) {
			e.preventDefault();
			var elem = $(this).next('#map')
			$('#map').not(elem).hide('fast');
			elem.slideToggle('fast', function () {
				google.maps.event.trigger(this, 'toggle');
			});
		});

	});


	jQuery(document).ready(function ($) {
	    /*
     *  render_map
     *
     *  This function will render a Google Map onto the selected jQuery element
     *
     *  @type    function
     *  @date    8/11/2013
     *  @since   4.3.0
     *
     *  @param   $el (jQuery element)
     *  @return  n/a
     */

     var map;

     function render_map($el) {

        // var
        var $markers = $el.find('.marker');

        // vars
        var args = {
        	zoom: 2,
        	center: new google.maps.LatLng(0, 0),
        	mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        // create map               

        map = (function (o, a) {
        	var m = new google.maps.Map(o, a);
        	google.maps.event.addListener(o, 'toggle', function () {
        		var c = m.getCenter();
        		google.maps.event.trigger(m, 'resize');
        		if(!m.get('centered')){
        			m.setCenter(c);
        			m.set('centered',1)
        		}

        	});
        	return m;
        })($el[0], args)

        // add a markers reference
        map.markers = [];

        // add markers
        $markers.each(function () {

        	add_marker($(this), map);

        });

        // center map
        center_map(map);
    }

    /*
     *  add_marker
     *
     *  This function will add a marker to the selected Google Map
     *
     *  @type    function
     *  @date    8/11/2013
     *  @since   4.3.0
     *
     *  @param   $marker (jQuery element)
     *  @param   map (Google Map object)
     *  @return  n/a
     */

     function add_marker($marker, map) {

        // var
        var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng'));

        // create marker
        var marker = new google.maps.Marker({
        	position: latlng,
        	map: map
        });

        // add to array
        map.markers.push(marker);

        // if marker contains HTML, add it to an infoWindow
        if ($marker.html()) {
            // create info window
            var infowindow = new google.maps.InfoWindow({
            	content: $marker.html()
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function () {

            	infowindow.open(map, marker);

            });
        }

    }

    /*
     *  center_map
     *
     *  This function will center the map, showing all markers attached to this map
     *
     *  @type    function
     *  @date    8/11/2013
     *  @since   4.3.0
     *
     *  @param   map (Google Map object)
     *  @return  n/a
     */

     function center_map(map) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each(map.markers, function (i, marker) {

        	var latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

        	bounds.extend(latlng);

        });

        // only 1 marker?
        if (map.markers.length == 1) {
            // set center of map
            map.setCenter(bounds.getCenter());
            map.setZoom(16);
        } else {
            // fit to bounds
            map.fitBounds(bounds);
        }

        $(document).on('click', '#map', function () {
        	google.maps.event.trigger(map, 'resize');
        	map.setCenter(bounds.getCenter());
        	map.setZoom(16);
        });

    }

    /*
     *  document ready
     *
     *  This function will render each map when the document is ready (page has loaded)
     *
     *  @type    function
     *  @date    8/11/2013
     *  @since   5.0.0
     *
     *  @param   n/a
     *  @return  n/a
     */

     $(document).ready(function () {

     	$('#map').each(function () {

     		render_map($(this));

     	});

     });
 });
</script>