<!DOCTYPE html>
<?php

$jsonPostUrl = "http://ec2-54-86-220-26.compute-1.amazonaws.com/?query=";

$urlParameters = $_SERVER['QUERY_STRING'];

$splitParameters = explode('&', $urlParameters);

$roomList;
$computerList;

$secondSplitParameters = explode('=', $splitParameters[0]);

# Get the building if we need to
if ($secondSplitParameters[1] != "Any")
{
	#Run Query for rooms within building
	$building = GetJsonResponse($jsonPostUrl . "SELECT%20building_id%20FROM%20buildings%20WHERE%20building_name='" . $secondSplitParameters[1] . "'")[0][0];
	#print $building;

	$roomList = GetJsonResponse($jsonPostUrl . "SELECT%20room_id%20FROM%20rooms%20WHERE%20room_building_id='" . $building . "'");

	#Select ALL computers that match our parameters
	$searchStr = array($jsonPostUrl . "SELECT%20computer_id%20FROM%20computers%20WHERE");

	$concattedRoomSearch = "%20computer_room_id%20in%20(";	

	foreach($roomList as $roomId)
	{
		$concattedRoomSearch = $concattedRoomSearch . $roomId[0] . ",";
	}

	$concattedRoomSearch = rtrim($concattedRoomSearch,",");
	$concattedRoomSearch = $concattedRoomSearch . ")";

#	print $concattedRoomSearch;

	$searchStr[0] = $searchStr[0] . $concattedRoomSearch;
	
	#Processor Search
	$secondSplitParameters = explode('=', $splitParameters[1]);
	if ($secondSplitParameters[1] != "Any")
	{
		$processor = GetJsonResponse($jsonPostUrl . "SELECT%20processor_id%20FROM%20processors%20WHERE%20processor_name='" . $secondSplitParameters[1] . "'")[0][0];
		array_push($searchStr, "computer_processor_id='" . $processor . "'");
	}

	#OS Search
	$secondSplitParameters = explode('=', $splitParameters[2]);
	if ($secondSplitParameters[1] != "Any")
	{
		$os = GetJsonResponse($jsonPostUrl . "SELECT%20os_id%20FROM%20os%20WHERE%20os_name='" . $secondSplitParameters[1] . "'")[0][0];
		array_push($searchStr, "computer_os_id='" . $os . "'");
	}

	#Memory Search
	if (strlen($splitParameters[3]) != strlen("memory="))
	{
		$secondSplitParameters = explode('=', $splitParameters[3]);
		array_push($searchStr, "computer_memory>=" . $secondSplitParameters[1]);
	}

	$finalSearchStr = "";
	
#	print_r($searchStr);

	if(count($searchStr) == 1 && substr($searchStr, -1) == "E")
	{
		$finalSearchStr = substr($searchStr[0], 0, -5);
#	print_r($finalSearchStr);
	}
	else
	{
		$finalSearchStr = implode("%20AND%20", $searchStr);
	#print_r($finalSearchStr);
	}

	$computerList = GetJsonResponse($finalSearchStr);

#	print_r($computerList);

}
else
{
	#Select ALL computers that match our parameters
	$searchStr = array($jsonPostUrl . "SELECT%20computer_id%20FROM%20computers%20WHERE");

	#Processor Search
	$secondSplitParameters = explode('=', $splitParameters[1]);
	if ($secondSplitParameters[1] != "Any")
	{
		$processor = GetJsonResponse($jsonPostUrl . "SELECT%20processor_id%20FROM%20processors%20WHERE%20processor_name='" . $secondSplitParameters[1] . "'")[0][0];
		array_push($searchStr, "computer_processor_id='" . $processor . "'");
	}

	#OS Search
	$secondSplitParameters = explode('=', $splitParameters[2]);
	if ($secondSplitParameters[1] != "Any")
	{
		$os = GetJsonResponse($jsonPostUrl . "SELECT%20os_id%20FROM%20os%20WHERE%20os_name='" . $secondSplitParameters[1] . "'")[0][0];
		array_push($searchStr, "computer_os_id='" . $os . "'");
	}

	#Memory Search
	if (strlen($splitParameters[3]) != strlen("memory="))
	{
		$secondSplitParameters = explode('=', $splitParameters[3]);
		array_push($searchStr, "computer_memory>=" . $secondSplitParameters[1]);
	}

	$finalSearchStr = "";
	
	#print_r($searchStr);

	if(count($searchStr) == 1)
	{
		$finalSearchStr = substr($searchStr[0], 0, -5);
	}
	else
	{
		$finalSearchStr = implode("%20AND%20", $searchStr);
	}

	$computerList = GetJsonResponse($finalSearchStr);


#print_r($computerList);
}


# We now have the list of points, get the rooms and then buildings
foreach ($computerList as $computer)
{
	
}

function GetJsonResponse($htmlQuery)
{
	$json = file_get_contents($htmlQuery);
	$response = json_decode($json);
	return $response->data;
}

?>
<html>
  <head>
    <title>OpenPC - Demo</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script id="mapContainerScript">
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.953458, lng: -83.930424},
          zoom: 16
        });
	
	var marker = new google.maps.Marker({
	  position: {lat: 35.958766, lng: -83.924599},
	  map: map,
	  title: 'Test Marker'
	});

      }
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1Mk5V49WpehS3S_kY6t2XhTFXn79nEwQ&callback=initMap"
    async defer></script>
</body>
</html>
