<?php

/**
 * Description of DatabaseManagement
 *
 * @author LORENZO.ORSINGHER
 */

class DatabaseManagement {
    
    private $connection;
    
    /**
     * 
     * @param mysqlu_connection $connection
     */
    function __construct($connection)
    {
        $this->connection = $connection;
    }

    /**
    * 
    * @param  BikeSharingStation[] $array
    */
   function addBikeSharing($array)
   {
       global $connection;
       foreach ($array as $row)
       {
           $query = "INSERT INTO `bikesharingtrento` (`pk`, `name`, `address`, `id`, `bikes`, `free`, `total`, `lat`, `lng`) VALUES (NULL, '" . $row->getName() . "', '" . $row->getAddress() . "', '" . $row->getID() . "', '" . $row->getBikes() . "', '" . $row->getSlots() . "', '" . $row->getTotalSlots() . "', '" . $row->getLatitude() . "', '" . $row->getLongitude() . "')";
           mysqli_query($connection, $query);
       }
   }
   
   /**
    * 
    * @global type $connectionTO
    * @param CarParking[] $array
    */
    function addParkingTO($array)
   {
       global $connection;
       foreach ($array as $row)
       {
           $query = "INSERT INTO `carparkingtorino` (`pk`, `name`, `id`, `stat`, `total`, `free`, `tendence`, `lat`, `lng`) VALUES (NULL, '" . $row->getName() . "', '" . $row->getID() . "', '" . $row->getStatus() . "', '" . $row->getTotal() . "', '" . $row->getFree() . "', '" . $row->getTendence() . "', '" . $row->getLat() . "', '" . $row->getLng() . "')";
           mysqli_query($connection, $query);
       }
   }
   
   /**
    * 
    * @param string $table
    */
   function clearTable($table)
   {
       global $connection;
       $query = "TRUNCATE TABLE " . $table;
       mysqli_query($connection, $query);
   }
   
   /**
    * 
    * @param string $table
    */
   function printAllTN($table)
   {
       global $connection;
       $query = "SELECT * FROM $table";
       $result = mysqli_query($connection, $query);
       echo "<table>";
       while($row = mysqli_fetch_array($result))
       {
           echo "<tr> ";
           echo "<td> pk: " . $row['pk'] . "</td>";
           echo "<td> id: " . $row['id'] . "</td>";
           echo "<td> name: " . $row['name'] . "</td>";
           echo "<td> bikes: " . $row['bikes'] . "</td>";
           echo "<td> free: " . $row['free'] . "</td>";
           echo "<td> total: " . $row['total'] . "</td>";
           echo "<td> lat: " . $row['lat'] . "</td>";
           echo "<td> lng: " . $row['lng'] . "</td>";
           echo "</tr> ";
       }
       echo "</table>";
   }
   
   function printAllTO($table)
   {
       global $connection;
       $query = "SELECT * FROM $table";
       $result = mysqli_query($connection, $query);
       echo "<table>";
       while($row = mysqli_fetch_array($result))
       {
           echo "<tr> ";
           echo "<td> pk: " . $row['pk'] . "</td>";
           echo "<td> id: " . $row['id'] . "</td>";
           echo "<td> name: " . $row['name'] . "</td>";
           echo "<td> status: " . $row['stat'] . "</td>";
           echo "<td> total: " . $row['total'] . "</td>";
           echo "<td> free: " . $row['free'] . "</td>";
           echo "<td> tendence: " . $row['tendence'] . "</td>";
           echo "<td> lat: " . $row['lat'] . "</td>";
           echo "<td> lng: " . $row['lng'] . "</td>";
           echo "</tr> ";
       }
       echo "</table>";
   }
   
}
