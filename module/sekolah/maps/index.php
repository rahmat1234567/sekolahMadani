<!doctype html>
<html>
	<head>
		<title>Contoh Script Input Koordinat Google Map dengan Cara Geser Marker</title>
		<?php if($x==""){ ?>
			<script type="text/javascript" src="../../../assets/js/jquery-1.10.2.js"></script>
			<link rel="stylesheet" type="text/css" href="../../../assets/css/jquery-gmaps-latlon-picker.css"/>
			<script type="text/javascript" src="../../../assets/js/jquery-gmaps-latlon-picker.js"></script>
		<?php } ?>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&file=api&v=2&key=AIzaSyDAfxPmcZmE6WBOWH_OjUjFqFvSdPtXWaQ"></script>
	</head>
	<style type="text/css">
		.gllpMap{
			transition: all 500ms ease-in-out;
		}
	</style>
	<body>
		<h3>Input Koordinat Peta</h3>
		<fieldset class="gllpLatlonPicker">
            <div class="gllpMap">Google Maps</div>
            Latitude : <input type="text" name="lati" class="gllpLatitude" value="0.5070628154890728" readonly/>
            Longitude : <input type="text" name="longi" class="gllpLongitude" value="101.44805035605714" readonly/>
            Zoom : <input type="hidden" name="zoom" class="gllpZoom" value="11"/>
        </fieldset>
	</body>
</html>