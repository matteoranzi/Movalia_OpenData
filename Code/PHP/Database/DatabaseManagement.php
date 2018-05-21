<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    * @param string $table
    */
   function clearTable($table)
   {
       global $connection;
       $query = "TRUNCATE TABLE " . $table;
       echo $query;
       mysqli_query($connection, $query);
   }
   
   /**
    * 
    * @param string $table
    */
   function printAll($table)
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
           echo "</tr> ";
       }
       echo "</table>";
   }
}
