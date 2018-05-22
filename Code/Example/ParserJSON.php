<?php

/**
 * Created by PhpStorm.
 * User: matteoranzi
 * Date: 18/05/18
 * Time: 11.43
 */
class ParserJSON {
    private $link;

    /**
     * ParserJSON constructor.
     * @param string $link
     */
    public function __construct($link) {
        $this->link = $link;
    }

    /**
     * @return BikeSharingStation[]
     */
    public function parse(){
        $list = array();
        $jsonTrentoBikeSharing = file_get_contents($this->link);
        $bikeSharingStations = json_decode($jsonTrentoBikeSharing);

        foreach ($bikeSharingStations as &$bikeSharingStation) {
            $obj = new BikeSharingStation($bikeSharingStation->id);
            $obj->setName($bikeSharingStation->name);
            $obj->setAddress($bikeSharingStation->address);
            $obj->setBikes($bikeSharingStation->bikes);
            $obj->setSlots($bikeSharingStation->slots);
            $obj->setTotalSlots($bikeSharingStation->totalSlots);
            $obj->setLatitude($bikeSharingStation->position[0]);
            $obj->setLongitude($bikeSharingStation->position[1]);

            array_push($list, $obj);
        }

        return $list;
    }
}
