<?php
/**
 * Created by PhpStorm.
 * User: matteoranzi
 * Date: 21/05/18
 * Time: 10.48
 */

include 'ParserXML.php';
include 'CarParking.php';

define("TORINO_CAR_PARKING_LINK", "http://opendata.5t.torino.it/get_pk");

$parser = new ParserXML(TORINO_CAR_PARKING_LINK);

$cars = $parser->parse();
foreach ($cars as $car) {
    print_r($car->toString()."\n");
}
