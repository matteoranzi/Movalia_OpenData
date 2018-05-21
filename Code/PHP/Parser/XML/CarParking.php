<?php
/**
 * Created by PhpStorm.
 * User: matteoranzi
 * Date: 21/05/18
 * Time: 10.34
 */

class CarParking
{
    private $name;
    private $ID;
    private $status;
    private $total;
    private $free;
    private $tendence;
    private $lat;
    private $lng;


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
     * @param integer $ID
     */
    public function setID($ID){
        $this->ID = $ID;
    }

    /**
     * @return integer
     */
    public function getID()
    {
        return $this->ID;
    }


    /**
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param integer $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param integer $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return integer
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * @param integer $free
     */
    public function setFree($free)
    {
        $this->free = $free;
    }

    /**
     * @return integer
     */
    public function getTendence()
    {
        return $this->tendence;
    }

    /**
     * @param integer $tendence
     */
    public function setTendence($tendence)
    {
        $this->tendence = $tendence;
    }

    /**
     * @return double
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param double $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return double
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param double $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return string
     */
    public function toString(){
        $str = "";
        $str = $str."CarParking{\n";
        $str = $str." name: ".$this->name."\n";
        $str = $str." ID: ".$this->ID."\n";
        $str = $str." status: ".$this->status."\n";
        $str = $str." total: ".$this->total."\n";
        $str = $str." free: ".$this->free."\n";
        $str = $str." tendence: ".$this->tendence."\n";
        $str = $str." lat: ".$this->lat."\n";
        $str = $str." lng: ".$this->lng."\n";
        $str = $str."}\n";

        return $str;
    }

}
