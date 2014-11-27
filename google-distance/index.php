<?php

# This will be the vars at the top of the page:
$address1 = "529 5th Ave, New York, NY 10017";
$address2 = "1131 5th St, Miami Beach, FL 33139";

?>
<html>
<head>

    <script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAA7j_Q-rshuWkc8HyFI4V2HxQYPm-xtd00hTQOC0OXpAMO40FHAxT29dNBGfxqMPq5zwdeiDSHEPL89A" type="text/javascript"></script>
    <script type="text/javascript">

    var geocoder, location1, location2, gDir;

    var address1 = '<?= $address1 ?>';
    var address2 = '<?= $address2 ?>';

    function initialize() {
        geocoder = new GClientGeocoder();
        gDir = new GDirections();
        GEvent.addListener(gDir, "load", function() {
            var drivingDistanceMiles = gDir.getDistance().meters / 1609.344;
            document.getElementById('results').innerHTML = '' + Math.round(drivingDistanceMiles) + '';
        });
        showLocation();
    }

    function showLocation() {
        geocoder.getLocations(address1, function (response) {
            if (!response || response.Status.code != 200)
            {
                alert("");
            }
            else
            {
                location1 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
                geocoder.getLocations(address2, function (response) {
                    if (!response || response.Status.code != 200)
                    {
                        alert("");
                    }
                    else
                    {
                        location2 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
                        gDir.load('from: ' + location1.address + ' to: ' + location2.address);
                    }
                });
            }
        });
    }

    </script>
</head>

<body onload="initialize()">
    <p id="results">Getting distance ... <img src="http://preloaders.net/preloaders/89/Fading%20line.gif" width="16"></p>
</body>
</html>
