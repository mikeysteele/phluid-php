<?php

namespace Phluid;

require_once 'tests/helper.php';

class RequestTest extends \PHPUnit_Framework_TestCase {
    
  public function testAccessors(){
    
    $request = new Request( 'GET', '/' );
    
    $request->something = "Hi";
    
    $this->assertSame( "Hi", $request->something );
    
  }  
  
  public function testBody(){
    $request = new Request( 'POST', '/' );
    $request->setBody( "Hello world" );
    $this->assertSame( "Hello world", $request->getBody() );
  }
    
}