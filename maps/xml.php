<?php
function parseToXML($htmlStr)
{
  $xmlStr=str_replace('<','&lt;',$htmlStr);
  $xmlStr=str_replace('>','&gt;',$xmlStr);
  $xmlStr=str_replace('"','&quot;',$xmlStr);
  $xmlStr=str_replace("'",'&#39;',$xmlStr);
  $xmlStr=str_replace("&",'&amp;',$xmlStr);
  return $xmlStr;
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each

$url = "https://api.fogos.pt/new/fires";

$response = file_get_contents($url);
$data = json_decode($response, true);

if (isset($data["data"])) {
    $data_inside_data = $data["data"];
    foreach ($data_inside_data as $item) {
        // Process or use each JSON item here
        $id = $item["id"];
        $lat = $item["lat"];
        $lng = $item["lng"];
        $location = $item["location"];
        $date = $item["date"];
        $hour = $item["hour"];
        $man = $item["man"];
        $terrain = $item["terrain"];
        $meios_aquaticos = $item["aerial"];

        // Add to XML document node
        echo '<marker ';
        echo 'id="' . $id . '" ';
        echo 'name="' . parseToXML("Inicio: $hour ($date)") . '" ';
        echo 'address="' . parseToXML("Localização: $location (Bombeiros: $man, Terrestres: $terrain, Aéreos: $meios_aquaticos)") . '" ';
        echo 'lat="' . $lat . '" ';
        echo 'lng="' . $lng . '" ';

        echo 'type="' . "fogo" . '" ';
        echo '/>';
        $ind = $ind + 1;
  }
} else {
    echo "The 'DATA' field was not found in the JSON response.";
}


// End XML file
echo '</markers>';
?>
