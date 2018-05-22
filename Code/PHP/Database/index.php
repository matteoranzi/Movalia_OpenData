<html>
    <head>
        
    </head>
    <body>
        <meta http-equiv="refresh" content="600">
    </body>
</html>

<?php
            //include classes
            include 'BikeSharingStation.php';
            include 'ParserJSON.php';
            include 'CarParking.php';
            include 'DatabaseManagement.php';
            include 'ParserXML.php';
            
            //tables' names
            $bikeTN = "bikesharingtrento";
            $parkingTO = "carparkingtorino";
            
            //URL of the JSON and XML databases
            define("TRENTO_BIKE_SHARING_URL", "https://os.smartcommunitylab.it/core.mobility/bikesharing/trento");
            define("TORINO_PARKING_DATA_URL", "http://opendata.5t.torino.it/get_pk");
            
            //connection to the SQL server
            $connection = mysqli_connect("localhost", "root", "", "opendata", 3306);         
            
            //create DatabaseManagement object
            $databaseManager = new DatabaseManagement(($connection));
            
            //parses 
            $parserJSON = new ParserJSON(TRENTO_BIKE_SHARING_URL);
            $parserXML = new ParserXML(TORINO_PARKING_DATA_URL);
            
            //assign arrays of objects to variables
            $arrayTN = $parserJSON->parse();
            $arrayTO = $parserXML->parse();
            
            //wipe tables from old data
            $databaseManager->clearTable($bikeTN);
            $databaseManager->clearTable($parkingTO);
            
            //add now data to tables
            $databaseManager->addBikeSharing($arrayTN);
            $databaseManager->addParkingTO($arrayTO);
            
            //print data
            $databaseManager->printAllTN($bikeTN);
            echo "<br><br><br>";
            $databaseManager->printAllTO($parkingTO);          
    ?>           
           
            
            

