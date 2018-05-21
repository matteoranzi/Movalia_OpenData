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
            
            $biketn = "bikesharingtrento";
            $parkingtorino = "carparkingtorino";
            define("TRENTO_BIKE_SHARING_URL", "https://os.smartcommunitylab.it/core.mobility/bikesharing/trento");
            define("TORINO_PARKING_DATA_URL", "http://opendata.5t.torino.it/get_pk");
            
            $connection = mysqli_connect("localhost", "root", "", "opendata", 3306);         
            
            
            
            $databaseManager = new DatabaseManagement(($connection));
            $parser = new ParserJSON(TRENTO_BIKE_SHARING_URL);
            
            $array = $parser->parse();
                        
            $databaseManager->clearTable($biketn);
            $databaseManager->addBikeSharing($array);
            $databaseManager->printAllTN($biketn);
            
?>
            
           
            
            

