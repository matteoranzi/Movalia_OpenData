<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $link = "http://opendata.5t.torino.it/get_pk";
        $dati = file_get_contents($link);
        
        $offset= strpos($dati, "<td:PK_data Name=", 0);
        $endOffset= 0;
        $rows= array();
        
        while(strpos($dati, "Name=\"", $offset) != false){
            $datirow= array();
            $dato;
            if(getOffset($dati, "Name=\"", $offset) !== false){
                $offset= strpos($dati, "Name=\"", $offset) + 6;
                $endOffset= getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                array_push($datirow, $dato);
            }else{
                array_push($datirow, "");
            }
            if(getOffset($dati, "\" ID=\"", $offset) !== false){
                $offset= strpos($dati, "\" ID=\"", $offset) + 6;
                $endOffset= getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                array_push($datirow, $dato);
            }else{
                array_push($datirow, "");
            }
            if(getOffset($dati, "\" status=\"", $offset) !== false){
                $offset= strpos($dati, "\" status=\"", $offset) + 10;
                $endOffset= getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                array_push($datirow, $dato);
            }else{
                array_push($datirow, "");
            }
            if(getOffset($dati, "\" Total=\"", $offset) !== false){
                $offset= strpos($dati, "\" Total=\"", $offset) + 9;
                $endOffset= getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                array_push($datirow, $dato);
            }else{
                array_push($datirow, "");
            }
            if(getOffset($dati, "\" Free=\"", $offset) !== false){
                $offset= strpos($dati, "\" Free=\"", $offset) + 8;
                $endOffset= getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                array_push($datirow, $dato);
            }else{
                array_push($datirow, "");
            }
            if(getOffset($dati, "\" tendence=\"", $offset) !== false){
                $offset= strpos($dati, "\" tendence=\"", $offset) + 12;
                $endOffset= getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                array_push($datirow, $dato);
            }else{
                array_push($datirow, "");
            }
            if(getOffset($dati, "\" lat=\"", $offset) !== false){
                $offset= strpos($dati, "\" lat=\"", $offset) + 7;
                $endOffset= getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                array_push($datirow, $dato);
            }else{
                array_push($datirow, "");
            }
            if(getOffset($dati, "\" lng=\"", $offset) !== false){
                $offset= strpos($dati, "\" lng=\"", $offset) + 7;
                $endOffset= getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                array_push($datirow, $dato);
            }else{
                array_push($datirow, "");
            }
            array_push($rows, $datirow);
            $offset= $endOffset + 1;
            
            foreach ($datirow as $val){
                echo $val . "  ";
            }
            
            echo "<br>";
        }
        
        function getOffset($dati, $nomeDato, $start){
            $endLine= strpos($dati, "\"/>", $start);
            $offset= strpos($dati, $nomeDato, $start);
            if($offset >= $endLine){
                $offset= false;
            }
            return $offset;
        }
        
        function getEndOffset($dati, $start){
            $endOffset= strpos($dati, "\"", $start);
            return $endOffset;
        }
            
        ?>
    </body>
</html>
