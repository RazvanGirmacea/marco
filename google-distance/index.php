<html>
<head>

    <script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAA7j_Q-rshuWkc8HyFI4V2HxQYPm-xtd00hTQOC0OXpAMO40FHAxT29dNBGfxqMPq5zwdeiDSHEPL89A" type="text/javascript"></script>
    <script type="text/javascript">

    var geocoder, location1, location2, gDir;

    function initialize() {
        geocoder = new GClientGeocoder();
        gDir = new GDirections();
        GEvent.addListener(gDir, "load", function() {
            var drivingDistanceMiles = gDir.getDistance().meters / 1609.344;
            document.getElementById('results').innerHTML = '' + drivingDistanceMiles + '';
        });
    }

    function showLocation() {
        geocoder.getLocations(document.forms[0].address1.value, function (response) {
            if (!response || response.Status.code != 200)
            {
                alert("");
            }
            else
            {
                location1 = {lat: response.Placemark[0].Point.coordinates[1], lon: response.Placemark[0].Point.coordinates[0], address: response.Placemark[0].address};
                geocoder.getLocations(document.forms[0].address2.value, function (response) {
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

    <form action="#" onsubmit="showLocation(); return false;">
        <p>
            <input type="text" name="address1" value="" />
            <input type="text" name="address2" value="" />
            <input type="submit" value="Search" />
        </p>
    </form>
    <p id="results"></p>

</body>
</html>
