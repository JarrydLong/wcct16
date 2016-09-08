<?php

class UnitTests extends \PHPUnit_Framework_TestCase{

	use PHPMock;

	public function test_wcct_get_option(){

		$get_option = $this->getFunctionMock('WCCT', 'get_option');

		$get_option->expects($this->once())->with($this->equalTo('wcct_venue'))->willReturn('river-club')

		$this->assertEquals('river-club', wcct_get_option('venue'));


	}

}