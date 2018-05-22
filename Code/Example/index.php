<html>
    <head>
        
    </head>
    <body>
        <meta http-equiv="refresh" content="600">
    </body>
</html>
<?php
            include 'BikeSharingStation.php';
            include 'ParserJSON.php';
            include 'CarParking.php';
            include 'DatabaseManagement.php';
            include 'ParserXML.php';
            
            $bikeTN = "bikesharingtrento";
            $parkingTO = "carparkingtorino";
            
            define("TRENTO_BIKE_SHARING_URL", "https://os.smartcommunitylab.it/core.mobility/bikesharing/trento");
            define("TORINO_PARKING_DATA_URL", "http://opendata.5t.torino.it/get_pk");
            
            $connection = mysqli_connect("localhost", "root", "", "opendata", 3306);         
            
            
            $databaseManager = new DatabaseManagement(($connection));
            
            $parserJSON = new ParserJSON(TRENTO_BIKE_SHARING_URL);
            $parserXML = new ParserXML(TORINO_PARKING_DATA_URL);
            
            $arrayTN = $parserJSON->parse();
            $arrayTO = $parserXML->parse();
                        
            $databaseManager->clearTable($bikeTN);
            $databaseManager->clearTable($parkingTO);
            
            $databaseManager->addBikeSharing($arrayTN);
            $databaseManager->addParkingTO($arrayTO);
            
            $databaseManager->printAllTN($bikeTN);
            echo "<br><br><br>";
            $databaseManager->printAllTO($parkingTO);
            
            
            
?>
            
           
            
            

