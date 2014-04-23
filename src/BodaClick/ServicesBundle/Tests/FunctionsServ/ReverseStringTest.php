<?php

namespace BodaClick\ServicesBundle\Tests\FunctionsServ;

use BodaClick\ServicesBundle\FunctionsServ\ReverseString;

class ReverseStringTest extends  \PHPUnit_Framework_TestCase{

public function testReversa(){
    //inicializando
        $reversa = new ReverseString();
        $result = $reversa->strReversa('jaime');

        // probando
        $this->assertEquals("emiaj", $result);
    }
}

?>
