<?php
namespace TDD\Test;
// declare(strict_types=1); 
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\SrcFile2; // imports SrcFile class
// Create Test Class

/*
* @covers  TDD\SrcFile
*/
class FileTest2 extends  TestCase {
 
   public function  testInsert() {

       $obj = new SrcFile2(); // dummy object for testing
       $output = $obj->insert("authors", "name, age, address", "'test',2022,'linzerstraße'"); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            "Success", // 1st param is the expected value
           $output, // 2nd param is the $output variable
           'When you run a query you should return a "Success" message' // 3rd param is a message displayed in case of failure
       );
   }
}

