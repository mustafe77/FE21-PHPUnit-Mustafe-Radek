<?php
namespace TDD\Test;
// declare(strict_types=1); 
use PHPUnit\Framework\TestCase; // imports PHPUnit core class called TestCase
use TDD\SrcFile; // imports SrcFile class
// Create Test Class

/*
* @covers  TDD\SrcFile
*/
class FileTest extends  TestCase {
 
   public function  testInsert() {

       $obj = new SrcFile(); // dummy object for testing
       $output = $obj->insert("author", "name, age, address", "'test',20,'linzerstraße'"); // store the sum of the array within a $output variable
        $this->assertEquals( // Built-in assertEquals() method for defining the test. It accepts three parameters
            "Success", // 1st param is the expected value
           $output, // 2nd param is the $output variable
           'When you run a query you should return a "Success" message' // 3rd param is a message displayed in case of failure
       );
   }
}

