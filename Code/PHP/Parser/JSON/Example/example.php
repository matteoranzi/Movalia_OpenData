<?php
/**
 * Created by PhpStorm.
 * User: matteoranzi
 * Date: 12/05/18
 * Time: 18.33
 */

include 'BikeSharingStation.php';
include 'ParserJSON.php';

define("TRENTO_BIKE_SHARING_URL", "https://os.smartcommunitylab.it/core.mobility/bikesharing/trento");

$parser = new ParserJSON(TRENTO_BIKE_SHARING_URL);
$myList = $parser->parse();

$i = 0;
foreach ($myList as $item) {
    echo $i.") ".$item->getName()."\n";
    $i++;
}

