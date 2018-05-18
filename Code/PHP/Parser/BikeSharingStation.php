<?php

/**
 * Created by PhpStorm.
 * User: matteoranzi
 * Date: 13/05/18
 * Time: 18.21
 */
class BikeSharingStation {
    private $name;
    private $address;
    private $ID ;
    private $bikes;
    private $slots;
    private $totalSlots;
    private $longitude;
    private $latitude;

    /**
     * BikeSharingStation constructor.
     * @param string $ID
     */
    public function __construct($ID) {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return integer
     * number of bikes available
     */
    public function getBikes()
    {
        return $this->bikes;
    }

    /**
     * @param integer $bikes
     * number of bikes available
     */
    public function setBikes($bikes)
    {
        $this->bikes = $bikes;
    }

    /**
     * @return integer
     * number of free slots
     */
    public function getSlots()
    {
        return $this->slots;
    }

    /**
     * @param integer $slots
     * number of free slots
     */
    public function setSlots($slots)
    {
        $this->slots = $slots;
    }

    /**
     * @return integer
     */
    public function getTotalSlots()
    {
        return $this->totalSlots;
    }

    /**
     * @param integer $totalSlots
     */
    public function setTotalSlots($totalSlots)
    {
        $this->totalSlots = $totalSlots;
    }

    /**
     * @return double
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param double $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return double
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param double $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function toString(){
        $str = "";
        $str = $str."BikeSharingStation{\n";
        $str = $str." name: ".$this->name."\n";
        $str = $str." address: ".$this->address."\n";
        $str = $str." id: ".$this->ID."\n";
        $str = $str." bikes: ".$this->bikes."\n";
        $str = $str." slots: ".$this->slots."\n";
        $str = $str." totalSlots: ".$this->totalSlots."\n";
        $str = $str." latitude: ".$this->latitude."\n";
        $str = $str." longitude: ".$this->longitude."\n";
        $str = $str."}\n";

        return $str;
    }
}