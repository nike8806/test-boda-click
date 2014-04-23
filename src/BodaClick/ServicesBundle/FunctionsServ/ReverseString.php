<?php

namespace BodaClick\ServicesBundle\FunctionsServ;


class ReverseString {

public function strReversa($cadena){
    //inicializando
    $i=0;
        $nuevaCadena="";
        while(isset($cadena[$i])){ 
                $nuevaCadena=$cadena[$i].$nuevaCadena;
                $i++;
        }
        return $nuevaCadena;
    }
}

?>
