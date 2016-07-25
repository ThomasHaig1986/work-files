<?php
class StackTest extends PHPUnit_Framework_TestCase
{
	public function testPushAndPop() {
		$stack = array();
		array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));

        $output = new DoOutput;
        $this->expectOutputString('Hello World');
        $output->writeOutput();
        include('./TestFiles/TestArray.php');
        $testArray = new TestArray;
        $checkArray = $testArray->newArray();
        $this->assertArrayHasKey('foo', $checkArray);
	}
}

class DoOutput {
	public function writeOutput() {
		echo 'Hello World';
	}
}