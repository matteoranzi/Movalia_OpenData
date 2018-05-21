<?php
/**
 * Created by PhpStorm.
 * User: matteoranzi
 * Date: 21/05/18
 * Time: 11.52
 */

class ParserXML {
    private $link;

    /**
     * ParserXML constructor.
     * @param string $link
     */
    public function __construct($link) {
        $this->link = $link;
    }


    /**
     * @return CarParking[]
     */
    public function parse(){
        $listCarParking = array();
        $dati = file_get_contents($this->link);

        $offset= strpos($dati, "<td:PK_data Name=", 0);
        $endOffset= 0;

        while(strpos($dati, "Name=\"", $offset) != false){
            $dato = null;
            $carParking = new CarParking();

            if($this->getOffset($dati, "Name=\"", $offset) !== false){
                $offset= strpos($dati, "Name=\"", $offset) + 6;
                $endOffset= $this->getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                $carParking->setName($dato);
            }

            if($this->getOffset($dati, "\" ID=\"", $offset) !== false){
                $offset= strpos($dati, "\" ID=\"", $offset) + 6;
                $endOffset= $this->getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                $carParking->setID($dato);
            }

            if($this->getOffset($dati, "\" status=\"", $offset) !== false){
                $offset= strpos($dati, "\" status=\"", $offset) + 10;
                $endOffset= $this->getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                $carParking->setStatus($dato);
            }

            if($this->getOffset($dati, "\" Total=\"", $offset) !== false){
                $offset= strpos($dati, "\" Total=\"", $offset) + 9;
                $endOffset= $this->getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                $carParking->setTotal($dato);
            }

            if($this->getOffset($dati, "\" Free=\"", $offset) !== false){
                $offset= strpos($dati, "\" Free=\"", $offset) + 8;
                $endOffset= $this->getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                $carParking->setFree($dato);
            }

            if($this->getOffset($dati, "\" tendence=\"", $offset) !== false){
                $offset= strpos($dati, "\" tendence=\"", $offset) + 12;
                $endOffset= $this->getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                $carParking->setTendence($dato);
            }

            if($this->getOffset($dati, "\" lat=\"", $offset) !== false){
                $offset= strpos($dati, "\" lat=\"", $offset) + 7;
                $endOffset= $this->getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                $carParking->setLat($dato);
            }

            if($this->getOffset($dati, "\" lng=\"", $offset) !== false){
                $offset= strpos($dati, "\" lng=\"", $offset) + 7;
                $endOffset= $this->getEndOffset($dati, $offset);
                $dato= substr($dati, $offset, $endOffset - $offset);
                $carParking->setLng($dato);
            }

            array_push($listCarParking, $carParking);
            $offset= $endOffset + 1;
        }

        return $listCarParking;
    }

    private function getOffset($dati, $nomeDato, $start){
        $endLine= strpos($dati, "\"/>", $start);
        $offset= strpos($dati, $nomeDato, $start);
        if($offset >= $endLine){
            $offset= false;
        }
        return $offset;
    }

    private function getEndOffset($dati, $start){
        $endOffset= strpos($dati, "\"", $start);
        return $endOffset;
    }

}