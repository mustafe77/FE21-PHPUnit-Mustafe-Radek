<?php
namespace TDD\Test;
// declare(strict_types=1);
use PHPUnit\Framework\TestCase;

// imports PHPUnit core class called TestCase
use TDD\SrcFile1; // imports SrcFile class
// Create Test Class

/*
* @covers TDD\SrcFile
*/
class  FileTest1 extends TestCase {

    public function testSum() {

       $obj = new SrcFile1(); // dummy object for testing    
       $input = [0, 2, 5, 8, 7]; // put the inputs in its own array
       $output = $obj->sum($input); // store the sum of the array within a $output variable
       $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
           22, // 1st param is the expected value
           $output, // 2nd param is the $output variable
           'When summing the total should equal 22'  // 3rd param is a message displayed in case of failure
       );

   }

   public  function testavgCalc() {
    $obj = new SrcFile1(); // dummy object for testing    
    $input = [3, 2, 5, 8, 7]; // put the inputs in its own array
       $output = $obj->sum($input)/count($input);
       $this->assertEquals(5, $output,
            'Wrong averge calculated, expected: 5'   
       );
   }
}